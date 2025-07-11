<?php

declare(strict_types=1);

namespace Drupal\site_verify\Entity;

use Drupal\Core\Config\Entity\ConfigEntityStorageInterface;

/**
 * Provides an interface allowing routes rebuild from storage service.
 */
interface SiteVerificationStorageInterface extends ConfigEntityStorageInterface {

  /**
   * Rebuild routing after changing a site verification.
   */
  public function triggerRouteRebuild(): void;

}
