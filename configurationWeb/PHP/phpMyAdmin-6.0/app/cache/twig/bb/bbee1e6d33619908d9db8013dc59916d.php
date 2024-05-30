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

/* table/zoom_search/index.twig */
class __TwigTemplate_3bd51b22a3891e00a94247c04c78dfa6 extends Template
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
        echo "<ul class=\"nav nav-pills m-2\">
  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"";
        // line 3
        echo $this->env->getFunction('url')->getCallable()("/table/search", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 3, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 3, $this->source); })()), "pos" => 0]);
        echo "\">
      ";
        // line 4
        echo $this->env->getFunction('get_icon')->getCallable()("b_search", _gettext("Table search"), false, false, "TabsMode");
        echo "
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link active disableAjax\" href=\"";
        // line 9
        echo $this->env->getFunction('url')->getCallable()("/table/zoom-search", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 9, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 9, $this->source); })())]);
        echo "\">
      ";
        // line 10
        echo $this->env->getFunction('get_icon')->getCallable()("b_select", _gettext("Zoom search"), false, false, "TabsMode");
        echo "
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"";
        // line 15
        echo $this->env->getFunction('url')->getCallable()("/table/find-replace", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 15, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 15, $this->source); })())]);
        echo "\">
      ";
        // line 16
        echo $this->env->getFunction('get_icon')->getCallable()("b_find_replace", _gettext("Find and replace"), false, false, "TabsMode");
        echo "
    </a>
  </li>
</ul>

<form method=\"post\" action=\"";
        // line 21
        echo $this->env->getFunction('url')->getCallable()("/table/zoom-search");
        echo "\" name=\"insertForm\" id=\"zoom_search_form\" class=\"ajax lock-page\">
  ";
        // line 22
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 22, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 22, $this->source); })()));
        echo "
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"back\" value=\"";
        // line 24
        echo $this->env->getFunction('url')->getCallable()("/table/zoom-search");
        echo "\">

  <div class=\"card mb-3\">
    <div class=\"card-header\">";
        // line 27
