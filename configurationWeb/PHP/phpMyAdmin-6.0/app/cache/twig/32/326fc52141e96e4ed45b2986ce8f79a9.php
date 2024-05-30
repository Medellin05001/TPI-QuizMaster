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

/* database/create_table.twig */
class __TwigTemplate_362d2830e935b71616d996b9f255c497 extends Template
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
        echo "<form id=\"createTableMinimalForm\" method=\"post\" action=\"";
        echo $this->env->getFunction('url')->getCallable()("/table/create");
        echo "\" class=\"card d-print-none lock-page\">
  ";
        // line 2
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null));
        echo "
  <div class=\"card-header\">";
        // line 3
        echo $this->env->getFunction('get_icon')->getCallable()("b_table_add", _gettext("Create new table"), true);
        echo "</div>
  <div class=\"card-body row row-cols-lg-auto g-3\">
    <div class=\"col-12\">
      <label for=\"createTableNameInput\" class=\"form-label\">";
echo _gettext("Table name");
        // line 6
        echo "</label>
      <input type=\"text\" class=\"form-control\" name=\"table\" id=\"createTableNameInput\" maxlength=\"64\" required>
    </div>
    <div class=\"col-12\">
      <label for=\"createTableNumFieldsInput\" class=\"form-label\">";
echo _gettext("Number of columns");
        // line 10
        echo "</label>
      <input type=\"number\" class=\"form-control\" name=\"num_fields\" id=\"createTableNumFieldsInput\" min=\"1\" value=\"4\" required>
    </div>
    <div class=\"col-12 align-self-lg-end\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Create");
        // line 14
        echo "\">
    </div>
  </div>
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/create_table.twig";
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
        return array (  67 => 14,  60 => 10,  53 => 6,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/create_table.twig", "C:\\Users\\pz24gvr\\Desktop\\phpMyAdmin-6.0+snapshot-all-languages\\resources\\templates\\database\\create_table.twig");
    }
}
