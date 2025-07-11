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

/* themes/contrib/civictheme/templates/layout/layout--three-columns.html.twig */
class __TwigTemplate_18beb624b49c330903b182573a6238df extends Template
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
        // line 27
        yield "
";
        // line 28
        $context["has_sidebar_left"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_top_left", [], "any", false, false, true, 28)) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_bottom_left", [], "any", false, false, true, 28))) &&  !((array_key_exists("hide_sidebar_left", $context)) ? (Twig\Extension\CoreExtension::default(($context["hide_sidebar_left"] ?? null), false)) : (false)));
        // line 29
        $context["has_sidebar_right"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_top_right", [], "any", false, false, true, 29)) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_bottom_right", [], "any", false, false, true, 29))) &&  !((array_key_exists("hide_sidebar_right", $context)) ? (Twig\Extension\CoreExtension::default(($context["hide_sidebar_right"] ?? null), false)) : (false)));
        // line 30
        yield "
";
        // line 31
        $context["is_contained"] = ((($context["is_contained"] ?? null) || ($context["has_sidebar_left"] ?? null)) || ($context["has_sidebar_right"] ?? null));
        // line 32
        yield "
";
        // line 33
        $context["vertical_spacing"] = (((($context["vertical_spacing"] ?? null) != "auto")) ? (($context["vertical_spacing"] ?? null)) : ((((($context["has_sidebar_left"] ?? null) || ($context["has_sidebar_right"] ?? null))) ? ("top") : (""))));
        // line 34
        yield "