echo _gettext("Do a \"query by example\" (wildcard: \"%\") for two different columns");
        echo "</div>

    <div class=\"card-body\" id=\"inputSection\">
      <table class=\"table table-striped table-hover table-sm w-auto\" id=\"tableFieldsId\">
        <thead>
          <tr>
            ";
        // line 33
        if ((isset($context["geom_column_flag"]) || array_key_exists("geom_column_flag", $context) ? $context["geom_column_flag"] : (function () { throw new RuntimeError('Variable "geom_column_flag" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "              <th>";
echo _gettext("Function");
            echo "</th>
            ";
        }
        // line 36
        echo "            <th>";
echo _gettext("Column");
        echo "</th>
            <th>";
        // line 37
echo _gettext("Type");
        echo "</th>
            <th>";
        // line 38
echo _gettext("Collation");
        echo "</th>
            <th>";
        // line 39
echo _gettext("Operator");
        echo "</th>
            <th>";
        // line 40
echo _gettext("Value");
        echo "</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 44
        $context["type"] = [];
        // line 45
        echo "          ";
        $context["collation"] = [];
        // line 46
        echo "          ";
        $context["func"] = [];
        // line 47
        echo "          ";
        $context["value"] = [];
        // line 48
        echo "
          ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 50
            echo "            ";
            // line 51
            echo "            ";
            if (($context["i"] == 2)) {
                // line 52
                echo "              <tr>
                <th>
                  ";
                // line 54
echo _gettext("Additional search criteria");
                // line 55
                echo "                </th>
              </tr>
            ";
            }
            // line 58
            echo "            <tr class=\"noclick\">
              <th>
                <select name=\"criteriaColumnNames[]\" id=\"tableid_";
            // line 60
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">
                  <option value=\"pma_null\">
                    ";
            // line 62
echo _gettext("None");
            // line 63
            echo "                  </option>
                  ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 64, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 65
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["criteria_column_names"] ?? null), $context["i"], [], "array", true, true, false, 65) && (twig_get_attribute($this->env, $this->source, (isset($context["criteria_column_names"]) || array_key_exists("criteria_column_names", $context) ? $context["criteria_column_names"] : (function () { throw new RuntimeError('Variable "criteria_column_names" does not exist.', 65, $this->source); })()), $context["i"], [], "array", false, false, false, 65) == twig_get_attribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 65, $this->source); })()), $context["j"], [], "array", false, false, false, 65)))) {
                    // line 66
                    echo "                      <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 66, $this->source); })()), $context["j"], [], "array", false, false, false, 66), "html", null, true);
                    echo "\" selected>
                        ";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 67, $this->source); })()), $context["j"], [], "array", false, false, false, 67), "html", null, true);
                    echo "
                      </option>
                    ";
                } else {
                    // line 70
                    echo "                      <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 70, $this->source); })()), $context["j"], [], "array", false, false, false, 70), "html", null, true);
                    echo "\">
                        ";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 71, $this->source); })()), $context["j"], [], "array", false, false, false, 71), "html", null, true);
                    echo "
                      </option>
                    ";
                }
                // line 74
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                </select>
              </th>
              ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, ($context["criteria_column_names"] ?? null), $context["i"], [], "array", true, true, false, 77) && (twig_get_attribute($this->env, $this->source, (isset($context["criteria_column_names"]) || array_key_exists("criteria_column_names", $context) ? $context["criteria_column_names"] : (function () { throw new RuntimeError('Variable "criteria_column_names" does not exist.', 77, $this->source); })()), $context["i"], [], "array", false, false, false, 77) != "pma_null"))) {
                // line 78
                echo "                ";
                $context["type"] = twig_array_merge((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 78, $this->source); })()), [$context["i"] => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 78, $this->source); })()), $context["i"], [], "array", false, false, false, 78), "type", [], "array", false, false, false, 78)]);
                // line 79
                echo "                ";
                $context["collation"] = twig_array_merge((isset($context["collation"]) || array_key_exists("collation", $context) ? $context["collation"] : (function () { throw new RuntimeError('Variable "collation" does not exist.', 79, $this->source); })()), [$context["i"] => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 79, $this->source); })()), $context["i"], [], "array", false, false, false, 79), "collation", [], "array", false, false, false, 79)]);
                // line 80
                echo "                ";
                $context["func"] = twig_array_merge((isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new RuntimeError('Variable "func" does not exist.', 80, $this->source); })()), [$context["i"] => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 80, $this->source); })()), $context["i"], [], "array", false, false, false, 80), "func", [], "array", false, false, false, 80)]);
                // line 81
                echo "                ";
                $context["value"] = twig_array_merge((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 81, $this->source); })()), [$context["i"] => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 81, $this->source); })()), $context["i"], [], "array", false, false, false, 81), "value", [], "array", false, false, false, 81)]);
                // line 82
                echo "              ";
            }
            // line 83
            echo "              ";
            // line 84
            echo "              <td dir=\"ltr\">
                ";
            // line 85
            ((twig_get_attribute($this->env, $this->source, ($context["type"] ?? null), $context["i"], [], "array", true, true, false, 85)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 85, $this->source); })()), $context["i"], [], "array", false, false, false, 85), "html", null, true))) : (print ("")));
            echo "
              </td>
              ";
            // line 88
            echo "              <td>
                ";
            // line 89
            ((twig_get_attribute($this->env, $this->source, ($context["collation"] ?? null), $context["i"], [], "array", true, true, false, 89)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collation"]) || array_key_exists("collation", $context) ? $context["collation"] : (function () { throw new RuntimeError('Variable "collation" does not exist.', 89, $this->source); })()), $context["i"], [], "array", false, false, false, 89), "html", null, true))) : (print ("")));
            echo "
              </td>
              ";
            // line 92
            echo "              <td>
                ";
            // line 93
            echo ((twig_get_attribute($this->env, $this->source, ($context["func"] ?? null), $context["i"], [], "array", true, true, false, 93)) ? (twig_get_attribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new RuntimeError('Variable "func" does not exist.', 93, $this->source); })()), $context["i"], [], "array", false, false, false, 93)) : (""));
            echo "
              </td>
              ";
            // line 96
            echo "              <td>
                ";
            // line 97
            echo ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), $context["i"], [], "array", true, true, false, 97)) ? (twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 97, $this->source); })()), $context["i"], [], "array", false, false, false, 97)) : (""));
            echo "
              </td>
              <td>
                ";
            // line 101
            echo "                <input type=\"hidden\" name=\"criteriaColumnTypes[";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "]\" id=\"types_";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"";
            // line 102
            if (twig_get_attribute($this->env, $this->source, ($context["criteria_column_types"] ?? null), $context["i"], [], "array", true, true, false, 102)) {
                echo " value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["criteria_column_types"]) || array_key_exists("criteria_column_types", $context) ? $context["criteria_column_types"] : (function () { throw new RuntimeError('Variable "criteria_column_types" does not exist.', 102, $this->source); })()), $context["i"], [], "array", false, false, false, 102), "html", null, true);
                echo "\"";
            }
            echo ">
                <input type=\"hidden\" name=\"criteriaColumnCollations[";
            // line 103
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "]\" id=\"collations_";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "        </tbody>
      </table>

      <table class=\"table table-borderless table-sm w-auto\">
        <tr>
          <td>
            <label for=\"dataLabel\">
              ";
        // line 114
