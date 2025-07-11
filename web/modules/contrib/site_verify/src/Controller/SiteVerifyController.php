<?php

declare(strict_types=1);

namespace Drupal\site_verify\Controller;

use Drupal\Core\Cache\CacheableResponse;
use Drupal\Core\DependencyInjection\AutowireTrait;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\StringTranslation\TranslationInterface;
use Drupal\site_verify\Entity\SiteVerificationType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Returns responses for Site Verify module routes.
 */
class SiteVerifyController implements ContainerInjectionInterface {

  use AutowireTrait;
  use StringTranslationTrait;

  /**
   * Constructs a new SiteVerifyController object.
   */
  public function __construct(
    protected EntityTypeManagerInterface $entityTypeManager,
    TranslationInterface $string_translation,
  ) {
    // As suggested by the trait.
    $this->stringTranslation = $string_translation;
  }

  /**
   * Controller content callback: Verifications File content.
   *
   * @param string $svid
   *   The id of the site verification to display.
   *
   * @return \Symfony\Component\HttpFoundation\Response
   *   The response containing the Verification File content.
   *
   * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
   *   In the event file is set but engine does not support files.
   */
  public function verificationsFileContent($svid): Response {
    // @todo Determine if existing auto-caching is sufficient.
    $verification = $this->entityTypeManager
      ->getStorage('site_verification')
      ->load($svid);
    if (empty($verification) || $verification->getType() != SiteVerificationType::File) {
      throw new NotFoundHttpException();
    }

    $response = new CacheableResponse(
      $verification->getContent(),
      200,
      ['Content-Type' => 'text/plain']
    );

    // Add the entity as a cacheable dependency, plus generic tag.
    $response->addCacheableDependency($verification);
    $cacheable_metadata = $response->getCacheableMetadata();
    $cacheable_metadata->addCacheTags(['site_verify']);

    return $response;
  }

  /**
   * Provides a generic enable title callback for a single entity.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The route match.
   * @param \Drupal\Core\Entity\EntityInterface $_entity
   *   (optional) An entity, passed in directly from the request attributes.
   *
   * @return \Drupal\Core\StringTranslation\TranslatableMarkup|null
   *   The title for the entity enable page, if an entity was found.
   */
  public function enableTitle(
    RouteMatchInterface $route_match,
    ?EntityInterface $_entity = NULL,
  ): TranslatableMarkup|null {
    if ($entity = $this->doGetEntity($route_match, $_entity)) {
      return $this->t('Enable %label', ['%label' => $entity->label()]);
    }

    return NULL;
  }

  /**
   * Provides a generic disable title callback for a single entity.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The route match.
   * @param \Drupal\Core\Entity\EntityInterface $_entity
   *   (optional) An entity, passed in directly from the request attributes.
   *
   * @return \Drupal\Core\StringTranslation\TranslatableMarkup|null
   *   The title for the entity disable page, if an entity was found.
   */
  public function disableTitle(
    RouteMatchInterface $route_match,
    ?EntityInterface $_entity = NULL,
  ): TranslatableMarkup|null {
    if ($entity = $this->doGetEntity($route_match, $_entity)) {
      return $this->t('Disable %label', ['%label' => $entity->label()]);
    }

    return NULL;
  }

  /**
   * Determines the entity.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The route match.
   * @param \Drupal\Core\Entity\EntityInterface $_entity
   *   (optional) An entity, passed in directly from the request attributes.
   *
   * @return \Drupal\Core\Entity\EntityInterface|null
   *   The entity, if it is passed in directly or if the first parameter of the
   *   active route is an entity; otherwise, NULL.
   */
  public function doGetEntity(
    RouteMatchInterface $route_match,
    ?EntityInterface $_entity = NULL,
  ): EntityInterface|null {
    if ($_entity) {
      return $_entity;
    }

    foreach ($route_match->getParameters() as $parameter) {
      if ($parameter instanceof EntityInterface) {
        return $parameter;
      }
    }

    return NULL;
  }

}
