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

/* sql/no_results_returned.twig */
class __TwigTemplate_c844a23933bd7fbf6aed583227b4256c extends Template
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
        echo ($context["message"] ?? null);
        echo "

";
        // line 3
        echo ($context["sql_query_results_table"] ?? null);
        echo "

";
        // line 5
        echo ($context["profiling_chart"] ?? null);
        echo "

";
        // line 7
        if ( !($context["is_procedure"] ?? null)) {
            // line 8
            echo "  <div class=\"card mb-3 d-print-none\">
    <div class=\"card-header\">";
echo _gettext("Query results operations");
            // line 9
            echo "</div>
    <div class=\"card-body\">
      <span>
        ";
            // line 12
            echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/view/create"), ["db" =>             // line 14
($context["db"] ?? null), "table" => ($context["table"] ?? null), "printview" => "1", "sql_query" => ($context["sql_query"] ?? null)], $this->env->getFunction('get_icon')->getCallable()("b_view_add", _gettext("Create view"), true), ["class" => "create_view ajax btn"]);
            // line 17
            echo "
      </span>
    </div>
  </div>
";
        }
        // line 22
        echo "
";
        // line 23
        echo ($context["bookmark"] ?? null);
        echo "

";
        // line 25
        echo twig_include($this->env, $context, "modals/create_view.twig");
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sql/no_results_returned.twig";
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
        return array (  81 => 25,  76 => 23,  73 => 22,  66 => 17,  64 => 14,  63 => 12,  58 => 9,  54 => 8,  52 => 7,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sql/no_results_returned.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\sql\\no_results_returned.twig");
    }
}
