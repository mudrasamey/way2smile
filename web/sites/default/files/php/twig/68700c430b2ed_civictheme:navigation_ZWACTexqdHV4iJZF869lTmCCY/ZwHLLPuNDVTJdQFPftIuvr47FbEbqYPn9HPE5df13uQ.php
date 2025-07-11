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

/* civictheme:navigation */
class __TwigTemplate_e50d2a6fd406c4c8d1fb50702df0a139 extends Template
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
            'title_block' => [$this, 'block_title_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--navigation"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:navigation"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:navigation"));
        // line 33
        yield "
";
        // line 34
        $context["menu_id"] = ((array_key_exists("menu_id", $context)) ? (Twig\Extension\CoreExtension::default(($context["menu_id"] ?? null), "navigation")) : ("navigation"));
        // line 35
        $context["dropdown_class"] = Twig\Extension\CoreExtension::sprintf("ct-navigation--%s", ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "none")) : ("none")));
        // line 36
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 37
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s", ($context["theme_class"] ?? null), ($context["dropdown_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 38
        yield "
";
        // line 39
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["items"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "  ";
            if (CoreExtension::inFilter(($context["type"] ?? null), ["dropdown", "drawer"])) {
                // line 41
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys(($context["items"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                    // line 42
                    yield "      ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["items"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[$context["key"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), $context["key"], [], "array", false, false, true, 42)), "below", [], "any", false, false, true, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 43
                        yield "        ";
                        // line 44
                        yield "        ";
                        $context["item_attributes"] = ((("data-collapsible data-collapsible-collapsed data-collapsible-icon-group data-collapsible-group=" . ($context["menu_id"] ?? null)) . " ") . (((($tmp = ($context["is_animated"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("data-collapsible-duration=250") : ("data-collapsible-duration=0")));
                        // line 45
                        yield "
        ";
                        // line 46
                        if ((($context["type"] ?? null) == "drawer")) {
                            // line 47
                            yield "          ";
                            // line 48
                            yield "          ";
                            $context["item_dropdown_columns_class"] = (((($tmp = ($context["dropdown_columns"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::sprintf("ct-navigation__dropdown-columns--%s", ($context["dropdown_columns"] ?? null))) : (""));
                            // line 49
                            yield "          ";
                            $context["item_dropdown_columns_fill_class"] = (((($tmp = ($context["dropdown_columns_fill"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-navigation__dropdown-columns--fill") : (""));
                            // line 50
                            yield "          ";
                            $context["item_modifier_class"] = Twig\Extension\CoreExtension::sprintf("ct-navigation__has-dropdown %s %s", ($context["item_dropdown_columns_class"] ?? null), ($context["item_dropdown_columns_fill_class"] ?? null));
                            // line 51
                            yield "          ";
                            // line 52
                            yield "          ";
                            $context["new_item"] = Twig\Extension\CoreExtension::merge((($_v1 = ($context["items"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[$context["key"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), $context["key"], [], "array", false, false, true, 52)), ["attributes" => ($context["item_attributes"] ?? null), "modifier_class" => ($context["item_modifier_class"] ?? null)]);
                            // line 53
                            yield "          ";
                            $context["items"] = Twig\Extension\CoreExtension::merge(($context["items"] ?? null), [$context["key"] => ($context["new_item"] ?? null)]);
                            // line 54
                            yield "        ";
                        } else {
                            // line 55
                            yield "          ";
                            // line 56
                            yield "          ";
                            $context["item_modifier_class"] = "ct-navigation__has-dropdown";
                            // line 57
                            yield "          ";
                            // line 58
                            yield "          ";
                            $context["new_item"] = Twig\Extension\CoreExtension::merge((($_v2 = ($context["items"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[$context["key"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), $context["key"], [], "array", false, false, true, 58)), ["attributes" => ($context["item_attributes"] ?? null), "modifier_class" => ($context["item_modifier_class"] ?? null)]);
                            // line 59
                            yield "          ";
                            $context["items"] = Twig\Extension\CoreExtension::merge(($context["items"] ?? null), [$context["key"] => ($context["new_item"] ?? null)]);
                            // line 60
                            yield "        ";
                        }
                        // line 61
                        yield "      ";
                    }
                    // line 62
                    yield "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                yield "  ";
            } else {
                // line 64
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys(($context["items"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                    // line 65
                    yield "      ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["items"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[$context["key"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), $context["key"], [], "array", false, false, true, 65)), "below", [], "any", false, false, true, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 66
                        yield "        ";
                        $context["items_without_below"] = Twig\Extension\CoreExtension::merge((($_v4 = ($context["items"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4[$context["key"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), $context["key"], [], "array", false, false, true, 66)), ["below" => null]);
                        // line 67
                        yield "        ";
                        $context["items"] = Twig\Extension\CoreExtension::merge(($context["items"] ?? null), [$context["key"] => ($context["items_without_below"] ?? null)]);
                        // line 68
                        yield "      ";
                    }
                    // line 69
                    yield "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                yield "  ";
            }
            // line 71
            yield "
  <div class=\"ct-navigation ";
            // line 72
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            yield ">
    ";
            // line 73
            if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 74
                yield "      ";
                yield from $this->unwrap()->yieldBlock('title_block', $context, $blocks);
                // line 82
                yield "    ";
            }
            // line 83
            yield "
    <nav
      class=\"ct-navigation__items\"
      ";
            // line 86
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["name"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "aria-label=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["name"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 87
            yield "    >
      ";
            // line 88
            yield from $this->load("civictheme:menu", 88)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 89
($context["theme"] ?? null), "items" =>             // line 90
($context["items"] ?? null), "modifier_class" => "ct-navigation__menu"]));
            // line 93
            yield "    </nav>
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "theme", "items", "is_animated", "dropdown_columns", "dropdown_columns_fill", "attributes", "title", "name"]);        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 75
        yield "        ";
        yield from $this->load("civictheme:heading", 75)->unwrap()->yield(CoreExtension::toArray(["theme" =>         // line 76
($context["theme"] ?? null), "level" => 2, "content" =>         // line 78
($context["title"] ?? null), "modifier_class" => "ct-navigation__title"]));
        // line 81
        yield "      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:navigation";
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
        return array (  220 => 81,  218 => 78,  217 => 76,  215 => 75,  208 => 74,  199 => 93,  197 => 90,  196 => 89,  195 => 88,  192 => 87,  186 => 86,  181 => 83,  178 => 82,  175 => 74,  173 => 73,  165 => 72,  162 => 71,  159 => 70,  153 => 69,  150 => 68,  147 => 67,  144 => 66,  141 => 65,  136 => 64,  133 => 63,  127 => 62,  124 => 61,  121 => 60,  118 => 59,  115 => 58,  113 => 57,  110 => 56,  108 => 55,  105 => 54,  102 => 53,  99 => 52,  97 => 51,  94 => 50,  91 => 49,  88 => 48,  86 => 47,  84 => 46,  81 => 45,  78 => 44,  76 => 43,  73 => 42,  68 => 41,  65 => 40,  63 => 39,  60 => 38,  58 => 37,  56 => 36,  54 => 35,  52 => 34,  49 => 33,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:navigation", "themes/contrib/civictheme/components/03-organisms/navigation/navigation.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 34, "if" => 39, "for" => 41, "block" => 74, "include" => 88];
        static $filters = ["default" => 34, "format" => 35, "keys" => 41, "merge" => 52, "escape" => 72, "raw" => 72];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'block', 'include'],
                ['default', 'format', 'keys', 'merge', 'escape', 'raw'],
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
