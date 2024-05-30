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

/* server/privileges/privileges_table.twig */
class __TwigTemplate_49123866e9fd71186099f8334ab6b999 extends Template
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
        if ( !twig_test_empty(($context["columns"] ?? null))) {
            // line 2
            echo "
  <input type=\"hidden\" name=\"grant_count\" value=\"";
            // line 3
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["row"] ?? null)), "html", null, true);
            echo "\">
  <input type=\"hidden\" name=\"column_count\" value=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["columns"] ?? null)), "html", null, true);
            echo "\">
  <div class=\"card mb-3\" id=\"fieldset_user_priv\">
    <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
echo _gettext("Table");
            // line 6
            echo "\">
      ";
echo _gettext("Table-specific privileges");
            // line 8
            echo "    </div>
    <div class=\"card-body\">
    <p>
      <small><em>";
echo _gettext("Note: MySQL privilege names are expressed in English.");
            // line 11
            echo "</em></small>
    </p>

    <div class=\"item\" id=\"div_item_select\">
      <label for=\"select_select_priv\">
        <code><dfn title=\"";
echo _gettext("Allows reading data.");
            // line 16
            echo "\">SELECT</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_select_priv\" name=\"Select_priv[]\" size=\"8\" multiple>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 21
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "\"";
                echo (((((($__internal_compile_0 = ($context["row"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["Select_priv"] ?? null) : null) == "Y") || (($__internal_compile_1 = $context["curr_col_privs"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["Select"] ?? null) : null))) ? (" selected") : (""));
                echo ">
            ";
                // line 22
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['curr_col'], $context['curr_col_privs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"select_priv_all\" type=\"button\" data-select-target=\"#select_select_priv\">
          ";
echo _gettext("Select all");
            // line 30
            echo "        </button>
      </div>

      <em>";
echo _gettext("Or");
            // line 33
            echo "</em>
      <label for=\"checkbox_Select_priv_none\">
        <input type=\"checkbox\" name=\"Select_priv_none\" id=\"checkbox_Select_priv_none\" title=\"";
echo _pgettext("None privileges", "None");
            // line 36
            echo "\">
        ";
echo _pgettext("None privileges", "None");
            // line 38
            echo "      </label>
    </div>

    <div class=\"item\" id=\"div_item_insert\">
      <label for=\"select_insert_priv\">
        <code><dfn title=\"";
echo _gettext("Allows inserting and replacing data.");
            // line 43
            echo "\">INSERT</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_insert_priv\" name=\"Insert_priv[]\" size=\"8\" multiple>
        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 48
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "\"";
                echo (((((($__internal_compile_2 = ($context["row"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["Insert_priv"] ?? null) : null) == "Y") || (($__internal_compile_3 = $context["curr_col_privs"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["Insert"] ?? null) : null))) ? (" selected") : (""));
                echo ">
            ";
                // line 49
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['curr_col'], $context['curr_col_privs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"insert_priv_all\" type=\"button\" data-select-target=\"#select_insert_priv\">
          ";
echo _gettext("Select all");
            // line 57
            echo "        </button>
      </div>

      <em>";
echo _gettext("Or");
            // line 60
            echo "</em>
      <label for=\"checkbox_Insert_priv_none\">
        <input type=\"checkbox\" name=\"Insert_priv_none\" id=\"checkbox_Insert_priv_none\" title=\"";
echo _pgettext("None privileges", "None");
            // line 63
            echo "\">
        ";
echo _pgettext("None privileges", "None");
            // line 65
            echo "      </label>
    </div>

    <div class=\"item\" id=\"div_item_update\">
      <label for=\"select_update_priv\">
        <code><dfn title=\"";
echo _gettext("Allows changing data.");
            // line 70
            echo "\">UPDATE</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_update_priv\" name=\"Update_priv[]\" size=\"8\" multiple>
        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 75
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "\"";
                echo (((((($__internal_compile_4 = ($context["row"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["Update_priv"] ?? null) : null) == "Y") || (($__internal_compile_5 = $context["curr_col_privs"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["Update"] ?? null) : null))) ? (" selected") : (""));
                echo ">
            ";
                // line 76
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['curr_col'], $context['curr_col_privs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"update_priv_all\" type=\"button\" data-select-target=\"#select_update_priv\">
          ";
echo _gettext("Select all");
            // line 84
            echo "        </button>
      </div>

      <em>";
echo _gettext("Or");
            // line 87
            echo "</em>
      <label for=\"checkbox_Update_priv_none\">
        <input type=\"checkbox\" name=\"Update_priv_none\" id=\"checkbox_Update_priv_none\" title=\"";
echo _pgettext("None privileges", "None");
            // line 90
            echo "\">
        ";
echo _pgettext("None privileges", "None");
            // line 92
            echo "      </label>
    </div>

    <div class=\"item\" id=\"div_item_references\">
      <label for=\"select_references_priv\">
        <code><dfn title=\"";
echo _gettext("Has no effect in this MySQL version.");
            // line 97
            echo "\">REFERENCES</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_references_priv\" name=\"References_priv[]\" size=\"8\" multiple>
        ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 102
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "\"";
                echo (((((($__internal_compile_6 = ($context["row"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["References_priv"] ?? null) : null) == "Y") || (($__internal_compile_7 = $context["curr_col_privs"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["References"] ?? null) : null))) ? (" selected") : (""));
                echo ">
            ";
                // line 103
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['curr_col'], $context['curr_col_privs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"references_priv_all\" type=\"button\" data-select-target=\"#select_references_priv\">
          ";
echo _gettext("Select all");
            // line 111
            echo "        </button>
      </div>

      <em>";
echo _gettext("Or");
            // line 114
            echo "</em>
      <label for=\"checkbox_References_priv_none\">
        <input type=\"checkbox\" name=\"References_priv_none\" id=\"checkbox_References_priv_none\" title=\"";
echo _pgettext("None privileges", "None");
            // line 117
            echo "\">
        ";
echo _pgettext("None privileges", "None");
            // line 119
            echo "      </label>
    </div>

    <div class=\"item\">
      <div class=\"item\">
        <input type=\"checkbox\" name=\"Delete_priv\" id=\"checkbox_Delete_priv\" value=\"Y\" title=\"";
echo _gettext("Allows deleting data.");
            // line 125
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Delete_priv", [], "array", true, true, false, 125) &&  !(null === (($__internal_compile_8 = ($context["row"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["Delete_priv"] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["row"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["Delete_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Delete_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows deleting data.");
            // line 128
            echo "\">
              DELETE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Create_priv\" id=\"checkbox_Create_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating new tables.");
            // line 137
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_priv", [], "array", true, true, false, 137) &&  !(null === (($__internal_compile_10 = ($context["row"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["Create_priv"] ?? null) : null)))) ? ((($__internal_compile_11 = ($context["row"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["Create_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Create_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows creating new tables.");
            // line 140
            echo "\">
              CREATE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Drop_priv\" id=\"checkbox_Drop_priv\" value=\"Y\" title=\"";
echo _gettext("Allows dropping tables.");
            // line 149
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Drop_priv", [], "array", true, true, false, 149) &&  !(null === (($__internal_compile_12 = ($context["row"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["Drop_priv"] ?? null) : null)))) ? ((($__internal_compile_13 = ($context["row"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["Drop_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Drop_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows dropping tables.");
            // line 152
            echo "\">
              DROP
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"";
echo _gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself.");
            // line 161
            echo "\"";
            // line 162
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", true, true, false, 162) &&  !(null === (($__internal_compile_14 = ($context["row"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["Grant_priv"] ?? null) : null)))) ? ((($__internal_compile_15 = ($context["row"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["Grant_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself.");
            // line 165
            echo "\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Index_priv\" id=\"checkbox_Index_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating and dropping indexes.");
            // line 174
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Index_priv", [], "array", true, true, false, 174) &&  !(null === (($__internal_compile_16 = ($context["row"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["Index_priv"] ?? null) : null)))) ? ((($__internal_compile_17 = ($context["row"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["Index_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Index_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows creating and dropping indexes.");
            // line 177
            echo "\">
              INDEX
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Alter_priv\" id=\"checkbox_Alter_priv\" value=\"Y\" title=\"";
echo _gettext("Allows altering the structure of existing tables.");
            // line 186
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Alter_priv", [], "array", true, true, false, 186) &&  !(null === (($__internal_compile_18 = ($context["row"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["Alter_priv"] ?? null) : null)))) ? ((($__internal_compile_19 = ($context["row"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["Alter_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Alter_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows altering the structure of existing tables.");
            // line 189
            echo "\">
              ALTER
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Create_view_priv\" id=\"checkbox_Create_view_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating new views.");
            // line 198
            echo "\"";
            echo ((((($__internal_compile_20 = ($context["row"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["Create View_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Create_view_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows creating new views.");
            // line 201
            echo "\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Show_view_priv\" id=\"checkbox_Show_view_priv\" value=\"Y\" title=\"";
echo _gettext("Allows performing SHOW CREATE VIEW queries.");
            // line 210
            echo "\"";
            echo ((((($__internal_compile_21 = ($context["row"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["Show view_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Show_view_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows performing SHOW CREATE VIEW queries.");
            // line 213
            echo "\">
              SHOW VIEW
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Trigger_priv\" id=\"checkbox_Trigger_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating and dropping triggers.");
            // line 222
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Trigger_priv", [], "array", true, true, false, 222) &&  !(null === (($__internal_compile_22 = ($context["row"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["Trigger_priv"] ?? null) : null)))) ? ((($__internal_compile_23 = ($context["row"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["Trigger_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Trigger_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows creating and dropping triggers.");
            // line 225
            echo "\">
              TRIGGER
            </dfn>
          </code>
        </label>
      </div>

      ";
            // line 232
            if ((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Delete versioning rows_priv", [], "array", true, true, false, 232) || twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Delete_history_priv", [], "array", true, true, false, 232))) {
                // line 233
                echo "        <div class=\"item\">
          <input type=\"checkbox\" name=\"Delete_history_priv\" id=\"checkbox_Delete_history_priv\" value=\"Y\" title=\"";
echo _gettext("Allows deleting historical rows.");
                // line 235
                echo "\"";
                // line 236
                echo (((((($__internal_compile_24 = ($context["row"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["Delete versioning rows_priv"] ?? null) : null) == "Y") || ((($__internal_compile_25 = ($context["row"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["Delete_history_priv"] ?? null) : null) == "Y"))) ? (" checked") : (""));
                echo ">
          <label for=\"checkbox_Delete_history_priv\">
            <code>
              <dfn title=\"";
echo _gettext("Allows deleting historical rows.");
                // line 239
                echo "\">
                DELETE HISTORY
              </dfn>
            </code>
          </label>
        </div>
      ";
            }
            // line 246
            echo "    </div>
    </div>
  </div>

";
        } else {
            // line 251
            echo "
";
            // line 252
            $context["grant_count"] = 0;
            // line 253
            echo "<div class=\"card mb-3\">
  <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
            // line 255
            if (($context["is_global"] ?? null)) {
echo _gettext("Global");
            } elseif (            // line 257
($context["is_database"] ?? null)) {
echo _gettext("Database");
            } else {
echo _gettext("Table");
            }
            // line 261
            echo "\">
    ";
            // line 262
            if (($context["is_global"] ?? null)) {
                // line 263
                echo "      ";
echo _gettext("Global privileges");
                // line 264
                echo "    ";
            } elseif (($context["is_database"] ?? null)) {
                // line 265
                echo "      ";
echo _gettext("Database-specific privileges");
                // line 266
                echo "    ";
            } else {
                // line 267
                echo "      ";
echo _gettext("Table-specific privileges");
                // line 268
                echo "    ";
            }
            // line 269
            echo "    <input type=\"checkbox\" id=\"addUsersForm_checkall\" class=\"checkall_box\" title=\"";
echo _gettext("Check all");
            echo "\">
    <label for=\"addUsersForm_checkall\">";
echo _gettext("Check all");
            // line 270
            echo "</label>
  </div>
  <div class=\"card-body row g-3\">
  <p class=\"col-12\">
    <small><em>";
echo _gettext("Note: MySQL privilege names are expressed in English.");
            // line 274
            echo "</em></small>
  </p>
    <div class=\"col\">
  <div class=\"card\">
    <div class=\"card-header\">
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Data_priv\" title=\"";
echo _gettext("Check all");
            // line 279
            echo "\">
      <label for=\"checkall_Data_priv\">";
echo _gettext("Data");
            // line 280
            echo "</label>
    </div>

    <div class=\"card-body\">
    <div class=\"item\">
      ";
            // line 285
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 286
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Select_priv\" id=\"checkbox_Select_priv\" value=\"Y\" title=\"";
echo _gettext("Allows reading data.");
            // line 287
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Select_priv", [], "array", true, true, false, 287) &&  !(null === (($__internal_compile_26 = ($context["row"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["Select_priv"] ?? null) : null)))) ? ((($__internal_compile_27 = ($context["row"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["Select_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Select_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows reading data.");
            // line 290
            echo "\">
            SELECT
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 298
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 299
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Insert_priv\" id=\"checkbox_Insert_priv\" value=\"Y\" title=\"";
echo _gettext("Allows inserting and replacing data.");
            // line 300
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Insert_priv", [], "array", true, true, false, 300) &&  !(null === (($__internal_compile_28 = ($context["row"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["Insert_priv"] ?? null) : null)))) ? ((($__internal_compile_29 = ($context["row"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["Insert_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Insert_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows inserting and replacing data.");
            // line 303
            echo "\">
            INSERT
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 311
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 312
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Update_priv\" id=\"checkbox_Update_priv\" value=\"Y\" title=\"";
echo _gettext("Allows changing data.");
            // line 313
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Update_priv", [], "array", true, true, false, 313) &&  !(null === (($__internal_compile_30 = ($context["row"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["Update_priv"] ?? null) : null)))) ? ((($__internal_compile_31 = ($context["row"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["Update_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Update_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows changing data.");
            // line 316
            echo "\">
            UPDATE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 324
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 325
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Delete_priv\" id=\"checkbox_Delete_priv\" value=\"Y\" title=\"";
echo _gettext("Allows deleting data.");
            // line 326
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Delete_priv", [], "array", true, true, false, 326) &&  !(null === (($__internal_compile_32 = ($context["row"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["Delete_priv"] ?? null) : null)))) ? ((($__internal_compile_33 = ($context["row"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["Delete_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Delete_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows deleting data.");
            // line 329
            echo "\">
            DELETE
          </dfn>
        </code>
      </label>
    </div>

    ";
            // line 336
            if (($context["is_global"] ?? null)) {
                // line 337
                echo "      <div class=\"item\">
        ";
                // line 338
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 339
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"File_priv\" id=\"checkbox_File_priv\" value=\"Y\" title=\"";
echo _gettext("Allows importing data from and exporting data into files.");
                // line 340
                echo "\"";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "File_priv", [], "array", true, true, false, 340) &&  !(null === (($__internal_compile_34 = ($context["row"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["File_priv"] ?? null) : null)))) ? ((($__internal_compile_35 = ($context["row"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["File_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_File_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows importing data from and exporting data into files.");
                // line 343
                echo "\">
              FILE
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 350
            echo "    </div>
  </div>
    </div>
    <div class=\"col\">
  <div class=\"card\">
    <div class=\"card-header\">
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Structure_priv\" title=\"";
echo _gettext("Check all");
            // line 356
            echo "\">
      <label for=\"checkall_Structure_priv\">";
echo _gettext("Structure");
            // line 357
            echo "</label>
    </div>

    <div class=\"card-body\">
    <div class=\"item\">
      ";
            // line 362
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 363
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Create_priv\" id=\"checkbox_Create_priv\" value=\"Y\" title=\"";
            // line 364
            if (($context["is_database"] ?? null)) {
echo _gettext("Allows creating new databases and tables.");
            } else {
echo _gettext("Allows creating new tables.");
            }
            // line 368
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_priv", [], "array", true, true, false, 368) &&  !(null === (($__internal_compile_36 = ($context["row"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["Create_priv"] ?? null) : null)))) ? ((($__internal_compile_37 = ($context["row"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["Create_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Create_priv\">
        <code>
          <dfn title=\"";
            // line 372
            if (($context["is_database"] ?? null)) {
echo _gettext("Allows creating new databases and tables.");
            } else {
echo _gettext("Allows creating new tables.");
            }
            // line 376
            echo "\">
            CREATE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 384
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 385
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Alter_priv\" id=\"checkbox_Alter_priv\" value=\"Y\" title=\"";
echo _gettext("Allows altering the structure of existing tables.");
            // line 386
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Alter_priv", [], "array", true, true, false, 386) &&  !(null === (($__internal_compile_38 = ($context["row"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["Alter_priv"] ?? null) : null)))) ? ((($__internal_compile_39 = ($context["row"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["Alter_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Alter_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows altering the structure of existing tables.");
            // line 389
            echo "\">
            ALTER
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 397
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 398
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Index_priv\" id=\"checkbox_Index_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating and dropping indexes.");
            // line 399
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Index_priv", [], "array", true, true, false, 399) &&  !(null === (($__internal_compile_40 = ($context["row"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["Index_priv"] ?? null) : null)))) ? ((($__internal_compile_41 = ($context["row"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["Index_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Index_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows creating and dropping indexes.");
            // line 402
            echo "\">
            INDEX
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 410
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 411
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Drop_priv\" id=\"checkbox_Drop_priv\" value=\"Y\" title=\"";
            // line 412
            if (($context["is_database"] ?? null)) {
echo _gettext("Allows dropping databases and tables.");
            } else {
echo _gettext("Allows dropping tables.");
            }
            // line 416
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Drop_priv", [], "array", true, true, false, 416) &&  !(null === (($__internal_compile_42 = ($context["row"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["Drop_priv"] ?? null) : null)))) ? ((($__internal_compile_43 = ($context["row"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["Drop_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Drop_priv\">
        <code>
          <dfn title=\"";
            // line 420
            if (($context["is_database"] ?? null)) {
echo _gettext("Allows dropping databases and tables.");
            } else {
echo _gettext("Allows dropping tables.");
            }
            // line 424
            echo "\">
            DROP
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 432
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 433
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Create_tmp_table_priv\" id=\"checkbox_Create_tmp_table_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating temporary tables.");
            // line 434
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_tmp_table_priv", [], "array", true, true, false, 434) &&  !(null === (($__internal_compile_44 = ($context["row"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["Create_tmp_table_priv"] ?? null) : null)))) ? ((($__internal_compile_45 = ($context["row"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["Create_tmp_table_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Create_tmp_table_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows creating temporary tables.");
            // line 437
            echo "\">
            CREATE TEMPORARY TABLES
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 445
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 446
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Show_view_priv\" id=\"checkbox_Show_view_priv\" value=\"Y\" title=\"";
echo _gettext("Allows performing SHOW CREATE VIEW queries.");
            // line 447
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Show_view_priv", [], "array", true, true, false, 447) &&  !(null === (($__internal_compile_46 = ($context["row"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["Show_view_priv"] ?? null) : null)))) ? ((($__internal_compile_47 = ($context["row"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["Show_view_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Show_view_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows performing SHOW CREATE VIEW queries.");
            // line 450
            echo "\">
            SHOW VIEW
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 458
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 459
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Create_routine_priv\" id=\"checkbox_Create_routine_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating stored routines.");
            // line 460
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_routine_priv", [], "array", true, true, false, 460) &&  !(null === (($__internal_compile_48 = ($context["row"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["Create_routine_priv"] ?? null) : null)))) ? ((($__internal_compile_49 = ($context["row"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["Create_routine_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Create_routine_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows creating stored routines.");
            // line 463
            echo "\">
            CREATE ROUTINE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 471
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 472
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Alter_routine_priv\" id=\"checkbox_Alter_routine_priv\" value=\"Y\" title=\"";
echo _gettext("Allows altering and dropping stored routines.");
            // line 473
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Alter_routine_priv", [], "array", true, true, false, 473) &&  !(null === (($__internal_compile_50 = ($context["row"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["Alter_routine_priv"] ?? null) : null)))) ? ((($__internal_compile_51 = ($context["row"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["Alter_routine_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Alter_routine_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows altering and dropping stored routines.");
            // line 476
            echo "\">
            ALTER ROUTINE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 484
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 485
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Execute_priv\" id=\"checkbox_Execute_priv\" value=\"Y\" title=\"";
echo _gettext("Allows executing stored routines.");
            // line 486
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Execute_priv", [], "array", true, true, false, 486) &&  !(null === (($__internal_compile_52 = ($context["row"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["Execute_priv"] ?? null) : null)))) ? ((($__internal_compile_53 = ($context["row"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["Execute_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Execute_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows executing stored routines.");
            // line 489
            echo "\">
            EXECUTE
          </dfn>
        </code>
      </label>
    </div>

    ";
            // line 496
            if (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_view_priv", [], "array", true, true, false, 496)) {
                // line 497
                echo "      <div class=\"item\">
        ";
                // line 498
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 499
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Create_view_priv\" id=\"checkbox_Create_view_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating new views.");
                // line 500
                echo "\"";
                echo ((((($__internal_compile_54 = ($context["row"] ?? null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["Create_view_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Create_view_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows creating new views.");
                // line 503
                echo "\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 510
            echo "
    ";
            // line 511
            if (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create View_priv", [], "array", true, true, false, 511)) {
                // line 512
                echo "      <div class=\"item\">
        ";
                // line 513
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 514
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Create View_priv\" id=\"checkbox_Create View_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating new views.");
                // line 515
                echo "\"";
                echo ((((($__internal_compile_55 = ($context["row"] ?? null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["Create View_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Create View_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows creating new views.");
                // line 518
                echo "\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 525
            echo "
    ";
            // line 526
            if (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Event_priv", [], "array", true, true, false, 526)) {
                // line 527
                echo "      <div class=\"item\">
        ";
                // line 528
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 529
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Event_priv\" id=\"checkbox_Event_priv\" value=\"Y\" title=\"";
echo _gettext("Allows to set up events for the event scheduler.");
                // line 530
                echo "\"";
                echo ((((($__internal_compile_56 = ($context["row"] ?? null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56["Event_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Event_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows to set up events for the event scheduler.");
                // line 533
                echo "\">
              EVENT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 541
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 542
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Trigger_priv\" id=\"checkbox_Trigger_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating and dropping triggers.");
                // line 543
                echo "\"";
                echo ((((($__internal_compile_57 = ($context["row"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["Trigger_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Trigger_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows creating and dropping triggers.");
                // line 546
                echo "\">
              TRIGGER
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 553
            echo "    </div>
  </div>
    </div>
    <div class=\"col\">

  <div class=\"card\">
    <div class=\"card-header\">
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Administration_priv\" title=\"";
echo _gettext("Check all");
            // line 560
            echo "\">
      <label for=\"checkall_Administration_priv\">";
echo _gettext("Administration");
            // line 561
            echo "</label>
    </div>

    <div class=\"card-body\">

    ";
            // line 566
            if (($context["is_global"] ?? null)) {
                // line 567
                echo "      <div class=\"item\">
        ";
                // line 568
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 569
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"";
echo _gettext("Allows adding users and privileges without reloading the privilege tables.");
                // line 570
                echo "\"";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", true, true, false, 570) &&  !(null === (($__internal_compile_58 = ($context["row"] ?? null)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58["Grant_priv"] ?? null) : null)))) ? ((($__internal_compile_59 = ($context["row"] ?? null)) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59["Grant_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows adding users and privileges without reloading the privilege tables.");
                // line 573
                echo "\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 581
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 582
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Super_priv\" id=\"checkbox_Super_priv\" value=\"Y\" title=\"";
echo _gettext("Allows connecting, even if maximum number of connections is reached; required for most administrative operations like setting global variables or killing threads of other users.");
                // line 583
                echo "\"";
                // line 584
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Super_priv", [], "array", true, true, false, 584) &&  !(null === (($__internal_compile_60 = ($context["row"] ?? null)) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60["Super_priv"] ?? null) : null)))) ? ((($__internal_compile_61 = ($context["row"] ?? null)) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61["Super_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Super_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows connecting, even if maximum number of connections is reached; required for most administrative operations like setting global variables or killing threads of other users.");
                // line 587
                echo "\">
              SUPER
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 595
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 596
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Process_priv\" id=\"checkbox_Process_priv\" value=\"Y\" title=\"";
echo _gettext("Allows viewing processes of all users.");
                // line 597
                echo "\"";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Process_priv", [], "array", true, true, false, 597) &&  !(null === (($__internal_compile_62 = ($context["row"] ?? null)) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62["Process_priv"] ?? null) : null)))) ? ((($__internal_compile_63 = ($context["row"] ?? null)) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63["Process_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Process_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows viewing processes of all users.");
                // line 600
                echo "\">
              PROCESS
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 608
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 609
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Reload_priv\" id=\"checkbox_Reload_priv\" value=\"Y\" title=\"";
echo _gettext("Allows reloading server settings and flushing the server's caches.");
                // line 610
                echo "\"";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Reload_priv", [], "array", true, true, false, 610) &&  !(null === (($__internal_compile_64 = ($context["row"] ?? null)) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64["Reload_priv"] ?? null) : null)))) ? ((($__internal_compile_65 = ($context["row"] ?? null)) && is_array($__internal_compile_65) || $__internal_compile_65 instanceof ArrayAccess ? ($__internal_compile_65["Reload_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Reload_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows reloading server settings and flushing the server's caches.");
                // line 613
                echo "\">
              RELOAD
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 621
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 622
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Shutdown_priv\" id=\"checkbox_Shutdown_priv\" value=\"Y\" title=\"";
echo _gettext("Allows shutting down the server.");
                // line 623
                echo "\"";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Shutdown_priv", [], "array", true, true, false, 623) &&  !(null === (($__internal_compile_66 = ($context["row"] ?? null)) && is_array($__internal_compile_66) || $__internal_compile_66 instanceof ArrayAccess ? ($__internal_compile_66["Shutdown_priv"] ?? null) : null)))) ? ((($__internal_compile_67 = ($context["row"] ?? null)) && is_array($__internal_compile_67) || $__internal_compile_67 instanceof ArrayAccess ? ($__internal_compile_67["Shutdown_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Shutdown_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows shutting down the server.");
                // line 626
                echo "\">
              SHUTDOWN
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 634
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 635
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Show_db_priv\" id=\"checkbox_Show_db_priv\" value=\"Y\" title=\"";
echo _gettext("Gives access to the complete list of databases.");
                // line 636
                echo "\"";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Show_db_priv", [], "array", true, true, false, 636) &&  !(null === (($__internal_compile_68 = ($context["row"] ?? null)) && is_array($__internal_compile_68) || $__internal_compile_68 instanceof ArrayAccess ? ($__internal_compile_68["Show_db_priv"] ?? null) : null)))) ? ((($__internal_compile_69 = ($context["row"] ?? null)) && is_array($__internal_compile_69) || $__internal_compile_69 instanceof ArrayAccess ? ($__internal_compile_69["Show_db_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Show_db_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Gives access to the complete list of databases.");
                // line 639
                echo "\">
              SHOW DATABASES
            </dfn>
          </code>
        </label>
      </div>
    ";
            } else {
                // line 646
                echo "      <div class=\"item\">
        ";
                // line 647
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 648
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"";
echo _gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself.");
                // line 649
                echo "\"";
                // line 650
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", true, true, false, 650) &&  !(null === (($__internal_compile_70 = ($context["row"] ?? null)) && is_array($__internal_compile_70) || $__internal_compile_70 instanceof ArrayAccess ? ($__internal_compile_70["Grant_priv"] ?? null) : null)))) ? ((($__internal_compile_71 = ($context["row"] ?? null)) && is_array($__internal_compile_71) || $__internal_compile_71 instanceof ArrayAccess ? ($__internal_compile_71["Grant_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself.");
                // line 653
                echo "\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 660
            echo "
    <div class=\"item\">
      ";
            // line 662
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 663
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Lock_tables_priv\" id=\"checkbox_Lock_tables_priv\" value=\"Y\" title=\"";
echo _gettext("Allows locking tables for the current thread.");
            // line 664
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Lock_tables_priv", [], "array", true, true, false, 664) &&  !(null === (($__internal_compile_72 = ($context["row"] ?? null)) && is_array($__internal_compile_72) || $__internal_compile_72 instanceof ArrayAccess ? ($__internal_compile_72["Lock_tables_priv"] ?? null) : null)))) ? ((($__internal_compile_73 = ($context["row"] ?? null)) && is_array($__internal_compile_73) || $__internal_compile_73 instanceof ArrayAccess ? ($__internal_compile_73["Lock_tables_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Lock_tables_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows locking tables for the current thread.");
            // line 667
            echo "\">
            LOCK TABLES
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 675
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 676
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"References_priv\" id=\"checkbox_References_priv\" value=\"Y\" title=\"";
echo _gettext("Has no effect in this MySQL version.");
            // line 677
            echo "\"";
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "References_priv", [], "array", true, true, false, 677) &&  !(null === (($__internal_compile_74 = ($context["row"] ?? null)) && is_array($__internal_compile_74) || $__internal_compile_74 instanceof ArrayAccess ? ($__internal_compile_74["References_priv"] ?? null) : null)))) ? ((($__internal_compile_75 = ($context["row"] ?? null)) && is_array($__internal_compile_75) || $__internal_compile_75 instanceof ArrayAccess ? ($__internal_compile_75["References_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_References_priv\">
        <code>
          ";
            // line 681
            echo "          <dfn title=\"";
            echo twig_escape_filter($this->env, ((($context["supports_references_privilege"] ?? null)) ? (_gettext("Allows creating foreign key relations.")) : (((($context["is_mariadb"] ?? null)) ? (_gettext("Not used on MariaDB.")) : (_gettext("Not used for this MySQL version."))))), "html", null, true);
            echo "\">
            REFERENCES
          </dfn>
        </code>
      </label>
    </div>

    ";
            // line 688
            if (($context["is_global"] ?? null)) {
                // line 689
                echo "      <div class=\"item\">
        ";
                // line 690
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 691
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Repl_client_priv\" id=\"checkbox_Repl_client_priv\" value=\"Y\" title=\"";
echo _gettext("Allows the user to ask where the replicas / primaries are.");
                // line 692
                echo "\"";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Repl_client_priv", [], "array", true, true, false, 692) &&  !(null === (($__internal_compile_76 = ($context["row"] ?? null)) && is_array($__internal_compile_76) || $__internal_compile_76 instanceof ArrayAccess ? ($__internal_compile_76["Repl_client_priv"] ?? null) : null)))) ? ((($__internal_compile_77 = ($context["row"] ?? null)) && is_array($__internal_compile_77) || $__internal_compile_77 instanceof ArrayAccess ? ($__internal_compile_77["Repl_client_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Repl_client_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows the user to ask where the replicas / primaries are.");
                // line 695
                echo "\">
              REPLICATION CLIENT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 703
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 704
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Repl_slave_priv\" id=\"checkbox_Repl_slave_priv\" value=\"Y\" title=\"";
echo _gettext("Needed for the replication replicas.");
                // line 705
                echo "\"";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Repl_slave_priv", [], "array", true, true, false, 705) &&  !(null === (($__internal_compile_78 = ($context["row"] ?? null)) && is_array($__internal_compile_78) || $__internal_compile_78 instanceof ArrayAccess ? ($__internal_compile_78["Repl_slave_priv"] ?? null) : null)))) ? ((($__internal_compile_79 = ($context["row"] ?? null)) && is_array($__internal_compile_79) || $__internal_compile_79 instanceof ArrayAccess ? ($__internal_compile_79["Repl_slave_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Repl_slave_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Needed for the replication replicas.");
                // line 708
                echo "\">
              REPLICATION SLAVE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 716
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 717
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Create_user_priv\" id=\"checkbox_Create_user_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating, dropping and renaming user accounts.");
                // line 718
                echo "\"";
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_user_priv", [], "array", true, true, false, 718) &&  !(null === (($__internal_compile_80 = ($context["row"] ?? null)) && is_array($__internal_compile_80) || $__internal_compile_80 instanceof ArrayAccess ? ($__internal_compile_80["Create_user_priv"] ?? null) : null)))) ? ((($__internal_compile_81 = ($context["row"] ?? null)) && is_array($__internal_compile_81) || $__internal_compile_81 instanceof ArrayAccess ? ($__internal_compile_81["Create_user_priv"] ?? null) : null)) : (null)) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Create_user_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows creating, dropping and renaming user accounts.");
                // line 721
                echo "\">
              CREATE USER
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 728
            echo "    </div>
  </div>
    </div>

  ";
            // line 732
            if (($context["is_global"] ?? null)) {
                // line 733
                echo "    <div class=\"col\">
    <div class=\"card\">
      <div class=\"card-header\">";
echo _gettext("Resource limits");
                // line 735
                echo "</div>
      <div class=\"card-body\">
      <p>
        <small><em>";
echo _gettext("Note: Setting these options to 0 (zero) removes the limit.");
                // line 738
                echo "</em></small>
      </p>

      <div class=\"item\">
        <label for=\"text_max_questions\">
          <code>
            <dfn title=\"";
echo _gettext("Limits the number of queries the user may send to the server per hour.");
                // line 744
                echo "\">
              MAX QUERIES PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_questions\" id=\"text_max_questions\" value=\"";
                // line 750
                (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_questions", [], "any", true, true, false, 750) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_questions", [], "any", false, false, false, 750)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_questions", [], "any", false, false, false, 750), "html", null, true))) : (print ("0")));
                echo "\" title=\"";
echo _gettext("Limits the number of queries the user may send to the server per hour.");
                // line 751
                echo "\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_updates\">
          <code>
            <dfn title=\"";
echo _gettext("Limits the number of commands that change any table or database the user may execute per hour.");
                // line 757
                echo "\">
              MAX UPDATES PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_updates\" id=\"text_max_updates\" value=\"";
                // line 763
                (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_updates", [], "any", true, true, false, 763) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_updates", [], "any", false, false, false, 763)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_updates", [], "any", false, false, false, 763), "html", null, true))) : (print ("0")));
                echo "\" title=\"";
echo _gettext("Limits the number of commands that change any table or database the user may execute per hour.");
                // line 764
                echo "\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_connections\">
          <code>
            <dfn title=\"";
echo _gettext("Limits the number of new connections the user may open per hour.");
                // line 770
                echo "\">
              MAX CONNECTIONS PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_connections\" id=\"text_max_connections\" value=\"";
                // line 776
                (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_connections", [], "any", true, true, false, 776) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_connections", [], "any", false, false, false, 776)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_connections", [], "any", false, false, false, 776), "html", null, true))) : (print ("0")));
                echo "\" title=\"";
echo _gettext("Limits the number of new connections the user may open per hour.");
                // line 777
                echo "\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_user_connections\">
          <code>
            <dfn title=\"";
echo _gettext("Limits the number of simultaneous connections the user may have.");
                // line 783
                echo "\">
              MAX USER_CONNECTIONS
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_user_connections\" id=\"text_max_user_connections\" value=\"";
                // line 789
                (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_user_connections", [], "any", true, true, false, 789) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_user_connections", [], "any", false, false, false, 789)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_user_connections", [], "any", false, false, false, 789), "html", null, true))) : (print ("0")));
                echo "\" title=\"";
echo _gettext("Limits the number of simultaneous connections the user may have.");
                // line 790
                echo "\">
      </div>
      </div>
    </div>
    </div>
    <div class=\"col\">

    <div class=\"card\">
      <div class=\"card-header\">SSL</div>
      <div class=\"card-body\">
      <div id=\"require_ssl_div\">
        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_NONE\" title=\"";
echo _gettext("Does not require SSL-encrypted connections.");
                // line 803
                echo "\" value=\"NONE\"";
                // line 804
                echo (((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 804) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 804)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 804)) : (null)) == "NONE") || ((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 804) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 804)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 804)) : (null)) == ""))) ? (" checked") : (""));
                echo ">
          <label for=\"ssl_type_NONE\">
            <code>REQUIRE NONE</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_ANY\" title=\"";
echo _gettext("Requires SSL-encrypted connections.");
                // line 812
                echo "\" value=\"ANY\"";
                // line 813
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 813) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 813)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 813)) : (null)) == "ANY")) ? (" checked") : (""));
                echo ">
          <label for=\"ssl_type_ANY\">
            <code>REQUIRE SSL</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_X509\" title=\"";
echo _gettext("Requires a valid X509 certificate.");
                // line 821
                echo "\" value=\"X509\"";
                // line 822
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 822) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 822)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 822)) : (null)) == "X509")) ? (" checked") : (""));
                echo ">
          <label for=\"ssl_type_X509\">
            <code>REQUIRE X509</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_SPECIFIED\" value=\"SPECIFIED\"";
                // line 830
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 830) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 830)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 830)) : (null)) == "SPECIFIED")) ? (" checked") : (""));
                echo ">
          <label for=\"ssl_type_SPECIFIED\">
            <code>SPECIFIED</code>
          </label>
        </div>

        <div id=\"specified_div\" style=\"padding-left:20px;\">
          <div class=\"item\">
            <label for=\"text_ssl_cipher\">
              <code>REQUIRE CIPHER</code>
            </label>
            <input type=\"text\" name=\"ssl_cipher\" id=\"text_ssl_cipher\" value=\"";
                // line 841
                (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_cipher", [], "any", true, true, false, 841) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_cipher", [], "any", false, false, false, 841)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_cipher", [], "any", false, false, false, 841), "html", null, true))) : (print (null)));
                echo "\" size=\"80\" title=\"";
echo _gettext("Requires that a specific cipher method be used for a connection.");
                // line 842
                echo "\"";
                // line 843
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 843) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 843)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 843)) : (null)) != "SPECIFIED")) ? (" disabled") : (""));
                echo ">
          </div>

          <div class=\"item\">
            <label for=\"text_x509_issuer\">
              <code>REQUIRE ISSUER</code>
            </label>
            <input type=\"text\" name=\"x509_issuer\" id=\"text_x509_issuer\" value=\"";
                // line 850
                (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "x509_issuer", [], "any", true, true, false, 850) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "x509_issuer", [], "any", false, false, false, 850)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "x509_issuer", [], "any", false, false, false, 850), "html", null, true))) : (print (null)));
                echo "\" size=\"80\" title=\"";
echo _gettext("Requires that a valid X509 certificate issued by this CA be presented.");
                // line 851
                echo "\"";
                // line 852
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 852) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 852)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 852)) : (null)) != "SPECIFIED")) ? (" disabled") : (""));
                echo ">
          </div>

          <div class=\"item\">
            <label for=\"text_x509_subject\">
              <code>REQUIRE SUBJECT</code>
            </label>
            <input type=\"text\" name=\"x509_subject\" id=\"text_x509_subject\" value=\"";
                // line 859
                (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "x509_subject", [], "any", true, true, false, 859) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "x509_subject", [], "any", false, false, false, 859)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "x509_subject", [], "any", false, false, false, 859), "html", null, true))) : (print (null)));
                echo "\" size=\"80\" title=\"";
