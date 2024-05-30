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

/* export.twig */
class __TwigTemplate_73315b46eb62f06051611313d0529e99 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'message' => [$this, 'block_message'],
            'selection_options' => [$this, 'block_selection_options'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container\">
  <h2 class=\"my-3\">
    ";
        // line 3
        echo $this->env->getFunction('get_image')->getCallable()("b_export", _gettext("Export"));
        echo "
    ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "  </h2>

  ";
        // line 7
        echo ($context["page_settings_error_html"] ?? null);
        echo "
  ";
        // line 8
        echo ($context["page_settings_html"] ?? null);
        echo "

  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getRuntime('PhpMyAdmin\FlashMessages')->getMessages());
        foreach ($context['_seq'] as $context["flash_key"] => $context["flash_messages"]) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flash_messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 12
                echo "      <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["flash_key"], "html", null, true);
                echo "\" role=\"alert\">
        ";
                // line 13
                echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['flash_key'], $context['flash_messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
  ";
        // line 18
        $this->displayBlock('message', $context, $blocks);
        // line 19
        echo "
  ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["templates"] ?? null), "is_enabled", [], "any", false, false, false, 20)) {
            // line 21
            echo "    <div class=\"card mb-3\">
      <div class=\"card-header\">";
echo _gettext("Export templates:");
            // line 22
            echo "</div>
      <div class=\"card-body row gy-3\">
        <form method=\"post\" action=\"";
            // line 24
            echo $this->env->getFunction('url')->getCallable()("/export/template/create");
            echo "\" class=\"col-12 col-md ajax\">
          <fieldset>
            <legend>";
echo _gettext("New template:");
            // line 26
            echo "</legend>
            <div class=\"row g-3 align-items-center\">
              <div class=\"col-auto\">
                <label for=\"templateName\" class=\"col-form-label\">";
echo _gettext("Template name");
            // line 29
            echo "</label>
              </div>
              <div class=\"col-auto\">
                <input class=\"form-control\" type=\"text\" name=\"templateName\" id=\"templateName\" maxlength=\"64\" placeholder=\"";
echo _gettext("Template name");
            // line 32
            echo "\" required>
              </div>
              <div class=\"col-auto\">
                <input class=\"btn btn-secondary\" type=\"submit\" name=\"createTemplate\" id=\"createTemplate\" value=\"";
echo _gettext("Create");
            // line 35
            echo "\">
              </div>
            </div>
          </fieldset>
        </form>

        <form method=\"post\" id=\"existingTemplatesForm\" class=\"col-12 col-md ajax\">
          <fieldset>
            <legend>";
echo _gettext("Existing templates:");
            // line 43
            echo "</legend>
            <div class=\"row g-3 align-items-center\">
              <div class=\"col-auto\">
                <label for=\"template\" class=\"col-form-label\">";
echo _gettext("Template:");
            // line 46
            echo "</label>
              </div>
              <div class=\"col-auto\">
                <select class=\"form-select\" name=\"template\" id=\"template\" required>
                  <option value=\"\">-- ";
echo _gettext("Select a template");
            // line 50
            echo " --</option>
                  ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["templates"] ?? null), "templates", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
                // line 52
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "getId", [], "method", false, false, false, 52), "html", null, true);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["template"], "getId", [], "method", false, false, false, 52) == twig_get_attribute($this->env, $this->source, ($context["templates"] ?? null), "selected", [], "any", false, false, false, 52))) ? (" selected") : (""));
                echo ">
                      ";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "getName", [], "method", false, false, false, 53), "html", null, true);
                echo "
                    </option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                </select>
              </div>
              <div class=\"col-auto\">
                <input class=\"btn btn-secondary\" type=\"submit\" formaction=\"";
            // line 59
            echo $this->env->getFunction('url')->getCallable()("/export/template/update");
            echo "\" name=\"updateTemplate\" id=\"updateTemplate\" value=\"";
echo _gettext("Update");
            echo "\">
              </div>
              <div class=\"col-auto\">
                <input class=\"btn btn-secondary\" type=\"submit\" formaction=\"";
            // line 62
            echo $this->env->getFunction('url')->getCallable()("/export/template/delete");
            echo "\" name=\"deleteTemplate\" id=\"deleteTemplate\" value=\"";
