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

/* themes/contrib/civictheme/templates/paragraphs/paragraph--civictheme-manual-list.html.twig */
class __TwigTemplate_eed17ee74199908b089e6e5ac95794a6 extends Template
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

        $this->blocks = [
            'rows_block' => [$this, 'block_rows_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 7
        return "civictheme:list";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("civictheme:list", 7);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows", "theme", "title", "column_count", "fill_width", "with_background"]);    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_rows_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "  ";
        if ((($tmp = ($context["rows"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "<div class=\"ct-list__rows\">
      ";
            // line 12
            yield from $this->load("civictheme:grid", 12)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 13
($context["theme"] ?? null), "title" =>             // line 14
($context["title"] ?? null), "template_column_count" =>             // line 15
($context["column_count"] ?? null), "fill_width" =>             // line 16
($context["fill_width"] ?? null), "items" =>             // line 17
($context["rows"] ?? null), "theme" =>             // line 18
($context["theme"] ?? null), "with_background" =>             // line 19
($context["with_background"] ?? null), "row_class" => "row--equal-heights-content row--vertically-spaced"]));
            // line 22
            yield "    </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/civictheme/templates/paragraphs/paragraph--civictheme-manual-list.html.twig";
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
        return array (  76 => 22,  74 => 19,  73 => 18,  72 => 17,  71 => 16,  70 => 15,  69 => 14,  68 => 13,  67 => 12,  64 => 11,  61 => 10,  54 => 9,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/civictheme/templates/paragraphs/paragraph--civictheme-manual-list.html.twig", "/app/web/themes/contrib/civictheme/templates/paragraphs/paragraph--civictheme-manual-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 7, "if" => 10, "include" => 12];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'if', 'include'],
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
