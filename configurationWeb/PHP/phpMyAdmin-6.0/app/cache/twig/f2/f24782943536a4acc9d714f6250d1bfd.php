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

/* table/insert/column_row.twig */
class __TwigTemplate_490b907319e274933732071404eb0e64 extends Template
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
        echo "<tr class=\"noclick\">
  <td class=\"text-center\">
    ";
        // line 3
        echo ($context["field_title"] ?? null);
        echo "
    <input type=\"hidden\" name=\"fields_name[multi_edit][";
        // line 4
        echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 4), "html", null, true);
        echo "]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "field", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
  </td>

  ";
        // line 7
        if (($context["show_field_types_in_data_edit_view"] ?? null)) {
            // line 8
            echo "    <td class=\"text-center";
            echo ((!twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 8), ["set", "enum"])) ? (" text-nowrap") : (""));
            echo "\">
      <span class=\"column_type\" dir=\"ltr\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 9), "html", null, true);
            echo "</span>
    </td>
  ";
        }
        // line 12
        echo "
  ";
        // line 13
        if (($context["show_function_fields"] ?? null)) {
            // line 14
            echo "    ";
            if (($context["is_column_binary"] ?? null)) {
                // line 15
                echo "      <td class=\"text-center\">";
echo _gettext("Binary");
                echo "</td>
    ";
            } elseif ((twig_in_filter("enum", twig_get_attribute($this->env, $this->source,             // line 16
($context["column"] ?? null), "trueType", [], "any", false, false, false, 16)) || twig_in_filter("set", twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 16)))) {
                // line 17
                echo "      <td class=\"text-center\">--</td>
    ";
            } else {
                // line 19
                echo "      <td>
        <select name=\"funcs[multi_edit][";
                // line 20
                echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 20), "html", null, true);
                echo "]\" onchange=\"return verificationsAfterFieldChange('";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 20), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["row_id"] ?? null), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 20), "html", null, true);
                echo "')\" id=\"field_";
                echo twig_escape_filter($this->env, ($context["id_index"] ?? null), "html", null, true);
                echo "_1\">
          ";
                // line 21
                echo ($context["function_options"] ?? null);
                echo "
        </select>
      </td>
    ";
            }
            // line 25
            echo "  ";
        }
        // line 26
        echo "
  <td>
    ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "isNull", [], "any", false, false, false, 28)) {
            // line 29
            echo "      <input type=\"hidden\" name=\"fields_null_prev[multi_edit][";
            echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 29), "html", null, true);
            echo "]\"";
            echo (((($context["real_null_value"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "firstTimestamp", [], "any", false, false, false, 29))) ? (" value=\"on\"") : (""));
            echo ">
      <input type=\"checkbox\" class=\"checkbox_null\" name=\"fields_null[multi_edit][";
            // line 30
            echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 30), "html", null, true);
            echo "]\" id=\"field_";
            echo twig_escape_filter($this->env, ($context["id_index"] ?? null), "html", null, true);
            echo "_2\" aria-label=\"";
