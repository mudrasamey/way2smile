<?php

declare(strict_types=1);

namespace Drupal\site_verify\Hook;

use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\StringTranslation\TranslationInterface;
use Drupal\Core\Url;
use Drupal\site_verify\Entity\SiteVerificationType;

/**
 * Provide OOP help hook.
 */
class SiteVerifyHelp {

  use StringTranslationTrait;

  /**
   * Constructs a new SiteVerifyHooks object.
   */
  public function __construct(
    TranslationInterface $string_translation,
  ) {
    $this->stringTranslation = $string_translation;
  }

  /**
   * Module's help page route.
   *
   * @var string
   */
  protected string $helpPage = 'help.page.site_verify';

  /**
   * Route on which to display general help.
   *
   * @var string
   */
  protected string $helpRouteGeneral = 'entity.site_verification.collection';

  /**
   * Routes on which to display site verify entity.
   *
   * @var array[string]
   */
  protected string $helpRouteAddEntity = 'entity.site_verification.add_form';

  /**
   * Provide helpful pointers for admins.
   */
  #[Hook('help')]
  public function help($route_name, RouteMatchInterface $route_match) {

    if (in_array($route_name, [$this->helpPage, $this->helpRouteGeneral])) {
      return '<p>' . implode("</p>\n<p>", [
        $this->t('Simplify the site verification process for search engines and other services.'),
        $this->t('Supporting two methods:'),
        $this->t('<ul><li>Add a <a href="@tag_link">meta tag</a> to your site’s <a href="@front_link">front page</a> or</li><li>Serve a <a href="@file_link">text file</a> from the site root.</li></ul>', [
          '@tag_link' => Url::fromRoute(
            'entity.site_verification.add_form',
            [],
            ['query' => ['type' => SiteVerificationType::Meta->value]]
          )->toString(),
          '@file_link' => Url::fromRoute(
            'entity.site_verification.add_form',
            [],
            ['query' => ['type' => SiteVerificationType::File->value]]
          )->toString(),
          '@front_link' => Url::fromRoute('<front>')->toString(),
        ]),
        $this->t('Choose the method that works best for you to quickly verify your site using the admin interface.'),
      ]) . '</p>';
    }

    elseif ($route_name == $this->helpRouteAddEntity) {
      return '<p>' . implode("</p>\n<p>", [
        $this->t('Simplify the site verification process for search engines and other services. You can create a meta tag or file type verification.'),
      ]) . "</p>\n<ul><li>" . implode("</li>\n<li>", [
        $this->t('For both types, enter a Label and Description for display in the management interface. Optionally customise the generated machine name.'),
        $this->t('To create a meta tag verification, enter the name and content attributes info their respective fields.'),
        $this->t('For a file, enter the filename, and file contents (if any) into the content field.'),
      ]) . '</li></ul>';
    }
  }

}
