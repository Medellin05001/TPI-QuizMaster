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

/* database/operations/index.twig */
class __TwigTemplate_59e129154897f88c1f6af79d2902f5cd extends Template
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
        echo "<div class=\"container my-3\">
  <h2>";
        // line 2
        echo twig_escape_filter($this->env, _gettext("Database operations"), "html", null, true);
        echo "</h2>

  ";
        // line 4
        echo ($context["message"] ?? null);
        echo "

  ";
        // line 6
        if (($context["has_comment"] ?? null)) {
            // line 7
            echo "    <form method=\"post\" action=\"";
            echo $this->env->getFunction('url')->getCallable()("/database/operations");
            echo "\" id=\"formDatabaseComment\">
      ";
            // line 8
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null));
            echo "
      <div class=\"card mb-2\">
        <div class=\"card-header\">";
            // line 10
            echo $this->env->getFunction('get_icon')->getCallable()("b_comment", _gettext("Database comment"), true);
            echo "</div>
        <div class=\"card-body\">
          <div class=\"row g-3\">
            <div class=\"col-auto\">
              <label class=\"visually-hidden\" for=\"databaseCommentInput\">";
echo _gettext("Database comment");
            // line 14
            echo "</label>
              <input class=\"form-control textfield\" id=\"databaseCommentInput\" type=\"text\" name=\"comment\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["db_comment"] ?? null), "html", null, true);
            echo "\">
            </div>
          </div>
        </div>
        <div class=\"card-footer text-end\">
          <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Go");
            // line 20
            echo "\">
        </div>
      </div>
    </form>
  ";
        }
        // line 25
        echo "
  <form id=\"createTableMinimalForm\" method=\"post\" action=\"";
        // line 26
        echo $this->env->getFunction('url')->getCallable()("/table/create");
        echo "\" class=\"card mb-2 lock-page\">
    ";
        // line 27
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null));
        echo "
    <div class=\"card-header\">";
        // line 28
        echo $this->env->getFunction('get_icon')->getCallable()("b_table_add", _gettext("Create new table"), true);
        echo "</div>
    <div class=\"card-body row row-cols-lg-auto g-3\">
      <div class=\"col-md-6\">
        <label for=\"createTableNameInput\" class=\"form-label\">";
echo _gettext("Table name");
        // line 31
        echo "</label>
        <input type=\"text\" class=\"form-control\" name=\"table\" id=\"createTableNameInput\" maxlength=\"64\" required>
      </div>
      <div class=\"col-md-6\">
        <label for=\"createTableNumFieldsInput\" class=\"form-label\">";
echo _gettext("Number of columns");
        // line 35
        echo "</label>
        <input type=\"number\" class=\"form-control\" name=\"num_fields\" id=\"createTableNumFieldsInput\" min=\"1\" value=\"4\" required>
      </div>
    </div>
    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Create");
        // line 40
        echo "\">
    </div>
  </form>

  ";
        // line 44
        if ((($context["db"] ?? null) != "mysql")) {
            // line 45
            echo "    <form id=\"rename_db_form\" class=\"ajax\" method=\"post\" action=\"";
            echo $this->env->getFunction('url')->getCallable()("/database/operations");
            echo "\">
      ";
            // line 46
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null));
            echo "
      <input type=\"hidden\" name=\"what\" value=\"data\">
      <input type=\"hidden\" name=\"db_rename\" value=\"true\">

      ";
            // line 50
            if ( !twig_test_empty(($context["db_collation"] ?? null))) {
                // line 51
                echo "        <input type=\"hidden\" name=\"db_collation\" value=\"";
                echo twig_escape_filter($this->env, ($context["db_collation"] ?? null), "html", null, true);
                echo "\">
      ";
            }
            // line 53
            echo "
      <div class=\"card mb-2\">
        <div class=\"card-header\">";
            // line 55
            echo $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Rename database to"), true);
            echo "</div>
        <div class=\"card-body\">
          <div class=\"mb-3 row g-3\">
            <div class=\"col-auto\">
              <label class=\"visually-hidden\" for=\"new_db_name\">";
echo _gettext("New database name");
            // line 59
            echo "</label>
              <input class=\"form-control textfield\" id=\"new_db_name\" type=\"text\" name=\"newname\" maxlength=\"64\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, ($context["db"] ?? null), "html", null, true);
            echo "\" required>
            </div>
          </div>

          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_adjust_privileges\"";
            // line 66
            if (($context["has_adjust_privileges"] ?? null)) {
                echo " checked";
            } else {
                echo " title=\"";
echo _gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.");
                // line 67
                echo "\" disabled";
            }
            echo ">
            <label class=\"form-check-label\" for=\"checkbox_adjust_privileges\">
              ";
