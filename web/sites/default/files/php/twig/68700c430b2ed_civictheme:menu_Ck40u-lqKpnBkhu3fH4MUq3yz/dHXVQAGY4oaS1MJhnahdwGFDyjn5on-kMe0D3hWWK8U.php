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

/* civictheme:menu */
class __TwigTemplate_faacad4f166dc02b29ffb823aae5002b extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:menu"));
        // line 26
        yield "
";
        // line 27
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 28
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s", ($context["theme_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 29
        yield "
";
        // line 30
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 31
        yield "
";
        // line 110
        yield "
";
        // line 122
        yield "
";
        // line 123
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 123, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), 0, ($context["modifier_class"] ?? null), ($context["theme"] ?? null), ($context["is_collapsible"] ?? null)]));
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "_self", "items", "is_collapsible", "menu_level", "attributes", "item", "parent_key"]);        yield from [];
    }

    // line 32
    public function macro_menu_links($items = null, $menu_level = null, $modifier_class = null, $theme = null, $is_collapsible = null, $parent_key = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "menu_level" => $menu_level,
            "modifier_class" => $modifier_class,
            "theme" => $theme,
            "is_collapsible" => $is_collapsible,
            "parent_key" => $parent_key,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 33
            yield "  ";
            if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 34
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    yield "      <ul class=\"ct-menu ct-menu--level-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_level"] ?? null), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
                    yield "\" data-component-name=\"ct-menu\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["attributes"] ?? null), "")) : ("")), "html", null, true);
                    yield ">
    ";
                } else {
                    // line 37
                    yield "      ";
                    if ((($tmp = ($context["is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 38
                        yield "        ";
                        $context["collapsible_panel"] = "data-collapsible-panel";
                        // line 39
                        yield "        ";
                        $context["aria_hidden"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "in_active_trail", [], "any", false, false, true, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("aria-hidden=\"false\"") : ("aria-hidden=\"true\""));
                        // line 40
                        yield "      ";
                    }
                    // line 41
                    yield "      <div class=\"ct-menu__sub-menu__wrapper ct-menu__sub-menu__wrapper--level-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_level"] ?? null), "html", null, true);
                    yield "\" ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["collapsible_panel"] ?? null), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["aria_hidden"] ?? null));
                    yield ">
        <ul class=\"ct-menu ct-menu__sub-menu ct-menu--level-";
                    // line 42
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_level"] ?? null), "html", null, true);
                    yield "\">
    ";
                }
                // line 44
                yield "
    ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    // line 46
                    yield "      ";
                    $context["item_classes"] = ["ct-menu__item", ("ct-menu__item--level-" .                     // line 48
($context["menu_level"] ?? null)), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 49
$context["item"], "below", [], "any", false, false, true, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-menu__item--has-children") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 50
$context["item"], "in_active_trail", [], "any", false, false, true, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-menu__item--active-trail") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 51
$context["item"], "modifier_class", [], "any", true, true, true, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "modifier_class", [], "any", false, false, true, 51), "")) : (""))];
                    // line 53
                    yield "
      ";
                    // line 54
                    $context["item_attributes"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", true, true, true, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 54), "")) : (""));
                    // line 55
                    yield "      ";
                    $context["aria_expanded"] = "";
                    // line 56
                    yield "      ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 56) && ($context["is_collapsible"] ?? null))) {
                        // line 57
                        yield "        ";
                        $context["aria_expanded"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 57) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 57))) ? ("aria-expanded=\"true\"") : ("aria-expanded=\"false\""));
                        // line 58
                        yield "        ";
                        $context["collapsible_collapsed"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 58) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 58))) ? ("") : ("data-collapsible-collapsed"));
                        // line 59
                        yield "        ";
                        $context["item_attributes"] = Twig\Extension\CoreExtension::join([($context["item_attributes"] ?? null), "data-collapsible", "data-collapsible-duration=\"0\"", ($context["collapsible_collapsed"] ?? null), ($context["aria_expanded"] ?? null)], " ");
                        // line 60
                        yield "      ";
                    }
                    // line 61
                    yield "
      ";
                    // line 63
                    yield "      ";
                    $context["has_active_children"] = false;
                    // line 64
                    yield "      ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 65
                        yield "        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 65));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 66
                            yield "          ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "in_active_trail", [], "any", false, false, true, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 67
                                yield "            ";
                                $context["has_active_children"] = true;
                                // line 68
                                yield "          ";
                            }
                            // line 69
                            yield "        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 70
                        yield "      ";
                    }
                    // line 71
                    yield "
      ";
                    // line 72
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 72) &&  !($context["has_active_children"] ?? null))) {
                        // line 73
                        yield "        ";
                        $context["aria_current"] = "aria-current=\"page\"";
                        // line 74
                        yield "      ";
                    } else {
                        // line 75
                        yield "        ";
                        $context["aria_current"] = "";
                        // line 76
                        yield "      ";
                    }
                    // line 77
                    yield "
      <li class=\"";
                    // line 78
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["item_classes"] ?? null), " "), "html", null, true);
                    yield "\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["item_attributes"] ?? null));
                    yield ">

        ";
                    // line 80
                    yield from $this->load("civictheme:link", 80)->unwrap()->yield(CoreExtension::toArray(["theme" =>                     // line 81
($context["theme"] ?? null), "text" => CoreExtension::getAttribute($this->env, $this->source,                     // line 82
$context["item"], "title", [], "any", false, false, true, 82), "title" => CoreExtension::getAttribute($this->env, $this->source,                     // line 83
$context["item"], "title", [], "any", false, false, true, 83), "url" => CoreExtension::getAttribute($this->env, $this->source,                     // line 84
$context["item"], "url", [], "any", false, false, true, 84), "modifier_class" => "ct-menu__item__link", "attributes" => (((CoreExtension::getAttribute($this->env, $this->source,                     // line 86
$context["item"], "link_attributes", [], "any", true, true, true, 86)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link_attributes", [], "any", false, false, true, 86), "")) : ("")) . ($context["aria_current"] ?? null)), "is_new_window" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 87
$context["item"], "is_new_window", [], "any", true, true, true, 87)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_new_window", [], "any", false, false, true, 87)) : (false)), "is_external" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 88
$context["item"], "is_external", [], "any", true, true, true, 88)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_external", [], "any", false, false, true, 88)) : (false))]));
                    // line 90
                    yield "
        ";
                    // line 91
                    if ((($context["is_collapsible"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 91))) {
                        // line 92
                        yield "          <a href=\"#\" class=\"ct-menu__item__link-trigger\" data-collapsible-trigger ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["aria_expanded"] ?? null));
                        yield " title=\"Expand ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 92), "html", null, true);
                        yield " menu\"></a>
        ";
                    }
                    // line 94
                    yield "
        ";
                    // line 95
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 96
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links_below", $context, 96, $this->getSourceContext())->macro_menu_links_below(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 96), (($context["menu_level"] ?? null) + 1), "", ($context["theme"] ?? null), ($context["is_collapsible"] ?? null), $context["key"]]));
                    }
                    // line 98
                    yield "
      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                yield "
    ";
                // line 102
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 103
                    yield "      </ul>
    ";
                } else {
                    // line 105
                    yield "        </ul>
      </div>
    ";
                }
                // line 108
                yield "  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 119
    public function macro_menu_links_below($items = null, $menu_level = null, $modifier_class = null, $theme = null, $is_collapsible = null, $parent_key = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "menu_level" => $menu_level,
            "modifier_class" => $modifier_class,
            "theme" => $theme,
            "is_collapsible" => $is_collapsible,
            "parent_key" => $parent_key,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 120
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 120, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["menu_level"] ?? null), ($context["modifier_class"] ?? null), ($context["theme"] ?? null), ($context["is_collapsible"] ?? null), ($context["parent_key"] ?? null)]));
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:menu";
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
        return array (  308 => 120,  291 => 119,  284 => 108,  279 => 105,  275 => 103,  273 => 102,  270 => 101,  262 => 98,  259 => 96,  257 => 95,  254 => 94,  246 => 92,  244 => 91,  241 => 90,  239 => 88,  238 => 87,  237 => 86,  236 => 84,  235 => 83,  234 => 82,  233 => 81,  232 => 80,  225 => 78,  222 => 77,  219 => 76,  216 => 75,  213 => 74,  210 => 73,  208 => 72,  205 => 71,  202 => 70,  196 => 69,  193 => 68,  190 => 67,  187 => 66,  182 => 65,  179 => 64,  176 => 63,  173 => 61,  170 => 60,  167 => 59,  164 => 58,  161 => 57,  158 => 56,  155 => 55,  153 => 54,  150 => 53,  148 => 51,  147 => 50,  146 => 49,  145 => 48,  143 => 46,  139 => 45,  136 => 44,  131 => 42,  122 => 41,  119 => 40,  116 => 39,  113 => 38,  110 => 37,  100 => 35,  97 => 34,  94 => 33,  77 => 32,  69 => 123,  66 => 122,  63 => 110,  60 => 31,  58 => 30,  55 => 29,  53 => 28,  51 => 27,  48 => 26,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:menu", "themes/contrib/civictheme/components/00-base/menu/menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 27, "import" => 30, "macro" => 32, "if" => 33, "for" => 45, "include" => 80];
        static $filters = ["format" => 27, "default" => 27, "escape" => 35, "raw" => 41, "join" => 59];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'import', 'macro', 'if', 'for', 'include'],
                ['format', 'default', 'escape', 'raw', 'join'],
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
