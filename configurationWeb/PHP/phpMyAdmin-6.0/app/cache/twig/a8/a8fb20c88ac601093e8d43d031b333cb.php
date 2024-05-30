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

/* table/operations/index.twig */
class __TwigTemplate_348b95e1fbd4d105735681707f47af45 extends Template
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
        echo twig_escape_filter($this->env, _gettext("Table operations"), "html", null, true);
        echo "</h2>

";
        // line 4
        if ( !($context["hide_order_table"] ?? null)) {
            // line 5
            echo "  <form method=\"post\" id=\"alterTableOrderby\" action=\"";
            echo $this->env->getFunction('url')->getCallable()("/table/operations");
            echo "\">
    ";
            // line 6
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
            echo "
    <input type=\"hidden\" name=\"submitorderby\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">";
echo _gettext("Alter table order by");
            // line 10
            echo "</div>
      <div class=\"card-body\">
        <div class=\"row g-3\">
          <div class=\"col-auto\">
            <label class=\"visually-hidden\" for=\"tableOrderFieldSelect\">";
echo _gettext("Column");
            // line 14
            echo "</label>
            <select id=\"tableOrderFieldSelect\" class=\"form-select\" name=\"order_field\" aria-describedby=\"tableOrderFieldSelectHelp\">
              ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 17
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "field", [], "any", false, false, false, 17), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "field", [], "any", false, false, false, 17), "html", null, true);
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            </select>
            <small id=\"tableOrderFieldSelectHelp\" class=\"form-text text-body-secondary\">
              ";
echo _pgettext("Alter table order by a single field.", "(singly)");
            // line 22
            echo "            </small>
          </div>

          <div class=\"col-auto\">
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderAscRadio\" name=\"order_order\" type=\"radio\" value=\"asc\" checked>
              <label class=\"form-check-label\" for=\"tableOrderAscRadio\">";
echo _gettext("Ascending");
            // line 28
            echo "</label>
            </div>
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderDescRadio\" name=\"order_order\" type=\"radio\" value=\"desc\">
              <label class=\"form-check-label\" for=\"tableOrderDescRadio\">";
echo _gettext("Descending");
            // line 32
            echo "</label>
            </div>
          </div>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Go");
            // line 39
            echo "\">
      </div>
    </div>
  </form>
";
        }
        // line 44
        echo "
