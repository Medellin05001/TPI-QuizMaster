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

/* sql/query.twig */
class __TwigTemplate_b21f62c77b438dbf270e7e36b15c067b extends Template
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
        echo "<form method=\"post\" action=\"";
        echo $this->env->getFunction('url')->getCallable()("/import");
        echo "\" class=\"ajax lock-page\" id=\"sqlqueryform\" name=\"sqlform\"";
        // line 2
        echo ((($context["is_upload"] ?? null)) ? (" enctype=\"multipart/form-data\"") : (""));
        echo ">
  ";
        // line 3
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
  <input type=\"hidden\" name=\"is_js_confirmed\" value=\"0\">
  <input type=\"hidden\" name=\"pos\" value=\"0\">
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["goto"] ?? null), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"message_to_show\" value=\"";
echo _gettext("Your SQL query has been executed successfully.");
        // line 7
        echo "\">
  <input type=\"hidden\" name=\"prev_sql_query\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["query"] ?? null), "html", null, true);
        echo "\">

  ";
        // line 10
        if (((($context["display_tab"] ?? null) == "full") || (($context["display_tab"] ?? null) == "sql"))) {
            // line 11
            echo "    <a id=\"querybox\"></a>

    <div class=\"card mb-3\">
      <div class=\"card-header\">";
            // line 14
            echo ($context["legend"] ?? null);
            echo "</div>
      <div class=\"card-body\">
        <div id=\"queryfieldscontainer\">
          <div class=\"row\">
            <div class=\"col\">
              <div class=\"mb-3\">
                <textarea class=\"form-control\" tabindex=\"100\" name=\"sql_query\" id=\"sqlquery\" cols=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["textarea_cols"] ?? null), "html", null, true);
            echo "\" rows=\"";
            echo twig_escape_filter($this->env, ($context["textarea_rows"] ?? null), "html", null, true);
            echo "\" data-textarea-auto-select=\"";
            echo ((($context["textarea_auto_select"] ?? null)) ? ("true") : ("false"));
            echo "\" aria-label=\"";
echo _gettext("SQL query");
            echo "\">";
            // line 21
            echo twig_escape_filter($this->env, ($context["query"] ?? null), "html", null, true);
            // line 22
            echo "</textarea>
              </div>
              <div id=\"querymessage\"></div>

              <div class=\"btn-toolbar\" role=\"toolbar\">
                ";
            // line 27
            if ( !twig_test_empty(($context["columns_list"] ?? null))) {
                // line 28
                echo "                  <div class=\"btn-group me-2\" role=\"group\">
                    <input type=\"button\" value=\"SELECT *\" id=\"selectall\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"SELECT\" id=\"select\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"INSERT\" id=\"insert\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"UPDATE\" id=\"update\" class=\"btn btn-secondary button sqlbutton\">
                    <input type=\"button\" value=\"DELETE\" id=\"delete\" class=\"btn btn-secondary button sqlbutton\">
                  </div>
                ";
            }
            // line 36
            echo "
                <div class=\"btn-group me-2\" role=\"group\">
                  <input type=\"button\" value=\"";
echo _gettext("Clear");
            // line 38
            echo "\" id=\"clear\" class=\"btn btn-secondary button sqlbutton\">
                  ";
            // line 39
            if (($context["codemirror_enable"] ?? null)) {
                // line 40
                echo "                    <input type=\"button\" value=\"";
echo _gettext("Format");
                echo "\" id=\"format\" class=\"btn btn-secondary button sqlbutton\">
                  ";
            }
            // line 42
            echo "                </div>

                <input type=\"button\" value=\"";
echo _gettext("Get auto-saved query");
            // line 44
            echo "\" id=\"saved\" class=\"btn btn-secondary button sqlbutton\">
              </div>

              <div class=\"my-3\">
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"parameterized\" id=\"parameterized\">
                  <label class=\"form-check-label\" for=\"parameterized\">
                    ";
// l10n: Bind parameters in the SQL query using :parameterName format
echo _gettext("Bind parameters");
            // line 52
            echo "                    ";
            echo $this->env->getFunction('show_docu')->getCallable()("faq", "faq6-40");
            echo "
                  </label>
                </div>
              </div>
              <div class=\"mb-3\" id=\"parametersDiv\"></div>
            </div>

            ";
            // line 59
            if ( !twig_test_empty(($context["columns_list"] ?? null))) {
                // line 60
                echo "              <div class=\"col-xl-2 col-lg-3\">
                <div class=\"mb-3\">
                  <label class=\"visually-hidden\" for=\"fieldsSelect\">";
echo _gettext("Columns");
                // line 62
                echo "</label>
                  <select class=\"form-select resize-vertical\" id=\"fieldsSelect\" name=\"dummy\" size=\"";
                // line 63
                echo twig_escape_filter($this->env, ($context["textarea_rows"] ?? null), "html", null, true);
                echo "\" multiple>
                    ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["columns_list"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 65
                    echo "                      <option value=\"";
                    echo twig_escape_filter($this->env, $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source, $context["field"], "field", [], "any", false, false, false, 65)), "html", null, true);
                    echo "\"";
                    // line 66
                    (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "field", [], "any", false, false, false, 66)) > 0)) ? (print (twig_escape_filter($this->env, ((" title=\"" . twig_get_attribute($this->env, $this->source, $context["field"], "comment", [], "any", false, false, false, 66)) . "\""), "html", null, true))) : (print ("")));
                    echo ">
                        ";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "field", [], "any", false, false, false, 67), "html", null, true);
                    echo "
                      </option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "                  </select>
                </div>

                <input type=\"button\" class=\"btn btn-secondary button\" id=\"insertBtn\" name=\"insert\" value=\"";
                // line 74
                if ($this->env->getFunction('show_icons')->getCallable()("ActionLinksMode")) {
                    echo "<<";
                    echo "\" title=\"";
                }
