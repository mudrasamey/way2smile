<?php

declare(strict_types=1);

namespace Drupal\site_verify\Entity\Routing;

use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\Routing\AdminHtmlRouteProvider;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

/**
 * Extend for the enable/disable links.
 */
class SiteVerificationRouteProvider extends AdminHtmlRouteProvider {

  /**
   * {@inheritdoc}
   */
  public function getRoutes(EntityTypeInterface $entity_type): RouteCollection {
    $collection = parent::getRoutes($entity_type);
    $entity_type_id = $entity_type->id();

    if ($enable_form_route = $this->getEnableFormRoute($entity_type)) {
      $collection->add("entity.{$entity_type_id}.enable_form", $enable_form_route);
    }
    if ($disable_form_route = $this->getDisableFormRoute($entity_type)) {
      $collection->add("entity.{$entity_type_id}.disable_form", $disable_form_route);
    }

    return $collection;
  }

  /**
   * Gets the enable-form route.
   *
   * @param \Drupal\Core\Entity\EntityTypeInterface $entity_type
   *   The entity type.
   *
   * @return \Symfony\Component\Routing\Route|null
   *   The generated route, if available.
   */
  protected function getEnableFormRoute(
    EntityTypeInterface $entity_type,
  ): Route|null {

    if ($entity_type->hasLinkTemplate('enable-form')) {
      $entity_type_id = $entity_type->id();
      $route = new Route($entity_type->getLinkTemplate('enable-form'));
      $route->addDefaults([
        '_entity_form' => "{$entity_type_id}.enable",
        '_title_callback' => '\\Drupal\\site_verify\\Controller\\SiteVerifyController::enableTitle',
      ])
        ->setRequirement('_entity_access', "{$entity_type_id}.enable")
        ->setOption('parameters', [
          $entity_type_id => [
            'type' => 'entity:' . $entity_type_id,
          ],
        ]);
      return $route;
    }

    return NULL;
  }

  /**
   * Gets the disable-form route.
   *
   * @param \Drupal\Core\Entity\EntityTypeInterface $entity_type
   *   The entity type.
   *
   * @return \Symfony\Component\Routing\Route|null
   *   The generated route, if available.
   */
  protected function getDisableFormRoute(
    EntityTypeInterface $entity_type,
  ): Route|null {

    if ($entity_type->hasLinkTemplate('disable-form')) {
      $entity_type_id = $entity_type->id();
      $route = new Route($entity_type->getLinkTemplate('disable-form'));
      $route->addDefaults([
        '_entity_form' => "{$entity_type_id}.disable",
        '_title_callback' => '\\Drupal\\site_verify\\Controller\\SiteVerifyController::disableTitle',
      ])
        ->setRequirement('_entity_access', "{$entity_type_id}.disable")
        ->setOption('parameters', [
          $entity_type_id => [
            'type' => 'entity:' . $entity_type_id,
          ],
        ]);
      return $route;
    }

    return NULL;
  }

}
