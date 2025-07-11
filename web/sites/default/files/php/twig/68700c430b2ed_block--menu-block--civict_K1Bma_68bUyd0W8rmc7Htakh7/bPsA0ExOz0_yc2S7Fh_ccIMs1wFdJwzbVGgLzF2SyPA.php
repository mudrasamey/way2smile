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

/* themes/contrib/civictheme/templates/block/block--menu-block--civictheme-secondary-navigation.html.twig */
class __TwigTemplate_fa752d5af910c41c84d92fe8fe59bf64 extends Template
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
        // line 7
        if ((($tmp = ($context["in_sidebar"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "  ";
            yield from $this->load("civictheme:side-navigation", 8)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 9
($context["theme"] ?? null), "items" =>             // line 10
($context["items"] ?? null), "modifier_class" => ("ct-secondary-navigation " . ((            // line 11
array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")))]));
        } else {
            // line 14
            yield "  ";
            yield from $this->load("civictheme:navigation", 14)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 15
($context["theme"] ?? null), "items" =>             // line 16
($context["items"] ?? null), "type" => (((            // line 17
($context["dropdown"] ?? null) == "none")) ? ("inline") : (($context["dropdown"] ?? null))), "dropdown_columns" =>             // line 18
($context["dropdown_columns"] ?? null), "dropdown_columns_fill" =>             // line 19
($context["dropdown_columns_fill"] ?? null), "is_animated" =>             // line 20
($context["is_animated"] ?? null), "menu_id" =>             // line 21
($context["menu_id"] ?? null), "modifier_class" => ("ct-secondary-navigation " . ((            // line 22
array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")))]));
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["in_sidebar", "theme", "items", "modifier_class", "dropdown", "dropdown_columns", "dropdown_columns_fill", "is_animated", "menu_id"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/civictheme/templates/block/block--menu-block--civictheme-secondary-navigation.html.twig";
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
        return array (  62 => 22,  61 => 21,  60 => 20,  59 => 19,  58 => 18,  57 => 17,  56 => 16,  55 => 15,  53 => 14,  50 => 11,  49 => 10,  48 => 9,  46 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/civictheme/templates/block/block--menu-block--civictheme-secondary-navigation.html.twig", "/app/web/themes/contrib/civictheme/templates/block/block--menu-block--civictheme-secondary-navigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 7, "include" => 8];
        static $filters = ["default" => 11];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['default'],
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
