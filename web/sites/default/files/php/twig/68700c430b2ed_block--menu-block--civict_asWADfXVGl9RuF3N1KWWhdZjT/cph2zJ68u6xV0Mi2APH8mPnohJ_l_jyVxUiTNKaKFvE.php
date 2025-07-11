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

/* themes/contrib/civictheme/templates/block/block--menu-block--civictheme-primary-navigation.html.twig */
class __TwigTemplate_93b562ad927780cb2c6c22820cafea80 extends Template
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
        // line 11
        if ((($tmp = ($context["in_sidebar"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "  ";
            yield from $this->load("civictheme:side-navigation", 12)->unwrap()->yield(CoreExtension::toArray(["theme" => "light", "items" =>             // line 14
($context["items"] ?? null), "modifier_class" => ("ct-primary-navigation " . ((            // line 15
array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")))]));
        } else {
            // line 18
            yield "  ";
            yield from $this->load("civictheme:navigation", 18)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 19
($context["theme"] ?? null), "items" =>             // line 20
($context["items"] ?? null), "type" => (((            // line 21
($context["dropdown"] ?? null) == "none")) ? ("inline") : (($context["dropdown"] ?? null))), "dropdown_columns" =>             // line 22
($context["dropdown_columns"] ?? null), "dropdown_columns_fill" =>             // line 23
($context["dropdown_columns_fill"] ?? null), "is_animated" =>             // line 24
($context["is_animated"] ?? null), "menu_id" =>             // line 25
($context["menu_id"] ?? null), "modifier_class" => ("ct-primary-navigation " . ((            // line 26
array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")))]));
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["in_sidebar", "items", "modifier_class", "theme", "dropdown", "dropdown_columns", "dropdown_columns_fill", "is_animated", "menu_id"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/civictheme/templates/block/block--menu-block--civictheme-primary-navigation.html.twig";
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
        return array (  61 => 26,  60 => 25,  59 => 24,  58 => 23,  57 => 22,  56 => 21,  55 => 20,  54 => 19,  52 => 18,  49 => 15,  48 => 14,  46 => 12,  44 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/civictheme/templates/block/block--menu-block--civictheme-primary-navigation.html.twig", "/app/web/themes/contrib/civictheme/templates/block/block--menu-block--civictheme-primary-navigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 11, "include" => 12];
        static $filters = ["default" => 15];
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
