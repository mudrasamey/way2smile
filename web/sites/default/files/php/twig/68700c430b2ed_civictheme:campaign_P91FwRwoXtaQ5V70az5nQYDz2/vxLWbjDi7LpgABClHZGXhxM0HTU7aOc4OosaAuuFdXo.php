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

/* civictheme:campaign */
class __TwigTemplate_d540a866f5d7fb6351724bd2efdf4ec1 extends Template
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
            'tags_block' => [$this, 'block_tags_block'],
            'content_block' => [$this, 'block_content_block'],
            'links_block' => [$this, 'block_links_block'],
            'content_bottom_block' => [$this, 'block_content_bottom_block'],
            'image_block' => [$this, 'block_image_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--campaign"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:campaign"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:campaign"));
        // line 44
        yield "
";
        // line 45
        $context["image_position"] = ((CoreExtension::inFilter(($context["image_position"] ?? null), ["left", "right"])) ? (($context["image_position"] ?? null)) : ("right"));
        // line 46
        $context["image_position_class"] = Twig\Extension\CoreExtension::sprintf("ct-campaign--image-%s", ($context["image_position"] ?? null));
        // line 47
        $context["vertical_spacing_class"] = ((CoreExtension::inFilter(($context["vertical_spacing"] ?? null), ["top", "bottom", "both"])) ? (Twig\Extension\CoreExtension::sprintf("ct-vertical-spacing-inset--%s", ($context["vertical_spacing"] ?? null))) : (""));
        // line 48
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 49
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s %s", ($context["theme_class"] ?? null), ($context["vertical_spacing_class"] ?? null), ($context["image_position_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 50
        yield "
<div class=\"ct-campaign ";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
        yield "\" ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
        }
        yield ">
  <div class=\"container\">
    <div class=\"row row--vertically-spaced\">
      <div class=\"col-xxs-12 ";
        // line 54
        if ((($context["image_position"] ?? null) == "right")) {
            yield "col-m-5 col-m-offset-1";
        } else {
            yield "col-m-5 col-m-offset-1";
        }
        yield " ct-flex-align-self-center\">
        <div class=\"ct-campaign__inner\">
          ";
        // line 56
        yield from $this->unwrap()->yieldBlock('content_top_block', $context, $blocks);
        // line 63
        yield "
          ";
        // line 64
        yield from $this->unwrap()->yieldBlock('tags_block', $context, $blocks);
        // line 73
        yield "
          ";
        // line 74
        yield from $this->unwrap()->yieldBlock('content_block', $context, $blocks);
        // line 128
        yield "
          ";
        // line 129
        yield from $this->unwrap()->yieldBlock('content_bottom_block', $context, $blocks);
        // line 136
        yield "        </div>
      </div>
      <div class=\"col-xxs-12 first ";
        // line 138
        if ((($context["image_position"] ?? null) == "right")) {
            yield "col-m-5 col-m-offset-1 last-m";
        } else {
            yield "col-m-5 first-m";
        }
        yield " ct-flex-align-self-start\">
        ";
        // line 139
        yield from $this->unwrap()->yieldBlock('image_block', $context, $blocks);
        // line 150
        yield "      </div>
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["vertical_spacing", "theme", "attributes", "content_top", "tags", "title", "date", "content", "links", "loop", "content_bottom", "image"]);        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_top"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "              <div class=\"ct-campaign__content-top\">
                ";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_top"] ?? null));
            yield "
              </div>
            ";
        }
        // line 62
        yield "          ";
        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_tags_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 65
        yield "            ";
        if ((($tmp = ($context["tags"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "              ";
            yield from $this->load("civictheme:tag-list", 66)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 67
($context["theme"] ?? null), "tags" =>             // line 68
($context["tags"] ?? null), "modifier_class" => "ct-campaign__tags"]));
            // line 71
            yield "            ";
        }
        // line 72
        yield "          ";
        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 75
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "              ";
            yield from $this->load("civictheme:heading", 76)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 77
($context["theme"] ?? null), "content" =>             // line 78
($context["title"] ?? null), "level" => 2, "modifier_class" => "ct-campaign__title"]));
            // line 82
            yield "            ";
        }
        // line 83
        yield "
            ";
        // line 84
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["date"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "              ";
            yield from $this->load("civictheme:tag", 85)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 86
($context["theme"] ?? null), "content" =>             // line 87
($context["date"] ?? null), "type" => "tertiary", "modifier_class" => "ct-campaign__date"]));
            // line 91
            yield "            ";
        }
        // line 92
        yield "
            ";
        // line 93
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "              ";
            yield from $this->load("civictheme:paragraph", 94)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 95
