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

/* civictheme:navigation-card */
class __TwigTemplate_cfd2c1d65ab3b4334e3253d4dd5b5daa extends Template
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
            'image_block' => [$this, 'block_image_block'],
            'image_over_block' => [$this, 'block_image_over_block'],
            'content_top_block' => [$this, 'block_content_top_block'],
            'icon_block' => [$this, 'block_icon_block'],
            'title_block' => [$this, 'block_title_block'],
            'content_middle_block' => [$this, 'block_content_middle_block'],
            'summary_block' => [$this, 'block_summary_block'],
            'content_bottom_block' => [$this, 'block_content_bottom_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--navigation-card"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:navigation-card"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:navigation-card"));
        // line 42
        yield "
";
        // line 43
        $context["with_image"] =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "url", [], "any", false, false, true, 43));
        // line 44
        $context["with_image_class"] = (((($tmp = ($context["with_image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-navigation-card--with-image") : (""));
        // line 45
        $context["with_link"] = (( !Twig\Extension\CoreExtension::testEmpty(($context["link"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "url", [], "any", true, true, true, 45)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "url", [], "any", false, false, true, 45)));
        // line 46
        $context["with_link_class"] = (((($tmp = ($context["with_link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-navigation-card--with-link") : (""));
        // line 47
        $context["image_as_icon_class"] = (((($tmp = ($context["image_as_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-navigation-card--image-as-icon") : (""));
        // line 48
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 49
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s %s %s", ($context["theme_class"] ?? null), ($context["with_image_class"] ?? null), ($context["with_link_class"] ?? null), ($context["image_as_icon_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 50
        yield "
";
        // line 51
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "  <div class=\"ct-navigation-card ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            yield ">
    ";
            // line 53
            yield from $this->unwrap()->yieldBlock('image_block', $context, $blocks);
            // line 74
            yield "
    <div class=\"ct-navigation-card__content\">
      ";
            // line 76
            yield from $this->unwrap()->yieldBlock('content_top_block', $context, $blocks);
            // line 83
            yield "
      ";
            // line 84
            yield from $this->unwrap()->yieldBlock('icon_block', $context, $blocks);
            // line 105
            yield "
      ";
            // line 106
            yield from $this->unwrap()->yieldBlock('title_block', $context, $blocks);
            // line 133
            yield "
      ";
            // line 134
            yield from $this->unwrap()->yieldBlock('content_middle_block', $context, $blocks);
            // line 141
            yield "
      ";
            // line 142
            yield from $this->unwrap()->yieldBlock('summary_block', $context, $blocks);
            // line 152
            yield "
      ";
            // line 153
            yield from $this->unwrap()->yieldBlock('content_bottom_block', $context, $blocks);
            // line 160
            yield "    </div>
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["image", "link", "image_as_icon", "theme", "title", "attributes", "image_over", "content_top", "icon", "content_middle", "summary", "content_bottom"]);        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 54
        yield "      ";
        if ((($tmp =  !($context["image_as_icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "        ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "url", [], "any", false, false, true, 55))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 56
                yield "          <div class=\"ct-navigation-card__image\">
            ";
                // line 57
                yield from $this->load("civictheme:image", 57)->unwrap()->yield(CoreExtension::toArray(["theme" =>                 // line 58
($context["theme"] ?? null), "url" => CoreExtension::getAttribute($this->env, $this->source,                 // line 59
($context["image"] ?? null), "url", [], "any", false, false, true, 59), "alt" => CoreExtension::getAttribute($this->env, $this->source,                 // line 60
($context["image"] ?? null), "alt", [], "any", false, false, true, 60)]));
                // line 62
                yield "
            ";
                // line 63
                yield from $this->unwrap()->yieldBlock('image_over_block', $context, $blocks);
                // line 70
                yield "          </div>
        ";
            }
            // line 72
            yield "      ";
        }
        // line 73
        yield "    ";
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image_over_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield "              ";
        if ((($tmp = ($context["image_over"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "                <div class=\"ct-navigation-card__image__over\">
                  ";
            // line 66
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["image_over"] ?? null), "html", null, true);
            yield "
                </div>
              ";
        }
        // line 69
        yield "            ";
        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 77
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_top"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "          <div class=\"ct-navigation-card__content-top\">";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_top"] ?? null));
            // line 80
            yield "</div>
        ";
        }
        // line 82
        yield "      ";
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_icon_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "        ";
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["icon"] ?? null)) || (($context["with_image"] ?? null) && ($context["image_as_icon"] ?? null)))) {
            // line 86
            yield "          <div class=\"ct-navigation-card__icon\">
            ";
            // line 87
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 88
                yield "              ";
                yield from $this->load("civictheme:icon", 88)->unwrap()->yield(CoreExtension::toArray(["symbol" =>                 // line 89
($context["icon"] ?? null), "size" => "extra-large"]));
                // line 92
                yield "            ";
            }
            // line 93
            yield "            ";
            if ((($context["image_as_icon"] ?? null) && ($context["with_image"] ?? null))) {
                // line 94
                yield "              <div class=\"ct-icon ct-icon--size-extra-large ct-navigation-card__icon__image\">
                ";
                // line 95
                yield from $this->load("civictheme:image", 95)->unwrap()->yield(CoreExtension::toArray(["theme" =>                 // line 96
($context["theme"] ?? null), "url" => CoreExtension::getAttribute($this->env, $this->source,                 // line 97
($context["image"] ?? null), "url", [], "any", false, false, true, 97), "alt" => CoreExtension::getAttribute($this->env, $this->source,                 // line 98
($context["image"] ?? null), "alt", [], "any", false, false, true, 98)]));
                // line 100
                yield "              </div>
            ";
            }
            // line 102
            yield "          </div>
        ";
        }
        // line 104
        yield "      ";
        yield from [];
    }

    // line 106
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 107
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "          ";
            $context["title_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 109
                yield "            ";
                if ((($tmp = ($context["with_link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 110
                    yield "              ";
                    yield from $this->load("civictheme:link", 110)->unwrap()->yield(CoreExtension::toArray(["theme" =>                     // line 111
($context["theme"] ?? null), "text" =>                     // line 112
($context["title"] ?? null), "url" => CoreExtension::getAttribute($this->env, $this->source,                     // line 113
($context["link"] ?? null), "url", [], "any", false, false, true, 113), "is_new_window" => CoreExtension::getAttribute($this->env, $this->source,                     // line 114
($context["link"] ?? null), "is_new_window", [], "any", false, false, true, 114), "is_external" => false, "icon" => "right-arrow-2", "icon_group_disabled" => true, "modifier_class" => "ct-navigation-card__title__link"]));
                    // line 120
                    yield "            ";
                } else {
                    // line 121
                    yield "              ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                    yield "
            ";
                }
                // line 123
                yield "          ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 124
            yield "
          ";
            // line 125
            yield from $this->load("civictheme:heading", 125)->unwrap()->yield(CoreExtension::toArray(["content" =>             // line 126
($context["title_content"] ?? null), "level" => 4, "theme" =>             // line 128
($context["theme"] ?? null), "modifier_class" => "ct-navigation-card__title"]));
            // line 131
            yield "        ";
        }
        // line 132
        yield "      ";
        yield from [];
    }

    // line 134
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_middle_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 135
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 136
            yield "          <div class=\"ct-navigation-card__content-middle\">";
            // line 137
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_middle"] ?? null));
            // line 138
            yield "</div>
        ";
        }
        // line 140
        yield "      ";
        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_summary_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 143
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["summary"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            yield "          ";
            yield from $this->load("civictheme:paragraph", 144)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 145
($context["theme"] ?? null), "content" =>             // line 146
($context["summary"] ?? null), "allow_html" => true, "modifier_class" => "ct-navigation-card__summary"]));
            // line 150
            yield "        ";
        }
        // line 151
        yield "      ";
        yield from [];
    }

    // line 153
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_bottom_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 154
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_bottom"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 155
            yield "          <div class=\"ct-navigation-card__content-bottom\">";
            // line 156
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_bottom"] ?? null));
            // line 157
            yield "</div>
        ";
        }
        // line 159
        yield "      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:navigation-card";
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
        return array (  375 => 159,  371 => 157,  369 => 156,  367 => 155,  364 => 154,  357 => 153,  352 => 151,  349 => 150,  347 => 146,  346 => 145,  344 => 144,  341 => 143,  334 => 142,  329 => 140,  325 => 138,  323 => 137,  321 => 136,  318 => 135,  311 => 134,  306 => 132,  303 => 131,  301 => 128,  300 => 126,  299 => 125,  296 => 124,  292 => 123,  286 => 121,  283 => 120,  281 => 114,  280 => 113,  279 => 112,  278 => 111,  276 => 110,  273 => 109,  270 => 108,  267 => 107,  260 => 106,  255 => 104,  251 => 102,  247 => 100,  245 => 98,  244 => 97,  243 => 96,  242 => 95,  239 => 94,  236 => 93,  233 => 92,  231 => 89,  229 => 88,  227 => 87,  224 => 86,  221 => 85,  214 => 84,  209 => 82,  205 => 80,  203 => 79,  201 => 78,  198 => 77,  191 => 76,  186 => 69,  180 => 66,  177 => 65,  174 => 64,  167 => 63,  162 => 73,  159 => 72,  155 => 70,  153 => 63,  150 => 62,  148 => 60,  147 => 59,  146 => 58,  145 => 57,  142 => 56,  139 => 55,  136 => 54,  129 => 53,  120 => 160,  118 => 153,  115 => 152,  113 => 142,  110 => 141,  108 => 134,  105 => 133,  103 => 106,  100 => 105,  98 => 84,  95 => 83,  93 => 76,  89 => 74,  87 => 53,  78 => 52,  76 => 51,  73 => 50,  71 => 49,  69 => 48,  67 => 47,  65 => 46,  63 => 45,  61 => 44,  59 => 43,  56 => 42,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:navigation-card", "themes/contrib/civictheme/components/02-molecules/navigation-card/navigation-card.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 43, "if" => 51, "block" => 53, "include" => 57];
        static $filters = ["format" => 48, "default" => 48, "escape" => 52, "raw" => 52];
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