echo _gettext("Adjust privileges");
            // line 70
            echo "              ";
            echo $this->env->getFunction('show_docu')->getCallable()("faq", "faq6-39");
            echo "
            </label>
          </div>
        </div>

        <div class=\"card-footer text-end\">
          <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Go");
            // line 76
            echo "\">
        </div>
      </div>
    </form>
  ";
        }
        // line 81
        echo "
  ";
        // line 82
        if (($context["is_drop_database_allowed"] ?? null)) {
            // line 83
            echo "    <div class=\"card mb-2\">
      <div class=\"card-header\">";
            // line 84
            echo $this->env->getFunction('get_icon')->getCallable()("b_deltbl", _gettext("Remove database"), true);
            echo "</div>
      <div class=\"card-body\">
        <div class=\"card-text\">
          ";
            // line 87
            echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/sql"), ["sql_query" => ("DROP DATABASE " . $this->env->getFunction('backquote')->getCallable()(            // line 90
($context["db"] ?? null))), "back" => $this->env->getFunction('url')->getCallable()("/database/operations"), "goto" => $this->env->getFunction('url')->getCallable()("/"), "reload" => true, "purge" => true, "message_to_show" => twig_escape_filter($this->env, twig_sprintf(_gettext("Database %s has been dropped."), $this->env->getFunction('backquote')->getCallable()(            // line 95
($context["db"] ?? null)))), "db" => null], _gettext("Drop the database (DROP)"), ["id" => "drop_db_anchor", "class" => "ajax text-danger"]);
            // line 103
            echo "
          ";
            // line 104
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("DROP_DATABASE");
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 109
        echo "
  <form id=\"copy_db_form\" class=\"ajax\" method=\"post\" action=\"";
        // line 110
        echo $this->env->getFunction('url')->getCallable()("/database/operations");
        echo "\">
    ";
        // line 111
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null));
        echo "
    <input type=\"hidden\" name=\"db_copy\" value=\"true\">

    ";
        // line 114
        if ( !twig_test_empty(($context["db_collation"] ?? null))) {
            // line 115
            echo "      <input type=\"hidden\" name=\"db_collation\" value=\"";
            echo twig_escape_filter($this->env, ($context["db_collation"] ?? null), "html", null, true);
            echo "\">
    ";
        }
        // line 117
        echo "
    <div class=\"card mb-2\">
      <div class=\"card-header\">";
        // line 119
        echo $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Copy database to"), true);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"mb-3 row g-3\">
          <div class=\"col-auto\">
            <label class=\"visually-hidden\" for=\"renameDbNameInput\">";
echo _gettext("Database name");
        // line 123
        echo "</label>
            <input class=\"form-control textfield\" id=\"renameDbNameInput\" type=\"text\" name=\"newname\" maxlength=\"64\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, ($context["db"] ?? null), "html", null, true);
        echo "\" required>
          </div>
        </div>

        <div class=\"mb-3\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio1\" value=\"structure\">
            <label class=\"form-check-label\" for=\"whatRadio1\">
              ";
echo _gettext("Structure only");
        // line 133
        echo "            </label>
          </div>
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio2\" value=\"data\" checked>
            <label class=\"form-check-label\" for=\"whatRadio2\">
              ";
echo _gettext("Structure and data");
        // line 139
        echo "            </label>
          </div>
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio3\" value=\"dataonly\">
            <label class=\"form-check-label\" for=\"whatRadio3\">
              ";
echo _gettext("Data only");
        // line 145
        echo "            </label>
          </div>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"create_database_before_copying\" value=\"1\" id=\"checkbox_create_database_before_copying\" checked>
          <label class=\"form-check-label\" for=\"checkbox_create_database_before_copying\">";
echo _gettext("CREATE DATABASE before copying");
        // line 151
        echo "</label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"drop_if_exists\" value=\"true\" id=\"checkbox_drop\">
          <label class=\"form-check-label\" for=\"checkbox_drop\">";
        // line 156
        echo twig_escape_filter($this->env, twig_sprintf(_gettext("Add %s"), "DROP TABLE / DROP VIEW"), "html", null, true);
        echo "</label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment\" checked>
          <label class=\"form-check-label\" for=\"checkbox_auto_increment\">";
echo _gettext("Add AUTO_INCREMENT value");
        // line 161
        echo "</label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"add_constraints\" value=\"1\" id=\"checkbox_constraints\" checked>
          <label class=\"form-check-label\" for=\"checkbox_constraints\">";
