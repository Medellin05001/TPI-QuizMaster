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

/* table/delete/confirm.twig */
class __TwigTemplate_8702b829bc1cfe4b41596c7f41176b74 extends Template
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
        echo "<div class=\"container\">
  <form action=\"";
        // line 2
        echo $this->env->getFunction('url')->getCallable()("/table/delete/rows");
        echo "\" method=\"post\" class=\"card\">
    ";
        // line 3
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(["db" =>         // line 4
($context["db"] ?? null), "table" =>         // line 5
($context["table"] ?? null), "selected" =>         // line 6
($context["selected"] ?? null), "original_sql_query" =>         // line 7
($context["sql_query"] ?? null), "fk_checks" => "0"]);
        // line 9
        echo "

    <div class=\"card-header\">
      ";
        // line 12
        echo $this->env->getFunction('get_icon')->getCallable()("s_really");
        echo "
      ";
echo _gettext("Do you really want to execute the following query?");
        // line 14
        echo "    </div>

    <div class=\"card-body\">
      <ul class=\"mb-3\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["selected"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 19
            echo "          <li><code>DELETE FROM ";
            echo twig_escape_filter($this->env, $this->env->getFunction('backquote')->getCallable()(($context["table"] ?? null)), "html", null, true);
            echo " WHERE ";
            echo twig_escape_filter($this->env, $context["row"], "html", null, true);
            echo ";</code></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "      </ul>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"fk_checks\" id=\"checkForeignKeyCheckbox\" value=\"1\"";
        // line 24
        echo ((($context["is_foreign_key_check"] ?? null)) ? (" checked") : (""));
        echo ">
        <label class=\"form-check-label\" for=\"checkForeignKeyCheckbox\">";
echo _gettext("Enable foreign key checks");
        // line 25
        echo "</label>
      </div>
    </div>

    <div class=\"card-footer\">
      <input id=\"buttonYes\" class=\"btn btn-danger\" type=\"submit\" name=\"mult_btn\" value=\"";
echo _gettext("Yes");
        // line 30
        echo "\">
      <input id=\"buttonNo\" class=\"btn btn-secondary\" type=\"submit\" name=\"mult_btn\" value=\"";
echo _gettext("No");
        // line 31
        echo "\">
    </div>
  </form>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/delete/confirm.twig";
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
        return array (  103 => 31,  99 => 30,  91 => 25,  86 => 24,  81 => 21,  70 => 19,  66 => 18,  60 => 14,  55 => 12,  50 => 9,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/delete/confirm.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\table\\delete\\confirm.twig");
    }
}
