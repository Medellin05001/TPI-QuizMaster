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

/* columns_definitions/column_attributes.twig */
class __TwigTemplate_ccb0ee27c489f535df3c2591b31705df extends Template
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
        $context["ci"] = 0;
        // line 3
        echo "
";
        // line 6
        $context["ci_offset"] =  -1;
        // line 7
        echo "
<td class=\"text-center\">
    ";
        // line 10
        echo "    ";
        $this->loadTemplate("columns_definitions/column_name.twig", "columns_definitions/column_attributes.twig", 10)->display(twig_to_array(["column_number" =>         // line 11
($context["column_number"] ?? null), "ci" =>         // line 12
($context["ci"] ?? null), "ci_offset" =>         // line 13
($context["ci_offset"] ?? null), "column_meta" =>         // line 14
($context["column_meta"] ?? null), "has_central_columns_feature" =>  !(null === twig_get_attribute($this->env, $this->source,         // line 15
($context["relation_parameters"] ?? null), "centralColumnsFeature", [], "any", false, false, false, 15)), "max_rows" =>         // line 16
($context["max_rows"] ?? null)]));
        // line 18
        echo "    ";
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 19
        echo "</td>
<td class=\"text-center\">
  <select class=\"column_type\" name=\"field_type[";
        // line 21
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "]\" id=\"field_";
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        echo "\"";
        // line 22
        echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "column_status", [], "array", true, true, false, 22) &&  !(($__internal_compile_0 = (($__internal_compile_1 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["column_status"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["isEditable"] ?? null) : null))) ? (" disabled") : (""));
        echo ">
    ";
        // line 23
        echo $this->env->getFunction('get_supported_datatypes')->getCallable()(($context["type_upper"] ?? null));
        echo "
  </select>
  ";
        // line 25
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 26
        echo "</td>
<td class=\"text-center\">
  <input id=\"field_";
        // line 28
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        echo "\" type=\"text\" name=\"field_length[";
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "]\" size=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["length_values_input_size"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["length"] ?? null), "html", null, true);
        echo "\" class=\"textfield\">
  <p class=\"enum_notice\" id=\"enum_notice_";
        // line 30
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        echo "\">
    <a href=\"#\" class=\"open_enum_editor\">";
echo _gettext("Edit ENUM/SET values");
        // line 31
        echo "</a>
  </p>
  ";
        // line 33
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 34
        echo "</td>
<td class=\"text-center\">
  <select name=\"field_default_type[";
        // line 36
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "]\" id=\"field_";
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        echo "\" class=\"default_type\">
    <option value=\"NONE\"";
        // line 37
        echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 37) && ((($__internal_compile_2 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["DefaultType"] ?? null) : null) == "NONE"))) ? (" selected") : (""));
        echo ">
      ";
echo _pgettext("for default", "None");
        // line 39
        echo "    </option>
    <option value=\"USER_DEFINED\"";
        // line 40
        echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 40) && ((($__internal_compile_3 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["DefaultType"] ?? null) : null) == "USER_DEFINED"))) ? (" selected") : (""));
        echo ">
      ";
