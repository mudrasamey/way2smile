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

/* civictheme:mobile-navigation-menu */
class __TwigTemplate_e2868b13f1bf26019887f56255d76c8d extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--mobile-navigation-menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:mobile-navigation-menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:mobile-navigation-menu"));
        // line 19
        yield "
";
        // line 20
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 21
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s", ($context["theme_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 22
        yield "
";
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        yield "
";
        // line 91
        yield "
";
        // line 129
        yield "
";
        // line 130
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 130, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), 0, ($context["modifier_class"] ?? null), ($context["theme"] ?? null)]));
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "_self", "items", "menu_level", "attributes", "is_collapsible", "item", "parent_item"]);        yield from [];
    }

    // line 28
    public function macro_menu_links($items = null, $menu_level = null, $modifier_class = null, $theme = null, $is_collapsible = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "menu_level" => $menu_level,
            "modifier_class" => $modifier_class,
            "theme" => $theme,
            "is_collapsible" => $is_collapsible,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 29
            yield "  ";
            if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 30
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 31
                    yield "      <ul class=\"ct-menu ct-menu--level-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_level"] ?? null), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
                    yield "\" data-component-name=\"ct-menu\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["attributes"] ?? null), "")) : ("")), "html", null, true);
                    yield ">
    ";
                } else {
                    // line 33
                    yield "      ";
                    if ((($tmp = ($context["is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 34
                        yield "        ";
                        $context["collapsible_panel"] = "data-collapsible-panel";
                        // line 35
                        yield "        ";
                        $context["aria_hidden"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "in_active_trail", [], "any", false, false, true, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("aria-hidden=\"false\"") : ("aria-hidden=\"true\""));
                        // line 36
                        yield "      ";
                    }
                    // line 37
                    yield "      <div class=\"ct-menu__sub-menu__wrapper ct-menu__sub-menu__wrapper--level-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_level"] ?? null), "html", null, true);
                    yield "\" ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["collapsible_panel"] ?? null), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["aria_hidden"] ?? null), "html", null, true);
                    yield ">
        <ul class=\"ct-menu ct-menu__sub-menu ct-menu--level-";
                    // line 38
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_level"] ?? null), "html", null, true);
                    yield "\">
    ";
                }
                // line 40
                yield "
    ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 42
                    yield "      ";
                    $context["item_classes"] = ["ct-menu__item", ("ct-menu__item--level-" .                     // line 44
($context["menu_level"] ?? null)), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 45
$context["item"], "below", [], "any", false, false, true, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-menu__item--has-children") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 46
$context["item"], "in_active_trail", [], "any", false, false, true, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-menu__item--active-trail") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 47
$context["item"], "modifier_class", [], "any", true, true, true, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "modifier_class", [], "any", false, false, true, 47), "")) : (""))];
                    // line 49
                    yield "
      ";
                    // line 50
                    $context["item_attributes"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", true, true, true, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 50), "")) : (""));
                    // line 51
                    yield "      ";
                    $context["aria_expanded"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 51) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 51))) ? ("aria-expanded=\"true\"") : ("aria-expanded=\"false\""));
                    // line 52
                    yield "      ";
                    if ((($tmp = ($context["is_collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 53
                        yield "        ";
                        $context["collapsible_collapsed"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 53) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 53))) ? ("") : ("data-collapsible-collapsed"));
                        // line 54
                        yield "        ";
                        $context["item_attributes"] = Twig\Extension\CoreExtension::join([($context["item_attributes"] ?? null), "data-collapsible", "data-collapsible-duration=0", ($context["collapsible_collapsed"] ?? null), ($context["aria_expanded"] ?? null)], " ");
                        // line 55
                        yield "      ";
                    }
                    // line 56
                    yield "
      <li class=\"";
                    // line 57
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["item_classes"] ?? null), " "), "html", null, true);
                    yield "\" ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item_attributes"] ?? null), "html", null, true);
                    yield ">

        ";
                    // line 59
                    yield from $this->load("civictheme:link", 59)->unwrap()->yield(CoreExtension::toArray(["theme" =>                     // line 60
($context["theme"] ?? null), "text" => CoreExtension::getAttribute($this->env, $this->source,                     // line 61
$context["item"], "title", [], "any", false, false, true, 61), "title" => CoreExtension::getAttribute($this->env, $this->source,                     // line 62
$context["item"], "title", [], "any", false, false, true, 62), "url" => CoreExtension::getAttribute($this->env, $this->source,                     // line 63
$context["item"], "url", [], "any", false, false, true, 63), "icon" => CoreExtension::getAttribute($this->env, $this->source,                     // line 64
$context["item"], "icon", [], "any", false, false, true, 64), "icon_placement" => "before", "modifier_class" => "ct-menu__item__link", "attributes" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 67
$context["item"], "link_attributes", [], "any", true, true, true, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link_attributes", [], "any", false, false, true, 67), "")) : ("")), "is_new_window" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 68
$context["item"], "is_new_window", [], "any", true, true, true, 68)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_new_window", [], "any", false, false, true, 68)) : (false)), "is_external" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 69
$context["item"], "is_external", [], "any", true, true, true, 69)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_external", [], "any", false, false, true, 69)) : (false))]));
                    // line 71
                    yield "
        ";
                    // line 72
                    if ((($context["is_collapsible"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 72))) {
                        // line 73
                        yield "          <a href=\"#\" class=\"ct-menu__item__link-trigger\" data-collapsible-trigger ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["aria_expanded"] ?? null), "html", null, true);
                        yield " title=\"Expand ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 73), "html", null, true);
                        yield " menu\"></a>
        ";
                    }
                    // line 75
                    yield "
        ";
                    // line 76
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 77
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links_below", $context, 77, $this->getSourceContext())->macro_menu_links_below(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 77), (($context["menu_level"] ?? null) + 1), ($context["modifier_class"] ?? null), ($context["theme"] ?? null), $context["item"]]));
                        yield "
        ";
                    }
                    // line 79
                    yield "
      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                yield "
    ";
                // line 83
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 84
                    yield "      </ul>
    ";
                } else {
                    // line 86
                    yield "        </ul>
      </div>
    ";
                }
                // line 89
                yield "  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 95
    public function macro_menu_links_below($items = null, $menu_level = null, $modifier_class = null, $theme = null, $parent_item = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "menu_level" => $menu_level,
            "modifier_class" => $modifier_class,
            "theme" => $theme,
            "parent_item" => $parent_item,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 96
            yield "
  ";
            // line 97
            yield from $this->load("civictheme:button", 97)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 98
($context["theme"] ?? null), "kind" => "button", "icon" => "right-arrow-2", "size" => "regular", "modifier_class" => "ct-mobile-navigation__open-subsection-trigger", "attributes" => Twig\Extension\CoreExtension::sprintf("data-flyout-open-trigger aria-expanded=\"false\" aria-label=\"Open %s submenu\"", CoreExtension::getAttribute($this->env, $this->source,             // line 103
($context["parent_item"] ?? null), "title", [], "any", false, false, true, 103))]));
            // line 105
            yield "
  <div data-flyout data-flyout-direction=\"right\" data-flyout-focus=\".ct-link\">
    <div data-flyout-panel>
      ";
            // line 108
            yield from $this->load("civictheme:mobile-navigation-close", 108)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 109
