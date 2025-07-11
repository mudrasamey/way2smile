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

/* civictheme:mobile-navigation-trigger */
class __TwigTemplate_ed56f6f3a3324cb5b41b679c7fe0ecf6 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--mobile-navigation-trigger"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:mobile-navigation-trigger"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:mobile-navigation-trigger"));
        // line 14
        yield "
";
        // line 15
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("ct-mobile-navigation-trigger %s", ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 16
        $context["icon"] = ((array_key_exists("icon", $context)) ? (Twig\Extension\CoreExtension::default(($context["icon"] ?? null), "bars")) : ("bars"));
        // line 17
        yield "
";
        // line 18
        yield from $this->load("civictheme:button", 18)->unwrap()->yield(CoreExtension::toArray(["theme" =>         // line 19
($context["theme"] ?? null), "kind" => "button", "icon" =>         // line 21
($context["icon"] ?? null), "icon_placement" => "after", "size" => "small", "text" =>         // line 24
($context["text"] ?? null), "modifier_class" =>         // line 25
($context["modifier_class"] ?? null), "attributes" => (((($tmp =         // line 26
($context["attributes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($context["attributes"] ?? null) . " data-flyout-open-trigger data-flyout-target=\".ct-mobile-navigation\" aria-expanded=\"false\"")) : ("data-flyout-open-trigger data-flyout-target=\".ct-mobile-navigation\" aria-expanded=\"false\""))]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "text", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:mobile-navigation-trigger";
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
        return array (  63 => 26,  62 => 25,  61 => 24,  60 => 21,  59 => 19,  58 => 18,  55 => 17,  53 => 16,  51 => 15,  48 => 14,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:mobile-navigation-trigger", "themes/contrib/civictheme/components/03-organisms/mobile-navigation/mobile-navigation-trigger.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 15, "include" => 18];
        static $filters = ["format" => 15, "default" => 15];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['format', 'default'],
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