echo _gettext("As defined:");
        // line 42
        echo "    </option>
    <option value=\"NULL\"";
        // line 43
        echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 43) && ((($__internal_compile_4 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["DefaultType"] ?? null) : null) == "NULL"))) ? (" selected") : (""));
        echo ">
      NULL
    </option>
    <option value=\"CURRENT_TIMESTAMP\"";
        // line 46
        echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 46) && ((($__internal_compile_5 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["DefaultType"] ?? null) : null) == "CURRENT_TIMESTAMP"))) ? (" selected") : (""));
        echo ">
      CURRENT_TIMESTAMP
    </option>
    ";
        // line 49
        if ($this->env->getFunction('is_uuid_supported')->getCallable()()) {
            // line 50
            echo "    <option value=\"UUID\"";
            echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 50) && ((($__internal_compile_6 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["DefaultType"] ?? null) : null) == "UUID"))) ? (" selected") : (""));
            echo ">
      UUID
    </option>
    ";
        }
        // line 54
        echo "  </select>
  ";
        // line 55
        if ((($context["char_editing"] ?? null) == "textarea")) {
            // line 56
            echo "    <textarea name=\"field_default_value[";
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\" cols=\"15\" class=\"textfield default_value\">";
            echo twig_escape_filter($this->env, ($context["default_value"] ?? null), "html", null, true);
            echo "</textarea>
  ";
        } else {
            // line 58
            echo "    <input type=\"text\" name=\"field_default_value[";
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\" size=\"12\" value=\"";
            (((array_key_exists("default_value", $context) &&  !(null === ($context["default_value"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["default_value"] ?? null), "html", null, true))) : (print ("")));
            echo "\" class=\"textfield default_value\">
  ";
        }
        // line 60
        echo "  ";
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 61
        echo "</td>
<td class=\"text-center\">
  ";
        // line 64
        echo "  <select lang=\"en\" dir=\"ltr\" name=\"field_collation[";
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "]\" id=\"field_";
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        echo "\">
    <option value=\"\"></option>
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["charsets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 67
            echo "      <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 67), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 67), "html", null, true);
            echo "\">
        ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 68));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 69
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 69), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 69), "html", null, true);
                echo "\"";
                // line 70
                echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Collation", [], "array", true, true, false, 70) && (twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 70) == (($__internal_compile_7 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["Collation"] ?? null) : null)))) ? (" selected") : (""));
                echo ">";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 71), "html", null, true);
                // line 72
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "      </optgroup>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "  </select>
  ";
        // line 77
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 78
        echo "</td>
<td class=\"text-center\">
    ";
        // line 81
        echo "    ";
        $this->loadTemplate("columns_definitions/column_attribute.twig", "columns_definitions/column_attributes.twig", 81)->display(twig_to_array(["column_number" =>         // line 82
($context["column_number"] ?? null), "ci" =>         // line 83
($context["ci"] ?? null), "ci_offset" =>         // line 84
($context["ci_offset"] ?? null), "column_meta" =>         // line 85
($context["column_meta"] ?? null), "extracted_columnspec" =>         // line 86
($context["extracted_columnspec"] ?? null), "submit_attribute" =>         // line 87
($context["submit_attribute"] ?? null), "attribute_types" =>         // line 88
($context["attribute_types"] ?? null)]));
        // line 90
        echo "    ";
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 91
        echo "</td>
<td class=\"text-center\">
    <input name=\"field_null[";
        // line 93
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "]\" id=\"field_";
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        echo "\" type=\"checkbox\" value=\"YES\" class=\"allow_null\"";
        // line 94
        echo (((((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Null", [], "array", true, true, false, 94) &&  !twig_test_empty((($__internal_compile_8 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["Null"] ?? null) : null))) && ((($__internal_compile_9 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["Null"] ?? null) : null) != "NO")) && ((($__internal_compile_10 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["Null"] ?? null) : null) != "NOT NULL"))) ? (" checked") : (""));
        echo ">
    ";
        // line 95
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 96
        echo "</td>
";
        // line 97
        if ((array_key_exists("change_column", $context) &&  !twig_test_empty(($context["change_column"] ?? null)))) {
            // line 98
            echo "    ";
            // line 99
            echo "    <td class=\"text-center\">
      <input name=\"field_adjust_privileges[";
            // line 100
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\" id=\"field_";
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            echo "\" type=\"checkbox\" value=\"NULL\" class=\"allow_null\"";
            // line 101
            if (($context["privs_available"] ?? null)) {
                echo " checked>";
            } else {
                // line 102
                echo " title=\"";
echo _gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details");
                echo "\" disabled>";
            }
            // line 104
            echo "      ";
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 105
            echo "    </td>
";
        }
        // line 107
        if ( !($context["is_backup"] ?? null)) {
            // line 108
            echo "    ";
            // line 109
            echo "    <td class=\"text-center\">
      <select name=\"field_key[";
            // line 110
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\" id=\"field_";
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            echo "\" data-index=\"\">
        <option value=\"none_";
            // line 111
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "\">---</option>
        <option value=\"primary_";
            // line 112
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "\" title=\"";
echo _gettext("Primary");
            echo "\"";
            // line 113
            echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 113) && ((($__internal_compile_11 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["Key"] ?? null) : null) == "PRI"))) ? (" selected") : (""));
            echo ">
          PRIMARY
        </option>
        <option value=\"unique_";
            // line 116
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "\" title=\"";
echo _gettext("Unique");
            echo "\"";
            // line 117
            echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 117) && ((($__internal_compile_12 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["Key"] ?? null) : null) == "UNI"))) ? (" selected") : (""));
            echo ">
          UNIQUE
        </option>
        <option value=\"index_";
            // line 120
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "\" title=\"";
echo _gettext("Index");
            echo "\"";
            // line 121
            echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 121) && ((($__internal_compile_13 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["Key"] ?? null) : null) == "MUL"))) ? (" selected") : (""));
            echo ">
          INDEX
        </option>
        <option value=\"fulltext_";
            // line 124
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "\" title=\"";
echo _gettext("Fulltext");
            echo "\"";
            // line 125
            echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 125) && ((($__internal_compile_14 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["Key"] ?? null) : null) == "FULLTEXT"))) ? (" selected") : (""));
            echo ">
          FULLTEXT
        </option>
        <option value=\"spatial_";
            // line 128
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "\" title=\"";
echo _gettext("Spatial");
            echo "\"";
            // line 129
            echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 129) && ((($__internal_compile_15 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["Key"] ?? null) : null) == "SPATIAL"))) ? (" selected") : (""));
            echo ">
          SPATIAL
        </option>
      </select>
      ";
            // line 133
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 134
            echo "    </td>
