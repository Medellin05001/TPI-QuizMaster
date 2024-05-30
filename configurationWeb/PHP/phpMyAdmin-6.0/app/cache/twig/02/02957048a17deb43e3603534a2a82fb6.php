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

/* server/privileges/privileges_summary.twig */
class __TwigTemplate_b9ecb0038cb1b058f197b94211197750 extends Template
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
        echo "<form class=\"submenu-item\" action=\"";
        echo $this->env->getFunction('url')->getCallable()("/server/privileges");
        echo "\" id=\"";
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 2
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()();
        echo "
    <input type=\"hidden\" name=\"username\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"hostname\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["hostname"] ?? null), "html", null, true);
        echo "\">

    <div class=\"card mb-3\">
        <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["sub_menu_label"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 8
        echo twig_escape_filter($this->env, ($context["legend"] ?? null), "html", null, true);
        echo "
        </div>

        <div class=\"card-body\">
        <table class=\"table table-striped table-hover w-auto\">
            <thead>
                <tr>
                    <th scope=\"col\">";
        // line 15
        echo twig_escape_filter($this->env, ($context["type_label"] ?? null), "html", null, true);
        echo "</th>
                    <th scope=\"col\">";
echo _gettext("Privileges");
        // line 16
        echo "</th>
                    <th scope=\"col\">";
echo _gettext("Grant");
        // line 17
        echo "</th>
                    ";
        // line 18
        if ((($context["type"] ?? null) == "database")) {
            // line 19
            echo "                        <th scope=\"col\">";
echo _gettext("Table-specific privileges");
            echo "</th>
                    ";
        } elseif ((        // line 20
($context["type"] ?? null) == "table")) {
            // line 21
            echo "                        <th scope=\"col\">";
echo _gettext("Column-specific privileges");
            echo "</th>
                    ";
        }
        // line 23
        echo "                    <th scope=\"col\" colspan=\"2\">";
echo _gettext("Action");
        echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 28
        if ((twig_length_filter($this->env, ($context["privileges"] ?? null)) == 0)) {
            // line 29
            echo "                    ";
            $context["colspan"] = (((($context["type"] ?? null) == "database")) ? (7) : ((((($context["type"] ?? null) == "table")) ? (6) : (5))));
            // line 30
            echo "                    <tr>
                        <td class=\"text-center\" colspan=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["colspan"] ?? null), "html", null, true);
            echo "\"><em>";
echo _gettext("None");
            echo "</em></td>
                    </tr>
                ";
        } else {
            // line 34
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["privileges"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["privilege"]) {
                // line 35
                echo "                        <tr>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, (($__internal_compile_0 = $context["privilege"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null), "html", null, true);
                echo "</td>
                            <td><code>";
                // line 37
                echo (($__internal_compile_1 = $context["privilege"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["privileges"] ?? null) : null);
                echo "</code></td>
                            <td>";
                // line 38
                echo twig_escape_filter($this->env, (((($__internal_compile_2 = $context["privilege"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["grant"] ?? null) : null)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                echo "</td>

                            ";
                // line 40
                if ((($context["type"] ?? null) == "database")) {
                    // line 41
                    echo "                                <td>";
                    echo twig_escape_filter($this->env, (((($__internal_compile_3 = $context["privilege"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["table_privs"] ?? null) : null)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                    echo "</td>
                            ";
                } elseif ((                // line 42
($context["type"] ?? null) == "table")) {
                    // line 43
                    echo "                                <td>";
                    echo twig_escape_filter($this->env, (((($__internal_compile_4 = $context["privilege"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["column_privs"] ?? null) : null)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                    echo "</td>
                            ";
                }
                // line 45
                echo "
                            <td>";
                // line 46
                echo (($__internal_compile_5 = $context["privilege"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["edit_link"] ?? null) : null);
                echo "</td>
                            <td>";
                // line 47
                echo (($__internal_compile_6 = $context["privilege"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["revoke_link"] ?? null) : null);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['privilege'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                ";
        }
        // line 51
        echo "            </tbody>
        </table>

        ";
        // line 54
        if ((($context["type"] ?? null) == "database")) {
            // line 55
            echo "            <label for=\"text_dbname\">";
echo _gettext("Add privileges on the following database(s):");
            echo "</label>";
            // line 57
            if ( !twig_test_empty(($context["databases"] ?? null))) {
                // line 58
                echo "                <select class=\"resize-vertical\" name=\"pred_dbname[]\" multiple=\"multiple\">
                    ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["databases"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["database"]) {
                    // line 60
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["escaped_databases"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 60)] ?? null) : null), "html", null, true);
                    echo "\">
                            ";
                    // line 61
                    echo twig_escape_filter($this->env, $context["database"], "html", null, true);
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['database'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                </select>
            ";
            }
            // line 67
            echo "<input type=\"text\" id=\"text_dbname\" name=\"dbname\">
            ";
            // line 68
            echo $this->env->getFunction('show_hint')->getCallable()(_gettext("Wildcards % and _ should be escaped with a \\ to use them literally."));
            echo "
        ";
        } elseif ((        // line 69
($context["type"] ?? null) == "table")) {
            // line 70
            echo "            <input type=\"hidden\" name=\"dbname\" value=\"";
            echo twig_escape_filter($this->env, ($context["escaped_database"] ?? null), "html", null, true);
            echo "\">

            <label for=\"text_tablename\">";
echo _gettext("Add privileges on the following table:");
            // line 72
            echo "</label>";
            // line 74
            if ( !twig_test_empty(($context["tables"] ?? null))) {
                // line 75
                echo "                <select name=\"pred_tablename\" class=\"autosubmit\">
                    <option value=\"\" selected=\"selected\">";
echo _gettext("Use text field");
                // line 76
                echo ":</option>
                    ";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tables"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
                    // line 78
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "                </select>
            ";
            }
            // line 83
            echo "<input type=\"text\" id=\"text_tablename\" name=\"tablename\">
        ";
        } else {
            // line 85
            echo "            <input type=\"hidden\" name=\"dbname\" value=\"";
            echo twig_escape_filter($this->env, ($context["escaped_database"] ?? null), "html", null, true);
            echo "\">

            <label for=\"text_routinename\">";
echo _gettext("Add privileges on the following routine:");
            // line 87
            echo "</label>";
            // line 89
            if ( !twig_test_empty(($context["routines"] ?? null))) {
                // line 90
                echo "                <select name=\"pred_routinename\" class=\"autosubmit\">
                    <option value=\"\" selected=\"selected\">";
echo _gettext("Use text field");
                // line 91
                echo ":</option>
                    ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["routines"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["routine"]) {
                    // line 93
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $context["routine"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["routine"], "html", null, true);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['routine'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "                </select>
            ";
            }
            // line 98
            echo "<input type=\"text\" id=\"text_routinename\" name=\"routinename\">
        ";
        }
        // line 100
        echo "        </div>
    </div>

    <div>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Go");
        // line 104
        echo "\">
    </div>
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/privileges_summary.twig";
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
        return array (  336 => 104,  329 => 100,  325 => 98,  321 => 95,  310 => 93,  306 => 92,  303 => 91,  299 => 90,  297 => 89,  295 => 87,  288 => 85,  284 => 83,  280 => 80,  269 => 78,  265 => 77,  262 => 76,  258 => 75,  256 => 74,  254 => 72,  247 => 70,  245 => 69,  241 => 68,  238 => 67,  234 => 64,  217 => 61,  212 => 60,  195 => 59,  192 => 58,  190 => 57,  186 => 55,  184 => 54,  179 => 51,  176 => 50,  167 => 47,  163 => 46,  160 => 45,  154 => 43,  152 => 42,  147 => 41,  145 => 40,  140 => 38,  136 => 37,  132 => 36,  129 => 35,  124 => 34,  116 => 31,  113 => 30,  110 => 29,  108 => 28,  99 => 23,  93 => 21,  91 => 20,  86 => 19,  84 => 18,  81 => 17,  77 => 16,  72 => 15,  62 => 8,  58 => 7,  52 => 4,  48 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/privileges_summary.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\server\\privileges\\privileges_summary.twig");
    }
}
