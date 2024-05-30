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

/* table/insert/value_column_for_other_datatype.twig */
class __TwigTemplate_da4a68d36b736fef5148e21d8121ee25 extends Template
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
        echo ($context["backup_field"] ?? null);
        echo "
";
        // line 2
        if (($context["is_textarea"] ?? null)) {
            // line 3
            echo ($context["html_field"] ?? null);
        } else {
            // line 5
            echo ($context["html_field"] ?? null);
            // line 6
            if ((twig_matches("/(VIRTUAL|PERSISTENT|GENERATED)/", twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "extra", [], "any", false, false, false, 6)) && !twig_in_filter("DEFAULT_GENERATED", twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "extra", [], "any", false, false, false, 6)))) {
                // line 7
                echo "<input type=\"hidden\" name=\"virtual";
                echo twig_escape_filter($this->env, ($context["columnNameAppendix"] ?? null), "html", null, true);
                echo "\" value=\"1\">";
            }
            // line 9
            if ((twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "extra", [], "any", false, false, false, 9) == "auto_increment")) {
                // line 10
                echo "<input type=\"hidden\" name=\"auto_increment";
                echo twig_escape_filter($this->env, ($context["columnNameAppendix"] ?? null), "html", null, true);
                echo "\" value=\"1\">";
            }
            // line 12
            if ((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 12)) && is_string($__internal_compile_1 = "timestamp") && str_starts_with($__internal_compile_0, $__internal_compile_1))) {
                // line 13
                echo "<input type=\"hidden\" name=\"fields_type";
                echo twig_escape_filter($this->env, ($context["columnNameAppendix"] ?? null), "html", null, true);
                echo "\" value=\"timestamp\">";
            }
            // line 15
            if ((is_string($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "pmaType", [], "any", false, false, false, 15)) && is_string($__internal_compile_3 = "datetime") && str_starts_with($__internal_compile_2, $__internal_compile_3))) {
                // line 16
                echo "<input type=\"hidden\" name=\"fields_type";
                echo twig_escape_filter($this->env, ($context["columnNameAppendix"] ?? null), "html", null, true);
                echo "\" value=\"datetime\">";
            } elseif ((is_string($__internal_compile_4 = twig_get_attribute($this->env, $this->source,             // line 17
($context["column"] ?? null), "pmaType", [], "any", false, false, false, 17)) && is_string($__internal_compile_5 = "date") && str_starts_with($__internal_compile_4, $__internal_compile_5))) {
                // line 18
                echo "<input type=\"hidden\" name=\"fields_type";
                echo twig_escape_filter($this->env, ($context["columnNameAppendix"] ?? null), "html", null, true);
                echo "\" value=\"date\">";
            }
            // line 20
            if (((twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 20) == "bit") || (twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 20) == "uuid"))) {
                // line 21
                echo "<input type=\"hidden\" name=\"fields_type";
                echo twig_escape_filter($this->env, ($context["columnNameAppendix"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "trueType", [], "any", false, false, false, 21), "html", null, true);
                echo "\">";
            }
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/insert/value_column_for_other_datatype.twig";
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
        return array (  84 => 21,  82 => 20,  77 => 18,  75 => 17,  71 => 16,  69 => 15,  64 => 13,  62 => 12,  57 => 10,  55 => 9,  50 => 7,  48 => 6,  46 => 5,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/insert/value_column_for_other_datatype.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\table\\insert\\value_column_for_other_datatype.twig");
    }
}
