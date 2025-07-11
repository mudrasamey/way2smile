<?php

declare(strict_types=1);

namespace Drupal\site_verify_bad_type\Hook;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Hook\Attribute\Hook;

/**
 * Provides OOP hooks for testing module site_verify_bad_type.
 */
class BadTypeHooks {

  /**
   * Alter the "Add site verification" form to add a bad type.
   */
  #[Hook('form_alter')]
  public function formAlter(&$form, FormStateInterface $form_state, $form_id) {
    $site_verification_forms = [
      'site_verification_add_form',
      'site_verification_edit_form',
    ];
    if (in_array($form_id, $site_verification_forms)) {
      $form['content']['type']['#options']['bad_type'] = 'Bad type';
    }
  }

}
