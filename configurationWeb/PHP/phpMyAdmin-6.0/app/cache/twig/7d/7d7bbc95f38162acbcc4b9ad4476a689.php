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

/* home/themes.twig */
class __TwigTemplate_777de2e818e0b7677529cb2fc9c6f853 extends Template
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
        echo $this->env->getFunction('url')->getCallable()("/themes/set");
        echo "\" class=\"disableAjax\">
  ";
        // line 2
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()();
        echo "
  <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 5
            echo "      <div class=\"col\">
        <div class=\"card h-100 mt-0\">
          <div class=\"card-img-container\">
            <img src=\"./themes/";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 8), "html", null, true);
            echo "/screen.png\" class=\"card-img-top h-100\" alt=\"";
            echo twig_escape_filter($this->env, twig_sprintf(_gettext("Screenshot of the %s theme."), twig_get_attribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, false, 8)), "html", null, true);
            echo "\">
          </div>
          <div class=\"card-body\">
            <h5 class=\"card-title\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo " <small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "version", [], "any", false, false, false, 11), "html", null, true);
            echo ")</small></h5>
          </div>
          <div class=\"card-footer\">
            <button type=\"submit\" class=\"btn btn-primary\" name=\"set_theme\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\">";
// l10n: Choose the theme button in the themes list modal
echo _gettext("Take it");
            echo "</button>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  </div>
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/themes.twig";
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
        return array (  86 => 19,  72 => 14,  64 => 11,  56 => 8,  51 => 5,  47 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/themes.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\home\\themes.twig");
    }
}
