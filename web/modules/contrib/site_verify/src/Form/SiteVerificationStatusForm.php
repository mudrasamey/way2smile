<?php

declare(strict_types=1);

namespace Drupal\site_verify\Form;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\DependencyInjection\AutowireTrait;
use Drupal\Core\Entity\EntityConfirmFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Routing\RouteBuilderInterface;
use Drupal\Core\Url;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

/**
 * Providers the status toggle form for Site Verifications.
 */
class SiteVerificationStatusForm extends EntityConfirmFormBase {

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
  public function getQuestion() {
    return $this->entity->status()
      ? $this->t(
        'Are you sure you want to disable the site verification %label?', [
          '%label' => $this->entity->label(),
        ])
      : $this->t(
        'Are you sure you want to enable the site verification %label?', [
          '%label' => $this->entity->label(),
        ]);
  }

  /**
   * {@inheritdoc}
   */
  public function getCancelUrl() {
    return new Url('entity.site_verification.collection');
  }

  /**
   * {@inheritdoc}
   */
  public function getConfirmText() {
    return $this->entity->status()
      ? $this->t('Disable')
      : $this->t('Enable');
  }

  /**
   * {@inheritdoc}
   */
  public function getDescription() {
    return $this->t('Only enabled site verifications will be included included on front page, or served as a file.');
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    switch ($this->entity->status()) {
      case TRUE:
        $this->entity->disable();
        $this->entity->validate();
        $this->entity->save();
        $this->messenger()->addStatus($this->t(
          'Disabled site verification %label.', [
            '%label' => $this->entity->label(),
          ]));
        break;

      case FALSE:
        $this->entity->enable();
        $this->entity->validate();
        $this->entity->save();
        $this->messenger()->addStatus($this->t(
          'Enabled site verification %label.', [
            '%label' => $this->entity->label(),
          ]));
        break;

    }

    $form_state->setRedirectUrl($this->getCancelUrl());
  }

}
