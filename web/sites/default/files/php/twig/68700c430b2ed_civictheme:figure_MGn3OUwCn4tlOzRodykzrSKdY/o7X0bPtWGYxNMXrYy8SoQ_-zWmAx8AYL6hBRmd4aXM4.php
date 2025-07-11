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

/* civictheme:figure */
class __TwigTemplate_3d31a24e07de946c4af3a142c5e66372 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--figure"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:figure"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:figure"));
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
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "  <figure class=\"ct-figure ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            yield ">
    ";
            // line 25
            yield from $this->load("civictheme:image", 25)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 26
($context["theme"] ?? null), "url" =>             // line 27
($context["url"] ?? null), "alt" =>             // line 28
($context["alt"] ?? null), "width" =>             // line 29
($context["width"] ?? null), "height" =>             // line 30
($context["height"] ?? null), "modifier_class" => "ct-figure__image"]));
            // line 33
            yield "
    ";
            // line 34
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["caption"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 35
                yield "      <figcaption class=\"ct-figure__caption\">
        ";
                // line 36
                yield from $this->load("civictheme:icon", 36)->unwrap()->yield(CoreExtension::toArray(["symbol" => "image"]));
                // line 39
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["caption"] ?? null), "html", null, true);
                yield "
      </figcaption>
    ";
            }
            // line 42
            yield "  </figure>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "url", "attributes", "alt", "width", "height", "caption"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:figure";
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
        return array (  93 => 42,  86 => 39,  84 => 36,  81 => 35,  79 => 34,  76 => 33,  74 => 30,  73 => 29,  72 => 28,  71 => 27,  70 => 26,  69 => 25,  60 => 24,  58 => 23,  55 => 22,  53 => 21,  51 => 20,  48 => 19,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:figure", "themes/contrib/civictheme/components/02-molecules/figure/figure.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 20, "if" => 23, "include" => 25];
        static $filters = ["format" => 20, "default" => 20, "escape" => 24, "raw" => 24];
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
