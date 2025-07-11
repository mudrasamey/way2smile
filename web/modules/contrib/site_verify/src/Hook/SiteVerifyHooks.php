<?php

declare(strict_types=1);

namespace Drupal\site_verify\Hook;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Path\PathMatcherInterface;
use Drupal\site_verify\Entity\SiteVerificationType;

/**
 * Provides OOP hooks for SiteVerify module.
 */
class SiteVerifyHooks {

  /**
   * Constructs a new SiteVerifyHooks object.
   */
  public function __construct(
    protected EntityTypeManagerInterface $entityTypeManager,
    protected PathMatcherInterface $pathMatcher,
  ) {}

  /**
   * Add metatags to front page.
   */
  #[Hook('page_attachments')]
  public function addVerifications(array &$page): void {
    if (!$this->pathMatcher->isFrontPage()) {
      return;
    }

    // Get each of the metatag site verifications.
    $site_verification_storage = $this->entityTypeManager
      ->getStorage('site_verification');
    $verification_ids = $site_verification_storage->getQuery()
      ->condition('status', TRUE)
      ->condition('type', SiteVerificationType::Meta->value)
      ->accessCheck(FALSE)
      ->execute();
    $verifications = $site_verification_storage
      ->loadMultiple($verification_ids);

    if (empty($verifications)) {
      return;
    }

    $additional_tags = [];
    foreach ($verifications as $verification) {
      $data = [
        '#type' => 'html_tag',
        '#tag' => 'meta',
        '#attributes' => [
          'name' => $verification->getMetaName(),
          'content' => $verification->getContent(),
        ],
      ];

      $page['#attached']['html_head'][] = [
        $data,
        'site_verify:' . $verification->id(),
      ];

      $additional_tags = array_merge(
        $additional_tags,
        $verification->getCacheTags()
      );
    }

    // Add cache tag to flush just this page.
    $additional_tags[] = 'site_verify';
    $page['#cache']['tags'] = array_merge(
      $page['#cache']['tags'] ?? [],
      $additional_tags
    );
  }

}
