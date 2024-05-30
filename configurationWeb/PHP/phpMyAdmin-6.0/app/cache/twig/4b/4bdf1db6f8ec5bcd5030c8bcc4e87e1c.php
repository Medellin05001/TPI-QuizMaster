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

/* table/structure/display_partitions.twig */
class __TwigTemplate_f718d3cbaf1a747bb6a18646a19b836d extends Template
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
        echo "<div id=\"partitions\" class=\"card mb-3\">
    <div class=\"card-header\">
      ";
echo _gettext("Partitions");
        // line 4
        echo "      ";
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("partitioning");
        echo "
    </div>

    <div class=\"card-body\">
        ";
        // line 8
        if (( !array_key_exists("partitions", $context) || twig_test_empty(($context["partitions"] ?? null)))) {
            // line 9
            echo "            ";
            echo $this->env->getFilter('notice')->getCallable()(_gettext("No partitioning defined!"));
            echo "
        ";
        } else {
            // line 11
            echo "            <p>
                ";
echo _gettext("Partitioned by:");
            // line 13
            echo "                <code>";
            echo twig_escape_filter($this->env, ($context["partition_method"] ?? null), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, ($context["partition_expression"] ?? null), "html", null, true);
            echo ")</code>
            </p>
            ";
            // line 15
            if (($context["has_sub_partitions"] ?? null)) {
                // line 16
                echo "                <p>
                    ";
echo _gettext("Sub partitioned by:");
                // line 18
                echo "                    <code>";
                echo twig_escape_filter($this->env, ($context["sub_partition_method"] ?? null), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, ($context["sub_partition_expression"] ?? null), "html", null, true);
                echo ")</code>
                <p>
            ";
            }
            // line 21
            echo "            <table class=\"table table-striped table-hover table-sm\">
                <thead>
                    <tr>
                        <th colspan=\"2\">#</th>
                        <th>";
echo _gettext("Partition");
            // line 25
            echo "</th>
                        ";
            // line 26
            if (($context["has_description"] ?? null)) {
                // line 27
                echo "                            <th>";
echo _gettext("Expression");
                echo "</th>
                        ";
            }
            // line 29
            echo "                        <th>";
echo _gettext("Rows");
            echo "</th>
                        <th>";
echo _gettext("Data length");
            // line 30
            echo "</th>
                        <th>";
echo _gettext("Index length");
            // line 31
            echo "</th>
                        <th>";
echo _gettext("Comment");
            // line 32
            echo "</th>
                        <th colspan=\"";
            // line 33
            echo ((($context["range_or_list"] ?? null)) ? ("7") : ("6"));
            echo "\">
                            ";
echo _gettext("Action");
            // line 35
            echo "                        </th>
                    </tr>
                </thead>
                <tbody>
                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["partitions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["partition"]) {
                // line 40
                echo "                    <tr class=\"noclick";
                echo ((($context["has_sub_partitions"] ?? null)) ? (" table-active") : (""));
                echo "\">
                        ";
                // line 41
                if (($context["has_sub_partitions"] ?? null)) {
                    // line 42
                    echo "                            <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getOrdinal", [], "method", false, false, false, 42), "html", null, true);
                    echo "</td>
                            <td></td>
                        ";
                } else {
                    // line 45
                    echo "                            <td colspan=\"2\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getOrdinal", [], "method", false, false, false, 45), "html", null, true);
                    echo "</td>
                        ";
                }
                // line 47
                echo "                        <th>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getName", [], "method", false, false, false, 47), "html", null, true);
                echo "</th>
                        ";
                // line 48
                if (($context["has_description"] ?? null)) {
                    // line 49
                    echo "                            <td>
                                <code>";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getExpression", [], "method", false, false, false, 51), "html", null, true);
                    // line 52
                    echo (((twig_get_attribute($this->env, $this->source, $context["partition"], "getMethod", [], "method", false, false, false, 52) == "LIST")) ? (" IN (") : (" < "));
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getDescription", [], "method", false, false, false, 53), "html", null, true);
                    // line 54
                    echo (((twig_get_attribute($this->env, $this->source, $context["partition"], "getMethod", [], "method", false, false, false, 54) == "LIST")) ? (")") : (""));
                    // line 55
                    echo "</code>
                            </td>
                        ";
                }
                // line 58
                echo "                        <td class=\"value\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getRows", [], "method", false, false, false, 58), "html", null, true);
                echo "</td>
                        <td class=\"value\">
                            ";
                // line 60
                $context["data_length"] = $this->env->getFunction('format_byte_down')->getCallable()(twig_get_attribute($this->env, $this->source,                 // line 61
$context["partition"], "getDataLength", [], "method", false, false, false, 61), 3, 1);
                // line 65
                echo "                            <span>";
                echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["data_length"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
                echo "</span>
                            <span class=\"unit\">";
                // line 66
                echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["data_length"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), "html", null, true);
                echo "</span>
                        </td>
                        <td class=\"value\">
                            ";
                // line 69
                $context["index_length"] = $this->env->getFunction('format_byte_down')->getCallable()(twig_get_attribute($this->env, $this->source,                 // line 70
$context["partition"], "getIndexLength", [], "method", false, false, false, 70), 3, 1);
                // line 74
                echo "                            <span>";
                echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["index_length"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "html", null, true);
                echo "</span>
                            <span class=\"unit\">";
                // line 75
                echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["index_length"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[1] ?? null) : null), "html", null, true);
                echo "</span>
                        </td>
                        <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partition"], "getComment", [], "method", false, false, false, 77), "html", null, true);
                echo "</td>

                        <td>
                          <a id=\"partition_action_ANALYZE\" class=\"ajax\" href=\"";
                // line 80
                echo $this->env->getFunction('url')->getCallable()("/table/partition/analyze");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" =>                 // line 81
