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

/* themes/contrib/civictheme/templates/form/form-element--civictheme-field.html.twig */
class __TwigTemplate_9e48475403e7a299949d3f62a5527d4c extends Template
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
        yield "
";
        // line 8
        yield from $this->load("civictheme:field", 8)->unwrap()->yield(CoreExtension::toArray(["theme" =>         // line 9
($context["theme"] ?? null), "title" =>         // line 10
($context["title"] ?? null), "title_display" =>         // line 11
($context["title_display"] ?? null), "type" =>         // line 12
($context["type"] ?? null), "orientation" =>         // line 13
($context["orientation"] ?? null), "placeholder" =>         // line 14
($context["placeholder"] ?? null), "is_required" =>         // line 15
($context["is_required"] ?? null), "is_disabled" =>         // line 16
($context["is_disabled"] ?? null), "is_invalid" =>         // line 17
($context["is_invalid"] ?? null), "description" =>         // line 18
($context["description"] ?? null), "message" =>         // line 19
($context["message"] ?? null), "control" =>         // line 20
($context["control"] ?? null), "attributes" =>         // line 21
($context["attributes"] ?? null), "modifier_class" =>         // line 22
($context["modifier_class"] ?? null), "prefix" =>         // line 23
($context["prefix"] ?? null), "suffix" =>         // line 24
($context["suffix"] ?? null)]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "title", "title_display", "type", "orientation", "placeholder", "is_required", "is_disabled", "is_invalid", "description", "message", "control", "attributes", "modifier_class", "prefix", "suffix"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/civictheme/templates/form/form-element--civictheme-field.html.twig";
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
        return array (  63 => 24,  62 => 23,  61 => 22,  60 => 21,  59 => 20,  58 => 19,  57 => 18,  56 => 17,  55 => 16,  54 => 15,  53 => 14,  52 => 13,  51 => 12,  50 => 11,  49 => 10,  48 => 9,  47 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/civictheme/templates/form/form-element--civictheme-field.html.twig", "/app/web/themes/contrib/civictheme/templates/form/form-element--civictheme-field.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 8];
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
