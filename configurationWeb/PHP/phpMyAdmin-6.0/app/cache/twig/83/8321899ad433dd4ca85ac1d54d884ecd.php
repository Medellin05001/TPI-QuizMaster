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

/* database/events/index.twig */
class __TwigTemplate_267d0f7213f65727d74fe330110b41e0 extends Template
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
        echo $this->env->getFunction('get_icon')->getCallable()("b_events", _gettext("Events"));
        echo "
    ";
        // line 4
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("EVENTS");
        echo "
  </h2>

  <div class=\"d-flex flex-wrap my-3\">";
        // line 8
        if ( !twig_test_empty(($context["items"] ?? null))) {
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
    </div>";
        }
        // line 26
        echo "
    <div";
        // line 27
        echo (( !twig_test_empty(($context["items"] ?? null))) ? (" class=\"ms-auto\"") : (""));
        echo ">
      <a class=\"ajax add_anchor btn btn-primary";
        // line 28
        echo (( !($context["has_privilege"] ?? null)) ? (" disabled") : (""));
        echo "\" href=\"";
        echo $this->env->getFunction('url')->getCallable()("/database/events", ["db" => ($context["db"] ?? null), "add_item" => true]);
        echo "\" role=\"button\"";
        echo (( !($context["has_privilege"] ?? null)) ? (" tabindex=\"-1\" aria-disabled=\"true\"") : (""));
        echo ">
        ";
        // line 29
        echo $this->env->getFunction('get_icon')->getCallable()("b_event_add", _gettext("Create new event"));
        echo "
      </a>
    </div>
  </div>

  <form id=\"rteListForm\" class=\"ajax\" action=\"";
        // line 34
        echo $this->env->getFunction('url')->getCallable()("/database/events");
        echo "\">
    ";
        // line 35
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null));
        echo "

    <div id=\"nothing2display\"";
        // line 37
        echo (( !twig_test_empty(($context["items"] ?? null))) ? (" class=\"hide\"") : (""));
        echo ">
      ";
        // line 38
        echo $this->env->getFilter('notice')->getCallable()(_gettext("There are no events to display."));
        echo "
    </div>

    <table id=\"eventsTable\" class=\"table table-striped table-hover";
        // line 41
        echo ((twig_test_empty(($context["items"] ?? null))) ? (" hide") : (""));
        echo " w-auto data\">
      <thead>
      <tr>
        <th></th>
        <th>";
echo _gettext("Name");
        // line 45
        echo "</th>
        <th>";
echo _gettext("Status");
        // line 46
        echo "</th>
        <th>";
echo _gettext("Type");
        // line 47
        echo "</th>
        <th colspan=\"3\"></th>
      </tr>
      </thead>
      <tbody>
      <tr class=\"hide\">";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "<td></td>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</tr>

      ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 55
            echo "        <tr";
            echo ((($context["is_ajax"] ?? null)) ? (" class=\"ajaxInsert hide\"") : (""));
            echo ">
          <td>
            <input type=\"checkbox\" class=\"checkall\" name=\"item_name[]\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 57), "html", null, true);
            echo "\">
          </td>
          <td>
            <span class=\"drop_sql hide\">";
            // line 60
            echo twig_escape_filter($this->env, twig_sprintf("DROP EVENT IF EXISTS %s", $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 60))), "html", null, true);
            echo "</span>
            <strong>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 61), "html", null, true);
            echo "</strong>
          </td>
          <td>
            ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 64), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 67), "html", null, true);
            echo "
          </td>
          <td>
            ";
            // line 70
            if (($context["has_privilege"] ?? null)) {
                // line 71
                echo "              <a class=\"ajax edit_anchor\" href=\"";
                echo $this->env->getFunction('url')->getCallable()("/database/events", ["db" =>                 // line 72
($context["db"] ?? null), "edit_item" => true, "item_name" => twig_get_attribute($this->env, $this->source,                 // line 74
$context["event"], "name", [], "any", false, false, false, 74)]);
                // line 75
                echo "\">
                ";
                // line 76
                echo $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Edit"));
                echo "
              </a>
            ";
            } else {
                // line 79
                echo "              ";
                echo $this->env->getFunction('get_icon')->getCallable()("bd_edit", _gettext("Edit"));
                echo "
            ";
            }
            // line 81
            echo "          </td>
          <td>
            <a class=\"ajax export_anchor\" href=\"";
            // line 83
            echo $this->env->getFunction('url')->getCallable()("/database/events", ["db" =>             // line 84
($context["db"] ?? null), "export_item" => true, "item_name" => twig_get_attribute($this->env, $this->source,             // line 86
$context["event"], "name", [], "any", false, false, false, 86)]);
            // line 87
            echo "\">
              ";
            // line 88
            echo $this->env->getFunction('get_icon')->getCallable()("b_export", _gettext("Export"));
            echo "
            </a>
          </td>
          <td>
            ";
            // line 92
            if (($context["has_privilege"] ?? null)) {
                // line 93
                echo "              ";
                echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/sql"), ["db" =>                 // line 96
($context["db"] ?? null), "sql_query" => twig_sprintf("DROP EVENT IF EXISTS %s", $this->env->getFunction('backquote')->getCallable()(twig_get_attribute($this->env, $this->source,                 // line 97
$context["event"], "name", [], "any", false, false, false, 97))), "goto" => $this->env->getFunction('url')->getCallable()("/database/events", ["db" =>                 // line 98
($context["db"] ?? null)])], $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Drop")), ["class" => "ajax drop_anchor"]);
                // line 102
                echo "
            ";
            } else {
                // line 104
                echo "              ";
                echo $this->env->getFunction('get_icon')->getCallable()("bd_drop", _gettext("Drop"));
                echo "
            ";
            }
            // line 106
            echo "          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "      </tbody>
    </table>
  </form>

  <div class=\"card mt-3\">
    <div class=\"card-header\">";
