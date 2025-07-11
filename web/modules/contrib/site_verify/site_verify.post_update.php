<?php

/**
 * @file
 * Post-updates for the Site Verification module.
 */

use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\Utility\UpdateException;
use Drupal\site_verify\Entity\SiteVerificationType;

/**
 * Batch convert database based verifications into config entity based.
 */
function site_verify_post_update_migrate_db_to_config(array &$sandbox) {
  $database = \Drupal::database();
  $logger = \Drupal::service('logger.channel.site_verify');

  // Setup batch parameters.
  if (!isset($sandbox['index'])) {
    // Database table missing means there are no verifications to migrate.
    if (!$database->schema()->tableExists('site_verify')) {
      $sandbox['#finished'] = 1;
      $logger->info('No site verifications exist to migrate from database.');
      return new TranslatableMarkup('No site verifications exist to migrate from database.');
    }

    // Query all of the svid available in the database. Sorting is only done to
    // get predictable results when testing.
    $svids = $database->select('site_verify', 'sv')
      ->fields('sv', ['svid'])
      ->orderBy('svid', 'ASC')
      ->execute()
      ->fetchAllAssoc('svid');
    $sandbox['svids'] = array_keys($svids);
    if (empty($sandbox['svids'])) {
      // No rows in database. Remove the table and exit the batch.
      if (!$database->schema()->dropTable('site_verify')) {
        $logger->error('Failed to drop table: site_verify');
      }
      $sandbox['#finished'] = 1;
      $logger->info('No site verifications exist to migrate from database. Table removed.');
      return new TranslatableMarkup('No site verifications exist to migrate from database. Table removed.');
    }

    // Add one extra to max to allow for the loop to delete the database table.
    $sandbox['max'] = count($sandbox['svids']) + 1;

    // For naming migrated site verifications.
    $sandbox['num'] = 1;

    // Track success and errors.
    $sandbox['success'] = 0;
    $sandbox['errors'] = [];

    // Initiate processing.
    $sandbox['index'] = 0;
    $sandbox['#finished'] = 0;
  }

  // Get the next id to process. If there are no more to process, that is the
  // end and it's time to remove the database table. Do not drop the table if
  // any of the imports failed.
  $svid = $sandbox['svids'][$sandbox['index']] ?? NULL;
  if (empty($svid)) {
    // Set return state to finished.
    $sandbox['#finished'] = 1;

    // If there are errors, log them to watchdog.
    if (!empty($sandbox['errors'])) {
      foreach ($sandbox['errors'] as $error) {
        $logger->error($error['msg'], $error['params']);
      }

      // Return message including that there are errors.
      return new TranslatableMarkup(
        'Upgrade of @count Site Verifications into @new entries complete. Import FAILED for @failed row; details are logged. Table "site_verify" still contains failed rows.', [
          '@count' => count($sandbox['svids']),
          '@new' => $sandbox['success'],
          '@failed' => count($sandbox['errors']),
        ]
      );
    }
    // Drop the table now that it is no longer in use.
    else {
      if (!$database->schema()->dropTable('site_verify')) {
        $logger->error('Failed to drop table: site_verify');
      }
    }

    // Only success message.
    return new TranslatableMarkup(
      'Upgrade of @count Site Verifications into @new entries complete.', [
        '@count' => count($sandbox['svids']),
        '@new' => $sandbox['success'],
      ]
    );
  }

  // Load the db row.
  $db_sv = $database->select('site_verify', 'sv')
    ->fields('sv')
    ->condition('svid', $svid)
    ->execute()
    ->fetchAssoc();
  $delete_db_row = TRUE;

  // Check the row for each possible type and import it.
  $site_verification_storage = \Drupal::entityTypeManager()
    ->getStorage('site_verification');
  foreach (SiteVerificationType::cases() as $type) {
    if ($data = _site_verify_get_type_from_db($sandbox['num'], $db_sv, $type)) {

      // Create and validate site_verification entity.
      $verification = $site_verification_storage->create($data);
      if ($violations = $verification->validate()) {
        $sandbox['errors'][$db_sv['svid']] = [
          'msg' => 'Failed import svid:@id::@field: @error',
          'params' => [
            '@id' => $db_sv['svid'],
            '@field' => $violations[0]->getPropertyPath(),
            '@error' => $violations[0]->getMessage(),
          ],
        ];
        $delete_db_row = FALSE;
      }
      // Valid entity can be saved.
      else {
        $site_verification_storage->save($verification);
        $sandbox['success']++;
        $sandbox['num']++;
      }
    }
  }

  // Delete row on success.
  if ($delete_db_row) {
    $database->delete('site_verify')
      ->condition('svid', $svid)
      ->execute();
  }

  // Move to next item to process and finished check.
  $sandbox['index']++;
  if ($sandbox['index'] >= $sandbox['max']) {
    throw new UpdateException('Logic failure. Finished task should have already run.');
  }

  // Update progress and return.
  $sandbox['#finished'] = (float) $sandbox['index'] / (float) $sandbox['max'];
}

/**
 * Return a built entity of the given type based on the database row.
 *
 * @param int $index
 *   The import number to be included into the label and id.
 * @param array $row
 *   A site_verify table row to be migrated.
 * @param \Drupal\site_verify\Entity\SiteVerificationType $type
 *   The desired type to build from the row.
 *
 * @return array
 *   A build entity data array ready for creation.
 */
function _site_verify_get_type_from_db(
  int $index,
  array $row,
  SiteVerificationType $type,
): array {
  // Return empty array if type is not present in row.
  if (SiteVerificationType::File == $type && empty($row['file'])) {
    return [];
  }
  elseif (SiteVerificationType::Meta == $type && empty($row['meta'])) {
    return [];
  }

  // Replicate the machine and human names of the former engines.
  static $engines = [
    'google' => 'Google',
    'yahoo' => 'Yahoo',
    'bing' => 'Bing',
    'yandex' => 'Yandex',
    'custom' => 'Custom',
    'default' => 'Other',
  ];

  // Create data array defaulting to file based.
  $data = [
    'id' => implode('_', [$row['engine'], $index]),
    'label' => new TranslatableMarkup('@engine @num', [
      '@engine' => $engines[$row['engine']] ?? $engines['default'],
      '@num' => $index,
    ]),
    'status' => TRUE,
    'description' => new TranslatableMarkup('Source svid: @old_id', [
      '@old_id' => $row['svid'],
    ]),
    'type' => $type->value,
    'name' => $row['file'],
    'content' => $row['file_contents'],
  ];
  if ($type == SiteVerificationType::File) {
    return $data;
  }

  // Guard against future changes to type not defaulting to Meta type.
  if ($type != SiteVerificationType::Meta) {
    throw new UpdateException('Unhandled type: ' . $type->value);
  }

  // Extract the name and content from the meta tag contents. Use the method
  // from the old module to avoid introducing an unknown bug.
  if (!preg_match('/name="(.*)" content/', $row['meta'], $name)) {
    \Drupal::logger('site_verify')->error(
      'Failed to match name regex from: @metatag', [
        '@metatag' => $row['meta'],
      ]
    );
    return [];
  }
  if (!preg_match('/content="(.*)"/', $row['meta'], $content)) {
    \Drupal::logger('site_verify')->error(
      'Failed to match content regex from: @metatag', [
        '@metatag' => $row['meta'],
      ]
    );
    return [];
  }
  $data['name'] = $name[1];
  $data['content'] = $content[1];
  return $data;
}
