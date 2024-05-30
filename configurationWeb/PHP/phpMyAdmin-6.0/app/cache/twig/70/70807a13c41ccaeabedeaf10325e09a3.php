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

/* database/structure/body_for_table_summary.twig */
class __TwigTemplate_ae10d4b7c70b7a40363f143eb8211e43 extends Template
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
        echo "<tfoot id=\"tbl_summary_row\">
<tr>
    <th class=\"d-print-none\"></th>
    <th class=\"tbl_num text-nowrap\">
        ";
        // line 5
        ob_start(function () { return ''; });
echo _ngettext("%s table", "%s tables", abs(        // line 6
($context["num_tables"] ?? null)));
        $context["num_tables_trans"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        echo "        ";
        echo twig_escape_filter($this->env, twig_sprintf(($context["num_tables_trans"] ?? null), $this->env->getFunction('format_number')->getCallable()(($context["num_tables"] ?? null), 0)), "html", null, true);
        echo "
    </th>
    ";
        // line 10
        if (($context["server_replica_status"] ?? null)) {
            // line 11
            echo "        <th>";
echo _gettext("Replication");
            echo "</th>
    ";
        }
        // line 13
        echo "    ";
        $context["sum_colspan"] = ((($context["db_is_system_schema"] ?? null)) ? (4) : (7));
        // line 14
        echo "    ";
        if ((($context["num_favorite_tables"] ?? null) == 0)) {
            // line 15
            echo "        ";
            $context["sum_colspan"] = (($context["sum_colspan"] ?? null) - 1);
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <th colspan=\"";
        echo twig_escape_filter($this->env, ($context["sum_colspan"] ?? null), "html", null, true);
        echo "\" class=\"d-print-none\">";
echo _gettext("Sum");
        echo "</th>
    ";
        // line 18
        $context["row_count_sum"] = $this->env->getFunction('format_number')->getCallable()(($context["sum_entries"] ?? null), 0);
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        $context["row_sum_url"] = [];
        // line 21
        echo "    ";
        if (array_key_exists("approx_rows", $context)) {
            // line 22
            echo "        ";
            $context["row_sum_url"] = ["ajax_request" => true, "db" =>             // line 24
($context["db"] ?? null), "real_row_count_all" => "true"];
            // line 27
            echo "    ";
        }
        // line 28
        echo "    ";
        if (($context["approx_rows"] ?? null)) {
            // line 29
            echo "        ";
            ob_start(function () { return ''; });
            // line 30
            echo "<a href=\"";
            echo $this->env->getFunction('url')->getCallable()("/database/structure/real-row-count", ($context["row_sum_url"] ?? null));
            echo "\" class=\"ajax row_count_sum\">~";
            // line 31
            echo twig_escape_filter($this->env, ($context["row_count_sum"] ?? null), "html", null, true);
            // line 32
            echo "</a>";
            $context["cell_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 34
            echo "    ";
        } else {
            // line 35
            echo "        ";
            $context["cell_text"] = ($context["row_count_sum"] ?? null);
            // line 36
            echo "    ";
        }
        // line 37
        echo "    <th class=\"value tbl_rows font-monospace text-end\">";
        echo twig_escape_filter($this->env, ($context["cell_text"] ?? null), "html", null, true);
        echo "</th>
    ";
        // line 38
        if ( !(($context["properties_num_columns"] ?? null) > 1)) {
            // line 39
            echo "        <th class=\"text-center\">
            <dfn title=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_sprintf(_gettext("%s is the default storage engine on this MySQL server."), ($context["default_storage_engine"] ?? null)), "html", null, true);
            echo "\">
                ";
            // line 41
            echo twig_escape_filter($this->env, ($context["default_storage_engine"] ?? null), "html", null, true);
            echo "
            </dfn>
        </th>
        <th>
            ";
            // line 45
            if ( !twig_test_empty(($context["database_collation"] ?? null))) {
                // line 46
                echo "                <dfn title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["database_collation"] ?? null), "description", [], "any", false, false, false, 46), "html", null, true);
                echo " (";
echo _gettext("Default");
                echo ")\">
                    ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["database_collation"] ?? null), "name", [], "any", false, false, false, 47), "html", null, true);
                echo "
                </dfn>
            ";
            }
            // line 50
            echo "        </th>
    ";
        }
        // line 52
        echo "
    ";
        // line 53
        if (($context["is_show_stats"] ?? null)) {
            // line 54
            echo "        ";
            $context["sum"] = $this->env->getFunction('format_byte_down')->getCallable()(($context["sum_size"] ?? null), 3, 1);
            // line 55
            echo "        ";
            $context["sum_formatted"] = (($__internal_compile_0 = ($context["sum"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null);
            // line 56
            echo "        ";
            $context["sum_unit"] = (($__internal_compile_1 = ($context["sum"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null);
            // line 57
            echo "        <th class=\"value tbl_size font-monospace text-end\">";
            echo twig_escape_filter($this->env, ($context["sum_formatted"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["sum_unit"] ?? null), "html", null, true);
            echo "</th>

        ";
            // line 59
            $context["overhead"] = $this->env->getFunction('format_byte_down')->getCallable()(($context["overhead_size"] ?? null), 3, 1);
            // line 60
            echo "        ";
            $context["overhead_formatted"] = (($__internal_compile_2 = ($context["overhead"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null);
            // line 61
            echo "        ";
            $context["overhead_unit"] = (($__internal_compile_3 = ($context["overhead"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[1] ?? null) : null);
            // line 62
            echo "        <th class=\"value tbl_overhead font-monospace text-end\">";
            echo twig_escape_filter($this->env, ($context["overhead_formatted"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["overhead_unit"] ?? null), "html", null, true);
            echo "</th>
    ";
        }
        // line 64
        echo "
    ";
        // line 65
        if (($context["show_charset"] ?? null)) {
            // line 66
            echo "        <th>";
            echo twig_escape_filter($this->env, ($context["database_charset"] ?? null), "html", null, true);
            echo "</th>
    ";
        }
        // line 68
        echo "    ";
        if (($context["show_comment"] ?? null)) {
            // line 69
            echo "        <th></th>
    ";
        }
        // line 71
        echo "    ";
        if (($context["show_creation"] ?? null)) {
            // line 72
            echo "        <th class=\"value tbl_creation font-monospace text-end\">
            ";
            // line 73
            echo twig_escape_filter($this->env, ($context["create_time_all"] ?? null), "html", null, true);
            echo "
        </th>
    ";
        }
        // line 76
        echo "    ";
        if (($context["show_last_update"] ?? null)) {
            // line 77
            echo "        <th class=\"value tbl_last_update font-monospace text-end\">
            ";
            // line 78
            echo twig_escape_filter($this->env, ($context["update_time_all"] ?? null), "html", null, true);
            echo "
        </th>
    ";
        }
        // line 81
        echo "    ";
        if (($context["show_last_check"] ?? null)) {
            // line 82
            echo "        <th class=\"value tbl_last_check font-monospace text-end\">
            ";
            // line 83
            echo twig_escape_filter($this->env, ($context["check_time_all"] ?? null), "html", null, true);
            echo "
        </th>
    ";
        }
        // line 86
        echo "</tr>
</tfoot>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/structure/body_for_table_summary.twig";
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
        return array (  254 => 86,  248 => 83,  245 => 82,  242 => 81,  236 => 78,  233 => 77,  230 => 76,  224 => 73,  221 => 72,  218 => 71,  214 => 69,  211 => 68,  205 => 66,  203 => 65,  200 => 64,  192 => 62,  189 => 61,  186 => 60,  184 => 59,  176 => 57,  173 => 56,  170 => 55,  167 => 54,  165 => 53,  162 => 52,  158 => 50,  152 => 47,  145 => 46,  143 => 45,  136 => 41,  132 => 40,  129 => 39,  127 => 38,  122 => 37,  119 => 36,  116 => 35,  113 => 34,  110 => 32,  108 => 31,  104 => 30,  101 => 29,  98 => 28,  95 => 27,  93 => 24,  91 => 22,  88 => 21,  85 => 20,  83 => 19,  81 => 18,  74 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  56 => 11,  54 => 10,  48 => 8,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/structure/body_for_table_summary.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\database\\structure\\body_for_table_summary.twig");
    }
}
