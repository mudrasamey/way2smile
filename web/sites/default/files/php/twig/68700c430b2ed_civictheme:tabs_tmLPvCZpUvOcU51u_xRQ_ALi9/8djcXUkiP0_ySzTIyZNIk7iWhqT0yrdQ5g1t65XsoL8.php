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

/* civictheme:tabs */
class __TwigTemplate_b5827975e53b02d4589b806c06dae7e6 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--tabs"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:tabs"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:tabs"));
        // line 25
        yield "
";
        // line 26
        $context["vertical_spacing_class"] = ((CoreExtension::inFilter(($context["vertical_spacing"] ?? null), ["top", "bottom", "both"])) ? (Twig\Extension\CoreExtension::sprintf("ct-vertical-spacing--%s", ($context["vertical_spacing"] ?? null))) : (""));
        // line 27
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 28
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s", ($context["theme_class"] ?? null), ($context["vertical_spacing_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 29
        yield "
";
        // line 31
        if ((Twig\Extension\CoreExtension::testEmpty(($context["links"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["panels"] ?? null)))) {
            // line 32
            yield "  ";
            $context["links"] = [];
            // line 33
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["panels"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["panel"]) {
                // line 34
                yield "    ";
                $context["link_id"] = (CoreExtension::getAttribute($this->env, $this->source, $context["panel"], "id", [], "any", false, false, true, 34) . "-tab");
                // line 35
                yield "    ";
                $context["links"] = Twig\Extension\CoreExtension::merge(($context["links"] ?? null), [["text" => CoreExtension::getAttribute($this->env, $this->source,                 // line 36
$context["panel"], "title", [], "any", false, false, true, 36), "url" => ("#" .                 // line 37
($context["link_id"] ?? null)), "attributes" => (((("role=\"tab\" id=\"" .                 // line 38
($context["link_id"] ?? null)) . "\" aria-controls=\"") . CoreExtension::getAttribute($this->env, $this->source, $context["panel"], "id", [], "any", false, false, true, 38)) . "\""), "link_id" =>                 // line 39
($context["link_id"] ?? null)]]);
                // line 41
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['panel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 43
        yield "
";
        // line 44
        $context["link_items"] = [];
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["link"]) {
            // line 46
            $context["link"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 47
                yield "    ";
                yield from $this->load("civictheme:link", 47)->unwrap()->yield(CoreExtension::toArray(["theme" =>                 // line 48
($context["theme"] ?? null), "text" => CoreExtension::getAttribute($this->env, $this->source,                 // line 49
$context["link"], "text", [], "any", false, false, true, 49), "url" => CoreExtension::getAttribute($this->env, $this->source,                 // line 50
$context["link"], "url", [], "any", false, false, true, 50), "is_new_window" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 51
$context["link"], "is_new_window", [], "any", true, true, true, 51)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["link"], "is_new_window", [], "any", false, false, true, 51)) : (false)), "is_external" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 52
$context["link"], "is_external", [], "any", true, true, true, 52)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["link"], "is_external", [], "any", false, false, true, 52)) : (false)), "modifier_class" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 53
$context["link"], "modifier_class", [], "any", false, false, true, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["link"], "modifier_class", [], "any", false, false, true, 53)) : ("")), "attributes" => ("data-tabs-tab " . (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 54
$context["link"], "attributes", [], "any", false, false, true, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["link"], "attributes", [], "any", false, false, true, 54)) : ("")))]));
                // line 56
                yield "  ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            $context["link_items"] = Twig\Extension\CoreExtension::merge(($context["link_items"] ?? null), [$context["link"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "
";
        // line 60
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["panels"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["link_items"] ?? null)))) {
            // line 61
            yield "  <div class=\"ct-tabs ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\" data-tabs-panel ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            yield ">
    ";
            // line 62
            yield from $this->load("civictheme:item-list", 62)->unwrap()->yield(CoreExtension::toArray(["items" =>             // line 63
($context["link_items"] ?? null), "no_gap" => true, "modifier_class" => "ct-tabs__links"]));
            // line 67
            yield "
    ";
            // line 68
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["panels"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 69
                yield "      <div class=\"ct-tabs__panels\">
        ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["panels"] ?? null));
                foreach ($context['_seq'] as $context["k"] => $context["panel"]) {
                    // line 71
                    yield "          ";
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["panel"], "content", [], "any", false, false, true, 71))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 72
                        yield "            <div class=\"ct-tabs__panels__panel ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["panel"], "is_selected", [], "any", false, false, true, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "selected";
                        }
                        yield "\" data-tabs-panel id=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["panel"], "id", [], "any", false, false, true, 72), "html", null, true);
                        yield "\" role=\"tabpanel\" aria-labelledby=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["links"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[$context["k"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), $context["k"], [], "array", false, false, true, 72)), "link_id", [], "any", false, false, true, 72), "html", null, true);
                        yield "\">
              ";
                        // line 73
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["panel"], "content", [], "any", false, false, true, 73));
                        yield "
            </div>
          ";
                    }
                    // line 76
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['panel'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                yield "      </div>
    ";
            }
            // line 79
            yield "  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["vertical_spacing", "theme", "links", "panels", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:tabs";
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
        return array (  177 => 79,  173 => 77,  167 => 76,  161 => 73,  150 => 72,  147 => 71,  143 => 70,  140 => 69,  138 => 68,  135 => 67,  133 => 63,  132 => 62,  123 => 61,  121 => 60,  118 => 59,  112 => 57,  108 => 56,  106 => 54,  105 => 53,  104 => 52,  103 => 51,  102 => 50,  101 => 49,  100 => 48,  98 => 47,  96 => 46,  92 => 45,  90 => 44,  87 => 43,  80 => 41,  78 => 39,  77 => 38,  76 => 37,  75 => 36,  73 => 35,  70 => 34,  65 => 33,  62 => 32,  60 => 31,  57 => 29,  55 => 28,  53 => 27,  51 => 26,  48 => 25,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:tabs", "themes/contrib/civictheme/components/02-molecules/tabs/tabs.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 26, "if" => 31, "for" => 33, "include" => 47];
        static $filters = ["format" => 26, "default" => 27, "merge" => 35, "raw" => 54, "escape" => 61];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'include'],
                ['format', 'default', 'merge', 'raw', 'escape'],
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
