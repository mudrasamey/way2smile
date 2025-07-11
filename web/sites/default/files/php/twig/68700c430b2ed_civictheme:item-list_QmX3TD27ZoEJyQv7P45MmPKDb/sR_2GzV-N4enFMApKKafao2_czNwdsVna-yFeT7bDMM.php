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

/* civictheme:item-list */
class __TwigTemplate_1d269aab3e4426bbc2ac12d0b7d2813c extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--item-list"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:item-list"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:item-list"));
        // line 17
        yield "
";
        // line 18
        $context["direction"] = ((CoreExtension::inFilter(($context["direction"] ?? null), ["horizontal", "vertical"])) ? (($context["direction"] ?? null)) : ("horizontal"));
        // line 19
        $context["size"] = ((CoreExtension::inFilter(($context["size"] ?? null), ["small", "regular", "large"])) ? (($context["size"] ?? null)) : ("regular"));
        // line 20
        $context["direction_class"] = Twig\Extension\CoreExtension::sprintf("ct-item-list--%s", ($context["direction"] ?? null));
        // line 21
        $context["size_class"] = Twig\Extension\CoreExtension::sprintf("ct-item-list--%s", ($context["size"] ?? null));
        // line 22
        $context["no_gap_class"] = (((($tmp = ($context["no_gap"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-item-list--no-gap") : (""));
        // line 23
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s %s", ($context["direction_class"] ?? null), ($context["size_class"] ?? null), ($context["no_gap_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 24
        yield "
";
        // line 25
        if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "  <ul class=\"ct-item-list ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            yield ">
    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 28
                yield "      ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty($context["item"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 29
                    yield "        <li class=\"ct-item-list__item\">";
                    // line 30
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($context["item"]);
                    // line 31
                    yield "</li>
      ";
                }
                // line 33
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "  </ul>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["no_gap", "items", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:item-list";
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
        return array (  98 => 34,  92 => 33,  88 => 31,  86 => 30,  84 => 29,  81 => 28,  77 => 27,  68 => 26,  66 => 25,  63 => 24,  61 => 23,  59 => 22,  57 => 21,  55 => 20,  53 => 19,  51 => 18,  48 => 17,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:item-list", "themes/contrib/civictheme/components/00-base/item-list/item-list.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 18, "if" => 25, "for" => 27];
        static $filters = ["format" => 20, "default" => 23, "escape" => 26, "raw" => 26];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
