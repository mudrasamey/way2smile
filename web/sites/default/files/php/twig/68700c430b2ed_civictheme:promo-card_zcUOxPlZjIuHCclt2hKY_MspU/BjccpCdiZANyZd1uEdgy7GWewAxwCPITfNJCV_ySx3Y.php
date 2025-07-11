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

/* civictheme:promo-card */
class __TwigTemplate_666a918d6f5c6aacaf930fd45823b8eb extends Template
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
            'content_block' => [$this, 'block_content_block'],
            'content_top_block' => [$this, 'block_content_top_block'],
            'subtitle_block' => [$this, 'block_subtitle_block'],
            'date_block' => [$this, 'block_date_block'],
            'title_block' => [$this, 'block_title_block'],
            'content_middle_block' => [$this, 'block_content_middle_block'],
            'summary_block' => [$this, 'block_summary_block'],
            'content_tags_block' => [$this, 'block_content_tags_block'],
            'content_bottom_block' => [$this, 'block_content_bottom_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--promo-card"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:promo-card"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:promo-card"));
        // line 52
        yield "
";
        // line 53
        $context["with_image"] =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "url", [], "any", false, false, true, 53));
        // line 54
        $context["with_image_class"] = (((($tmp = ($context["with_image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-promo-card--with-image") : (""));
        // line 55
        $context["with_link"] = (( !Twig\Extension\CoreExtension::testEmpty(($context["link"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "url", [], "any", true, true, true, 55)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "url", [], "any", false, false, true, 55)));
        // line 56
        $context["image_over_class"] = (((($tmp = ($context["image_over"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-promo-card--image-over") : (""));
        // line 57
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 58
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s %s", ($context["theme_class"] ?? null), ($context["with_image_class"] ?? null), ($context["image_over_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 59
        yield "
";
        // line 60
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "  <div class=\"ct-promo-card ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            yield ">
    ";
            // line 62
            yield from $this->unwrap()->yieldBlock('image_block', $context, $blocks);
            // line 81
            yield "
    ";
            // line 82
            yield from $this->unwrap()->yieldBlock('content_block', $context, $blocks);
            // line 206
            yield "  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["image", "link", "image_over", "theme", "title", "attributes", "content_top", "subtitle", "date", "date_iso", "date_end", "date_end_iso", "content_middle", "summary", "tags", "content_bottom"]);        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "      ";
        if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["image"] ?? null), "url", [], "any", false, false, true, 63)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["image_over"] ?? null)))) {
            // line 64
            yield "        <div class=\"ct-promo-card__image\">
          ";
            // line 65
            yield from $this->load("civictheme:image", 65)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 66
($context["theme"] ?? null), "url" => CoreExtension::getAttribute($this->env, $this->source,             // line 67
($context["image"] ?? null), "url", [], "any", false, false, true, 67), "alt" => CoreExtension::getAttribute($this->env, $this->source,             // line 68
($context["image"] ?? null), "alt", [], "any", false, false, true, 68)]));
            // line 70
            yield "
          ";
            // line 71
            yield from $this->unwrap()->yieldBlock('image_over_block', $context, $blocks);
            // line 78
            yield "        </div>
      ";
        }
        // line 80
        yield "    ";
        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image_over_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 72
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["image_over"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 73
            yield "              <div class=\"ct-promo-card__image__over\">
                ";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["image_over"] ?? null), "html", null, true);
            yield "
              </div>
            ";
        }
        // line 77
        yield "          ";
        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 83
        yield "      <div class=\"ct-promo-card__content\">
        ";
        // line 84
        yield from $this->unwrap()->yieldBlock('content_top_block', $context, $blocks);
        // line 91
        yield "
        ";
        // line 92
        yield from $this->unwrap()->yieldBlock('subtitle_block', $context, $blocks);
        // line 103
        yield "
        ";
        // line 104
        yield from $this->unwrap()->yieldBlock('date_block', $context, $blocks);
        // line 126
        yield "
        ";
        // line 127
        yield from $this->unwrap()->yieldBlock('title_block', $context, $blocks);
        // line 152
        yield "
        ";
        // line 153
        yield from $this->unwrap()->yieldBlock('content_middle_block', $context, $blocks);
        // line 160
        yield "
        ";
        // line 161
        yield from $this->unwrap()->yieldBlock('summary_block', $context, $blocks);
        // line 171
        yield "
        ";
        // line 172
        yield from $this->unwrap()->yieldBlock('content_tags_block', $context, $blocks);
        // line 196
        yield "
        ";
        // line 197
        yield from $this->unwrap()->yieldBlock('content_bottom_block', $context, $blocks);
        // line 204
        yield "      </div>
    ";
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "          ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_top"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "            <div class=\"ct-promo-card__content-top\">";
            // line 87
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_top"] ?? null));
            // line 88
            yield "</div>
          ";
        }
        // line 90
        yield "        ";
        yield from [];
    }

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_subtitle_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 93
        yield "          ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["subtitle"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "            <div class=\"ct-promo-card__subtitle\">
              ";
            // line 95
            yield from $this->load("civictheme:tag", 95)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 96