echo _gettext("Delete");
            echo "\">
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  ";
        }
        // line 70
        echo "
  ";
        // line 71
        if ( !twig_test_empty(($context["sql_query"] ?? null))) {
            // line 72
            echo "    <div class=\"card mb-3\">
      <div class=\"card-header\">
        ";
            // line 75
            echo "        ";
echo _gettext("SQL query:");
            // line 76
            echo "      </div>
      <div class=\"card-body\">
        <div id=\"sqlqueryform\">
          ";
            // line 80
            echo "          <input class=\"btn btn-secondary\" type=\"submit\" id=\"showsqlquery\" value=\"";
echo _gettext("Show SQL query");
            echo "\">
        </div>
        <div class=\"d-none\"></div>
      </div>
    </div>
    <div class=\"modal fade\" id=\"showSqlQueryModal\" tabindex=\"-1\" aria-labelledby=\"showSqlQueryModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"showSqlQueryModalLabel\">";
echo _gettext("Loading");
            // line 89
            echo "</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
            // line 90
            echo "\"></button>
          </div>
          <div class=\"modal-body\">
            <div id=\"export_sql_modal_content\">
              <code class=\"sql\">
                <pre id=\"sql_preview_query\">";
            // line 95
            echo twig_escape_filter($this->env, ($context["sql_query"] ?? null), "html", null, true);
            echo "</pre>
              </code>
            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
echo _gettext("Close");
            // line 100
            echo "</button>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 106
        echo "
  <form method=\"post\" action=\"";
        // line 107
        echo $this->env->getFunction('url')->getCallable()("/export");
        echo "\" name=\"dump\" class=\"disableAjax\">
    ";
        // line 108
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["hidden_inputs"] ?? null));
        echo "

    ";
        // line 110
        if ((($context["export_method"] ?? null) != "custom-no-form")) {
            // line 111
            echo "      <div class=\"card mb-3\" id=\"quick_or_custom\">
        <div class=\"card-header\">";
echo _gettext("Export method:");
            // line 112
            echo "</div>
        <div class=\"card-body\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"quick_or_custom\" value=\"quick\" id=\"radio_quick_export\"";
            // line 115
            echo (((($context["export_method"] ?? null) == "quick")) ? (" checked") : (""));
            echo ">
            <label class=\"form-check-label\" for=\"radio_quick_export\">";
echo _gettext("Quick - display only the minimal options");
            // line 116
            echo "</label>
          </div>
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"quick_or_custom\" value=\"custom\" id=\"radio_custom_export\"";
            // line 119
            echo (((($context["export_method"] ?? null) == "custom")) ? (" checked") : (""));
            echo ">
            <label class=\"form-check-label\" for=\"radio_custom_export\">";
echo _gettext("Custom - display all possible options");
            // line 120
            echo "</label>
          </div>
        </div>
      </div>
    ";
        }
        // line 125
        echo "
    <div class=\"card mb-3\" id=\"format\">
      <div class=\"card-header\">";
echo _gettext("Format:");
        // line 127
        echo "</div>
      <div class=\"card-body\">
        <select class=\"form-select\" id=\"plugins\" name=\"what\" aria-label=\"";