($context["db"] ?? null), "table" =>                 // line 82
($context["table"] ?? null), "partition_name" => twig_get_attribute($this->env, $this->source,                 // line 83
$context["partition"], "getName", [], "method", false, false, false, 83)], "", false);
                // line 84
                echo "\">
                            ";
                // line 85
                echo $this->env->getFunction('get_icon')->getCallable()("b_search", _gettext("Analyze"));
                echo "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_CHECK\" class=\"ajax\" href=\"";
                // line 90
                echo $this->env->getFunction('url')->getCallable()("/table/partition/check");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" =>                 // line 91
($context["db"] ?? null), "table" =>                 // line 92
($context["table"] ?? null), "partition_name" => twig_get_attribute($this->env, $this->source,                 // line 93
$context["partition"], "getName", [], "method", false, false, false, 93)], "", false);
                // line 94
                echo "\">
                            ";
                // line 95
                echo $this->env->getFunction('get_icon')->getCallable()("eye", _gettext("Check"));
                echo "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_OPTIMIZE\" class=\"ajax\" href=\"";
                // line 100
                echo $this->env->getFunction('url')->getCallable()("/table/partition/optimize");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" =>                 // line 101
($context["db"] ?? null), "table" =>                 // line 102
($context["table"] ?? null), "partition_name" => twig_get_attribute($this->env, $this->source,                 // line 103
$context["partition"], "getName", [], "method", false, false, false, 103)], "", false);
                // line 104
                echo "\">
                            ";
                // line 105
                echo $this->env->getFunction('get_icon')->getCallable()("normalize", _gettext("Optimize"));
                echo "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_REBUILD\" class=\"ajax\" href=\"";
                // line 110
                echo $this->env->getFunction('url')->getCallable()("/table/partition/rebuild");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" =>                 // line 111
($context["db"] ?? null), "table" =>                 // line 112
($context["table"] ?? null), "partition_name" => twig_get_attribute($this->env, $this->source,                 // line 113
$context["partition"], "getName", [], "method", false, false, false, 113)], "", false);
                // line 114
                echo "\">
                            ";
                // line 115
                echo $this->env->getFunction('get_icon')->getCallable()("s_tbl", _gettext("Rebuild"));
                echo "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_REPAIR\" class=\"ajax\" href=\"";
                // line 120
                echo $this->env->getFunction('url')->getCallable()("/table/partition/repair");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" =>                 // line 121
