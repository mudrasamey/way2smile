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

/* themes/contrib/civictheme/templates/views/views-exposed-form.html.twig */
class __TwigTemplate_048808ed9c32c2e6be1694720e8f8250 extends Template
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
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["q"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "  ";
            // line 12
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["q"] ?? null), "html", null, true);
            yield "
";
        }
        // line 14
        yield "
";
        // line 15
        if ((($tmp = ($context["single_filter"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "  ";
            yield from $this->load("civictheme:single-filter", 16)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 17
($context["theme"] ?? null), "title" =>             // line 18
($context["filter_title"] ?? null), "items" =>             // line 19
($context["filter_items"] ?? null), "is_multiple" =>             // line 20
($context["is_multiple"] ?? null), "form_attributes" =>             // line 21
($context["form_attributes"] ?? null), "form_suffix" =>             // line 22
($context["form_suffix"] ?? null)]));
        } elseif ((($tmp =         // line 24
($context["group_filter"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "  ";
            yield from $this->load("civictheme:group-filter", 25)->unwrap()->yield(CoreExtension::merge($context, ["theme" =>             // line 26
($context["theme"] ?? null), "title" =>             // line 27
($context["filter_title"] ?? null), "items" =>             // line 28
($context["filter_items"] ?? null), "form_attributes" =>             // line 29
($context["form_attributes"] ?? null), "form_suffix" =>             // line 30
($context["form_suffix"] ?? null)]));
        } else {
            // line 33
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["form"] ?? null), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["q", "single_filter", "theme", "filter_title", "filter_items", "is_multiple", "form_attributes", "form_suffix", "group_filter", "form"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/civictheme/templates/views/views-exposed-form.html.twig";
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
        return array (  79 => 33,  76 => 30,  75 => 29,  74 => 28,  73 => 27,  72 => 26,  70 => 25,  68 => 24,  66 => 22,  65 => 21,  64 => 20,  63 => 19,  62 => 18,  61 => 17,  59 => 16,  57 => 15,  54 => 14,  48 => 12,  46 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/civictheme/templates/views/views-exposed-form.html.twig", "/app/web/themes/contrib/civictheme/templates/views/views-exposed-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 7, "include" => 16];
        static $filters = ["escape" => 12];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape'],
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
