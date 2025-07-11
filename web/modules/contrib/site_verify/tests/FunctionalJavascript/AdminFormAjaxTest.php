<?php

declare(strict_types=1);

namespace Drupal\Tests\site_verify\FunctionalJavascript;

use Drupal\Core\Url;
use Drupal\FunctionalJavascriptTests\WebDriverTestBase;
use Drupal\Tests\TestFileCreationTrait;

/**
 * Tests the ajax interaction and helpers in the admin form.
 *
 * @group site_verify
 */
class AdminFormAjaxTest extends WebDriverTestBase {

  use TestFileCreationTrait;

  /**
   * {@inheritdoc}
   */
  protected bool $usesSuperUserAccessPolicy = FALSE;

  /**
   * File system service.
   *
   * @var \Drupal\Core\File\FileSystemInterface
   */
  protected $fileSystem;

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'file',
    'site_verify',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * A user with administer and manage permissions for site verify.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $adminUser;

  /**
   * A user with only administer site verify permission.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $adminLimitedUser;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->fileSystem = $this->container->get('file_system');

    // An admin user who can manage site verity verifications.
    $this->adminUser = $this->drupalCreateUser([
      'administer site verify',
      'manage file based site verifications',
    ]);

    // An admin user who can only manage meta tags.
    $this->adminLimitedUser = $this->drupalCreateUser([
      'administer site verify',
    ]);
  }

  /**
   * Test creating a site verification using the meta tag helper and ajax.
   */
  public function testAdminAjaxMetaForm(): void {
    $this->drupalLogin($this->adminUser);

    // There are no verifications at start.
    $list_url = Url::fromRoute('entity.site_verification.collection');
    $this->drupalGet($list_url);
    $this->assertSession()
      ->pageTextContains('There are no site verification entities yet.');

    // Add a meta verification.
    $add_url = Url::fromRoute('entity.site_verification.add_form');
    $this->drupalGet($add_url);
    $page = $this->getSession()->getPage();

    // Fill in identity to enable buttons.
    $page->find('css', '[name="label"]')
      ->setValue('Ajax Meta Verification');
    $page->find('css', '[name="description"]')
      ->setValue('Ajax Meta Verification Description');
    $type = $this->assertSession()
      ->waitForElementVisible('css', '[name="type"]');
    $this->assertNotEmpty($type);

    // Move to Paste a meta tag input mode.
    $page = $this->getSession()->getPage();
    $page->pressButton('Paste a meta tag');
    $meta_helper = $this->assertSession()
      ->waitForElementVisible('css', '[name="meta_helper"]');
    $this->assertNotEmpty($meta_helper);

    // Fill in the meta helper field.
    $page = $this->getSession()->getPage();
    $page->find('css', '[name="meta_helper"]')
      ->setValue('<meta name="google-site-verification" content="NbwaW3WIDp_SPsSsfl78Ive7F34-znm9lxLJXjuWNGE" />');

    // Full form submit.
    $this->submitForm([], 'Save');

    // Successfully created and redirected to correct location.
    $this->assertSession()
      ->pageTextContains('Site Verification Ajax Meta Verification saved.');
    $this->assertSession()->addressEquals($list_url);
    $this->assertSession()
      ->pageTextContains('Ajax Meta Verification Description');

    // Load entity list and confirm it is showing one.
    $this->drupalGet($list_url);
    $this->assertSession()
      ->pageTextNotContains('There are no site verification entities yet.');
  }

