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

/* table/normalization/normalization.twig */
class __TwigTemplate_0326fddfd4828fd2a7fc77946c19354b extends Template
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
        echo "<form method=\"post\" action=\"";
        echo $this->env->getFunction('url')->getCallable()("/normalization/1nf/step1");
        echo "\" name=\"normalize\" id=\"normalizeTable\" class=\"card\">
  ";
        // line 2
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
        echo "

  <div class=\"card-header\">";
        // line 4
        echo twig_escape_filter($this->env, _gettext("Improve table structure (Normalization):"), "html", null, true);
        echo "</div>

  <div class=\"card-body\">
    <h3 class=\"card-title\">";
        // line 7
        echo twig_escape_filter($this->env, _gettext("Select up to what step you want to normalize"), "html", null, true);
        echo "</h3>

    ";
        // line 9
        echo $this->env->getFilter('notice')->getCallable()(_gettext("Hint: Please follow the procedure carefully in order to obtain correct normalization"));
        echo "

    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"radio\" name=\"normalizeTo\" id=\"normalizeToRadio1\" value=\"1nf\" checked>
      <label class=\"form-check-label\" for=\"normalizeToRadio1\">";
        // line 13
        echo twig_escape_filter($this->env, _gettext("First step of normalization (1NF)"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"radio\" name=\"normalizeTo\" id=\"normalizeToRadio2\" value=\"2nf\">
      <label class=\"form-check-label\" for=\"normalizeToRadio2\">";
        // line 17
        echo twig_escape_filter($this->env, _gettext("Second step of normalization (1NF+2NF)"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"form-check\">
      <input class=\"form-check-input\" type=\"radio\" name=\"normalizeTo\" id=\"normalizeToRadio3\" value=\"3nf\">
      <label class=\"form-check-label\" for=\"normalizeToRadio3\">";
        // line 21
        echo twig_escape_filter($this->env, _gettext("Third step of normalization (1NF+2NF+3NF)"), "html", null, true);
        echo "</label>
    </div>
  </div>

  <div class=\"card-footer\">
    <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_normalize\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, _gettext("Go"), "html", null, true);
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
        return "table/normalization/normalization.twig";
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
        return array (  87 => 26,  79 => 21,  72 => 17,  65 => 13,  58 => 9,  53 => 7,  47 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/normalization/normalization.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\table\\normalization\\normalization.twig");
    }
}