<form method=\"post\" action=\"";
        // line 45
        echo $this->env->getFunction('url')->getCallable()("/table/operations");
        echo "\" id=\"moveTableForm\" class=\"ajax\" onsubmit=\"return Functions.emptyCheckTheField(this, 'new_name')\">
  ";
        // line 46
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"what\" value=\"data\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">";
echo _gettext("Move table to (database.table)");
        // line 51
        echo "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            ";
        // line 56
        if ( !twig_test_empty(($context["database_list"] ?? null))) {
            // line 57
            echo "              <select id=\"moveTableDatabaseInput\" class=\"form-select\" name=\"target_db\" aria-label=\"";
echo _gettext("Database");
            echo "\">
                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["database_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["each_db"]) {
                // line 59
                echo "                  <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 59), "html", null, true);
                echo "\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["each_db"], "is_selected", [], "any", false, false, false, 59)) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 59), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_db'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "              </select>
            ";
        } else {
            // line 63
            echo "              <input id=\"moveTableDatabaseInput\" class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"";
            echo twig_escape_filter($this->env, ($context["db"] ?? null), "html", null, true);
            echo "\" aria-label=\"";
echo _gettext("Database");
            echo "\">
            ";
        }
        // line 65
        echo "            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" required=\"required\" name=\"new_name\" maxlength=\"64\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["table"] ?? null), "html", null, true);
        echo "\" aria-label=\"";
echo _gettext("Table");
        echo "\">
          </div>
        </div>
      </div>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_mv\">
        <label class=\"form-check-label\" for=\"checkbox_auto_increment_mv\">";
echo _gettext("Add AUTO_INCREMENT value");
        // line 73
        echo "</label>
      </div>
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_tables_move\"";
        // line 77
        if (($context["has_privileges"] ?? null)) {
            echo " checked";
        } else {
            echo " title=\"";
echo _gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.");
            // line 78
            echo "\" disabled";
        }
        echo ">
        <label class=\"form-check-label\" for=\"checkbox_privileges_tables_move\">
          ";
echo _gettext("Adjust privileges");
        // line 81
        echo "          ";
        echo $this->env->getFunction('show_docu')->getCallable()("faq", "faq6-39");
        echo "
        </label>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_move\" value=\"";
echo _gettext("Go");
        // line 87
        echo "\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"";
        // line 92
        echo $this->env->getFunction('url')->getCallable()("/table/operations");
        echo "\" id=\"tableOptionsForm\" class=\"ajax\">
  ";
        // line 93
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"submitoptions\" value=\"1\">
  <input type=\"hidden\" name=\"prev_comment\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, ($context["table_comment"] ?? null), "html", null, true);
        echo "\">
  ";
        // line 97
        if (($context["has_auto_increment"] ?? null)) {
            // line 98
            echo "    <input type=\"hidden\" name=\"hidden_auto_increment\" value=\"";
            echo twig_escape_filter($this->env, ($context["auto_increment"] ?? null), "html", null, true);
            echo "\">
  ";
        }
        // line 100
        echo "
  <div class=\"card mb-2\">
    <div class=\"card-header\">";
echo _gettext("Table options");
        // line 102
        echo "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"renameTableInput\">";
echo _gettext("Rename table to");
        // line 106
        echo "</label>
        </div>
        <div class=\"col-6\">
          <input class=\"form-control\" id=\"renameTableInput\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, ($context["table"] ?? null), "html", null, true);
        echo "\" required>
        </div>
        <div class=\"form-check col-12\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_table_options\"";
        // line 113
        if (($context["has_privileges"] ?? null)) {
            echo " checked";
        } else {
            echo " title=\"";
echo _gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.");
            // line 114
            echo "\" disabled";
        }
        echo ">
          <label class=\"form-check-label\" for=\"checkbox_privileges_table_options\">
            ";
echo _gettext("Adjust privileges");
        // line 117
        echo "            ";
        echo $this->env->getFunction('show_docu')->getCallable()("faq", "faq6-39");
        echo "
          </label>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"tableCommentsInput\">";
echo _gettext("Table comments");
        // line 124
        echo "</label>
        </div>
        <div class=\"col-6\">
          <input class=\"form-control\" id=\"tableCommentsInput\" type=\"text\" name=\"comment\" maxlength=\"2048\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, ($context["table_comment"] ?? null), "html", null, true);
        echo "\">
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label class=\"text-nowrap\" for=\"newTableStorageEngineSelect\">
            ";
echo _gettext("Storage engine");
        // line 135
        echo "            ";
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("Storage_engines");
        echo "
          </label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" name=\"new_tbl_storage_engine\" id=\"newTableStorageEngineSelect\">
            ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["storage_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
            // line 141
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 141), "html", null, true);
            echo "\"";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 141))) {
                echo " title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 141), "html", null, true);
                echo "\"";
            }
            // line 142
            echo ((((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 142)) == twig_lower_filter($this->env, ($context["storage_engine"] ?? null))) || (twig_test_empty(($context["storage_engine"] ?? null)) && twig_get_attribute($this->env, $this->source, $context["engine"], "is_default", [], "any", false, false, false, 142)))) ? (" selected") : (""));
            echo ">";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 143), "html", null, true);
            // line 144
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "          </select>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"collationSelect\">";
echo _gettext("Collation");
        // line 152
        echo "</label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" id=\"collationSelect\" lang=\"en\" dir=\"ltr\" name=\"tbl_collation\">
            <option value=\"\"></option>
            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["charsets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 158
            echo "              <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 158), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getDescription", [], "method", false, false, false, 158), "html", null, true);
            echo "\">
                ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = ($context["collations"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 159)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 160
                echo "                  <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 160), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "getDescription", [], "method", false, false, false, 160), "html", null, true);
                echo "\"";
                echo (((($context["tbl_collation"] ?? null) == twig_get_attribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 160))) ? (" selected") : (""));
                echo ">
                    ";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 161), "html", null, true);
                echo "
                  </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "              </optgroup>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "          </select>
        </div>

        <div class=\"form-check col-12 ms-3\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"change_all_collations\" value=\"1\" id=\"checkbox_change_all_collations\">
          <label class=\"form-check-label\" for=\"checkbox_change_all_collations\">";
