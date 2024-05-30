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

/* table/relation/common_form.twig */
class __TwigTemplate_fd0447a6421646cfc5d4b9d380e789d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "table/page_with_secondary_tabs.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("table/page_with_secondary_tabs.twig", "table/relation/common_form.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <div class=\"container\">
    <form method=\"post\" action=\"";
        // line 5
        echo $this->env->getFunction('url')->getCallable()("/table/relation");
        echo "\">
      ";
        // line 6
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
      ";
        // line 8
        echo "      ";
        if (($context["is_foreign_key_supported"] ?? null)) {
            // line 9
            echo "        <div class=\"card mb-3\">
          <div class=\"card-header\">";
echo _gettext("Foreign key constraints");
            // line 10
            echo "</div>
          <div class=\"card-body\">
          <div class=\"table-responsive-md jsresponsive\">
            <table class=\"relationalTable table table-striped w-auto\">
              <thead>
                <tr>
                  <th>";
echo _gettext("Actions");
            // line 16
            echo "</th>
                  <th>";
echo _gettext("Constraint properties");
            // line 17
            echo "</th>
                  ";
            // line 18
            if ((twig_upper_filter($this->env, ($context["tbl_storage_engine"] ?? null)) == "INNODB")) {
                // line 19
                echo "                    <th>
                      ";
echo _gettext("Column");
                // line 21
                echo "                      ";
                echo $this->env->getFunction('show_hint')->getCallable()(_gettext("Creating a foreign key over a non-indexed column would automatically create an index on it. Alternatively, you can define an index below, before creating the foreign key."));
                echo "
                    </th>
                  ";
            } else {
                // line 24
                echo "                    <th>
                      ";
echo _gettext("Column");
                // line 26
                echo "                      ";
                echo $this->env->getFunction('show_hint')->getCallable()(_gettext("Only columns with index will be displayed. You can define an index below."));
                echo "
                    </th>
                  ";
            }
            // line 29
            echo "                  <th colspan=\"3\">
                    ";
echo _gettext("Foreign key constraint");
            // line 31
            echo "                    (";
            echo twig_escape_filter($this->env, ($context["tbl_storage_engine"] ?? null), "html", null, true);
            echo ")
                  </th>
                </tr>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>";
echo _gettext("Database");
            // line 38
            echo "</th>
                  <th>";
echo _gettext("Table");
            // line 39
            echo "</th>
                  <th>";
echo _gettext("Column");
            // line 40
            echo "</th>
                </tr>
              </thead>
              ";
            // line 43
            echo ($context["foreign_key_row"] ?? null);
            echo "
              <tr>
                <th colspan=\"6\">
                  <a class=\"clearfloat add_foreign_key\" href=\"\">
                    ";
echo _gettext("+ Add constraint");
            // line 48
            echo "                  </a>
                </th>
              </tr>
            </table>
          </div>
          </div>
        </div>
      ";
        }
        // line 56
        echo "
      ";
        // line 57
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "relationFeature", [], "any", false, false, false, 57))) {
            // line 58
            echo "        ";
            if (((($context["default_sliders_state"] ?? null) != "disabled") && ($context["is_foreign_key_supported"] ?? null))) {
                // line 59
                echo "          <div class=\"mb-3\">
            <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#internalRelationships\" aria-expanded=\"";
                // line 60
                echo (((($context["default_sliders_state"] ?? null) == "open")) ? ("true") : ("false"));
                echo "\" aria-controls=\"internalRelationships\">
              ";
echo _gettext("Internal relationships");
                // line 62
                echo "            </button>
          </div>
          <div class=\"collapse mb-3";
                // line 64
                echo (((($context["default_sliders_state"] ?? null) == "open")) ? (" show") : (""));
                echo "\" id=\"internalRelationships\">
        ";
            }
            // line 66
            echo "
        <div class=\"card\">
          <div class=\"card-header\">
            ";
echo _gettext("Internal relationships");
            // line 70
            echo "            ";
            echo $this->env->getFunction('show_docu')->getCallable()("config", "cfg_Servers_relation");
            echo "
          </div>
          <div class=\"card-body\">
          <table class=\"relationalTable table table-striped table-hover table-sm w-auto\">
            <thead>
              <tr>
                <th>";
echo _gettext("Column");
            // line 76
            echo "</th>
                <th>
                  ";
echo _gettext("Internal relation");
            // line 79
            echo "                  ";
            if (($context["is_foreign_key_supported"] ?? null)) {
                // line 80
                echo "                    ";
                echo $this->env->getFunction('show_hint')->getCallable()(_gettext("An internal relation is not necessary when a corresponding FOREIGN KEY relation exists."));
                echo "
                  ";
            }
            // line 82
            echo "                </th>
              </tr>
            </thead>
            <tbody>
              ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["internal_relation_columns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 87
                echo "                <tr>
                  <td class=\"align-middle\">
                    <strong>";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "field", [], "any", false, false, false, 89), "html", null, true);
                echo "</strong>
                    <input type=\"hidden\" name=\"fields_name[";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "field_hash", [], "any", false, false, false, 90), "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "field", [], "any", false, false, false, 90), "html", null, true);
                echo "\">
                  </td>

                  <td>
                    ";
                // line 94
                $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/common_form.twig", 94)->display(twig_to_array(["name" => (("destination_db[" . twig_get_attribute($this->env, $this->source,                 // line 95
$context["column"], "field_hash", [], "any", false, false, false, 95)) . "]"), "title" => _gettext("Database"), "values" =>                 // line 97
($context["databases"] ?? null), "foreign" => twig_get_attribute($this->env, $this->source,                 // line 98
$context["column"], "foreign_db", [], "any", false, false, false, 98)]));
                // line 100
                echo "
                    ";
                // line 101
                $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/common_form.twig", 101)->display(twig_to_array(["name" => (("destination_table[" . twig_get_attribute($this->env, $this->source,                 // line 102
$context["column"], "field_hash", [], "any", false, false, false, 102)) . "]"), "title" => _gettext("Table"), "values" => twig_get_attribute($this->env, $this->source,                 // line 104
$context["column"], "tables", [], "any", false, false, false, 104), "foreign" => twig_get_attribute($this->env, $this->source,                 // line 105
$context["column"], "foreign_table", [], "any", false, false, false, 105)]));
                // line 107
                echo "
                    ";
                // line 108
                $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/common_form.twig", 108)->display(twig_to_array(["name" => (("destination_column[" . twig_get_attribute($this->env, $this->source,                 // line 109
$context["column"], "field_hash", [], "any", false, false, false, 109)) . "]"), "title" => _gettext("Column"), "values" => twig_get_attribute($this->env, $this->source,                 // line 111
$context["column"], "unique_columns", [], "any", false, false, false, 111), "foreign" => twig_get_attribute($this->env, $this->source,                 // line 112
$context["column"], "foreign_column", [], "any", false, false, false, 112)]));
                // line 114
                echo "                  </td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "            </tbody>
          </table>
          </div>
        </div>
        ";
            // line 121
            if (((($context["default_sliders_state"] ?? null) != "disabled") && ($context["is_foreign_key_supported"] ?? null))) {
                // line 122
                echo "          </div>
        ";
            }
            // line 124
            echo "      ";
        }
        // line 125
        echo "
      ";
        // line 126
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "displayFeature", [], "any", false, false, false, 126))) {
            // line 127
            echo "        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"displayFieldSelect\">";
echo _gettext("Choose column to display:");
            // line 128
            echo "</label>
          <select class=\"form-select\" name=\"display_field\" id=\"displayFieldSelect\">
            <option value=\"\">---</option>
            ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["internal_relation_columns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 132
                echo "              <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "field", [], "any", false, false, false, 132), "html", null, true);
                echo "\"";
                echo (((array_key_exists("display_field", $context) && (twig_get_attribute($this->env, $this->source, $context["column"], "field", [], "any", false, false, false, 132) == ($context["display_field"] ?? null)))) ? (" selected") : (""));
                echo ">
                ";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "field", [], "any", false, false, false, 133), "html", null, true);
                echo "
              </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "          </select>
        </div>
      ";
        }
        // line 139
        echo "
      <div>
        <input class=\"btn btn-secondary preview_sql\" type=\"button\" value=\"";
echo _gettext("Preview SQL");
        // line 141
        echo "\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Save");
        // line 142
        echo "\">
      </div>
    </form>

    <div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">";
