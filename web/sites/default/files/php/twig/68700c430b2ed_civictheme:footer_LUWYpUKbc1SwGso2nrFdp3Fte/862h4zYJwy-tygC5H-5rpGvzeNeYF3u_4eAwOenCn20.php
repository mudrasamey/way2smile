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

/* civictheme:footer */
class __TwigTemplate_4a8d12b191fb2995810316b92c5f993f extends Template
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
            'content_top2_block' => [$this, 'block_content_top2_block'],
            'content_middle1_block' => [$this, 'block_content_middle1_block'],
            'content_middle2_block' => [$this, 'block_content_middle2_block'],
            'content_middle3_block' => [$this, 'block_content_middle3_block'],
            'content_middle4_block' => [$this, 'block_content_middle4_block'],
            'content_middle5_block' => [$this, 'block_content_middle5_block'],
            'content_bottom1_block' => [$this, 'block_content_bottom1_block'],
            'content_bottom2_block' => [$this, 'block_content_bottom2_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--footer"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:footer"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:footer"));
        // line 35
        yield "
";
        // line 36
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 37
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s", ($context["theme_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 38
        yield "
";
        // line 39
        if (((((((( !Twig\Extension\CoreExtension::testEmpty(($context["content_top1"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_top2"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle1"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle2"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle3"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle4"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_bottom1"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_bottom2"] ?? null)))) {
            // line 40
            yield "  <footer class=\"ct-footer ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\" role=\"contentinfo\" data-component-name=\"ct-footer\" ";
            if ((($tmp = ($context["background_image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "style=\"background-image: url('";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["background_image"] ?? null), "html", null, true);
                yield "')\"";
            }
            yield " ";
            if ((($tmp = ($context["attributes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            yield ">

    ";
            // line 42
            if (( !Twig\Extension\CoreExtension::testEmpty(($context["content_top1"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_top2"] ?? null)))) {
                // line 43
                yield "      <div class=\"container ct-footer__top\">
        <div class=\"row\">

          ";
                // line 46
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_top1"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 47
                    yield from $this->unwrap()->yieldBlock('content_top1_block', $context, $blocks);
                }
                // line 55
                yield "
          ";
                // line 56
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_top2"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 57
                    yield from $this->unwrap()->yieldBlock('content_top2_block', $context, $blocks);
                }
                // line 65
                yield "
        </div>
      </div>
    ";
            }
            // line 69
            yield "
    ";
            // line 70
            if ((((( !Twig\Extension\CoreExtension::testEmpty(($context["content_middle1"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle2"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle3"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle4"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle5"] ?? null)))) {
                // line 71
                yield "      <div class=\"container ct-footer__middle\">
        <div class=\"row\">

          ";
                // line 74
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle1"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 75
                    yield from $this->unwrap()->yieldBlock('content_middle1_block', $context, $blocks);
                }
                // line 83
                yield "
          ";
                // line 84
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle2"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 85
                    yield from $this->unwrap()->yieldBlock('content_middle2_block', $context, $blocks);
                }
                // line 93
                yield "
          ";
                // line 94
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle3"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 95
                    yield from $this->unwrap()->yieldBlock('content_middle3_block', $context, $blocks);
                }
                // line 103
                yield "
          ";
                // line 104
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle4"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 105
                    yield from $this->unwrap()->yieldBlock('content_middle4_block', $context, $blocks);
                }
                // line 113
                yield "
          ";
                // line 114
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle5"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 115
                    yield from $this->unwrap()->yieldBlock('content_middle5_block', $context, $blocks);
                }
                // line 123
                yield "
        </div>
      </div>
    ";
            }
            // line 127
            yield "
    ";
            // line 128
            if (( !Twig\Extension\CoreExtension::testEmpty(($context["content_bottom1"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_bottom2"] ?? null)))) {
                // line 129
                yield "      <div class=\"container ct-footer__bottom\">
        <div class=\"row\">

          ";
                // line 132
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_bottom1"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 133
                    yield from $this->unwrap()->yieldBlock('content_bottom1_block', $context, $blocks);
                }
                // line 141
                yield "
          ";
                // line 142
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_bottom2"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 143
                    yield from $this->unwrap()->yieldBlock('content_bottom2_block', $context, $blocks);
                }
                // line 151
                yield "
        </div>
      </div>
    ";
            }
            // line 155
            yield "
  </footer>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "content_top1", "content_top2", "content_middle1", "content_middle2", "content_middle3", "content_middle4", "content_bottom1", "content_bottom2", "background_image", "attributes", "content_middle5"]);        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top1_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        yield "              <div class=\"col-xxs-12 col-m-6\">
                <div class=\"ct-footer__top__content-top1\">";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_top1"] ?? null));
        // line 51
        yield "</div>
              </div>
            ";
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top2_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield "              <div class=\"col-xxs-12 col-m-6\">
                <div class=\"ct-footer__top__content-top2\">";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_top2"] ?? null));
        // line 61
        yield "</div>
              </div>
            ";
        yield from [];
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_middle1_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 76
        yield "              <div class=\"col-xxs-12 col-m-3\">
                <div class=\"ct-footer__middle__content-middle1\">";
        // line 78
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_middle1"] ?? null));
        // line 79
        yield "</div>
              </div>
            ";
        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_middle2_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 86
        yield "              <div class=\"col-xxs-12 col-m-3\">
                <div class=\"ct-footer__middle__content-middle2\">";
        // line 88
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_middle2"] ?? null));
        // line 89
        yield "</div>
              </div>
            ";
        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_middle3_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 96
        yield "              <div class=\"col-xxs-12 col-m-3\">
                <div class=\"ct-footer__middle__content-middle3\">";
        // line 98
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_middle3"] ?? null));
        // line 99
        yield "</div>
              </div>
            ";
        yield from [];
    }

    // line 105
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_middle4_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 106
        yield "              <div class=\"col-xxs-12 col-m-3\">
                <div class=\"ct-footer__middle__content-middle4\">";
        // line 108
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_middle4"] ?? null));
        // line 109
        yield "</div>
              </div>
            ";
        yield from [];
    }

    // line 115
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_middle5_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 116
        yield "              <div class=\"col-xxs-12\">
                <div class=\"ct-footer__middle__content-middle5\">";
        // line 118
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_middle5"] ?? null));
        // line 119
        yield "</div>
              </div>
            ";
        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_bottom1_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 134
        yield "              <div class=\"col-xxs-12 col-m-7\">
                <div class=\"ct-footer__bottom__content-bottom1\">";
        // line 136
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_bottom1"] ?? null));
        // line 137
        yield "</div>
              </div>
            ";
        yield from [];
    }

    // line 143
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_bottom2_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 144
        yield "              <div class=\"col-xxs-12 col-m-5\">
                <div class=\"ct-footer__bottom__content-bottom2\">";
        // line 146
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_bottom2"] ?? null));
        // line 147
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
        return "civictheme:footer";
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
        return array (  366 => 147,  364 => 146,  361 => 144,  354 => 143,  347 => 137,  345 => 136,  342 => 134,  335 => 133,  328 => 119,  326 => 118,  323 => 116,  316 => 115,  309 => 109,  307 => 108,  304 => 106,  297 => 105,  290 => 99,  288 => 98,  285 => 96,  278 => 95,  271 => 89,  269 => 88,  266 => 86,  259 => 85,  252 => 79,  250 => 78,  247 => 76,  240 => 75,  233 => 61,  231 => 60,  228 => 58,  221 => 57,  214 => 51,  212 => 50,  209 => 48,  202 => 47,  193 => 155,  187 => 151,  184 => 143,  182 => 142,  179 => 141,  176 => 133,  174 => 132,  169 => 129,  167 => 128,  164 => 127,  158 => 123,  155 => 115,  153 => 114,  150 => 113,  147 => 105,  145 => 104,  142 => 103,  139 => 95,  137 => 94,  134 => 93,  131 => 85,  129 => 84,  126 => 83,  123 => 75,  121 => 74,  116 => 71,  114 => 70,  111 => 69,  105 => 65,  102 => 57,  100 => 56,  97 => 55,  94 => 47,  92 => 46,  87 => 43,  85 => 42,  69 => 40,  67 => 39,  64 => 38,  62 => 37,  60 => 36,  57 => 35,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:footer", "themes/contrib/civictheme/components/03-organisms/footer/footer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 36, "if" => 39, "block" => 47];
        static $filters = ["format" => 36, "default" => 36, "escape" => 40, "raw" => 40];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
