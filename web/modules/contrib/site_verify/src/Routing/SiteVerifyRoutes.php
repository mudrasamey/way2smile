<?php

declare(strict_types=1);

namespace Drupal\site_verify\Routing;

use Drupal\Core\DependencyInjection\AutowireTrait;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\site_verify\Entity\SiteVerificationType;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

/**
 * Defines dynamic routes.
 */
class SiteVerifyRoutes implements ContainerInjectionInterface {

  use AutowireTrait;

  /**
   * Constructs a new SiteVerifyRoutes object.
   */
  public function __construct(
    protected EntityTypeManagerInterface $entityTypeManager,
  ) {}

  /**
   * {@inheritdoc}
   */
  public function routes() {
    // Load all of the file type verifications.
    $site_verification_storage = $this->entityTypeManager
      ->getStorage('site_verification');
    $verification_ids = $site_verification_storage->getQuery()
      ->condition('status', TRUE)
      ->condition('type', SiteVerificationType::File->value)
      ->accessCheck(FALSE)
      ->execute();
    $verifications = $site_verification_storage
      ->loadMultiple($verification_ids);

    // Create routes for each file type verification.
    $route_collection = new RouteCollection();
    foreach ($verifications as $verification) {
      $route = new Route(
        $verification->getFilename(), [
          '_controller' => '\Drupal\site_verify\Controller\SiteVerifyController::verificationsFileContent',
          'svid' => $verification->id(),
        ],
        ['_access' => 'TRUE']
      );
      $route_collection->add(
        'site_verify.' . $verification->getFilename(),
        $route
      );
    }
    return $route_collection;
  }

}
