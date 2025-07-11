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

/* civictheme:message */
class __TwigTemplate_792ee5ec7f5645247047d1e70c0b2199 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--message"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:message"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:message"));
        // line 17
        yield "
";
        // line 18
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "information")) : ("information"));
        // line 19
        $context["type_class"] = Twig\Extension\CoreExtension::sprintf("ct-message--%s", ($context["type"] ?? null));
        // line 20
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 21
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s", ($context["theme_class"] ?? null), ($context["type_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 22
        yield "
";
        // line 23
        $context["icons"] = ["information" => "information-mark", "warning" => "exclamation-mark-2", "error" => "exclamation-mark-1", "success" => "approve"];
        // line 29
        yield "
<div
  class=\"ct-message ";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
        yield "\"
  role=\"";
        // line 32
        if ((($context["type"] ?? null) == "error")) {
            yield "alert";
        } else {
            yield "contentinfo";
        }
        yield "\"
  aria-label=\"";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["type"] ?? null), "html", null, true);
        yield "\"
  aria-live=\"assertive\"
  ";
        // line 35
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
        }
        // line 36
        yield ">
  ";
        // line 37
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), ($context["type"] ?? null), [], "array", true, true, true, 37)) {
            // line 38
            yield "    <div class=\"ct-message__icon\">
      ";
            // line 39
            yield from $this->load("civictheme:icon", 39)->unwrap()->yield(CoreExtension::toArray(["symbol" => (($_v0 =             // line 40
($context["icons"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[($context["type"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), ($context["type"] ?? null), [], "array", false, false, true, 40)), "size" => "regular"]));
            // line 43
            yield "    </div>
  ";
        }
        // line 45
        yield "
  <div class=\"ct-message__content\">
    ";
        // line 47
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "      <div class=\"ct-message__title\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</div>
    ";
        }
        // line 50
        yield "
    ";
        // line 51
        if ((($tmp = ($context["description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "      <div class=\"ct-message__summary\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::striptags(($context["description"] ?? null), "<strong>,<a>,<pre>,<ul>,<ol>,<li>"));
            yield "</div>
    ";
        }
        // line 54
        yield "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "attributes", "title", "description"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:message";
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
        return array (  127 => 54,  121 => 52,  119 => 51,  116 => 50,  110 => 48,  108 => 47,  104 => 45,  100 => 43,  98 => 40,  97 => 39,  94 => 38,  92 => 37,  89 => 36,  85 => 35,  80 => 33,  72 => 32,  68 => 31,  64 => 29,  62 => 23,  59 => 22,  57 => 21,  55 => 20,  53 => 19,  51 => 18,  48 => 17,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:message", "themes/contrib/civictheme/components/03-organisms/message/message.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 18, "if" => 32, "include" => 39];
        static $filters = ["default" => 18, "format" => 19, "escape" => 31, "raw" => 35, "striptags" => 52];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['default', 'format', 'escape', 'raw', 'striptags'],
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
