<?php

declare(strict_types=1);

namespace Drupal\Tests\site_verify\Functional;

use Drupal\Component\Serialization\Yaml;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests importing SiteVerification config entities.
 *
 * @group site_verify
 */
class SiteVerifyImportTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected bool $usesSuperUserAccessPolicy = FALSE;

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'config',
    'system',
    'site_verify',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * A user with permissions to administer verifications and config import.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $adminUser;

  /**
   * SiteVerification entity storage.
   *
   * @var \Drupal\Core\Entity\EntityStorageInterface
   */
  protected $storage;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->adminUser = $this->drupalCreateUser([
      'administer site verify',
      'manage file based site verifications',
      'import configuration',
    ]);

    $this->storage = \Drupal::entityTypeManager()
      ->getStorage('site_verification');

    $this->drupalLogin($this->adminUser);
  }

  /**
   * Test importing SiteVerification config entities.
   */
  public function testSiteVerifyImport(): void {

    // Confirm the common parts of the system are working as needed before
    // doing multiple test scenarios relying on them.
    $this->drupalGet('admin/config/development/configuration/single/import');
    $this->assertSession()->statusCodeEquals(200);
    $this->drupalGet('admin/config/search/verifications');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->pageTextContains('There are no site verification entities yet.');

    foreach (static::siteImportDataProvider() as $case) {
      $this->doSiteVerifyImport($case[0], $case[1]);
    }
  }

  /**
   * Do the actual test importing SiteVerification config entities.
   *
   * @param string $input
   *   The input string to be submitted to Single import.
   * @param array $expected
   *   Expected output from this import attempt.
   */
  protected function doSiteVerifyImport($input, $expected): void {
    // The entity must not exist before attempting import.
    $this->assertNull($this->storage->load($input['id']));

    // Prepare the config to import.
    $edit = [
      'config_type' => 'site_verification',
      'import' => Yaml::encode($input),
    ];

    // Attempt the import of the site verification.
    $this->drupalGet('admin/config/development/configuration/single/import');
    $this->submitForm($edit, 'Import');
    $this->assertSession()->pageTextContains('Are you sure you want to create a new ' . $input['id'] . ' site verification?');
    $this->submitForm([], 'Confirm');

    // Check for expected and missing texts.
    foreach ($expected['text'] ?? [] as $text) {
      $this->assertSession()->pageTextContains($text);
    }
    foreach ($expected['not_text'] ?? [] as $not_text) {
      $this->assertSession()->pageTextNotContains($not_text);
    }

    // Entity must now exist in storage.
    if ($input['exists'] ?? FALSE) {
      $entity = $this->storage->load($input['id']);
      $this->assertSame($input['name'], $entity->getName());
      $this->assertSame($input['content'], $entity->getContent());
      $this->assertSame($input['description'], $entity->getDescription());
      $this->assertTrue($entity->isValid());
    }

    // Confirm the output is present on the verifications page.
    if ($expected['listing'] ?? FALSE) {
      $this->drupalGet('admin/config/search/verifications');
      $this->assertSession()->pageTextContains($expected['listing']);
    }
  }

  /**
   * Data provider for testSiteVerifyImport test.
   *
   * These test cases should focus on failures specific to this module and not
   * failures that could happen in core.
   *
   * @return \Generator
   *   An array of testing values.
   */
  public static function siteImportDataProvider(): \Generator {
    yield [
      [
        'uuid' => '12d5ae90-abd6-40d8-bfb1-fc2d40688801',
        'langcode' => 'en',
        'status' => TRUE,
        'id' => 'import_example_1',
        'label' => 'Import Example 1',
        'description' => 'A working meta tag site verification import',
        'type' => 'meta',
        'name' => 'test-site-verification',
        'content' => 'test-import-example-1-contents',
      ],
      [
        'listing' => 'Import Example 1',
        'exists' => TRUE,
        'text' => [
          'The configuration was imported successfully.',
        ],
        'not_text' => [
          'The configuration was imported with errors.',
        ],
      ],
    ];

    yield [
      [
        'uuid' => '2cb579b4-7400-4d57-bcec-7040a244820f',
        'langcode' => 'en',
        'status' => TRUE,
        'id' => 'import_example_2',
        'label' => 'Import Example 2',
        'description' => 'A working file site verification import',
        'type' => 'file',
        'name' => 'test-site-verification.html',
        'content' => 'test-import-example-2-contents',
      ],
      [
        'listing' => 'Import Example 2',
        'exists' => TRUE,
        'text' => [
          'The configuration was imported successfully.',
        ],
        'not_text' => [
          'The configuration was imported with errors.',
        ],
      ],
    ];

    yield [
      [
        'uuid' => '3d157cab-4a61-4214-a606-e9a4dd3beb5e',
        'langcode' => 'en',
        'status' => TRUE,
        'id' => 'import_example_3',
        'label' => 'Import Example 3',
        'description' => 'An invalid file site verification import',
        'type' => 'file',
        'name' => "test-site-verif\0x0Dication.html",
        'content' => 'test-import-example-3-contents',
      ],
      [
        'listing' => FALSE,
        'exists' => FALSE,
        'text' => [
          'Unexpected error during import with operation create for site_verify.site_verification.import_example_3: Entity is not valid, cannot be saved.',
          'The configuration was imported with errors.',
        ],
        'not_text' => [
          'The configuration was imported successfully.',
        ],
      ],
    ];
  }

}
