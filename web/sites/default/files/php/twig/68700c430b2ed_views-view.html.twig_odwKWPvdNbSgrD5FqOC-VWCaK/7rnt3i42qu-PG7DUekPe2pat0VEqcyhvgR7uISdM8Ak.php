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

/* themes/contrib/civictheme/templates/views/views-view.html.twig */
class __TwigTemplate_4cf755387de64f16ef21c722d65f2fba extends Template
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

        $this->blocks = [
            'footer_block' => [$this, 'block_footer_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 7
        return "civictheme:list";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("civictheme:list", 7);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attachment_after", "more", "footer", "feed_icons"]);    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "  ";
        if ((array_key_exists("attachment_after", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["attachment_after"] ?? null)))) {
            // line 12
            yield "    <div class=\"ct-list__attachment-after\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xxs-12\">
            ";
            // line 16
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true);
            yield "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 22
        yield "
  ";
        // line 23
        if ((array_key_exists("more", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["more"] ?? null)))) {
            // line 24
            yield "    <div class=\"ct-list__more\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xxs-12\">
            ";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true);
            yield "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 34
        yield "
  ";
        // line 35
        if ((($tmp = ($context["footer"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "    <footer class=\"ct-list__footer\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xxs-12\">
            ";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true);
            yield "
          </div>
        </div>
      </div>
    </footer>
  ";
        }
        // line 46
        yield "
  ";
        // line 47
        if ((array_key_exists("feed_icons", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["feed_icons"] ?? null)))) {
            // line 48
            yield "    <div class=\"ct-list__feed-icons\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xxs-12\">
            ";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true);
            yield "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/civictheme/templates/views/views-view.html.twig";
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
        return array (  130 => 52,  124 => 48,  122 => 47,  119 => 46,  110 => 40,  104 => 36,  102 => 35,  99 => 34,  90 => 28,  84 => 24,  82 => 23,  79 => 22,  70 => 16,  64 => 12,  61 => 11,  54 => 10,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/civictheme/templates/views/views-view.html.twig", "/app/web/themes/contrib/civictheme/templates/views/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 7, "if" => 11];
        static $filters = ["escape" => 16];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'if'],
                ['escape'],
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