echo _gettext("Use the NULL value for this column.");
            echo "\"";
            echo ((($context["real_null_value"] ?? null)) ? (" checked") : (""));
            echo ">
      <input type=\"hidden\" class=\"nullify_code\" name=\"nullify_code[multi_edit][";
            // line 31
            echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 31), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, ($context["nullify_code"] ?? null), "html", null, true);
            echo "\">
      <input type=\"hidden\" class=\"hashed_field\" name=\"hashed_field[multi_edit][";
            // line 32
            echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 32), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 32), "html", null, true);
            echo "\">
      <input type=\"hidden\" class=\"multi_edit\" name=\"multi_edit[multi_edit][";
            // line 33
            echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 33), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, (("[multi_edit][" . ($context["row_id"] ?? null)) . "]"), "html", null, true);
            echo "\">
    ";
        }
        // line 35
        echo "  </td>

  <td data-type=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\" data-decimals=\"";
        echo twig_escape_filter($this->env, ($context["decimals"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 39
        echo "    <span class=\"default_value hide\">";
        echo ($context["special_chars"] ?? null);
        echo "</span>

    ";
        // line 41
        if ( !twig_test_empty(($context["transformed_value"] ?? null))) {
            // line 42
            echo "      ";
            echo ($context["transformed_value"] ?? null);
            echo "
    ";
        } else {
            // line 44
            echo "      ";
            if (($context["is_value_foreign_link"] ?? null)) {
                // line 45
                echo "        ";
                echo ($context["backup_field"] ?? null);
                echo "
        <input type=\"hidden\" name=\"fields_type[multi_edit][";
                // line 46
                echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 46), "html", null, true);
                echo "]\" value=\"foreign\">
        <input type=\"text\" name=\"fields[multi_edit][";
                // line 47
                echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 47), "html", null, true);
                echo "]\" class=\"textfield\" tabindex=\"";
                echo twig_escape_filter($this->env, ($context["id_index"] ?? null), "html", null, true);
                echo "\" onchange=\"return verificationsAfterFieldChange('";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 47), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["row_id"] ?? null), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 47), "html", null, true);
                echo "')\" id=\"field_";
                echo twig_escape_filter($this->env, ($context["id_index"] ?? null), "html", null, true);
                echo "_3\" value=\"";
                echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
                echo "\">
        <a class=\"ajax browse_foreign\" href=\"";
                // line 48
                echo $this->env->getFunction('url')->getCallable()("/browse-foreigners");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "field" => twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "field", [], "any", false, false, false, 48), "rownumber" => ($context["row_id"] ?? null), "data" => ($context["data"] ?? null)]);
                echo "\">";
                echo $this->env->getFunction('get_icon')->getCallable()("b_browse", _gettext("Browse foreign values"));
                echo "</a>
      ";
            } elseif ( !twig_test_empty(            // line 49
($context["foreign_dropdown"] ?? null))) {
                // line 50
                echo "        ";
                echo ($context["backup_field"] ?? null);
                echo "
        <input type=\"hidden\" name=\"fields_type[multi_edit][";
                // line 51
                echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 51), "html", null, true);
                echo "]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "isBinary", [], "any", false, false, false, 51)) ? ("hex") : ("foreign"));
                echo "\">
        <select name=\"fields[multi_edit][";
                // line 52
                echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 52), "html", null, true);
                echo "]\" class=\"textfield\" tabindex=\"";
                echo twig_escape_filter($this->env, ($context["id_index"] ?? null), "html", null, true);
                echo "\" id=\"field_";
                echo twig_escape_filter($this->env, ($context["id_index"] ?? null), "html", null, true);
                echo "_3\" onchange=\"return verificationsAfterFieldChange('";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 52), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["row_id"] ?? null), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 52), "html", null, true);
                echo "')\">
          ";
                // line 53
                echo ($context["foreign_dropdown"] ?? null);
                echo "
        </select>
      ";
            } elseif ((((            // line 55
($context["longtext_double_textarea"] ?? null) && twig_in_filter("longtext", twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 55))) || twig_in_filter("json", twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 55))) || twig_in_filter("text", twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 55)))) {
                // line 56
                echo "        ";
                echo ($context["backup_field"] ?? null);
                echo "
        <textarea name=\"fields[multi_edit][";
                // line 57
                echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 57), "html", null, true);
                echo "]\" id=\"field_";
                echo twig_escape_filter($this->env, ($context["id_index"] ?? null), "html", null, true);
                echo "_3\" data-type=\"";
                echo twig_escape_filter($this->env, ($context["data_type"] ?? null), "html", null, true);
                echo "\" dir=\"";
                echo twig_escape_filter($this->env, ($context["text_dir"] ?? null), "html", null, true);
                echo "\" rows=\"";
                echo twig_escape_filter($this->env, ($context["textarea_rows"] ?? null), "html", null, true);
                echo "\" cols=\"";
                echo twig_escape_filter($this->env, ($context["textarea_cols"] ?? null), "html", null, true);
                echo "\" tabindex=\"";
                echo twig_escape_filter($this->env, ($context["id_index"] ?? null), "html", null, true);
                echo "\"";
                // line 58
                ((($context["max_length"] ?? null)) ? (print (twig_escape_filter($this->env, ((" data-maxlength=\"" . ($context["max_length"] ?? null)) . "\""), "html", null, true))) : (print ("")));
                echo ((twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "isChar", [], "any", false, false, false, 58)) ? (" class=\"char charField\"") : (""));
                echo " onchange=\"return verificationsAfterFieldChange('";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 58), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["row_id"] ?? null), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 58), "html", null, true);
                echo "')\">";
                // line 60
                echo (((is_string($__internal_compile_0 = ($context["special_chars"] ?? null)) && is_string($__internal_compile_1 = "
") && str_starts_with($__internal_compile_0, $__internal_compile_1))) ? ("
") : (""));
                echo ($context["special_chars"] ?? null);
                // line 61
                echo "</textarea>
        ";
                // line 62
                if ((twig_in_filter("text", twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 62)) && (twig_length_filter($this->env, ($context["special_chars"] ?? null)) > 32000))) {
                    // line 63
                    echo "          </td>
          <td>
          ";
echo _gettext("Because of its length,<br> this column might not be editable.");
                    // line 66
                    echo "        ";
                }
                // line 67
                echo "      ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 67) == "enum")) {
                // line 68
                echo "        ";
                echo ($context["backup_field"] ?? null);
                echo "
        <input type=\"hidden\" name=\"fields_type[multi_edit][";
                // line 69
                echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 69), "html", null, true);
                echo "]\" value=\"enum\">
        ";
                // line 70
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "type", [], "any", false, false, false, 70)) > 20)) {
                    // line 71
                    echo "          <select name=\"fields[multi_edit][";
                    echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 71), "html", null, true);
                    echo "]\" class=\"textfield\" tabindex=\"";
                    echo twig_escape_filter($this->env, ($context["id_index"] ?? null), "html", null, true);
                    echo "\" id=\"field_";
                    echo twig_escape_filter($this->env, ($context["id_index"] ?? null), "html", null, true);
                    echo "_3\" onchange=\"return verificationsAfterFieldChange('";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 71), "js"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["row_id"] ?? null), "js"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 71), "html", null, true);
                    echo "')\">
            <option value=\"\"></option>
            ";
                    // line 73
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["enum_values"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["enum_value"]) {
                        // line 74
                        echo "              <option value=\"";
                        echo twig_escape_filter($this->env, $context["enum_value"], "html", null, true);
                        echo "\"";
                        echo ((($context["enum_value"] == ($context["enum_selected_value"] ?? null))) ? (" selected") : (""));
                        echo ">";
                        echo twig_escape_filter($this->env, $context["enum_value"], "html", null, true);
                        echo "</option>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enum_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo "          </select>
        ";
                } else {
                    // line 78
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["enum_values"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["enum_value"]) {
                        // line 79
                        echo "            <input type=\"radio\" name=\"fields[multi_edit][";
                        echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                        echo "][";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 79), "html", null, true);
                        echo "]\" value=\"";
                        echo twig_escape_filter($this->env, $context["enum_value"], "html", null, true);
                        echo "\" class=\"textfield\" tabindex=\"";
                        echo twig_escape_filter($this->env, ($context["id_index"] ?? null), "html", null, true);
                        echo "\" id=\"field_";
                        echo twig_escape_filter($this->env, ($context["id_index"] ?? null), "html", null, true);
                        echo "_3_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 79), "html", null, true);
                        echo "\" onchange=\"return verificationsAfterFieldChange('";
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 79), "js"), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["row_id"] ?? null), "js"), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 79), "html", null, true);
                        echo "')\"";
                        echo ((($context["enum_value"] == ($context["enum_selected_value"] ?? null))) ? (" checked") : (""));
                        echo ">
            <label for=\"field_";
                        // line 80
                        echo twig_escape_filter($this->env, ($context["id_index"] ?? null), "html", null, true);
                        echo "_3_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 80), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["enum_value"], "html", null, true);
                        echo "</label>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enum_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 82
                    echo "        ";
                }
                // line 83
                echo "      ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 83) == "set")) {
                // line 84
                echo "        ";
                echo ($context["backup_field"] ?? null);
                echo "
        <input type=\"hidden\" name=\"fields_type[multi_edit][";
                // line 85
                echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 85), "html", null, true);
                echo "]\" value=\"set\">
        <select name=\"fields[multi_edit][";
                // line 86
                echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 86), "html", null, true);
                echo "][]\" class=\"textfield\" tabindex=\"";
                echo twig_escape_filter($this->env, ($context["id_index"] ?? null), "html", null, true);
                echo "\" size=\"";
                echo twig_escape_filter($this->env, ($context["set_select_size"] ?? null), "html", null, true);
                echo "\" id=\"field_";
                echo twig_escape_filter($this->env, ($context["id_index"] ?? null), "html", null, true);
                echo "_3\" onchange=\"return verificationsAfterFieldChange('";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 86), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["row_id"] ?? null), "js"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 86), "html", null, true);
                echo "')\" multiple>
          ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["set_values"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["set_value"]) {
                    // line 88
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, $context["set_value"], "html", null, true);
                    echo "\"";
                    echo ((twig_in_filter($context["set_value"], twig_split_filter($this->env, ($context["data"] ?? null), ","))) ? (" selected") : (""));
                    echo ">";
                    echo twig_escape_filter($this->env, $context["set_value"], "html", null, true);
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['set_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "        </select>
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 91
($context["column"] ?? null), "isBinary", [], "any", false, false, false, 91) || twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "isBlob", [], "any", false, false, false, 91))) {
                // line 92
                echo "        ";
                if (($context["is_column_protected_blob"] ?? null)) {
                    // line 93
                    echo "          ";
echo _gettext("Binary - do not edit");
                    // line 94
                    echo "          (";
                    echo twig_escape_filter($this->env, ($context["blob_value"] ?? null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["blob_value_unit"] ?? null), "html", null, true);
                    echo ")
          <input type=\"hidden\" name=\"fields[multi_edit][";
                    // line 95
                    echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 95), "html", null, true);
                    echo "]\" value=\"\">
          <input type=\"hidden\" name=\"fields_type[multi_edit][";
                    // line 96
                    echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 96), "html", null, true);
                    echo "]\" value=\"protected\">
        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 97