($context["db"] ?? null), "table" =>                 // line 122
($context["table"] ?? null), "partition_name" => twig_get_attribute($this->env, $this->source,                 // line 123
$context["partition"], "getName", [], "method", false, false, false, 123)], "", false);
                // line 124
                echo "\">
                            ";
                // line 125
                echo $this->env->getFunction('get_icon')->getCallable()("b_tblops", _gettext("Repair"));
                echo "
                          </a>
                        </td>

                        <td>
                          <a id=\"partition_action_TRUNCATE\" class=\"ajax\" href=\"";
                // line 130
                echo $this->env->getFunction('url')->getCallable()("/table/partition/truncate");
                echo "\" data-post=\"";
                echo $this->env->getFunction('get_common')->getCallable()(["db" =>                 // line 131
($context["db"] ?? null), "table" =>                 // line 132
($context["table"] ?? null), "partition_name" => twig_get_attribute($this->env, $this->source,                 // line 133
$context["partition"], "getName", [], "method", false, false, false, 133)], "", false);
                // line 134
                echo "\">
                            ";
                // line 135
                echo $this->env->getFunction('get_icon')->getCallable()("b_empty", _gettext("Truncate"));
                echo "
                          </a>
                        </td>

                        ";
                // line 139
                if (($context["range_or_list"] ?? null)) {
                    // line 140
                    echo "                          <td>
                            <a id=\"partition_action_DROP\" class=\"ajax\" href=\"";
                    // line 141
                    echo $this->env->getFunction('url')->getCallable()("/table/partition/drop");
                    echo "\" data-post=\"";
                    echo $this->env->getFunction('get_common')->getCallable()(["db" =>                     // line 142
($context["db"] ?? null), "table" =>                     // line 143
($context["table"] ?? null), "partition_name" => twig_get_attribute($this->env, $this->source,                     // line 144
$context["partition"], "getName", [], "method", false, false, false, 144)], "", false);
                    // line 145
                    echo "\">
                              ";
                    // line 146
                    echo $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Drop"));
                    echo "
                            </a>
                          </td>
                        ";
                }
                // line 150
                echo "
                        ";
                // line 151
                if (($context["has_sub_partitions"] ?? null)) {
                    // line 152
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["partition"], "getSubPartitions", [], "method", false, false, false, 152));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_partition"]) {
                        // line 153
                        echo "                                <tr class=\"noclick\">
                                    <td></td>
                                    <td>";
                        // line 155
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_partition"], "getOrdinal", [], "method", false, false, false, 155), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 156
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_partition"], "getName", [], "method", false, false, false, 156), "html", null, true);
                        echo "</td>
                                    ";
                        // line 157
                        if (($context["has_description"] ?? null)) {
                            // line 158
                            echo "                                        <td></td>
                                    ";
                        }
                        // line 160
                        echo "                                    <td class=\"value\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_partition"], "getRows", [], "method", false, false, false, 160), "html", null, true);
                        echo "</td>
                                    <td class=\"value\">
                                        ";
                        // line 162
                        $context["data_length"] = $this->env->getFunction('format_byte_down')->getCallable()(twig_get_attribute($this->env, $this->source,                         // line 163
$context["sub_partition"], "getDataLength", [], "method", false, false, false, 163), 3, 1);
                        // line 167
                        echo "                                        <span>";
                        echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["data_length"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), "html", null, true);
                        echo "</span>
                                        <span class=\"unit\">";
                        // line 168
                        echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["data_length"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[1] ?? null) : null), "html", null, true);
                        echo "</span>
                                    </td>
                                    <td class=\"value\">
                                        ";
                        // line 171
                        $context["index_length"] = $this->env->getFunction('format_byte_down')->getCallable()(twig_get_attribute($this->env, $this->source,                         // line 172
$context["sub_partition"], "getIndexLength", [], "method", false, false, false, 172), 3, 1);
                        // line 176
                        echo "                                        <span>";
                        echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["index_length"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null), "html", null, true);
                        echo "</span>
                                        <span class=\"unit\">";
                        // line 177
                        echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["index_length"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[1] ?? null) : null), "html", null, true);
                        echo "</span>
                                    </td>
                                    <td>";
                        // line 179
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_partition"], "getComment", [], "method", false, false, false, 179), "html", null, true);
                        echo "</td>
                                    <td colspan=\"";
                        // line 180
                        echo ((($context["range_or_list"] ?? null)) ? ("7") : ("6"));
                        echo "\"></td>
                                </tr>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_partition'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 183
                    echo "                        ";
                }
                // line 184
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "                </tbody>
            </table>
        ";
        }
        // line 189
        echo "    </div>
    <div class=\"card-footer d-print-none\">
        <form action=\"";
        // line 191
        echo $this->env->getFunction('url')->getCallable()("/table/structure/partitioning");
        echo "\" method=\"post\">
            ";
        // line 192
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
        echo "

            ";
        // line 194
        if (( !array_key_exists("partitions", $context) || twig_test_empty(($context["partitions"] ?? null)))) {
            // line 195
            echo "                <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
echo _gettext("Partition table");
            echo "\">
            ";
        } else {
            // line 197
            echo "                ";
            echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/sql"), ["db" =>             // line 200
($context["db"] ?? null), "table" =>             // line 201
($context["table"] ?? null), "sql_query" => (("ALTER TABLE " . $this->env->getFunction('backquote')->getCallable()(            // line 202
($context["table"] ?? null))) . " REMOVE PARTITIONING")], _gettext("Remove partitioning"), ["class" => "btn btn-secondary ajax", "id" => "remove_partitioning"]);
            // line 207
            echo "
                <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
