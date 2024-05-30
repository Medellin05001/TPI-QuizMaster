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

/* table/search/input_box.twig */
class __TwigTemplate_400fb179ddcbd19fd26ad0f598c3acb3 extends Template
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
        // line 2
        if ((($context["foreigners"] ?? null) && ($context["search_column_in_foreigners"] ?? null))) {
            // line 3
            echo "    ";
            if (is_iterable((($__internal_compile_0 = ($context["foreign_data"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["disp_row"] ?? null) : null))) {
                // line 4
                echo "        <select name=\"criteriaValues[";
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "]\"
            id=\"";
                // line 5
                echo twig_escape_filter($this->env, ($context["column_id"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "\">
            ";
                // line 6
                echo ($context["foreign_dropdown"] ?? null);
                echo "
        </select>
    ";
            } elseif (((($__internal_compile_1 =             // line 8
($context["foreign_data"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["foreign_link"] ?? null) : null) == true)) {
                // line 9
                echo "        <input type=\"text\"
            id=\"";
                // line 10
                echo twig_escape_filter($this->env, ($context["column_id"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "\"
            name=\"criteriaValues[";
                // line 11
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "]\"
            id=\"field_";
                // line 12
                echo twig_escape_filter($this->env, ($context["column_name_hash"] ?? null), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "]\"
            class=\"textfield\"
            ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, ($context["criteria_values"] ?? null), ($context["column_index"] ?? null), [], "array", true, true, false, 14)) {
                    // line 15
                    echo "                value=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["criteria_values"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["column_index"] ?? null)] ?? null) : null), "html", null, true);
                    echo "\"
            ";
                }
                // line 16
                echo ">
        <a class=\"ajax browse_foreign\" href=\"";
                // line 17
                echo $this->env->getFunction('url')->getCallable()("/browse-foreigners");
                echo "\" data-post=\"";
                // line 18
                echo $this->env->getFunction('get_common')->getCallable()(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)], "", false);
                // line 19
                echo "&amp;field=";
                echo twig_escape_filter($this->env, twig_urlencode_filter(($context["column_name"] ?? null)), "html", null, true);
                echo "&amp;fieldkey=";
                // line 20
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "&amp;fromsearch=1\">
            ";
                // line 21
                echo $this->env->getFunction('get_icon')->getCallable()("b_browse", _gettext("Browse foreign values"));
                echo "
        </a>
    ";
            }
        } elseif (twig_in_filter(        // line 24
($context["column_type"] ?? null), $this->env->getFunction('get_gis_datatypes')->getCallable()())) {
            // line 25
            echo "    <input type=\"text\"
        name=\"criteriaValues[";
            // line 26
            echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
            echo "]\"
        size=\"40\"
        class=\"textfield\"
        id=\"field_";
            // line 29
            echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
            echo "\">
    ";
            // line 30
            if (($context["in_fbs"] ?? null)) {
                // line 31
                echo "        <span class=\"open_search_gis_editor\">
            ";
                // line 32
                echo $this->env->getFunction('link_or_button')->getCallable()("#", null, $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Edit/Insert")));
                echo "
        </span>
    ";
            }
        } elseif (((is_string($__internal_compile_3 =         // line 35
($context["column_type"] ?? null)) && is_string($__internal_compile_4 = "enum") && str_starts_with($__internal_compile_3, $__internal_compile_4)) || ((is_string($__internal_compile_5 =         // line 36
($context["column_type"] ?? null)) && is_string($__internal_compile_6 = "set") && str_starts_with($__internal_compile_5, $__internal_compile_6)) && ($context["in_zoom_search_edit"] ?? null)))) {
            // line 37
            echo "    ";
            $context["in_zoom_search_edit"] = false;
            // line 38
            echo "    ";
            $context["value"] = PhpMyAdmin\Util::parseEnumSetValues(($context["column_type"] ?? null));
            // line 39
            echo "    ";
            $context["cnt_value"] = twig_length_filter($this->env, ($context["value"] ?? null));
            // line 40
            echo "    ";
            // line 46
            echo "    ";
            if ((((is_string($__internal_compile_7 = ($context["column_type"] ?? null)) && is_string($__internal_compile_8 = "enum") && str_starts_with($__internal_compile_7, $__internal_compile_8)) &&  !($context["in_zoom_search_edit"] ?? null)) || ((is_string($__internal_compile_9 =             // line 47
($context["column_type"] ?? null)) && is_string($__internal_compile_10 = "set") && str_starts_with($__internal_compile_9, $__internal_compile_10)) && ($context["in_zoom_search_edit"] ?? null)))) {
                // line 48
                echo "        <select name=\"criteriaValues[";
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "]\"
            id=\"";
                // line 49
                echo twig_escape_filter($this->env, ($context["column_id"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "\">
    ";
            } else {
                // line 51
                echo "        <select name=\"criteriaValues[";
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "]\"
            id=\"";
                // line 52
                echo twig_escape_filter($this->env, ($context["column_id"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
                echo "\"
            multiple=\"multiple\"
            size=\"";
                // line 54
                echo twig_escape_filter($this->env, min(3, ($context["cnt_value"] ?? null)), "html", null, true);
                echo "\">
    ";
            }
            // line 56
            echo "    ";
            // line 57
            echo "    <option value=\"\"></option>
    ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($context["cnt_value"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 59
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["criteria_values"] ?? null), ($context["column_index"] ?? null), [], "array", true, true, false, 59) && is_iterable((($__internal_compile_11 =                 // line 60
($context["criteria_values"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[($context["column_index"] ?? null)] ?? null) : null))) && twig_in_filter((($__internal_compile_12 =                 // line 61
($context["value"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[$context["i"]] ?? null) : null), (($__internal_compile_13 = ($context["criteria_values"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["column_index"] ?? null)] ?? null) : null)))) {
                    // line 62
                    echo "            <option value=\"";
                    echo (($__internal_compile_14 = ($context["value"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[$context["i"]] ?? null) : null);
                    echo "\" selected>
                ";
                    // line 63
                    echo (($__internal_compile_15 = ($context["value"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[$context["i"]] ?? null) : null);
                    echo "
            </option>
        ";
                } else {
                    // line 66
                    echo "            <option value=\"";
                    echo (($__internal_compile_16 = ($context["value"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[$context["i"]] ?? null) : null);
                    echo "\">
                ";
                    // line 67
                    echo (($__internal_compile_17 = ($context["value"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[$context["i"]] ?? null) : null);
                    echo "
            </option>
        ";
                }
                // line 70
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "    </select>
";
        } else {
            // line 73
            echo "    ";
            $context["the_class"] = "textfield";
            // line 74
            echo "    ";
            if ((($context["column_type"] ?? null) == "date")) {
                // line 75
                echo "        ";
                $context["the_class"] = (($context["the_class"] ?? null) . " datefield");
                // line 76
                echo "    ";
            } elseif (((($context["column_type"] ?? null) == "datetime") || (is_string($__internal_compile_18 = ($context["column_type"] ?? null)) && is_string($__internal_compile_19 = "timestamp") && str_starts_with($__internal_compile_18, $__internal_compile_19)))) {
                // line 77
                echo "        ";
                $context["the_class"] = (($context["the_class"] ?? null) . " datetimefield");
                // line 78
                echo "    ";
            } elseif ((is_string($__internal_compile_20 = ($context["column_type"] ?? null)) && is_string($__internal_compile_21 = "bit") && str_starts_with($__internal_compile_20, $__internal_compile_21))) {
                // line 79
                echo "        ";
                $context["the_class"] = (($context["the_class"] ?? null) . " bit");
                // line 80
                echo "    ";
            }
            // line 81
            echo "    <input
        ";
            // line 82
            if ((($context["is_integer"] ?? null) || ($context["is_float"] ?? null))) {
                // line 83
                echo "            type=\"number\"
            ";
                // line 84
                if (($context["is_integer"] ?? null)) {
                    // line 85
                    echo "                inputmode=\"numeric\"
            ";
                } else {
                    // line 87
                    echo "                inputmode=\"decimal\"
            ";
                }
                // line 89
                echo "        ";
            } else {
                // line 90
                echo "            type=\"text\"";
            }
            // line 92
            echo "
        name=\"criteriaValues[";
            // line 93
            echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
            echo "]\"
        data-type=\"";
            // line 94
            echo twig_escape_filter($this->env, ($context["column_data_type"] ?? null), "html", null, true);
            echo "\"
        ";
            // line 95
            echo ($context["html_attributes"] ?? null);
            echo "
        size=\"40\"
        class=\"";
            // line 97
            echo twig_escape_filter($this->env, ($context["the_class"] ?? null), "html", null, true);
            echo "\"
        id=\"";
            // line 98
            echo twig_escape_filter($this->env, ($context["column_id"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["column_index"] ?? null), "html", null, true);
            echo "\"
        ";
            // line 99
            if (twig_get_attribute($this->env, $this->source, ($context["criteria_values"] ?? null), ($context["column_index"] ?? null), [], "array", true, true, false, 99)) {
                // line 100
                echo "           value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_22 = ($context["criteria_values"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[($context["column_index"] ?? null)] ?? null) : null), "html", null, true);
                echo "\"";
            }
            // line 101
            echo ">
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/search/input_box.twig";
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
        return array (  305 => 101,  300 => 100,  298 => 99,  293 => 98,  289 => 97,  284 => 95,  280 => 94,  276 => 93,  273 => 92,  270 => 90,  267 => 89,  263 => 87,  259 => 85,  257 => 84,  254 => 83,  252 => 82,  249 => 81,  246 => 80,  243 => 79,  240 => 78,  237 => 77,  234 => 76,  231 => 75,  228 => 74,  225 => 73,  221 => 71,  215 => 70,  209 => 67,  204 => 66,  198 => 63,  193 => 62,  191 => 61,  190 => 60,  188 => 59,  184 => 58,  181 => 57,  179 => 56,  174 => 54,  168 => 52,  163 => 51,  157 => 49,  152 => 48,  150 => 47,  148 => 46,  146 => 40,  143 => 39,  140 => 38,  137 => 37,  135 => 36,  134 => 35,  128 => 32,  125 => 31,  123 => 30,  119 => 29,  113 => 26,  110 => 25,  108 => 24,  102 => 21,  98 => 20,  94 => 19,  92 => 18,  89 => 17,  86 => 16,  80 => 15,  78 => 14,  71 => 12,  67 => 11,  62 => 10,  59 => 9,  57 => 8,  52 => 6,  47 => 5,  42 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/search/input_box.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\table\\search\\input_box.twig");
    }
}
