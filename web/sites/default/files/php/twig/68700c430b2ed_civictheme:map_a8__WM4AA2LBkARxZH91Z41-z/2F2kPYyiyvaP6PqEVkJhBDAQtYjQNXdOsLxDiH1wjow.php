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

/* civictheme:map */
class __TwigTemplate_74e7e7f3c86383244d375c38ad002c22 extends Template
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
            'content_top_block' => [$this, 'block_content_top_block'],
            'map_block' => [$this, 'block_map_block'],
            'links_block' => [$this, 'block_links_block'],
            'content_bottom_block' => [$this, 'block_content_bottom_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--map"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:map"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:map"));
        // line 28
        yield "
";
        // line 29
        $context["view_text"] = ((array_key_exists("view_text", $context)) ? (Twig\Extension\CoreExtension::default(($context["view_text"] ?? null), "View in Google Maps")) : ("View in Google Maps"));
        // line 30
        $context["with_background_class"] = (((($tmp = ($context["with_background"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-map--with-background") : (""));
        // line 31
        $context["vertical_spacing_class"] = ((CoreExtension::inFilter(($context["vertical_spacing"] ?? null), ["top", "bottom", "both"])) ? (Twig\Extension\CoreExtension::sprintf("ct-vertical-spacing-inset--%s", ($context["vertical_spacing"] ?? null))) : (""));
        // line 32
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 33
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s %s", ($context["theme_class"] ?? null), ($context["vertical_spacing_class"] ?? null), ($context["with_background_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 34
        yield "
";
        // line 35
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "  <div class=\"ct-map ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            yield ">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xxs-12\">
          ";
            // line 40
            yield from $this->unwrap()->yieldBlock('content_top_block', $context, $blocks);
            // line 47
            yield "
          ";
            // line 48
            yield from $this->unwrap()->yieldBlock('map_block', $context, $blocks);
            // line 61
            yield "
          ";
            // line 62
            yield from $this->unwrap()->yieldBlock('links_block', $context, $blocks);
            // line 76
            yield "
          ";
            // line 77
            yield from $this->unwrap()->yieldBlock('content_bottom_block', $context, $blocks);
            // line 84
            yield "        </div>
      </div>
    </div>
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["with_background", "vertical_spacing", "theme", "url", "attributes", "content_top", "address", "view_url", "content_bottom"]);        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_top"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "              <div class=\"ct-map__content-top\">";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_top"] ?? null));
            // line 44
            yield "</div>
            ";
        }
        // line 46
        yield "          ";
        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_map_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 49
        yield "            <div class=\"ct-map__canvas\">
              ";
        // line 50
        $context["attributes"] = "allowfullscreen data-chromatic=\"ignore\"";
        // line 51
        yield "              ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["address"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "                ";
            $context["attributes"] = (((($context["attributes"] ?? null) . "title=\"") . ($context["address"] ?? null)) . "\"");
            // line 53
            yield "              ";
        }
        // line 54
        yield "              ";
        yield from $this->load("civictheme:iframe", 54)->unwrap()->yield(CoreExtension::toArray(["url" =>         // line 55
($context["url"] ?? null), "attributes" =>         // line 56
($context["attributes"] ?? null), "modifier_class" => "ct-map__iframe"]));
        // line 59
        yield "            </div>
          ";
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_links_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["view_url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "              ";
            yield from $this->load("civictheme:button", 64)->unwrap()->yield(CoreExtension::toArray(["kind" => "link", "theme" =>             // line 66
($context["theme"] ?? null), "type" => "tertiary", "text" =>             // line 68
($context["view_text"] ?? null), "url" =>             // line 69
($context["view_url"] ?? null), "is_new_window" => true, "is_external" => true, "modifier_class" => "ct-map__link"]));
            // line 74
            yield "            ";
        }
        // line 75
        yield "          ";
        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_bottom_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 78
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_bottom"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "              <div class=\"ct-map__content-bottom\">";
            // line 80
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_bottom"] ?? null));
            // line 81
            yield "</div>
            ";
        }
        // line 83
        yield "          ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:map";
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
        return array (  207 => 83,  203 => 81,  201 => 80,  199 => 79,  196 => 78,  189 => 77,  184 => 75,  181 => 74,  179 => 69,  178 => 68,  177 => 66,  175 => 64,  172 => 63,  165 => 62,  159 => 59,  157 => 56,  156 => 55,  154 => 54,  151 => 53,  148 => 52,  145 => 51,  143 => 50,  140 => 49,  133 => 48,  128 => 46,  124 => 44,  122 => 43,  120 => 42,  117 => 41,  110 => 40,  99 => 84,  97 => 77,  94 => 76,  92 => 62,  89 => 61,  87 => 48,  84 => 47,  82 => 40,  70 => 36,  68 => 35,  65 => 34,  63 => 33,  61 => 32,  59 => 31,  57 => 30,  55 => 29,  52 => 28,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:map", "themes/contrib/civictheme/components/02-molecules/map/map.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 29, "if" => 35, "block" => 40, "include" => 54];
        static $filters = ["default" => 29, "format" => 31, "escape" => 36, "raw" => 36];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['default', 'format', 'escape', 'raw'],
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