echo _gettext("Use this column to label each point");
        // line 115
        echo "            </label>
          </td>
          <td>
            <select name=\"dataLabel\" id=\"dataLabel\">
              <option value=\"\">
                ";
        // line 120
echo _gettext("None");
        // line 121
        echo "              </option>
              ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 122, $this->source); })())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 123
            echo "                ";
            if ((array_key_exists("data_label", $context) && ((isset($context["data_label"]) || array_key_exists("data_label", $context) ? $context["data_label"] : (function () { throw new RuntimeError('Variable "data_label" does not exist.', 123, $this->source); })()) == twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 123, $this->source); })()), $context["i"], [], "array", false, false, false, 123))))) {
                // line 124
                echo "                  <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 124, $this->source); })()), $context["i"], [], "array", false, false, false, 124), "html", null, true);
                echo "\" selected>
                    ";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 125, $this->source); })()), $context["i"], [], "array", false, false, false, 125), "html", null, true);
                echo "
                  </option>
                ";
            } else {
                // line 128
                echo "                  <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 128, $this->source); })()), $context["i"], [], "array", false, false, false, 128), "html", null, true);
                echo "\">
                    ";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 129, $this->source); })()), $context["i"], [], "array", false, false, false, 129), "html", null, true);
                echo "
                  </option>
                ";
            }
            // line 132
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "            </select>
          </td>
        </tr>
        <tr>
          <td>
            <label for=\"maxRowPlotLimit\">
              ";
        // line 139
echo _gettext("Maximum rows to plot");
        // line 140
        echo "            </label>
          </td>
          <td>
            <input type=\"number\" name=\"maxPlotLimit\" id=\"maxRowPlotLimit\" required=\"required\" value=\"";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["max_plot_limit"]) || array_key_exists("max_plot_limit", $context) ? $context["max_plot_limit"] : (function () { throw new RuntimeError('Variable "max_plot_limit" does not exist.', 143, $this->source); })()), "html", null, true);
        echo "\">
          </td>
        </tr>
      </table>

      <div id=\"gis_editor\"></div>
      <div id=\"popup_background\"></div>
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"zoom_submit\" id=\"inputFormSubmitId\" value=\"";
        // line 153
echo _gettext("Go");
        echo "\">
    </div>
  </div>
