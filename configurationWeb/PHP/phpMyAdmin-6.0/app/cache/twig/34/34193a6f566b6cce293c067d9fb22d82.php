<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* display/results/checkbox_and_links.twig */
class __TwigTemplate_7175b4b2d305baf6ec212537fa49c2e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((($context["position"] ?? null) == "left")) {
            // line 2
            echo "  ";
            if (($context["has_checkbox"] ?? null)) {
                // line 3
                echo "    <td class=\"text-center d-print-none\">
      <input type=\"checkbox\" class=\"multi_checkbox checkall\" id=\"id_rows_to_delete";
                // line 5
                echo twig_escape_filter($this->env, ($context["row_number"] ?? null), "html", null, true);
                echo "_left\" name=\"rows_to_delete[";
                echo twig_escape_filter($this->env, ($context["row_number"] ?? null), "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, ($context["where_clause"] ?? null), "html", null, true);
                echo "\">
      <input type=\"hidden\" class=\"condition_array\" value=\"";
                // line 6
                echo twig_escape_filter($this->env, ($context["condition"] ?? null), "html", null, true);
                echo "\">
    </td>
  ";
            }
            // line 9
            echo "
  ";
            // line 10
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "url", [], "any", false, false, false, 10))) {
                // line 11
                echo "    <td class=\"text-center d-print-none edit_row_anchor";
                echo (( !twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "clause_is_unique", [], "any", false, false, false, 11)) ? (" nonunique") : (""));
                echo "\" data-grid-edit-config=\"";
                echo twig_escape_filter($this->env, ($context["grid_edit_config"] ?? null), "html", null, true);
                echo "\">
      <span class=\"text-nowrap\">
        ";
                // line 13
                if ((($context["grid_edit_config"] ?? null) == "disabled")) {
                    // line 14
                    echo "          ";
                    $context["grid_edit_tooltip"] = [];
                    // line 15
                    echo "        ";
                } elseif ((($context["grid_edit_config"] ?? null) == "click")) {
                    // line 16
                    echo "          ";
                    $context["grid_edit_tooltip"] = ["data-bs-toggle" => "tooltip", "data-bs-placement" => "right", "title" => _gettext("You can also edit most values by clicking directly on them.")];
                    // line 17
                    echo "        ";
                } else {
                    // line 18
                    echo "          ";
                    $context["grid_edit_tooltip"] = ["data-bs-toggle" => "tooltip", "data-bs-placement" => "right", "title" => _gettext("You can also edit most values by double-clicking directly on them.")];
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "        ";
                echo $this->env->getFunction('link_or_button')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "url", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "params", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "string", [], "any", false, false, false, 20), ($context["grid_edit_tooltip"] ?? null));
                echo "
        ";
                // line 21
                if ( !twig_test_empty(($context["where_clause"] ?? null))) {
                    // line 22
                    echo "          <input type=\"hidden\" class=\"where_clause\" value=\"";
                    echo twig_escape_filter($this->env, ($context["where_clause"] ?? null), "html", null, true);
                    echo "\">
        ";
                }
                // line 24
                echo "      </span>
    </td>
  ";
            }
            // line 27
            echo "
  ";
            // line 28
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["copy"] ?? null), "url", [], "any", false, false, false, 28))) {
                // line 29
                echo "    <td class=\"text-center d-print-none\">
      <span class=\"text-nowrap\">
        ";
                // line 31
                echo $this->env->getFunction('link_or_button')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["copy"] ?? null), "url", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, ($context["copy"] ?? null), "params", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, ($context["copy"] ?? null), "string", [], "any", false, false, false, 31));
                echo "
        ";
                // line 32
                if ( !twig_test_empty(($context["where_clause"] ?? null))) {
                    // line 33
                    echo "          <input type=\"hidden\" class=\"where_clause\" value=\"";
                    echo twig_escape_filter($this->env, ($context["where_clause"] ?? null), "html", null, true);
                    echo "\">
        ";
                }
                // line 35
                echo "      </span>
    </td>
  ";
            }
            // line 38
            echo "
  ";
            // line 39
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["delete"] ?? null), "url", [], "any", false, false, false, 39))) {
                // line 40
                echo "    <td class=\"text-center d-print-none";
                echo ((($context["is_ajax"] ?? null)) ? (" ajax") : (""));
                echo "\">
      <span class=\"text-nowrap\">
        ";
                // line 42
                echo $this->env->getFunction('link_or_button')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["delete"] ?? null), "url", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, ($context["delete"] ?? null), "params", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, ($context["delete"] ?? null), "string", [], "any", false, false, false, 42), ["class" => ("delete_row requireConfirm" . ((($context["is_ajax"] ?? null)) ? (" ajax") : ("")))]);
                echo "
        ";
                // line 43
                if ( !twig_test_empty(($context["js_conf"] ?? null))) {
                    // line 44
                    echo "          <div class=\"hide\">";
                    echo twig_escape_filter($this->env, ($context["js_conf"] ?? null), "html", null, true);
                    echo "</div>
        ";
                }
                // line 46
                echo "      </span>
    </td>
  ";
            }
        } elseif ((        // line 49
($context["position"] ?? null) == "right")) {
            // line 50
            echo "  ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["delete"] ?? null), "url", [], "any", false, false, false, 50))) {
                // line 51
                echo "    <td class=\"text-center d-print-none";
                echo ((($context["is_ajax"] ?? null)) ? (" ajax") : (""));
                echo "\">
      <span class=\"text-nowrap\">
        ";
                // line 53
                echo $this->env->getFunction('link_or_button')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["delete"] ?? null), "url", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, ($context["delete"] ?? null), "params", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, ($context["delete"] ?? null), "string", [], "any", false, false, false, 53), ["class" => ("delete_row requireConfirm" . ((($context["is_ajax"] ?? null)) ? (" ajax") : ("")))]);
                echo "
        ";
                // line 54
                if ( !twig_test_empty(($context["js_conf"] ?? null))) {
                    // line 55
                    echo "          <div class=\"hide\">";
                    echo twig_escape_filter($this->env, ($context["js_conf"] ?? null), "html", null, true);
                    echo "</div>
        ";
                }
                // line 57
                echo "      </span>
    </td>
  ";
            }
            // line 60
            echo "
  ";
            // line 61
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["copy"] ?? null), "url", [], "any", false, false, false, 61))) {
                // line 62
                echo "    <td class=\"text-center d-print-none\">
      <span class=\"text-nowrap\">
        ";
                // line 64
                echo $this->env->getFunction('link_or_button')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["copy"] ?? null), "url", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, ($context["copy"] ?? null), "params", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, ($context["copy"] ?? null), "string", [], "any", false, false, false, 64));
                echo "
        ";
                // line 65
                if ( !twig_test_empty(($context["where_clause"] ?? null))) {
                    // line 66
                    echo "          <input type=\"hidden\" class=\"where_clause\" value=\"";
                    echo twig_escape_filter($this->env, ($context["where_clause"] ?? null), "html", null, true);
                    echo "\">
        ";
                }
                // line 68
                echo "      </span>
    </td>
  ";
            }
            // line 71
            echo "
  ";
            // line 72
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "url", [], "any", false, false, false, 72))) {
                // line 73
                echo "    <td class=\"text-center d-print-none edit_row_anchor";
                echo (( !twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "clause_is_unique", [], "any", false, false, false, 73)) ? (" nonunique") : (""));
                echo "\" data-grid-edit-config=\"";
                echo twig_escape_filter($this->env, ($context["grid_edit_config"] ?? null), "html", null, true);
                echo "\">
      <span class=\"text-nowrap\">
        ";
                // line 75
                if ((($context["grid_edit_config"] ?? null) == "disabled")) {
                    // line 76
                    echo "          ";
                    $context["grid_edit_tooltip"] = [];
                    // line 77
                    echo "        ";
                } elseif ((($context["grid_edit_config"] ?? null) == "click")) {
                    // line 78
                    echo "          ";
                    $context["grid_edit_tooltip"] = ["data-bs-toggle" => "tooltip", "data-bs-placement" => "left", "title" => _gettext("You can also edit most values by clicking directly on them.")];
                    // line 79
                    echo "        ";
                } else {
                    // line 80
                    echo "          ";
                    $context["grid_edit_tooltip"] = ["data-bs-toggle" => "tooltip", "data-bs-placement" => "left", "title" => _gettext("You can also edit most values by double-clicking directly on them.")];
                    // line 81
                    echo "        ";
                }
                // line 82
                echo "        ";
                echo $this->env->getFunction('link_or_button')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "url", [], "any", false, false, false, 82), twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "params", [], "any", false, false, false, 82), twig_get_attribute($this->env, $this->source, ($context["edit"] ?? null), "string", [], "any", false, false, false, 82), ($context["grid_edit_tooltip"] ?? null));
                echo "
        ";
                // line 83
                if ( !twig_test_empty(($context["where_clause"] ?? null))) {
                    // line 84
                    echo "          <input type=\"hidden\" class=\"where_clause\" value=\"";
                    echo twig_escape_filter($this->env, ($context["where_clause"] ?? null), "html", null, true);
                    echo "\">
        ";
                }
                // line 86
                echo "      </span>
    </td>
  ";
            }
            // line 89
            echo "
  ";
            // line 90
            if (($context["has_checkbox"] ?? null)) {
                // line 91
                echo "    <td class=\"text-center d-print-none\">
      <input type=\"checkbox\" class=\"multi_checkbox checkall\" id=\"id_rows_to_delete";
                // line 93
                echo twig_escape_filter($this->env, ($context["row_number"] ?? null), "html", null, true);
                echo "_right\" name=\"rows_to_delete[";
                echo twig_escape_filter($this->env, ($context["row_number"] ?? null), "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, ($context["where_clause"] ?? null), "html", null, true);
                echo "\">
      <input type=\"hidden\" class=\"condition_array\" value=\"";
                // line 94
                echo twig_escape_filter($this->env, ($context["condition"] ?? null), "html", null, true);
                echo "\">
    </td>
  ";
            }
        } else {
            // line 98
            echo "  ";
            if (($context["has_checkbox"] ?? null)) {
                // line 99
                echo "    <td class=\"text-center d-print-none\">
      <input type=\"checkbox\" class=\"multi_checkbox checkall\" id=\"id_rows_to_delete";
                // line 101
                echo twig_escape_filter($this->env, ($context["row_number"] ?? null), "html", null, true);
                echo "_left\" name=\"rows_to_delete[";
                echo twig_escape_filter($this->env, ($context["row_number"] ?? null), "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, ($context["where_clause"] ?? null), "html", null, true);
                echo "\">
      <input type=\"hidden\" class=\"condition_array\" value=\"";
                // line 102
                echo twig_escape_filter($this->env, ($context["condition"] ?? null), "html", null, true);
                echo "\">
    </td>
  ";
            }
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "display/results/checkbox_and_links.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  306 => 102,  298 => 101,  295 => 99,  292 => 98,  285 => 94,  277 => 93,  274 => 91,  272 => 90,  269 => 89,  264 => 86,  258 => 84,  256 => 83,  251 => 82,  248 => 81,  245 => 80,  242 => 79,  239 => 78,  236 => 77,  233 => 76,  231 => 75,  223 => 73,  221 => 72,  218 => 71,  213 => 68,  207 => 66,  205 => 65,  201 => 64,  197 => 62,  195 => 61,  192 => 60,  187 => 57,  181 => 55,  179 => 54,  175 => 53,  169 => 51,  166 => 50,  164 => 49,  159 => 46,  153 => 44,  151 => 43,  147 => 42,  141 => 40,  139 => 39,  136 => 38,  131 => 35,  125 => 33,  123 => 32,  119 => 31,  115 => 29,  113 => 28,  110 => 27,  105 => 24,  99 => 22,  97 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  72 => 13,  64 => 11,  62 => 10,  59 => 9,  53 => 6,  45 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "display/results/checkbox_and_links.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\display\\results\\checkbox_and_links.twig");
    }
}
