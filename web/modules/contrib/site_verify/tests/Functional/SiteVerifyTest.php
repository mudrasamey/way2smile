<?php

declare(strict_types=1);

namespace Drupal\Tests\site_verify\Functional;

use Drupal\Core\Entity\EntityStorageException;
use Drupal\Tests\BrowserTestBase;
use Drupal\site_verify\Entity\SiteVerificationType;

/**
 * Tests functionality of the admin forms and verification modes.
 *
 * @group site_verify
 */
class SiteVerifyTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected bool $usesSuperUserAccessPolicy = FALSE;

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'node',
    'system',
    'site_verify',
    'site_verify_bad_type',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * A user with all site verify module permissions.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $adminUser;

  /**
   * A user with only the "administer site verify" permissions.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $adminLimitedUser;

  /**
   * The nid of a non-front page node.
   *
   * @var int
   */
  protected $otherNodeId;

  /**
   * Entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    // Set the needed services.
    $this->entityTypeManager = $this->container->get('entity_type.manager');

    // An admin user who can manage site verity verifications.
    $this->adminUser = $this->drupalCreateUser([
      'administer site verify',
      'manage file based site verifications',
    ]);

    // An admin user who can only manage meta type verifications.
    $this->adminLimitedUser = $this->drupalCreateUser([
      'administer site verify',
    ]);

    // Add a content type and set a node as front page.
    $this->drupalCreateContentType(['type' => 'front']);
    $test_node = $this->drupalCreateNode([
      'type' => 'front',
      'title' => $this->randomMachineName(8),
    ]);
    $this->config('system.site')
      ->set('page.front', '/node/' . $test_node->id())
      ->save();

    // Add an extra node which is not the front page.
    $this->otherNodeId = $this->drupalCreateNode([
      'type' => 'front',
      'title' => $this->randomMachineName(8),
    ])->id();
  }

  /**
   * Test Generate Password alter user forms.
   */
  public function testAdminAndFunction(): void {
    // Normal user cannot access the admin page.
    $this->drupalGet('admin/config/search/verifications');
    $this->assertSession()->statusCodeEquals(403);
    $this->drupalGet('admin/config/search/verifications/add');
    $this->assertSession()->statusCodeEquals(403);

    // Admin user can access verifications. And there are presently none.
    $this->drupalLogin($this->adminUser);
    $this->drupalGet('admin/config/search/verifications');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->pageTextContains('There are no site verification entities yet.');

    // Add a meta verification.
    $this->drupalGet('admin/config/search/verifications/add');
    $this->assertSession()->statusCodeEquals(200);
    $this->submitForm([
      'label' => 'Google',
      'id' => 'google',
      'description' => 'A test verification',
      'type' => 'meta',
      'name' => 'google-site-verification',
      'content' => 'NbwaW3WIDp_SPsSsfl78Ive7F34-znm9lxLJXjuWNGE',
    ], 'Save');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->pageTextContains('Site Verification Google saved.');

    // File based verification using fields entry.
    $this->drupalGet('admin/config/search/verifications/add');
    $this->submitForm([
      'label' => 'Google File',
      'id' => 'google_file',
      'description' => 'A test verification',
      'type' => 'file',
      'name' => 'googleb5741169901f6c20.html',
      'content' => 'google-site-verification: googleb5741169901f6c20.html',
    ], 'Save');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->pageTextContains('Site Verification Google File saved.');

    // Logout as admin and check access as anonymous user.
    $this->drupalLogout();

    // File based verification.
    $this->drupalGet('googleb5741169901f6c20.html');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->pageTextContains('google-site-verification: googleb5741169901f6c20.html');

    // Meta tag based verification appears on front page.
    $this->drupalGet('<front>');
    $this->assertSession()->statusCodeEquals(200);
    $xpath = $this->xpath("//meta[@name='google-site-verification']");
    $this->assertCount(1, $xpath);
    $this->assertEquals(
      'NbwaW3WIDp_SPsSsfl78Ive7F34-znm9lxLJXjuWNGE',
      $xpath[0]->getAttribute('content')
    );

    // Meta tag does not appear on other page.
    $this->drupalGet('node/' . $this->otherNodeId);
    $this->assertSession()->statusCodeEquals(200);
    $xpath = $this->xpath("//meta[@name='google-site-verification']");
    $this->assertCount(0, $xpath);

    // Login as admin to delete verifications.
    $this->drupalLogin($this->adminUser);

    // Get a list of the verifications.
    $verifications = \Drupal::entityTypeManager()
      ->getStorage('site_verification')
      ->loadMultiple();

    // Wipe each in turn and verify they have been removed.
    foreach ($verifications as $verification) {
      $this->drupalGet("admin/config/search/verifications/{$verification->id()}/delete");
      $this->assertSession()->statusCodeEquals(200);
      $this->assertSession()->pageTextContains('Are you sure you want to delete the site verification');
      $this->submitForm([], 'Delete');

      if ($verification->getType() == SiteVerificationType::Meta) {
        $this->drupalGet('<front>');
        $this->assertSession()->statusCodeEquals(200);
        $xpath = $this->xpath("//meta[@name='google-site-verification']");
        $this->assertCount(0, $xpath);
      }
      elseif ($verification->getType() == SiteVerificationType::File) {
        $this->drupalGet($verification->getFilename());
        $this->assertSession()->statusCodeEquals(404);
      }
      else {
        throw new \Exception('Unhandled verification type: ' . $verification->getType()->value);
      }
    }
  }

  /**
   * Test the manage file based site verifications permission protections.
   */
  public function testFileValidationPermission(): void {
    // Login as user with all permissions to create a file permission.
    $this->drupalLogin($this->adminUser);

    // Create a file based verification.
    $this->drupalGet('admin/config/search/verifications/add');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->fieldExists('type');
    $this->checkTypes(['meta', 'file', 'bad_type']);
    $this->submitForm([
      'label' => 'File Verification',
      'id' => 'file_verify',
      'description' => 'A file based verification',
      'type' => 'file',
      'name' => 'file-verification.html',
      'content' => 'file-verification: file-verification-b5741169901f6c20.html',
    ], 'Save');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()
      ->pageTextContains('Site Verification File Verification saved.');

    // All of the operations are available for this admin.
    $number_of_links = 3;
    $number_of_links_found = 0;
    $operation_links = $this->xpath('//ul[@class = "dropbutton"]/li/a');
    $url = base_path() . 'admin/config/search/verifications/file_verify';
    $dest = '?destination=' . base_path() . 'admin/config/search/verifications';
    foreach ($operation_links as $link) {
      switch ($link->getText()) {
        case 'Edit':
          $this->assertSame("$url/edit$dest", $link->getAttribute('href'));
          $number_of_links_found++;
          break;

        case 'Disable':
          $this->assertSame("$url/disable$dest", $link->getAttribute('href'));
          $number_of_links_found++;
          break;

        case 'Delete':
          $this->assertSame("$url/delete$dest", $link->getAttribute('href'));
          $number_of_links_found++;
          break;

        default:
          $this->assertEquals(0, 1, 'Unexpected operation: ' . $link->getOuterHtml());

      }
    }
    $this->assertEquals($number_of_links, $number_of_links_found);

    // Added file based verification works.
    $this->drupalGet('file-verification.html');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()
      ->pageTextContains('file-verification: file-verification-b5741169901f6c20.html');

    // Login as limited admin user.
    $this->drupalLogin($this->adminLimitedUser);

    // Verify the user can see the added verification.
    $this->drupalGet('admin/config/search/verifications');
    $this->assertSession()
      ->pageTextContains('A file based verification');

    // None of the operations are available for this limited admin.
    $operation_links = $this->xpath('//ul[@class = "dropbutton"]/li/a');
    $this->assertCount(0, $operation_links);
    $this->assertSession()->pageTextNotContains('Edit');
    $this->assertSession()->pageTextNotContains('Disable');
    $this->assertSession()->pageTextNotContains('Edit');

    // Check verification creation is limited to meta tag.
    $this->drupalGet('admin/config/search/verifications/add');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->fieldExists('type');
    $this->checkTypes(['meta', 'bad_type']);
    $this->assertSession()->pageTextContains(
      'Only Meta tag type available as "Manage file type site verifications" permission not granted to your role.'
    );
    $this->assertSession()->buttonExists('Paste a meta tag');
    $this->assertSession()->buttonNotExists('Upload a file');

    // Create a meta tag.
    $this->submitForm([
      'label' => 'Meta Verification',
      'id' => 'meta_verify',
      'description' => 'A meta tag based verification',
      'type' => 'meta',
      'name' => 'metatag-verification',
      'content' => 'metatag-verification: meta-verification-b5741169901f6c20',
    ], 'Save');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()
      ->pageTextContains('Site Verification Meta Verification saved.');
  }

  /**
   * Check the input tags for the type radios.
   *
   * @param array $expected_types
   *   The expected types to find.
   */
  protected function checkTypes(array $expected_types): void {
    $type_inputs = $this->xpath('//select[@id="edit-type"]/option');
    $this->assertCount(count($expected_types), $type_inputs);
    foreach ($type_inputs as $input) {
      // Input must be in the expected types.
      $this->assertTrue(
        in_array($input->getValue(), $expected_types),
        'Unexpected type input: ' . $input->getOuterHtml()
      );
    }
  }

  /**
   * Test the validation constraints via form submission.
   */
  public function testFormConstraintViolations(): void {
    $this->drupalLogin($this->adminUser);

    // Directly call data provider to speed up execution.
    foreach ($this->constraintViolationsDataProvider(FALSE) as $data) {
      $this->drupalGet('admin/config/search/verifications/add');
      $this->submitForm($data['submit'], 'Save');
      $this->assertSession()->statusCodeEquals($data['status_code']);
      foreach ($data['expected_form'] as $expected) {
        $this->assertSession()->pageTextContains($expected);
      }
    }
  }

  /**
   * Test the validation constraints via entity api creation.
   */
  public function testApiConstraintViolations(): void {
    $site_verification_storage = $this->entityTypeManager
      ->getStorage('site_verification');

    foreach ($this->constraintViolationsDataProvider(TRUE) as $data) {
      $verification = $site_verification_storage->create($data['submit']);
      if ($violations = $verification->validate()) {
        $this->assertEquals(
          count($data['expected_api']),
          count($violations),
          'Different number of violations expected.'
        );
        foreach ($violations as $violation) {
          $this->assertTrue(
            in_array($violation->getMessage(), $data['expected_api']),
            'Was not expecting violation: ' . $violation->getMessage()
          );
        }
      }
      // Save the verification.
      else {
        $this->assertEmpty(
          $data['expected_api'],
          implode(': ', [
            'Expected violations did not occur',
            $verification->id(),
          ])
        );
        $this->assertTrue(
          $verification->isValid(),
          implode(': ', [
            'Site Verification was expected to be valid but it is not',
            $verification->id(),
          ])
        );
        try {
          $site_verification_storage->save($verification);
          $this->assertFalse(
            $data['exception'],
            implode(': ', [
              'Expecting EntityStorageException but it did not happen',
              $verification->id(),
            ])
          );
        }
        catch (EntityStorageException $e) {
          $this->assertTrue(
            $data['exception'],
            implode(': ', [
              'NOT expecting EntityStorageException but got one anyway',
              $verification->id(),
            ])
          );
        }
      }
    }
  }

  /**
   * Data provider for testing constraint violations.
   *
   * @param bool $all
   *   Include all cases.
   *
   * @return \Generator
   *   Array for form inputs and expected text.
   */
  public static function constraintViolationsDataProvider(bool $all): \Generator {
    // OK: An entry to test against the others.
    yield [
      'submit' => [
        'label' => 'Google File',
        'id' => 'google_file',
        'description' => 'A test file verification',
        'type' => 'file',
        'name' => 'googleb5741169901f6c20.html',
        'content' => 'google-site-verification: googleb5741169901f6c20.html',
      ],
      'status_code' => 200,
      'expected_form' => [
        'Site Verification Google File saved.',
      ],
      'expected_api' => [],
      'exception' => FALSE,
    ];

    // OK: Meta tag with same name as file does not encounter violation.
    yield [
      'submit' => [
        'label' => 'Google Meta',
        'id' => 'google_meta',
        'description' => 'A test meta verification with clashed name',
        'type' => 'meta',
        'name' => 'googleb5741169901f6c20.html',
        'content' => 'google-site-verification: googleb5741169901f6c20.html',
      ],
      'status_code' => 200,
      'expected_form' => [
        'Site Verification Google Meta saved.',
      ],
      'expected_api' => [],
      'exception' => FALSE,
    ];

    // Violation: Duplicate machine name.
    yield [
      'submit' => [
        'label' => 'Google File',
        'id' => 'google_file',
        'description' => 'Duplicate machine name.',
        'type' => 'file',
        'name' => 'googleb5741169901f6c20.html',
        'content' => 'google-site-verification: googleb5741169901f6c20.html',
      ],
      'status_code' => 200,
      'expected_form' => [
        'The machine-readable name is already in use. It must be unique.',
      ],
      // NB: Actually expecting a violation here, but it's not occurring as
      // there does not seem to be a machine_name uniqueness constraint except
      // in form. Expecting:
      // 'The machine-readable name is already in use. It must be unique.'.
      'expected_api' => [],
      'exception' => TRUE,
    ];

    // Violation: Duplicate filename.
    yield [
      'submit' => [
        'label' => 'Google File Dup',
        'id' => 'google_file_dup',
        'description' => 'Pre-existing filename.',
        'type' => 'file',
        'name' => 'googleb5741169901f6c20.html',
        'content' => 'google-site-verification: googleb5741169901f6c20.html',
      ],
      'status_code' => 200,
      'expected_form' => [
        'Filename googleb5741169901f6c20.html is already in use by another site verification.',
      ],
      'expected_api' => [
        'Filename <em class="placeholder">googleb5741169901f6c20.html</em> is already in use by another site verification.',
      ],
      'exception' => FALSE,
    ];

    // Violation: Bad type; extra option added by site_verify_bad_type module.
    if ($all) {
      // @todo This cannot be tested as it causes an error inside drupal core.
      // See the example error output below.
      yield [
        'submit' => [
          'label' => 'A bad type',
          'id' => 'bad_type_error',
          'description' => 'Using a bad type inserted into form.',
          'type' => 'bad_type',
          'name' => 'bad_type.html',
          'content' => 'bad type content',
        ],
        'status_code' => 200,
        // This expected fails as detailed above.
        'expected_form' => [
          'The value you selected is not a valid choice.',
        ],
        'expected_api' => [
          'The value you selected is not a valid choice.',
        ],
        'exception' => FALSE,
      ];
    }

    // Violation: Control character in description.
    if ($all) {
      // @todo This cannot be tested as it causes an error inside drupal core
      // when attempting to format the error message:
      // 1) Drupal\Tests\site_verify\Functional\SiteVerifyTest::testConstraintViolations
      // Exception: User warning: Placeholders must begin with one of the
      // following "@", ":" or "%", invalid placeholder ({{ value }}) with
      // string: "Description is not allowed to span multiple lines or contain
      // control characters."
      // Drupal\Component\Render\FormattableMarkup::placeholderFormat()()
      // (Line: 247)
      yield [
        'submit' => [
          'label' => 'Google File Dup',
          'id' => 'google_file_dup',
          'description' => "A test\x09verification",
          'type' => 'file',
          'name' => 'non-clashing-filename.txt',
          'content' => 'google-site-verification: googleb5741169901f6c20.html',
        ],
        'status_code' => 200,
        // This expected fails as detailed above.
        'expected_form' => [
          'Description is not allowed to span multiple lines or contain control characters.',
        ],
        'expected_api' => [
          'Description is not allowed to span multiple lines or contain control characters.',
        ],
        'exception' => FALSE,
      ];
    }
  }

}