echo _gettext("Change all column collations");
        // line 171
        echo "</label>
        </div>
      </div>

      ";
        // line 175
        if (($context["has_pack_keys"] ?? null)) {
            // line 176
            echo "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-6\">
            <label for=\"new_pack_keys\">PACK_KEYS</label>
          </div>
          <div class=\"col-6\">
            <select class=\"form-select\" name=\"new_pack_keys\" id=\"new_pack_keys\">
              <option value=\"DEFAULT\"";
            // line 182
            echo (((($context["pack_keys"] ?? null) == "DEFAULT")) ? (" selected") : (""));
            echo ">DEFAULT</option>
              <option value=\"0\"";
            // line 183
            echo (((($context["pack_keys"] ?? null) == "0")) ? (" selected") : (""));
            echo ">0</option>
              <option value=\"1\"";
            // line 184
            echo (((($context["pack_keys"] ?? null) == "1")) ? (" selected") : (""));
            echo ">1</option>
            </select>
          </div>
        </div>
      ";
        }
        // line 189
        echo "
      ";
        // line 190
        if (($context["has_checksum_and_delay_key_write"] ?? null)) {
            // line 191
            echo "        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_checksum\" id=\"new_checksum\" value=\"1\"";
            // line 192
            echo (((($context["checksum"] ?? null) == "1")) ? (" checked") : (""));
            echo ">
          <label class=\"form-check-label\" for=\"new_checksum\">CHECKSUM</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_delay_key_write\" id=\"new_delay_key_write\" value=\"1\"";
            // line 197
            echo (((($context["delay_key_write"] ?? null) == "1")) ? (" checked") : (""));
            echo ">
          <label class=\"form-check-label\" for=\"new_delay_key_write\">DELAY_KEY_WRITE</label>
        </div>
      ";
        }
        // line 201
        echo "
      ";
        // line 202
        if (($context["has_transactional_and_page_checksum"] ?? null)) {
            // line 203
            echo "        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_transactional\" id=\"new_transactional\" value=\"1\"";
            // line 204
            echo (((($context["transactional"] ?? null) == "1")) ? (" checked") : (""));
            echo ">
          <label class=\"form-check-label\" for=\"new_transactional\">TRANSACTIONAL</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_page_checksum\" id=\"new_page_checksum\" value=\"1\"";
            // line 209
            echo (((($context["page_checksum"] ?? null) == "1")) ? (" checked") : (""));
            echo ">
          <label class=\"form-check-label\" for=\"new_page_checksum\">PAGE_CHECKSUM</label>
        </div>
      ";
        }
        // line 213
        echo "
      ";
        // line 214
        if (($context["has_auto_increment"] ?? null)) {
            // line 215
            echo "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"auto_increment_opt\">AUTO_INCREMENT</label>
          </div>
          <div class=\"col-12\">
            <input class=\"form-control\" id=\"auto_increment_opt\" type=\"number\" name=\"new_auto_increment\" value=\"";
            // line 220
            echo twig_escape_filter($this->env, ($context["auto_increment"] ?? null), "html", null, true);
            echo "\">
          </div>
        </div>
      ";
        }
        // line 224
        echo "
      ";
        // line 225
        if ( !twig_test_empty(($context["row_formats"] ?? null))) {
            // line 226
            echo "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"new_row_format\">ROW_FORMAT</label>
          </div>
          <div class=\"col-12\">
            <select class=\"form-select\" id=\"new_row_format\" name=\"new_row_format\">
              ";
            // line 232
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["row_formats"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row_format"]) {
                // line 233
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["row_format"], "html", null, true);
                echo "\"";
                echo ((($context["row_format"] == twig_upper_filter($this->env, ($context["row_format_current"] ?? null)))) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $context["row_format"], "html", null, true);
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row_format'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "            </select>
          </div>
        </div>
      ";
        }
        // line 239
        echo "    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Go");
        // line 242
        echo "\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"";
        // line 247
        echo $this->env->getFunction('url')->getCallable()("/table/operations");
        echo "\" name=\"copyTable\" id=\"copyTable\" class=\"ajax\" onsubmit=\"return Functions.emptyCheckTheField(this, 'new_name')\">
  ";
        // line 248
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
  <input type=\"hidden\" name=\"reload\" value=\"1\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">";
