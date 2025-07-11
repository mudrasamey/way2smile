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

/* @templates/page/page.twig */
class __TwigTemplate_360118e4bd20bdad684ce19a7a9b800d extends Template
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
            'header_block' => [$this, 'block_header_block'],
            'banner_block' => [$this, 'block_banner_block'],
            'highlighted_block' => [$this, 'block_highlighted_block'],
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'back_to_top_block' => [$this, 'block_back_to_top_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 60
        yield "
";
        // line 61
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 62
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s", ($context["theme_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 63
        yield "
<div class=\"ct-page ";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
        yield "\" ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
        }
        yield ">
  <a id=\"top\" tab-index=\"-1\" aria-hidden=\"true\"></a>

  ";
        // line 67
        yield from $this->unwrap()->yieldBlock('header_block', $context, $blocks);
        // line 79
        yield "
  ";
        // line 80
        yield from $this->unwrap()->yieldBlock('banner_block', $context, $blocks);
        // line 85
        yield "
  ";
        // line 86
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["highlighted"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 87
            yield "    ";
            yield from $this->unwrap()->yieldBlock('highlighted_block', $context, $blocks);
            // line 96
            yield "  ";
        }
        // line 97
        yield "
  ";
        // line 98
        yield from $this->unwrap()->yieldBlock('content_block', $context, $blocks);
        // line 119
        yield "
  ";
        // line 120
        yield from $this->unwrap()->yieldBlock('footer_block', $context, $blocks);
        // line 134
        yield "
  ";
        // line 135
        yield from $this->unwrap()->yieldBlock('back_to_top_block', $context, $blocks);
        // line 138
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "attributes", "highlighted", "header_theme", "header_top_1", "header_top_2", "header_top_3", "header_middle_1", "header_middle_2", "header_middle_3", "header_bottom_1", "banner", "content_top", "hide_sidebar_left", "hide_sidebar_right", "sidebar_top_left", "sidebar_top_left_attributes", "sidebar_top_right", "sidebar_top_right_attributes", "content", "content_attributes", "sidebar_bottom_left", "sidebar", "sidebar_bottom_left_attributes", "sidebar_attributes", "sidebar_bottom_right", "sidebar_bottom_right_attributes", "content_contained", "content_bottom", "vertical_spacing", "footer_theme", "footer_background_image", "footer_top_1", "footer_top_2", "footer_middle_1", "footer_middle_2", "footer_middle_3", "footer_middle_4", "footer_bottom_1", "footer_bottom_2"]);        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        yield "    ";
        yield from $this->load("civictheme:header", 68)->unwrap()->yield(CoreExtension::toArray(["theme" =>         // line 69
($context["header_theme"] ?? null), "content_top1" =>         // line 70
($context["header_top_1"] ?? null), "content_top2" =>         // line 71
($context["header_top_2"] ?? null), "content_top3" =>         // line 72
($context["header_top_3"] ?? null), "content_middle1" =>         // line 73
($context["header_middle_1"] ?? null), "content_middle2" =>         // line 74
($context["header_middle_2"] ?? null), "content_middle3" =>         // line 75
($context["header_middle_3"] ?? null), "content_bottom1" =>         // line 76
($context["header_bottom_1"] ?? null)]));
        // line 78
        yield "  ";
        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_banner_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 81
        yield "    ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["banner"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["banner"] ?? null));
            yield "
    ";
        }
        // line 84
        yield "  ";
        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_highlighted_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 88
        yield "      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xxs-12\">
            ";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["highlighted"] ?? null));
        yield "
          </div>
        </div>
      </div>
    ";
        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 99
        yield "    ";
        yield from $this->load("civictheme:layout", 99)->unwrap()->yield(CoreExtension::toArray(["content_top" =>         // line 100
($context["content_top"] ?? null), "hide_sidebar_left" =>         // line 101
($context["hide_sidebar_left"] ?? null), "hide_sidebar_right" =>         // line 102
($context["hide_sidebar_right"] ?? null), "sidebar_top_left" =>         // line 103
($context["sidebar_top_left"] ?? null), "sidebar_top_left_attributes" =>         // line 104
($context["sidebar_top_left_attributes"] ?? null), "sidebar_top_right" =>         // line 105
($context["sidebar_top_right"] ?? null), "sidebar_top_right_attributes" =>         // line 106
($context["sidebar_top_right_attributes"] ?? null), "content" =>         // line 107
($context["content"] ?? null), "content_attributes" =>         // line 108
($context["content_attributes"] ?? null), "sidebar_bottom_left" => ((        // line 109
array_key_exists("sidebar_bottom_left", $context)) ? (Twig\Extension\CoreExtension::default(($context["sidebar_bottom_left"] ?? null), ($context["sidebar"] ?? null))) : (($context["sidebar"] ?? null))), "sidebar_bottom_left_attributes" => ((        // line 110
array_key_exists("sidebar_bottom_left_attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["sidebar_bottom_left_attributes"] ?? null), ($context["sidebar_attributes"] ?? null))) : (($context["sidebar_attributes"] ?? null))), "sidebar_bottom_right" =>         // line 111
($context["sidebar_bottom_right"] ?? null), "sidebar_bottom_right_attributes" =>         // line 112
($context["sidebar_bottom_right_attributes"] ?? null), "is_contained" =>         // line 113
($context["content_contained"] ?? null), "content_bottom" =>         // line 114
($context["content_bottom"] ?? null), "vertical_spacing" =>         // line 115
($context["vertical_spacing"] ?? null), "attributes" => ((Twig\Extension\CoreExtension::testEmpty(        // line 116
($context["banner"] ?? null))) ? ("id=\"main-content\" tabindex=\"-1\"") : (""))]));
        // line 118
        yield "  ";
        yield from [];
    }

    // line 120
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 121
        yield "    ";
        yield from $this->load("civictheme:footer", 121)->unwrap()->yield(CoreExtension::toArray(["theme" =>         // line 122
($context["footer_theme"] ?? null), "background_image" =>         // line 123
($context["footer_background_image"] ?? null), "content_top1" =>         // line 124
($context["footer_top_1"] ?? null), "content_top2" =>         // line 125
($context["footer_top_2"] ?? null), "content_middle1" =>         // line 126
($context["footer_middle_1"] ?? null), "content_middle2" =>         // line 127
($context["footer_middle_2"] ?? null), "content_middle3" =>         // line 128
($context["footer_middle_3"] ?? null), "content_middle4" =>         // line 129
($context["footer_middle_4"] ?? null), "content_bottom1" =>         // line 130
($context["footer_bottom_1"] ?? null), "content_bottom2" =>         // line 131
($context["footer_bottom_2"] ?? null)]));
        // line 133
        yield "  ";
        yield from [];
    }

    // line 135
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_back_to_top_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 136
        yield "    ";
        yield from $this->load("civictheme:back-to-top", 136)->unwrap()->yield(CoreExtension::toArray([]));
        // line 137
        yield "  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@templates/page/page.twig";
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
        return array (  243 => 137,  240 => 136,  233 => 135,  228 => 133,  226 => 131,  225 => 130,  224 => 129,  223 => 128,  222 => 127,  221 => 126,  220 => 125,  219 => 124,  218 => 123,  217 => 122,  215 => 121,  208 => 120,  203 => 118,  201 => 116,  200 => 115,  199 => 114,  198 => 113,  197 => 112,  196 => 111,  195 => 110,  194 => 109,  193 => 108,  192 => 107,  191 => 106,  190 => 105,  189 => 104,  188 => 103,  187 => 102,  186 => 101,  185 => 100,  183 => 99,  176 => 98,  166 => 91,  161 => 88,  154 => 87,  149 => 84,  143 => 82,  140 => 81,  133 => 80,  128 => 78,  126 => 76,  125 => 75,  124 => 74,  123 => 73,  122 => 72,  121 => 71,  120 => 70,  119 => 69,  117 => 68,  110 => 67,  103 => 138,  101 => 135,  98 => 134,  96 => 120,  93 => 119,  91 => 98,  88 => 97,  85 => 96,  82 => 87,  80 => 86,  77 => 85,  75 => 80,  72 => 79,  70 => 67,  60 => 64,  57 => 63,  55 => 62,  53 => 61,  50 => 60,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@templates/page/page.twig", "themes/contrib/civictheme/components/04-templates/page/page.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 61, "if" => 64, "block" => 67, "include" => 68];
        static $filters = ["format" => 61, "default" => 61, "escape" => 64, "raw" => 64];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['format', 'default', 'escape', 'raw'],
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