echo _gettext("Loading");
        // line 150
        echo "</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
        // line 151
        echo "\"></button>
          </div>
          <div class=\"modal-body\">
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">";
echo _gettext("Close");
        // line 156
        echo "</button>
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
        return "table/relation/common_form.twig";
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
        return array (  353 => 156,  345 => 151,  341 => 150,  330 => 142,  326 => 141,  321 => 139,  316 => 136,  307 => 133,  300 => 132,  296 => 131,  291 => 128,  287 => 127,  285 => 126,  282 => 125,  279 => 124,  275 => 122,  273 => 121,  267 => 117,  259 => 114,  257 => 112,  256 => 111,  255 => 109,  254 => 108,  251 => 107,  249 => 105,  248 => 104,  247 => 102,  246 => 101,  243 => 100,  241 => 98,  240 => 97,  239 => 95,  238 => 94,  229 => 90,  225 => 89,  221 => 87,  217 => 86,  211 => 82,  205 => 80,  202 => 79,  197 => 76,  186 => 70,  180 => 66,  175 => 64,  171 => 62,  166 => 60,  163 => 59,  160 => 58,  158 => 57,  155 => 56,  145 => 48,  137 => 43,  132 => 40,  128 => 39,  124 => 38,  112 => 31,  108 => 29,  101 => 26,  97 => 24,  90 => 21,  86 => 19,  84 => 18,  81 => 17,  77 => 16,  68 => 10,  64 => 9,  61 => 8,  57 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/relation/common_form.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\table\\relation\\common_form.twig");
    }
}