($context["column"] ?? null), "isBlob", [], "any", false, false, false, 97) || (twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "length", [], "any", false, false, false, 97) > ($context["limit_chars"] ?? null)))) {
                    // line 98
                    echo "          ";
                    echo ($context["backup_field"] ?? null);
                    echo "
          <input type=\"hidden\" name=\"fields_type[multi_edit][";
                    // line 99
                    echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 99), "html", null, true);
                    echo "]\" value=\"hex\">
          <textarea name=\"fields[multi_edit][";
                    // line 100
                    echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 100), "html", null, true);
                    echo "]\" id=\"field_";
                    echo twig_escape_filter($this->env, ($context["id_index"] ?? null), "html", null, true);
                    echo "_3\" data-type=\"HEX\" dir=\"";
                    echo twig_escape_filter($this->env, ($context["text_dir"] ?? null), "html", null, true);
                    echo "\" rows=\"";
                    echo twig_escape_filter($this->env, ($context["textarea_rows"] ?? null), "html", null, true);
                    echo "\" cols=\"";
                    echo twig_escape_filter($this->env, ($context["textarea_cols"] ?? null), "html", null, true);
                    echo "\" tabindex=\"";
                    echo twig_escape_filter($this->env, ($context["id_index"] ?? null), "html", null, true);
                    echo "\"";
                    // line 101
                    ((($context["max_length"] ?? null)) ? (print (twig_escape_filter($this->env, ((" data-maxlength=\"" . ($context["max_length"] ?? null)) . "\""), "html", null, true))) : (print ("")));
                    echo ((twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "isChar", [], "any", false, false, false, 101)) ? (" class=\"char charField\"") : (""));
                    echo " onchange=\"return verificationsAfterFieldChange('";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 101), "js"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["row_id"] ?? null), "js"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 101), "html", null, true);
                    echo "')\">";
                    // line 103
                    echo (((is_string($__internal_compile_2 = ($context["special_chars"] ?? null)) && is_string($__internal_compile_3 = "
") && str_starts_with($__internal_compile_2, $__internal_compile_3))) ? ("
") : (""));
                    echo ($context["special_chars"] ?? null);
                    // line 104
                    echo "</textarea>
        ";
                } else {
                    // line 106
                    echo "          ";
                    echo ($context["backup_field"] ?? null);
                    echo "
          <input type=\"hidden\" name=\"fields_type[multi_edit][";
                    // line 107
                    echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 107), "html", null, true);
                    echo "]\" value=\"hex\">
          ";
                    // line 108
                    echo ($context["input_field_html"] ?? null);
                    echo "
        ";
                }
                // line 110
                echo "        ";
                if ((($context["is_upload"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "isBlob", [], "any", false, false, false, 110))) {
                    // line 111
                    echo "          <br>
          ";
                    // line 113
                    echo "          <input type=\"file\" name=\"fields_upload[multi_edit][";
                    echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 113), "html", null, true);
                    echo "]\" class=\"textfield noDragDrop\" id=\"field_";
                    echo twig_escape_filter($this->env, ($context["id_index"] ?? null), "html", null, true);
                    echo "_3\" size=\"10\" onchange=\"return verificationsAfterFieldChange('";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "md5", [], "any", false, false, false, 113), "js"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["row_id"] ?? null), "js"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 113), "html", null, true);
                    echo "')\">
          ";
                    // line 114
                    echo twig_escape_filter($this->env, ($context["max_upload_size"] ?? null), "html", null, true);
                    echo "
        ";
                }
                // line 116
                echo "        ";
                echo ($context["select_option_for_upload"] ?? null);
                echo "
      ";
            } else {
                // line 118
                echo "        ";
                echo ($context["value"] ?? null);
                echo "
      ";
            }
            // line 120
            echo "
      ";
            // line 121
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 121), ($context["gis_data_types"] ?? null))) {
                // line 122
                echo "        <span class=\"open_gis_editor\" data-row-id=\"";
                echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                echo "\">
          ";
                // line 123
                echo $this->env->getFunction('link_or_button')->getCallable()("#", null, $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Edit/Insert")));
                echo "
        </span>
      ";
            }
            // line 126
            echo "    ";
        }
        // line 127
        echo "  </td>
