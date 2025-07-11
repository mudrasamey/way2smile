<?php

declare(strict_types=1);

namespace Drupal\site_verify\Plugin\Validation\Constraint;

use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\Validation\Attribute\Constraint;
use Symfony\Component\Validator\Constraint as SymfonyConstraint;

/**
 * Check that filenames are unique across all File type Site Verifications.
 */
#[Constraint(
  id: 'SiteVerifyUniqueFile',
  label: new TranslatableMarkup(
    'Site Verification Unique File Constraint',
    [],
    ['context' => 'Validation']
  ),
  type: 'string'
)]
class SiteVerifyUniqueFileConstraint extends SymfonyConstraint {

  /**
   * Error message when the filename is already in use.
   *
   * @var string
   */
  public string $notUnique = 'Filename %filename is already in use by another site verification.';

}