echo _gettext("Copy table to (database.table)");
        // line 252
        echo "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            ";
        // line 257
        if ( !twig_test_empty(($context["database_list"] ?? null))) {
            // line 258
            echo "              <select class=\"form-select\" name=\"target_db\" aria-label=\"";
echo _gettext("Database");
            echo "\">
                ";
            // line 259
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["database_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["each_db"]) {
                // line 260
                echo "                  <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 260), "html", null, true);
                echo "\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["each_db"], "is_selected", [], "any", false, false, false, 260)) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 260), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_db'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 262
            echo "              </select>
            ";
        } else {
            // line 264
            echo "              <input class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"";
            echo twig_escape_filter($this->env, ($context["db"] ?? null), "html", null, true);
            echo "\" aria-label=\"";
echo _gettext("Database");
            echo "\">
            ";
        }
        // line 266
        echo "            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"";
        // line 267
        echo twig_escape_filter($this->env, ($context["table"] ?? null), "html", null, true);
        echo "\" aria-label=\"";
echo _gettext("Table");
        echo "\" required>
          </div>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio1\" value=\"structure\">
          <label class=\"form-check-label\" for=\"whatRadio1\">
            ";
echo _gettext("Structure only");
        // line 277
        echo "          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio2\" value=\"data\" checked>
          <label class=\"form-check-label\" for=\"whatRadio2\">
            ";
echo _gettext("Structure and data");
        // line 283
        echo "          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio3\" value=\"dataonly\">
          <label class=\"form-check-label\" for=\"whatRadio3\">
            ";
echo _gettext("Data only");
        // line 289
        echo "          </label>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"drop_if_exists\" value=\"true\" id=\"checkbox_drop\">
          <label class=\"form-check-label\" for=\"checkbox_drop\">";
        // line 296
        echo twig_escape_filter($this->env, twig_sprintf(_gettext("Add %s"), "DROP TABLE"), "html", null, true);
        echo "</label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_cp\">
          <label class=\"form-check-label\" for=\"checkbox_auto_increment_cp\">";
echo _gettext("Add AUTO_INCREMENT value");
        // line 301
        echo "</label>
        </div>

        ";
        // line 304
        if (($context["has_foreign_keys"] ?? null)) {
            // line 305
            echo "          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"add_constraints\" value=\"1\" id=\"checkbox_constraints\" checked>
            <label class=\"form-check-label\" for=\"checkbox_constraints\">";
echo _gettext("Add constraints");
            // line 307
            echo "</label>
          </div>
        ";
        }
        // line 310
        echo "
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_adjust_privileges\"";
        // line 313
        if (($context["has_privileges"] ?? null)) {
            echo " checked";
        } else {
            echo " title=\"";
echo _gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.");
            // line 314
            echo "\" disabled";
        }
        echo ">
          <label class=\"form-check-label\" for=\"checkbox_adjust_privileges\">
            ";
echo _gettext("Adjust privileges");
        // line 317
        echo "            ";
        echo $this->env->getFunction('show_docu')->getCallable()("faq", "faq6-39");
        echo "
          </label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"switch_to_new\" value=\"true\" id=\"checkbox_switch\"";
        // line 322
        echo ((($context["switch_to_new"] ?? null)) ? (" checked") : (""));
        echo ">
          <label class=\"form-check-label\" for=\"checkbox_switch\">";
echo _gettext("Switch to copied table");
        // line 323
        echo "</label>
        </div>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_copy\" value=\"";
echo _gettext("Go");
        // line 329
        echo "\">
    </div>
  </div>
</form>

<div class=\"card mb-2\">
  <div class=\"card-header\">";
echo _gettext("Table maintenance");
        // line 335
        echo "</div>
  <ul class=\"list-group list-group-flush\" id=\"tbl_maintenance\">
    ";
        // line 337
        if (twig_in_filter(($context["storage_engine"] ?? null), ["MYISAM", "ARIA", "INNODB", "BERKELEYDB", "TOKUDB"])) {
            // line 338
            echo "      <li class=\"list-group-item\">
        <a href=\"";
            // line 339
            echo $this->env->getFunction('url')->getCallable()("/table/maintenance/analyze");
            echo "\" data-post=\"";
            echo $this->env->getFunction('get_common')->getCallable()(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [($context["table"] ?? null)]], "", false);
            echo "\">
          ";
echo _gettext("Analyze table");
            // line 341
            echo "        </a>
        ";
            // line 342
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("ANALYZE_TABLE");
            echo "
      </li>
    ";
        }
        // line 345
        echo "
    ";
        // line 346
        if (twig_in_filter(($context["storage_engine"] ?? null), ["MYISAM", "ARIA", "INNODB", "TOKUDB"])) {
            // line 347
            echo "      <li class=\"list-group-item\">
        <a href=\"";
            // line 348
            echo $this->env->getFunction('url')->getCallable()("/table/maintenance/check");
            echo "\" data-post=\"";
            echo $this->env->getFunction('get_common')->getCallable()(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [($context["table"] ?? null)]], "", false);
            echo "\">
          ";