  /**
   * Test creating a site verification using the file upload helper and ajax.
   */
  public function testAdminAjaxFileForm(): void {
    $this->drupalLogin($this->adminUser);

    $list_url = Url::fromRoute('entity.site_verification.collection');
    $this->drupalGet($list_url);
    $this->assertSession()
      ->pageTextContains('There are no site verification entities yet.');

    // Add a file verification.
    $add_url = Url::fromRoute('entity.site_verification.add_form');
    $this->drupalGet($add_url);
    $page = $this->getSession()->getPage();

    // Fill in identity to enable buttons.
    $page->find('css', '[name="label"]')
      ->setValue('Ajax File Verification');
    $page->find('css', '[name="description"]')
      ->setValue('Ajax File Verification Description');
    $type = $this->assertSession()
      ->waitForElementVisible('css', '[name="type"]');
    $this->assertNotEmpty($type);

    // Check that "File" is an available type. This proves existence which is
    // the opposite of the non-existence in ::testAdminLimitedForm().
    $page = $this->getSession()->getPage();
    $file_type = $page->find('xpath', '//select[@data-drupal-selector="edit-type"]//option[@value="file"]');
    $this->assertNotEmpty($file_type);

    // The "Upload a file" button must exist. In concert with the non-exist
    // check in ::testAdminLimitedForm().
    $this->assertNotEmpty($page->findButton('edit-input-file'));

    // Move to Upload a file.
    $page->pressButton('Upload a file');
    $file_helper = $this->assertSession()
      ->waitForElementVisible('css', '[name="files[file_helper]"]');
    $this->assertNotEmpty($file_helper);

    // Create a random file to upload. Smallest possible size is 1024.
    $test_file = current($this->getTestFiles('text', 1024));

    // Fill in the file_helper field - special naming as it's a file upload.
    $page = $this->getSession()->getPage();
    $page->attachFileToField(
      'files[file_helper]',
      $this->fileSystem->realpath($test_file->uri)
    );
    $uploaded_file = $this->assertSession()
      ->waitForElement('css', '.file--text');
    $this->assertNotEmpty($uploaded_file);

    // Full form submit.
    $this->submitForm([], 'Save');

    // Successfully created and redirected to correct location.
    $this->assertSession()
      ->pageTextContains('Site Verification Ajax File Verification saved.');
    $this->assertSession()->addressEquals($list_url);
    $this->assertSession()
      ->pageTextContains('Ajax File Verification Description');

    // Load entity list and confirm it is showing one.
    $this->drupalGet($list_url);
    $this->assertSession()
      ->pageTextNotContains('There are no site verification entities yet.');
  }

  /**
   * Test that a user without manage file permission can't use them.
   */
  public function testAdminLimitedForm(): void {
    $this->drupalLogin($this->adminLimitedUser);

    // Add a file verification.
    $add_url = Url::fromRoute('entity.site_verification.add_form');
    $this->drupalGet($add_url);
    $page = $this->getSession()->getPage();

    // Fill in identity to enable buttons.
    $page->find('css', '[name="label"]')
      ->setValue('Ajax Verification');
    $page->find('css', '[name="description"]')
      ->setValue('Ajax Verification Description');
    $type = $this->assertSession()
      ->waitForElementVisible('css', '[name="type"]');
    $this->assertNotEmpty($type);

    // The "Meta" option must be available.
    $page = $this->getSession()->getPage();
    $meta_type = $page->find('xpath', '//select[@data-drupal-selector="edit-type"]//option[@value="meta"]');
    $this->assertNotEmpty($meta_type);

    // The "File" option must not. The positive existence of this option has
    // been made in ::testAdminAjaxFileForm().
    $file_type = $page->find('xpath', '//select[@data-drupal-selector="edit-type"]//option[@value="file"]');
    $this->assertEmpty($file_type);

    // The "Upload a file" button must be missing.
    $this->assertEmpty($page->findButton('edit-input-file'));
  }

  /**
   * Test the file_helper when the file module is not installed.
   */
  public function testAdminFormWithoutFile(): void {
    $this->drupalLogin($this->adminUser);

    // Uninstall the file module.
    $done = $this->container->get('module_installer')->uninstall(['file']);
    $this->assertTrue($done);

    // Add a file verification.
    $add_url = Url::fromRoute('entity.site_verification.add_form');
    $this->drupalGet($add_url);
    $page = $this->getSession()->getPage();
    $page->find('css', '[name="label"]')
      ->setValue('Missing File Module');

    // File option IS available.
    $file_type = $page->find('xpath', '//select[@data-drupal-selector="edit-type"]//option[@value="file"]');
    $this->assertNotEmpty($file_type);

    // Upload a file button IS available.
    $this->assertNotEmpty($page->findButton('edit-input-file'));

    // Move to Upload a file. Use specially marked p tag to wait on.
    $page->pressButton('Upload a file');
    $file_helper = $this->assertSession()
      ->waitForElementVisible('css', '[id="site-verify-file-module-missing"]');
    $this->assertNotEmpty($file_helper);

    // The admin message should be present in that p tag.
    $this->assertEquals(
      $file_helper->getText(),
      'File upload helper is not available without the "File" module installed. A File type Site Verification can still be entered manually.'
    );
  }

}
