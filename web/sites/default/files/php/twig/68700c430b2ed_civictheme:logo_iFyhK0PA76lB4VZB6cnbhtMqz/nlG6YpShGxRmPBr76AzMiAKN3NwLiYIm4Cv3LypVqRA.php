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

/* civictheme:logo */
class __TwigTemplate_f522aeea57fa9647d2d05c590a0f984c extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--logo"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:logo"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:logo"));
        // line 37
        yield "
";
        // line 38
        $context["type"] = ((CoreExtension::inFilter(($context["type"] ?? null), ["default", "inline", "stacked", "inline-stacked"])) ? (($context["type"] ?? null)) : ("default"));
        // line 39
        $context["type_class"] = Twig\Extension\CoreExtension::sprintf("ct-logo--%s", ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "default")) : ("default")));
        // line 40
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 41
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s", ($context["theme_class"] ?? null), ($context["type_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 42
        yield "
";
        // line 43
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["logos"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "  ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 45
                yield "    <a class=\"ct-logo ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
                yield "\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("title", $context)) ? (Twig\Extension\CoreExtension::default(($context["title"] ?? null), "Click to go to the homepage")) : ("Click to go to the homepage")), "html", null, true);
                yield "\" ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
                }
                yield ">
  ";
            } else {
                // line 47
                yield "    <div class=\"ct-logo ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
                yield "\" ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
                }
                yield ">
  ";
            }
            // line 49
            yield "
  ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["logos"] ?? null));
            foreach ($context['_seq'] as $context["logo_type"] => $context["logo"]) {
                // line 51
                yield "    ";
                if ((((($context["type"] ?? null) == "default") && ($context["logo_type"] == "primary")) || (($context["type"] ?? null) != "default"))) {
                    // line 52
                    yield "      ";
                    if (($context["logo_type"] == "secondary")) {
                        // line 53
                        yield "        <span class=\"ct-logo__stripe ";
                        if ((($context["type"] ?? null) == "inline")) {
                            yield "hide-xxs show-l";
                        }
                        yield "\"></span>
      ";
                    }
                    // line 55
                    yield "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["logo"]);
                    foreach ($context['_seq'] as $context["breakpoint"] => $context["img"]) {
                        // line 56
                        yield "        ";
                        yield from $this->load("civictheme:image", 56)->unwrap()->yield(CoreExtension::toArray(["theme" =>                         // line 57
($context["theme"] ?? null), "url" => CoreExtension::getAttribute($this->env, $this->source,                         // line 58
$context["img"], "url", [], "any", false, false, true, 58), "alt" => CoreExtension::getAttribute($this->env, $this->source,                         // line 59
$context["img"], "alt", [], "any", false, false, true, 59), "modifier_class" => ((("ct-logo__image ct-logo__image--" .                         // line 60
$context["breakpoint"]) . " ") . ((($context["breakpoint"] == "mobile")) ? (((((($context["type"] ?? null) == "inline") && ($context["logo_type"] == "secondary"))) ? ("hide-xxs") : ("hide-l"))) : ("hide-xxs show-l")))]));
                        // line 62
                        yield "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['breakpoint'], $context['img'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    yield "    ";
                }
                // line 64
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['logo_type'], $context['logo'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "
  ";
            // line 66
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 67
                yield "    </a>
  ";
            } else {
                // line 69
                yield "    </div>
  ";
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "logos", "url", "title", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:logo";
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
        return array (  148 => 69,  144 => 67,  142 => 66,  139 => 65,  133 => 64,  130 => 63,  124 => 62,  122 => 60,  121 => 59,  120 => 58,  119 => 57,  117 => 56,  112 => 55,  104 => 53,  101 => 52,  98 => 51,  94 => 50,  91 => 49,  81 => 47,  67 => 45,  64 => 44,  62 => 43,  59 => 42,  57 => 41,  55 => 40,  53 => 39,  51 => 38,  48 => 37,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:logo", "themes/contrib/civictheme/components/02-molecules/logo/logo.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 38, "if" => 43, "for" => 50, "include" => 56];
        static $filters = ["format" => 39, "default" => 39, "escape" => 45, "raw" => 45];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'include'],
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
