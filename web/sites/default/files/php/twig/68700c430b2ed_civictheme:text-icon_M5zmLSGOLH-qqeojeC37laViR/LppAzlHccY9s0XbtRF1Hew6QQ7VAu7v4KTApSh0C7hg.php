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

/* civictheme:text-icon */
class __TwigTemplate_d27e1a01d402bf343db5b088fa48b39f extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--text-icon"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:text-icon"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:text-icon"));
        // line 18
        $context["icon"] = ((((($context["icon"] ?? null) && ($context["is_external"] ?? null)) && ($context["icon_single_only"] ?? null))) ? ("upper-right-arrow") : (($context["icon"] ?? null)));
        // line 20
        $context["icon_placement"] = ((CoreExtension::inFilter(($context["icon_placement"] ?? null), ["before", "after"])) ? (($context["icon_placement"] ?? null)) : ("after"));
        // line 22
        $context["content_markup"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 23
            if ((($context["icon"] ?? null) || ($context["is_external"] ?? null))) {
                // line 25
                if ((($tmp = ($context["icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 26
                    $context["icon_markup"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 27
                        yield from $this->load("civictheme:icon", 27)->unwrap()->yield(CoreExtension::toArray(["symbol" =>                         // line 28
($context["icon"] ?? null), "modifier_class" => ((                        // line 29
array_key_exists("icon_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["icon_class"] ?? null), "")) : (""))]));
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                }
                // line 34
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["text"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 36
                    if (((($context["icon"] ?? null) && (($context["icon_placement"] ?? null) == "before")) &&  !($context["is_external"] ?? null))) {
                        // line 37
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["icon_markup"] ?? null), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["text"] ?? null));
                    } else {
                        // line 40
                        $context["text_arr"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::trim(($context["text"] ?? null)), " ");
                        // line 41
                        $context["text_start"] = Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["text_arr"] ?? null), 0,  -1), " ");
                        // line 42
                        $context["text_end"] = Twig\Extension\CoreExtension::last($this->env->getCharset(), ($context["text_arr"] ?? null));
                        // line 45
                        $context["before_group"] = ($context["text_start"] ?? null);
                        // line 46
                        $context["within_group"] = ($context["text_end"] ?? null);
                        // line 49
                        if ((($context["icon_placement"] ?? null) == "before")) {
                            // line 50
                            $context["before_group"] = (($context["icon_markup"] ?? null) . ($context["before_group"] ?? null));
                        } else {
                            // line 52
                            $context["within_group"] = ((($context["within_group"] ?? null) . " ") . ($context["icon_markup"] ?? null));
                        }
                        // line 56
                        if ((($context["is_external"] ?? null) &&  !($context["icon_single_only"] ?? null))) {
                            // line 57
                            $context["is_external_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                                // line 58
                                yield from $this->load("civictheme:icon", 58)->unwrap()->yield(CoreExtension::toArray(["symbol" => "upper-right-arrow"]));
                                yield from [];
                            })())) ? '' : new Markup($tmp, $this->env->getCharset());
                            // line 62
                            $context["within_group"] = ((($context["within_group"] ?? null) . " ") . ($context["is_external_content"] ?? null));
                        }
                        // line 66
                        if ((($tmp = ($context["icon_group_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 67
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["before_group"] ?? null));
                            yield " ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["within_group"] ?? null));
                        } else {
                            // line 69
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["before_group"] ?? null));
                            yield " <span class=\"ct-text-icon__group\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["within_group"] ?? null));
                            yield "</span>";
                        }
                    }
                } else {
                    // line 74
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["icon_markup"] ?? null), "html", null, true);
                }
            } else {
                // line 78
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["text"] ?? null));
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        if ((($tmp = ($context["is_new_window"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            $context["is_new_window_content"] = new Markup("<span class=\"ct-visually-hidden\">(Opens in a new tab/window)</span>", $this->env->getCharset());
        }
        // line 88
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_markup"] ?? null), "html", null, true);
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["is_new_window_content"] ?? null), "html", null, true);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_external", "icon_single_only", "icon_class", "text", "icon_group_disabled", "is_new_window"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:text-icon";
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
        return array (  133 => 88,  130 => 83,  128 => 82,  123 => 78,  119 => 74,  111 => 69,  106 => 67,  104 => 66,  101 => 62,  97 => 58,  95 => 57,  93 => 56,  90 => 52,  87 => 50,  85 => 49,  83 => 46,  81 => 45,  79 => 42,  77 => 41,  75 => 40,  71 => 37,  69 => 36,  67 => 34,  62 => 29,  61 => 28,  60 => 27,  58 => 26,  56 => 25,  54 => 23,  52 => 22,  50 => 20,  48 => 18,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:text-icon", "themes/contrib/civictheme/components/00-base/text-icon/text-icon.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 18, "if" => 23, "include" => 27];
        static $filters = ["default" => 29, "escape" => 37, "raw" => 37, "split" => 40, "trim" => 40, "join" => 41, "slice" => 41, "last" => 42];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['default', 'escape', 'raw', 'split', 'trim', 'join', 'slice', 'last'],
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