echo _gettext("Event scheduler status");
        // line 114
        echo "</div>
    <div class=\"card-body\">
      <div class=\"wrap\">
        <div class=\"wrapper toggleAjax hide\">
          <div class=\"toggleButton\">
            <div title=\"";
echo _gettext("Click to toggle");
        // line 119
        echo "\" class=\"toggle-container ";
        echo ((($context["scheduler_state"] ?? null)) ? ("on") : ("off"));
        echo "\">
              <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath((("toggle-" . ($context["text_dir"] ?? null)) . ".png")), "html", null, true);
        echo "\">
              <table>
                <tbody>
                <tr>
                  <td class=\"toggleOn\">
                  <span class=\"hide\">";
        // line 126
        echo $this->env->getFunction('url')->getCallable()("/sql", ["db" =>         // line 127
($context["db"] ?? null), "goto" => $this->env->getFunction('url')->getCallable()("/database/events", ["db" =>         // line 128
($context["db"] ?? null)]), "sql_query" => "SET GLOBAL event_scheduler=\"ON\""]);
        // line 131
        echo "</span>
                    <div>";
echo _gettext("ON");
        // line 132
        echo "</div>
                  </td>
                  <td><div>&nbsp;</div></td>
                  <td class=\"toggleOff\">
                  <span class=\"hide\">";
        // line 137
        echo $this->env->getFunction('url')->getCallable()("/sql", ["db" =>         // line 138
($context["db"] ?? null), "goto" => $this->env->getFunction('url')->getCallable()("/database/events", ["db" =>         // line 139
($context["db"] ?? null)]), "sql_query" => "SET GLOBAL event_scheduler=\"OFF\""]);
        // line 142
        echo "</span>
                    <div>";
echo _gettext("OFF");
        // line 143
        echo "</div>
                  </td>
                </tr>
                </tbody>
              </table>
              <span class=\"hide callback\">Functions.slidingMessage(data.sql_query);</span>
              <span class=\"hide text_direction\">";
        // line 149
        echo twig_escape_filter($this->env, ($context["text_dir"] ?? null), "html", null, true);
        echo "</span>
            </div>
          </div>
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
        return "database/events/index.twig";
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
        return array (  326 => 149,  318 => 143,  314 => 142,  312 => 139,  311 => 138,  310 => 137,  304 => 132,  300 => 131,  298 => 128,  297 => 127,  296 => 126,  288 => 120,  283 => 119,  275 => 114,  267 => 109,  259 => 106,  253 => 104,  249 => 102,  247 => 98,  246 => 97,  245 => 96,  243 => 93,  241 => 92,  234 => 88,  231 => 87,  229 => 86,  228 => 84,  227 => 83,  223 => 81,  217 => 79,  211 => 76,  208 => 75,  206 => 74,  205 => 72,  203 => 71,  201 => 70,  195 => 67,  189 => 64,  183 => 61,  179 => 60,  173 => 57,  167 => 55,  163 => 54,  151 => 52,  144 => 47,  140 => 46,  136 => 45,  128 => 41,  122 => 38,  118 => 37,  113 => 35,  109 => 34,  101 => 29,  93 => 28,  89 => 27,  86 => 26,  79 => 21,  76 => 20,  70 => 18,  67 => 17,  61 => 14,  53 => 9,  51 => 8,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/events/index.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\database\\events\\index.twig");
    }
}
