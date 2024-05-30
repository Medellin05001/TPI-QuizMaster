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

/* select_all.twig */
class __TwigTemplate_282a8804ceb50327805e063a3e8a7c0c extends Template
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
        echo $this->env->getFunction('get_image')->getCallable()("select_all_arrow", _gettext("With selected:"), ["dir" => ($context["text_dir"] ?? null), "width" => "38", "height" => "22"]);
        echo "
<input type=\"checkbox\" id=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["form_name"] ?? null), "html", null, true);
        echo "_checkall\" class=\"checkall_box\"
    title=\"";
echo _gettext("Check all");
        // line 3
        echo "\">
<label for=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["form_name"] ?? null), "html", null, true);
        echo "_checkall\">";
echo _gettext("Check all");
        echo "</label>
<em class=\"with-selected\">";
echo _gettext("With selected:");
        // line 5
        echo "</em>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "select_all.twig";
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
        return array (  56 => 5,  49 => 4,  46 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "select_all.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\select_all.twig");
    }
}
