<?php

declare(strict_types=1);

namespace Drupal\Tests\site_verify\Functional;

use Drupal\Core\Cache\Cache;
use Drupal\Core\Url;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests functionality of the caching when serving and flush on edit.
 *
 * @group site_verify
 */
class CacheTest extends BrowserTestBase {

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
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

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

    // Add a content type and set a node as front page.
    $this->drupalCreateContentType(['type' => 'front']);
    $test_node = $this->drupalCreateNode([
      'type' => 'front',
      'title' => $this->randomMachineName(8),
    ]);
    $this->config('system.site')
      ->set('page.front', '/node/' . $test_node->id())
      ->save();

    // Enable page caching.
    $config = $this->config('system.performance');
    $config->set('cache.page.max_age', 3600);
    $config->save();
  }

  /**
   * Test the entity specific and generic cache tags for cache and flush.
   */
  public function testCacheHitMissFlush(): void {
    // Create a file based and a meta tag based site verification.
    $site_verification_storage = $this->entityTypeManager
      ->getStorage('site_verification');

    $file_verification = $site_verification_storage->create([
      'label' => 'Google File',
      'id' => 'google_file',
      'description' => 'A test file verification',
      'type' => 'file',
      'name' => 'googleb5741169901f6c20.html',
      'content' => 'google-site-verification: googleb5741169901f6c20.html',
    ]);
    $this->assertEmpty($file_verification->validate());
    $site_verification_storage->save($file_verification);

    $meta_verification = $site_verification_storage->create([
      'label' => 'Google Meta',
      'id' => 'google_meta',
      'description' => 'A test meta verification',
      'type' => 'meta',
      'name' => 'google-site-verification',
      'content' => 'google-site-verification: googleb5741169901f6c20.html',
    ]);
    $this->assertEmpty($meta_verification->validate());
    $site_verification_storage->save($meta_verification);

    // Urls of pages to test.
    $url_front = Url::fromUri('internal:/');
    $url_file = Url::fromUri('internal:/' . $file_verification->getFilename());

    // Pull both to confirm cache miss, and then cache hit.
    // If this results in a 4xx-response tag, the route rebuild has failed to
    // trigger on the saving of the entity. Aim your attempts to fix there.
    $expected_file_tags = [
      'config:site_verify.site_verification.google_file',
      'http_response',
      'site_verify',
    ];
    $this->verifyPageCache($url_file, 'MISS', $expected_file_tags);
    $this->verifyPageCache($url_file, 'HIT', $expected_file_tags);

    $expected_front_tags = [
      'config:filter.format.plain_text',
      'config:site_verify.site_verification.google_meta',
      'config:user.role.anonymous',
      'http_response',
      'node:1',
      'node_view',
      'rendered',
      'site_verify',
      'user:0',
      'user_view',
    ];
    $this->verifyPageCache($url_front, 'MISS', $expected_front_tags);
    $this->verifyPageCache($url_front, 'HIT', $expected_front_tags);

    // Now flush specifically the file tags.
    Cache::invalidateTags($file_verification->getCacheTags());

    // Retrieving the file should miss cache.
    $this->verifyPageCache($url_file, 'MISS');

    // Front page should still be a hit. Tags are not relevant.
    $this->verifyPageCache($url_front, 'HIT', FALSE);

    // Invalidate the generic tag and confirm it is effective against all.
    Cache::invalidateTags(['site_verify']);
    $this->verifyPageCache($url_front, 'MISS');
    $this->verifyPageCache($url_file, 'MISS');
  }

  /**
   * Verify that when loading a given page, it's a page cache hit or miss.
   *
   * Cloned method from PageCacheTagsTestBase::verifyPageCache() but updated to
   * use X-Drupal-Cache-Tags instead of pulling it from database since those
   * values do not always seem to be correct.
   *
   * @param \Drupal\Core\Url $url
   *   The page for this URL will be loaded.
   * @param string $hit_or_miss
   *   'HIT' if a page cache hit is expected, 'MISS' otherwise.
   * @param array|false $tags
   *   When expecting a page cache hit, you may optionally specify an array of
   *   expected cache tags. While FALSE, the cache tags will not be verified.
   *
   * @see \Drupal\Tests\system\Functional\Cache\PageCacheTagsTestBase::verifyPageCache()
   */
  protected function verifyPageCache(
    Url $url,
    string $hit_or_miss,
    array|bool $tags = FALSE,
  ): void {
    $this->drupalGet($url);
    $this->assertSession()->responseHeaderEquals(
      'X-Drupal-Cache',
      $hit_or_miss
    );

    if (is_array($tags)) {
      $this->assertSession()->responseHeaderEquals(
        'X-Drupal-Cache-Tags',
        implode(' ', $tags)
      );
    }
  }

}