echo _gettext("Check table");
            // line 350
            echo "        </a>
        ";
            // line 351
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("CHECK_TABLE");
            echo "
      </li>
    ";
        }
        // line 354
        echo "
    <li class=\"list-group-item\">
      <a href=\"";
        // line 356
        echo $this->env->getFunction('url')->getCallable()("/table/maintenance/checksum");
        echo "\" data-post=\"";
        echo $this->env->getFunction('get_common')->getCallable()(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [($context["table"] ?? null)]], "", false);
        echo "\">
        ";
echo _gettext("Checksum table");
        // line 358
        echo "      </a>
      ";
        // line 359
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("CHECKSUM_TABLE");
        echo "
    </li>

    ";
        // line 362
        if ((($context["storage_engine"] ?? null) == "INNODB")) {
            // line 363
            echo "      <li class=\"list-group-item\">
        <a class=\"maintain_action ajax\" href=\"";
            // line 364
            echo $this->env->getFunction('url')->getCallable()("/sql");
            echo "\" data-post=\"";
            echo $this->env->getFunction('get_common')->getCallable()(twig_array_merge(($context["url_params"] ?? null), ["sql_query" => (("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(($context["table"] ?? null))) . " ENGINE = InnoDB;")]), "", false);
            echo "\">
          ";
echo _gettext("Defragment table");
            // line 366
            echo "        </a>
        ";
            // line 367
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("InnoDB_File_Defragmenting");
            echo "
      </li>
    ";
        }
        // line 370
        echo "
    <li class=\"list-group-item\">
      <a class=\"maintain_action ajax\" href=\"";
        // line 372
        echo $this->env->getFunction('url')->getCallable()("/sql");
        echo "\" data-post=\"";
        echo $this->env->getFunction('get_common')->getCallable()(twig_array_merge(($context["url_params"] ?? null), ["sql_query" => ("FLUSH TABLE " . $this->env->getFunction('backquote')->getCallable()(        // line 373
($context["table"] ?? null))), "message_to_show" => twig_sprintf(_gettext("Table %s has been flushed."), twig_escape_filter($this->env,         // line 374
($context["table"] ?? null))), "reload" => true]), "", false);
        // line 376
        echo "\">
        ";
echo _gettext("Flush the table (FLUSH)");
        // line 378
        echo "      </a>
      ";
        // line 379
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("FLUSH");
        echo "
    </li>

    ";
        // line 382
        if (twig_in_filter(($context["storage_engine"] ?? null), ["MYISAM", "ARIA", "INNODB", "BERKELEYDB", "TOKUDB"])) {
            // line 383
            echo "      <li class=\"list-group-item\">
        <a href=\"";
            // line 384
            echo $this->env->getFunction('url')->getCallable()("/table/maintenance/optimize");
            echo "\" data-post=\"";
            echo $this->env->getFunction('get_common')->getCallable()(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [($context["table"] ?? null)]], "", false);
            echo "\">
          ";
echo _gettext("Optimize table");
            // line 386
            echo "        </a>
        ";
            // line 387
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("OPTIMIZE_TABLE");
            echo "
      </li>
    ";
        }
        // line 390
        echo "
    ";
        // line 391
        if (twig_in_filter(($context["storage_engine"] ?? null), ["MYISAM", "ARIA"])) {
            // line 392
            echo "      <li class=\"list-group-item\">
        <a href=\"";
            // line 393
            echo $this->env->getFunction('url')->getCallable()("/table/maintenance/repair");
            echo "\" data-post=\"";
            echo $this->env->getFunction('get_common')->getCallable()(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [($context["table"] ?? null)]], "", false);
            echo "\">
          ";
echo _gettext("Repair table");
            // line 395
            echo "        </a>
        ";
            // line 396
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("REPAIR_TABLE");
            echo "
      </li>
    ";
        }
        // line 399
        echo "  </ul>
</div>

";
        // line 402
        if ( !($context["is_system_schema"] ?? null)) {
            // line 403
            echo "  <div class=\"card mb-2\">
    <div class=\"card-header\">";
echo _gettext("Delete data or table");
            // line 404
            echo "</div>
    <ul class=\"list-group list-group-flush\">
      ";
            // line 406
            if ( !($context["is_view"] ?? null)) {
                // line 407
                echo "        <li class=\"list-group-item\">
          ";
                // line 408
                echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/sql"), twig_array_merge(                // line 410
($context["url_params"] ?? null), ["sql_query" => ((("TRUNCATE TABLE " . $this->env->getFunction('backquote')->getCallable()(                // line 411
($context["db"] ?? null))) . ".") . $this->env->getFunction('backquote')->getCallable()(($context["table"] ?? null))), "goto" => $this->env->getFunction('url')->getCallable()("/table/structure"), "reload" => true, "message_to_show" => twig_escape_filter($this->env, twig_sprintf(_gettext("Table %s has been emptied."),                 // line 414
($context["table"] ?? null)))]), _gettext("Empty the table (TRUNCATE)"), ["id" => "truncate_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("TRUNCATE TABLE " . $this->env->getFunction('backquote')->getCallable()(                // line 420
($context["db"] ?? null))) . ".") . $this->env->getFunction('backquote')->getCallable()(($context["table"] ?? null)))]);
                // line 422
                echo "
          ";
                // line 423
                echo $this->env->getFunction('show_mysql_docu')->getCallable()("TRUNCATE_TABLE");
                echo "
        </li>
        <li class=\"list-group-item\">
          ";
                // line 426
                echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/sql"), twig_array_merge(                // line 428
