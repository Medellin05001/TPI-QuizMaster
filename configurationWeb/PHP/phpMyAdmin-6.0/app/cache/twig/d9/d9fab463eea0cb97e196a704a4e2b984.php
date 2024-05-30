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

/* table/structure/display_structure.twig */
class __TwigTemplate_116944ed8b18e7816f3d1df71a0ae801 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "table/page_with_secondary_tabs.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("table/page_with_secondary_tabs.twig", "table/structure/display_structure.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<h1 class=\"d-none d-print-block\">";
        echo twig_escape_filter($this->env, ($context["table"] ?? null), "html", null, true);
        echo "</h1>
<form method=\"post\" action=\"";
        // line 4
        echo $this->env->getFunction('url')->getCallable()("/table/structure");
        echo "\" name=\"fieldsForm\" id=\"fieldsForm\">
    ";
        // line 5
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
    <input type=\"hidden\" name=\"table_type\" value=";
        // line 7
        if (($context["db_is_system_schema"] ?? null)) {
            // line 8
            echo "\"information_schema\"";
        } elseif (        // line 9
($context["tbl_is_view"] ?? null)) {
            // line 10
            echo "\"view\"";
        } else {
            // line 12
            echo "\"table\"";
        }
        // line 13
        echo ">
    <div class=\"table-responsive-md\">
    <table id=\"tablestructure\" class=\"table table-striped table-hover w-auto align-middle\">
        ";
        // line 17
        echo "        <thead>
            <tr>
                <th class=\"d-print-none\"></th>
                <th>#</th>
                <th>";
echo _gettext("Name");
        // line 21
        echo "</th>
                <th>";
echo _gettext("Type");
        // line 22
        echo "</th>
                <th>";
echo _gettext("Collation");
        // line 23
        echo "</th>
                <th>";
echo _gettext("Attributes");
        // line 24
        echo "</th>
                <th>";
echo _gettext("Null");
        // line 25
        echo "</th>
                <th>";
echo _gettext("Default");
        // line 26
        echo "</th>
                ";
        // line 27
        if (($context["show_column_comments"] ?? null)) {
            // line 28
            echo "<th>";
echo _gettext("Comments");
            echo "</th>";
        }
        // line 30
        echo "                <th>";
echo _gettext("Extra");
        echo "</th>
                ";
        // line 32
        echo "                ";
        if (( !($context["db_is_system_schema"] ?? null) &&  !($context["tbl_is_view"] ?? null))) {
            // line 33
            echo "                    <th colspan=\"";
            echo (($this->env->getFunction('show_icons')->getCallable()("ActionLinksMode")) ? ("8") : ("9"));
            // line 34
            echo "\" class=\"action d-print-none\">";
echo _gettext("Action");
            echo "</th>
                ";
        }
        // line 36
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 40
        echo "        ";
        $context["rownum"] = 0;
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 42
            echo "            ";
            $context["rownum"] = (($context["rownum"] ?? null) + 1);
            // line 43
            echo "
            ";
            // line 44
            $context["extracted_columnspec"] = (($__internal_compile_0 = ($context["extracted_columnspecs"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["rownum"] ?? null)] ?? null) : null);
            // line 45
            echo "            ";
            $context["field_name"] = twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 45));
            // line 46
            echo "            ";
            // line 47
            echo "            ";
            $context["comments"] = (($__internal_compile_1 = ($context["row_comments"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["rownum"] ?? null)] ?? null) : null);
            // line 48
            echo "            ";
            // line 49
            echo "
        <tr>
            <td class=\"text-center d-print-none\">
                <input type=\"checkbox\" class=\"checkall\" name=\"selected_fld[]\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 52), "html", null, true);
            echo "\" id=\"checkbox_row_";
            echo twig_escape_filter($this->env, ($context["rownum"] ?? null), "html", null, true);
            echo "\">
            </td>
            <td class=\"text-end\">";
            // line 54
            echo twig_escape_filter($this->env, ($context["rownum"] ?? null), "html", null, true);
            echo "</td>
            <th class=\"text-nowrap\">
                <label for=\"checkbox_row_";
            // line 56
            echo twig_escape_filter($this->env, ($context["rownum"] ?? null), "html", null, true);
            echo "\">
                    ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["displayed_fields"] ?? null), ($context["rownum"] ?? null), [], "array", false, true, false, 57), "comment", [], "any", true, true, false, 57)) {
                // line 58
                echo "                        <span class=\"commented_column\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["displayed_fields"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["rownum"] ?? null)] ?? null) : null), "comment", [], "any", false, false, false, 58), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["displayed_fields"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["rownum"] ?? null)] ?? null) : null), "text", [], "any", false, false, false, 58), "html", null, true);
                echo "</span>
                    ";
            } else {
                // line 60
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["displayed_fields"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["rownum"] ?? null)] ?? null) : null), "text", [], "any", false, false, false, 60), "html", null, true);
                echo "
                    ";
            }
            // line 62
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["displayed_fields"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["rownum"] ?? null)] ?? null) : null), "icon", [], "any", false, false, false, 62);
            echo "
                </label>
            </th>
            <td";
            // line 65
            echo (((("set" != (($__internal_compile_6 = ($context["extracted_columnspec"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["type"] ?? null) : null)) && ("enum" != (($__internal_compile_7 = ($context["extracted_columnspec"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["type"] ?? null) : null)))) ? (" class=\"text-nowrap\"") : (""));
            echo ">
                <bdo dir=\"ltr\" lang=\"en\">
                    ";
            // line 67
            echo (($__internal_compile_8 = ($context["extracted_columnspec"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["displayed_type"] ?? null) : null);
            echo "
                    ";
            // line 68
            if (((( !(null === twig_get_attribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "columnCommentsFeature", [], "any", false, false, false, 68)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "browserTransformationFeature", [], "any", false, false, false, 68))) && ($context["browse_mime"] ?? null)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 69
($context["mime_map"] ?? null), twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 69), [], "array", false, true, false, 69), "mimetype", [], "array", true, true, false, 69))) {
                // line 70
                echo "                        <br>";
echo _gettext("Media type:");
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter((($__internal_compile_9 = (($__internal_compile_10 = ($context["mime_map"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 70)] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["mimetype"] ?? null) : null), ["_" => "/"])), "html", null, true);
                echo "
                    ";
            }
            // line 72
            echo "                </bdo>
            </td>
            <td>
            ";
            // line 75
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["row"], "collation", [], "any", false, false, false, 75))) {
                // line 76
                echo "                <dfn title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["collations"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["row"], "collation", [], "any", false, false, false, 76)] ?? null) : null), "description", [], "any", false, false, false, 76), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = ($context["collations"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["row"], "collation", [], "any", false, false, false, 76)] ?? null) : null), "name", [], "any", false, false, false, 76), "html", null, true);
                echo "</dfn>
            ";
            }
            // line 78
            echo "            </td>
            <td class=\"column_attribute text-nowrap\">";
            // line 79
            echo twig_escape_filter($this->env, (($__internal_compile_13 = ($context["attributes"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["rownum"] ?? null)] ?? null) : null), "html", null, true);
            echo "</td>
            <td>";
            // line 80
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "isNull", [], "any", false, false, false, 80)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
            echo "</td>
            <td class=\"text-nowrap\">";
            // line 82
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["row"], "default", [], "any", false, false, false, 82))) {
                // line 83
                if (((($__internal_compile_14 = ($context["extracted_columnspec"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["type"] ?? null) : null) == "bit")) {
                    // line 84
                    echo twig_escape_filter($this->env, $this->env->getFilter('convert_bit_default_value')->getCallable()(twig_get_attribute($this->env, $this->source, $context["row"], "default", [], "any", false, false, false, 84)), "html", null, true);
                } else {
                    // line 86
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "default", [], "any", false, false, false, 86), "html", null, true);
                }
            } elseif (twig_get_attribute($this->env, $this->source,             // line 88
$context["row"], "isNull", [], "any", false, false, false, 88)) {
                // line 89
                echo "<em>NULL</em>";
            } else {
                // line 91
                echo "<em>";
echo _pgettext("None for default", "None");
                echo "</em>";
            }
            // line 93
            echo "</td>
            ";
            // line 94
            if (($context["show_column_comments"] ?? null)) {
                // line 95
                echo "                <td>
                    ";
                // line 96
                echo twig_escape_filter($this->env, ($context["comments"] ?? null), "html", null, true);
                echo "
                </td>
            ";
            }
            // line 99
            echo "            <td class=\"text-nowrap\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "extra", [], "any", false, false, false, 99)), "html", null, true);
            echo "</td>
            ";
            // line 100
            if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
                // line 101
                echo "                <td class=\"edit text-center d-print-none\">
                    <a class=\"change_column_anchor ajax\" href=\"";
                // line 102
                echo $this->env->getFunction('url')->getCallable()("/table/structure/change", ["db" =>                 // line 103
($context["db"] ?? null), "table" =>                 // line 104
($context["table"] ?? null), "field" => twig_get_attribute($this->env, $this->source,                 // line 105
$context["row"], "field", [], "any", false, false, false, 105), "change_column" => 1]);
                // line 107
                echo "\">
                      ";
                // line 108
                echo $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Change"));
                echo "
                    </a>
                </td>
                <td class=\"drop text-center d-print-none\">
                    <a class=\"drop_column_anchor ajax\" href=\"";
                // line 112
                echo $this->env->getFunction('url')->getCallable()("/sql");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" =>                 // line 113