echo _gettext("Insert");
                // line 75
                echo "\">
              </div>
            ";
            }
            // line 78
            echo "          </div>
        </div>

        ";
            // line 81
            if (($context["has_bookmark"] ?? null)) {
                // line 82
                echo "          <div class=\"row row-cols-lg-auto g-3 align-items-center\">
            <div class=\"col-6\">
              <label class=\"form-label\" for=\"bkm_label\">";
echo _gettext("Bookmark this SQL query:");
                // line 84
                echo "</label>
            </div>
            <div class=\"col-6\">
              <input class=\"form-control\" type=\"text\" name=\"bkm_label\" id=\"bkm_label\" tabindex=\"110\" value=\"\">
            </div>

            ";
                // line 90
                if (($context["allow_shared_bookmarks"] ?? null)) {
                    // line 91
                    echo "              <div class=\"col-12\">
                <div class=\"form-check form-check-inline\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"bkm_all_users\" tabindex=\"111\" id=\"id_bkm_all_users\" value=\"true\">
                  <label class=\"form-check-label\" for=\"id_bkm_all_users\">";
echo _gettext("Let every user access this bookmark");
                    // line 94
                    echo "</label>
                </div>
              </div>
            ";
                }
                // line 98
                echo "
            <div class=\"col-12\">
              <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"bkm_replace\" tabindex=\"112\" id=\"id_bkm_replace\" value=\"true\">
                <label class=\"form-check-label\" for=\"id_bkm_replace\">";
echo _gettext("Replace existing bookmark of same name");
                // line 102
                echo "</label>
              </div>
            </div>
          </div>
        ";
            }
            // line 107
            echo "      </div>
      <div class=\"card-footer\">
        <div class=\"row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <div class=\"input-group me-2\">
              <span class=\"input-group-text\">";
echo _gettext("Delimiter");
            // line 112
            echo "</span>
              <label class=\"visually-hidden\" for=\"id_sql_delimiter\">";
echo _gettext("Delimiter");
            // line 113
            echo "</label>
              <input class=\"form-control\" type=\"text\" name=\"sql_delimiter\" tabindex=\"131\" size=\"3\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, ($context["delimiter"] ?? null), "html", null, true);
            echo "\" id=\"id_sql_delimiter\">
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"show_query\" value=\"1\" id=\"checkbox_show_query\" tabindex=\"132\">
              <label class=\"form-check-label\" for=\"checkbox_show_query\">";
echo _gettext("Show this query here again");
            // line 121
            echo "</label>
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"retain_query_box\" value=\"1\" id=\"retain_query_box\" tabindex=\"133\"";
            // line 128
            echo ((($context["retain_query_box"] ?? null)) ? (" checked") : (""));
            echo ">
              <label class=\"form-check-label\" for=\"retain_query_box\">";
echo _gettext("Retain query box");
            // line 129
            echo "</label>
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check form-check-inline\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"rollback_query\" value=\"1\" id=\"rollback_query\" tabindex=\"134\">
              <label class=\"form-check-label\" for=\"rollback_query\">";
echo _gettext("Rollback when finished");
            // line 136
            echo "</label>
            </div>
          </div>

          <div class=\"col-12\">
            <div class=\"form-check\">
              <input type=\"hidden\" name=\"fk_checks\" value=\"0\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"fk_checks\" id=\"fk_checks\" value=\"1\"";
            // line 143
            echo ((($context["is_foreign_key_check"] ?? null)) ? (" checked") : (""));
            echo ">
              <label class=\"form-check-label\" for=\"fk_checks\">";
echo _gettext("Enable foreign key checks");
            // line 144
            echo "</label>
            </div>
          </div>

          <div class=\"col-12\">
            <input class=\"btn btn-primary ms-1\" type=\"submit\" id=\"button_submit_query\" name=\"SQL\" tabindex=\"200\" value=\"";
