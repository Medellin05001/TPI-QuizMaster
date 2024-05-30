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

/* recent_favorite_table_recent.twig */
class __TwigTemplate_b9070577b5a4ad70f4fcb7cdf78d63eb extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tables"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 2
            echo "<li class=\"warp_link\">
  <a class=\"disableAjax\" href=\"";
            // line 3
            echo $this->env->getFunction('url')->getCallable()("/table/recent-favorite", $context["table"]);
            echo "\">
    `";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["table"], "db", [], "any", false, false, false, 4), "html", null, true);
            echo "`.`";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["table"], "table", [], "any", false, false, false, 4), "html", null, true);
            echo "`
  </a>
</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "recent_favorite_table_recent.twig";
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
        return array (  48 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "recent_favorite_table_recent.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\recent_favorite_table_recent.twig");
    }
}
