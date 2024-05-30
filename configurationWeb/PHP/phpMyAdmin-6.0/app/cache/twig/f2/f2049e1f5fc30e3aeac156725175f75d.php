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

/* database/routines/index.twig */
class __TwigTemplate_25c54dd7d9aac9787b5f318b803ed875 extends Template
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
        echo "<div class=\"container-fluid my-3\">
  <h2>
    ";
        // line 3
        echo $this->env->getFunction('get_icon')->getCallable()("b_routines", _gettext("Routines"));
        echo "
    ";
        // line 4
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("STORED_ROUTINES");
        echo "
  </h2>

  <div class=\"d-flex flex-wrap my-3\">";
        // line 8
        if (($context["has_any_routines"] ?? null)) {
            // line 9
            echo "    <div>
      <div class=\"input-group\">
        <div class=\"input-group-text\">
          <div class=\"form-check mb-0\">
            <input class=\"form-check-input checkall_box\" type=\"checkbox\" value=\"\" id=\"checkAllCheckbox\" form=\"rteListForm\">
            <label class=\"form-check-label\" for=\"checkAllCheckbox\">";
echo _gettext("Check all");
            // line 14
            echo "</label>
          </div>
        </div>
        <button class=\"btn btn-outline-secondary\" id=\"bulkActionExportButton\" type=\"submit\" name=\"submit_mult\" value=\"export\" form=\"rteListForm\" title=\"";
echo _gettext("Export");
            // line 17
            echo "\">
          ";
            // line 18
            echo $this->env->getFunction('get_icon')->getCallable()("b_export", _gettext("Export"));
            echo "
        </button>
        <button class=\"btn btn-outline-secondary\" id=\"bulkActionDropButton\" type=\"submit\" name=\"submit_mult\" value=\"drop\" form=\"rteListForm\" title=\"";
echo _gettext("Drop");
            // line 20
            echo "\">
          ";
            // line 21
            echo $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Drop"));
            echo "
        </button>
      </div>
    </div>

    <div class=\"ms-auto\">
      <div class=\"input-group\">
        <span class=\"input-group-text\">";
            // line 28
            echo $this->env->getFunction('get_image')->getCallable()("b_search", _gettext("Search"));
            echo "</span>
        <input class=\"form-control\" name=\"filterText\" type=\"text\" id=\"filterText\" value=\"\" placeholder=\"";
echo _gettext("Search");
            // line 29
            echo "\" aria-label=\"";
echo _gettext("Search");
            echo "\">
      </div>
    </div>";
        }
        // line 33
        echo "
    <div";
        // line 34
        echo ((($context["has_any_routines"] ?? null)) ? (" class=\"ms-2\"") : (""));
        echo ">
      <a class=\"ajax add_anchor btn btn-primary";
        // line 35
        echo (( !($context["has_privilege"] ?? null)) ? (" disabled") : (""));
        echo "\" href=\"";
        echo $this->env->getFunction('url')->getCallable()("/database/routines", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "add_item" => true]);
        echo "\" role=\"button\"";
        echo (( !($context["has_privilege"] ?? null)) ? (" tabindex=\"-1\" aria-disabled=\"true\"") : (""));
        echo ">
        ";
        // line 36
        echo $this->env->getFunction('get_icon')->getCallable()("b_routine_add", _gettext("Create new routine"));
        echo "
      </a>
    </div>
  </div>

  <form id=\"rteListForm\" class=\"ajax\" action=\"";
        // line 41
        echo $this->env->getFunction('url')->getCallable()("/database/routines");
        echo "\">
    ";
        // line 42
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
        echo "

    <div id=\"nothing2display\"";
        // line 44
        echo ((($context["has_any_routines"] ?? null)) ? (" class=\"hide\"") : (""));
        echo ">
      ";
        // line 45
        echo $this->env->getFilter('notice')->getCallable()(_gettext("There are no routines to display."));
        echo "
    </div>

    <table id=\"routinesTable\" class=\"table table-striped table-hover";
        // line 48
        echo (( !($context["has_any_routines"] ?? null)) ? (" hide") : (""));
        echo " data w-auto\">
      <thead>
      <tr>
        <th></th>
        <th>";
echo _gettext("Name");
        // line 52
        echo "</th>
        <th>";
echo _gettext("Type");
        // line 53
        echo "</th>
        <th>";
echo _gettext("Returns");
        // line 54
        echo "</th>
        <th colspan=\"4\"></th>
      </tr>
      </thead>
      <tbody>
      <tr class=\"hide\">";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "<td></td>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</tr>";
        // line 61
        echo ($context["rows"] ?? null);
        echo "
      </tbody>
    </table>
  </form>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/routines/index.twig";
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
        return array (  176 => 61,  166 => 59,  159 => 54,  155 => 53,  151 => 52,  143 => 48,  137 => 45,  133 => 44,  128 => 42,  124 => 41,  116 => 36,  108 => 35,  104 => 34,  101 => 33,  94 => 29,  89 => 28,  79 => 21,  76 => 20,  70 => 18,  67 => 17,  61 => 14,  53 => 9,  51 => 8,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/routines/index.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\database\\routines\\index.twig");
    }
}