($context["theme"] ?? null)]));
            // line 111
            yield "
      <div class=\"ct-mobile-navigation__close-trigger\">
        ";
            // line 113
            yield from $this->load("civictheme:button", 113)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 114
($context["theme"] ?? null), "kind" => "button", "icon" => "left-arrow-outline", "icon_placement" => "before", "size" => "regular", "text" => CoreExtension::getAttribute($this->env, $this->source,             // line 119
($context["parent_item"] ?? null), "title", [], "any", false, false, true, 119), "attributes" => Twig\Extension\CoreExtension::sprintf("data-flyout-close-trigger aria-label=\"Close %s submenu\"", CoreExtension::getAttribute($this->env, $this->source,             // line 120
($context["parent_item"] ?? null), "title", [], "any", false, false, true, 120))]));
            // line 122
            yield "      </div>

      ";
            // line 124
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 124, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["menu_level"] ?? null), ($context["modifier_class"] ?? null), ($context["theme"] ?? null)]));
            yield "
    </div>
  </div>

";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:mobile-navigation-menu";
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
        return array (  286 => 124,  282 => 122,  280 => 120,  279 => 119,  278 => 114,  277 => 113,  273 => 111,  271 => 109,  270 => 108,  265 => 105,  263 => 103,  262 => 98,  261 => 97,  258 => 96,  242 => 95,  235 => 89,  230 => 86,  226 => 84,  224 => 83,  221 => 82,  213 => 79,  207 => 77,  205 => 76,  202 => 75,  194 => 73,  192 => 72,  189 => 71,  187 => 69,  186 => 68,  185 => 67,  184 => 64,  183 => 63,  182 => 62,  181 => 61,  180 => 60,  179 => 59,  172 => 57,  169 => 56,  166 => 55,  163 => 54,  160 => 53,  157 => 52,  154 => 51,  152 => 50,  149 => 49,  147 => 47,  146 => 46,  145 => 45,  144 => 44,  142 => 42,  138 => 41,  135 => 40,  130 => 38,  121 => 37,  118 => 36,  115 => 35,  112 => 34,  109 => 33,  99 => 31,  96 => 30,  93 => 29,  77 => 28,  69 => 130,  66 => 129,  63 => 91,  60 => 24,  58 => 23,  55 => 22,  53 => 21,  51 => 20,  48 => 19,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:mobile-navigation-menu", "themes/contrib/civictheme/components/03-organisms/mobile-navigation/mobile-navigation-menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 20, "import" => 23, "macro" => 28, "if" => 29, "for" => 41, "include" => 59];
        static $filters = ["format" => 20, "default" => 20, "escape" => 31, "join" => 54];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'import', 'macro', 'if', 'for', 'include'],
                ['format', 'default', 'escape', 'join'],
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