($context["theme"] ?? null), "content" =>             // line 96
($context["content"] ?? null), "allow_html" => true, "modifier_class" => "ct-campaign__content"]));
            // line 100
            yield "            ";
        }
        // line 101
        yield "
            ";
        // line 102
        yield from $this->unwrap()->yieldBlock('links_block', $context, $blocks);
        // line 127
        yield "          ";
        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_links_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 103
        yield "              ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["links"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 104
            yield "                ";
            $context["link_items"] = [];
            // line 105
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 106
                yield "                  ";
                $context["link_item"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 107
                    yield "                    ";
                    yield from $this->load("civictheme:button", 107)->unwrap()->yield(CoreExtension::toArray(["theme" =>                     // line 108
($context["theme"] ?? null), "kind" => "link", "type" => (((CoreExtension::getAttribute($this->env, $this->source,                     // line 110
$context["loop"], "index", [], "any", false, false, true, 110) == 1)) ? ("primary") : ("tertiary")), "text" => CoreExtension::getAttribute($this->env, $this->source,                     // line 111
$context["link"], "text", [], "any", false, false, true, 111), "url" => CoreExtension::getAttribute($this->env, $this->source,                     // line 112
$context["link"], "url", [], "any", false, false, true, 112), "is_new_window" => CoreExtension::getAttribute($this->env, $this->source,                     // line 113
$context["link"], "is_new_window", [], "any", false, false, true, 113), "is_external" => CoreExtension::getAttribute($this->env, $this->source,                     // line 114
$context["link"], "is_external", [], "any", false, false, true, 114)]));
                    // line 116
                    yield "                  ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 117
                yield "                  ";
                $context["link_items"] = Twig\Extension\CoreExtension::merge(($context["link_items"] ?? null), [($context["link_item"] ?? null)]);
                // line 118
                yield "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield "
                ";
            // line 120
            yield from $this->load("civictheme:item-list", 120)->unwrap()->yield(CoreExtension::toArray(["items" =>             // line 121
($context["link_items"] ?? null), "size" => "regular", "modifier_class" => "ct-campaign__links ct-item-list--horizontal-middle"]));
            // line 125
            yield "              ";
        }
        // line 126
        yield "            ";
        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_bottom_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 130
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_bottom"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "              <div class=\"ct-campaign__content-bottom\">
                ";
            // line 132
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_bottom"] ?? null));
            yield "
              </div>
            ";
        }
        // line 135
        yield "          ";
        yield from [];
    }

    // line 139
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 140
        yield "          ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["image"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 141
            yield "            <div class=\"ct-campaign__image\">
              ";
            // line 142
            yield from $this->load("civictheme:image", 142)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 143
($context["theme"] ?? null), "url" => CoreExtension::getAttribute($this->env, $this->source,             // line 144
($context["image"] ?? null), "url", [], "any", false, false, true, 144), "alt" => CoreExtension::getAttribute($this->env, $this->source,             // line 145
($context["image"] ?? null), "alt", [], "any", false, false, true, 145)]));
            // line 147
            yield "            </div>
          ";
        }
        // line 149
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:campaign";
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
        return array (  355 => 149,  351 => 147,  349 => 145,  348 => 144,  347 => 143,  346 => 142,  343 => 141,  340 => 140,  333 => 139,  328 => 135,  322 => 132,  319 => 131,  316 => 130,  309 => 129,  304 => 126,  301 => 125,  299 => 121,  298 => 120,  295 => 119,  281 => 118,  278 => 117,  274 => 116,  272 => 114,  271 => 113,  270 => 112,  269 => 111,  268 => 110,  267 => 108,  265 => 107,  262 => 106,  244 => 105,  241 => 104,  238 => 103,  231 => 102,  226 => 127,  224 => 102,  221 => 101,  218 => 100,  216 => 96,  215 => 95,  213 => 94,  211 => 93,  208 => 92,  205 => 91,  203 => 87,  202 => 86,  200 => 85,  198 => 84,  195 => 83,  192 => 82,  190 => 78,  189 => 77,  187 => 76,  184 => 75,  177 => 74,  172 => 72,  169 => 71,  167 => 68,  166 => 67,  164 => 66,  161 => 65,  154 => 64,  149 => 62,  143 => 59,  140 => 58,  137 => 57,  130 => 56,  120 => 150,  118 => 139,  110 => 138,  106 => 136,  104 => 129,  101 => 128,  99 => 74,  96 => 73,  94 => 64,  91 => 63,  89 => 56,  80 => 54,  70 => 51,  67 => 50,  65 => 49,  63 => 48,  61 => 47,  59 => 46,  57 => 45,  54 => 44,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:campaign", "themes/contrib/civictheme/components/03-organisms/campaign/campaign.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 45, "if" => 51, "block" => 56, "include" => 66, "for" => 105];
        static $filters = ["format" => 46, "default" => 48, "escape" => 51, "raw" => 51, "merge" => 117];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include', 'for'],
                ['format', 'default', 'escape', 'raw', 'merge'],
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