echo _gettext("Edit partitioning");
            // line 208
            echo "\">
            ";
        }
        // line 210
        echo "        </form>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/structure/display_partitions.twig";
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
        return array (  470 => 210,  466 => 208,  462 => 207,  460 => 202,  459 => 201,  458 => 200,  456 => 197,  450 => 195,  448 => 194,  443 => 192,  439 => 191,  435 => 189,  430 => 186,  423 => 184,  420 => 183,  411 => 180,  407 => 179,  402 => 177,  397 => 176,  395 => 172,  394 => 171,  388 => 168,  383 => 167,  381 => 163,  380 => 162,  374 => 160,  370 => 158,  368 => 157,  364 => 156,  360 => 155,  356 => 153,  351 => 152,  349 => 151,  346 => 150,  339 => 146,  336 => 145,  334 => 144,  333 => 143,  332 => 142,  329 => 141,  326 => 140,  324 => 139,  317 => 135,  314 => 134,  312 => 133,  311 => 132,  310 => 131,  307 => 130,  299 => 125,  296 => 124,  294 => 123,  293 => 122,  292 => 121,  289 => 120,  281 => 115,  278 => 114,  276 => 113,  275 => 112,  274 => 111,  271 => 110,  263 => 105,  260 => 104,  258 => 103,  257 => 102,  256 => 101,  253 => 100,  245 => 95,  242 => 94,  240 => 93,  239 => 92,  238 => 91,  235 => 90,  227 => 85,  224 => 84,  222 => 83,  221 => 82,  220 => 81,  217 => 80,  211 => 77,  206 => 75,  201 => 74,  199 => 70,  198 => 69,  192 => 66,  187 => 65,  185 => 61,  184 => 60,  178 => 58,  173 => 55,  171 => 54,  169 => 53,  167 => 52,  165 => 51,  162 => 49,  160 => 48,  155 => 47,  149 => 45,  142 => 42,  140 => 41,  135 => 40,  131 => 39,  125 => 35,  120 => 33,  117 => 32,  113 => 31,  109 => 30,  103 => 29,  97 => 27,  95 => 26,  92 => 25,  85 => 21,  76 => 18,  72 => 16,  70 => 15,  62 => 13,  58 => 11,  52 => 9,  50 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/display_partitions.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\table\\structure\\display_partitions.twig");
    }
}
