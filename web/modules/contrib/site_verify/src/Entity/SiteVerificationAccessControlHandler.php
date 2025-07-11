<?php

declare(strict_types=1);

namespace Drupal\site_verify\Entity;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Extended access control for Site Verification config entities.
 */
class SiteVerificationAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(
    EntityInterface $entity,
    $operation,
    AccountInterface $account,
  ) {
    if ($operation == 'delete' && $entity->isNew()) {
      return AccessResult::forbidden()->addCacheableDependency($entity);
    }
    if (in_array($operation, ['view', 'view label'])) {
      return AccessResult::allowedIfHasPermission(
        $account,
        'administer site verify'
      );
    }

    // Switch permission based on which type of site verification it is.
    $admin_permission = match ($entity->getType()) {
      SiteVerificationType::File => 'manage file based site verifications',
      SiteVerificationType::Meta => 'administer site verify',
    };

    switch ($operation) {
      case 'update':
      case 'delete':
        return AccessResult::allowedIfHasPermission(
          $account,
          $admin_permission
        );

      case 'enable':
        if ($entity->status()) {
          return AccessResult::forbidden();
        }
        return AccessResult::allowedIfHasPermission(
          $account,
          $admin_permission
        );

      case 'disable':
        if (!$entity->status()) {
          return AccessResult::forbidden();
        }
        return AccessResult::allowedIfHasPermission(
          $account,
          $admin_permission
        );

      default:
        // No opinion.
        return AccessResult::neutral();
    }
  }

}
