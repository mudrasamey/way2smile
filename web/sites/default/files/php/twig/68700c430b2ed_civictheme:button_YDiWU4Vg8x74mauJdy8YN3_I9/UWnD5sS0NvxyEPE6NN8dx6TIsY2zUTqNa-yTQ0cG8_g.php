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

/* civictheme:button */
class __TwigTemplate_8cb3d5a07622343aece76b2a4f49feaf extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--button"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:button"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:button"));
        // line 26
        yield "
";
        // line 27
        $context["kind"] = ((CoreExtension::inFilter(($context["kind"] ?? null), ["button", "link", "reset", "submit"])) ? (($context["kind"] ?? null)) : ("button"));
        // line 28
        $context["type"] = ((CoreExtension::inFilter(($context["type"] ?? null), ["primary", "secondary", "tertiary"])) ? (($context["type"] ?? null)) : (null));
        // line 29
        $context["size"] = ((CoreExtension::inFilter(($context["size"] ?? null), ["large", "regular", "small"])) ? (($context["size"] ?? null)) : ("regular"));
        // line 30
        $context["icon_placement"] = ((CoreExtension::inFilter(($context["icon_placement"] ?? null), ["before", "after"])) ? (($context["icon_placement"] ?? null)) : ("after"));
        // line 31
        $context["type_class"] = (((($tmp = ($context["type"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::sprintf("ct-button--%s", ($context["type"] ?? null))) : (""));
        // line 32
        $context["kind_class"] = (((($tmp = ($context["kind"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::sprintf("ct-button--%s", ($context["kind"] ?? null))) : (""));
        // line 33
        $context["size_class"] = Twig\Extension\CoreExtension::sprintf("ct-button--%s", ($context["size"] ?? null));
        // line 34
        $context["dismiss_class"] = (((($tmp = ($context["is_dismissable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-button--dismiss") : (""));
        // line 35
        $context["is_external"] = (((($tmp = ($context["is_external"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-button--external") : (""));
        // line 36
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 37
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s %s %s %s %s", ($context["theme_class"] ?? null), ($context["type_class"] ?? null), ($context["kind_class"] ?? null), ($context["size_class"] ?? null), ($context["dismiss_class"] ?? null), ($context["is_external"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 38
        yield "
";
        // line 39
        $context["button_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 40
            if ((($tmp = ($context["allow_html"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                $context["icon_markup"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 42
                    yield from $this->load("civictheme:icon", 42)->unwrap()->yield(CoreExtension::toArray(["symbol" =>                     // line 43
($context["icon"] ?? null), "modifier_class" => "ct-button__icon"]));
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 47
                yield "    ";
                if ((($context["icon_placement"] ?? null) == "before")) {
                    // line 48
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["icon_markup"] ?? null), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["text"] ?? null));
                    yield "
    ";
                } else {
                    // line 50
                    yield "      ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["text"] ?? null));
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["icon_markup"] ?? null), "html", null, true);
                }
            } else {
                // line 53
                yield from $this->load("civictheme:text-icon", 53)->unwrap()->yield(CoreExtension::toArray(["text" =>                 // line 54
($context["text"] ?? null), "is_new_window" =>                 // line 55
($context["is_new_window"] ?? null), "is_external" =>                 // line 56
($context["is_external"] ?? null), "icon" =>                 // line 57
($context["icon"] ?? null), "icon_placement" =>                 // line 58
($context["icon_placement"] ?? null), "icon_group_disabled" => ((                // line 59
array_key_exists("icon_group_disabled", $context)) ? (($context["icon_group_disabled"] ?? null)) : (false)), "icon_single_only" => ((                // line 60
array_key_exists("icon_single_only", $context)) ? (($context["icon_single_only"] ?? null)) : (false)), "icon_class" => "ct-button__icon"]));
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield "
";
        // line 66
        if ((($context["kind"] ?? null) == "button")) {
            // line 67
            yield "  <button
    class=\"ct-button ";
            // line 68
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\"
    data-component-name=\"button\"
    ";
            // line 70
            if ((($tmp = ($context["is_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled=\"disabled\" aria-disabled=\"true\"";
            }
            // line 71
            yield "    ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            // line 72
            yield "  >";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_content"] ?? null), "html", null, true);
            // line 74
            yield "</button>
";
        } elseif ((        // line 75
($context["kind"] ?? null) == "link")) {
            // line 76
            yield "  <a
    class=\"ct-button ";
            // line 77
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\"
    role=\"button\"
    data-component-name=\"button\"
    ";
            // line 80
            if ((($tmp = ($context["url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 81
            yield "    ";
            if ((($tmp = ($context["is_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled=\"disabled\" aria-disabled=\"true\"";
            }
            // line 82
            yield "    ";
            if ((($tmp = ($context["is_new_window"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "target=\"_blank\"";
            }
            // line 83
            yield "    ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            // line 84
            yield "  >";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_content"] ?? null), "html", null, true);
            // line 86
            yield "</a>
";
        } elseif (CoreExtension::inFilter(        // line 87
($context["kind"] ?? null), ["reset", "submit"])) {
            // line 88
            yield "  <input
    type=\"";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["kind"] ?? null), "html", null, true);
            yield "\"
    class=\"ct-button ";
            // line 90
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\"
    data-component-name=\"button\"
    value=\"";
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text"] ?? null), "html", null, true);
            yield "\"
    ";
            // line 93
            if ((($tmp = ($context["is_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled=\"disabled\" aria-disabled=\"true\"";
            }
            // line 94
            yield "    ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            // line 95
            yield "  />
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_dismissable", "theme", "allow_html", "icon", "text", "is_new_window", "icon_group_disabled", "icon_single_only", "is_disabled", "attributes", "url"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:button";
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
        return array (  209 => 95,  204 => 94,  200 => 93,  196 => 92,  191 => 90,  187 => 89,  184 => 88,  182 => 87,  179 => 86,  177 => 85,  175 => 84,  170 => 83,  165 => 82,  160 => 81,  154 => 80,  148 => 77,  145 => 76,  143 => 75,  140 => 74,  138 => 73,  136 => 72,  131 => 71,  127 => 70,  122 => 68,  119 => 67,  117 => 66,  114 => 65,  109 => 60,  108 => 59,  107 => 58,  106 => 57,  105 => 56,  104 => 55,  103 => 54,  102 => 53,  96 => 50,  90 => 48,  87 => 47,  83 => 43,  82 => 42,  80 => 41,  78 => 40,  76 => 39,  73 => 38,  71 => 37,  69 => 36,  67 => 35,  65 => 34,  63 => 33,  61 => 32,  59 => 31,  57 => 30,  55 => 29,  53 => 28,  51 => 27,  48 => 26,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:button", "themes/contrib/civictheme/components/01-atoms/button/button.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 27, "if" => 40, "include" => 42];
        static $filters = ["format" => 31, "default" => 36, "escape" => 48, "raw" => 48];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
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