echo _gettext("File format to export");
        // line 129
        echo "\">
          ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plugins_choice"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 131
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 131), "html", null, true);
            echo "\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["option"], "is_selected", [], "any", false, false, false, 131)) ? (" selected") : (""));
            echo " data-is-binary=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["option"], "is_binary", [], "any", false, false, false, 131)) ? ("true") : ("false"));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "text", [], "any", false, false, false, 131), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "        </select>
      </div>
    </div>

    ";
        // line 137
        $this->displayBlock('selection_options', $context, $blocks);
        // line 138
        echo "
    ";
        // line 139
        if ( !twig_test_empty(($context["rows"] ?? null))) {
            // line 140
            echo "      <div class=\"card mb-3 d-none\" id=\"rows\">
        <div class=\"card-header\">";
echo _gettext("Rows:");
            // line 141
            echo "</div>
        <div class=\"card-body\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"allrows\" value=\"1\" id=\"radio_allrows_1\"";
            // line 144
            echo ((((null === twig_get_attribute($this->env, $this->source, ($context["rows"] ?? null), "allrows", [], "any", false, false, false, 144)) || (twig_get_attribute($this->env, $this->source, ($context["rows"] ?? null), "allrows", [], "any", false, false, false, 144) == 1))) ? (" checked") : (""));
            echo ">
            <label class=\"form-check-label\" for=\"radio_allrows_1\">";
echo _gettext("Dump all rows");
            // line 145
            echo "</label>
          </div>
          <div class=\"form-check mb-2\">
            <input class=\"form-check-input\" type=\"radio\" name=\"allrows\" value=\"0\" id=\"radio_allrows_0\"";
            // line 148
            echo ((( !(null === twig_get_attribute($this->env, $this->source, ($context["rows"] ?? null), "allrows", [], "any", false, false, false, 148)) && (twig_get_attribute($this->env, $this->source, ($context["rows"] ?? null), "allrows", [], "any", false, false, false, 148) == 0))) ? (" checked") : (""));
            echo ">
            <label class=\"form-check-label\" for=\"radio_allrows_0\">";
echo _gettext("Dump some row(s)");
            // line 149
            echo "</label>
          </div>
          <ul class=\"list-group\">
            <li class=\"list-group-item\">
              <label class=\"form-label\" for=\"limit_to\">";
echo _gettext("Number of rows:");
            // line 153
            echo "</label>
              <input class=\"form-control\" type=\"text\" id=\"limit_to\" name=\"limit_to\" size=\"5\" value=\"";
            // line 155
            if ( !(null === twig_get_attribute($this->env, $this->source, ($context["rows"] ?? null), "limit_to", [], "any", false, false, false, 155))) {
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rows"] ?? null), "limit_to", [], "any", false, false, false, 156), "html", null, true);
            } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 157
($context["rows"] ?? null), "unlim_num_rows", [], "any", false, false, false, 157)) && (twig_get_attribute($this->env, $this->source, ($context["rows"] ?? null), "unlim_num_rows", [], "any", false, false, false, 157) != 0))) {
                // line 158
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rows"] ?? null), "unlim_num_rows", [], "any", false, false, false, 158), "html", null, true);
            } else {
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rows"] ?? null), "number_of_rows", [], "any", false, false, false, 160), "html", null, true);
            }
            // line 161
            echo "\" onfocus=\"this.select()\">
            </li>
            <li class=\"list-group-item\">
              <label class=\"form-label\" for=\"limit_from\">";