echo _gettext("Go");
            // line 149
            echo "\">
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 155
        echo "
  ";
        // line 156
        if (((($context["display_tab"] ?? null) == "full") &&  !twig_test_empty(($context["bookmarks"] ?? null)))) {
            // line 157
            echo "    <div class=\"card mb-3\">
      <div class=\"card-header\">";
echo _gettext("Bookmarked SQL query");
            // line 158
            echo "</div>
      <div class=\"card-body\">
        <div class=\"row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-6\">
            <label class=\"form-label\" for=\"id_bookmark\">";
echo _gettext("Bookmark:");
            // line 162
            echo "</label>
          </div>
          <div class=\"col-6\">
            <select class=\"form-select\" name=\"id_bookmark\" id=\"id_bookmark\">
              <option value=\"\">&nbsp;</option>
              ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bookmarks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["bookmark"]) {
                // line 168
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bookmark"], "id", [], "any", false, false, false, 168), "html", null, true);
                echo "\" data-varcount=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bookmark"], "variable_count", [], "any", false, false, false, 168), "html", null, true);
                echo "\">
                  ";
                // line 169
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bookmark"], "label", [], "any", false, false, false, 169), "html", null, true);
                echo "
                  ";
                // line 170
                if (twig_get_attribute($this->env, $this->source, $context["bookmark"], "is_shared", [], "any", false, false, false, 170)) {
                    // line 171
                    echo "                    (";
echo _gettext("shared");
                    echo ")
                  ";
                }
                // line 173
                echo "                </option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bookmark'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "            </select>
          </div>

          <div class=\"form-check form-check-inline col-12\">
            <input class=\"form-check-input\" type=\"radio\" name=\"action_bookmark\" value=\"0\" id=\"radio_bookmark_exe\" checked>
            <label class=\"form-check-label\" for=\"radio_bookmark_exe\">";
echo _gettext("Submit");
            // line 180
            echo "</label>
          </div>
          <div class=\"form-check form-check-inline col-12\">
            <input class=\"form-check-input\" type=\"radio\" name=\"action_bookmark\" value=\"1\" id=\"radio_bookmark_view\">
            <label class=\"form-check-label\" for=\"radio_bookmark_view\">";
echo _gettext("View only");
            // line 184
            echo "</label>
          </div>
          <div class=\"form-check form-check-inline col-12\">
            <input class=\"form-check-input\" type=\"radio\" name=\"action_bookmark\" value=\"2\" id=\"radio_bookmark_del\">
            <label class=\"form-check-label\" for=\"radio_bookmark_del\">";
echo _gettext("Delete");
            // line 188
            echo "</label>
          </div>
        </div>

        <div class=\"hide\">
          ";
echo _gettext("Variables");
            // line 194
            echo "          ";
            echo $this->env->getFunction('show_docu')->getCallable()("faq", "faqbookmark");
            echo "
          <div class=\"row row-cols-auto\" id=\"bookmarkVariables\"></div>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-secondary\" type=\"submit\" name=\"SQL\" id=\"button_submit_bookmark\" value=\"";
echo _gettext("Go");
            // line 200
            echo "\">
      </div>
    </div>
  ";
        }
        // line 204
        echo "
  ";
        // line 205
        if (($context["can_convert_kanji"] ?? null)) {
            // line 206
            echo "    <div class=\"card mb-3\">
      <div class=\"card-body\">
        ";
            // line 208
            $this->loadTemplate("encoding/kanji_encoding_form.twig", "sql/query.twig", 208)->display($context);
            // line 209
            echo "      </div>
    </div>
  ";
        }
        // line 212
        echo "</form>

<div id=\"sqlqueryresultsouter\"></div>

<div class=\"modal fade\" id=\"simulateDmlModal\" tabindex=\"-1\" aria-labelledby=\"simulateDmlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"simulateDmlModalLabel\">";
echo _gettext("Simulate query");
        // line 220
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
        // line 221
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
echo _gettext("Close");
        // line 226
        echo "</button>
      </div>
    </div>
  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sql/query.twig";
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
        return array (  470 => 226,  462 => 221,  458 => 220,  447 => 212,  442 => 209,  440 => 208,  436 => 206,  434 => 205,  431 => 204,  425 => 200,  414 => 194,  406 => 188,  399 => 184,  392 => 180,  384 => 175,  377 => 173,  371 => 171,  369 => 170,  365 => 169,  358 => 168,  354 => 167,  347 => 162,  340 => 158,  336 => 157,  334 => 156,  331 => 155,  323 => 149,  315 => 144,  310 => 143,  301 => 136,  291 => 129,  286 => 128,  278 => 121,  267 => 114,  264 => 113,  260 => 112,  252 => 107,  245 => 102,  238 => 98,  232 => 94,  226 => 91,  224 => 90,  216 => 84,  211 => 82,  209 => 81,  204 => 78,  199 => 75,  193 => 74,  188 => 70,  179 => 67,  175 => 66,  171 => 65,  167 => 64,  163 => 63,  160 => 62,  155 => 60,  153 => 59,  142 => 52,  131 => 44,  126 => 42,  120 => 40,  118 => 39,  115 => 38,  110 => 36,  100 => 28,  98 => 27,  91 => 22,  89 => 21,  80 => 20,  71 => 14,  66 => 11,  64 => 10,  59 => 8,  56 => 7,  51 => 6,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sql/query.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\sql\\query.twig");
    }
}
