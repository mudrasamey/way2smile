<?php

declare(strict_types=1);

namespace Drupal\Tests\site_verify\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\site_verify\Entity\SiteVerificationType;

/**
 * Tests upgrading site_verify from database storage to ConfigEntity storage.
 *
 * @group site_verify
 */
class MajorUpgradeTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected bool $usesSuperUserAccessPolicy = FALSE;

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'dblog',
    'field',
    'file',
    'node',
    'system',
    'site_verify',
    'site_verify_old_schema',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * A user with "administer site verify" permissions.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $adminUser;

  /**
   * Database connection.
   *
   * @var \Drupal\Core\Database\Connection
   */
  protected $database;

  /**
   * Entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * Module handler service.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    // Set the needed services.
    $this->database = $this->container->get('database');
    $this->entityTypeManager = $this->container->get('entity_type.manager');
    $this->moduleHandler = $this->container->get('module_handler');

    // An admin user who can manage site verity verifications.
    $this->adminUser = $this->drupalCreateUser([
      'access site reports',
      'administer site verify',
      'manage file based site verifications',
    ]);
  }

  /**
   * Test upgrading from 2.x/2.1.x branch site verifications.
   *
   * @dataProvider majorUpgradeDataProvider
   */
  public function testMajorUpgrade($input, $output, $result, $db_table): void {
    // Confirm that there are zero existing config entity type verifications.
    $site_verification_storage = $this->entityTypeManager
      ->getStorage('site_verification');
    $verification_ids = $site_verification_storage->getQuery()
      ->accessCheck(FALSE)
      ->execute();
    $this->assertCount(
      0,
      $verification_ids,
      'A ConfigEntity based SiteVerification exist when not expected.'
    );

    // Insert all of the examples into the database.
    $old_count = 0;
    foreach ($input as $example) {
      $this->database->insert('site_verify')
        ->fields($example)
        ->execute();
      $old_count++;
    }

    // Confirm there are expected number of verifications in the database.
    $db_verifications = $this->database->select('site_verify', 'sv')
      ->fields('sv')
      ->execute()
      ->fetchAllAssoc('svid');
    $this->assertCount(
      $old_count,
      $db_verifications,
      'DB based site verifications not in the database.'
    );

    // Include and run the update.
    $this->moduleHandler->loadInclude(
      'site_verify',
      'php',
      'site_verify.post_update'
    );
    $this->assertTrue(
      function_exists('site_verify_post_update_migrate_db_to_config'),
      'Post-update migration function not found.'
    );
    $sandbox = [];
    do {
      $sandbox['#finished'] = 1;
      $final_message = site_verify_post_update_migrate_db_to_config($sandbox);
    } while ($sandbox['#finished'] < 1);

    // There are logging messages possible displayed that might help a developer
    // with some random failure in the future.
    $this->drupalLogin($this->adminUser);
    $this->drupalGet('admin/reports/dblog');
    $this->assertSession()->statusCodeEquals(200);

    // Show the verification page, again for the developer.
    $this->drupalGet('admin/config/search/verifications');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->pageTextNotContains('There are no site verification entities yet.');

    // Final message to be compared to expected result.
    $this->assertEquals(
      $final_message->getUntranslatedString(),
      $result['message'],
      'Post-update return message does not match expected result'
    );
    $final_args = $final_message->getArguments();
    foreach ($result['args'] as $arg => $value) {
      $this->assertEquals($final_args[$arg], $value);
    }

    // Confirm each of the verifications has made it to a config entity.
    foreach ($output as $expected) {
      $verification = $site_verification_storage->load($expected['id']);
      $this->assertNotEmpty(
        $verification,
        'Unable to load expected site verification: ' . $expected['id']
      );

      // Check each of the values.
      $this->assertEquals($verification->getType(), $expected['type']);
      $this->assertEquals($verification->getName(), $expected['name']);
      $this->assertEquals($verification->getContent(), $expected['content']);
    }

    // Confirm the database table has been deleted or not.
    $this->assertEquals(
      $this->database->schema()->tableExists('site_verify'),
      $db_table
    );
  }

  /**
   * Provide example inputs and expected results of major upgrade.
   *
   * @return \Generator
   *   An array with keys input, output, result, db_table.
   */
  public static function majorUpgradeDataProvider(): \Generator {
    // Perfectly working situation.
    yield [
      'input' => [
        // A verification with both file and meta tag.
        [
          'engine' => 'google',
          'file' => 'a-file.txt',
          'file_contents' => '',
          'meta' => '<meta name="google-site-verification" content="NbwaW3WIDp" />',
        ],
        // A verification with just an empty file.
        [
          'engine' => 'custom',
          'file' => 'an-empty-file.txt',
          'file_contents' => '',
          'meta' => '',
        ],
        // A verification with just a meta. Same meta name.
        [
          'engine' => 'google',
          'file' => NULL,
          'file_contents' => '',
          'meta' => '<meta name="google-site-verification" content="X6-UYtB5Z5" />',
        ],
        // A Yahoo verification which should not phase the new system.
        [
          'engine' => 'yahoo',
          'file' => 'yahoo.html',
          'file_contents' => 'Contents of verification file.',
          'meta' => '',
        ],
      ],
      'output' => [
        [
          'id' => 'google_1',
          'type' => SiteVerificationType::File,
          'name' => 'a-file.txt',
          'content' => '',
        ],
        [
          'id' => 'google_2',
          'type' => SiteVerificationType::Meta,
          'name' => 'google-site-verification',
          'content' => 'NbwaW3WIDp',
        ],
        [
          'id' => 'custom_3',
          'type' => SiteVerificationType::File,
          'name' => 'an-empty-file.txt',
          'content' => '',
        ],
        [
          'id' => 'google_4',
          'type' => SiteVerificationType::Meta,
          'name' => 'google-site-verification',
          'content' => 'X6-UYtB5Z5',
        ],
        [
          'id' => 'yahoo_5',
          'type' => SiteVerificationType::File,
          'name' => 'yahoo.html',
          'content' => 'Contents of verification file.',
        ],
      ],
      'result' => [
        'message' => 'Upgrade of @count Site Verifications into @new entries complete.',
        'args' => [
          '@count' => 4,
          '@new' => 5,
        ],
      ],
      'db_table' => FALSE,
    ];

    // An upgrade that reports a duplicate file error.
    yield [
      'input' => [
        // A verification with both file and meta tag.
        [
          'engine' => 'google',
          'file' => 'a-file.txt',
          'file_contents' => '',
          'meta' => '<meta name="google-site-verification" content="NbwaW3WIDp" />',
        ],
        // A verification with a clashing filename.
        [
          'engine' => 'custom',
          'file' => 'a-file.txt',
          'file_contents' => '',
          'meta' => 'This is going to cause a failure.',
        ],
        // A verification with just a meta. Same meta name, after a failed one.
        [
          'engine' => 'google',
          'file' => NULL,
          'file_contents' => '',
          'meta' => '<meta name="google-site-verification" content="X6-UYtB5Z5" />',
        ],
      ],
      'output' => [
        [
          'id' => 'google_1',
          'type' => SiteVerificationType::File,
          'name' => 'a-file.txt',
          'content' => '',
        ],
        [
          'id' => 'google_2',
          'type' => SiteVerificationType::Meta,
          'name' => 'google-site-verification',
          'content' => 'NbwaW3WIDp',
        ],
        [
          'id' => 'google_3',
          'type' => SiteVerificationType::Meta,
          'name' => 'google-site-verification',
          'content' => 'X6-UYtB5Z5',
        ],
      ],
      'result' => [
        'message' => 'Upgrade of @count Site Verifications into @new entries complete. Import FAILED for @failed row; details are logged. Table "site_verify" still contains failed rows.',
        'args' => [
          '@count' => 3,
          '@new' => 3,
        ],
      ],
      'db_table' => TRUE,
    ];
  }

}
