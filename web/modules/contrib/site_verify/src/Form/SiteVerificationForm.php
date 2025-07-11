<?php

declare(strict_types=1);

namespace Drupal\site_verify\Form;

use Drupal\Component\Utility\UrlHelper;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Config\ConfigException;
use Drupal\Core\DependencyInjection\AutowireTrait;
use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Routing\RouteBuilderInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Url;
use Drupal\site_verify\Entity\SiteVerificationType;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

/**
 * Add or Edit SiteVerification entity.
 */
class SiteVerificationForm extends EntityForm {

  use AutowireTrait;

  /**
   * Creates a new SiteVerificationForm object.
   */
  public function __construct(
    protected AccountInterface $currentUser,
    #[Autowire(service: 'cache.render')]
    protected CacheBackendInterface $renderCache,
    protected RouteBuilderInterface $routeBuilder,
  ) {}

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {

    // Process values from ajax buttons to change form input mode.
    $input_mode = $this->getInputMode($form_state);
    $form['input_mode'] = [
      '#type' => 'value',
      '#value' => $input_mode,
    ];

    /** @var \Drupal\site_verify\Entity\SiteVerificationInterface $site_verification */
    $site_verification = $this->entity;

    $form['identity'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Identity'),
    ];

    $form['identity']['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#description' => $this->t('Label for this Site Verification.'),
      '#maxlength' => 255,
      '#required' => TRUE,
      '#default_value' => $site_verification->label(),
    ];

    $form['identity']['id'] = [
      '#type' => 'machine_name',
      '#machine_name' => [
        'exists' => [$this, 'exists'],
        'source' => ['identity', 'label'],
      ],
      '#default_value' => $site_verification->id(),
      '#disabled' => !$site_verification->isNew(),
    ];

    $form['identity']['description'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Description'),
      '#description' => $this->t('Admin description or note displayed on the site verifications entity listing.'),
      '#maxlength' => 255,
      '#default_value' => $site_verification->getDescription(),
    ];

    $form['identity']['status'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Status'),
      '#default_value' => $site_verification->status(),
      '#description' => $this->t('Disabled site verifications are not included or served from the site.'),
    ];

    $form['content'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Verification'),
      '#attributes' => [
        'id' => 'site-verify-content-fieldset',
      ],

      // Pressing any of the mode buttons without first entering a label (more
      // specifically the auto-generated machine id) will cause a fatal error
      // while checking the uniqueness. Hide all of the content entry.
      '#states' => [
        'visible' => [
          ':input[name="label"]' => ['!value' => ''],
        ],
      ],
    ];

    // Buttons to choose which mode.
    $form['content']['input_chooser'] = [
      '#type' => 'container',

      'manual' => [
        '#type' => 'button',
        '#value' => $this->t('Manual entry'),
        '#limit_validation_errors' => [],
        '#ajax' => [
          'callback' => '::ajaxSubmitForm',
          'wrapper' => 'site-verify-content-fieldset',
          'method' => 'replaceWith',
          'effect' => 'fade',
        ],
      ],

      'input_tag' => [
        '#type' => 'button',
        '#value' => $this->t('Paste a meta tag'),
        '#limit_validation_errors' => [],
        '#ajax' => [
          'callback' => '::ajaxSubmitForm',
          'wrapper' => 'site-verify-content-fieldset',
          'method' => 'replaceWith',
          'effect' => 'fade',
        ],
      ],

      'input_file' => [
        '#type' => 'button',
        '#value' => $this->t('Upload a file'),
        '#limit_validation_errors' => [],
        '#ajax' => [
          'callback' => '::ajaxSubmitForm',
          'wrapper' => 'site-verify-content-fieldset',
          'method' => 'replaceWith',
          'effect' => 'fade',
        ],
      ],
    ];

    // Disable the button of the current input mode.
    $form['content']['input_chooser'][$input_mode]['#disabled'] = TRUE;

    // Check if the File module is installed. Not a hard dependency but without
    // it the file_helper will not work.
    $has_file = $this->moduleHandler->moduleExists('file');

    // Display the appropriate fields for the input mode.
    if ($input_mode == 'manual') {

      $form['content']['type'] = [
        '#type' => 'select',
        '#title' => $this->t('Verification type'),
        '#description' => $this->t(
          'Meta tags are included only on the <a href="@frontpage">front page</a>. Files are served from the site root.', [
            '@frontpage' => Url::fromRoute('<front>')->toString(),
          ]
        ),
        '#options' => [
          SiteVerificationType::Meta->value => $this->t('Meta tag'),
          SiteVerificationType::File->value => $this->t('File'),
        ],
        '#required' => TRUE,
        '#default_value' => $site_verification->getType()->value,
      ];

      $form['content']['name'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Meta/File name'),
        '#description' => $this->t('The meta tag name part, or the filename off the site root.'),
        '#default_value' => $site_verification->getName(),
        '#required' => TRUE,
      ];

      $form['content']['content'] = [
        '#type' => 'textarea',
        '#title' => $this->t('Meta/File content'),
        '#description' => $this->t('Contents of the meta tag or file contents served as plain/text.'),
        '#wysiwyg' => FALSE,
        '#default_value' => $site_verification->getContent(),
      ];

      // Default value of type can be set from query parameter on new entities.
      $query = $this->getRequest()->query;
      if ($this->entity->isNew() && $query->has('type')) {
        // Only use the value if it's valid. Comparison is case sensitive.
        try {
          $type = SiteVerificationType::from($query->get('type'));
          $form['content']['type']['#default_value'] = $type->value;
        }
        catch (\ValueError $e) {
          // Emit simple warning. Do not include user input as not useful.
          $this->messenger()
            ->addWarning('Invalid type provided in query is ignored.');
        }
      }
    }

    // Past the meta tag and it will be parsed into fields.
    elseif ($input_mode == 'input_tag') {

      $meta_parser_default = '';
      if (!$this->entity->isNew()) {
        $meta_parser_default = sprintf(
          '<meta name="%s" content="%s" />',
          $site_verification->getName(),
          $site_verification->getContent()
        );
      }
      // User entered value re-set on returning the form.
      if ($form_state->has('sv_default_value_meta_helper')) {
        $meta_parser_default = $form_state->get('sv_default_value_meta_helper');
        $this->messenger()->addStatus($this->t('Setting default to @value', [
          '@value' => print_r($meta_parser_default, TRUE),
        ]));
      }

      $form['content']['meta_helper'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Meta tag'),
        '#description' => $this->t('Paste the full meta tag provided. It will be parsed into the name and content fields.'),
        '#maxlength' => NULL,
        '#attributes' => [
          'placeholder' => '<meta name="verify-name" content="verify-content" />',
        ],
        '#required' => TRUE,
        '#default_value' => $meta_parser_default,
      ];
    }

    elseif ($has_file && $input_mode == 'input_file') {

      $file_helper_default = [];
      // User entered value re-set on returning the form.
      if ($form_state->has('sv_default_value_file_helper')) {
        $file_helper_default = $form_state->get('sv_default_value_file_helper');
      }

      $form['content']['file_helper'] = [
        '#type' => 'managed_file',
        '#title' => $this->t('Upload a verification file'),
        '#description' => $this->t('Uploaded file will be parsed into the name and content fields.'),
        '#upload_location' => 'temporary://site_verify/',
        '#multiple' => FALSE,
        '#upload_validators' => [
          'FileExtension' => [],
        ],
        '#required' => TRUE,
        '#default_value' => $file_helper_default,
      ];
    }

    // If the file module is not installed, the managed_file field will fail
    // silently. Replace the helper with a message that the module is needed
    // for it to work.
    elseif (!$has_file) {
      $form['content']['file_helper'] = [
        '#type' => 'markup',
        '#prefix' => '<p id="site-verify-file-module-missing"><em>',
        '#suffix' => '</em></p>',
        '#markup' => $this->t('File upload helper is not available without the "File" module installed. A File type Site Verification can still be entered manually.'),
      ];
    }

    // Remove file handling ability if user does not have permission. User also
    // cannot edit existing File based verifications and will not see this form.
    $has_file_permission = $this->currentUser
      ->hasPermission('manage file based site verifications');
    if (!$has_file_permission && isset($form['content']['type'])) {
      $content_type = &$form['content']['type'];
      $content_type['#default_value'] = SiteVerificationType::Meta->value;
      unset($content_type['#options'][SiteVerificationType::File->value]);
      $content_type['#description'] .= ' ' . $this->t(
        'Only Meta tag type available as "Manage file type site verifications" permission not granted to your role.'
      );

      // Do not show file button.
      $form['content']['input_chooser']['input_file']['#access'] = FALSE;
    }

    return parent::form($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildForm($form, $form_state);

    // Add the cancel link.
    $form['actions']['cancel'] = [
      '#type' => 'link',
      '#title' => $this->t('Cancel'),
      '#url' => $this->buildCancelLinkUrl(),
      '#attributes' => ['class' => ['button']],
      '#weight' => 15,
    ];

    // Inject additional validation functions to validate handlers. These are
    // added globally as they need to be run both when Save is clicked during
    // add/edit, and also when switching input modes to keep the entered user
    // inputs.
    $form['#validate'][] = '::validateMetaHelper';
    $form['#validate'][] = '::validateFileHelper';

    return $form;
  }

  /**
   * Builds the cancel link url for the form.
   *
   * @return \Drupal\Core\Url
   *   Cancel url
   */
  protected function buildCancelLinkUrl() {
    $query = $this->getRequest()->query;

    if ($query->has('destination')) {
      $options = UrlHelper::parse($query->get('destination'));
      $url = Url::fromUserInput('/' . ltrim($options['path'], '/'), $options);
    }
    else {
      $url = Url::fromRoute('entity.site_verification.collection');
    }

    return $url;
  }

  /**
   * Get the input mode set in storage, and update on button press.
   *
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   Submitted form state.
   *
   * @return string
   *   One of 'manual', 'input_tag', 'input_file'.
   */
  protected function getInputMode(FormStateInterface $form_state) {
    // Input mode is in storage if available.
    $input_mode = $form_state->get('input_mode') ?? 'manual';

    // Submissions of the mode buttons can change mode.
    if ($form_state->hasValue('op')) {
      foreach (['manual', 'input_tag', 'input_file'] as $button) {
        if ($form_state->hasValue($button)) {
          $input_mode = $button;
          $form_state->set('input_mode', $input_mode);
          break;
        }
      }
    }

    return $input_mode;
  }

  /**
   * Ajax callback to return updated part of the form.
   *
   * This only returns the form after it is built. Do not attempt to change the
   * form or form state in this callback; it is only to return the form or ajax
   * commands.
   */
  public function ajaxSubmitForm(array $form, FormStateInterface $form_state) {

    // Return the part of the form that's been updated.
    return $form['content'];
  }

  /**
   * Validation callback to process pasted meta tag into name/content fields.
   */
  public function validateMetaHelper(
    array &$form,
    FormStateInterface $form_state,
  ) {
    $meta_helper = $form_state->getValue('meta_helper');
    $input_mode = $form_state->getValue('input_mode');
    if (empty($meta_helper) || $input_mode != 'input_tag') {
      return;
    }

    // Store the submitted value to be used as default.
    $form_state->set(
      'sv_default_value_meta_helper',
      $meta_helper
    );

    $dom = new \DOMDocument();
    $dom->loadHTML($meta_helper);
    foreach ($dom->getElementsByTagName('meta') as $tag) {
      if ($tag->getAttribute('name') && $tag->getAttribute('content')) {
        // Pass values to ::validateForm to update the entity before validation.
        $form_state->set('sv_update_values', [
          'type' => SiteVerificationType::Meta->value,
          'name' => $tag->getAttribute('name'),
          'content' => $tag->getAttribute('content'),
        ]);
        return;
      }
    }

    $form_state->setErrorByName(
      'meta_helper',
      $this->t('A valid metatag was not found.')
    );
  }

  /**
   * Validation callback to process uploaded file into name/content fields.
   */
  public function validateFileHelper(
    array &$form,
    FormStateInterface $form_state,
  ) {
    $file_helper = $form_state->getValue('file_helper');
    $input_mode = $form_state->getValue('input_mode');
    if (empty($file_helper) || $input_mode != 'input_file') {
      return;
    }

    // Store the submitted value to be used as default.
    $form_state->set(
      'sv_default_value_file_helper',
      $file_helper
    );

    $file = $this->entityTypeManager->getStorage('file')->load($file_helper[0]);
    $contents = @file_get_contents($file->getFileUri());
    if ($contents === FALSE) {
      $form_state->setErrorByName('file_helper', $this->t(
        'The file @filename could not be read.', [
          '@filename' => $file->getFilename(),
        ]
      ));
      return;
    }

    // Pass values to ::validateForm to update the entity before validation.
    $form_state->set('sv_update_values', [
      'type' => SiteVerificationType::File->value,
      'name' => $file->getFilename(),
      'content' => file_get_contents($file->getFileUri()),
    ]);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    // Do not pile on more errors when there is already a validation error.
    if ($form_state->hasAnyErrors()) {
      return;
    }

    // Update the entity with any overrides set in meta or file helpers.
    if ($form_state->has('sv_update_values')) {
      $overrides = $form_state->get('sv_update_values');
      foreach ($overrides as $property => $value) {
        $this->entity->set($property, $value);
      }

      // Values have been set. Clear out the state.
      $form_state->set('sv_update_values', []);
    }

    // Entity has already been rebuilt using form input. Check for violations.
    if ($violations = $this->entity->validate()) {
      foreach ($violations as $violation) {
        $form_state->setErrorByName(
          $violation->getPropertyPath(),
          $violation->getMessage()
        );
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->messenger()->addStatus($this->t('Site Verification @name @state.', [
      '@name' => $this->entity->label(),
      '@state' => $this->entity->isNew()
        ? $this->t('saved')
        : $this->t('updated'),
    ]));

    // Redirect back to the collection. Destination parameter will override.
    $form_state->setRedirect('entity.site_verification.collection');

    // Delete any temporary file from the file_helper.
    if ($file_helper = $form_state->get('sv_default_value_file_helper')) {
      $file = $this->entityTypeManager->getStorage('file')
        ->load($file_helper[0]);
      if ($file) {
        $file->delete();
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    // Belt & brace: This validation error should never be reached.
    $violations = $this->entity->validate();
    if (empty($violations)) {
      return $this->entity->save();
    }

    throw new ConfigException('Site Verification entity is not valid.');
  }

  /**
   * Unique machine name callback.
   */
  public function exists($id) {
    $site_verification_storage = $this->entityTypeManager
      ->getStorage('site_verification');
    $entity = $site_verification_storage->getQuery()
      ->condition('id', $id)
      ->accessCheck(FALSE)
      ->execute();
    return (bool) $entity;
  }

}
