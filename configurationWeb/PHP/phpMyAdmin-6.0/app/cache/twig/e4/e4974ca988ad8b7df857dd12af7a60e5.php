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

/* columns_definitions/column_definitions_form.twig */
class __TwigTemplate_6f66bf81810d2c4b6d2ec7e0f78dc430 extends Template
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
        echo $this->env->getFunction('url')->getCallable()(($context["action"] ?? null));
        echo "\" class=\"";
        // line 2
        echo (((($context["action"] ?? null) == "/table/create")) ? ("create_table_form") : ("append_fields_form"));
        echo " ajax lock-page\">
    ";
        // line 3
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["form_params"] ?? null));
        echo "
    ";
        // line 5
        echo "    ";
        // line 6
        echo "    ";
        // line 7
        echo "    <input type=\"hidden\" name=\"primary_indexes\" value=\"";
        // line 8
        (( !twig_test_empty(($context["primary_indexes"] ?? null))) ? (print (twig_escape_filter($this->env, ($context["primary_indexes"] ?? null), "html", null, true))) : (print ("[]")));
        echo "\">
    <input type=\"hidden\" name=\"unique_indexes\" value=\"";
        // line 10
        (( !twig_test_empty(($context["unique_indexes"] ?? null))) ? (print (twig_escape_filter($this->env, ($context["unique_indexes"] ?? null), "html", null, true))) : (print ("[]")));
        echo "\">
    <input type=\"hidden\" name=\"indexes\" value=\"";
        // line 12
        (( !twig_test_empty(($context["indexes"] ?? null))) ? (print (twig_escape_filter($this->env, ($context["indexes"] ?? null), "html", null, true))) : (print ("[]")));
        echo "\">
    <input type=\"hidden\" name=\"fulltext_indexes\" value=\"";
        // line 14
        (( !twig_test_empty(($context["fulltext_indexes"] ?? null))) ? (print (twig_escape_filter($this->env, ($context["fulltext_indexes"] ?? null), "html", null, true))) : (print ("[]")));
        echo "\">
    <input type=\"hidden\" name=\"spatial_indexes\" value=\"";
        // line 16
        (( !twig_test_empty(($context["spatial_indexes"] ?? null))) ? (print (twig_escape_filter($this->env, ($context["spatial_indexes"] ?? null), "html", null, true))) : (print ("[]")));
        echo "\">

    ";
        // line 18
        if ((($context["action"] ?? null) == "/table/create")) {
            // line 19
            echo "        <div id=\"table_name_col_no_outer\">
            <table id=\"table_name_col_no\" class=\"table table-borderless tdblock\">
                <tr class=\"align-middle float-start\">
                    <td>";
echo _gettext("Table name");
            // line 22
            echo ":
                    <input type=\"text\"
                        name=\"table\"
                        size=\"40\"
                        maxlength=\"64\"
                        value=\"";
            // line 27
            ((array_key_exists("table", $context)) ? (print (twig_escape_filter($this->env, ($context["table"] ?? null), "html", null, true))) : (print ("")));
            echo "\"
                        class=\"textfield\" autofocus required>
                    </td>
                    <td>
                        ";
echo _gettext("Add");
            // line 32
            echo "                        <input type=\"number\"
                            id=\"added_fields\"
                            name=\"added_fields\"
                            size=\"2\"
                            value=\"1\"
                            min=\"1\"
                            onfocus=\"this.select()\">
                        ";
echo _gettext("column(s)");
            // line 40
            echo "                        <input class=\"btn btn-secondary\" type=\"button\"
                            name=\"submit_num_fields\"
                            value=\"";
echo _gettext("Go");
            // line 42
            echo "\">
                    </td>
                </tr>
            </table>
        </div>
    ";
        }
        // line 48
        echo "    ";
        if (is_iterable(($context["content_cells"] ?? null))) {
            // line 49
            echo "        ";
            $this->loadTemplate("columns_definitions/table_fields_definitions.twig", "columns_definitions/column_definitions_form.twig", 49)->display(twig_to_array(["is_backup" =>             // line 50
($context["is_backup"] ?? null), "fields_meta" =>             // line 51
($context["fields_meta"] ?? null), "relation_parameters" =>             // line 52
($context["relation_parameters"] ?? null), "content_cells" =>             // line 53
($context["content_cells"] ?? null), "change_column" =>             // line 54
($context["change_column"] ?? null), "is_virtual_columns_supported" =>             // line 55
($context["is_virtual_columns_supported"] ?? null), "server_version" =>             // line 56
($context["server_version"] ?? null), "browse_mime" =>             // line 57
($context["browse_mime"] ?? null), "supports_stored_keyword" =>             // line 58
($context["supports_stored_keyword"] ?? null), "max_rows" =>             // line 59
($context["max_rows"] ?? null), "char_editing" =>             // line 60
($context["char_editing"] ?? null), "attribute_types" =>             // line 61
($context["attribute_types"] ?? null), "privs_available" =>             // line 62
($context["privs_available"] ?? null), "max_length" =>             // line 63
($context["max_length"] ?? null), "charsets" =>             // line 64
($context["charsets"] ?? null)]));
            // line 66
            echo "    ";
        }
        // line 67
        echo "    ";
        if ((($context["action"] ?? null) == "/table/create")) {
            // line 68
            echo "        <div class=\"responsivetable\">
        <table class=\"table table-borderless w-auto align-middle mb-0\">
            <tr class=\"align-top\">
                <th>";
echo _gettext("Table comments:");
            // line 71
            echo "</th>
                <td width=\"25\">&nbsp;</td>
                <th>";
echo _gettext("Collation:");
            // line 73
            echo "</th>
                <td width=\"25\">&nbsp;</td>
                <th>
                    ";
echo _gettext("Storage Engine:");
            // line 77
            echo "                    ";
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("Storage_engines");
            echo "
                </th>
                <td width=\"25\">&nbsp;</td>
                <th id=\"storage-engine-connection\">
                    ";
echo _gettext("Connection:");
            // line 82
            echo "                    ";
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("federated-create-connection");
            echo "
                </th>
            </tr>
            <tr>
                <td>
                    <input type=\"text\"
                        name=\"comment\"
                        size=\"40\"
                        maxlength=\"60\"
                        value=\"";
            // line 91
            ((array_key_exists("comment", $context)) ? (print (twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true))) : (print ("")));
            echo "\"
                        class=\"textfield\">
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                  <select lang=\"en\" dir=\"ltr\" name=\"tbl_collation\">
                    <option value=\"\"></option>
                    ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["charsets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                // line 99
                echo "                      <optgroup label=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 99), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 99), "html", null, true);
                echo "\">
                        ";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 100));
                foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                    // line 101
                    echo "                          <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 101), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 101), "html", null, true);
                    echo "\"";
                    // line 102
                    echo (((twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 102) == ($context["tbl_collation"] ?? null))) ? (" selected") : (""));
                    echo ">";
                    // line 103
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 103), "html", null, true);
                    // line 104
                    echo "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "                      </optgroup>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                  </select>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                  <select class=\"form-select\" name=\"tbl_storage_engine\" aria-label=\"";
