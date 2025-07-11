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

/* civictheme:layout */
class __TwigTemplate_e4f6ff4198891ca60a7bf7c8e1597a2b extends Template
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
            'content_block' => [$this, 'block_content_block'],
            'sidebar_top_left_block' => [$this, 'block_sidebar_top_left_block'],
            'sidebar_top_right_block' => [$this, 'block_sidebar_top_right_block'],
            'sidebar_bottom_left_block' => [$this, 'block_sidebar_bottom_left_block'],
            'sidebar_bottom_right_block' => [$this, 'block_sidebar_bottom_right_block'],
            'content_bottom_block' => [$this, 'block_content_bottom_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--layout"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:layout"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:layout"));
        // line 38
        yield "
";
        // line 39
        $context["has_sidebar_left"] = (( !Twig\Extension\CoreExtension::testEmpty(($context["sidebar_top_left"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["sidebar_bottom_left"] ?? null))) &&  !((array_key_exists("hide_sidebar_left", $context)) ? (($context["hide_sidebar_left"] ?? null)) : (false)));
        // line 40
        $context["has_sidebar_right"] = (( !Twig\Extension\CoreExtension::testEmpty(($context["sidebar_top_right"] ?? null)) ||  !Twig\Extension\CoreExtension::testEmpty(($context["sidebar_bottom_right"] ?? null))) &&  !((array_key_exists("hide_sidebar_right", $context)) ? (($context["hide_sidebar_right"] ?? null)) : (false)));
        // line 41
        yield "
";
        // line 42
        $context["is_contained"] = ((array_key_exists("is_contained", $context)) ? (($context["is_contained"] ?? null)) : (false));
        // line 43
        $context["is_contained"] = ((($context["is_contained"] ?? null) || ($context["has_sidebar_left"] ?? null)) || ($context["has_sidebar_right"] ?? null));
        // line 44
        yield "
";
        // line 45
        $context["vertical_spacing"] = (((($context["has_sidebar_left"] ?? null) || ($context["has_sidebar_right"] ?? null))) ? ("top") : (($context["vertical_spacing"] ?? null)));
        // line 46
        yield "
";
        // line 47
        $context["no_sidebar_left_class"] = (((($tmp = ($context["hide_sidebar_left"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-layout--no-sidebar-left") : (""));
        // line 48
        $context["no_sidebar_right_class"] = (((($tmp = ($context["hide_sidebar_right"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-layout--no-sidebar-right") : (""));
        // line 49
        $context["no_tl_class"] = (((Twig\Extension\CoreExtension::testEmpty(($context["sidebar_top_left"] ?? null)) || ($context["hide_sidebar_left"] ?? null))) ? ("ct-layout--no-top-left") : (""));
        // line 50
        $context["no_tr_class"] = (((Twig\Extension\CoreExtension::testEmpty(($context["sidebar_top_right"] ?? null)) || ($context["hide_sidebar_right"] ?? null))) ? ("ct-layout--no-top-right") : (""));
        // line 51
        $context["no_bl_class"] = (((Twig\Extension\CoreExtension::testEmpty(($context["sidebar_bottom_left"] ?? null)) || ($context["hide_sidebar_left"] ?? null))) ? ("ct-layout--no-bottom-left") : (""));
        // line 52
        $context["no_br_class"] = (((Twig\Extension\CoreExtension::testEmpty(($context["sidebar_bottom_right"] ?? null)) || ($context["hide_sidebar_right"] ?? null))) ? ("ct-layout--no-bottom-right") : (""));
        // line 53
        $context["is_contained_class"] = (((($tmp = ($context["is_contained"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("container") : ("container-fluid"));
        // line 54
        $context["vertical_spacing_class"] = ((CoreExtension::inFilter(($context["vertical_spacing"] ?? null), ["top", "bottom", "both"])) ? (Twig\Extension\CoreExtension::sprintf("ct-vertical-spacing--%s", ($context["vertical_spacing"] ?? null))) : (""));
        // line 55
        yield "
";
        // line 56
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s %s %s %s %s %s", ($context["no_sidebar_left_class"] ?? null), ($context["no_sidebar_right_class"] ?? null), ($context["no_tl_class"] ?? null), ($context["no_tr_class"] ?? null), ($context["no_bl_class"] ?? null), ($context["no_br_class"] ?? null), ($context["vertical_spacing_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 57
        $context["modifier_class"] = Twig\Extension\CoreExtension::trim(($context["modifier_class"] ?? null));
        // line 58
        yield "
";
        // line 59
        if ((($tmp = ($context["content"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "  <main class=\"ct-layout ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\" role=\"main\" ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            yield ">
    ";
            // line 61
            yield from $this->unwrap()->yieldBlock('content_top_block', $context, $blocks);
            // line 66
            yield "
    <div class=\"ct-layout__inner ";
            // line 67
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["is_contained_class"] ?? null), "html", null, true);
            yield "\">
      ";
            // line 68
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 69
                yield "        ";
                yield from $this->unwrap()->yieldBlock('content_block', $context, $blocks);
                // line 74
                yield "      ";
            }
            // line 75
            yield "
      ";
            // line 76
            if (( !Twig\Extension\CoreExtension::testEmpty(($context["sidebar_top_left"] ?? null)) && ($context["has_sidebar_left"] ?? null))) {
                // line 77
                yield "        ";
                yield from $this->unwrap()->yieldBlock('sidebar_top_left_block', $context, $blocks);
                // line 82
                yield "      ";
            }
            // line 83
            yield "
      ";
            // line 84
            if (( !Twig\Extension\CoreExtension::testEmpty(($context["sidebar_top_right"] ?? null)) && ($context["has_sidebar_right"] ?? null))) {
                // line 85
                yield "        ";
                yield from $this->unwrap()->yieldBlock('sidebar_top_right_block', $context, $blocks);
                // line 90
                yield "      ";
            }
            // line 91
            yield "
      ";
            // line 92
            if (( !Twig\Extension\CoreExtension::testEmpty(($context["sidebar_bottom_left"] ?? null)) && ($context["has_sidebar_left"] ?? null))) {
                // line 93
                yield "        ";
                yield from $this->unwrap()->yieldBlock('sidebar_bottom_left_block', $context, $blocks);
                // line 98
                yield "      ";
            }
            // line 99
            yield "
      ";
            // line 100
            if (( !Twig\Extension\CoreExtension::testEmpty(($context["sidebar_bottom_right"] ?? null)) && ($context["has_sidebar_right"] ?? null))) {
                // line 101
                yield "        ";
                yield from $this->unwrap()->yieldBlock('sidebar_bottom_right_block', $context, $blocks);
                // line 106
                yield "      ";
            }
            // line 107
            yield "    </div>

    ";
            // line 109
            yield from $this->unwrap()->yieldBlock('content_bottom_block', $context, $blocks);
            // line 114
            yield "  </main>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["sidebar_top_left", "sidebar_bottom_left", "hide_sidebar_left", "sidebar_top_right", "sidebar_bottom_right", "hide_sidebar_right", "content", "attributes", "content_top", "content_attributes", "sidebar_top_left_attributes", "sidebar_top_right_attributes", "sidebar_bottom_left_attributes", "sidebar_bottom_right_attributes", "content_bottom"]);        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield "      ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_top"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_top"] ?? null));
        }
        // line 65
        yield "    ";
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        yield "          <section class=\"ct-layout__main\" ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_attributes"] ?? null));
        }
        yield ">";
        // line 71
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content"] ?? null));
        // line 72
        yield "</section>
        ";
        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_top_left_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 78
        yield "          <aside class=\"ct-layout__sidebar_top_left\" ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["sidebar_top_left_attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["sidebar_top_left_attributes"] ?? null));
        }
        yield ">";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["sidebar_top_left"] ?? null));
        // line 80
        yield "</aside>
        ";
        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_top_right_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 86
        yield "          <aside class=\"ct-layout__sidebar_top_right\" ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["sidebar_top_right_attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["sidebar_top_right_attributes"] ?? null));
        }
        yield ">";
        // line 87
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["sidebar_top_right"] ?? null));
        // line 88
        yield "</aside>
        ";
        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_bottom_left_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 94
        yield "          <aside class=\"ct-layout__sidebar_bottom_left\" ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["sidebar_bottom_left_attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["sidebar_bottom_left_attributes"] ?? null));
        }
        yield ">";
        // line 95
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["sidebar_bottom_left"] ?? null));
        // line 96
        yield "</aside>
        ";
        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_bottom_right_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 102
        yield "          <aside class=\"ct-layout__sidebar_bottom_right\" ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["sidebar_bottom_right_attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["sidebar_bottom_right_attributes"] ?? null));
        }
        yield ">";
        // line 103
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["sidebar_bottom_right"] ?? null));
        // line 104
        yield "</aside>
        ";
        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_bottom_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 110
        yield "      ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_bottom"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 111
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_bottom"] ?? null));
        }
        // line 113
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:layout";
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
        return array (  325 => 113,  322 => 111,  319 => 110,  312 => 109,  306 => 104,  304 => 103,  298 => 102,  291 => 101,  285 => 96,  283 => 95,  277 => 94,  270 => 93,  264 => 88,  262 => 87,  256 => 86,  249 => 85,  243 => 80,  241 => 79,  235 => 78,  228 => 77,  222 => 72,  220 => 71,  214 => 70,  207 => 69,  202 => 65,  199 => 63,  196 => 62,  189 => 61,  181 => 114,  179 => 109,  175 => 107,  172 => 106,  169 => 101,  167 => 100,  164 => 99,  161 => 98,  158 => 93,  156 => 92,  153 => 91,  150 => 90,  147 => 85,  145 => 84,  142 => 83,  139 => 82,  136 => 77,  134 => 76,  131 => 75,  128 => 74,  125 => 69,  123 => 68,  119 => 67,  116 => 66,  114 => 61,  105 => 60,  103 => 59,  100 => 58,  98 => 57,  96 => 56,  93 => 55,  91 => 54,  89 => 53,  87 => 52,  85 => 51,  83 => 50,  81 => 49,  79 => 48,  77 => 47,  74 => 46,  72 => 45,  69 => 44,  67 => 43,  65 => 42,  62 => 41,  60 => 40,  58 => 39,  55 => 38,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:layout", "themes/contrib/civictheme/components/00-base/layout/layout.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 39, "if" => 59, "block" => 61];
        static $filters = ["format" => 54, "default" => 56, "trim" => 57, "escape" => 60, "raw" => 60];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['format', 'default', 'trim', 'escape', 'raw'],
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
