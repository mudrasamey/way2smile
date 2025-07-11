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

/* civictheme:grid */
class __TwigTemplate_a6cb6521f61c1537a834453f692742c0 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--grid"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:grid"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:grid"));
        // line 24
        yield "
";
        // line 25
        $context["use_container"] = ((array_key_exists("use_container", $context)) ? (($context["use_container"] ?? null)) : (true));
        // line 26
        $context["is_fluid"] = ((array_key_exists("is_fluid", $context)) ? (($context["is_fluid"] ?? null)) : (false));
        // line 27
        $context["fill_width"] = ((array_key_exists("fill_width", $context)) ? (($context["fill_width"] ?? null)) : (false));
        // line 28
        $context["row_element"] = ((array_key_exists("row_element", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_element"] ?? null), "div")) : ("div"));
        // line 29
        $context["column_element"] = ((array_key_exists("column_element", $context)) ? (Twig\Extension\CoreExtension::default(($context["column_element"] ?? null), "div")) : ("div"));
        // line 30
        $context["template_column_count"] = ((array_key_exists("template_column_count", $context)) ? (Twig\Extension\CoreExtension::default(($context["template_column_count"] ?? null), 0)) : (0));
        // line 31
        $context["row_class"] = ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), "")) : (""));
        // line 32
        $context["modifier_class"] = ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : (""));
        // line 33
        yield "
";
        // line 34
        if ((($context["template_column_count"] ?? null) > 0)) {
            // line 35
            yield "  ";
            $context["column_class"] = ((array_key_exists("column_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["column_class"] ?? null), "")) : (""));
            // line 36
            yield "  ";
            $context["template_column_count"] = ((CoreExtension::inFilter(($context["template_column_count"] ?? null), [1, 2, 3, 4, 6, 12])) ? (($context["template_column_count"] ?? null)) : (12));
            // line 37
            yield "  ";
            $context["column_class"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::sprintf("col-xxs-12 col-m-%s %s", (int) floor((12 / ($context["template_column_count"] ?? null))), ($context["column_class"] ?? null)));
        } else {
            // line 39
            yield "  ";
            $context["column_class"] = Twig\Extension\CoreExtension::trim(("col " . ((array_key_exists("column_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["column_class"] ?? null), "")) : (""))));
        }
        // line 41
        yield "
";
        // line 42
        $context["row_classes"] = ["row"];
        // line 43
        if ((($tmp = ($context["fill_width"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "  ";
            $context["row_classes"] = Twig\Extension\CoreExtension::merge(($context["row_classes"] ?? null), ["row--fill-width"]);
        }
        // line 46
        $context["row_classes"] = Twig\Extension\CoreExtension::merge(($context["row_classes"] ?? null), [($context["row_class"] ?? null)]);
        // line 47
        yield "
";
        // line 48
        $context["container_class"] = "";
        // line 49
        if ((($tmp = ($context["use_container"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "  ";
            $context["container_class"] = Twig\Extension\CoreExtension::trim((((((($tmp = ($context["is_fluid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("container-fluid") : ("container")) . " ") . ($context["modifier_class"] ?? null)));
        } else {
            // line 52
            yield "  ";
            // line 53
            yield "  ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["modifier_class"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "    ";
                $context["row_classes"] = Twig\Extension\CoreExtension::merge(($context["row_classes"] ?? null), [($context["modifier_class"] ?? null)]);
                // line 55
                yield "  ";
            }
            // line 56
            yield "  ";
            $context["row_attributes"] = Twig\Extension\CoreExtension::trim(((($context["row_attributes"] ?? null) . " ") . ($context["attributes"] ?? null)));
        }
        // line 58
        yield "
";
        // line 59
        $context["row_class_string"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::join(($context["row_classes"] ?? null), " "));
        // line 60
        yield "
";
        // line 61
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["items"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "  ";
            if ((($tmp = ($context["use_container"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "    <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container_class"] ?? null), "html", null, true);
                yield "\" ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
                }
                yield " aria-live=\"polite\">
  ";
            }
            // line 65
            yield "  <";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["row_element"] ?? null), "html", null, true);
            yield " class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["row_class_string"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["row_attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["row_attributes"] ?? null));
            }
            yield ">
  ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 67
                yield "    ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty($context["item"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 68
                    yield "      <";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["column_element"] ?? null), "html", null, true);
                    yield " class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["column_class"] ?? null), "html", null, true);
                    yield "\" ";
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["column_attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["column_attributes"] ?? null));
                    }
                    yield ">
      ";
                    // line 69
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($context["item"]);
                    yield "
      </";
                    // line 70
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["column_element"] ?? null), "html", null, true);
                    yield ">
    ";
                }
                // line 72
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "  </";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["row_element"] ?? null), "html", null, true);
            yield ">
  ";
            // line 74
            if ((($tmp = ($context["use_container"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 75
                yield "    </div>
  ";
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "items", "column_attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:grid";
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
        return array (  199 => 75,  197 => 74,  192 => 73,  186 => 72,  181 => 70,  177 => 69,  166 => 68,  163 => 67,  159 => 66,  148 => 65,  138 => 63,  135 => 62,  133 => 61,  130 => 60,  128 => 59,  125 => 58,  121 => 56,  118 => 55,  115 => 54,  112 => 53,  110 => 52,  106 => 50,  104 => 49,  102 => 48,  99 => 47,  97 => 46,  93 => 44,  91 => 43,  89 => 42,  86 => 41,  82 => 39,  78 => 37,  75 => 36,  72 => 35,  70 => 34,  67 => 33,  65 => 32,  63 => 31,  61 => 30,  59 => 29,  57 => 28,  55 => 27,  53 => 26,  51 => 25,  48 => 24,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:grid", "themes/contrib/civictheme/components/00-base/grid/grid.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 25, "if" => 34, "for" => 66];
        static $filters = ["default" => 28, "trim" => 37, "format" => 37, "merge" => 44, "join" => 59, "escape" => 63, "raw" => 63];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['default', 'trim', 'format', 'merge', 'join', 'escape', 'raw'],
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