echo _gettext("Row to begin at:");
            // line 164
            echo "</label>
              <input class=\"form-control\" type=\"text\" id=\"limit_from\" name=\"limit_from\" size=\"5\" value=\"";
            // line 165
            (( !(null === twig_get_attribute($this->env, $this->source, ($context["rows"] ?? null), "limit_from", [], "any", false, false, false, 165))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rows"] ?? null), "limit_from", [], "any", false, false, false, 165), "html", null, true))) : (print (0)));
            echo "\" onfocus=\"this.select()\">
            </li>
          </ul>
        </div>
      </div>
    ";
        }
        // line 171
        echo "
    ";
        // line 172
        if (($context["has_save_dir"] ?? null)) {
            // line 173
            echo "      <div class=\"card mb-3 d-none\" id=\"output_quick_export\">
        <div class=\"card-header\">";
echo _gettext("Output:");
            // line 174
            echo "</div>
        <div class=\"card-body\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"quick_export_onserver\" value=\"saveit\" id=\"checkbox_quick_dump_onserver\"";
            // line 177
            echo ((($context["export_is_checked"] ?? null)) ? (" checked") : (""));
            echo ">
            <label class=\"form-check-label\" for=\"checkbox_quick_dump_onserver\">
              ";
            // line 179
            echo twig_sprintf(_gettext("Save on server in the directory <strong>%s</strong>"), twig_escape_filter($this->env, ($context["save_dir"] ?? null)));
            echo "
            </label>
          </div>
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"quick_export_onserver_overwrite\" value=\"saveitover\" id=\"checkbox_quick_dump_onserver_overwrite\"";
            // line 184
            echo ((($context["export_overwrite_is_checked"] ?? null)) ? (" checked") : (""));
            echo ">
            <label class=\"form-check-label\" for=\"checkbox_quick_dump_onserver_overwrite\">
              ";
echo _gettext("Overwrite existing file(s)");
            // line 187
            echo "            </label>
          </div>
        </div>
      </div>
    ";
        }
        // line 192
        echo "
    <div class=\"modal fade\" id=\"renameExportModal\" tabindex=\"-1\" aria-labelledby=\"renameExportModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-xl\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"renameExportModalLabel\">";
echo _gettext("Rename exported databases/tables/columns");
        // line 197
        echo "</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
        // line 198
        echo "\"></button>
          </div>
          <div class=\"modal-body overflow-auto\">
            <table class=\"table align-middle mb-3\" id=\"alias_data\">
              <thead>
                <tr>
                  <th colspan=\"4\">
                    ";
echo _gettext("Defined aliases");
        // line 206
        echo "                  </th>
                </tr>
              </thead>

              <tbody>
                ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aliases"] ?? null));
        foreach ($context['_seq'] as $context["db"] => $context["db_data"]) {
            // line 212
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["db_data"], "alias", [], "any", true, true, false, 212) &&  !(null === twig_get_attribute($this->env, $this->source, $context["db_data"], "alias", [], "any", false, false, false, 212)))) {
                // line 213
                echo "                    <tr>
                      <th>";
echo _pgettext("Alias", "Database");
                // line 214
                echo "</th>
                      <td>";
                // line 215
                echo twig_escape_filter($this->env, $context["db"], "html", null, true);
                echo "</td>
                      <td>
                        <input name=\"aliases[";
                // line 217
                echo twig_escape_filter($this->env, $context["db"], "html", null, true);
                echo "][alias]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["db_data"], "alias", [], "any", false, false, false, 217), "html", null, true);
                echo "\" type=\"text\">
                      </td>
                      <td>
                        <button class=\"alias_remove btn btn-secondary\">";
echo _gettext("Remove");
                // line 220
                echo "</button>
                      </td>
                    </tr>
                  ";
            }
            // line 224
            echo "
                  ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, $context["db_data"], "tables", [], "any", true, true, false, 225) &&  !(null === twig_get_attribute($this->env, $this->source, $context["db_data"], "tables", [], "any", false, false, false, 225)))) ? (twig_get_attribute($this->env, $this->source, $context["db_data"], "tables", [], "any", false, false, false, 225)) : ([])));
            foreach ($context['_seq'] as $context["table"] => $context["table_data"]) {
                // line 226
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["table_data"], "alias", [], "any", true, true, false, 226) &&  !(null === twig_get_attribute($this->env, $this->source, $context["table_data"], "alias", [], "any", false, false, false, 226)))) {
                    // line 227
                    echo "                      <tr>
                        <th>";
echo _pgettext("Alias", "Table");
                    // line 228
                    echo "</th>
                        <td>";
                    // line 229
                    echo twig_escape_filter($this->env, $context["db"], "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                    echo "</td>
                        <td>
                          <input name=\"aliases[";
                    // line 231
                    echo twig_escape_filter($this->env, $context["db"], "html", null, true);
                    echo "][tables][";
                    echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                    echo "][alias]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["table_data"], "alias", [], "any", false, false, false, 231), "html", null, true);
                    echo "\" type=\"text\">
                        </td>
                        <td>
                          <button class=\"alias_remove btn btn-secondary\">";
echo _gettext("Remove");
                    // line 234
                    echo "</button>
                        </td>
                      </tr>
                    ";
                }
                // line 238
                echo "
                    ";
                // line 239
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, $context["table_data"], "columns", [], "any", true, true, false, 239) &&  !(null === twig_get_attribute($this->env, $this->source, $context["table_data"], "columns", [], "any", false, false, false, 239)))) ? (twig_get_attribute($this->env, $this->source, $context["table_data"], "columns", [], "any", false, false, false, 239)) : ([])));
                foreach ($context['_seq'] as $context["column"] => $context["column_name"]) {
                    // line 240
                    echo "                      <tr>
                        <th>";
echo _pgettext("Alias", "Column");
                    // line 241
                    echo "</th>
                        <td>";
                    // line 242
                    echo twig_escape_filter($this->env, $context["db"], "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                    echo "</td>
                        <td>
                          <input name=\"aliases[";
                    // line 244
                    echo twig_escape_filter($this->env, $context["db"], "html", null, true);
                    echo "][tables][";
                    echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                    echo "][colums][";
                    echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $context["column_name"], "html", null, true);
                    echo "\" type=\"text\">
                        </td>
                        <td>
                          <button class=\"alias_remove btn btn-secondary\">";
echo _gettext("Remove");
                    // line 247
                    echo "</button>
                        </td>
                      </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['column'], $context['column_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 251
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['table'], $context['table_data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['db'], $context['db_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "              </tbody>

              ";
        // line 256
        echo "              <tfoot class=\"hide\">
                <tr>
                  <th></th>
                  <td></td>
                  <td>
                    <input name=\"aliases_new\" value=\"\" type=\"text\">
                  </td>
                  <td>
                    <button class=\"alias_remove btn btn-secondary\">";
echo _gettext("Remove");
        // line 264
        echo "</button>
                  </td>
                </tr>
              </tfoot>
            </table>

            <table class=\"table align-middle\">
              <thead>
                <tr>
                  <th colspan=\"4\">";
echo _gettext("Define new aliases");
        // line 273
        echo "</th>
                </tr>
              </thead>
              <tr>
                <td>
                  <label>";
echo _gettext("Select database:");
        // line 278
        echo "</label>
                </td>
                <td>
                  <select id=\"db_alias_select\">
                    <option value=\"\"></option>
                  </select>
                </td>
                <td>
                  <input id=\"db_alias_name\" placeholder=\"";
echo _gettext("New database name");
        // line 286
        echo "\" disabled=\"1\">
                </td>
                <td>
                  <button id=\"db_alias_button\" class=\"btn btn-secondary\" disabled=\"1\">";
echo _gettext("Add");
        // line 289
        echo "</button>
                </td>
              </tr>
              <tr>
                <td>
                  <label>";
echo _gettext("Select table:");
        // line 294
        echo "</label>
                </td>
                <td>
                  <select id=\"table_alias_select\">
                    <option value=\"\"></option>
                  </select>
                </td>
                <td>
                  <input id=\"table_alias_name\" placeholder=\"";
echo _gettext("New table name");
        // line 302
        echo "\" disabled=\"1\">
                </td>
                <td>
                  <button id=\"table_alias_button\" class=\"btn btn-secondary\" disabled=\"1\">";
echo _gettext("Add");
        // line 305
        echo "</button>
                </td>
              </tr>
              <tr>
                <td>
                  <label>";
echo _gettext("Select column:");
        // line 310
        echo "</label>
                </td>
                <td>
                  <select id=\"column_alias_select\">
                    <option value=\"\"></option>
                  </select>
                </td>
                <td>
                  <input id=\"column_alias_name\" placeholder=\"";
echo _gettext("New column name");
        // line 318
        echo "\" disabled=\"1\">
                </td>
                <td>
                  <button id=\"column_alias_button\" class=\"btn btn-secondary\" disabled=\"1\">";
echo _gettext("Add");
        // line 321
        echo "</button>
                </td>
              </tr>
            </table>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" id=\"saveAndCloseBtn\" data-bs-dismiss=\"modal\">
              ";
echo _gettext("Save & close");
        // line 329
        echo "            </button>
          </div>
        </div>
      </div>
    </div>

    <div class=\"card mb-3 d-none\" id=\"output\">
      <div class=\"card-header\">";
echo _gettext("Output:");
        // line 336
        echo "</div>
      <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"btn_alias_config\"";
        // line 340
        echo ((($context["has_aliases"] ?? null)) ? (" checked") : (""));
        echo ">
            <label class=\"form-check-label\" for=\"btn_alias_config\">";
echo _gettext("Rename exported databases/tables/columns");
        // line 341
        echo "</label>
          </div>
        </li>

        ";
        // line 345
        if ((($context["export_type"] ?? null) != "server")) {
            // line 346
            echo "          <li class=\"list-group-item\">
            <div class=\"form-check form-switch\">
              <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"lock_tables\" value=\"something\" id=\"checkbox_lock_tables\"";
            // line 349
            echo (((( !($context["repopulate"] ?? null) && ($context["is_checked_lock_tables"] ?? null)) || ($context["lock_tables"] ?? null))) ? (" checked") : (""));
            echo ">
              <label class=\"form-check-label\" for=\"checkbox_lock_tables\">
                ";
            // line 351
            echo twig_sprintf(_gettext("Use %s statement"), "<code>LOCK TABLES</code>");
            echo "
              </label>
            </div>
          </li>
        ";
        }
        // line 356
        echo "
        <li class=\"list-group-item\">
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" id=\"radio_view_as_text\" name=\"output_format\" value=\"astext\"";
        // line 359
        echo (((($context["repopulate"] ?? null) || (($context["export_asfile"] ?? null) == false))) ? (" checked") : (""));
        echo ">
            <label class=\"form-check-label\" for=\"radio_view_as_text\">";
echo _gettext("View output as text");
        // line 360
        echo "</label>
          </div>
          <div class=\"form-check mb-2\">
            <input class=\"form-check-input\" type=\"radio\" name=\"output_format\" value=\"sendit\" id=\"radio_dump_asfile\"";
        // line 363
        echo ((( !($context["repopulate"] ?? null) && ($context["is_checked_asfile"] ?? null))) ? (" checked") : (""));
        echo ">
            <label class=\"form-check-label\" for=\"radio_dump_asfile\">";
echo _gettext("Save output to a file");
        // line 364
        echo "</label>
          </div>
          <div class=\"hstack gap-3\">
            <div class=\"vr\"></div>
            <ul class=\"list-group\" id=\"ul_save_asfile\">
              ";
        // line 369
        if (($context["has_save_dir"] ?? null)) {
            // line 370
            echo "                <li class=\"list-group-item\">
                  <div class=\"form-check form-switch\">
                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"onserver\" value=\"saveit\" id=\"checkbox_dump_onserver\"";
            // line 372
            echo ((($context["is_checked_export"] ?? null)) ? (" checked") : (""));
            echo ">
                    <label class=\"form-check-label\" for=\"checkbox_dump_onserver\">
                      ";
            // line 374
            echo twig_sprintf(_gettext("Save on server in the directory <strong>%s</strong>"), twig_escape_filter($this->env, ($context["save_dir"] ?? null)));
            echo "
                    </label>
                  </div>
                  <div class=\"form-check form-switch\">
                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"onserver_overwrite\" value=\"saveitover\" id=\"checkbox_dump_onserver_overwrite\"";
            // line 379
            echo ((($context["is_checked_export_overwrite"] ?? null)) ? (" checked") : (""));
            echo ">
                    <label class=\"form-check-label\" for=\"checkbox_dump_onserver_overwrite\">
                      ";
echo _gettext("Overwrite existing file(s)");
            // line 382
            echo "                    </label>
                  </div>
                </li>
              ";
        }
        // line 386
        echo "
              <li class=\"list-group-item\">
                <div class=\"row g-3 align-items-center\">
                  <div class=\"col-auto\">
                    <label for=\"filename_template\" class=\"col-form-label\">
                      ";
echo _gettext("File name template:");
        // line 392
        echo "                      ";
        echo $this->env->getFunction('show_hint')->getCallable()(twig_sprintf(_gettext("This value is interpreted using the 'strftime' function, so you can use time formatting strings. Additionally the following transformations will happen: %s Other text will be kept as is. See the FAQ 6.27 for details."), ($context["filename_hint"] ?? null)));
        echo "
                    </label>
                  </div>
                  <div class=\"col-auto\">
                    <input type=\"text\" class=\"form-control\" name=\"filename_template\" id=\"filename_template\" value=\"";
        // line 396
        echo twig_escape_filter($this->env, ($context["filename_template"] ?? null), "html", null, true);
        echo "\">
                  </div>
                  <div class=\"col-auto\">
                    <div class=\"form-check form-switch\">
                      <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"remember_template\" id=\"checkbox_remember_template\"";
        // line 400
        echo ((($context["is_checked_remember_file_template"] ?? null)) ? (" checked") : (""));
        echo ">
                      <label class=\"form-check-label\" for=\"checkbox_remember_template\">
                        ";
echo _gettext("Use this for future exports");
        // line 403
        echo "                      </label>
                    </div>
                  </div>
                </div>
              </li>

              ";
        // line 409
        if (($context["is_encoding_supported"] ?? null)) {
            // line 410
            echo "                <li class=\"list-group-item\">
                  <div class=\"row\">
                    <div class=\"col-auto\">
                      <label for=\"select_charset\" class=\"col-form-label\">";
echo _gettext("Character set of the file:");
            // line 413
            echo "</label>
                    </div>
                    <div class=\"col-auto\">
                      <select class=\"form-select\" id=\"select_charset\" name=\"charset\">
                        ";
            // line 417
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["encodings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                // line 418
                echo "                          <option value=\"";
                echo twig_escape_filter($this->env, $context["charset"], "html", null, true);
                echo "\"";
                // line 419
                echo ((((twig_test_empty(($context["export_charset"] ?? null)) && ($context["charset"] == "utf-8")) || ($context["charset"] == ($context["export_charset"] ?? null)))) ? (" selected") : (""));
                echo ">";
                // line 420
                echo twig_escape_filter($this->env, $context["charset"], "html", null, true);
                // line 421
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 423
            echo "                      </select>
                    </div>
                  </div>
                </li>
              ";
        }
        // line 428
        echo "
              ";
        // line 429
        if ((($context["has_zip"] ?? null) || ($context["has_gzip"] ?? null))) {
            // line 430
            echo "                <li class=\"list-group-item\">
                  <div class=\"row\">
                    <div class=\"col-auto\">
                      <label for=\"compression\" class=\"col-form-label\">";
echo _gettext("Compression:");
            // line 433
            echo "</label>
                    </div>
                    <div class=\"col-auto\">
                      <select class=\"form-select\" id=\"compression\" name=\"compression\">
                        <option value=\"none\">";
echo _gettext("None");
            // line 437
            echo "</option>
                        ";
            // line 438
            if (($context["has_zip"] ?? null)) {
                // line 439
                echo "                          <option value=\"zip\"";
                // line 440
                echo (((($context["selected_compression"] ?? null) == "zip")) ? (" selected") : (""));
                echo ">
                            ";
echo _gettext("zipped");
                // line 442
                echo "                          </option>
                        ";
            }
            // line 444
            echo "                        ";
            if (($context["has_gzip"] ?? null)) {
                // line 445
                echo "                          <option value=\"gzip\"";
                // line 446
                echo (((($context["selected_compression"] ?? null) == "gzip")) ? (" selected") : (""));
                echo ">
                            ";
echo _gettext("gzipped");
                // line 448
                echo "                          </option>
                        ";
            }
            // line 450
            echo "                      </select>
                    </div>
                  </div>
                </li>
              ";
        } else {
            // line 455
            echo "                <input type=\"hidden\" name=\"compression\" value=\"";
            echo twig_escape_filter($this->env, ($context["selected_compression"] ?? null), "html", null, true);
            echo "\">
              ";
        }
        // line 457
        echo "
              ";
        // line 458
        if (((($context["export_type"] ?? null) == "server") || (($context["export_type"] ?? null) == "database"))) {
            // line 459
            echo "                <li class=\"list-group-item\">
                  <div class=\"form-check form-switch\">
                    <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"checkbox_as_separate_files\" name=\"as_separate_files\" value=\"";
            // line 461
            echo twig_escape_filter($this->env, ($context["export_type"] ?? null), "html", null, true);
            echo "\"";
            // line 462
            echo ((($context["is_checked_as_separate_files"] ?? null)) ? (" checked") : (""));
            echo ">
                    <label class=\"form-check-label\" for=\"checkbox_as_separate_files\">
                      ";
            // line 464
            if ((($context["export_type"] ?? null) == "server")) {
                // line 465
                echo "                        ";
echo _gettext("Export databases as separate files");
                // line 466
                echo "                      ";
            } elseif ((($context["export_type"] ?? null) == "database")) {
                // line 467
                echo "                        ";
echo _gettext("Export tables as separate files");
                // line 468
                echo "                      ";
            }
            // line 469
            echo "                    </label>
                  </div>
                </li>
              ";
        }
        // line 473
        echo "            </ul>
          </div>
        </li>

        <li class=\"list-group-item\">
          <label for=\"maxsize\" class=\"form-label\">";
echo _gettext("Skip tables larger than:");
        // line 478
        echo "</label>
          <input class=\"form-control\" type=\"number\" id=\"maxsize\" name=\"maxsize\" aria-describedby=\"maxsizeHelp\">
          <div id=\"maxsizeHelp\" class=\"form-text\">";
echo _gettext("The size is measured in MiB.");
        // line 480
        echo "</div>
        </li>
      </ul>
    </div>

    <div class=\"card mb-3 d-none\" id=\"format_specific_opts\">
      <div class=\"card-header\">";
echo _gettext("Format-specific options:");
        // line 486
        echo "</div>
      <div class=\"card-body\">
        ";
        // line 488
        echo ($context["options"] ?? null);
        echo "
      </div>
    </div>

    ";
        // line 492
        if (($context["can_convert_kanji"] ?? null)) {
            // line 493
            echo "      ";
            // line 494
            echo "      <div class=\"card mb-3\" id=\"kanji_encoding\">
        <div class=\"card-header\">";
echo _gettext("Encoding Conversion:");
            // line 495
            echo "</div>
        <div class=\"card-body\">
          ";
            // line 497
            $this->loadTemplate("encoding/kanji_encoding_form.twig", "export.twig", 497)->display($context);
            // line 498
            echo "        </div>
      </div>
    ";
        }
        // line 501
        echo "
    <div id=\"submit\">
      <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Export");
        // line 503
        echo "\" data-exec-time-limit=\"";
        echo twig_escape_filter($this->env, ($context["exec_time_limit"] ?? null), "html", null, true);
        echo "\">
    </div>
  </form>
</div>
";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 18
    public function block_message($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 137
    public function block_selection_options($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "export.twig";
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
        return array (  1090 => 137,  1084 => 18,  1078 => 4,  1068 => 503,  1063 => 501,  1058 => 498,  1056 => 497,  1052 => 495,  1048 => 494,  1046 => 493,  1044 => 492,  1037 => 488,  1033 => 486,  1024 => 480,  1019 => 478,  1011 => 473,  1005 => 469,  1002 => 468,  999 => 467,  996 => 466,  993 => 465,  991 => 464,  986 => 462,  983 => 461,  979 => 459,  977 => 458,  974 => 457,  968 => 455,  961 => 450,  957 => 448,  952 => 446,  950 => 445,  947 => 444,  943 => 442,  938 => 440,  936 => 439,  934 => 438,  931 => 437,  924 => 433,  918 => 430,  916 => 429,  913 => 428,  906 => 423,  899 => 421,  897 => 420,  894 => 419,  890 => 418,  886 => 417,  880 => 413,  874 => 410,  872 => 409,  864 => 403,  858 => 400,  851 => 396,  843 => 392,  835 => 386,  829 => 382,  823 => 379,  816 => 374,  811 => 372,  807 => 370,  805 => 369,  798 => 364,  793 => 363,  788 => 360,  783 => 359,  778 => 356,  770 => 351,  765 => 349,  761 => 346,  759 => 345,  753 => 341,  748 => 340,  742 => 336,  732 => 329,  722 => 321,  716 => 318,  705 => 310,  697 => 305,  691 => 302,  680 => 294,  672 => 289,  666 => 286,  655 => 278,  647 => 273,  635 => 264,  624 => 256,  620 => 253,  614 => 252,  608 => 251,  599 => 247,  586 => 244,  577 => 242,  574 => 241,  570 => 240,  566 => 239,  563 => 238,  557 => 234,  546 => 231,  539 => 229,  536 => 228,  532 => 227,  529 => 226,  525 => 225,  522 => 224,  516 => 220,  507 => 217,  502 => 215,  499 => 214,  495 => 213,  492 => 212,  488 => 211,  481 => 206,  471 => 198,  467 => 197,  459 => 192,  452 => 187,  446 => 184,  439 => 179,  434 => 177,  429 => 174,  425 => 173,  423 => 172,  420 => 171,  411 => 165,  408 => 164,  402 => 161,  399 => 160,  396 => 158,  394 => 157,  392 => 156,  390 => 155,  387 => 153,  380 => 149,  375 => 148,  370 => 145,  365 => 144,  360 => 141,  356 => 140,  354 => 139,  351 => 138,  349 => 137,  343 => 133,  328 => 131,  324 => 130,  321 => 129,  316 => 127,  311 => 125,  304 => 120,  299 => 119,  294 => 116,  289 => 115,  284 => 112,  280 => 111,  278 => 110,  273 => 108,  269 => 107,  266 => 106,  258 => 100,  249 => 95,  242 => 90,  238 => 89,  224 => 80,  219 => 76,  216 => 75,  212 => 72,  210 => 71,  207 => 70,  194 => 62,  186 => 59,  181 => 56,  172 => 53,  165 => 52,  161 => 51,  158 => 50,  151 => 46,  145 => 43,  134 => 35,  128 => 32,  122 => 29,  116 => 26,  110 => 24,  106 => 22,  102 => 21,  100 => 20,  97 => 19,  95 => 18,  92 => 17,  86 => 16,  77 => 13,  72 => 12,  67 => 11,  63 => 10,  58 => 8,  54 => 7,  50 => 5,  48 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "export.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\export.twig");
    }
}
