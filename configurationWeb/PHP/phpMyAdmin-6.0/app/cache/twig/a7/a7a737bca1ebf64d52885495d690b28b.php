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

/* table/search/index.twig */
class __TwigTemplate_8ff9102dc74ac904e488d012f6cd6943 extends Template
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
    <a class=\"nav-link active disableAjax\" href=\"";
        // line 3
        echo $this->env->getFunction('url')->getCallable()("/table/search", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "pos" => 0]);
        echo "\">
      ";
        // line 4
        echo $this->env->getFunction('get_icon')->getCallable()("b_search", _gettext("Table search"), false, false, "TabsMode");
        echo "
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"";
        // line 9
        echo $this->env->getFunction('url')->getCallable()("/table/zoom-search", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
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
        echo $this->env->getFunction('url')->getCallable()("/table/find-replace", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
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
        echo $this->env->getFunction('url')->getCallable()("/table/search");
        echo "\" name=\"insertForm\" id=\"tbl_search_form\" class=\"ajax lock-page\">
  ";
        // line 22
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["goto"] ?? null), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"back\" value=\"";
        // line 24
        echo $this->env->getFunction('url')->getCallable()("/table/search");
        echo "\">

  <div class=\"card\">
    <div class=\"card-header\">";
echo _gettext("Do a \"query by example\" (wildcard: \"%\")");
        // line 27
        echo "</div>

    <div class=\"card-body\">
      <div id=\"fieldset_table_qbe\">
        <div class=\"table-responsive-md jsresponsive\">
          <table class=\"table table-striped table-hover table-sm w-auto\">
            <thead>
              <tr>
                ";
        // line 35
        if (($context["geom_column_flag"] ?? null)) {
            // line 36
            echo "                  <th>";
echo _gettext("Function");
            echo "</th>
                ";
        }
        // line 38
        echo "                <th>";
echo _gettext("Column");
        echo "</th>
                <th>";
echo _gettext("Type");
        // line 39
        echo "</th>
                <th>";
echo _gettext("Collation");
        // line 40
        echo "</th>
                <th>";
echo _gettext("Operator");
        // line 41
        echo "</th>
                <th>";
echo _gettext("Value");
        // line 42
        echo "</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["column_names"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["column_index"]) {
            // line 47
            echo "                <tr class=\"noclick\">
                  ";
            // line 49
            echo "                  ";
            if (($context["geom_column_flag"] ?? null)) {
                // line 50
                echo "                    ";
                // line 51
                echo "                    <td>
                      ";
                // line 52
                $context["geom_types"] = $this->env->getFunction('get_gis_datatypes')->getCallable()();
                // line 53
                echo "                      ";
                if (twig_in_filter((($__internal_compile_0 = ($context["column_types"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["column_index"]] ?? null) : null), ($context["geom_types"] ?? null))) {
                    // line 54
                    echo "                        <select class=\"geom_func\" name=\"geom_func[";
                    echo twig_escape_filter($this->env, $context["column_index"], "html", null, true);
                    echo "]\">
                          ";
                    // line 56
                    echo "                          ";
                    $context["funcs"] = $this->env->getFunction('get_gis_functions')->getCallable()((($__internal_compile_1 = ($context["column_types"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["column_index"]] ?? null) : null), true, true);
                    // line 57
                    echo "                          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["funcs"] ?? null));
                    foreach ($context['_seq'] as $context["func_name"] => $context["func"]) {
                        // line 58
                        echo "                            ";
                        $context["name"] = ((twig_get_attribute($this->env, $this->source, $context["func"], "display", [], "array", true, true, false, 58)) ? ((($__internal_compile_2 = $context["func"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["display"] ?? null) : null)) : ($context["func_name"]));
                        // line 59
                        echo "                            <option value=\"";
                        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                        echo "\">
                              ";
                        // line 60
                        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                        echo "
                            </option>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['func_name'], $context['func'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "                        </select>
                      ";
                }
                // line 65
                echo "                    </td>
                  ";
            }
            // line 67
            echo "                  ";
            // line 68
            echo "                  <th>";
            // line 70
            echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["column_names"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["column_index"]] ?? null) : null), "html", null, true);
            // line 71
            echo "</th>
                  <td dir=\"ltr\">
                    ";
            // line 73
            echo twig_escape_filter($this->env, (($__internal_compile_4 = (($__internal_compile_5 = ($context["properties"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["column_index"]] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["type"] ?? null) : null), "html", null, true);
            echo "
                  </td>
                  <td>
                    ";
            // line 76
            echo twig_escape_filter($this->env, (($__internal_compile_6 = (($__internal_compile_7 = ($context["properties"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["column_index"]] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["collation"] ?? null) : null), "html", null, true);
            echo "
                  </td>
                  <td>
                    ";
            // line 79
            echo (($__internal_compile_8 = (($__internal_compile_9 = ($context["properties"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["column_index"]] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["func"] ?? null) : null);
            echo "
                  </td>
                  ";
            // line 82
            echo "                  <td data-type=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_10 = (($__internal_compile_11 = ($context["properties"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["column_index"]] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["type"] ?? null) : null), "html", null, true);
            echo "\">
                    ";
            // line 83
            echo (($__internal_compile_12 = (($__internal_compile_13 = ($context["properties"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[$context["column_index"]] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["value"] ?? null) : null);
            echo "
                    ";
            // line 85
            echo "                    <input type=\"hidden\" name=\"criteriaColumnNames[";
            echo twig_escape_filter($this->env, $context["column_index"], "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_14 = ($context["column_names"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[$context["column_index"]] ?? null) : null), "html", null, true);
            echo "\">
                    <input type=\"hidden\" name=\"criteriaColumnTypes[";
            // line 86
            echo twig_escape_filter($this->env, $context["column_index"], "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_15 = ($context["column_types"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[$context["column_index"]] ?? null) : null), "html", null, true);
            echo "\">
                    <input type=\"hidden\" name=\"criteriaColumnCollations[";
            // line 87
            echo twig_escape_filter($this->env, $context["column_index"], "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_16 = ($context["column_collations"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[$context["column_index"]] ?? null) : null), "html", null, true);
            echo "\">
                  </td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column_index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "            </tbody>
          </table>
        </div>
        <div id=\"gis_editor\"></div>
        <div id=\"popup_background\"></div>
      </div>

      ";
        // line 98
        if ((($context["default_sliders_state"] ?? null) != "disabled")) {
            // line 99
            echo "      <div>
        <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#searchExtraOptions\" aria-expanded=\"";
            // line 100
            echo (((($context["default_sliders_state"] ?? null) == "open")) ? ("true") : ("false"));
            echo "\" aria-controls=\"searchExtraOptions\">
          ";
echo _gettext("Extra options");
            // line 102
            echo "        </button>
      </div>
      <div class=\"collapse mt-3";
            // line 104
            echo (((($context["default_sliders_state"] ?? null) == "open")) ? (" show") : (""));
            echo "\" id=\"searchExtraOptions\">
      ";
        }
        // line 106
        echo "
        ";
        // line 108
        echo "        <fieldset>
          <div class=\"mb-3\">
            <label class=\"form-label\" for=\"columnsToDisplaySelect\">";
echo _gettext("Select columns (at least one):");
        // line 110
        echo "</label>
            <select class=\"form-select resize-vertical\" id=\"columnsToDisplaySelect\" name=\"columnsToDisplay[]\" size=\"";
        // line 111
        echo twig_escape_filter($this->env, min(twig_length_filter($this->env, ($context["column_names"] ?? null)), 10), "html", null, true);
        echo "\" multiple>
              ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_names"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["each_field"]) {
            // line 113
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["each_field"], "html", null, true);
            echo "\" selected>
                  ";
            // line 114
            echo twig_escape_filter($this->env, $context["each_field"], "html", null, true);
            echo "
                </option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "            </select>
          </div>
          <div class=\"form-check mb-3\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"distinct\" value=\"DISTINCT\" id=\"oDistinct\">
            <label class=\"form-check-label\" for=\"oDistinct\" dir=\"ltr\" lang=\"en\">DISTINCT</label>
          </div>
        </fieldset>

        ";
        // line 126
        echo "        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"customWhereClauseInput\">
            <em>";
echo _gettext("Or");
        // line 128
        echo "</em>
            ";
echo _gettext("Add search conditions (body of the \"where\" clause):");
        // line 130
        echo "            ";
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("Functions");
        echo "
          </label>
          <input class=\"form-control\" id=\"customWhereClauseInput\" type=\"text\" name=\"customWhereClause\" size=\"64\">
        </div>

        ";
        // line 136
        echo "        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"maxRowsInput\">";
echo _gettext("Number of rows per page");
        // line 137
        echo "</label>
          <input class=\"form-control\" id=\"maxRowsInput\" type=\"number\" name=\"session_max_rows\" min=\"1\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, ($context["max_rows"] ?? null), "html", null, true);
        echo "\" required>
        </div>

        ";
        // line 142
        echo "        <fieldset>
          <legend class=\"visually-hidden\">";
echo _gettext("Display order:");
        // line 143
        echo "</legend>
          <div class=\"mb-3\">
            <label class=\"form-label\" for=\"orderByColumnSelect\">";
echo _gettext("Order by:");
        // line 145
        echo "</label>
            <select class=\"form-select\" id=\"orderByColumnSelect\" name=\"orderByColumn\">
              <option value=\"--nil--\" selected></option>
              ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_names"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["each_field"]) {
            // line 149
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["each_field"], "html", null, true);
            echo "\">
                  ";
            // line 150
            echo twig_escape_filter($this->env, $context["each_field"], "html", null, true);
            echo "
                </option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "            </select>
          </div>

          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"order\" id=\"orderByAscRadio\" value=\"ASC\" checked>
            <label class=\"form-check-label\" for=\"orderByAscRadio\">";
echo _gettext("Ascending");
        // line 158
        echo "</label>
          </div>
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"order\" id=\"orderByDescRadio\" value=\"DESC\">
            <label class=\"form-check-label\" for=\"orderByDescRadio\">";
echo _gettext("Descending");
        // line 162
        echo "</label>
          </div>
        </fieldset>
      ";
        // line 165
        if ((($context["default_sliders_state"] ?? null) != "disabled")) {
            // line 166
            echo "      </div>
      ";
        }
        // line 168
        echo "    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"";
echo _gettext("Go");
        // line 171
        echo "\">
    </div>
  </div>
</form>

<div class=\"modal fade\" id=\"rangeSearchModal\" tabindex=\"-1\" aria-labelledby=\"rangeSearchModalLabel\" aria-hidden=\"false\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"rangeSearchModalLabel\">";
echo _gettext("Range search");
        // line 180
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
        // line 181
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
        <fieldset>
          <legend id=\"rangeSearchLegend\"></legend>
          <label for=\"min_value\">";
echo _gettext("Minimum value:");
        // line 186
        echo "</label>
          <input type=\"text\" id=\"min_value\"><br>
          <span class=\"small_font\" id=\"rangeSearchMin\"></span><br>
          <label for=\"max_value\">";
echo _gettext("Maximum value:");
        // line 189
        echo "</label>
          <input type=\"text\" id=\"max_value\"><br>
          <span class=\"small_font\" id=\"rangeSearchMax\"></span>
        </fieldset>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"rangeSearchModalGo\">";
echo _gettext("Go");
        // line 195
        echo "</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
echo _gettext("Cancel");
        // line 196
        echo "</button>
      </div>
    </div>
  </div>
</div>

<div id=\"sqlqueryresultsouter\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/search/index.twig";
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
        return array (  466 => 196,  462 => 195,  453 => 189,  447 => 186,  439 => 181,  435 => 180,  423 => 171,  417 => 168,  413 => 166,  411 => 165,  406 => 162,  399 => 158,  391 => 153,  382 => 150,  377 => 149,  373 => 148,  368 => 145,  363 => 143,  359 => 142,  353 => 138,  350 => 137,  346 => 136,  337 => 130,  333 => 128,  328 => 126,  318 => 117,  309 => 114,  304 => 113,  300 => 112,  296 => 111,  293 => 110,  288 => 108,  285 => 106,  280 => 104,  276 => 102,  271 => 100,  268 => 99,  266 => 98,  257 => 91,  245 => 87,  239 => 86,  232 => 85,  228 => 83,  223 => 82,  218 => 79,  212 => 76,  206 => 73,  202 => 71,  200 => 70,  198 => 68,  196 => 67,  192 => 65,  188 => 63,  179 => 60,  174 => 59,  171 => 58,  166 => 57,  163 => 56,  158 => 54,  155 => 53,  153 => 52,  150 => 51,  148 => 50,  145 => 49,  142 => 47,  138 => 46,  132 => 42,  128 => 41,  124 => 40,  120 => 39,  114 => 38,  108 => 36,  106 => 35,  96 => 27,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  69 => 16,  65 => 15,  57 => 10,  53 => 9,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/search/index.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\table\\search\\index.twig");
    }
}