($context["db"] ?? null), "table" =>                 // line 114
($context["table"] ?? null), "sql_query" => (((("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(                // line 115
($context["table"] ?? null))) . " DROP ") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 115))) . ";"), "dropped_column" => twig_get_attribute($this->env, $this->source,                 // line 116
$context["row"], "field", [], "any", false, false, false, 116), "purge" => true, "message_to_show" => twig_sprintf(_gettext("Column %s has been dropped."), twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 118
$context["row"], "field", [], "any", false, false, false, 118)))], "", false);
                // line 119
                echo "\">
                      ";
                // line 120
                echo $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Drop"));
                echo "
                    </a>
                </td>
            ";
            }
            // line 124
            echo "
            ";
            // line 125
            if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
                // line 126
                echo "                ";
                $context["type"] = (( !twig_test_empty((($__internal_compile_15 = ($context["extracted_columnspec"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["print_type"] ?? null) : null))) ? ((($__internal_compile_16 = ($context["extracted_columnspec"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["print_type"] ?? null) : null)) : (""));
                // line 127
                echo "                <td class=\"d-print-none\">
                  ";
                // line 128
                if (($context["hide_structure_actions"] ?? null)) {
                    // line 129
                    echo "                  <div class=\"dropdown\">
                    <button class=\"btn btn-link p-0 dropdown-toggle\" type=\"button\" id=\"moreActionsButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">";
echo _gettext("More");
                    // line 130
                    echo "</button>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"moreActionsButton\">
                  ";
                } else {
                    // line 133
                    echo "                    <ul class=\"nav\">
                  ";
                }
                // line 135
                echo "                        <li class=\"";
                echo (( !($context["hide_structure_actions"] ?? null)) ? ("nav-item ") : (""));
                echo "primary text-nowrap\">
                          ";
                // line 136
                if (((((($context["type"] ?? null) == "text") || (($context["type"] ?? null) == "blob")) || (($context["tbl_storage_engine"] ?? null) == "ARCHIVE")) || (($context["primary"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["primary"] ?? null), "hasColumn", [($context["field_name"] ?? null)], "method", false, false, false, 136)))) {
                    // line 137
                    echo "                            <span class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item-text") : ("nav-link px-1"));
                    echo " disabled\">";
                    echo $this->env->getFunction('get_icon')->getCallable()("bd_primary", _gettext("Primary"));
                    echo "</span>
                          ";
                } else {
                    // line 139
                    echo "                            <a rel=\"samepage\" class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item") : ("nav-link px-1"));
                    echo " ajax add_key d-print-none add_primary_key_anchor\" href=\"";
                    echo $this->env->getFunction('url')->getCallable()("/table/structure/add-key");
                    echo "\" data-post=\"";
                    echo $this->env->getFunction('get_common')->getCallable()(["db" =>                     // line 140
($context["db"] ?? null), "table" =>                     // line 141
($context["table"] ?? null), "sql_query" => ((((("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(                    // line 142
($context["table"] ?? null))) . ((($context["primary"] ?? null)) ? (" DROP PRIMARY KEY,") : (""))) . " ADD PRIMARY KEY(") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 142))) . ");"), "message_to_show" => twig_sprintf(_gettext("A primary key has been added on %s."), twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                     // line 143
$context["row"], "field", [], "any", false, false, false, 143)))], "", false);
                    // line 144
                    echo "\">
                              ";
                    // line 145
                    echo $this->env->getFunction('get_icon')->getCallable()("b_primary", _gettext("Primary"));
                    echo "
                            </a>
                          ";
                }
                // line 148
                echo "                        </li>

                        <li class=\"";
                // line 150
                echo (( !($context["hide_structure_actions"] ?? null)) ? ("nav-item ") : (""));
                echo "add_unique unique text-nowrap\">
                          ";
                // line 151
                if ((((($context["type"] ?? null) == "text") || (($context["type"] ?? null) == "blob")) || (($context["tbl_storage_engine"] ?? null) == "ARCHIVE"))) {
                    // line 152
                    echo "                            <span class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item-text") : ("nav-link px-1"));
                    echo " disabled\">";
                    echo $this->env->getFunction('get_icon')->getCallable()("bd_unique", _gettext("Unique"));
                    echo "</span>
                          ";
                } else {
                    // line 154
                    echo "                            <a rel=\"samepage\" class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item") : ("nav-link px-1"));
                    echo " ajax add_key d-print-none add_unique_anchor\" href=\"";
                    echo $this->env->getFunction('url')->getCallable()("/table/structure/add-key");
                    echo "\" data-post=\"";
                    echo $this->env->getFunction('get_common')->getCallable()(["db" =>                     // line 155
($context["db"] ?? null), "table" =>                     // line 156
($context["table"] ?? null), "sql_query" => (((("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(                    // line 157
($context["table"] ?? null))) . " ADD UNIQUE(") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 157))) . ");"), "message_to_show" => twig_sprintf(_gettext("An index has been added on %s."), twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                     // line 158
$context["row"], "field", [], "any", false, false, false, 158)))], "", false);
                    // line 159
                    echo "\">
                              ";
                    // line 160
                    echo $this->env->getFunction('get_icon')->getCallable()("b_unique", _gettext("Unique"));
                    echo "
                            </a>
                          ";
                }
                // line 163
                echo "                        </li>

                        <li class=\"";
                // line 165
                echo (( !($context["hide_structure_actions"] ?? null)) ? ("nav-item ") : (""));
                echo "add_index text-nowrap\">
                          ";
                // line 166
                if ((((($context["type"] ?? null) == "text") || (($context["type"] ?? null) == "blob")) || (($context["tbl_storage_engine"] ?? null) == "ARCHIVE"))) {
                    // line 167
                    echo "                            <span class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item-text") : ("nav-link px-1"));
                    echo " disabled\">";
                    echo $this->env->getFunction('get_icon')->getCallable()("bd_index", _gettext("Index"));
                    echo "</span>
                          ";
                } else {
                    // line 169
                    echo "                            <a rel=\"samepage\" class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item") : ("nav-link px-1"));
                    echo " ajax add_key d-print-none add_index_anchor\" href=\"";
                    echo $this->env->getFunction('url')->getCallable()("/table/structure/add-key");
                    echo "\" data-post=\"";
                    echo $this->env->getFunction('get_common')->getCallable()(["db" =>                     // line 170
($context["db"] ?? null), "table" =>                     // line 171
($context["table"] ?? null), "sql_query" => (((("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(                    // line 172
($context["table"] ?? null))) . " ADD INDEX(") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 172))) . ");"), "message_to_show" => twig_sprintf(_gettext("An index has been added on %s."), twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                     // line 173
$context["row"], "field", [], "any", false, false, false, 173)))], "", false);
                    // line 174
                    echo "\">
                              ";
                    // line 175
                    echo $this->env->getFunction('get_icon')->getCallable()("b_index", _gettext("Index"));
                    echo "
                            </a>
                          ";
                }
                // line 178
                echo "                        </li>

                        ";
                // line 180
                $context["spatial_types"] = ["geometry", "point", "linestring", "polygon", "multipoint", "multilinestring", "multipolygon", "geomtrycollection"];
                // line 190
                echo "                        <li class=\"";
                echo (( !($context["hide_structure_actions"] ?? null)) ? ("nav-item ") : (""));
                echo "spatial text-nowrap\">
                          ";
                // line 191
                if (((((($context["type"] ?? null) == "text") || (($context["type"] ?? null) == "blob")) || (($context["tbl_storage_engine"] ?? null) == "ARCHIVE")) || (!twig_in_filter(($context["type"] ?? null), ($context["spatial_types"] ?? null)) && ((($context["tbl_storage_engine"] ?? null) == "MYISAM") || (($context["mysql_int_version"] ?? null) >= 50705))))) {
                    // line 192
                    echo "                            <span class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item-text") : ("nav-link px-1"));
                    echo " disabled\">";
                    echo $this->env->getFunction('get_icon')->getCallable()("bd_spatial", _gettext("Spatial"));
                    echo "</span>
                          ";
                } else {
                    // line 194
                    echo "                            <a rel=\"samepage\" class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item") : ("nav-link px-1"));
                    echo " ajax add_key d-print-none add_spatial_anchor\" href=\"";
                    echo $this->env->getFunction('url')->getCallable()("/table/structure/add-key");
                    echo "\" data-post=\"";
                    echo $this->env->getFunction('get_common')->getCallable()(["db" =>                     // line 195
($context["db"] ?? null), "table" =>                     // line 196
($context["table"] ?? null), "sql_query" => (((("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(                    // line 197
($context["table"] ?? null))) . " ADD SPATIAL(") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 197))) . ");"), "message_to_show" => twig_sprintf(_gettext("An index has been added on %s."), twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                     // line 198
$context["row"], "field", [], "any", false, false, false, 198)))], "", false);
                    // line 199
                    echo "\">
                              ";
                    // line 200
                    echo $this->env->getFunction('get_icon')->getCallable()("b_spatial", _gettext("Spatial"));
                    echo "
                            </a>
                          ";
                }
                // line 203
                echo "                        </li>

                        ";
                // line 206
                echo "                        <li class=\"";
                echo (( !($context["hide_structure_actions"] ?? null)) ? ("nav-item ") : (""));
                echo "fulltext text-nowrap\">
                        ";
                // line 207
                if ((( !twig_test_empty(($context["tbl_storage_engine"] ?? null)) && ((((                // line 208
($context["tbl_storage_engine"] ?? null) == "MYISAM") || (                // line 209
($context["tbl_storage_engine"] ?? null) == "ARIA")) || (                // line 210
($context["tbl_storage_engine"] ?? null) == "MARIA")) || ((                // line 211
($context["tbl_storage_engine"] ?? null) == "INNODB") && (($context["mysql_int_version"] ?? null) >= 50604)))) && (twig_in_filter("text",                 // line 212
($context["type"] ?? null)) || twig_in_filter("char", ($context["type"] ?? null))))) {
                    // line 213
                    echo "                            <a rel=\"samepage\" class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item") : ("nav-link px-1"));
                    echo " ajax add_key add_fulltext_anchor\" href=\"";
                    echo $this->env->getFunction('url')->getCallable()("/table/structure/add-key");
                    echo "\" data-post=\"";
                    echo $this->env->getFunction('get_common')->getCallable()(["db" =>                     // line 214
($context["db"] ?? null), "table" =>                     // line 215
($context["table"] ?? null), "sql_query" => (((("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(                    // line 216
($context["table"] ?? null))) . " ADD FULLTEXT(") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 216))) . ");"), "message_to_show" => twig_sprintf(_gettext("An index has been added on %s."), twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                     // line 217
$context["row"], "field", [], "any", false, false, false, 217)))], "", false);
                    // line 218
                    echo "\">
                              ";
                    // line 219
                    echo $this->env->getFunction('get_icon')->getCallable()("b_ftext", _gettext("Fulltext"));
                    echo "
                            </a>
                        ";
                } else {
                    // line 222
                    echo "                            <span class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item-text") : ("nav-link px-1"));
                    echo " disabled\">";
                    echo $this->env->getFunction('get_icon')->getCallable()("bd_ftext", _gettext("Fulltext"));
                    echo "</span>
                        ";
                }
                // line 224
                echo "                        </li>

                        ";
                // line 227
                echo "                        <li class=\"";
                echo (( !($context["hide_structure_actions"] ?? null)) ? ("nav-item ") : (""));
                echo "browse text-nowrap\">
                            <a class=\"";
                // line 228
                echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item") : ("nav-link px-1"));
                echo "\" href=\"";
                echo $this->env->getFunction('url')->getCallable()("/sql");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" =>                 // line 229
