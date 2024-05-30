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

/* table/insert/continue_insertion_form.twig */
class __TwigTemplate_f9a618e22fbf2026887d2e8b8f159032 extends Template
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
        echo "<form id=\"continueForm\" method=\"post\" action=\"";
        echo $this->env->getFunction('url')->getCallable()("/table/change");
        echo "\" name=\"continueForm\" class=\"row g-3\">
  ";
        // line 2
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["goto"] ?? null), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"err_url\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["err_url"] ?? null), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"sql_query\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["sql_query"] ?? null), "html", null, true);
        echo "\">

  ";
        // line 7
        if (($context["has_where_clause"] ?? null)) {
            // line 8
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["where_clause_array"] ?? null));
            foreach ($context['_seq'] as $context["key_id"] => $context["where_clause"]) {
                // line 9
                echo "      <input type=\"hidden\" name=\"where_clause[";
                echo twig_escape_filter($this->env, $context["key_id"], "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, twig_trim_filter($context["where_clause"]), "html", null, true);
                echo "\">
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key_id'], $context['where_clause'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "  ";
        }
        // line 12
        echo "
  <div class=\"col-auto\">
    <label class=\"form-label\" for=\"insert_rows\">";
        // line 14
        echo twig_escape_filter($this->env, _gettext("Amount of rows to insert"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"number\" name=\"insert_rows\" id=\"insert_rows\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["insert_rows_default"] ?? null), "html", null, true);
        echo "\" min=\"1\">
  </div>
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/insert/continue_insertion_form.twig";
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
        return array (  88 => 15,  84 => 14,  80 => 12,  77 => 11,  66 => 9,  61 => 8,  59 => 7,  54 => 5,  50 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/insert/continue_insertion_form.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\table\\insert\\continue_insertion_form.twig");
    }
}
