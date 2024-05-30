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

/* table/insert/actions_panel.twig */
class __TwigTemplate_e7cccc380b66329d9134381b05bc3cb3 extends Template
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
        echo "<div class=\"card\">
<fieldset class=\"card-body\" id=\"actions_panel\">
  <table class=\"table table-borderless w-auto tdblock\">
    <tr>
      <td class=\"text-nowrap align-middle\">
        <select name=\"submit_type\" class=\"control_at_footer\">
          ";
        // line 7
        if ( !twig_test_empty(($context["where_clause"] ?? null))) {
            // line 8
            echo "            <option value=\"save\">";
echo _gettext("Save");
            echo "</option>
          ";
        }
        // line 10
        echo "          <option value=\"insert\">";
echo _gettext("Insert as new row");
        echo "</option>
          <option value=\"insertignore\">";
echo _gettext("Insert as new row and ignore errors");
        // line 11
        echo "</option>
          <option value=\"showinsert\">";
echo _gettext("Show insert query");
        // line 12
        echo "</option>
        </select>
      </td>
      <td class=\"align-middle\">
        <strong>";
echo _gettext("and then");
        // line 16
        echo "</strong>
      </td>
      <td class=\"text-nowrap align-middle\">
        <select name=\"after_insert\" class=\"control_at_footer\">
          <option value=\"back\"";
        // line 20
        echo (((($context["after_insert"] ?? null) == "back")) ? (" selected") : (""));
        echo ">";
echo _gettext("Go back to previous page");
        echo "</option>
          <option value=\"new_insert\"";
        // line 21
        echo (((($context["after_insert"] ?? null) == "new_insert")) ? (" selected") : (""));
        echo ">";
echo _gettext("Insert another new row");
        echo "</option>
          ";
        // line 22
        if ( !twig_test_empty(($context["where_clause"] ?? null))) {
            // line 23
            echo "            <option value=\"same_insert\"";
            echo (((($context["after_insert"] ?? null) == "same_insert")) ? (" selected") : (""));
            echo ">";
echo _gettext("Go back to this page");
            echo "</option>
            ";
            // line 24
            if ((($context["found_unique_key"] ?? null) && ($context["is_numeric"] ?? null))) {
                // line 25
                echo "              <option value=\"edit_next\"";
                echo (((($context["after_insert"] ?? null) == "edit_next")) ? (" selected") : (""));
                echo ">";
echo _gettext("Edit next row");
                echo "</option>
            ";
            }
            // line 27
            echo "          ";
        }
        // line 28
        echo "        </select>
      </td>
    </tr>
    <tr>
      <td>
        ";
        // line 33
        echo $this->env->getFunction('show_hint')->getCallable()(_gettext("Use TAB key to move from value to value, or CTRL+arrows to move anywhere."));
        echo "
      </td>
      <td colspan=\"3\" class=\"text-end align-middle\">
        <input type=\"button\" class=\"btn btn-secondary preview_sql control_at_footer\" value=\"";
echo _gettext("Preview SQL");
        // line 36
        echo "\">
        <input type=\"reset\" class=\"btn btn-secondary control_at_footer\" value=\"";
echo _gettext("Reset");
        // line 37
        echo "\">
        <input type=\"submit\" class=\"btn btn-primary control_at_footer\" value=\"";
echo _gettext("Go");
        // line 38
        echo "\" id=\"buttonYes\">
      </td>
    </tr>
  </table>
</fieldset>
</div>
<div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">";
echo _gettext("Loading");
        // line 48
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
        // line 49
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">";
echo _gettext("Close");
        // line 54
        echo "</button>
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
        return "table/insert/actions_panel.twig";
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
        return array (  157 => 54,  149 => 49,  145 => 48,  132 => 38,  128 => 37,  124 => 36,  117 => 33,  110 => 28,  107 => 27,  99 => 25,  97 => 24,  90 => 23,  88 => 22,  82 => 21,  76 => 20,  70 => 16,  63 => 12,  59 => 11,  53 => 10,  47 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/insert/actions_panel.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\table\\insert\\actions_panel.twig");
    }
}
