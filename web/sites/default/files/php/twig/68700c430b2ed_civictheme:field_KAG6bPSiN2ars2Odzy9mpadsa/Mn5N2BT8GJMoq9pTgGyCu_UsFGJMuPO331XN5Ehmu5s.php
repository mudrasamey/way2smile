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

/* civictheme:field */
class __TwigTemplate_970152ccf27d2a9c20a800b93c1c8413 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.civictheme--field"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "civictheme:field"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "civictheme:field"));
        // line 39
        yield "
";
        // line 40
        $context["type"] = ((array_key_exists("type", $context)) ? (($context["type"] ?? null)) : ("hidden"));
        // line 41
        $context["title_display"] = (((array_key_exists("title_display", $context) && CoreExtension::inFilter(($context["title_display"] ?? null), ["visible", "invisible", "hidden"]))) ? (($context["title_display"] ?? null)) : ("visible"));
        // line 42
        $context["is_invalid"] = ((array_key_exists("is_invalid", $context)) ? (($context["is_invalid"] ?? null)) : (false));
        // line 43
        $context["is_disabled"] = ((array_key_exists("is_disabled", $context)) ? (($context["is_disabled"] ?? null)) : (false));
        // line 44
        $context["is_required"] = ((array_key_exists("is_required", $context)) ? (($context["is_required"] ?? null)) : (false));
        // line 45
        $context["orientation"] = ((CoreExtension::inFilter(($context["orientation"] ?? null), ["vertical", "horizontal"])) ? (($context["orientation"] ?? null)) : ("vertical"));
        // line 46
        $context["theme_class"] = Twig\Extension\CoreExtension::sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default(($context["theme"] ?? null), "light")) : ("light")));
        // line 47
        $context["type_class"] = Twig\Extension\CoreExtension::sprintf("ct-field--%s", ($context["type"] ?? null));
        // line 48
        $context["is_required_class"] = (((($tmp = ($context["is_required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-field--required") : (""));
        // line 49
        $context["is_disabled_class"] = (((($tmp = ($context["is_disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-field--disabled") : (""));
        // line 50
        $context["is_invalid_class"] = (((($tmp = ($context["is_invalid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ct-field--invalid") : (""));
        // line 51
        $context["orientation_class"] = Twig\Extension\CoreExtension::sprintf("ct-field--%s", ($context["orientation"] ?? null));
        // line 52
        $context["modifier_class"] = Twig\Extension\CoreExtension::sprintf("%s %s %s %s %s %s %s", ($context["theme_class"] ?? null), ($context["type_class"] ?? null), ($context["orientation_class"] ?? null), ($context["is_required_class"] ?? null), ($context["is_disabled_class"] ?? null), ($context["is_invalid_class"] ?? null), ((array_key_exists("modifier_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["modifier_class"] ?? null), "")) : ("")));
        // line 53
        yield "
";
        // line 55
        if (( !array_key_exists("control", $context) ||  !is_iterable(($context["control"] ?? null)))) {
            // line 56
            yield "  ";
            $context["control"] = [["name" => ($context["name"] ?? null)]];
        } else {
            // line 58
            yield "  ";
            $context["first_key"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys(($context["control"] ?? null)));
            // line 59
            yield "  ";
            $context["control"] = ((( !Twig\Extension\CoreExtension::testEmpty(($context["first_key"] ?? null)) && CoreExtension::matches("/^[0-9]+\$/", ($context["first_key"] ?? null)))) ? (($context["control"] ?? null)) : ([($context["control"] ?? null)]));
        }
        // line 61
        yield "
";
        // line 62
        $context["_controls"] = [];
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["control"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 64
            yield "  ";
            $context["default_options"] = [];
            // line 65
            yield "  ";
            if (array_key_exists("options", $context)) {
                // line 66
                yield "    ";
                $context["default_options"] = ($context["options"] ?? null);
                // line 67
                yield "  ";
            }
            // line 68
            yield "
  ";
            // line 69
            $context["default_is_multiple"] = false;
            // line 70
            yield "  ";
            if (array_key_exists("is_multiple", $context)) {
                // line 71
                yield "    ";
                $context["default_is_multiple"] = ($context["is_multiple"] ?? null);
                // line 72
                yield "  ";
            }
            // line 73
            yield "
  ";
            // line 74
            $context["c"] = ["theme" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 75
$context["c"], "theme", [], "any", true, true, true, 75)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "theme", [], "any", false, false, true, 75)) : (($context["theme"] ?? null))), "label" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 76
$context["c"], "label", [], "any", true, true, true, 76)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "label", [], "any", false, false, true, 76)) : (($context["title"] ?? null))), "name" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 77
$context["c"], "name", [], "any", true, true, true, 77)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, true, 77)) : (($context["name"] ?? null))), "value" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 78
$context["c"], "value", [], "any", true, true, true, 78)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "value", [], "any", false, false, true, 78)) : (($context["value"] ?? null))), "id" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 79
$context["c"], "id", [], "any", true, true, true, 79)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, true, 79)) : (($context["id"] ?? null))), "options" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 80
$context["c"], "options", [], "any", true, true, true, 80)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "options", [], "any", false, false, true, 80)) : (($context["default_options"] ?? null))), "is_multiple" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 81
$context["c"], "is_multiple", [], "any", true, true, true, 81)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "is_multiple", [], "any", false, false, true, 81)) : (($context["default_is_multiple"] ?? null))), "placeholder" => ((            // line 82
array_key_exists("placeholder", $context)) ? (($context["placeholder"] ?? null)) : ("")), "is_required" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 83
$context["c"], "is_required", [], "any", true, true, true, 83)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "is_required", [], "any", false, false, true, 83)) : (($context["is_required"] ?? null))), "required_text" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 84
$context["c"], "required_text", [], "any", false, false, true, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "required_text", [], "any", false, false, true, 84)) : (($context["required_text"] ?? null))), "is_invalid" =>             // line 85
($context["is_invalid"] ?? null), "is_disabled" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 86
$context["c"], "is_disabled", [], "any", true, true, true, 86)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "is_disabled", [], "any", false, false, true, 86)) : (($context["is_disabled"] ?? null))), "is_checked" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 87
$context["c"], "is_checked", [], "any", true, true, true, 87)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "is_checked", [], "any", false, false, true, 87)) : (false)), "attributes" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 88
$context["c"], "attributes", [], "any", true, true, true, 88)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "attributes", [], "any", false, false, true, 88)) : ("")), "modifier_class" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 89
$context["c"], "modifier_class", [], "any", true, true, true, 89)) ? (("ct-field__control " . CoreExtension::getAttribute($this->env, $this->source, $context["c"], "modifier_class", [], "any", false, false, true, 89))) : ("ct-field__control"))];
            // line 91
            yield "  ";
            $context["_controls"] = Twig\Extension\CoreExtension::merge(($context["_controls"] ?? null), [$context["c"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        $context["control"] = ($context["_controls"] ?? null);
        // line 94
        yield "
";
        // line 95
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["control"] ?? null), 0, [], "array", false, true, true, 95), "name", [], "any", true, true, true, 95)) {
            // line 96
            yield "  <div class=\"ct-field ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["modifier_class"] ?? null), "html", null, true);
            yield "\" ";
            if ((($tmp = ($context["attributes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["attributes"] ?? null));
            }
            yield ">
    ";
            // line 97
            if ((( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null)) && (($context["title_display"] ?? null) != "hidden")) && (($context["type"] ?? null) != "hidden"))) {
                // line 98
                yield "      ";
                yield from $this->load("civictheme:label", 98)->unwrap()->yield(CoreExtension::toArray(["theme" =>                 // line 99
($context["theme"] ?? null), "content" => (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(                // line 100
($context["label"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["label"] ?? null)) : (($context["title"] ?? null))), "is_required" =>                 // line 101
($context["is_required"] ?? null), "required_text" =>                 // line 102
($context["required_text"] ?? null), "for" => (((CoreExtension::getAttribute($this->env, $this->source, (($_v0 =                 // line 103
($context["control"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["control"] ?? null), 0, [], "array", false, false, true, 103)), "id", [], "any", false, false, true, 103) && !CoreExtension::inFilter(($context["type"] ?? null), ["radio", "checkbox"]))) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["control"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["control"] ?? null), 0, [], "array", false, false, true, 103)), "id", [], "any", false, false, true, 103)) : (null)), "modifier_class" => ("ct-field__title" . (((                // line 104
($context["title_display"] ?? null) == "invisible")) ? (" ct-visually-hidden") : ("")))]));
                // line 106
                yield "    ";
            }
            // line 107
            yield "
    <div class=\"ct-field__wrapper\">
      ";
            // line 109
            if ((($context["description"] ?? null) && (($context["type"] ?? null) != "hidden"))) {
                // line 110
                yield "        ";
                $context["error_message"] = "Field has an error";
                // line 111
                yield "        ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 112
                    yield "          ";
                    $context["error_message"] = (("Field <em>" . ($context["label"] ?? null)) . "</em> has an error");
                    // line 113
                    yield "        ";
                }
                // line 114
                yield "
        ";
                // line 115
                $context["description_content"] = ($context["description"] ?? null);
                // line 116
                yield "        ";
                if (( !($context["description"] ?? null) && ($context["is_invalid"] ?? null))) {
                    // line 117
                    yield "          ";
                    $context["description_content"] = ($context["error_message"] ?? null);
                    // line 118
                    yield "        ";
                }
                // line 119
                yield "
        ";
                // line 120
                yield from $this->load("civictheme:field-description", 120)->unwrap()->yield(CoreExtension::toArray(["theme" =>                 // line 121
($context["theme"] ?? null), "content" =>                 // line 122
($context["description_content"] ?? null), "allow_html" => true, "modifier_class" => "ct-field__description"]));
                // line 126
                yield "      ";
            }
            // line 127
            yield "
      ";
            // line 128
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 129
                yield "        <div class=\"ct-field__prefix\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["prefix"] ?? null));
                yield "</div>
      ";
            }
            // line 131
            yield "
      ";
            // line 132
            if ((($context["type"] ?? null) == "textfield")) {
                // line 133
                yield "        ";
                yield from $this->load("civictheme:textfield", 133)->unwrap()->yield(CoreExtension::toArray((($_v2 = ($context["control"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["control"] ?? null), 0, [], "array", false, false, true, 133))));
                // line 134
                yield "
      ";
            } elseif ((            // line 135
($context["type"] ?? null) == "textarea")) {
                // line 136
                yield "        ";
                yield from $this->load("civictheme:textarea", 136)->unwrap()->yield(CoreExtension::toArray((($_v3 = ($context["control"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["control"] ?? null), 0, [], "array", false, false, true, 136))));
                // line 137
                yield "
      ";
            } elseif ((            // line 138
($context["type"] ?? null) == "select")) {
                // line 139
                yield "        ";
                yield from $this->load("civictheme:select", 139)->unwrap()->yield(CoreExtension::toArray((($_v4 = ($context["control"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["control"] ?? null), 0, [], "array", false, false, true, 139))));
                // line 140
                yield "
      ";
            } elseif (((            // line 141
($context["type"] ?? null) == "checkbox") || (($context["type"] ?? null) == "radio"))) {
                // line 142
                yield "
        ";
                // line 143
                $context["list_items"] = [];
                // line 144
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["control"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 145
                    yield "          ";
                    $context["list_item"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 146
                        yield "            ";
                        if ((($context["type"] ?? null) == "checkbox")) {
                            // line 147
                            yield "              ";
                            yield from $this->load("civictheme:checkbox", 147)->unwrap()->yield(CoreExtension::toArray($context["item"]));
                            // line 148
                            yield "            ";
                        } else {
                            // line 149
                            yield "              ";
                            yield from $this->load("civictheme:radio", 149)->unwrap()->yield(CoreExtension::toArray($context["item"]));
                            // line 150
                            yield "            ";
                        }
                        // line 151
                        yield "          ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 152
                    yield "          ";
                    $context["list_items"] = Twig\Extension\CoreExtension::merge(($context["list_items"] ?? null), [($context["list_item"] ?? null)]);
                    // line 153
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                yield "        ";
                yield from $this->load("civictheme:item-list", 154)->unwrap()->yield(CoreExtension::toArray(["direction" => (((($tmp =                 // line 155
($context["is_inline"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("horizontal") : ("vertical")), "items" =>                 // line 156
($context["list_items"] ?? null)]));
                // line 158
                yield "
      ";
            } else {
                // line 160
                yield "        ";
                $context["control0"] = (($_v5 = ($context["control"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["control"] ?? null), 0, [], "array", false, false, true, 160));
                // line 161
                yield "        ";
                $context["control0"] = Twig\Extension\CoreExtension::merge(($context["control0"] ?? null), ["type" => ($context["type"] ?? null)]);
                // line 162
                yield "        ";
                yield from $this->load("civictheme:input", 162)->unwrap()->yield(CoreExtension::toArray(($context["control0"] ?? null)));
                // line 163
                yield "      ";
            }
            // line 164
            yield "
      ";
            // line 165
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 166
                yield "        <div class=\"ct-field__suffix\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["suffix"] ?? null));
                yield "</div>
      ";
            }
            // line 168
            yield "
      ";
            // line 169
            if (((($context["message"] ?? null) || ($context["is_invalid"] ?? null)) && (($context["type"] ?? null) != "hidden"))) {
                // line 170
                yield "        ";
                $context["error_message"] = "Field has an error";
                // line 171
                yield "        ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 172
                    yield "          ";
                    $context["error_message"] = (("Field <em>" . ($context["title"] ?? null)) . "</em> has an error");
                    // line 173
                    yield "        ";
                }
                // line 174
                yield "
        ";
                // line 175
                $context["message_content"] = null;
                // line 176
                yield "        ";
                if ((($tmp = ($context["is_invalid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 177
                    yield "          ";
                    $context["message_content"] = ($context["error_message"] ?? null);
                    // line 178
                    yield "        ";
                }
                // line 179
                yield "
        ";
                // line 180
                if ((array_key_exists("message", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "content", [], "any", true, true, true, 180))) {
                    // line 181
                    yield "          ";
                    $context["message_content"] = CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "content", [], "any", false, false, true, 181);
                    // line 182
                    yield "        ";
                }
                // line 183
                yield "
        ";
                // line 184
                yield from $this->load("civictheme:field-message", 184)->unwrap()->yield(CoreExtension::toArray(["theme" =>                 // line 185
($context["theme"] ?? null), "type" => (((($tmp =                 // line 186
($context["is_invalid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("error") : ("information")), "content" =>                 // line 187
($context["message_content"] ?? null), "allow_html" => true, "modifier_class" => "ct-field__message", "attributes" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 190
($context["message"] ?? null), "attributes", [], "any", true, true, true, 190)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "attributes", [], "any", false, false, true, 190), "")) : (""))]));
                // line 192
                yield "      ";
            }
            // line 193
            yield "    </div>
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "control", "name", "options", "is_multiple", "title", "value", "id", "placeholder", "required_text", "attributes", "label", "description", "prefix", "is_inline", "suffix", "message"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "civictheme:field";
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
        return array (  394 => 193,  391 => 192,  389 => 190,  388 => 187,  387 => 186,  386 => 185,  385 => 184,  382 => 183,  379 => 182,  376 => 181,  374 => 180,  371 => 179,  368 => 178,  365 => 177,  362 => 176,  360 => 175,  357 => 174,  354 => 173,  351 => 172,  348 => 171,  345 => 170,  343 => 169,  340 => 168,  334 => 166,  332 => 165,  329 => 164,  326 => 163,  323 => 162,  320 => 161,  317 => 160,  313 => 158,  311 => 156,  310 => 155,  308 => 154,  302 => 153,  299 => 152,  295 => 151,  292 => 150,  289 => 149,  286 => 148,  283 => 147,  280 => 146,  277 => 145,  272 => 144,  270 => 143,  267 => 142,  265 => 141,  262 => 140,  259 => 139,  257 => 138,  254 => 137,  251 => 136,  249 => 135,  246 => 134,  243 => 133,  241 => 132,  238 => 131,  232 => 129,  230 => 128,  227 => 127,  224 => 126,  222 => 122,  221 => 121,  220 => 120,  217 => 119,  214 => 118,  211 => 117,  208 => 116,  206 => 115,  203 => 114,  200 => 113,  197 => 112,  194 => 111,  191 => 110,  189 => 109,  185 => 107,  182 => 106,  180 => 104,  179 => 103,  178 => 102,  177 => 101,  176 => 100,  175 => 99,  173 => 98,  171 => 97,  162 => 96,  160 => 95,  157 => 94,  155 => 93,  148 => 91,  146 => 89,  145 => 88,  144 => 87,  143 => 86,  142 => 85,  141 => 84,  140 => 83,  139 => 82,  138 => 81,  137 => 80,  136 => 79,  135 => 78,  134 => 77,  133 => 76,  132 => 75,  131 => 74,  128 => 73,  125 => 72,  122 => 71,  119 => 70,  117 => 69,  114 => 68,  111 => 67,  108 => 66,  105 => 65,  102 => 64,  98 => 63,  96 => 62,  93 => 61,  89 => 59,  86 => 58,  82 => 56,  80 => 55,  77 => 53,  75 => 52,  73 => 51,  71 => 50,  69 => 49,  67 => 48,  65 => 47,  63 => 46,  61 => 45,  59 => 44,  57 => 43,  55 => 42,  53 => 41,  51 => 40,  48 => 39,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "civictheme:field", "themes/contrib/civictheme/components/02-molecules/field/field.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 40, "if" => 55, "for" => 63, "include" => 98];
        static $filters = ["format" => 46, "default" => 46, "first" => 58, "keys" => 58, "merge" => 91, "escape" => 96, "raw" => 96];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'include'],
                ['format', 'default', 'first', 'keys', 'merge', 'escape', 'raw'],
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