</form>
<div id=\"sqlqueryresultsouter\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/zoom_search/index.twig";
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
        return array (  387 => 153,  374 => 143,  369 => 140,  367 => 139,  359 => 133,  353 => 132,  347 => 129,  342 => 128,  336 => 125,  331 => 124,  328 => 123,  324 => 122,  321 => 121,  319 => 120,  312 => 115,  310 => 114,  301 => 107,  289 => 103,  281 => 102,  275 => 101,  269 => 97,  266 => 96,  261 => 93,  258 => 92,  253 => 89,  250 => 88,  245 => 85,  242 => 84,  240 => 83,  237 => 82,  234 => 81,  231 => 80,  228 => 79,  225 => 78,  223 => 77,  219 => 75,  213 => 74,  207 => 71,  202 => 70,  196 => 67,  191 => 66,  188 => 65,  184 => 64,  181 => 63,  179 => 62,  174 => 60,  170 => 58,  165 => 55,  163 => 54,  159 => 52,  156 => 51,  154 => 50,  150 => 49,  147 => 48,  144 => 47,  141 => 46,  138 => 45,  136 => 44,  129 => 40,  125 => 39,  121 => 38,  117 => 37,  112 => 36,  106 => 34,  104 => 33,  95 => 27,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  69 => 16,  65 => 15,  57 => 10,  53 => 9,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"nav nav-pills m-2\">
  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"{{ url('/table/search', {'db': db, 'table': table, 'pos': 0}) }}\">
      {{ get_icon('b_search', 'Table search'|trans, false, false, 'TabsMode') }}
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link active disableAjax\" href=\"{{ url('/table/zoom-search', {'db': db, 'table': table}) }}\">
      {{ get_icon('b_select', 'Zoom search'|trans, false, false, 'TabsMode') }}
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"{{ url('/table/find-replace', {'db': db, 'table': table}) }}\">
      {{ get_icon('b_find_replace', 'Find and replace'|trans, false, false, 'TabsMode') }}
    </a>
  </li>
</ul>

<form method=\"post\" action=\"{{ url('/table/zoom-search') }}\" name=\"insertForm\" id=\"zoom_search_form\" class=\"ajax lock-page\">
  {{ get_hidden_inputs(db, table) }}
  <input type=\"hidden\" name=\"goto\" value=\"{{ goto }}\">
  <input type=\"hidden\" name=\"back\" value=\"{{ url('/table/zoom-search') }}\">

  <div class=\"card mb-3\">
    <div class=\"card-header\">{% trans 'Do a \"query by example\" (wildcard: \"%\") for two different columns' %}</div>

    <div class=\"card-body\" id=\"inputSection\">
      <table class=\"table table-striped table-hover table-sm w-auto\" id=\"tableFieldsId\">
        <thead>
          <tr>
            {% if geom_column_flag %}
              <th>{% trans 'Function' %}</th>
            {% endif %}
            <th>{% trans 'Column' %}</th>
            <th>{% trans 'Type' %}</th>
            <th>{% trans 'Collation' %}</th>
            <th>{% trans 'Operator' %}</th>
            <th>{% trans 'Value' %}</th>
          </tr>
        </thead>
        <tbody>
          {% set type = [] %}
          {% set collation = [] %}
          {% set func = [] %}
          {% set value = [] %}

          {% for i in 0..3 %}
            {# After X-Axis and Y-Axis column rows, display additional criteria option #}
            {% if i == 2 %}
              <tr>
                <th>
                  {% trans 'Additional search criteria' %}
                </th>
              </tr>
            {% endif %}
            <tr class=\"noclick\">
              <th>
                <select name=\"criteriaColumnNames[]\" id=\"tableid_{{ i }}\">
                  <option value=\"pma_null\">
                    {% trans 'None' %}
                  </option>
                  {% for j in 0..column_names|length - 1 %}
                    {% if criteria_column_names[i] is defined and criteria_column_names[i] == column_names[j] %}
                      <option value=\"{{ column_names[j] }}\" selected>
                        {{ column_names[j] }}
                      </option>
                    {% else %}
                      <option value=\"{{ column_names[j] }}\">
                        {{ column_names[j] }}
                      </option>
                    {% endif %}
                  {% endfor %}
                </select>
              </th>
              {% if criteria_column_names[i] is defined and criteria_column_names[i] != 'pma_null' %}
                {% set type = type|merge({(i): properties[i]['type']}) %}
                {% set collation = collation|merge({(i): properties[i]['collation']}) %}
                {% set func = func|merge({(i): properties[i]['func']}) %}
                {% set value = value|merge({(i): properties[i]['value']}) %}
              {% endif %}
              {# Column type #}
              <td dir=\"ltr\">
                {{ type[i] is defined ? type[i] }}
              </td>
              {# Column Collation #}
              <td>
                {{ collation[i] is defined ? collation[i] }}
              </td>
              {# Select options for column operators #}
              <td>
                {{ func[i] is defined ? func[i]|raw }}
              </td>
              {# Inputbox for search criteria value #}
              <td>
                {{ value[i] is defined ? value[i]|raw }}
              </td>
              <td>
                {# Displays hidden fields #}
                <input type=\"hidden\" name=\"criteriaColumnTypes[{{ i }}]\" id=\"types_{{ i }}\"
                  {%- if criteria_column_types[i] is defined %} value=\"{{ criteria_column_types[i] }}\"{% endif %}>
                <input type=\"hidden\" name=\"criteriaColumnCollations[{{ i }}]\" id=\"collations_{{ i }}\">
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>

      <table class=\"table table-borderless table-sm w-auto\">
        <tr>
          <td>
            <label for=\"dataLabel\">
              {% trans 'Use this column to label each point' %}
            </label>
          </td>
          <td>
            <select name=\"dataLabel\" id=\"dataLabel\">
              <option value=\"\">
                {% trans 'None' %}
              </option>
              {% for i in 0..column_names|length - 1 %}
                {% if data_label is defined and data_label == column_names[i]|e %}
                  <option value=\"{{ column_names[i] }}\" selected>
                    {{ column_names[i] }}
                  </option>
                {% else %}
                  <option value=\"{{ column_names[i] }}\">
                    {{ column_names[i] }}
                  </option>
                {% endif %}
              {% endfor %}
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <label for=\"maxRowPlotLimit\">
              {% trans 'Maximum rows to plot' %}
            </label>
          </td>
          <td>
            <input type=\"number\" name=\"maxPlotLimit\" id=\"maxRowPlotLimit\" required=\"required\" value=\"{{ max_plot_limit }}\">
          </td>
        </tr>
      </table>

      <div id=\"gis_editor\"></div>
      <div id=\"popup_background\"></div>
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"zoom_submit\" id=\"inputFormSubmitId\" value=\"{% trans 'Go' %}\">
    </div>
  </div>
</form>
<div id=\"sqlqueryresultsouter\"></div>
", "table/zoom_search/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/zoom_search/index.twig");
    }
}