($context["db"] ?? null), "table" =>                 // line 230
($context["table"] ?? null), "sql_query" => ((((((((("SELECT COUNT(*) AS " . $this->env->getFunction('backquote')->getCallable()(_gettext("Rows"))) . ", ") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source,                 // line 232
$context["row"], "field", [], "any", false, false, false, 232))) . " FROM ") . $this->env->getFunction('backquote')->getCallable()(                // line 233
($context["table"] ?? null))) . " GROUP BY ") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source,                 // line 234
$context["row"], "field", [], "any", false, false, false, 234))) . " ORDER BY ") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source,                 // line 235
$context["row"], "field", [], "any", false, false, false, 235))), "is_browse_distinct" => true], "", false);
                // line 237
                echo "\">
                              ";
                // line 238
                echo $this->env->getFunction('get_icon')->getCallable()("b_browse", _gettext("Distinct values"));
                echo "
                            </a>
                        </li>
                        ";
                // line 241
                if ( !(null === twig_get_attribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "centralColumnsFeature", [], "any", false, false, false, 241))) {
                    // line 242
                    echo "                            <li class=\"";
                    echo (( !($context["hide_structure_actions"] ?? null)) ? ("nav-item ") : (""));
                    echo "browse text-nowrap\">
                            ";
                    // line 243
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["row"], "field", [], "any", false, false, false, 243), ($context["central_list"] ?? null))) {
                        // line 244
                        echo "                                <a class=\"";
                        echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item") : ("nav-link px-1"));
                        echo "\" href=\"";
                        echo $this->env->getFunction('url')->getCallable()("/table/structure/central-columns-remove");
                        echo "\" data-post=\"";
                        echo $this->env->getFunction('get_common')->getCallable()(["db" =>                         // line 245
($context["db"] ?? null), "table" =>                         // line 246
($context["table"] ?? null), "selected_fld" => [twig_get_attribute($this->env, $this->source,                         // line 247
$context["row"], "field", [], "any", false, false, false, 247)]]);
                        // line 248
                        echo "\">
                                    ";
                        // line 249
                        echo $this->env->getFunction('get_icon')->getCallable()("centralColumns_delete", _gettext("Remove from central columns"));
                        echo "
                                </a>
                            ";
                    } else {
                        // line 252
                        echo "                                <a class=\"";
                        echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item") : ("nav-link px-1"));
                        echo "\" href=\"";
                        echo $this->env->getFunction('url')->getCallable()("/table/structure/central-columns-add");
                        echo "\" data-post=\"";
                        echo $this->env->getFunction('get_common')->getCallable()(["db" =>                         // line 253
($context["db"] ?? null), "table" =>                         // line 254
($context["table"] ?? null), "selected_fld" => [twig_get_attribute($this->env, $this->source,                         // line 255
$context["row"], "field", [], "any", false, false, false, 255)]]);
                        // line 256
                        echo "\">
                                    ";
                        // line 257
                        echo $this->env->getFunction('get_icon')->getCallable()("centralColumns_add", _gettext("Add to central columns"));
                        echo "
                                </a>
                            ";
                    }
                    // line 260
                    echo "                            </li>
                        ";
                }
                // line 262
                echo "                  ";
                if ( !($context["hide_structure_actions"] ?? null)) {
                    // line 263
                    echo "                    </ul>
                  ";
                } else {
                    // line 265
                    echo "                    </ul>
                  </div>
                  ";
                }
                // line 268
                echo "                </td>
            ";
            }
            // line 270
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "        </tbody>
    </table>
    </div>
    <div class=\"d-print-none\">
        ";
        // line 276
        $this->loadTemplate("select_all.twig", "table/structure/display_structure.twig", 276)->display(twig_to_array(["text_dir" =>         // line 277
($context["text_dir"] ?? null), "form_name" => "fieldsForm"]));
        // line 280
        echo "
        <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
        // line 281
        echo $this->env->getFunction('url')->getCallable()("/table/structure/browse");
        echo "\">
          ";
        // line 282
        echo $this->env->getFunction('get_icon')->getCallable()("b_browse", _gettext("Browse"));
        echo "
        </button>

        ";
        // line 285
        if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 286
            echo "          <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
            echo $this->env->getFunction('url')->getCallable()("/table/structure/change");
            echo "\">
            ";
            // line 287
            echo $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Change"));
            echo "
          </button>
          <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
            // line 289
            echo $this->env->getFunction('url')->getCallable()("/table/structure/drop-confirm");
            echo "\">
            ";
            // line 290
            echo $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Drop"));
            echo "
          </button>

          ";
            // line 293
            if ((($context["tbl_storage_engine"] ?? null) != "ARCHIVE")) {
                // line 294
                echo "            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                echo $this->env->getFunction('url')->getCallable()("/table/structure/primary");
                echo "\">
              ";
                // line 295
                echo $this->env->getFunction('get_icon')->getCallable()("b_primary", _gettext("Primary"));
                echo "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                // line 297
                echo $this->env->getFunction('url')->getCallable()("/table/structure/unique");
                echo "\">
              ";
                // line 298
                echo $this->env->getFunction('get_icon')->getCallable()("b_unique", _gettext("Unique"));
                echo "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                // line 300
                echo $this->env->getFunction('url')->getCallable()("/table/structure/index");
                echo "\">
              ";
                // line 301
                echo $this->env->getFunction('get_icon')->getCallable()("b_index", _gettext("Index"));
                echo "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                // line 303
                echo $this->env->getFunction('url')->getCallable()("/table/structure/spatial");
                echo "\">
              ";
                // line 304
                echo $this->env->getFunction('get_icon')->getCallable()("b_spatial", _gettext("Spatial"));
                echo "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                // line 306
                echo $this->env->getFunction('url')->getCallable()("/table/structure/fulltext");
                echo "\">
              ";
                // line 307
                echo $this->env->getFunction('get_icon')->getCallable()("b_ftext", _gettext("Fulltext"));
                echo "
            </button>

            ";
                // line 310
                if ( !(null === twig_get_attribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "centralColumnsFeature", [], "any", false, false, false, 310))) {
                    // line 311
                    echo "              <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                    echo $this->env->getFunction('url')->getCallable()("/table/structure/central-columns-add");
                    echo "\">
                ";
                    // line 312
                    echo $this->env->getFunction('get_icon')->getCallable()("centralColumns_add", _gettext("Add to central columns"));
                    echo "
              </button>
              <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                    // line 314
                    echo $this->env->getFunction('url')->getCallable()("/table/structure/central-columns-remove");
                    echo "\">
                ";
                    // line 315
                    echo $this->env->getFunction('get_icon')->getCallable()("centralColumns_delete", _gettext("Remove from central columns"));
                    echo "
              </button>
            ";
                }
                // line 318
                echo "          ";
            }
            // line 319
            echo "        ";
        }
        // line 320
        echo "    </div>
