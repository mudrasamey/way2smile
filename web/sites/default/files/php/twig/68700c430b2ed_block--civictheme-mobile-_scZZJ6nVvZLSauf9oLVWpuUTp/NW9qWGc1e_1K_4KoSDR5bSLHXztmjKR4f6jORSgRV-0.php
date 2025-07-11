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

/* themes/contrib/civictheme/templates/block/block--civictheme-mobile-navigation--default.html.twig */
class __TwigTemplate_b84b2c51e7fc3a351cb15408b01b3519 extends Template
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
        yield from $this->load("civictheme:mobile-navigation-trigger", 7)->unwrap()->yield(CoreExtension::merge($context, ["theme" =>         // line 8
($context["trigger_theme"] ?? null), "text" =>         // line 9
($context["trigger_text"] ?? null)]));
        // line 11
        yield "
";
        // line 12
        yield from $this->load("civictheme:mobile-navigation", 12)->unwrap()->yield(CoreExtension::merge($context, ["theme" =>         // line 13
($context["theme"] ?? null), "top_menu" =>         // line 14
($context["top_menu"] ?? null), "bottom_menu" =>         // line 15
($context["bottom_menu"] ?? null)]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["trigger_theme", "trigger_text", "theme", "top_menu", "bottom_menu"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/civictheme/templates/block/block--civictheme-mobile-navigation--default.html.twig";
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
        return array (  54 => 15,  53 => 14,  52 => 13,  51 => 12,  48 => 11,  46 => 9,  45 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/civictheme/templates/block/block--civictheme-mobile-navigation--default.html.twig", "/app/web/themes/contrib/civictheme/templates/block/block--civictheme-mobile-navigation--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 7];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
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