($context["url_params"] ?? null), ["sql_query" => ((("DELETE FROM " . $this->env->getFunction('backquote')->getCallable()(                // line 429
($context["db"] ?? null))) . ".") . $this->env->getFunction('backquote')->getCallable()(($context["table"] ?? null))), "goto" => $this->env->getFunction('url')->getCallable()("/table/structure"), "reload" => true, "message_to_show" => twig_escape_filter($this->env, twig_sprintf(_gettext("Table %s has been emptied."),                 // line 432
($context["table"] ?? null)))]), _gettext("Empty the table (DELETE FROM)"), ["id" => "delete_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("DELETE FROM " . $this->env->getFunction('backquote')->getCallable()(                // line 438
($context["db"] ?? null))) . ".") . $this->env->getFunction('backquote')->getCallable()(($context["table"] ?? null)))]);
                // line 440
                echo "
          ";
                // line 441
                echo $this->env->getFunction('show_mysql_docu')->getCallable()("DELETE");
                echo "
        </li>
      ";
            }
            // line 444
            echo "      <li class=\"list-group-item\">
        ";
            // line 445
            echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/sql"), twig_array_merge(            // line 447
($context["url_params"] ?? null), ["sql_query" => ((("DROP TABLE " . $this->env->getFunction('backquote')->getCallable()(            // line 448
($context["db"] ?? null))) . ".") . $this->env->getFunction('backquote')->getCallable()(($context["table"] ?? null))), "goto" => $this->env->getFunction('url')->getCallable()("/database/operations"), "reload" => true, "purge" => true, "message_to_show" => ((            // line 452
($context["is_view"] ?? null)) ? (twig_escape_filter($this->env, twig_sprintf(_gettext("View %s has been dropped."), ($context["table"] ?? null)))) : (twig_escape_filter($this->env, twig_sprintf(_gettext("Table %s has been dropped."), ($context["table"] ?? null))))), "table" =>             // line 453
($context["table"] ?? null)]), _gettext("Delete the table (DROP)"), ["id" => "drop_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("DROP TABLE " . $this->env->getFunction('backquote')->getCallable()(            // line 459
($context["db"] ?? null))) . ".") . $this->env->getFunction('backquote')->getCallable()(($context["table"] ?? null)))]);
            // line 461
            echo "
        ";
            // line 462
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("DROP_TABLE");
            echo "
      </li>
    </ul>
  </div>
