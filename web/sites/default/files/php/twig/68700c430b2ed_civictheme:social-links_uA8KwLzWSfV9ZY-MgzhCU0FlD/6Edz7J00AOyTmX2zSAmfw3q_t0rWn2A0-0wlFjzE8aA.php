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

/* civictheme:social-links */
class __TwigTemplate_929e451e567c5997583d37afb1d3d631 extends Template
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
            'items_block' => [$this, 'block_items_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--social-links"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:social-links"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:social-links"));
        // line 22
        yield "
";
        // line 23
        $context["with_border_class"] = (((($tmp = ($context["with_border"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-social-links--with-border") : (""));
        // line 24
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 25
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s", ($context["theme_class"] ?? null), ($context["with_border_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 26
        yield "
";
        // line 27
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["items"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "  <div class=\"ct-social-links ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            yield ">

    ";
            // line 30
            yield from $this->unwrap()->yieldBlock('items_block', $context, $blocks);
            // line 57
            yield "
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["with_border", "theme", "items", "attributes"]);        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_items_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "      ";
        $context["items_rendered"] = [];
        // line 32
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            $context["item_rendered"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 34
                yield "          ";
                yield from $this->load("civictheme:button", 34)->unwrap()->yield(CoreExtension::toArray(["theme" =>                 // line 35
($context["theme"] ?? null), "kind" => "link", "type" => "tertiary", "icon" => ((( !CoreExtension::getAttribute($this->env, $this->source,                 // line 38
$context["item"], "icon_html", [], "any", true, true, true, 38) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon_html", [], "any", false, false, true, 38)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, true, 38)) : (null)), "text" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 39
$context["item"], "icon_html", [], "any", true, true, true, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon_html", [], "any", false, false, true, 39), null)) : (null)), "url" => CoreExtension::getAttribute($this->env, $this->source,                 // line 40
$context["item"], "url", [], "any", false, false, true, 40), "is_external" => false, "is_new_window" => true, "allow_html" => true, "modifier_class" => "ct-social-links__button", "attributes" => (((CoreExtension::getAttribute($this->env, $this->source,                 // line 45
$context["item"], "title", [], "any", true, true, true, 45) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 45)))) ? (((" title=\"" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 45)) . "\"")) : (""))]));
                // line 47
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 48
            $context["items_rendered"] = Twig\Extension\CoreExtension::merge(($context["items_rendered"] ?? null), [($context["item_rendered"] ?? null)]);
            // line 49
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "
      ";
        // line 51
        yield from $this->load("civictheme:item-list", 51)->unwrap()->yield(CoreExtension::toArray(["items" =>         // line 52
($context["items_rendered"] ?? null), "direction" => "horizontal", "modifier_class" => "ct-social-links__list"]));
        // line 56
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:social-links";
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
        return array (  127 => 56,  125 => 52,  124 => 51,  121 => 50,  115 => 49,  113 => 48,  109 => 47,  107 => 45,  106 => 40,  105 => 39,  104 => 38,  103 => 35,  101 => 34,  99 => 33,  94 => 32,  91 => 31,  84 => 30,  75 => 57,  73 => 30,  63 => 28,  61 => 27,  58 => 26,  56 => 25,  54 => 24,  52 => 23,  49 => 22,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:social-links", "themes/contrib/civictheme/components/02-molecules/social-links/social-links.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 23, "if" => 27, "block" => 30, "for" => 32, "include" => 34];
        static $filters = ["format" => 24, "default" => 24, "escape" => 28, "raw" => 28, "merge" => 48];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'for', 'include'],
                ['format', 'default', 'escape', 'raw', 'merge'],
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
