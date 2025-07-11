<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* civictheme:icon */
class __TwigTemplate_725ae27568e879b0d90016798bb6beed extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--icon"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:icon"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:icon"));
        // line 16
        $context["assets_dir"] = ((array_key_exists("assets_dir", $context)) ? (Twig\Extension\CoreExtension::default(($context["assets_dir"] ?? null), "@civictheme/../assets")) : ("@civictheme/../assets"));
        // line 18
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["symbol"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            $context["source"] = Twig\Extension\CoreExtension::source($this->env, (((($context["assets_dir"] ?? null) . "/icons/") . ($context["symbol"] ?? null)) . ".svg"), true);
            // line 20
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["source"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 21
                $context["size_class"] = (((($tmp = ($context["size"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("ct-icon--size-" . ($context["size"] ?? null))) : (""));
                // line 22
                $context["base_class"] = ("ct-icon " . ($context["size_class"] ?? null));
                // line 23
                $context["modifier"] = ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : (""));
                // line 24
                $context["aria_attributes"] = "aria-hidden=\"true\" role=\"img\"";
                // line 25
                $context["alt_attribute"] = ((array_key_exists("alt", $context)) ? ((("alt=\"" . ($context["alt"] ?? null)) . "\"")) : (""));
                // line 26
                $context["additional_attributes"] = ((array_key_exists("attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["attributes"] ?? null), "")) : (""));
                // line 27
                $context["attributes"] = ((((((((("class=\"" . ($context["base_class"] ?? null)) . " ") . ($context["modifier"] ?? null)) . "\" ") . ($context["aria_attributes"] ?? null)) . " ") . ($context["alt_attribute"] ?? null)) . " ") . ($context["additional_attributes"] ?? null));
                // line 28
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::replace(($context["source"] ?? null), ["<svg " => (("<svg " . ($context["attributes"] ?? null)) . " ")]));
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["symbol", "size", "modifier_class", "alt", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:icon";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  70 => 28,  68 => 27,  66 => 26,  64 => 25,  62 => 24,  60 => 23,  58 => 22,  56 => 21,  54 => 20,  52 => 19,  50 => 18,  48 => 16,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:icon", "themes/contrib/civictheme/components/00-base/icon/icon.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 16, "if" => 18];
        static $filters = ["default" => 16, "raw" => 28, "replace" => 28];
        static $functions = ["source" => 19];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['default', 'raw', 'replace'],
                ['source'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
