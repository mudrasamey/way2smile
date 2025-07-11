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

/* civictheme:mobile-navigation-close */
class __TwigTemplate_1897e66353ddf6d04e344e9750548e50 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--mobile-navigation-close"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:mobile-navigation-close"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:mobile-navigation-close"));
        // line 13
        yield "
";
        // line 14
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 15
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s", ($context["theme_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 16
        $context["attributes"] = Twig\Extension\CoreExtension::sprintf("%s %s", "data-flyout-close-all-trigger", ((array_key_exists("attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["attributes"] ?? null), "")) : ("")));
        // line 17
        $context["text"] = ((array_key_exists("text", $context)) ? (Twig\Extension\CoreExtension::default(($context["text"] ?? null), "Close")) : ("Close"));
        // line 18
        yield "
<div class=\"ct-mobile-navigation-close ";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
        yield "\">
  ";
        // line 20
        yield from $this->load("civictheme:button", 20)->unwrap()->yield(CoreExtension::toArray(["theme" =>         // line 21
($context["theme"] ?? null), "type" => "tertiary", "kind" => "button", "size" => "small", "text" =>         // line 25
($context["text"] ?? null), "icon" => "close", "icon_placement" => "after", "attributes" =>         // line 28
($context["attributes"] ?? null), "modifier_class" => "ct-mobile-navigation-close__button"]));
        // line 31
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:mobile-navigation-close";
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
        return array (  71 => 31,  69 => 28,  68 => 25,  67 => 21,  66 => 20,  62 => 19,  59 => 18,  57 => 17,  55 => 16,  53 => 15,  51 => 14,  48 => 13,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:mobile-navigation-close", "themes/contrib/civictheme/components/03-organisms/mobile-navigation/mobile-navigation-close.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 14, "include" => 20];
        static $filters = ["format" => 14, "default" => 14, "escape" => 19];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['format', 'default', 'escape'],
                [],
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
