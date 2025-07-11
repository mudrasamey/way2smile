<?php

declare(strict_types=1);

namespace Drupal\site_verify\Entity;

use Drupal\Component\Uuid\UuidInterface;
use Drupal\Core\Cache\MemoryCache\MemoryCacheInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Config\Entity\ConfigEntityStorage;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Language\LanguageManagerInterface;
use Drupal\Core\Routing\RouteBuilderInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Wrapper of the default ConfigEntityStorage to rebuild routes on change.
 */
class SiteVerificationStorage extends ConfigEntityStorage implements SiteVerificationStorageInterface {

  /**
   * Constructs a new SiteVerificationStorage object.
   */
  public function __construct(
    EntityTypeInterface $entity_type,
    ConfigFactoryInterface $config_factory,
    UuidInterface $uuid_service,
    LanguageManagerInterface $language_manager,
    MemoryCacheInterface $memory_cache,
    protected RouteBuilderInterface $routeBuilder,
  ) {
    parent::__construct(
      $entity_type,
      $config_factory,
      $uuid_service,
      $language_manager,
      $memory_cache,
    );
  }

  /**
   * Overrides ConfigEntityStorage::createInstance.
   */
  public static function createInstance(
    ContainerInterface $container,
    EntityTypeInterface $entity_type,
  ) {
    return new static(
      $entity_type,
      $container->get('config.factory'),
      $container->get('uuid'),
      $container->get('language_manager'),
      $container->get('entity.memory_cache'),
      $container->get('router.builder'),
    );
  }

  /**
   * Rebuild routing after changing a site verification.
   */
  public function triggerRouteRebuild(): void {
    $this->routeBuilder->rebuild();
  }

}