</form>
<hr class=\"d-print-none\">

<div class=\"modal fade\" id=\"moveColumnsModal\" tabindex=\"-1\" aria-labelledby=\"moveColumnsModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"moveColumnsModalLabel\">";
echo _gettext("Move columns");
        // line 328
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
        // line 329
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
        <div id=\"move_columns_dialog\" title=\"";
echo _gettext("Move columns");
        // line 332
        echo "\">
          <p>";
echo _gettext("Move the columns by dragging them up and down.");
        // line 333
        echo "</p>
          <form action=\"";
        // line 334
        echo $this->env->getFunction('url')->getCallable()("/table/structure/move-columns");
        echo "\" name=\"move_column_form\" id=\"move_column_form\">
            <div>
              ";
        // line 336
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
              <ul></ul>
            </div>
          </form>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary\" id=\"designerModalGoButton\">";
echo _gettext("Go");
        // line 343
        echo "</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalPreviewButton\" data-bs-target=\"#designerModalPreviewModal\" data-bs-toggle=\"modal\">";
echo _gettext("Preview SQL");
        // line 344
        echo "</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalCloseButton\" data-bs-dismiss=\"modal\">";
echo _gettext("Close");
        // line 345
        echo "</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"designerModalPreviewModal\" aria-hidden=\"true\" aria-labelledby=\"designerModalPreviewModalLabel\" tabindex=\"-1\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"designerModalPreviewModalLabel\">";