</tr>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/insert/column_row.twig";
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
        return array (  636 => 127,  633 => 126,  627 => 123,  622 => 122,  620 => 121,  617 => 120,  611 => 118,  605 => 116,  600 => 114,  585 => 113,  582 => 111,  579 => 110,  574 => 108,  568 => 107,  563 => 106,  559 => 104,  554 => 103,  544 => 101,  529 => 100,  523 => 99,  518 => 98,  516 => 97,  510 => 96,  504 => 95,  497 => 94,  494 => 93,  491 => 92,  489 => 91,  486 => 90,  473 => 88,  469 => 87,  451 => 86,  445 => 85,  440 => 84,  437 => 83,  434 => 82,  414 => 80,  391 => 79,  373 => 78,  369 => 76,  356 => 74,  352 => 73,  334 => 71,  332 => 70,  326 => 69,  321 => 68,  318 => 67,  315 => 66,  310 => 63,  308 => 62,  305 => 61,  300 => 60,  290 => 58,  273 => 57,  268 => 56,  266 => 55,  261 => 53,  245 => 52,  237 => 51,  232 => 50,  230 => 49,  222 => 48,  204 => 47,  198 => 46,  193 => 45,  190 => 44,  184 => 42,  182 => 41,  176 => 39,  170 => 37,  166 => 35,  157 => 33,  149 => 32,  141 => 31,  129 => 30,  120 => 29,  118 => 28,  114 => 26,  111 => 25,  104 => 21,  90 => 20,  87 => 19,  83 => 17,  81 => 16,  76 => 15,  73 => 14,  71 => 13,  68 => 12,  62 => 9,  57 => 8,  55 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/insert/column_row.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\table\\insert\\column_row.twig");
    }
}
