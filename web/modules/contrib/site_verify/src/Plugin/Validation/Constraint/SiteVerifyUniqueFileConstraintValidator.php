<?php

declare(strict_types=1);

namespace Drupal\site_verify\Plugin\Validation\Constraint;

use Drupal\Core\Config\Schema\Mapping;
use Drupal\Core\DependencyInjection\AutowireTrait;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Entity\Plugin\DataType\ConfigEntityAdapter;
use Drupal\Core\TypedData\PrimitiveInterface;
use Drupal\Core\TypedData\Validation\TypedDataAwareValidatorTrait;
use Drupal\site_verify\Entity\SiteVerificationType;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validates a SiteVerifyUniqueFileConstraint.
 */
class SiteVerifyUniqueFileConstraintValidator extends ConstraintValidator implements ContainerInjectionInterface {

  use AutowireTrait;
  use TypedDataAwareValidatorTrait;

  /**
   * Constructs a new SiteVerifyUniqueFileConstraintValidator object.
   */
  public function __construct(
    protected EntityTypeManagerInterface $entityTypeManager,
  ) {}

  /**
   * {@inheritdoc}
   */
  public function validate($value, Constraint $constraint): void {

    // Values are needed from the entity being validated.
    $root = $this->context->getRoot();
    if ($root instanceof ConfigEntityAdapter) {
      $entity = $root->getEntity();
      try {
        $type = $entity->getType();
        $entity_id = $entity->id();
      }
      catch (\ValueError $e) {
        // A bad type will have already triggered a validation error. Do not add
        // an unrelated one now, but also do not attempt to validate this value.
        return;
      }
    }
    // Encountered during use of Config Inspector module.
    elseif ($root instanceof Mapping) {
      $values = $root->getValue();
      $type = SiteVerificationType::from($values['type']);
      $entity_id = $values['id'];
    }
    // Unknown root to process.
    else {
      return;
    }

    // This validator is only useful for SiteVerificationType::File types.
    if ($type != SiteVerificationType::File) {
      return;
    }

    // Get the value with the proper datatype.
    $typed_data = $this->getTypedData();
    if (!($typed_data instanceof PrimitiveInterface)) {
      throw new \LogicException('The data type must be a PrimitiveInterface at this point.');
    }
    $filename = $typed_data->getCastedValue();

    // Query storage for any verifications using the same filename.
    $site_verification_storage = $this->entityTypeManager
      ->getStorage('site_verification');
    $query = $site_verification_storage->getQuery()
      ->accessCheck(FALSE)
      ->condition('type', SiteVerificationType::File->value)
      ->condition('name', $filename);
    if ($entity_id) {
      $query->condition('id', $entity_id, '<>');
    }

    // Run the query to see if a file already exists.
    if ($query->execute()) {
      $this->context->addViolation($constraint->notUnique, [
        '%filename' => $filename,
      ]);
    }
  }

}