echo _gettext("Preview SQL");
        // line 354
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
        // line 355
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"spinner-border\" role=\"status\">
          <span class=\"visually-hidden\">";
echo _gettext("Loading…");
        // line 359
        echo "</span>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button class=\"btn btn-primary\" data-bs-target=\"#moveColumnsModal\" data-bs-toggle=\"modal\">";
echo _gettext("Go back");
        // line 363
        echo "</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"moveColumnsErrorModal\" tabindex=\"-1\" aria-labelledby=\"moveColumnsErrorModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"moveColumnsErrorModalLabel\">";
echo _gettext("Error");
        // line 372
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
        // line 373
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
echo _gettext("OK");
        // line 378
        echo "</button>
      </div>
    </div>
  </div>
</div>

";
        // line 385
        echo "<div id=\"structure-action-links\" class=\"d-print-none\">
    ";
        // line 386
        if ((($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 387
            echo "        ";
            echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/view/create"), ["db" =>             // line 389
($context["db"] ?? null), "table" => ($context["table"] ?? null)], $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Edit view"), true));
            // line 391
            echo "
    ";
        }
        // line 393
        echo "    <button type=\"button\" class=\"btn btn-link p-0 jsPrintButton\">";
        echo $this->env->getFunction('get_icon')->getCallable()("b_print", _gettext("Print"), true);
        echo "</button>
    ";
        // line 394
        if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 395
            echo "        ";
            // line 396
            echo "        ";
            if (((($context["mysql_int_version"] ?? null) < 80000) || ($context["is_mariadb"] ?? null))) {
                // line 397
                echo "          <a class=\"me-0\" href=\"";
                echo $this->env->getFunction('url')->getCallable()("/sql");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" =>                 // line 398
($context["db"] ?? null), "table" =>                 // line 399
($context["table"] ?? null), "sql_query" => (("SELECT * FROM " . $this->env->getFunction('backquote')->getCallable()(                // line 400
($context["table"] ?? null))) . " PROCEDURE ANALYSE()"), "session_max_rows" => "all"], "", false);
                // line 402
                echo "\">
            ";
                // line 403
                echo $this->env->getFunction('get_icon')->getCallable()("b_tblanalyse", _gettext("Propose table structure"), true);
                // line 407
                echo "
          </a>
          ";
                // line 409
                echo $this->env->getFunction('show_mysql_docu')->getCallable()("procedure_analyse");
                echo "
        ";
            }
            // line 411
            echo "        ";
            if (($context["is_active"] ?? null)) {
                // line 412
                echo "            <a href=\"";
                echo $this->env->getFunction('url')->getCallable()("/table/tracking", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
                echo "\">
                ";
                // line 413
                echo $this->env->getFunction('get_icon')->getCallable()("eye", _gettext("Track table"), true);
                echo "
            </a>
        ";
            }
            // line 416
            echo "        <a href=\"#\" id=\"move_columns_anchor\">
            ";
            // line 417
            echo $this->env->getFunction('get_icon')->getCallable()("b_move", _gettext("Move columns"), true);
            echo "
        </a>
        <a href=\"";
            // line 419
            echo $this->env->getFunction('url')->getCallable()("/normalization", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
            echo "\">
            ";
            // line 420
            echo $this->env->getFunction('get_icon')->getCallable()("normalize", _gettext("Normalize"), true);
            echo "
        </a>
    ";
        }
        // line 423
        echo "    ";
        if ((($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 424
            echo "        ";
            if (($context["is_active"] ?? null)) {
                // line 425
                echo "            <a href=\"";
                echo $this->env->getFunction('url')->getCallable()("/table/tracking", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
                echo "\">
                ";
                // line 426
                echo $this->env->getFunction('get_icon')->getCallable()("eye", _gettext("Track view"), true);
                echo "
            </a>
        ";
            }
            // line 429
            echo "    ";
        }
        // line 430
        echo "</div>
";
        // line 431
        if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 432
            echo "    <form method=\"post\" action=\"";
            echo $this->env->getFunction('url')->getCallable()("/table/add-field");
            echo "\" id=\"addColumns\" name=\"addColumns\" class=\"d-print-none\">
        ";
            // line 433
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
            echo "
        ";
            // line 434
            if ($this->env->getFunction('show_icons')->getCallable()("ActionLinksMode")) {
                // line 435
                echo "            ";
                echo $this->env->getFunction('get_image')->getCallable()("b_insrow", _gettext("Add column"));
                echo "&nbsp;
        ";
            }
            // line 437
            echo "        ";
            $context["num_fields"] = ('' === $tmp = "<input type=\"number\" name=\"num_fields\" value=\"1\" onfocus=\"this.select()\" min=\"1\" required>") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 440
            echo "        ";
            echo twig_sprintf(_gettext("Add %s column(s)"), ($context["num_fields"] ?? null));
            echo "
        <input type=\"hidden\" name=\"field_where\" value=\"after\">&nbsp;
        ";
            // line 443
            echo "        <select name=\"after_field\">
            <option value=\"first\" data-pos=\"first\">
                ";
echo _gettext("at beginning of table");
            // line 446
            echo "            </option>
            ";
            // line 447
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns_list"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["one_column_name"]) {
                // line 448
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["one_column_name"], "html", null, true);
                echo "\"";
                // line 449
                echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "revindex0", [], "any", false, false, false, 449) == 0)) ? (" selected=\"selected\"") : (""));
                echo ">
                    ";
                // line 450
                echo twig_escape_filter($this->env, twig_sprintf(_gettext("after %s"), $context["one_column_name"]), "html", null, true);
                echo "
                </option>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['one_column_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 453
            echo "        </select>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Go");
            // line 454
            echo "\">
    </form>
