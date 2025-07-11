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

/* themes/contrib/civictheme/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_c68152abbc8a575177e3e4bcfeec9c97 extends Template
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
            'content_block' => [$this, 'block_content_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 7
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("block.html.twig", 7);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["show_site_logo", "logos", "url", "title", "theme", "modifier_class", "type", "show_site_name", "site_name", "show_site_slogan", "site_slogan"]);    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "  ";
        if ((($tmp = ($context["show_site_logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "    ";
            yield from $this->load("civictheme:logo", 11)->unwrap()->yield(CoreExtension::toArray(["logos" =>             // line 12
($context["logos"] ?? null), "url" =>             // line 13
($context["url"] ?? null), "title" =>             // line 14
($context["title"] ?? null), "theme" =>             // line 15
($context["theme"] ?? null), "modifier_class" =>             // line 16
($context["modifier_class"] ?? null), "type" => (((            // line 17
array_key_exists("type", $context) &&  !(null === $context["type"]))) ? ($context["type"]) : ("default"))]));
            // line 19
            yield "  ";
        }
        // line 20
        yield "
  ";
        // line 21
        if ((($context["show_site_name"] ?? null) && ($context["site_name"] ?? null))) {
            // line 22
            yield "    ";
            yield from $this->load("civictheme:link", 22)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 23
($context["theme"] ?? null), "text" =>             // line 24
($context["site_name"] ?? null), "url" => $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"), "attributes" => "rel=\"home\""]));
            // line 28
            yield "  ";
        }
        // line 29
        yield "
  ";
        // line 30
        if ((($context["show_site_slogan"] ?? null) && ($context["site_slogan"] ?? null))) {
            // line 31
            yield "    ";
            yield from $this->load("civictheme:paragraph", 31)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 32
($context["theme"] ?? null), "content" =>             // line 33
($context["site_slogan"] ?? null)]));
            // line 35
            yield "  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/civictheme/templates/block/block--system-branding-block.html.twig";
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
        return array (  99 => 35,  97 => 33,  96 => 32,  94 => 31,  92 => 30,  89 => 29,  86 => 28,  84 => 24,  83 => 23,  81 => 22,  79 => 21,  76 => 20,  73 => 19,  71 => 17,  70 => 16,  69 => 15,  68 => 14,  67 => 13,  66 => 12,  64 => 11,  61 => 10,  54 => 9,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/civictheme/templates/block/block--system-branding-block.html.twig", "/app/web/themes/contrib/civictheme/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 7, "if" => 10, "include" => 11];
        static $filters = [];
        static $functions = ["path" => 25];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'if', 'include'],
                [],
                ['path'],
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
