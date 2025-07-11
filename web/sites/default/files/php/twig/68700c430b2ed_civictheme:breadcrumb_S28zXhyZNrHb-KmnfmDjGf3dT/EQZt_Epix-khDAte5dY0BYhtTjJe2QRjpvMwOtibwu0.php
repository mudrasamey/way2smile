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

/* civictheme:breadcrumb */
class __TwigTemplate_86e49b37c4974de64d10437debd0dde8 extends Template
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
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--breadcrumb"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:breadcrumb"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:breadcrumb"));
        // line 17
        yield "
";
        // line 18
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 19
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s", ($context["theme_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 20
        yield "
";
        // line 21
        if ((($tmp = ($context["links"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "  ";
            $context["links_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["links"] ?? null));
            // line 23
            yield "  ";
            $context["parent"] = false;
            // line 24
            yield "
  <nav class=\"ct-breadcrumb ";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\" aria-label=\"breadcrumb\" ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            yield ">
    ";
            // line 26
            $context["link_items"] = [];
            // line 27
            yield "
    ";
            // line 28
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
                // line 29
                yield "      ";
                $context["link_item"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 30
                    $context["link"] = ["text" => CoreExtension::getAttribute($this->env, $this->source,                     // line 31
$context["link"], "text", [], "any", false, false, true, 31), "url" => CoreExtension::getAttribute($this->env, $this->source,                     // line 32
$context["link"], "url", [], "any", false, false, true, 32), "theme" =>                     // line 33
($context["theme"] ?? null), "is_active" => (CoreExtension::getAttribute($this->env, $this->source,                     // line 34
$context["loop"], "index", [], "any", false, false, true, 34) == ($context["links_count"] ?? null)), "attributes" => (((CoreExtension::getAttribute($this->env, $this->source,                     // line 35
$context["loop"], "index", [], "any", false, false, true, 35) == ($context["links_count"] ?? null))) ? ("aria-current=\"location\"") : ("")), "modifier_class" => (((CoreExtension::getAttribute($this->env, $this->source,                     // line 36
$context["loop"], "index", [], "any", false, false, true, 36) == ($context["links_count"] ?? null))) ? ("ct-breadcrumb__links__link ct-breadcrumb__links__link--active") : ("ct-breadcrumb__links__link"))];
                    // line 39
                    if ((( !($context["active_is_link"] ?? null) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, true, 39))) && (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 39) == ($context["links_count"] ?? null)))) {
                        // line 40
                        yield "<span class=\"ct-breadcrumb__links__link ct-breadcrumb__links__link--active\" aria-current=\"location\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["link"], "text", [], "any", false, false, true, 40), "html", null, true);
                        yield "</span>";
                    } else {
                        // line 42
                        yield from $this->load("civictheme:link", 42)->unwrap()->yield(CoreExtension::toArray($context["link"]));
                        // line 43
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 43) < ($context["links_count"] ?? null))) {
                            // line 44
                            yield from $this->load("civictheme:icon", 44)->unwrap()->yield(CoreExtension::toArray(["symbol" => "right-arrow-1", "modifier_class" => "ct-breadcrumb__links__separator"]));
                        }
                    }
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 51
                yield "
      ";
                // line 52
                $context["link_items"] = Twig\Extension\CoreExtension::merge(($context["link_items"] ?? null), [($context["link_item"] ?? null)]);
                // line 53
                yield "
      ";
                // line 54
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 54) == (($context["links_count"] ?? null) - 1))) {
                    // line 55
                    yield "        ";
                    $context["parent"] = ["text" => CoreExtension::getAttribute($this->env, $this->source,                     // line 56
$context["link"], "text", [], "any", false, false, true, 56), "url" => CoreExtension::getAttribute($this->env, $this->source,                     // line 57
$context["link"], "url", [], "any", false, false, true, 57), "theme" =>                     // line 58
($context["theme"] ?? null), "icon" => "left-arrow", "icon_placement" => "before", "modifier_class" => "ct-breadcrumb__links__link"];
                    // line 63
                    yield "      ";
                }
                // line 64
                yield "    ";
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
            // line 65
            yield "
    ";
            // line 66
            if ((($tmp = ($context["parent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 67
                yield "      ";
                $context["parent_link_item"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 68
                    yield "        ";
                    yield from $this->load("civictheme:link", 68)->unwrap()->yield(CoreExtension::toArray(($context["parent"] ?? null)));
                    // line 69
                    yield "      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 70
                yield "
      ";
                // line 71
                yield from $this->load("civictheme:item-list", 71)->unwrap()->yield(CoreExtension::toArray(["direction" => "horizontal", "items" => [                // line 73
($context["parent_link_item"] ?? null)], "modifier_class" => "ct-breadcrumb__links show-xxs-flex hide-m"]));
                // line 76
                yield "    ";
            }
            // line 77
            yield "
    ";
            // line 78
            yield from $this->load("civictheme:item-list", 78)->unwrap()->yield(CoreExtension::toArray(["direction" => "horizontal", "items" =>             // line 80
($context["link_items"] ?? null), "no_gap" => true, "modifier_class" => "ct-breadcrumb__links hide-xxs show-m-flex"]));
            // line 84
            yield "  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "links", "attributes", "loop", "active_is_link"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:breadcrumb";
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
        return array (  190 => 84,  188 => 80,  187 => 78,  184 => 77,  181 => 76,  179 => 73,  178 => 71,  175 => 70,  171 => 69,  168 => 68,  165 => 67,  163 => 66,  160 => 65,  146 => 64,  143 => 63,  141 => 58,  140 => 57,  139 => 56,  137 => 55,  135 => 54,  132 => 53,  130 => 52,  127 => 51,  121 => 44,  119 => 43,  117 => 42,  112 => 40,  110 => 39,  108 => 36,  107 => 35,  106 => 34,  105 => 33,  104 => 32,  103 => 31,  102 => 30,  99 => 29,  82 => 28,  79 => 27,  77 => 26,  69 => 25,  66 => 24,  63 => 23,  60 => 22,  58 => 21,  55 => 20,  53 => 19,  51 => 18,  48 => 17,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:breadcrumb", "themes/contrib/civictheme/components/02-molecules/breadcrumb/breadcrumb.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 18, "if" => 21, "for" => 28, "include" => 42];
        static $filters = ["format" => 18, "default" => 18, "length" => 22, "escape" => 25, "raw" => 25, "merge" => 52];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'include'],
                ['format', 'default', 'length', 'escape', 'raw', 'merge'],
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