";
        }
        // line 467
        echo "
";
        // line 468
        if ( !twig_test_empty(($context["partitions"] ?? null))) {
            // line 469
            echo "  <form id=\"partitionsForm\" class=\"ajax\" method=\"post\" action=\"";
            echo $this->env->getFunction('url')->getCallable()("/table/operations");
            echo "\">
    ";
            // line 470
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
            echo "
    <input type=\"hidden\" name=\"submit_partition\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">
        ";
echo _gettext("Partition maintenance");
            // line 476
            echo "        ";
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("partitioning_maintenance");
            echo "
      </div>

      <div class=\"card-body\">
        <div class=\"mb-3\">
          <label for=\"partition_name\">";
echo _gettext("Partition");
            // line 481
            echo "</label>
          <select class=\"form-select resize-vertical\" id=\"partition_name\" name=\"partition_name[]\" multiple required>
            ";
            // line 483
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["partitions"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["partition"]) {
                // line 484
                echo "              <option value=\"";
                echo twig_escape_filter($this->env, $context["partition"], "html", null, true);
                echo "\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 484)) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $context["partition"], "html", null, true);
                echo "</option>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 486
            echo "          </select>
        </div>

        <div class=\"mb-3 form-check-inline\">
          ";
            // line 490
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["partitions_choices"] ?? null));
            foreach ($context['_seq'] as $context["value"] => $context["description"]) {
                // line 491
                echo "            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"partition_operation\" id=\"partitionOperationRadio";
                // line 492
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["value"]), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
                echo ((($context["value"] == "ANALYZE")) ? (" checked") : (""));
                echo ">
              <label class=\"form-check-label\" for=\"partitionOperationRadio";
                // line 493
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["value"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["description"], "html", null, true);
                echo "</label>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 496
            echo "        </div>

        <div class=\"form-text\">
          <a href=\"";
            // line 499
            echo $this->env->getFunction('url')->getCallable()("/sql", twig_array_merge(($context["url_params"] ?? null), ["sql_query" => (("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(            // line 500
($context["table"] ?? null))) . " REMOVE PARTITIONING;")]));
            // line 501
            echo "\">";
echo _gettext("Remove partitioning");
            echo "</a>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Go");
            // line 506
            echo "\">
      </div>
    </div>
  </form>
";
        }
        // line 511
        echo "
";
        // line 512
        if ( !twig_test_empty(($context["foreigners"] ?? null))) {
            // line 513
            echo "  <div class=\"card mb-2\">
    <div class=\"card-header\">";
echo _gettext("Check referential integrity");
            // line 514
            echo "</div>
    <ul class=\"list-group list-group-flush\">
      ";
            // line 516
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["foreigners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["foreign"]) {
                // line 517
                echo "        <li class=\"list-group-item\">
          <a class=\"text-nowrap\" href=\"";
                // line 518
                echo $this->env->getFunction('url')->getCallable()("/sql", twig_get_attribute($this->env, $this->source, $context["foreign"], "params", [], "any", false, false, false, 518));
                echo "\">
            ";
                // line 519
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foreign"], "master", [], "any", false, false, false, 519), "html", null, true);
                echo " -> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foreign"], "db", [], "any", false, false, false, 519), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foreign"], "table", [], "any", false, false, false, 519), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foreign"], "field", [], "any", false, false, false, 519), "html", null, true);
                echo "
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foreign'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 523
            echo "    </ul>
  </div>