";
        }
        // line 457
        echo "
";
        // line 458
        if ((( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null)) && (($context["tbl_storage_engine"] ?? null) != "ARCHIVE"))) {
            // line 459
            echo "  <div id=\"index_div\" class=\"card mb-3 ajax\">
    <div class=\"card-header\">
      ";
echo _gettext("Indexes");
            // line 462
            echo "      ";
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("optimizing-database-structure");
            echo "
    </div>

    <div class=\"card-body index_info\">
      ";
            // line 466
            if ( !twig_test_empty(($context["indexes"] ?? null))) {
                // line 467
                echo "        ";
                echo ($context["indexes_duplicates"] ?? null);
                echo "

        ";
                // line 469
                echo twig_include($this->env, $context, "modals/preview_sql_confirmation.twig");
                echo "
        <div class=\"table-responsive jsresponsive\">
          <table class=\"table table-striped table-hover table-sm w-auto align-middle\" id=\"table_index\">
            <thead>
              <tr>
                <th colspan=\"3\" class=\"d-print-none\">";
echo _gettext("Action");
                // line 474
                echo "</th>
                <th>";
echo _gettext("Keyname");
                // line 475
                echo "</th>
                <th>";
echo _gettext("Type");
                // line 476
                echo "</th>
                <th>";
echo _gettext("Unique");
                // line 477
                echo "</th>
                <th>";
echo _gettext("Packed");
                // line 478
                echo "</th>
                <th>";
echo _gettext("Column");
                // line 479
                echo "</th>
                <th>";
echo _gettext("Cardinality");
                // line 480
                echo "</th>
                <th>";
echo _gettext("Collation");
                // line 481
                echo "</th>
                <th>";
echo _gettext("Null");
                // line 482
                echo "</th>
                <th>";
echo _gettext("Comment");
                // line 483
                echo "</th>
              </tr>
            </thead>

          <tbody class=\"row_span\">
            ";
                // line 488
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["indexes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                    // line 489
                    echo "                ";
                    $context["columns_count"] = twig_get_attribute($this->env, $this->source, $context["index"], "getColumnCount", [], "method", false, false, false, 489);
                    // line 490
                    echo "                <tr class=\"noclick\">
                <td rowspan=\"";
                    // line 491
                    echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                    echo "\" class=\"edit_index d-print-none ajax\">
                  <a class=\"ajax\" href=\"";
                    // line 492
                    echo $this->env->getFunction('url')->getCallable()("/table/indexes");
                    echo "\" data-post=\"";
                    echo $this->env->getFunction('get_common')->getCallable()(["db" =>                     // line 493
($context["db"] ?? null), "table" =>                     // line 494
($context["table"] ?? null), "index" => twig_get_attribute($this->env, $this->source,                     // line 495
$context["index"], "getName", [], "method", false, false, false, 495)], "", false);
                    // line 496
                    echo "\">
                    ";
                    // line 497
                    echo $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Edit"));
                    echo "
                  </a>
                </td>
                <td rowspan=\"";
                    // line 500
                    echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                    echo "\" class=\"rename_index d-print-none ajax\" >
                  <a class=\"ajax\" href=\"";
                    // line 501
                    echo $this->env->getFunction('url')->getCallable()("/table/indexes/rename");
                    echo "\" data-post=\"";
                    echo $this->env->getFunction('get_common')->getCallable()(["db" =>                     // line 502
($context["db"] ?? null), "table" =>                     // line 503
($context["table"] ?? null), "index" => twig_get_attribute($this->env, $this->source,                     // line 504
$context["index"], "getName", [], "method", false, false, false, 504)], "", false);
                    // line 505
                    echo "\">
                    ";
                    // line 506
                    echo $this->env->getFunction('get_icon')->getCallable()("b_rename", _gettext("Rename"));
                    echo "
                  </a>
                </td>
                <td rowspan=\"";
                    // line 509
                    echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                    echo "\" class=\"d-print-none\">
                  ";
                    // line 510
                    if ((twig_get_attribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 510) == "PRIMARY")) {
                        // line 511
                        echo "                    ";
                        $context["index_params"] = ["sql_query" => (("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(                        // line 512
($context["table"] ?? null))) . " DROP PRIMARY KEY;"), "message_to_show" => _gettext("The primary key has been dropped.")];
                        // line 515
                        echo "                  ";
                    } else {
                        // line 516
                        echo "                    ";
                        $context["index_params"] = ["sql_query" => (((("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(                        // line 517
($context["table"] ?? null))) . " DROP INDEX ") . $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 517))) . ";"), "message_to_show" => twig_sprintf(_gettext("Index %s has been dropped."), twig_get_attribute($this->env, $this->source,                         // line 518
$context["index"], "getName", [], "method", false, false, false, 518))];
                        // line 520
                        echo "                  ";
                    }
                    // line 521
                    echo "
                  <input type=\"hidden\" class=\"drop_primary_key_index_msg\" value=\"";
                    // line 522
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["index_params"] ?? null), "sql_query", [], "any", false, false, false, 522), "html", null, true);
                    echo "\">
                  ";
                    // line 523
                    echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/sql"), twig_array_merge(                    // line 525
($context["index_params"] ?? null), ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]), $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Drop")), ["class" => "drop_primary_key_index_anchor ajax"]);
                    // line 528
                    echo "
                </td>
                <th rowspan=\"";
                    // line 530
                    echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 530), "html", null, true);
                    echo "</th>
                <td rowspan=\"";
                    // line 531
                    echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["index"], "getType", [], "method", true, true, false, 531)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["index"], "getType", [], "method", false, false, false, 531), twig_get_attribute($this->env, $this->source, $context["index"], "getChoice", [], "method", false, false, false, 531))) : (twig_get_attribute($this->env, $this->source, $context["index"], "getChoice", [], "method", false, false, false, 531))), "html", null, true);
                    echo "</td>
                <td rowspan=\"";
                    // line 532
                    echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["index"], "isUnique", [], "method", false, false, false, 532)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                    echo "</td>
                <td rowspan=\"";
                    // line 533
                    echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["index"], "isPacked", [], "method", false, false, false, 533);
                    echo "</td>

                ";
                    // line 535
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["index"], "getColumns", [], "method", false, false, false, 535));
                    foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                        // line 536
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["column"], "getSeqInIndex", [], "method", false, false, false, 536) > 1)) {
                            // line 537
                            echo "                    <tr class=\"noclick\">
                  ";
                        }
                        // line 539
                        echo "                  <td>
                    ";
                        // line 540
                        if (twig_get_attribute($this->env, $this->source, $context["column"], "hasExpression", [], "method", false, false, false, 540)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getExpression", [], "method", false, false, false, 540), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getName", [], "method", false, false, false, 540), "html", null, true);
                        }
                        // line 541
                        echo "                    ";
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["column"], "getSubPart", [], "method", false, false, false, 541))) {
                            // line 542
                            echo "                      (";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getSubPart", [], "method", false, false, false, 542), "html", null, true);
                            echo ")
                    ";
                        }
                        // line 544
                        echo "                  </td>
                  <td>";
                        // line 545
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getCardinality", [], "method", false, false, false, 545), "html", null, true);
                        echo "</td>
                  <td>";
                        // line 546
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getCollation", [], "method", false, false, false, 546), "html", null, true);
                        echo "</td>
                  <td>";
                        // line 547
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getNull", [], "method", false, false, false, 547), "html", null, true);
                        echo "</td>

                  ";
                        // line 549
                        if ((twig_get_attribute($this->env, $this->source, $context["column"], "getSeqInIndex", [], "method", false, false, false, 549) == 1)) {
                            // line 550
                            echo "                    <td rowspan=\"";
                            echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "getComments", [], "method", false, false, false, 550), "html", null, true);
                            echo "</td>
                  ";
                        }
                        // line 552
                        echo "                  </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 554
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 555
                echo "            </tbody>
          </table>
        </div>
      ";
            } else {
                // line 559
                echo "        <div class=\"no_indexes_defined\">";
                echo $this->env->getFilter('notice')->getCallable()(_gettext("No index defined!"));
                echo "</div>
      ";
            }
            // line 561
            echo "    </div>

    <div class=\"card-footer d-print-none\">
      <form action=\"";
            // line 564
            echo $this->env->getFunction('url')->getCallable()("/table/indexes");
            echo "\" method=\"post\">
        ";
            // line 565
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
            echo "
        <input type=\"hidden\" name=\"create_index\" value=\"1\">

        ";
            // line 568
            ob_start(function () { return ''; });
            // line 569
            echo "          ";
