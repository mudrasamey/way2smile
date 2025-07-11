<?php

declare(strict_types=1);

namespace Drupal\site_verify\Entity;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * Provides an interface for defining a SiteVerification config entity.
 */
interface SiteVerificationInterface extends ConfigEntityInterface {

  /**
   * Administrator description of this site verification.
   *
   * @return string
   *   Site verification description.
   */
  public function getDescription(): string;

  /**
   * The type of site verification.
   *
   * @return SiteVerificationType
   *   The type of site verification this is.
   */
  public function getType(): SiteVerificationType;

  /**
   * Return the name field.
   *
   * @return string
   *   The name used in the site verification.
   */
  public function getName(): string;

  /**
   * Return the name field as a filename.
   *
   * @return string
   *   The name as a filename.
   *
   * @throws \InvalidArgumentException
   *   Thrown if type is not file when called.
   */
  public function getFilename(): string;

  /**
   * Return the name field as a meta name.
   *
   * @return string
   *   The name as a meta name.
   *
   * @throws \InvalidArgumentException
   *   Thrown if type is not meta when called.
   */
  public function getMetaName(): string;

  /**
   * Return the content for the file or meta.
   *
   * @return string
   *   Site verification content.
   */
  public function getContent(): string;

  /**
   * Return valid entity flag, and runs validation if not yet run.
   *
   * @return bool
   *   If the entity is valid or not.
   */
  public function isValid(): bool;

  /**
   * Validate the Site Verification ConfigEntity.
   *
   * @return array
   *   An array of violations. If empty, it is validated.
   */
  public function validate(): array;

}