";
        }
        // line 526
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/operations/index.twig";
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
        return array (  1140 => 526,  1135 => 523,  1119 => 519,  1115 => 518,  1112 => 517,  1108 => 516,  1104 => 514,  1100 => 513,  1098 => 512,  1095 => 511,  1088 => 506,  1078 => 501,  1076 => 500,  1075 => 499,  1070 => 496,  1059 => 493,  1051 => 492,  1048 => 491,  1044 => 490,  1038 => 486,  1017 => 484,  1000 => 483,  996 => 481,  986 => 476,  977 => 470,  972 => 469,  970 => 468,  967 => 467,  959 => 462,  956 => 461,  954 => 459,  953 => 453,  952 => 452,  951 => 448,  950 => 447,  949 => 445,  946 => 444,  940 => 441,  937 => 440,  935 => 438,  934 => 432,  933 => 429,  932 => 428,  931 => 426,  925 => 423,  922 => 422,  920 => 420,  919 => 414,  918 => 411,  917 => 410,  916 => 408,  913 => 407,  911 => 406,  907 => 404,  903 => 403,  901 => 402,  896 => 399,  890 => 396,  887 => 395,  880 => 393,  877 => 392,  875 => 391,  872 => 390,  866 => 387,  863 => 386,  856 => 384,  853 => 383,  851 => 382,  845 => 379,  842 => 378,  838 => 376,  836 => 374,  835 => 373,  832 => 372,  828 => 370,  822 => 367,  819 => 366,  812 => 364,  809 => 363,  807 => 362,  801 => 359,  798 => 358,  791 => 356,  787 => 354,  781 => 351,  778 => 350,  771 => 348,  768 => 347,  766 => 346,  763 => 345,  757 => 342,  754 => 341,  747 => 339,  744 => 338,  742 => 337,  738 => 335,  729 => 329,  720 => 323,  715 => 322,  706 => 317,  699 => 314,  693 => 313,  689 => 310,  684 => 307,  679 => 305,  677 => 304,  672 => 301,  663 => 296,  654 => 289,  646 => 283,  638 => 277,  623 => 267,  620 => 266,  612 => 264,  608 => 262,  595 => 260,  591 => 259,  586 => 258,  584 => 257,  577 => 252,  569 => 248,  565 => 247,  558 => 242,  552 => 239,  546 => 235,  533 => 233,  529 => 232,  521 => 226,  519 => 225,  516 => 224,  509 => 220,  502 => 215,  500 => 214,  497 => 213,  490 => 209,  482 => 204,  479 => 203,  477 => 202,  474 => 201,  467 => 197,  459 => 192,  456 => 191,  454 => 190,  451 => 189,  443 => 184,  439 => 183,  435 => 182,  427 => 176,  425 => 175,  419 => 171,  411 => 166,  404 => 164,  395 => 161,  386 => 160,  382 => 159,  375 => 158,  371 => 157,  364 => 152,  355 => 146,  348 => 144,  346 => 143,  343 => 142,  334 => 141,  330 => 140,  321 => 135,  310 => 127,  305 => 124,  293 => 117,  286 => 114,  280 => 113,  274 => 109,  269 => 106,  262 => 102,  257 => 100,  251 => 98,  249 => 97,  245 => 96,  239 => 93,  235 => 92,  228 => 87,  217 => 81,  210 => 78,  204 => 77,  199 => 73,  186 => 66,  183 => 65,  175 => 63,  171 => 61,  158 => 59,  154 => 58,  149 => 57,  147 => 56,  140 => 51,  131 => 46,  127 => 45,  124 => 44,  117 => 39,  107 => 32,  100 => 28,  91 => 22,  86 => 19,  75 => 17,  71 => 16,  67 => 14,  60 => 10,  52 => 6,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/operations/index.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\table\\operations\\index.twig");
    }
}
