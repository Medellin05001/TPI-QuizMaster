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

/* sql/profiling_chart.twig */
class __TwigTemplate_a84f48a07119b91c1a02798e3db33c0a extends Template
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
  <div class=\"card mb-3\">
    <div class=\"card-header\">";
echo _gettext("Profiling");
        // line 3
        echo "</div>
    <div class=\"card-body\">
      <div class=\"row\">
        <div class=\"col\">
          <h3>";
echo _gettext("Detailed profile");
        // line 7
        echo "</h3>
          <table class=\"table table-sm table-striped\" id=\"profiletable\">
            <thead>
              <tr>
                <th>";
echo _gettext("Order");
        // line 11
        echo " <div class=\"sorticon\"></div></th>
                <th>";
echo _gettext("State");
        // line 12
        echo " <div class=\"sorticon\"></div></th>
                <th>";
echo _gettext("Time");
        // line 13
        echo " <div class=\"sorticon\"></div></th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profiling"] ?? null), "profile", [], "any", false, false, false, 17));
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
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 18
            echo "                <tr>
                  <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                  <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "status", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                  <td class=\"text-end\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "duration", [], "any", false, false, false, 22), "html", null, true);
            echo "s
                    <span class=\"rawvalue hide\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "duration_raw", [], "any", false, false, false, 23), "html", null, true);
            echo "</span>
                  </td>
                </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </tbody>
          </table>
        </div>

        <div class=\"col\">
          <h3>";
echo _gettext("Summary by state");
        // line 32
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("general-thread-states");
        echo "</h3>
          <table class=\"table table-sm table-striped\" id=\"profilesummarytable\">
            <thead>
              <tr>
                <th>";
echo _gettext("State");
        // line 36
        echo " <div class=\"sorticon\"></div></th>
                <th>";
echo _gettext("Total Time");
        // line 37
        echo " <div class=\"sorticon\"></div></th>
                <th>";
echo _gettext("% Time");
        // line 38
        echo " <div class=\"sorticon\"></div></th>
                <th>";
echo _gettext("Calls");
        // line 39
        echo " <div class=\"sorticon\"></div></th>
                <th>";
echo _gettext("ø Time");
        // line 40
        echo " <div class=\"sorticon\"></div></th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profiling"] ?? null), "states", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["name"] => $context["stats"]) {
            // line 45
            echo "                <tr>
                  <td>";
            // line 46
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</td>
                  <td class=\"text-end\">
                    ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getFunction('format_number')->getCallable()(twig_get_attribute($this->env, $this->source, $context["stats"], "total_time", [], "any", false, false, false, 48), 3, 1), "html", null, true);
            echo "s
                    <span class=\"rawvalue hide\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stats"], "total_time", [], "any", false, false, false, 49), "html", null, true);
            echo "</span>
                  </td>
                  <td class=\"text-end\">
                    ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getFunction('format_number')->getCallable()((100 * (twig_get_attribute($this->env, $this->source, $context["stats"], "total_time", [], "any", false, false, false, 52) / twig_get_attribute($this->env, $this->source, ($context["profiling"] ?? null), "total_time", [], "any", false, false, false, 52))), 0, 2), "html", null, true);
            echo "%
                  </td>
                  <td class=\"text-end\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stats"], "calls", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                  <td class=\"text-end\">
                    ";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getFunction('format_number')->getCallable()((twig_get_attribute($this->env, $this->source, $context["stats"], "total_time", [], "any", false, false, false, 56) / twig_get_attribute($this->env, $this->source, $context["stats"], "calls", [], "any", false, false, false, 56)), 3, 1), "html", null, true);
            echo "s
                    <span class=\"rawvalue hide\">";
            // line 57
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["stats"], "total_time", [], "any", false, false, false, 57) / twig_get_attribute($this->env, $this->source, $context["stats"], "calls", [], "any", false, false, false, 57)), 8, ".", ""), "html", null, true);
            echo "</span>
                  </td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['stats'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </tbody>
          </table>
        </div>

        <div class=\"col\">
          <canvas id=\"profilingChartCanvas\" data-chart-data=\"";
        // line 66
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["profiling"] ?? null), "chart", [], "any", false, false, false, 66)), "html_attr");
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, _gettext("Pie chart with profiling results."), "html", null, true);
        echo "\" role=\"img\"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sql/profiling_chart.twig";
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
        return array (  212 => 66,  205 => 61,  195 => 57,  191 => 56,  186 => 54,  181 => 52,  175 => 49,  171 => 48,  166 => 46,  163 => 45,  159 => 44,  153 => 40,  149 => 39,  145 => 38,  141 => 37,  137 => 36,  129 => 32,  121 => 27,  103 => 23,  99 => 22,  94 => 20,  90 => 19,  87 => 18,  70 => 17,  64 => 13,  60 => 12,  56 => 11,  49 => 7,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sql/profiling_chart.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\sql\\profiling_chart.twig");
    }
}
