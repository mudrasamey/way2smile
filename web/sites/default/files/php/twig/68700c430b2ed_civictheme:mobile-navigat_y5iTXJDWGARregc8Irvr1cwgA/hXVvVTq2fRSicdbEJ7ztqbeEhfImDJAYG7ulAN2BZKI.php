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

/* civictheme:mobile-navigation */
class __TwigTemplate_2e48ef57acbc2ff1ff6b936eb320b5da extends Template
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
            'content_top_block' => [$this, 'block_content_top_block'],
            'top_menu_block' => [$this, 'block_top_menu_block'],
            'bottom_menu_block' => [$this, 'block_bottom_menu_block'],
            'content_bottom_block' => [$this, 'block_content_bottom_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--mobile-navigation"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:mobile-navigation"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:mobile-navigation"));
        // line 36
        yield "
";
        // line 37
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 38
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s", ($context["theme_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 39
        yield "
<div class=\"ct-mobile-navigation ";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
        yield "\" data-flyout data-flyout-direction=\"right\" data-flyout-focus=\".ct-link\" ";
        if ((($tmp = ($context["attributes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
        }
        yield ">
  <div data-flyout-panel class=\"ct-mobile-navigation__panel\">
    ";
        // line 42
        yield from $this->load("civictheme:mobile-navigation-close", 42)->unwrap()->yield(CoreExtension::toArray(["theme" =>         // line 43
($context["theme"] ?? null)]));
        // line 45
        yield "
    ";
        // line 46
        yield from $this->unwrap()->yieldBlock('content_top_block', $context, $blocks);
        // line 53
        yield "
    ";
        // line 54
        yield from $this->unwrap()->yieldBlock('top_menu_block', $context, $blocks);
        // line 65
        yield "
    ";
        // line 66
        yield from $this->unwrap()->yieldBlock('bottom_menu_block', $context, $blocks);
        // line 77
        yield "
    ";
        // line 78
        yield from $this->unwrap()->yieldBlock('content_bottom_block', $context, $blocks);
        // line 85
        yield "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "attributes", "content_top", "top_menu", "bottom_menu", "content_bottom"]);        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "      ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_top"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "        <div class=\"ct-mobile-navigation__content_top\">
          ";
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_top"] ?? null));
            yield "
        </div>
      ";
        }
        // line 52
        yield "    ";
        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_top_menu_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 55
        yield "      ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["top_menu"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "        <div class=\"ct-mobile-navigation__top-menu-wrapper\">
          ";
            // line 57
            yield from $this->load("civictheme:mobile-navigation-menu", 57)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 58
($context["theme"] ?? null), "items" =>             // line 59
($context["top_menu"] ?? null), "modifier_class" => "ct-mobile-navigation__top-menu"]));
            // line 62
            yield "        </div>
      ";
        }
        // line 64
        yield "    ";
        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bottom_menu_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 67
        yield "      ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["bottom_menu"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "        <div class=\"ct-mobile-navigation__bottom-menu-wrapper\">
          ";
            // line 69
            yield from $this->load("civictheme:mobile-navigation-menu", 69)->unwrap()->yield(CoreExtension::toArray(["theme" =>             // line 70
($context["theme"] ?? null), "items" =>             // line 71
($context["bottom_menu"] ?? null), "modifier_class" => "ct-mobile-navigation__bottom-menu"]));
            // line 74
            yield "        </div>
      ";
        }
        // line 76
        yield "    ";
        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_bottom_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 79
        yield "      ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_bottom"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "        <div class=\"ct-mobile-navigation__content_bottom\">
          ";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_bottom"] ?? null));
            yield "
        </div>
      ";
        }
        // line 84
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:mobile-navigation";
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
        return array (  197 => 84,  191 => 81,  188 => 80,  185 => 79,  178 => 78,  173 => 76,  169 => 74,  167 => 71,  166 => 70,  165 => 69,  162 => 68,  159 => 67,  152 => 66,  147 => 64,  143 => 62,  141 => 59,  140 => 58,  139 => 57,  136 => 56,  133 => 55,  126 => 54,  121 => 52,  115 => 49,  112 => 48,  109 => 47,  102 => 46,  94 => 85,  92 => 78,  89 => 77,  87 => 66,  84 => 65,  82 => 54,  79 => 53,  77 => 46,  74 => 45,  72 => 43,  71 => 42,  62 => 40,  59 => 39,  57 => 38,  55 => 37,  52 => 36,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:mobile-navigation", "themes/contrib/civictheme/components/03-organisms/mobile-navigation/mobile-navigation.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 37, "if" => 40, "include" => 42, "block" => 46];
        static $filters = ["format" => 37, "default" => 37, "escape" => 40, "raw" => 40];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'block'],
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