";
        // line 35
        $context["no_sidebar_left_class"] = (((($tmp = ($context["hide_sidebar_left"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-layout--no-sidebar-left") : (""));
        // line 36
        $context["no_sidebar_right_class"] = (((($tmp = ($context["hide_sidebar_right"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-layout--no-sidebar-right") : (""));
        // line 37
        $context["no_tl_class"] = (((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_top_left", [], "any", false, false, true, 37)) || ($context["hide_sidebar_left"] ?? null))) ? ("ct-layout--no-top-left") : (""));
        // line 38
        $context["no_tr_class"] = (((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_top_right", [], "any", false, false, true, 38)) || ($context["hide_sidebar_right"] ?? null))) ? ("ct-layout--no-top-right") : (""));
        // line 39
        $context["no_bl_class"] = (((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_bottom_left", [], "any", false, false, true, 39)) || ($context["hide_sidebar_left"] ?? null))) ? ("ct-layout--no-bottom-left") : (""));
        // line 40
        $context["no_br_class"] = (((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_bottom_right", [], "any", false, false, true, 40)) || ($context["hide_sidebar_right"] ?? null))) ? ("ct-layout--no-bottom-right") : (""));
        // line 41
        $context["is_contained_class"] = (((($tmp = ($context["is_contained"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("container") : ("container-fluid"));
        // line 42
        $context["vertical_spacing_class"] = ((CoreExtension::inFilter(($context["vertical_spacing"] ?? null), ["top", "bottom", "both"])) ? (Twig\Extension\CoreExtension::sprintf("ct-vertical-spacing--%s", ($context["vertical_spacing"] ?? null))) : (""));
        // line 43
        yield "
";
        // line 44
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s %s %s %s %s %s", ($context["no_sidebar_left_class"] ?? null), ($context["no_sidebar_right_class"] ?? null), ($context["no_tl_class"] ?? null), ($context["no_tr_class"] ?? null), ($context["no_bl_class"] ?? null), ($context["no_br_class"] ?? null), ($context["vertical_spacing_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 45
        $context["modifier_class"] = Twig\Extension\CoreExtension::trim(($context["modifier_class"] ?? null));
        // line 46
        yield "
";
        // line 47
        if ((($tmp = ($context["content"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "  <main class=\"ct-layout ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\" role=\"main\" data-layout-builder-layout=\"true\" ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            yield ">
    ";
            // line 49
            yield from $this->unwrap()->yieldBlock('content_top_block', $context, $blocks);
            // line 54
            yield "
    <div class=\"ct-layout__inner ";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["is_contained_class"] ?? null), "html", null, true);
            yield "\">
      ";
            // line 56
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "main", [], "any", false, false, true, 56))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 57
                yield "        ";
                yield from $this->unwrap()->yieldBlock('content_block', $context, $blocks);
                // line 62
                yield "      ";
            }
            // line 63
            yield "
      ";
            // line 64
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_top_left", [], "any", false, false, true, 64)) && ($context["has_sidebar_left"] ?? null))) {
                // line 65
                yield "        ";
                yield from $this->unwrap()->yieldBlock('sidebar_top_left_block', $context, $blocks);
                // line 70
                yield "      ";
            }
            // line 71
            yield "
      ";
            // line 72
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_top_right", [], "any", false, false, true, 72)) && ($context["has_sidebar_right"] ?? null))) {
                // line 73
                yield "        ";
                yield from $this->unwrap()->yieldBlock('sidebar_top_right_block', $context, $blocks);
                // line 78
                yield "      ";
            }
            // line 79
            yield "
      ";
            // line 80
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_bottom_left", [], "any", false, false, true, 80)) && ($context["has_sidebar_left"] ?? null))) {
                // line 81
                yield "        ";
                yield from $this->unwrap()->yieldBlock('sidebar_bottom_left_block', $context, $blocks);
                // line 86
                yield "      ";
            }
            // line 87
            yield "
      ";
            // line 88
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_bottom_right", [], "any", false, false, true, 88)) && ($context["has_sidebar_right"] ?? null))) {
                // line 89
                yield "        ";
                yield from $this->unwrap()->yieldBlock('sidebar_bottom_right_block', $context, $blocks);
                // line 94
                yield "      ";
            }
            // line 95
            yield "    </div>

    ";
            // line 97
            yield from $this->unwrap()->yieldBlock('content_bottom_block', $context, $blocks);
            // line 102
            yield "  </main>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "hide_sidebar_left", "hide_sidebar_right", "attributes", "content_attributes"]);        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 50
        yield "      ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "content_top", [], "any", false, false, true, 50))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "content_top", [], "any", false, false, true, 51));
        }
        // line 53
        yield "    ";
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield "          <section class=\"ct-layout__main\" ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["content_attributes"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["content_attributes"] ?? null));
        }
        yield ">";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "main", [], "any", false, false, true, 59));
        // line 60
        yield "</section>
        ";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_top_left_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "          <aside class=\"ct-layout__sidebar_top_left\" ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_top_left_attributes", [], "any", false, false, true, 66))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_top_left_attributes", [], "any", false, false, true, 66));
        }
        yield ">";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_top_left", [], "any", false, false, true, 67));
        // line 68
        yield "</aside>
        ";
        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_top_right_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 74
        yield "          <aside class=\"ct-layout__sidebar_top_right\" ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_top_right_attributes", [], "any", false, false, true, 74))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_top_right_attributes", [], "any", false, false, true, 74));
        }
        yield ">";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_top_right", [], "any", false, false, true, 75));
        // line 76
        yield "</aside>
        ";
        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_bottom_left_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 82
        yield "          <aside class=\"ct-layout__sidebar_bottom_left\" ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_bottom_left_attributes", [], "any", false, false, true, 82))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_bottom_left_attributes", [], "any", false, false, true, 82));
        }
        yield ">";
        // line 83
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_bottom_left", [], "any", false, false, true, 83));
        // line 84
        yield "</aside>
        ";
        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_bottom_right_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 90
        yield "          <aside class=\"ct-layout__sidebar_bottom_right\" ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_bottom_right_attributes", [], "any", false, false, true, 90))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_bottom_right_attributes", [], "any", false, false, true, 90));
        }
        yield ">";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "sidebar_bottom_right", [], "any", false, false, true, 91));
        // line 92
        yield "</aside>
        ";
        yield from [];
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_bottom_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 98
        yield "      ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "content_bottom", [], "any", false, false, true, 98))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "content_bottom", [], "any", false, false, true, 99));
        }
        // line 101
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/civictheme/templates/layout/layout--three-columns.html.twig";
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
        return array (  319 => 101,  316 => 99,  313 => 98,  306 => 97,  300 => 92,  298 => 91,  292 => 90,  285 => 89,  279 => 84,  277 => 83,  271 => 82,  264 => 81,  258 => 76,  256 => 75,  250 => 74,  243 => 73,  237 => 68,  235 => 67,  229 => 66,  222 => 65,  216 => 60,  214 => 59,  208 => 58,  201 => 57,  196 => 53,  193 => 51,  190 => 50,  183 => 49,  175 => 102,  173 => 97,  169 => 95,  166 => 94,  163 => 89,  161 => 88,  158 => 87,  155 => 86,  152 => 81,  150 => 80,  147 => 79,  144 => 78,  141 => 73,  139 => 72,  136 => 71,  133 => 70,  130 => 65,  128 => 64,  125 => 63,  122 => 62,  119 => 57,  117 => 56,  113 => 55,  110 => 54,  108 => 49,  99 => 48,  97 => 47,  94 => 46,  92 => 45,  90 => 44,  87 => 43,  85 => 42,  83 => 41,  81 => 40,  79 => 39,  77 => 38,  75 => 37,  73 => 36,  71 => 35,  68 => 34,  66 => 33,  63 => 32,  61 => 31,  58 => 30,  56 => 29,  54 => 28,  51 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/civictheme/templates/layout/layout--three-columns.html.twig", "/app/web/themes/contrib/civictheme/templates/layout/layout--three-columns.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 28, "if" => 47, "block" => 49];
        static $filters = ["default" => 28, "format" => 42, "trim" => 45, "escape" => 48, "raw" => 48];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['default', 'format', 'trim', 'escape', 'raw'],
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