($context["theme"] ?? null), "type" => "tertiary", "content" =>             // line 98
($context["subtitle"] ?? null)]));
            // line 100
            yield "            </div>
          ";
        }
        // line 102
        yield "        ";
        yield from [];
    }

    // line 104
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 105
        yield "          ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["date"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "            ";
            $context["date_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 107
                yield "              ";
                yield from $this->load("civictheme:datetime", 107)->unwrap()->yield(CoreExtension::toArray(["start" =>                 // line 108
($context["date"] ?? null), "start_iso" => ((                // line 109
array_key_exists("date_iso", $context)) ? (Twig\Extension\CoreExtension::default(($context["date_iso"] ?? null), null)) : (null)), "end" => ((                // line 110
array_key_exists("date_end", $context)) ? (Twig\Extension\CoreExtension::default(($context["date_end"] ?? null), null)) : (null)), "end_iso" => ((                // line 111
array_key_exists("date_end_iso", $context)) ? (Twig\Extension\CoreExtension::default(($context["date_end_iso"] ?? null), null)) : (null))]));
                // line 113
                yield "            ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 114
            yield "
            <div class=\"ct-promo-card__date\">
              ";
            // line 116
            yield from $this->load("civictheme:tag", 116)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 117
($context["theme"] ?? null), "type" => (((($tmp =             // line 118
($context["date_end"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("secondary") : ("tertiary")), "content" =>             // line 119
($context["date_content"] ?? null), "icon" => (((($tmp =             // line 120
($context["date_end"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("calendar-2") : (null)), "icon_placement" => "before"]));
            // line 123
            yield "            </div>
          ";
        }
        // line 125
        yield "        ";
        yield from [];
    }

    // line 127
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 128
        yield "          ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 129
            yield "            ";
            $context["title_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 130
                yield "              ";
                if ((($tmp = ($context["with_link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 131
                    yield "                ";
                    yield from $this->load("civictheme:link", 131)->unwrap()->yield(CoreExtension::toArray(["theme" =>                     // line 132
($context["theme"] ?? null), "text" =>                     // line 133
($context["title"] ?? null), "url" => CoreExtension::getAttribute($this->env, $this->source,                     // line 134
($context["link"] ?? null), "url", [], "any", false, false, true, 134), "is_new_window" => CoreExtension::getAttribute($this->env, $this->source,                     // line 135
($context["link"] ?? null), "is_new_window", [], "any", false, false, true, 135), "is_external" => false, "modifier_class" => "ct-promo-card__title__link"]));
                    // line 139
                    yield "              ";
                } else {
                    // line 140
                    yield "                ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                    yield "
              ";
                }
                // line 142
                yield "            ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 143
            yield "
            ";
            // line 144
            yield from $this->load("civictheme:heading", 144)->unwrap()->yield(CoreExtension::toArray(["content" =>             // line 145
($context["title_content"] ?? null), "level" => 4, "theme" =>             // line 147
($context["theme"] ?? null), "modifier_class" => "ct-promo-card__title"]));
            // line 150
            yield "          ";
        }
        // line 151
        yield "        ";
        yield from [];
    }

    // line 153
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_middle_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 154
        yield "          ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 155
            yield "            <div class=\"ct-promo-card__content-middle\">";
            // line 156
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_middle"] ?? null));
            // line 157
            yield "</div>
          ";
        }
        // line 159
        yield "        ";
        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_summary_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 162
        yield "          ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["summary"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 163
            yield "            ";
            yield from $this->load("civictheme:paragraph", 163)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 164
($context["theme"] ?? null), "content" =>             // line 165
($context["summary"] ?? null), "allow_html" => true, "modifier_class" => "ct-promo-card__summary"]));
            // line 169
            yield "          ";
        }
        // line 170
        yield "        ";
        yield from [];
    }

    // line 172
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_tags_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 173
        yield "          ";
        if ((($context["tags"] ?? null) || ($context["with_link"] ?? null))) {
            // line 174
            yield "            <div class=\"ct-promo-card__tags\">
              ";
            // line 175
            if ((($tmp = ($context["tags"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 176
                yield "                ";
                yield from $this->load("civictheme:tag-list", 176)->unwrap()->yield(CoreExtension::toArray(["theme" =>                 // line 177
($context["theme"] ?? null), "tags" =>                 // line 178
($context["tags"] ?? null)]));
                // line 180
                yield "              ";
            }
            // line 181
            yield "
              ";
            // line 182
            if ((($tmp = ($context["with_link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 183
                yield "                ";
                yield from $this->load("civictheme:link", 183)->unwrap()->yield(CoreExtension::toArray(["theme" =>                 // line 184
($context["theme"] ?? null), "url" => CoreExtension::getAttribute($this->env, $this->source,                 // line 185
($context["link"] ?? null), "url", [], "any", false, false, true, 185), "is_new_window" => CoreExtension::getAttribute($this->env, $this->source,                 // line 186
($context["link"] ?? null), "is_new_window", [], "any", false, false, true, 186), "is_external" => false, "icon" => "right-arrow-2", "modifier_class" => "ct-promo-card__tags__link", "attributes" => "aria-hidden=\"true\" tabindex=\"-1\""]));
                // line 192
                yield "              ";
            }
            // line 193
            yield "            </div>
          ";
        }
        // line 195
        yield "        ";
        yield from [];
    }

    // line 197
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_bottom_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 198
        yield "          ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_bottom"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 199
            yield "            <div class=\"ct-promo-card__content-bottom\">";
            // line 200
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_bottom"] ?? null));
            // line 201
            yield "</div>
          ";
        }
        // line 203
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:promo-card";
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
        return array (  465 => 203,  461 => 201,  459 => 200,  457 => 199,  454 => 198,  447 => 197,  442 => 195,  438 => 193,  435 => 192,  433 => 186,  432 => 185,  431 => 184,  429 => 183,  427 => 182,  424 => 181,  421 => 180,  419 => 178,  418 => 177,  416 => 176,  414 => 175,  411 => 174,  408 => 173,  401 => 172,  396 => 170,  393 => 169,  391 => 165,  390 => 164,  388 => 163,  385 => 162,  378 => 161,  373 => 159,  369 => 157,  367 => 156,  365 => 155,  362 => 154,  355 => 153,  350 => 151,  347 => 150,  345 => 147,  344 => 145,  343 => 144,  340 => 143,  336 => 142,  330 => 140,  327 => 139,  325 => 135,  324 => 134,  323 => 133,  322 => 132,  320 => 131,  317 => 130,  314 => 129,  311 => 128,  304 => 127,  299 => 125,  295 => 123,  293 => 120,  292 => 119,  291 => 118,  290 => 117,  289 => 116,  285 => 114,  281 => 113,  279 => 111,  278 => 110,  277 => 109,  276 => 108,  274 => 107,  271 => 106,  268 => 105,  261 => 104,  256 => 102,  252 => 100,  250 => 98,  249 => 96,  248 => 95,  245 => 94,  242 => 93,  235 => 92,  230 => 90,  226 => 88,  224 => 87,  222 => 86,  219 => 85,  212 => 84,  206 => 204,  204 => 197,  201 => 196,  199 => 172,  196 => 171,  194 => 161,  191 => 160,  189 => 153,  186 => 152,  184 => 127,  181 => 126,  179 => 104,  176 => 103,  174 => 92,  171 => 91,  169 => 84,  166 => 83,  159 => 82,  154 => 77,  148 => 74,  145 => 73,  142 => 72,  135 => 71,  130 => 80,  126 => 78,  124 => 71,  121 => 70,  119 => 68,  118 => 67,  117 => 66,  116 => 65,  113 => 64,  110 => 63,  103 => 62,  95 => 206,  93 => 82,  90 => 81,  88 => 62,  79 => 61,  77 => 60,  74 => 59,  72 => 58,  70 => 57,  68 => 56,  66 => 55,  64 => 54,  62 => 53,  59 => 52,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:promo-card", "themes/contrib/civictheme/components/02-molecules/promo-card/promo-card.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 53, "if" => 60, "block" => 62, "include" => 65];
        static $filters = ["format" => 57, "default" => 57, "escape" => 61, "raw" => 61];
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