echo _gettext("Create an index on %s columns");
            // line 570
            echo "        ";
            $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 568
            echo twig_sprintf($___internal_parse_0_, "<input class=\"mx-2\" type=\"number\" name=\"added_fields\" value=\"1\" min=\"1\" max=\"16\" required>");
            // line 571
            echo "
        <input class=\"btn btn-primary add_index ajax\" type=\"submit\" value=\"";
echo _gettext("Go");
            // line 572
            echo "\">
      </form>
    </div>
  </div>
  ";
            // line 576
            echo twig_include($this->env, $context, "modals/index_dialog_modal.twig");
            echo "
";
        }
        // line 578
        echo "
";
        // line 580
        if (($context["have_partitioning"] ?? null)) {
            // line 581
            echo "    ";
            // line 582
            echo "    ";
            if (( !twig_test_empty(($context["partition_names"] ?? null)) &&  !(null === (($__internal_compile_17 = ($context["partition_names"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[0] ?? null) : null)))) {
                // line 583
                echo "        ";
                $context["first_partition"] = (($__internal_compile_18 = ($context["partitions"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[0] ?? null) : null);
                // line 584
                echo "        ";
                $context["range_or_list"] = ((((twig_get_attribute($this->env, $this->source, ($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 584) == "RANGE") || (twig_get_attribute($this->env, $this->source,                 // line 585
($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 585) == "RANGE COLUMNS")) || (twig_get_attribute($this->env, $this->source,                 // line 586
($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 586) == "LIST")) || (twig_get_attribute($this->env, $this->source,                 // line 587
($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 587) == "LIST COLUMNS"));
                // line 588
                echo "        ";
                $context["sub_partitions"] = twig_get_attribute($this->env, $this->source, ($context["first_partition"] ?? null), "getSubPartitions", [], "method", false, false, false, 588);
                // line 589
                echo "        ";
                $context["has_sub_partitions"] = twig_get_attribute($this->env, $this->source, ($context["first_partition"] ?? null), "hasSubPartitions", [], "method", false, false, false, 589);
                // line 590
                echo "        ";
                if (($context["has_sub_partitions"] ?? null)) {
                    // line 591
                    echo "            ";
                    $context["first_sub_partition"] = (($__internal_compile_19 = ($context["sub_partitions"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[0] ?? null) : null);
                    // line 592
                    echo "        ";
                }
                // line 593
                echo "
        ";
                // line 594
                if ((($context["default_sliders_state"] ?? null) != "disabled")) {
                    // line 595
                    echo "        <div class=\"mb-3\">
          <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#partitionsCollapse\" aria-expanded=\"";
                    // line 596
                    echo (((($context["default_sliders_state"] ?? null) == "open")) ? ("true") : ("false"));
                    echo "\" aria-controls=\"partitionsCollapse\">
            ";
echo _gettext("Partitions");
                    // line 598
                    echo "          </button>
        </div>
        <div class=\"collapse mb-3";
                    // line 600
                    echo (((($context["default_sliders_state"] ?? null) == "open")) ? (" show") : (""));
                    echo "\" id=\"partitionsCollapse\">
        ";
                }
                // line 602
                echo "
        ";
                // line 603
                $this->loadTemplate("table/structure/display_partitions.twig", "table/structure/display_structure.twig", 603)->display(twig_to_array(["db" =>                 // line 604
($context["db"] ?? null), "table" =>                 // line 605
($context["table"] ?? null), "partitions" =>                 // line 606
($context["partitions"] ?? null), "partition_method" => twig_get_attribute($this->env, $this->source,                 // line 607
($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 607), "partition_expression" => twig_get_attribute($this->env, $this->source,                 // line 608
($context["first_partition"] ?? null), "getExpression", [], "method", false, false, false, 608), "has_description" =>  !twig_test_empty(twig_get_attribute($this->env, $this->source,                 // line 609
($context["first_partition"] ?? null), "getDescription", [], "method", false, false, false, 609)), "has_sub_partitions" =>                 // line 610
($context["has_sub_partitions"] ?? null), "sub_partition_method" => ((                // line 611
($context["has_sub_partitions"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["first_sub_partition"] ?? null), "getMethod", [], "method", false, false, false, 611)) : ("")), "sub_partition_expression" => ((                // line 612
($context["has_sub_partitions"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["first_sub_partition"] ?? null), "getExpression", [], "method", false, false, false, 612)) : ("")), "range_or_list" =>                 // line 613
($context["range_or_list"] ?? null)]));
                // line 615
                echo "    ";
            } else {
                // line 616
                echo "        ";
                $this->loadTemplate("table/structure/display_partitions.twig", "table/structure/display_structure.twig", 616)->display(twig_to_array(["db" =>                 // line 617
($context["db"] ?? null), "table" =>                 // line 618
($context["table"] ?? null)]));
                // line 620
                echo "    ";
            }
            // line 621
            echo "    ";
            if ((($context["default_sliders_state"] ?? null) != "disabled")) {
                // line 622
                echo "    </div>
    ";
            }
        }
        // line 625
        echo "
";
        // line 627
        if (($context["show_stats"] ?? null)) {
            // line 628
            echo "    ";
            echo ($context["table_stats"] ?? null);
            echo "
";
        }
        // line 630
        echo "<div class=\"clearfloat\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/structure/display_structure.twig";
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
        return array (  1492 => 630,  1486 => 628,  1484 => 627,  1481 => 625,  1476 => 622,  1473 => 621,  1470 => 620,  1468 => 618,  1467 => 617,  1465 => 616,  1462 => 615,  1460 => 613,  1459 => 612,  1458 => 611,  1457 => 610,  1456 => 609,  1455 => 608,  1454 => 607,  1453 => 606,  1452 => 605,  1451 => 604,  1450 => 603,  1447 => 602,  1442 => 600,  1438 => 598,  1433 => 596,  1430 => 595,  1428 => 594,  1425 => 593,  1422 => 592,  1419 => 591,  1416 => 590,  1413 => 589,  1410 => 588,  1408 => 587,  1407 => 586,  1406 => 585,  1404 => 584,  1401 => 583,  1398 => 582,  1396 => 581,  1394 => 580,  1391 => 578,  1386 => 576,  1380 => 572,  1376 => 571,  1374 => 568,  1371 => 570,  1368 => 569,  1366 => 568,  1360 => 565,  1356 => 564,  1351 => 561,  1345 => 559,  1339 => 555,  1333 => 554,  1326 => 552,  1318 => 550,  1316 => 549,  1311 => 547,  1307 => 546,  1303 => 545,  1300 => 544,  1294 => 542,  1291 => 541,  1285 => 540,  1282 => 539,  1278 => 537,  1275 => 536,  1271 => 535,  1264 => 533,  1258 => 532,  1252 => 531,  1246 => 530,  1242 => 528,  1240 => 525,  1239 => 523,  1235 => 522,  1232 => 521,  1229 => 520,  1227 => 518,  1226 => 517,  1224 => 516,  1221 => 515,  1219 => 512,  1217 => 511,  1215 => 510,  1211 => 509,  1205 => 506,  1202 => 505,  1200 => 504,  1199 => 503,  1198 => 502,  1195 => 501,  1191 => 500,  1185 => 497,  1182 => 496,  1180 => 495,  1179 => 494,  1178 => 493,  1175 => 492,  1171 => 491,  1168 => 490,  1165 => 489,  1161 => 488,  1154 => 483,  1150 => 482,  1146 => 481,  1142 => 480,  1138 => 479,  1134 => 478,  1130 => 477,  1126 => 476,  1122 => 475,  1118 => 474,  1109 => 469,  1103 => 467,  1101 => 466,  1093 => 462,  1088 => 459,  1086 => 458,  1083 => 457,  1078 => 454,  1074 => 453,  1057 => 450,  1053 => 449,  1049 => 448,  1032 => 447,  1029 => 446,  1024 => 443,  1018 => 440,  1015 => 437,  1009 => 435,  1007 => 434,  1003 => 433,  998 => 432,  996 => 431,  993 => 430,  990 => 429,  984 => 426,  979 => 425,  976 => 424,  973 => 423,  967 => 420,  963 => 419,  958 => 417,  955 => 416,  949 => 413,  944 => 412,  941 => 411,  936 => 409,  932 => 407,  930 => 403,  927 => 402,  925 => 400,  924 => 399,  923 => 398,  919 => 397,  916 => 396,  914 => 395,  912 => 394,  907 => 393,  903 => 391,  901 => 389,  899 => 387,  897 => 386,  894 => 385,  886 => 378,  878 => 373,  874 => 372,  862 => 363,  855 => 359,  848 => 355,  844 => 354,  832 => 345,  828 => 344,  824 => 343,  813 => 336,  808 => 334,  805 => 333,  801 => 332,  795 => 329,  791 => 328,  780 => 320,  777 => 319,  774 => 318,  768 => 315,  764 => 314,  759 => 312,  754 => 311,  752 => 310,  746 => 307,  742 => 306,  737 => 304,  733 => 303,  728 => 301,  724 => 300,  719 => 298,  715 => 297,  710 => 295,  705 => 294,  703 => 293,  697 => 290,  693 => 289,  688 => 287,  683 => 286,  681 => 285,  675 => 282,  671 => 281,  668 => 280,  666 => 277,  665 => 276,  659 => 272,  652 => 270,  648 => 268,  643 => 265,  639 => 263,  636 => 262,  632 => 260,  626 => 257,  623 => 256,  621 => 255,  620 => 254,  619 => 253,  613 => 252,  607 => 249,  604 => 248,  602 => 247,  601 => 246,  600 => 245,  594 => 244,  592 => 243,  587 => 242,  585 => 241,  579 => 238,  576 => 237,  574 => 235,  573 => 234,  572 => 233,  571 => 232,  570 => 230,  569 => 229,  564 => 228,  559 => 227,  555 => 224,  547 => 222,  541 => 219,  538 => 218,  536 => 217,  535 => 216,  534 => 215,  533 => 214,  527 => 213,  525 => 212,  524 => 211,  523 => 210,  522 => 209,  521 => 208,  520 => 207,  515 => 206,  511 => 203,  505 => 200,  502 => 199,  500 => 198,  499 => 197,  498 => 196,  497 => 195,  491 => 194,  483 => 192,  481 => 191,  476 => 190,  474 => 180,  470 => 178,  464 => 175,  461 => 174,  459 => 173,  458 => 172,  457 => 171,  456 => 170,  450 => 169,  442 => 167,  440 => 166,  436 => 165,  432 => 163,  426 => 160,  423 => 159,  421 => 158,  420 => 157,  419 => 156,  418 => 155,  412 => 154,  404 => 152,  402 => 151,  398 => 150,  394 => 148,  388 => 145,  385 => 144,  383 => 143,  382 => 142,  381 => 141,  380 => 140,  374 => 139,  366 => 137,  364 => 136,  359 => 135,  355 => 133,  350 => 130,  346 => 129,  344 => 128,  341 => 127,  338 => 126,  336 => 125,  333 => 124,  326 => 120,  323 => 119,  321 => 118,  320 => 116,  319 => 115,  318 => 114,  317 => 113,  314 => 112,  307 => 108,  304 => 107,  302 => 105,  301 => 104,  300 => 103,  299 => 102,  296 => 101,  294 => 100,  289 => 99,  283 => 96,  280 => 95,  278 => 94,  275 => 93,  270 => 91,  267 => 89,  265 => 88,  262 => 86,  259 => 84,  257 => 83,  255 => 82,  251 => 80,  247 => 79,  244 => 78,  236 => 76,  234 => 75,  229 => 72,  221 => 70,  219 => 69,  218 => 68,  214 => 67,  209 => 65,  202 => 62,  196 => 60,  188 => 58,  186 => 57,  182 => 56,  177 => 54,  170 => 52,  165 => 49,  163 => 48,  160 => 47,  158 => 46,  155 => 45,  153 => 44,  150 => 43,  147 => 42,  142 => 41,  139 => 40,  134 => 36,  128 => 34,  125 => 33,  122 => 32,  117 => 30,  112 => 28,  110 => 27,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  87 => 21,  80 => 17,  75 => 13,  72 => 12,  69 => 10,  67 => 9,  65 => 8,  63 => 7,  59 => 5,  55 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/display_structure.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\table\\structure\\display_structure.twig");
    }
}