echo _gettext("Add constraints");
        // line 166
        echo "</label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges\"";
        // line 171
        if (($context["has_adjust_privileges"] ?? null)) {
            echo " checked";
        } else {
            echo " title=\"";
echo _gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.");
            // line 172
            echo "\" disabled";
        }
        echo ">
          <label class=\"form-check-label\" for=\"checkbox_privileges\">
            ";
echo _gettext("Adjust privileges");
        // line 175
        echo "            ";
        echo $this->env->getFunction('show_docu')->getCallable()("faq", "faq6-39");
        echo "
          </label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"switch_to_new\" value=\"true\" id=\"checkbox_switch\"";
        // line 180
        echo ((($context["switch_to_new"] ?? null)) ? (" checked") : (""));
        echo ">
          <label class=\"form-check-label\" for=\"checkbox_switch\">";
echo _gettext("Switch to copied database");
        // line 181
        echo "</label>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_copy\" value=\"";
echo _gettext("Go");
        // line 186
        echo "\">
      </div>
    </div>
  </form>

  <form id=\"change_db_charset_form\" class=\"ajax\" method=\"post\" action=\"";
        // line 191
        echo $this->env->getFunction('url')->getCallable()("/database/operations/collation");
        echo "\">
    ";
        // line 192
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null));
        echo "

    <div class=\"card mb-2\">
      <div class=\"card-header\">";
        // line 195
        echo $this->env->getFunction('get_icon')->getCallable()("s_asci", _gettext("Collation"), true);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"mb-3 row g-3\">
          <div class=\"col-auto\">
            <label class=\"visually-hidden\" for=\"select_db_collation\">";
echo _gettext("Collation");
        // line 199
        echo "</label>
            <select class=\"form-select\" lang=\"en\" dir=\"ltr\" name=\"db_collation\" id=\"select_db_collation\">
              <option value=\"\"></option>
              ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["charsets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 203
            echo "                <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 203), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getDescription", [], "method", false, false, false, 203), "html", null, true);
            echo "\">
                  ";
            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = ($context["collations"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 204)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 205
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 205), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "getDescription", [], "method", false, false, false, 205), "html", null, true);
                echo "\"";
                echo (((($context["db_collation"] ?? null) == twig_get_attribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 205))) ? (" selected") : (""));
                echo ">
                      ";
                // line 206
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 206), "html", null, true);
                echo "
                    </option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "                </optgroup>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "            </select>
          </div>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"change_all_tables_collations\" id=\"checkbox_change_all_tables_collations\">
          <label class=\"form-check-label\" for=\"checkbox_change_all_tables_collations\">";
echo _gettext("Change all tables collations");
        // line 217
        echo "</label>
        </div>
        <div class=\"form-check\" id=\"span_change_all_tables_columns_collations\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"change_all_tables_columns_collations\" id=\"checkbox_change_all_tables_columns_collations\">
          <label class=\"form-check-label\" for=\"checkbox_change_all_tables_columns_collations\">";
echo _gettext("Change all tables columns collations");
        // line 221
        echo "</label>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Go");
        // line 226
        echo "\">
      </div>
    </div>
  </form>

</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/operations/index.twig";
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
        return array (  465 => 226,  457 => 221,  450 => 217,  441 => 211,  434 => 209,  425 => 206,  416 => 205,  412 => 204,  405 => 203,  401 => 202,  396 => 199,  388 => 195,  382 => 192,  378 => 191,  371 => 186,  363 => 181,  358 => 180,  349 => 175,  342 => 172,  336 => 171,  330 => 166,  322 => 161,  313 => 156,  306 => 151,  297 => 145,  289 => 139,  281 => 133,  269 => 124,  266 => 123,  258 => 119,  254 => 117,  248 => 115,  246 => 114,  240 => 111,  236 => 110,  233 => 109,  225 => 104,  222 => 103,  220 => 95,  219 => 90,  218 => 87,  212 => 84,  209 => 83,  207 => 82,  204 => 81,  197 => 76,  186 => 70,  179 => 67,  173 => 66,  165 => 60,  162 => 59,  154 => 55,  150 => 53,  144 => 51,  142 => 50,  135 => 46,  130 => 45,  128 => 44,  122 => 40,  114 => 35,  107 => 31,  100 => 28,  96 => 27,  92 => 26,  89 => 25,  82 => 20,  73 => 15,  70 => 14,  62 => 10,  57 => 8,  52 => 7,  50 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/operations/index.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\database\\operations\\index.twig");
    }
}
