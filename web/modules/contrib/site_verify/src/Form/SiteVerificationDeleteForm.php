<?php

declare(strict_types=1);

namespace Drupal\site_verify\Form;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\DependencyInjection\AutowireTrait;
use Drupal\Core\Entity\EntityDeleteForm;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Routing\RouteBuilderInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

/**
 * Extends the EntityDeleteForm to flush caches and rebuild routes.
 */
class SiteVerificationDeleteForm extends EntityDeleteForm {

  use AutowireTrait;

  /**
   * Creates a new SiteVerificationForm object.
   */
  public function __construct(
    #[Autowire(service: 'cache.render')]
    protected CacheBackendInterface $renderCache,
    protected RouteBuilderInterface $routeBuilder,
  ) {}

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $form_state->setRedirectUrl($this->getCancelUrl());
  }

}
