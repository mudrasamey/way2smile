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

/* civictheme:snippet */
class __TwigTemplate_2870aa494710033c847f4756b926c60c extends Template
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
            'content_block' => [$this, 'block_content_block'],
            'content_top_block' => [$this, 'block_content_top_block'],
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--snippet"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:snippet"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:snippet"));
        // line 30
        yield "
";
        // line 31
        $context["with_link"] = (( !Twig\Extension\CoreExtension::testEmpty(($context["link"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "url", [], "any", true, true, true, 31)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "url", [], "any", false, false, true, 31)));
        // line 32
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 33
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s", ($context["theme_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 34
        yield "
";
        // line 35
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "  <div class=\"ct-snippet ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            yield ">
    ";
            // line 37
            yield from $this->unwrap()->yieldBlock('content_block', $context, $blocks);
            // line 114
            yield "  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["link", "theme", "title", "attributes", "content_top", "content_middle", "summary", "tags", "content_bottom"]);        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "      <div class=\"ct-snippet__content\">
        ";
        // line 39
        yield from $this->unwrap()->yieldBlock('content_top_block', $context, $blocks);
        // line 46
        yield "
        ";
        // line 47
        yield from $this->unwrap()->yieldBlock('title_block', $context, $blocks);
        // line 72
        yield "
        ";
        // line 73
        yield from $this->unwrap()->yieldBlock('content_middle_block', $context, $blocks);
        // line 80
        yield "
        ";
        // line 81
        yield from $this->unwrap()->yieldBlock('summary_block', $context, $blocks);
        // line 91
        yield "
        ";
        // line 92
        yield from $this->unwrap()->yieldBlock('content_tags_block', $context, $blocks);
        // line 104
        yield "
        ";
        // line 105
        yield from $this->unwrap()->yieldBlock('content_bottom_block', $context, $blocks);
        // line 112
        yield "      </div>
    ";
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "          ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_top"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "            <div class=\"ct-snippet__content-top\">";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_top"] ?? null));
            // line 43
            yield "</div>
          ";
        }
        // line 45
        yield "        ";
        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        yield "          ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "            ";
            $context["title_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 50
                yield "              ";
                if ((($tmp = ($context["with_link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 51
                    yield "                ";
                    yield from $this->load("civictheme:link", 51)->unwrap()->yield(CoreExtension::toArray(["theme" =>                     // line 52
($context["theme"] ?? null), "text" =>                     // line 53
($context["title"] ?? null), "url" => CoreExtension::getAttribute($this->env, $this->source,                     // line 54
($context["link"] ?? null), "url", [], "any", false, false, true, 54), "is_new_window" => CoreExtension::getAttribute($this->env, $this->source,                     // line 55
($context["link"] ?? null), "is_new_window", [], "any", false, false, true, 55), "is_external" => false, "modifier_class" => "ct-snippet__title__link"]));
                    // line 59
                    yield "              ";
                } else {
                    // line 60
                    yield "                ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                    yield "
              ";
                }
                // line 62
                yield "            ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 63
            yield "
            ";
            // line 64
            yield from $this->load("civictheme:heading", 64)->unwrap()->yield(CoreExtension::toArray(["content" =>             // line 65
($context["title_content"] ?? null), "level" => 4, "theme" =>             // line 67
($context["theme"] ?? null), "modifier_class" => "ct-snippet__title"]));
            // line 70
            yield "          ";
        }
        // line 71
        yield "        ";
        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_middle_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 74
        yield "          ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_middle"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "            <div class=\"ct-snippet__content-middle\">";
            // line 76
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_middle"] ?? null));
            // line 77
            yield "</div>
          ";
        }
        // line 79
        yield "        ";
        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_summary_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 82
        yield "          ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["summary"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "            ";
            yield from $this->load("civictheme:paragraph", 83)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 84
($context["theme"] ?? null), "content" =>             // line 85
($context["summary"] ?? null), "allow_html" => true, "modifier_class" => "ct-snippet__summary"]));
            // line 89
            yield "          ";
        }
        // line 90
        yield "        ";
        yield from [];
    }

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_tags_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 93
        yield "          ";
        if ((($context["tags"] ?? null) || ($context["with_link"] ?? null))) {
            // line 94
            yield "            <div class=\"ct-snippet__tags\">
              ";
            // line 95
            if ((($tmp = ($context["tags"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 96
                yield "                ";
                yield from $this->load("civictheme:tag-list", 96)->unwrap()->yield(CoreExtension::toArray(["theme" =>                 // line 97
($context["theme"] ?? null), "tags" =>                 // line 98
($context["tags"] ?? null)]));
                // line 100
                yield "              ";
            }
            // line 101
            yield "            </div>
          ";
        }
        // line 103
        yield "        ";
        yield from [];
    }

    // line 105
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_bottom_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 106
        yield "          ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_bottom"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 107
            yield "            <div class=\"ct-snippet__content-bottom\">";
            // line 108
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_bottom"] ?? null));
            // line 109
            yield "</div>
          ";
        }
        // line 111
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:snippet";
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
        return array (  301 => 111,  297 => 109,  295 => 108,  293 => 107,  290 => 106,  283 => 105,  278 => 103,  274 => 101,  271 => 100,  269 => 98,  268 => 97,  266 => 96,  264 => 95,  261 => 94,  258 => 93,  251 => 92,  246 => 90,  243 => 89,  241 => 85,  240 => 84,  238 => 83,  235 => 82,  228 => 81,  223 => 79,  219 => 77,  217 => 76,  215 => 75,  212 => 74,  205 => 73,  200 => 71,  197 => 70,  195 => 67,  194 => 65,  193 => 64,  190 => 63,  186 => 62,  180 => 60,  177 => 59,  175 => 55,  174 => 54,  173 => 53,  172 => 52,  170 => 51,  167 => 50,  164 => 49,  161 => 48,  154 => 47,  149 => 45,  145 => 43,  143 => 42,  141 => 41,  138 => 40,  131 => 39,  125 => 112,  123 => 105,  120 => 104,  118 => 92,  115 => 91,  113 => 81,  110 => 80,  108 => 73,  105 => 72,  103 => 47,  100 => 46,  98 => 39,  95 => 38,  88 => 37,  80 => 114,  78 => 37,  69 => 36,  67 => 35,  64 => 34,  62 => 33,  60 => 32,  58 => 31,  55 => 30,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:snippet", "themes/contrib/civictheme/components/02-molecules/snippet/snippet.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 31, "if" => 35, "block" => 37, "include" => 51];
        static $filters = ["format" => 32, "default" => 32, "escape" => 36, "raw" => 36];
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
