<?php

declare(strict_types=1);

namespace Drupal\site_verify\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\Core\Entity\EntityStorageInterface;

/**
 * Configuration Entity to store Meta and File site verifications.
 *
 * @ConfigEntityType(
 *   id = "site_verification",
 *   label = @Translation("Site Verification"),
 *   handlers = {
 *     "list_builder" = "Drupal\site_verify\Entity\SiteVerificationListBuilder",
 *     "storage" = "Drupal\site_verify\Entity\SiteVerificationStorage",
 *     "access" = "Drupal\site_verify\Entity\SiteVerificationAccessControlHandler",
 *     "form" = {
 *       "add" = "Drupal\site_verify\Form\SiteVerificationForm",
 *       "enable" = "Drupal\site_verify\Form\SiteVerificationStatusForm",
 *       "disable" = "Drupal\site_verify\Form\SiteVerificationStatusForm",
 *       "edit" = "Drupal\site_verify\Form\SiteVerificationForm",
 *       "delete" = "Drupal\site_verify\Form\SiteVerificationDeleteForm",
 *     },
 *     "route_provider" = {
 *       "default" = "Drupal\site_verify\Entity\Routing\SiteVerificationRouteProvider",
 *     }
 *   },
 *   config_prefix = "site_verification",
 *   admin_permission = "administer site verify",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "status" = "status",
 *   },
 *   links = {
 *     "add-form" = "/admin/config/search/verifications/add",
 *     "edit-form" = "/admin/config/search/verifications/{site_verification}/edit",
 *     "enable-form" = "/admin/config/search/verifications/{site_verification}/enable",
 *     "disable-form" = "/admin/config/search/verifications/{site_verification}/disable",
 *     "delete-form" = "/admin/config/search/verifications/{site_verification}/delete",
 *     "collection" = "/admin/config/search/verifications",
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "status",
 *     "description",
 *     "type",
 *     "name",
 *     "content",
 *   }
 * )
 */
class SiteVerification extends ConfigEntityBase implements SiteVerificationInterface {

  /**
   * If the entity is valid after validation has been run.
   *
   * @var bool
   */
  protected $valid = FALSE;

  /**
   * Whether entity validation was performed.
   *
   * @var bool
   */
  protected $validated = FALSE;

  /**
   * {@inheritdoc}
   */
  public function getDescription(): string {
    return $this->description ?? '';
  }

  /**
   * {@inheritdoc}
   */
  public function getType(): SiteVerificationType {
    if (empty($this->type)) {
      return SiteVerificationType::Meta;
    }
    if ($this->type instanceof SiteVerificationType) {
      return $this->type;
    }
    // Value is loaded from storage as a string.
    return SiteVerificationType::from($this->type);
  }

  /**
   * {@inheritdoc}
   */
  public function getName(): string {
    return $this->name ?? '';
  }

  /**
   * {@inheritdoc}
   */
  public function getFilename(): string {
    if ($this->getType() == SiteVerificationType::File) {
      return $this->name ?? '';
    }

    throw new \InvalidArgumentException('Called getFilename() on non-File type Site Verification.');
  }

  /**
   * {@inheritdoc}
   */
  public function getMetaName(): string {
    if ($this->getType() == SiteVerificationType::Meta) {
      return $this->name ?? '';
    }

    throw new \InvalidArgumentException('Called getMetaName() on non-Meta type Site Verification.');
  }

  /**
   * {@inheritdoc}
   */
  public function getContent(): string {
    return $this->content ?? '';
  }

  /**
   * {@inheritdoc}
   */
  public function isValid(): bool {
    // Run validation if not yet run before returning result.
    if (!$this->validated) {
      $this->validate();
    }
    return (bool) $this->valid;
  }

  /**
   * {@inheritdoc}
   */
  public function set($property_name, $value) {
    // Value updated, reset validation state.
    $this->valid = $this->validated = FALSE;
    return parent::set($property_name, $value);
  }

  /**
   * {@inheritdoc}
   */
  public function preSave(EntityStorageInterface $storage) {
    // Entity must be validated before it is saved. Do it now if not done.
    if (!$this->validated) {
      $this->validate();
    }
    $this->validated = FALSE;

    // Entity must be valid to be saved.
    if (!$this->valid) {
      throw new \LogicException('Entity is not valid, cannot be saved.');
    }

    parent::preSave($storage);
  }

  /**
   * {@inheritdoc}
   */
  public static function postDelete(
    EntityStorageInterface $storage,
    array $entities,
  ): void {
    parent::postDelete($storage, $entities);

    if ($storage instanceof SiteVerificationStorageInterface) {
      $storage->triggerRouteRebuild();
    }
  }

  /**
   * {@inheritdoc}
   */
  public function postSave(
    EntityStorageInterface $storage,
    $update = TRUE,
  ): void {
    parent::postSave($storage, $update);

    if ($storage instanceof SiteVerificationStorageInterface) {
      $storage->triggerRouteRebuild();
    }
  }

  /**
   * {@inheritdoc}
   */
  public function validate(): array {
    $this->validated = TRUE;
    $violations = iterator_to_array($this->getTypedData()->validate());
    $this->valid = empty($violations);
    return $violations;
  }

}
