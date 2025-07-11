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

/* civictheme:header */
class __TwigTemplate_e3f0237324bf886e436f91bfaaf18024 extends Template
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
            'content_top3_block' => [$this, 'block_content_top3_block'],
            'content_middle1_block' => [$this, 'block_content_middle1_block'],
            'content_middle2_block' => [$this, 'block_content_middle2_block'],
            'content_middle3_block' => [$this, 'block_content_middle3_block'],
            'content_bottom1_block' => [$this, 'block_content_bottom1_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--header"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:header"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:header"));
        // line 30
        yield "
";
        // line 31
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 32
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s", ($context["theme_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 33
        yield "
";
        // line 34
        if ((((((( !Twig\Extension\CoreExtension::testEmpty(($context["content_top1"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_top2"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_top3"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle1"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle2"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle3"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_bottom1"] ?? null)))) {
            // line 35
            yield "  <header class=\"ct-header ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\" role=\"banner\" ";
            if ((($tmp = ($context["attributes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            yield ">

    ";
            // line 37
            if ((( !Twig\Extension\CoreExtension::testEmpty(($context["content_top1"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_top2"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_top3"] ?? null)))) {
                // line 38
                yield "      <div class=\"ct-header__top hide-xxs show-m\">

        ";
                // line 40
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_top1"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 41
                    yield "          ";
                    yield from $this->unwrap()->yieldBlock('content_top1_block', $context, $blocks);
                    // line 52
                    yield "        ";
                }
                // line 53
                yield "
        ";
                // line 54
                if (( !Twig\Extension\CoreExtension::testEmpty(($context["content_top2"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_top3"] ?? null)))) {
                    // line 55
                    yield "          <div class=\"container\">
            <div class=\"row\">

              ";
                    // line 58
                    yield from $this->unwrap()->yieldBlock('content_top2_block', $context, $blocks);
                    // line 65
                    yield "
              ";
                    // line 66
                    yield from $this->unwrap()->yieldBlock('content_top3_block', $context, $blocks);
                    // line 73
                    yield "
            </div>
          </div>
        ";
                }
                // line 77
                yield "      </div>
    ";
            }
            // line 79
            yield "
    ";
            // line 80
            if ((( !Twig\Extension\CoreExtension::testEmpty(($context["content_middle1"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle2"] ?? null))) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle3"] ?? null)))) {
                // line 81
                yield "      <div class=\"ct-header__middle\">

        ";
                // line 83
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle1"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 84
                    yield "          ";
                    yield from $this->unwrap()->yieldBlock('content_middle1_block', $context, $blocks);
                    // line 95
                    yield "        ";
                }
                // line 96
                yield "
        ";
                // line 97
                if (( !Twig\Extension\CoreExtension::testEmpty(($context["content_middle2"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle3"] ?? null)))) {
                    // line 98
                    yield "          <div class=\"container\">
            <div class=\"row row--no-wrap\">
              ";
                    // line 100
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle2"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 101
                        yield "                ";
                        yield from $this->unwrap()->yieldBlock('content_middle2_block', $context, $blocks);
                        // line 108
                        yield "              ";
                    }
                    // line 109
                    yield "
              ";
                    // line 110
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle3"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 111
                        yield "                ";
                        yield from $this->unwrap()->yieldBlock('content_middle3_block', $context, $blocks);
                        // line 118
                        yield "              ";
                    }
                    // line 119
                    yield "            </div>
          </div>
        ";
                }
                // line 122
                yield "      </div>
    ";
            }
            // line 124
            yield "
    ";
            // line 125
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_bottom1"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 126
                yield "      ";
                yield from $this->unwrap()->yieldBlock('content_bottom1_block', $context, $blocks);
                // line 137
                yield "    ";
            }
            // line 138
            yield "
  </header>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "content_top1", "content_top2", "content_top3", "content_middle1", "content_middle2", "content_middle3", "content_bottom1", "attributes"]);        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top1_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-xxs-12\">
                  <div class=\"ct-header__content-top1\">
                    ";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_top1"] ?? null));
        yield "
                  </div>
                </div>
              </div>
            </div>
          ";
        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top2_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        yield "                <div class=\"col-xxs-12 col-m-4\">
                  <div class=\"ct-header__content-top2\">
                    ";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_top2"] ?? null));
        yield "
                  </div>
                </div>
              ";
        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top3_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 67
        yield "                <div class=\"col-xxs-12 col-m-8\">
                  <div class=\"ct-header__content-top3\">
                    ";
        // line 69
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_top3"] ?? null));
        yield "
                  </div>
                </div>
              ";
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_middle1_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-xxs-12\">
                  <div class=\"ct-header__content-middle1\">
                    ";
        // line 89
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_middle1"] ?? null));
        yield "
                  </div>
                </div>
              </div>
            </div>
          ";
        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_middle2_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 102
        yield "                  <div class=\"col col--no-grow\">
                    <div class=\"ct-header__content-middle2\">
                      ";
        // line 104
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_middle2"] ?? null));
        yield "
                    </div>
                  </div>
                ";
        yield from [];
    }

    // line 111
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_middle3_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 112
        yield "                  <div class=\"col\">
                    <div class=\"ct-header__content-middle3\">
                      ";
        // line 114
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_middle3"] ?? null));
        yield "
                    </div>
                  </div>
                ";
        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_bottom1_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 127
        yield "        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xxs-12\">
              <div class=\"ct-header__content-bottom1\">
                ";
        // line 131
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_bottom1"] ?? null));
        yield "
              </div>
            </div>
          </div>
        </div>
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:header";
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
        return array (  333 => 131,  327 => 127,  320 => 126,  311 => 114,  307 => 112,  300 => 111,  291 => 104,  287 => 102,  280 => 101,  269 => 89,  263 => 85,  256 => 84,  247 => 69,  243 => 67,  236 => 66,  227 => 61,  223 => 59,  216 => 58,  205 => 46,  199 => 42,  192 => 41,  183 => 138,  180 => 137,  177 => 126,  175 => 125,  172 => 124,  168 => 122,  163 => 119,  160 => 118,  157 => 111,  155 => 110,  152 => 109,  149 => 108,  146 => 101,  144 => 100,  140 => 98,  138 => 97,  135 => 96,  132 => 95,  129 => 84,  127 => 83,  123 => 81,  121 => 80,  118 => 79,  114 => 77,  108 => 73,  106 => 66,  103 => 65,  101 => 58,  96 => 55,  94 => 54,  91 => 53,  88 => 52,  85 => 41,  83 => 40,  79 => 38,  77 => 37,  67 => 35,  65 => 34,  62 => 33,  60 => 32,  58 => 31,  55 => 30,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:header", "themes/contrib/civictheme/components/03-organisms/header/header.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 31, "if" => 34, "block" => 41];
        static $filters = ["format" => 31, "default" => 31, "escape" => 35, "raw" => 35];
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
