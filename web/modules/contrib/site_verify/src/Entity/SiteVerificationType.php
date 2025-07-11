<?php

declare(strict_types=1);

namespace Drupal\site_verify\Entity;

/**
 * The type of site verification using a backed Enum.
 */
enum SiteVerificationType: string {

  /* Verification type that serves a file from the site root. */
  case File = 'file';

  /* Verification type included as a meta tag on the site's front page. */
  case Meta = 'meta';

}
