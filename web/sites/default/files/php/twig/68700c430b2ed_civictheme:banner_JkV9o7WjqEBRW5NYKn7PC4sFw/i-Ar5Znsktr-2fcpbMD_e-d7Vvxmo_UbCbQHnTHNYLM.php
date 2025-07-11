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

/* civictheme:banner */
class __TwigTemplate_96d77752cec487d709f5c475169821ac extends Template
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
            'content_top1_block' => [$this, 'block_content_top1_block'],
            'breadcrumb_block' => [$this, 'block_breadcrumb_block'],
            'content_top2_block' => [$this, 'block_content_top2_block'],
            'content_top3_block' => [$this, 'block_content_top3_block'],
            'site_section_block' => [$this, 'block_site_section_block'],
            'title_block' => [$this, 'block_title_block'],
            'content_middle_block' => [$this, 'block_content_middle_block'],
            'content_block' => [$this, 'block_content_block'],
            'featured_image_block' => [$this, 'block_featured_image_block'],
            'content_below_block' => [$this, 'block_content_below_block'],
            'content_bottom_block' => [$this, 'block_content_bottom_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--banner"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:banner"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:banner"));
        // line 50
        yield "
";
        // line 51
        $context["is_decorative_class"] = (((($tmp = ($context["is_decorative"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-banner--decorative") : (""));
        // line 52
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 53
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s", ($context["theme_class"] ?? null), ($context["is_decorative_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 54
        yield "
";
        // line 55
        if ((((((((( !Twig\Extension\CoreExtension::testEmpty(($context["content_top1"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_top2"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_top3"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["site_section"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_below"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_bottom"] ?? null)))) {
            // line 56
            yield "  <div class=\"ct-banner ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\" id=\"main-content\" tabindex=\"-1\" ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            yield ">
    <div class=\"ct-banner__wrapper\">
      <div
        class=\"ct-banner__inner ";
            // line 59
            if ((($tmp = ($context["background_image_blend_mode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "ct-background--";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("background_image_blend_mode", $context)) ? (Twig\Extension\CoreExtension::default(($context["background_image_blend_mode"] ?? null), "normal")) : ("normal")), "html", null, true);
            }
            yield "\"
        ";
            // line 60
            if (((($context["background_image"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["background_image"] ?? null), "url", [], "any", true, true, true, 60)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["background_image"] ?? null), "url", [], "any", false, false, true, 60)))) {
                yield "style=\"background-image: url('";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["background_image"] ?? null), "url", [], "any", false, false, true, 60), "html", null, true);
                yield "');\"";
            }
            // line 61
            yield "      >
        ";
            // line 62
            if (((($context["background_image"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["background_image"] ?? null), "alt", [], "any", true, true, true, 62)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["background_image"] ?? null), "alt", [], "any", false, false, true, 62)))) {
                // line 63
                yield "          <span role=\"img\" aria-label=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["background_image"] ?? null), "alt", [], "any", false, false, true, 63), "html", null, true);
                yield "\"> </span>
        ";
            }
            // line 65
            yield "
        <div class=\"container\">

          ";
            // line 68
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_top1"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 69
                yield "            <div class=\"row\">";
                // line 70
                yield from $this->unwrap()->yieldBlock('content_top1_block', $context, $blocks);
                // line 77
                yield "</div>
          ";
            }
            // line 79
            yield "
          ";
            // line 80
            if (( !Twig\Extension\CoreExtension::testEmpty(($context["breadcrumb"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_top2"] ?? null)))) {
                // line 81
                yield "            <div class=\"row\">
              ";
                // line 82
                yield from $this->unwrap()->yieldBlock('breadcrumb_block', $context, $blocks);
                // line 94
                yield "
              ";
                // line 95
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_top2"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 96
                    yield from $this->unwrap()->yieldBlock('content_top2_block', $context, $blocks);
                }
                // line 104
                yield "            </div>
          ";
            }
            // line 106
            yield "
          ";
            // line 107
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_top3"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 108
                yield "            <div class=\"row\">";
                // line 109
                yield from $this->unwrap()->yieldBlock('content_top3_block', $context, $blocks);
                // line 116
                yield "</div>
          ";
            }
            // line 118
            yield "
          ";
            // line 119
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["site_section"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 120
                yield "            <div class=\"row\">";
                // line 121
                yield from $this->unwrap()->yieldBlock('site_section_block', $context, $blocks);
                // line 131
                yield "</div>
          ";
            }
            // line 133
            yield "
          ";
            // line 134
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 135
                yield "            <div class=\"row\">";
                // line 136
                yield from $this->unwrap()->yieldBlock('title_block', $context, $blocks);
                // line 146
                yield "</div>
          ";
            }
            // line 148
            yield "
          ";
            // line 149
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 150
                yield "            <div class=\"row\">";
                // line 151
                yield from $this->unwrap()->yieldBlock('content_middle_block', $context, $blocks);
                // line 158
                yield "</div>
          ";
            }
            // line 160
            yield "
          ";
            // line 161
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 162
                yield "            <div class=\"row\">";
                // line 163
                yield from $this->unwrap()->yieldBlock('content_block', $context, $blocks);
                // line 170
                yield "</div>
          ";
            }
            // line 172
            yield "
        </div>
      </div>

      ";
            // line 176
            yield from $this->unwrap()->yieldBlock('featured_image_block', $context, $blocks);
            // line 188
            yield "    </div>

    ";
            // line 190
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_below"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 191
                yield "      <div class=\"container\">
        <div class=\"row\">";
                // line 193
                yield from $this->unwrap()->yieldBlock('content_below_block', $context, $blocks);
                // line 200
                yield "</div>
      </div>
    ";
            }
            // line 203
            yield "
    ";
            // line 204
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_bottom"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 205
                yield "      <div class=\"container\">
        <div class=\"row\">";
                // line 207
                yield from $this->unwrap()->yieldBlock('content_bottom_block', $context, $blocks);
                // line 214
                yield "</div>
      </div>
    ";
            }
            // line 217
            yield "  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_decorative", "theme", "content_top1", "content_top2", "content_top3", "site_section", "title", "content_middle", "content", "content_below", "content_bottom", "attributes", "background_image_blend_mode", "background_image", "breadcrumb", "featured_image"]);        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top1_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 71
        yield "                <div class=\"col-xxs-12\">
                  <div class=\"ct-banner__content-top\">";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_top1"] ?? null));
        // line 74
        yield "</div>
                </div>
              ";
        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 83
        yield "                ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["breadcrumb"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "                  <div class=\"";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["featured_image"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "col-xxs-12 col-m-6";
            } else {
                yield "col-xxs-12";
            }
            yield "\">
                    ";
            // line 85
            yield from $this->load("civictheme:breadcrumb", 85)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 86
($context["theme"] ?? null), "links" => CoreExtension::getAttribute($this->env, $this->source,             // line 87
($context["breadcrumb"] ?? null), "links", [], "any", false, false, true, 87), "active_is_link" => CoreExtension::getAttribute($this->env, $this->source,             // line 88
($context["breadcrumb"] ?? null), "active_is_link", [], "any", false, false, true, 88), "modifier_class" => "ct-banner__breadcrumb"]));
            // line 91
            yield "                  </div>
                ";
        }
        // line 93
        yield "              ";
        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top2_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 97
        yield "                  <div class=\"col-xxs-12 col-m-6\">
                    <div class=\"ct-banner__content-top2\">";
        // line 99
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_top2"] ?? null));
        // line 100
        yield "</div>
                  </div>
                ";
        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top3_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 110
        yield "                <div class=\"col-xxs-12\">
                  <div class=\"ct-banner__content-top3\">";
        // line 112
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_top3"] ?? null));
        // line 113
        yield "</div>
                </div>
              ";
        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_site_section_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 122
        yield "                <div class=\"col-xxs-12\">
                  ";
        // line 123
        yield from $this->load("civictheme:heading", 123)->unwrap()->yield(CoreExtension::toArray(["theme" =>         // line 124
($context["theme"] ?? null), "content" =>         // line 125
($context["site_section"] ?? null), "level" => 5, "modifier_class" => "ct-banner__site-section"]));
        // line 129
        yield "                </div>
              ";
        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 137
        yield "                <div class=\"";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["featured_image"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "col-xxs-12 col-m-6";
        } else {
            yield "col-xxs-12";
        }
        yield "\">
                  ";
        // line 138
        yield from $this->load("civictheme:heading", 138)->unwrap()->yield(CoreExtension::toArray(["theme" =>         // line 139
($context["theme"] ?? null), "content" =>         // line 140
($context["title"] ?? null), "level" => 1, "modifier_class" => "ct-banner__title"]));
        // line 144
        yield "                </div>
              ";
        yield from [];
    }

    // line 151
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_middle_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 152
        yield "                <div class=\"";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["featured_image"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "col-xxs-12 col-m-6";
        } else {
            yield "col-xxs-12";
        }
        yield "\">
                  <div class=\"ct-banner__content-middle\">";
        // line 154
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_middle"] ?? null));
        // line 155
        yield "</div>
                </div>
              ";
        yield from [];
    }

    // line 163
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 164
        yield "                <div class=\"";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["featured_image"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "col-xxs-12 col-m-6";
        } else {
            yield "col-xxs-12";
        }
        yield "\">
                  <div class=\"ct-banner__content\">";
        // line 166
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content"] ?? null));
        // line 167
        yield "</div>
                </div>
              ";
        yield from [];
    }

    // line 176
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_featured_image_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 177
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["featured_image"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 178
            yield "          <div class=\"ct-banner__featured-image__wrapper\">
            ";
            // line 179
            yield from $this->load("civictheme:image", 179)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 180
($context["theme"] ?? null), "url" => CoreExtension::getAttribute($this->env, $this->source,             // line 181
($context["featured_image"] ?? null), "url", [], "any", false, false, true, 181), "alt" => CoreExtension::getAttribute($this->env, $this->source,             // line 182
($context["featured_image"] ?? null), "alt", [], "any", false, false, true, 182), "modifier_class" => "ct-banner__featured-image"]));
            // line 185
            yield "          </div>
        ";
        }
        // line 187
        yield "      ";
        yield from [];
    }

    // line 193
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_below_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 194
        yield "            <div class=\"col-xxs-12\">
              <div class=\"ct-banner__content-below\">";
        // line 196
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_below"] ?? null));
        // line 197
        yield "</div>
            </div>
          ";
        yield from [];
    }

    // line 207
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_bottom_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 208
        yield "            <div class=\"col-xxs-12\">
              <div class=\"ct-banner__content-bottom\">";
        // line 210
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_bottom"] ?? null));
        // line 211
        yield "</div>
            </div>
          ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:banner";
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
        return array (  501 => 211,  499 => 210,  496 => 208,  489 => 207,  482 => 197,  480 => 196,  477 => 194,  470 => 193,  465 => 187,  461 => 185,  459 => 182,  458 => 181,  457 => 180,  456 => 179,  453 => 178,  450 => 177,  443 => 176,  436 => 167,  434 => 166,  425 => 164,  418 => 163,  411 => 155,  409 => 154,  400 => 152,  393 => 151,  387 => 144,  385 => 140,  384 => 139,  383 => 138,  374 => 137,  367 => 136,  361 => 129,  359 => 125,  358 => 124,  357 => 123,  354 => 122,  347 => 121,  340 => 113,  338 => 112,  335 => 110,  328 => 109,  321 => 100,  319 => 99,  316 => 97,  309 => 96,  304 => 93,  300 => 91,  298 => 88,  297 => 87,  296 => 86,  295 => 85,  286 => 84,  283 => 83,  276 => 82,  269 => 74,  267 => 73,  264 => 71,  257 => 70,  249 => 217,  244 => 214,  242 => 207,  239 => 205,  237 => 204,  234 => 203,  229 => 200,  227 => 193,  224 => 191,  222 => 190,  218 => 188,  216 => 176,  210 => 172,  206 => 170,  204 => 163,  202 => 162,  200 => 161,  197 => 160,  193 => 158,  191 => 151,  189 => 150,  187 => 149,  184 => 148,  180 => 146,  178 => 136,  176 => 135,  174 => 134,  171 => 133,  167 => 131,  165 => 121,  163 => 120,  161 => 119,  158 => 118,  154 => 116,  152 => 109,  150 => 108,  148 => 107,  145 => 106,  141 => 104,  138 => 96,  136 => 95,  133 => 94,  131 => 82,  128 => 81,  126 => 80,  123 => 79,  119 => 77,  117 => 70,  115 => 69,  113 => 68,  108 => 65,  102 => 63,  100 => 62,  97 => 61,  91 => 60,  84 => 59,  73 => 56,  71 => 55,  68 => 54,  66 => 53,  64 => 52,  62 => 51,  59 => 50,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:banner", "themes/contrib/civictheme/components/03-organisms/banner/banner.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 51, "if" => 55, "block" => 70, "include" => 85];
        static $filters = ["format" => 52, "default" => 52, "escape" => 56, "raw" => 56];
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
