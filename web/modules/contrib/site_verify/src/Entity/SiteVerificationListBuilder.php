<?php

declare(strict_types=1);

namespace Drupal\site_verify\Entity;

use Drupal\Component\Serialization\Json;
use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\GeneratedLink;
use Drupal\Core\Link;
use Drupal\Core\Routing\RouteBuilderInterface;
use Drupal\Core\Url;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

/**
 * Provides a listing of Site Verifications.
 */
class SiteVerificationListBuilder extends ConfigEntityListBuilder {

  /**
   * Constructs a new SiteVerificationListBuilder object.
   */
  public function __construct(
    EntityTypeInterface $entity_type,
    EntityStorageInterface $storage,
    protected RouteBuilderInterface $routeBuilder,
  ) {
    parent::__construct($entity_type, $storage);
  }

  /**
   * {@inheritdoc}
   */
  public static function createInstance(
    ContainerInterface $container,
    EntityTypeInterface $entity_type,
  ) {
    return new static(
      $entity_type,
      $container->get('entity_type.manager')->getStorage($entity_type->id()),
      $container->get('router.builder')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    // Rebuild routes if needed.
    if ($this->routeBuilder->rebuildIfNeeded()) {
      $this->messenger()->addStatus('Routes rebuilt in header.');
    }

    $header['label'] = $this->t('Label');
    $header['description'] = $this->t('Description');
    $header['enabled'] = $this->t('Enabled');
    $header['type'] = $this->t('Type');
    $header['name'] = $this->t('Name');

    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    try {
      $row['label'] = $entity->label();
      $row['description'] = $entity->getDescription();
      $row['enabled'] = $entity->status() ? $this->t('Yes') : $this->t('No');
      $entity_type = $entity->getType();
      $row['type'] = match ($entity_type) {
        SiteVerificationType::File => $this->t('File'),
        SiteVerificationType::Meta => $this->t('Meta'),
      };
      $row['name'] = match ($entity_type) {
        SiteVerificationType::File => $this->getFileLink($entity),
        SiteVerificationType::Meta => $entity->getName(),
      };
    }
    catch (\ValueError $e) {
      // An invalid type causes a complete page failure which is not desired.
      $row = [
        'label' => $entity->label(),
        [
          'colspan' => 4,
          'data' => [
            '#markup' => $this->t('Invalid Site Verification: @error', [
              '@error' => $e->getMessage(),
            ]),
          ],
        ],
      ];
    }

    return $row + parent::buildRow($entity);
  }

  /**
   * Get the link to a file type verification.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The site verification entity to return the file link for.
   * @param bool $recurse
   *   Flag to indicate if this function should call itself again.
   *
   * @return string|Drupal\Core\GeneratedLink
   *   The error string, or a link to the file.
   */
  private function getFileLink(
    EntityInterface $entity,
    bool $recurse = TRUE,
  ): string|GeneratedLink {

    // An inactive site verification will not have a valid route.
    if (!$entity->status()) {
      return $entity->getName();
    }

    try {
      // Create the url separately, and convert to string to force exception.
      $url = Url::fromRoute('site_verify.' . $entity->getName());
      $link = Link::fromTextAndUrl($entity->getName(), $url)->toString();
    }
    catch (RouteNotFoundException $e) {
      if ($recurse) {
        // Rebuild routes and try again.
        $this->routeBuilder->rebuild();
        return $this->getFileLink($entity, FALSE);
      }

      // Failed to rebuild routes in time for admin display.
      return $entity->getName();
    }
    catch (\Exception $e) {
      // Unknown exception occurred.
      return $entity->getName();
    }

    return $link;
  }

  /**
   * {@inheritdoc}
   */
  public function getDefaultOperations(EntityInterface $entity) {
    $operations = parent::getDefaultOperations($entity);

    // Disable the entity operation.
    if ($entity->access('update') && $entity->status() && $entity->hasLinkTemplate('disable-form')) {
      $operations['disable'] = [
        'title' => $this->t('Disable'),
        'weight' => 20,
        'attributes' => [
          'class' => ['use-ajax'],
          'data-dialog-type' => 'modal',
          'data-dialog-options' => Json::encode([
            'width' => 880,
          ]),
          'aria-label' => $this->t('Disable @label', [
            '@label' => $entity->label(),
          ]),
        ],
        'url' => $this->ensureDestination($entity->toUrl('disable-form')),
      ];
    }

    // Enable the entity operation.
    if ($entity->access('update') && !$entity->status() && $entity->hasLinkTemplate('enable-form')) {
      $operations['enable'] = [
        'title' => $this->t('Enable'),
        'weight' => 20,
        'attributes' => [
          'class' => ['use-ajax'],
          'data-dialog-type' => 'modal',
          'data-dialog-options' => Json::encode([
            'width' => 880,
          ]),
          'aria-label' => $this->t('Enable @label', [
            '@label' => $entity->label(),
          ]),
        ],
        'url' => $this->ensureDestination($entity->toUrl('enable-form')),
      ];
    }

    return $operations;
  }

}