echo _gettext("Storage engine");
            // line 112
            echo "\">
                    ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["storage_engines"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
                // line 114
                echo "                      <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 114), "html", null, true);
                echo "\"";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 114))) {
                    echo " title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 114), "html", null, true);
                    echo "\"";
                }
                // line 115
                echo ((((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 115)) == twig_lower_filter($this->env, ($context["tbl_storage_engine"] ?? null))) || (twig_test_empty(($context["tbl_storage_engine"] ?? null)) && twig_get_attribute($this->env, $this->source, $context["engine"], "is_default", [], "any", false, false, false, 115)))) ? (" selected") : (""));
                echo ">";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 116), "html", null, true);
                // line 117
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['engine'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                  </select>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                    <input type=\"text\"
                        name=\"connection\"
                        size=\"40\"
                        value=\"";
            // line 126
            ((array_key_exists("connection", $context)) ? (print (twig_escape_filter($this->env, ($context["connection"] ?? null), "html", null, true))) : (print ("")));
            echo "\"
                        placeholder=\"scheme://user_name[:password]@host_name[:port_num]/db_name/tbl_name\"
                        class=\"textfield\"
                        required=\"required\">
                </td>
            </tr>
            ";
            // line 132
            if (($context["have_partitioning"] ?? null)) {
                // line 133
                echo "                <tr class=\"align-top\">
                    <th colspan=\"5\">
                        ";
echo _gettext("PARTITION definition:");
                // line 136
                echo "                        ";
                echo $this->env->getFunction('show_mysql_docu')->getCallable()("Partitioning");
                echo "
                    </th>
                </tr>
                <tr>
                    <td colspan=\"5\">
                        ";
                // line 141
                $this->loadTemplate("columns_definitions/partitions.twig", "columns_definitions/column_definitions_form.twig", 141)->display(twig_to_array(["partition_details" =>                 // line 142
($context["partition_details"] ?? null), "storage_engines" =>                 // line 143
($context["storage_engines"] ?? null)]));
                // line 145
                echo "                    </td>
                </tr>
            ";
            }
            // line 148
            echo "        </table>
        </div>
    ";
        }
        // line 151
        echo "    <div class=\"card mt-3\">
      <div class=\"card-body\">
        ";
        // line 153
        if (((($context["action"] ?? null) == "/table/add-field") || (($context["action"] ?? null) == "/table/structure/save"))) {
            // line 154
            echo "            <input type=\"checkbox\" name=\"online_transaction\" value=\"ONLINE_TRANSACTION_ENABLED\" />";
echo _pgettext("Online transaction part of the SQL DDL for InnoDB", "Online transaction");
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("innodb-online-ddl");
            echo "
        ";
        }
        // line 156
        echo "        <input class=\"btn btn-secondary preview_sql\" type=\"button\"
            value=\"";