";
        }
        // line 136
        echo "<td class=\"text-center\">
  <input name=\"field_extra[";
        // line 137
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "]\" id=\"field_";
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        echo "\" type=\"checkbox\" value=\"AUTO_INCREMENT\"";
        // line 138
        echo (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Extra", [], "array", true, true, false, 138) && (twig_lower_filter($this->env, (($__internal_compile_16 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["Extra"] ?? null) : null)) == "auto_increment"))) ? (" checked") : (""));
        echo ">
  ";
        // line 139
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 140
        echo "</td>
<td class=\"text-center\">
  <textarea id=\"field_";
        // line 142
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        echo "\" rows=\"1\" name=\"field_comments[";
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "]\" maxlength=\"";
        echo twig_escape_filter($this->env, ($context["max_length"] ?? null), "html", null, true);
        echo "\">";
        // line 143
        ((((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 143) && is_iterable(($context["comments_map"] ?? null))) && twig_get_attribute($this->env, $this->source, ($context["comments_map"] ?? null), (($__internal_compile_17 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["Field"] ?? null) : null), [], "array", true, true, false, 143))) ? (print (twig_escape_filter($this->env, (($__internal_compile_18 = ($context["comments_map"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[(($__internal_compile_19 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["Field"] ?? null) : null)] ?? null) : null), "html", null, true))) : (print ("")));
        // line 144
        echo "</textarea>
  ";
        // line 145
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 146
        echo "</td>
 ";
        // line 148
        if (($context["is_virtual_columns_supported"] ?? null)) {
            // line 149
            echo "    <td class=\"text-center\">
      <select name=\"field_virtuality[";
            // line 150
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\" id=\"field_";
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            echo "\" class=\"virtuality\">
        ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 152
                echo "          ";
                $context["virtuality"] = ((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Extra", [], "array", true, true, false, 152)) ? ((($__internal_compile_20 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["Extra"] ?? null) : null)) : (null));
                // line 153
                echo "          ";
                // line 154
                echo "          ";
                $context["virtuality"] = ((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Virtuality", [], "array", true, true, false, 154)) ? ((($__internal_compile_21 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["Virtuality"] ?? null) : null)) : (($context["virtuality"] ?? null)));
                // line 155
                echo "
          <option value=\"";
                // line 156
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"";
                echo (((( !(null === ($context["virtuality"] ?? null)) && ($context["key"] != "")) && (twig_slice($this->env, ($context["virtuality"] ?? null), 0, twig_length_filter($this->env, $context["key"])) === $context["key"]))) ? (" selected") : (""));
                echo ">
            ";
                // line 157
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "      </select>

      ";
            // line 162
            if ((($context["char_editing"] ?? null) == "textarea")) {
                // line 163
                echo "        <textarea name=\"field_expression[";
                echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
                echo "]\" cols=\"15\" class=\"textfield expression\">";
                ((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Expression", [], "array", true, true, false, 163)) ? (print (twig_escape_filter($this->env, (($__internal_compile_22 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["Expression"] ?? null) : null), "html", null, true))) : (print ("")));
                echo "</textarea>
      ";
            } else {
                // line 165
                echo "        <input type=\"text\" name=\"field_expression[";
                echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
                echo "]\" size=\"12\" value=\"";
                ((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Expression", [], "array", true, true, false, 165)) ? (print (twig_escape_filter($this->env, (($__internal_compile_23 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["Expression"] ?? null) : null), "html", null, true))) : (print ("")));
                echo "\" placeholder=\"";
echo _gettext("Expression");
                echo "\" class=\"textfield expression\">
      ";
            }
            // line 167
            echo "      ";
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 168
            echo "    </td>
";
        }
        // line 171
        if (array_key_exists("fields_meta", $context)) {
            // line 172
            echo "    ";
            $context["current_index"] = 0;
            // line 173
            echo "    ";
            $context["break"] = false;
            // line 174
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["move_columns"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["move_column"]) {
                // line 175
                echo "      ";
                if (((twig_get_attribute($this->env, $this->source, $context["move_column"], "name", [], "any", false, false, false, 175) == (($__internal_compile_24 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["Field"] ?? null) : null)) &&  !($context["break"] ?? null))) {
                    // line 176
                    echo "        ";
                    $context["current_index"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 176);
                    // line 177
                    echo "        ";
                    $context["break"] = true;
                    // line 178
                    echo "      ";
                }
                // line 179
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['move_column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "
    <td class=\"text-center\">
      <select id=\"field_";
            // line 182
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            echo "\" name=\"field_move_to[";
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\" size=\"1\" width=\"5em\">
        <option value=\"\" selected=\"selected\">&nbsp;</option>
        <option value=\"-first\"";
            // line 184
            echo (((($context["current_index"] ?? null) == 0)) ? (" disabled=\"disabled\"") : (""));
            echo ">
          ";
echo _gettext("first");
            // line 186
            echo "        </option>
        ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["move_columns"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["move_column"]) {
                // line 188
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["move_column"], "name", [], "any", false, false, false, 188), "html", null, true);
                echo "\"";
                // line 189
                echo ((((($context["current_index"] ?? null) == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 189)) || (($context["current_index"] ?? null) == (twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 189) + 1)))) ? (" disabled") : (""));
                echo ">
            ";
                // line 190
                echo twig_escape_filter($this->env, twig_sprintf(_gettext("after %s"), $this->env->getFunction('backquote')->getCallable()(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["move_column"], "name", [], "any", false, false, false, 190)))), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['move_column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "      </select>
      ";
            // line 194
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 195
            echo "    </td>
";
        }
        // line 197
        echo "
";
        // line 198
        if ((( !(null === twig_get_attribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "browserTransformationFeature", [], "any", false, false, false, 198)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "columnCommentsFeature", [], "any", false, false, false, 198))) && ($context["browse_mime"] ?? null))) {
            // line 199
            echo "    <td class=\"text-center\">
      <select id=\"field_";
            // line 200
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            echo "\" size=\"1\" name=\"field_mimetype[";
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\">
        <option value=\"\">&nbsp;</option>
        ";
            // line 202
            if ((twig_get_attribute($this->env, $this->source, ($context["available_mime"] ?? null), "mimetype", [], "array", true, true, false, 202) && is_iterable((($__internal_compile_25 = ($context["available_mime"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["mimetype"] ?? null) : null)))) {
                // line 203
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_26 = ($context["available_mime"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["mimetype"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["media_type"]) {
                    // line 204
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, twig_replace_filter($context["media_type"], ["/" => "_"]), "html", null, true);
                    echo "\"";
                    // line 205
                    echo ((((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 205) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mime_map"] ?? null), (($__internal_compile_27 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["Field"] ?? null) : null), [], "array", false, true, false, 205), "mimetype", [], "array", true, true, false, 205)) && ((($__internal_compile_28 = (($__internal_compile_29 =                     // line 206
($context["mime_map"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[(($__internal_compile_30 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["Field"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["mimetype"] ?? null) : null) == twig_replace_filter($context["media_type"], ["/" => "_"])))) ? (" selected") : (""));
                    echo ">
              ";
                    // line 207
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["media_type"]), "html", null, true);
                    echo "
            </option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media_type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 210
                echo "        ";
            }
            // line 211
            echo "      </select>
      ";
            // line 212
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 213
            echo "    </td>
    <td class=\"text-center\">
      <select id=\"field_";
            // line 215
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            echo "\" size=\"1\" name=\"field_transformation[";
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\">
        <option value=\"\" title=\"";
echo _gettext("None");
            // line 216
            echo "\"></option>
        ";
            // line 217
            if ((twig_get_attribute($this->env, $this->source, ($context["available_mime"] ?? null), "transformation", [], "array", true, true, false, 217) && is_iterable((($__internal_compile_31 = ($context["available_mime"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["transformation"] ?? null) : null)))) {
                // line 218
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_32 = ($context["available_mime"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["transformation"] ?? null) : null));
                foreach ($context['_seq'] as $context["mimekey"] => $context["transform"]) {
                    // line 219
                    echo "            ";
                    $context["parts"] = twig_split_filter($this->env, $context["transform"], ":");
                    // line 220
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_33 = (($__internal_compile_34 = ($context["available_mime"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["transformation_file"] ?? null) : null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[$context["mimekey"]] ?? null) : null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getFunction('get_description')->getCallable()((($__internal_compile_35 = (($__internal_compile_36 = ($context["available_mime"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["transformation_file"] ?? null) : null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[$context["mimekey"]] ?? null) : null)), "html", null, true);
                    echo "\"";
                    // line 221
                    echo (((((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 221) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 222
($context["mime_map"] ?? null), (($__internal_compile_37 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["Field"] ?? null) : null), [], "array", false, true, false, 222), "transformation", [], "array", true, true, false, 222)) &&  !(null === (($__internal_compile_38 = (($__internal_compile_39 =                     // line 223
($context["mime_map"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[(($__internal_compile_40 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["Field"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["transformation"] ?? null) : null))) && twig_matches((("@" . (($__internal_compile_41 = (($__internal_compile_42 =                     // line 224
($context["available_mime"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["transformation_file_quoted"] ?? null) : null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[$context["mimekey"]] ?? null) : null)) . "3?@i"), (($__internal_compile_43 = (($__internal_compile_44 = ($context["mime_map"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[(($__internal_compile_45 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["Field"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["transformation"] ?? null) : null)))) ? (" selected") : (""));
                    echo ">
              ";
                    // line 225
                    echo twig_escape_filter($this->env, ((((($this->env->getFunction('get_name')->getCallable()((($__internal_compile_46 = (($__internal_compile_47 = ($context["available_mime"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["transformation_file"] ?? null) : null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[$context["mimekey"]] ?? null) : null)) . " (") . twig_lower_filter($this->env, (($__internal_compile_48 = ($context["parts"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[0] ?? null) : null))) . ":") . (($__internal_compile_49 = ($context["parts"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[1] ?? null) : null)) . ")"), "html", null, true);
                    echo "
            </option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mimekey'], $context['transform'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 228
                echo "        ";
            }
            // line 229
            echo "      </select>
      ";
            // line 230
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 231
            echo "    </td>
    <td class=\"text-center\">
      <input id=\"field_";
            // line 233
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            echo "\" type=\"text\" name=\"field_transformation_options[";
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\" size=\"16\" class=\"textfield\" value=\"";
            // line 234
            (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 234) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mime_map"] ?? null), (($__internal_compile_50 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["Field"] ?? null) : null), [], "array", false, true, false, 234), "transformation_options", [], "array", true, true, false, 234))) ? (print (twig_escape_filter($this->env, (($__internal_compile_51 = (($__internal_compile_52 = ($context["mime_map"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[(($__internal_compile_53 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["Field"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["transformation_options"] ?? null) : null), "html", null, true))) : (print ("")));
            echo "\">
      ";
            // line 235
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 236
            echo "    </td>
    <td class=\"text-center\">
      <select id=\"field_";
            // line 238
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            echo "\" size=\"1\" name=\"field_input_transformation[";
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\">
        <option value=\"\" title=\"";
echo _gettext("None");
            // line 239
            echo "\"></option>
        ";
            // line 240
            if ((twig_get_attribute($this->env, $this->source, ($context["available_mime"] ?? null), "input_transformation", [], "array", true, true, false, 240) && is_iterable((($__internal_compile_54 = ($context["available_mime"] ?? null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["input_transformation"] ?? null) : null)))) {
                // line 241
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_55 = ($context["available_mime"] ?? null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["input_transformation"] ?? null) : null));
                foreach ($context['_seq'] as $context["mimekey"] => $context["transform"]) {
                    // line 242
                    echo "            ";
                    $context["parts"] = twig_split_filter($this->env, $context["transform"], ":");
                    // line 243
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_56 = (($__internal_compile_57 = ($context["available_mime"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["input_transformation_file"] ?? null) : null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[$context["mimekey"]] ?? null) : null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getFunction('get_description')->getCallable()((($__internal_compile_58 = (($__internal_compile_59 = ($context["available_mime"] ?? null)) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59["input_transformation_file"] ?? null) : null)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58[$context["mimekey"]] ?? null) : null)), "html", null, true);
                    echo "\"";
                    // line 244
                    echo ((((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 244) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mime_map"] ?? null), (($__internal_compile_60 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60["Field"] ?? null) : null), [], "array", false, true, false, 244), "input_transformation", [], "array", true, true, false, 244)) && twig_matches((("@" . (($__internal_compile_61 = (($__internal_compile_62 =                     // line 245
($context["available_mime"] ?? null)) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62["input_transformation_file_quoted"] ?? null) : null)) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61[$context["mimekey"]] ?? null) : null)) . "3?@i"), (($__internal_compile_63 = (($__internal_compile_64 = ($context["mime_map"] ?? null)) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64[(($__internal_compile_65 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_65) || $__internal_compile_65 instanceof ArrayAccess ? ($__internal_compile_65["Field"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63["input_transformation"] ?? null) : null)))) ? (" selected") : (""));
                    echo ">
              ";
                    // line 246
                    echo twig_escape_filter($this->env, ((((($this->env->getFunction('get_name')->getCallable()((($__internal_compile_66 = (($__internal_compile_67 = ($context["available_mime"] ?? null)) && is_array($__internal_compile_67) || $__internal_compile_67 instanceof ArrayAccess ? ($__internal_compile_67["input_transformation_file"] ?? null) : null)) && is_array($__internal_compile_66) || $__internal_compile_66 instanceof ArrayAccess ? ($__internal_compile_66[$context["mimekey"]] ?? null) : null)) . " (") . twig_lower_filter($this->env, (($__internal_compile_68 = ($context["parts"] ?? null)) && is_array($__internal_compile_68) || $__internal_compile_68 instanceof ArrayAccess ? ($__internal_compile_68[0] ?? null) : null))) . ":") . (($__internal_compile_69 = ($context["parts"] ?? null)) && is_array($__internal_compile_69) || $__internal_compile_69 instanceof ArrayAccess ? ($__internal_compile_69[1] ?? null) : null)) . ")"), "html", null, true);
                    echo "
            </option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mimekey'], $context['transform'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 249
                echo "        ";
            }
            // line 250
            echo "      </select>
      ";
            // line 251
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 252
            echo "    </td>
    <td class=\"text-center\">
      <input id=\"field_";
            // line 254
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            echo "\" type=\"text\" name=\"field_input_transformation_options[";
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\" size=\"16\" class=\"textfield\" value=\"";
            // line 255
            (((twig_get_attribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 255) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["mime_map"] ?? null), (($__internal_compile_70 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_70) || $__internal_compile_70 instanceof ArrayAccess ? ($__internal_compile_70["Field"] ?? null) : null), [], "array", false, true, false, 255), "input_transformation_options", [], "array", true, true, false, 255))) ? (print (twig_escape_filter($this->env, (($__internal_compile_71 = (($__internal_compile_72 = ($context["mime_map"] ?? null)) && is_array($__internal_compile_72) || $__internal_compile_72 instanceof ArrayAccess ? ($__internal_compile_72[(($__internal_compile_73 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_73) || $__internal_compile_73 instanceof ArrayAccess ? ($__internal_compile_73["Field"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_71) || $__internal_compile_71 instanceof ArrayAccess ? ($__internal_compile_71["input_transformation_options"] ?? null) : null), "html", null, true))) : (print ("")));
            echo "\">
      ";
            // line 256
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 257
            echo "    </td>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "columns_definitions/column_attributes.twig";
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
        return array (  824 => 257,  822 => 256,  818 => 255,  811 => 254,  807 => 252,  805 => 251,  802 => 250,  799 => 249,  790 => 246,  786 => 245,  785 => 244,  779 => 243,  776 => 242,  771 => 241,  769 => 240,  766 => 239,  757 => 238,  753 => 236,  751 => 235,  747 => 234,  740 => 233,  736 => 231,  734 => 230,  731 => 229,  728 => 228,  719 => 225,  715 => 224,  714 => 223,  713 => 222,  712 => 221,  706 => 220,  703 => 219,  698 => 218,  696 => 217,  693 => 216,  684 => 215,  680 => 213,  678 => 212,  675 => 211,  672 => 210,  663 => 207,  659 => 206,  658 => 205,  654 => 204,  649 => 203,  647 => 202,  638 => 200,  635 => 199,  633 => 198,  630 => 197,  626 => 195,  624 => 194,  621 => 193,  604 => 190,  600 => 189,  596 => 188,  579 => 187,  576 => 186,  571 => 184,  562 => 182,  558 => 180,  544 => 179,  541 => 178,  538 => 177,  535 => 176,  532 => 175,  514 => 174,  511 => 173,  508 => 172,  506 => 171,  502 => 168,  499 => 167,  489 => 165,  481 => 163,  479 => 162,  475 => 160,  466 => 157,  460 => 156,  457 => 155,  454 => 154,  452 => 153,  449 => 152,  445 => 151,  437 => 150,  434 => 149,  432 => 148,  429 => 146,  427 => 145,  424 => 144,  422 => 143,  413 => 142,  409 => 140,  407 => 139,  403 => 138,  396 => 137,  393 => 136,  389 => 134,  387 => 133,  380 => 129,  375 => 128,  369 => 125,  364 => 124,  358 => 121,  353 => 120,  347 => 117,  342 => 116,  336 => 113,  331 => 112,  327 => 111,  319 => 110,  316 => 109,  314 => 108,  312 => 107,  308 => 105,  305 => 104,  300 => 102,  296 => 101,  289 => 100,  286 => 99,  284 => 98,  282 => 97,  279 => 96,  277 => 95,  273 => 94,  266 => 93,  262 => 91,  259 => 90,  257 => 88,  256 => 87,  255 => 86,  254 => 85,  253 => 84,  252 => 83,  251 => 82,  249 => 81,  245 => 78,  243 => 77,  240 => 76,  233 => 74,  226 => 72,  224 => 71,  221 => 70,  215 => 69,  211 => 68,  204 => 67,  200 => 66,  190 => 64,  186 => 61,  183 => 60,  175 => 58,  167 => 56,  165 => 55,  162 => 54,  154 => 50,  152 => 49,  146 => 46,  140 => 43,  137 => 42,  132 => 40,  129 => 39,  124 => 37,  116 => 36,  112 => 34,  110 => 33,  106 => 31,  99 => 30,  93 => 29,  86 => 28,  82 => 26,  80 => 25,  75 => 23,  71 => 22,  64 => 21,  60 => 19,  57 => 18,  55 => 16,  54 => 15,  53 => 14,  52 => 13,  51 => 12,  50 => 11,  48 => 10,  44 => 7,  42 => 6,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "columns_definitions/column_attributes.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\columns_definitions\\column_attributes.twig");
    }
}