echo _gettext("Requires that a valid X509 certificate with this subject be presented.");
                // line 860
                echo "\"";
                // line 861
                echo ((((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", true, true, false, 861) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 861)))) ? (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 861)) : (null)) != "SPECIFIED")) ? (" disabled") : (""));
                echo ">
          </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  ";
            }
            // line 869
            echo "  </div>
</div>
<input type=\"hidden\" name=\"grant_count\" value=\"";
            // line 871
            echo twig_escape_filter($this->env, (($context["grant_count"] ?? null) - ((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", true, true, false, 871)) ? (1) : (0))), "html", null, true);
            echo "\">

";
        }
        // line 874
        echo "
";
        // line 875
        if (($context["has_submit"] ?? null)) {
            // line 876
            echo "  <div>
    <input type=\"hidden\" name=\"update_privs\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Update user privileges");
            // line 878
            echo "\">
  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/privileges_table.twig";
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
        return array (  1589 => 878,  1584 => 876,  1582 => 875,  1579 => 874,  1573 => 871,  1569 => 869,  1558 => 861,  1556 => 860,  1552 => 859,  1542 => 852,  1540 => 851,  1536 => 850,  1526 => 843,  1524 => 842,  1520 => 841,  1506 => 830,  1496 => 822,  1494 => 821,  1483 => 813,  1481 => 812,  1470 => 804,  1468 => 803,  1453 => 790,  1449 => 789,  1442 => 783,  1433 => 777,  1429 => 776,  1422 => 770,  1413 => 764,  1409 => 763,  1402 => 757,  1393 => 751,  1389 => 750,  1382 => 744,  1373 => 738,  1367 => 735,  1362 => 733,  1360 => 732,  1354 => 728,  1345 => 721,  1337 => 718,  1334 => 717,  1332 => 716,  1322 => 708,  1314 => 705,  1311 => 704,  1309 => 703,  1299 => 695,  1291 => 692,  1288 => 691,  1286 => 690,  1283 => 689,  1281 => 688,  1270 => 681,  1263 => 677,  1260 => 676,  1258 => 675,  1248 => 667,  1240 => 664,  1237 => 663,  1235 => 662,  1231 => 660,  1222 => 653,  1215 => 650,  1213 => 649,  1210 => 648,  1208 => 647,  1205 => 646,  1196 => 639,  1188 => 636,  1185 => 635,  1183 => 634,  1173 => 626,  1165 => 623,  1162 => 622,  1160 => 621,  1150 => 613,  1142 => 610,  1139 => 609,  1137 => 608,  1127 => 600,  1119 => 597,  1116 => 596,  1114 => 595,  1104 => 587,  1097 => 584,  1095 => 583,  1092 => 582,  1090 => 581,  1080 => 573,  1072 => 570,  1069 => 569,  1067 => 568,  1064 => 567,  1062 => 566,  1055 => 561,  1051 => 560,  1041 => 553,  1032 => 546,  1024 => 543,  1021 => 542,  1019 => 541,  1009 => 533,  1001 => 530,  998 => 529,  996 => 528,  993 => 527,  991 => 526,  988 => 525,  979 => 518,  971 => 515,  968 => 514,  966 => 513,  963 => 512,  961 => 511,  958 => 510,  949 => 503,  941 => 500,  938 => 499,  936 => 498,  933 => 497,  931 => 496,  922 => 489,  914 => 486,  911 => 485,  909 => 484,  899 => 476,  891 => 473,  888 => 472,  886 => 471,  876 => 463,  868 => 460,  865 => 459,  863 => 458,  853 => 450,  845 => 447,  842 => 446,  840 => 445,  830 => 437,  822 => 434,  819 => 433,  817 => 432,  807 => 424,  801 => 420,  794 => 416,  788 => 412,  786 => 411,  784 => 410,  774 => 402,  766 => 399,  763 => 398,  761 => 397,  751 => 389,  743 => 386,  740 => 385,  738 => 384,  728 => 376,  722 => 372,  715 => 368,  709 => 364,  707 => 363,  705 => 362,  698 => 357,  694 => 356,  685 => 350,  676 => 343,  668 => 340,  665 => 339,  663 => 338,  660 => 337,  658 => 336,  649 => 329,  641 => 326,  638 => 325,  636 => 324,  626 => 316,  618 => 313,  615 => 312,  613 => 311,  603 => 303,  595 => 300,  592 => 299,  590 => 298,  580 => 290,  572 => 287,  569 => 286,  567 => 285,  560 => 280,  556 => 279,  548 => 274,  541 => 270,  535 => 269,  532 => 268,  529 => 267,  526 => 266,  523 => 265,  520 => 264,  517 => 263,  515 => 262,  512 => 261,  506 => 257,  503 => 255,  500 => 253,  498 => 252,  495 => 251,  488 => 246,  479 => 239,  472 => 236,  470 => 235,  466 => 233,  464 => 232,  455 => 225,  447 => 222,  436 => 213,  428 => 210,  417 => 201,  409 => 198,  398 => 189,  390 => 186,  379 => 177,  371 => 174,  360 => 165,  353 => 162,  351 => 161,  340 => 152,  332 => 149,  321 => 140,  313 => 137,  302 => 128,  294 => 125,  286 => 119,  282 => 117,  277 => 114,  271 => 111,  264 => 106,  255 => 103,  248 => 102,  244 => 101,  238 => 97,  230 => 92,  226 => 90,  221 => 87,  215 => 84,  208 => 79,  199 => 76,  192 => 75,  188 => 74,  182 => 70,  174 => 65,  170 => 63,  165 => 60,  159 => 57,  152 => 52,  143 => 49,  136 => 48,  132 => 47,  126 => 43,  118 => 38,  114 => 36,  109 => 33,  103 => 30,  96 => 25,  87 => 22,  80 => 21,  76 => 20,  70 => 16,  62 => 11,  56 => 8,  52 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/privileges_table.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\server\\privileges\\privileges_table.twig");
    }
}