echo _gettext("Preview SQL");
        // line 157
        echo "\">
        <input class=\"btn btn-primary\" type=\"submit\"
            name=\"do_save_data\"
            value=\"";
echo _gettext("Save");
        // line 160
        echo "\">
      </div>
    </div>
    <div id=\"properties_message\"></div>
     ";
        // line 164
        if (($context["is_integers_length_restricted"] ?? null)) {
            // line 165
            echo "        <div class=\"alert alert-primary\" id=\"length_not_allowed\" role=\"alert\">
            ";
            // line 166
            echo $this->env->getFunction('get_image')->getCallable()("s_notice");
            echo "
            ";
echo _gettext("The column width of integer types is ignored in your MySQL version unless defining a TINYINT(1) column");
            // line 168
            echo "            ";
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("", false, "https://dev.mysql.com/doc/relnotes/mysql/8.0/en/news-8-0-19.html");
            echo "
        </div>
     ";
        }
        // line 171
        echo "</form>
<div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">";
echo _gettext("Loading");
        // line 176
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
        // line 177
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">";
echo _gettext("Close");
        // line 182
        echo "</button>
      </div>
    </div>
  </div>
</div>

";
        // line 189
        echo twig_include($this->env, $context, "modals/enum_set_editor.twig");
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "columns_definitions/column_definitions_form.twig";
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
        return array (  395 => 189,  387 => 182,  379 => 177,  375 => 176,  367 => 171,  360 => 168,  355 => 166,  352 => 165,  350 => 164,  344 => 160,  338 => 157,  334 => 156,  327 => 154,  325 => 153,  321 => 151,  316 => 148,  311 => 145,  309 => 143,  308 => 142,  307 => 141,  298 => 136,  293 => 133,  291 => 132,  282 => 126,  273 => 119,  266 => 117,  264 => 116,  261 => 115,  252 => 114,  248 => 113,  245 => 112,  238 => 108,  231 => 106,  224 => 104,  222 => 103,  219 => 102,  213 => 101,  209 => 100,  202 => 99,  198 => 98,  188 => 91,  175 => 82,  166 => 77,  160 => 73,  155 => 71,  149 => 68,  146 => 67,  143 => 66,  141 => 64,  140 => 63,  139 => 62,  138 => 61,  137 => 60,  136 => 59,  135 => 58,  134 => 57,  133 => 56,  132 => 55,  131 => 54,  130 => 53,  129 => 52,  128 => 51,  127 => 50,  125 => 49,  122 => 48,  114 => 42,  109 => 40,  99 => 32,  91 => 27,  84 => 22,  78 => 19,  76 => 18,  71 => 16,  67 => 14,  63 => 12,  59 => 10,  55 => 8,  53 => 7,  51 => 6,  49 => 5,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "columns_definitions/column_definitions_form.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\columns_definitions\\column_definitions_form.twig");
    }
}
