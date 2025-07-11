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

/* civictheme:list */
class __TwigTemplate_015064e43348c682ce19117515ca010a extends Template
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
            'title_block' => [$this, 'block_title_block'],
            'link_above_block' => [$this, 'block_link_above_block'],
            'content_block' => [$this, 'block_content_block'],
            'list_block' => [$this, 'block_list_block'],
            'filters_block' => [$this, 'block_filters_block'],
            'rows_block' => [$this, 'block_rows_block'],
            'rows_above_block' => [$this, 'block_rows_above_block'],
            'results_count_block' => [$this, 'block_results_count_block'],
            'rows_below_block' => [$this, 'block_rows_below_block'],
            'empty_block' => [$this, 'block_empty_block'],
            'list_below_block' => [$this, 'block_list_below_block'],
            'pagination_block' => [$this, 'block_pagination_block'],
            'footer_block' => [$this, 'block_footer_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--list"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:list"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:list"));
        // line 58
        yield "
";
        // line 59
        $context["with_background_class"] = (((($tmp = ($context["with_background"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-list--with-background") : (""));
        // line 60
        $context["vertical_spacing_class"] = ((CoreExtension::inFilter(($context["vertical_spacing"] ?? null), ["top", "bottom", "both"])) ? (Twig\Extension\CoreExtension::sprintf("ct-vertical-spacing-inset--%s", ($context["vertical_spacing"] ?? null))) : (""));
        // line 61
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 62
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s %s", ($context["theme_class"] ?? null), ($context["with_background_class"] ?? null), ($context["vertical_spacing_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 63
        yield "
<div class=\"ct-list ";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
        yield "\" ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
        }
        yield ">
  <div class=\"ct-list__inner\">
    ";
        // line 66
        yield from $this->unwrap()->yieldBlock('header_block', $context, $blocks);
        // line 108
        yield "
    ";
        // line 109
        yield from $this->unwrap()->yieldBlock('content_block', $context, $blocks);
        // line 127
        yield "
    ";
        // line 128
        yield from $this->unwrap()->yieldBlock('list_block', $context, $blocks);
        // line 215
        yield "
    ";
        // line 216
        yield from $this->unwrap()->yieldBlock('list_below_block', $context, $blocks);
        // line 250
        yield "
    ";
        // line 251
        yield from $this->unwrap()->yieldBlock('footer_block', $context, $blocks);
        // line 264
        yield "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["with_background", "vertical_spacing", "theme", "attributes", "title", "link_above", "content", "filters", "rows", "rows_above", "results_count", "rows_below", "empty", "link_below", "pagination", "footer"]);        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 67
        yield "      ";
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["link_above"] ?? null)))) {
            // line 68
            yield "        <div class=\"ct-list__header\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xxs-12 col-m-9\">
                ";
            // line 72
            yield from $this->unwrap()->yieldBlock('title_block', $context, $blocks);
            // line 82
            yield "              </div>
              <div class=\"col-xxs-12 col-m-3\">
                ";
            // line 84
            yield from $this->unwrap()->yieldBlock('link_above_block', $context, $blocks);
            // line 102
            yield "              </div>
            </div>
          </div>
        </div>
      ";
        }
        // line 107
        yield "    ";
        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 73
        yield "                  ";
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield from $this->load("civictheme:heading", 74)->unwrap()->yield(CoreExtension::toArray(["content" =>             // line 75
($context["title"] ?? null), "level" => 2, "theme" =>             // line 77
($context["theme"] ?? null), "modifier_class" => "ct-list__title"]));
            // line 80
            yield "                  ";
        }
        // line 81
        yield "                ";
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_link_above_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "                  ";
        if ((($tmp = ($context["link_above"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "                    <div class=\"ct-list__link-above ct-flex-justify-content-center\">
                      ";
            // line 87
            yield from $this->load("civictheme:button", 87)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 88
($context["theme"] ?? null), "type" => "secondary", "kind" => "link", "size" => "regular", "text" => CoreExtension::getAttribute($this->env, $this->source,             // line 92
($context["link_above"] ?? null), "text", [], "any", false, false, true, 92), "url" => CoreExtension::getAttribute($this->env, $this->source,             // line 93
($context["link_above"] ?? null), "url", [], "any", false, false, true, 93), "is_new_window" => CoreExtension::getAttribute($this->env, $this->source,             // line 94
($context["link_above"] ?? null), "is_external", [], "any", false, false, true, 94), "is_external" => CoreExtension::getAttribute($this->env, $this->source,             // line 95
($context["link_above"] ?? null), "is_external", [], "any", false, false, true, 95), "icon" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 96
($context["link_above"] ?? null), "is_external", [], "any", false, false, true, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("right-arrow-2")), "modifier_class" => "ct-list__link-above__link"]));
            // line 99
            yield "                    </div>
                  ";
        }
        // line 101
        yield "                ";
        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 110
        yield "      ";
        if ((($tmp = ($context["content"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 111
            yield "        <div class=\"ct-list__content\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xxs-12\">
                ";
            // line 115
            yield from $this->load("civictheme:paragraph", 115)->unwrap()->yield(CoreExtension::toArray(["content" =>             // line 116
($context["content"] ?? null), "allow_html" => true, "theme" =>             // line 118
($context["theme"] ?? null), "modifier_class" => "ct-list__content__inner"]));
            // line 121
            yield "              </div>
            </div>
          </div>
        </div>
      ";
        }
        // line 126
        yield "    ";
        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_list_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 129
        yield "      ";
        yield from $this->unwrap()->yieldBlock('filters_block', $context, $blocks);
        // line 142
        yield "
      ";
        // line 143
        yield from $this->unwrap()->yieldBlock('rows_block', $context, $blocks);
        // line 197
        yield "
      ";
        // line 198
        yield from $this->unwrap()->yieldBlock('empty_block', $context, $blocks);
        // line 214
        yield "    ";
        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_filters_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 130
        yield "        ";
        if ((($tmp = ($context["filters"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "<div class=\"ct-list__filters\">
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-xxs-12\">
                  ";
            // line 135
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["filters"] ?? null));
            yield "
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 141
        yield "      ";
        yield from [];
    }

    // line 143
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_rows_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 144
        yield "        ";
        if ((($tmp = ($context["rows"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 146
            yield from $this->unwrap()->yieldBlock('rows_above_block', $context, $blocks);
            // line 162
            yield "
          ";
            // line 163
            yield from $this->unwrap()->yieldBlock('results_count_block', $context, $blocks);
            // line 174
            yield "
          <div class=\"ct-list__rows\">
            ";
            // line 176
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["rows"] ?? null));
            yield "
          </div>

          ";
            // line 179
            yield from $this->unwrap()->yieldBlock('rows_below_block', $context, $blocks);
            // line 195
            yield "        ";
        }
        // line 196
        yield "      ";
        yield from [];
    }

    // line 146
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_rows_above_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 147
        yield "            ";
        if ((($tmp = ($context["rows_above"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 148
            yield "<div class=\"container ct-list__rows-above\">
                <div class=\"row\">
                  <div class=\"col-xxs-12\">
                    ";
            // line 151
            if ((($tmp =  !is_iterable(($context["rows_above"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 152
                yield "                      ";
                $context["rows_above"] = [($context["rows_above"] ?? null)];
                // line 153
                yield "                    ";
            }
            // line 154
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rows_above"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rows_above_row"]) {
                // line 155
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($context["rows_above_row"]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['rows_above_row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            yield "                  </div>
                </div>
              </div>
            ";
        }
        // line 161
        yield "          ";
        yield from [];
    }

    // line 163
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_results_count_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 164
        yield "            ";
        if ((($tmp = ($context["results_count"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 165
            yield "<div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-xxs-12\">
                    <div class=\"ct-list__results-count\">";
            // line 168
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["results_count"] ?? null), "html", null, true);
            yield "</div>
                  </div>
                </div>
              </div>
            ";
        }
        // line 173
        yield "          ";
        yield from [];
    }

    // line 179
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_rows_below_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 180
        yield "            ";
        if ((($tmp = ($context["rows_below"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 181
            yield "              <div class=\"container ct-list__rows-below\">
                <div class=\"row\">
                  <div class=\"col-xxs-12\">
                    ";
            // line 184
            if ((($tmp =  !is_iterable(($context["rows_below"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 185
                yield "                      ";
                $context["rows_below"] = [($context["rows_below"] ?? null)];
                // line 186
                yield "                    ";
            }
            // line 187
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rows_below"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rows_below_row"]) {
                // line 188
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($context["rows_below_row"]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['rows_below_row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            yield "                  </div>
                </div>
              </div>
            ";
        }
        // line 194
        yield "          ";
        yield from [];
    }

    // line 198
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_empty_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 199
        yield "        ";
        if ((array_key_exists("empty", $context) && ( !array_key_exists("rows", $context) || Twig\Extension\CoreExtension::testEmpty(($context["rows"] ?? null))))) {
            // line 200
            yield "<div class=\"container ct-list__empty-results\">
            <div class=\"row\">
              <div class=\"col-xxs-12\">
                ";
            // line 203
            yield from $this->load("civictheme:paragraph", 203)->unwrap()->yield(CoreExtension::toArray(["content" =>             // line 204
($context["empty"] ?? null), "allow_html" => true, "theme" =>             // line 206
($context["theme"] ?? null), "modifier_class" => "ct-list__empty-results__inner"]));
            // line 209
            yield "              </div>
            </div>
          </div>
        ";
        }
        // line 213
        yield "      ";
        yield from [];
    }

    // line 216
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_list_below_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 217
        yield "      ";
        if ((($tmp = ($context["link_below"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 218
            yield "        <div class=\"ct-list__link-below ct-flex-justify-content-center\">
          ";
            // line 219
            yield from $this->load("civictheme:button", 219)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 220
($context["theme"] ?? null), "type" => "secondary", "kind" => "link", "size" => "large", "text" => CoreExtension::getAttribute($this->env, $this->source,             // line 224
($context["link_below"] ?? null), "text", [], "any", false, false, true, 224), "url" => CoreExtension::getAttribute($this->env, $this->source,             // line 225
($context["link_below"] ?? null), "url", [], "any", false, false, true, 225), "is_new_window" => CoreExtension::getAttribute($this->env, $this->source,             // line 226
($context["link_below"] ?? null), "is_external", [], "any", false, false, true, 226), "is_external" => CoreExtension::getAttribute($this->env, $this->source,             // line 227
($context["link_below"] ?? null), "is_external", [], "any", false, false, true, 227), "icon" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 228
($context["link_below"] ?? null), "is_external", [], "any", false, false, true, 228)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("right-arrow-2")), "modifier_class" => "ct-list__link-below__link"]));
            // line 231
            yield "        </div>
      ";
        }
        // line 233
        yield "
      ";
        // line 234
        if ((array_key_exists("pagination", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["pagination"] ?? null)))) {
            // line 235
            yield "        <div class=\"ct-list__results-below\">
          ";
            // line 236
            yield from $this->unwrap()->yieldBlock('pagination_block', $context, $blocks);
            // line 247
            yield "        </div>
      ";
        }
        // line 249
        yield "    ";
        yield from [];
    }

    // line 236
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pagination_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 237
        yield "            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-xxs-12\">
                  <div class=\"ct-list__pagination\">
                    ";
        // line 241
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["pagination"] ?? null));
        yield "
                  </div>
                </div>
              </div>
            </div>
          ";
        yield from [];
    }

    // line 251
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 252
        yield "      ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["footer"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 253
            yield "<footer class=\"ct-list__footer\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xxs-12\">
                ";
            // line 257
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["footer"] ?? null));
            yield "
              </div>
            </div>
          </div>
        </footer>
      ";
        }
        // line 263
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:list";
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
        return array (  568 => 263,  559 => 257,  553 => 253,  550 => 252,  543 => 251,  532 => 241,  526 => 237,  519 => 236,  514 => 249,  510 => 247,  508 => 236,  505 => 235,  503 => 234,  500 => 233,  496 => 231,  494 => 228,  493 => 227,  492 => 226,  491 => 225,  490 => 224,  489 => 220,  488 => 219,  485 => 218,  482 => 217,  475 => 216,  470 => 213,  464 => 209,  462 => 206,  461 => 204,  460 => 203,  455 => 200,  452 => 199,  445 => 198,  440 => 194,  434 => 190,  428 => 188,  423 => 187,  420 => 186,  417 => 185,  415 => 184,  410 => 181,  407 => 180,  400 => 179,  395 => 173,  387 => 168,  382 => 165,  379 => 164,  372 => 163,  367 => 161,  361 => 157,  355 => 155,  350 => 154,  347 => 153,  344 => 152,  342 => 151,  337 => 148,  334 => 147,  327 => 146,  322 => 196,  319 => 195,  317 => 179,  311 => 176,  307 => 174,  305 => 163,  302 => 162,  300 => 146,  297 => 144,  290 => 143,  285 => 141,  276 => 135,  270 => 131,  267 => 130,  260 => 129,  255 => 214,  253 => 198,  250 => 197,  248 => 143,  245 => 142,  242 => 129,  235 => 128,  230 => 126,  223 => 121,  221 => 118,  220 => 116,  219 => 115,  213 => 111,  210 => 110,  203 => 109,  198 => 101,  194 => 99,  192 => 96,  191 => 95,  190 => 94,  189 => 93,  188 => 92,  187 => 88,  186 => 87,  183 => 86,  180 => 85,  173 => 84,  168 => 81,  165 => 80,  163 => 77,  162 => 75,  161 => 74,  158 => 73,  151 => 72,  146 => 107,  139 => 102,  137 => 84,  133 => 82,  131 => 72,  125 => 68,  122 => 67,  115 => 66,  107 => 264,  105 => 251,  102 => 250,  100 => 216,  97 => 215,  95 => 128,  92 => 127,  90 => 109,  87 => 108,  85 => 66,  76 => 64,  73 => 63,  71 => 62,  69 => 61,  67 => 60,  65 => 59,  62 => 58,  58 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:list", "themes/contrib/civictheme/components/03-organisms/list/list.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 59, "if" => 64, "block" => 66, "include" => 74, "for" => 154];
        static $filters = ["format" => 60, "default" => 61, "escape" => 64, "raw" => 64];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include', 'for'],
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
