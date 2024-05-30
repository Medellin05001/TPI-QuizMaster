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

/* table/find_replace/index.twig */
class __TwigTemplate_0b2b201c859d0de7808ec07bc690c84f extends Template
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
        echo "<ul class=\"nav nav-pills m-2\">
  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"";
        // line 3
        echo $this->env->getFunction('url')->getCallable()("/table/search", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 3, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 3, $this->source); })()), "pos" => 0]);
        echo "\">
      ";
        // line 4
        echo $this->env->getFunction('get_icon')->getCallable()("b_search", _gettext("Table search"), false, false, "TabsMode");
        echo "
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"";
        // line 9
        echo $this->env->getFunction('url')->getCallable()("/table/zoom-search", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 9, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 9, $this->source); })())]);
        echo "\">
      ";
        // line 10
        echo $this->env->getFunction('get_icon')->getCallable()("b_select", _gettext("Zoom search"), false, false, "TabsMode");
        echo "
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link active disableAjax\" href=\"";
        // line 15
        echo $this->env->getFunction('url')->getCallable()("/table/find-replace", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 15, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 15, $this->source); })())]);
        echo "\">
      ";
        // line 16
        echo $this->env->getFunction('get_icon')->getCallable()("b_find_replace", _gettext("Find and replace"), false, false, "TabsMode");
        echo "
    </a>
  </li>
</ul>

<form method=\"post\" action=\"";
        // line 21
        echo $this->env->getFunction('url')->getCallable()("/table/find-replace");
        echo "\" name=\"insertForm\" id=\"find_replace_form\" class=\"ajax lock-page\">
  ";
        // line 22
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 22, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 22, $this->source); })()));
        echo "
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"back\" value=\"";
        // line 24
        echo $this->env->getFunction('url')->getCallable()("/table/find-replace");
        echo "\">

  <div class=\"card\">
    <div class=\"card-header\">";
        // line 27
echo _gettext("Find and replace");
        echo "</div>

    <div class=\"card-body\">
      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"findInput\">";
        // line 31
echo _gettext("Find:");
        echo "</label>
        <input class=\"form-control\" type=\"text\" value=\"\" name=\"find\" id=\"findInput\" required>
      </div>

      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"replaceWithInput\">";
        // line 36
echo _gettext("Replace with:");
        echo "</label>
        <input class=\"form-control\" type=\"text\" value=\"\" name=\"replaceWith\" id=\"replaceWithInput\">
      </div>

      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"columnIndexSelect\">";
        // line 41
echo _gettext("Column:");
        echo "</label>
        <select class=\"form-select\" name=\"columnIndex\" id=\"columnIndexSelect\">
          ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 43, $this->source); })())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 44
            echo "            ";
            $context["type"] = twig_get_attribute($this->env, $this->source, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 44, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 44, $this->source); })()), $context["i"], [], "array", false, false, false, 44), [], "array", false, false, false, 44);
            // line 45
            echo "
            ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, (isset($context["sql_types"]) || array_key_exists("sql_types", $context) ? $context["sql_types"] : (function () { throw new RuntimeError('Variable "sql_types" does not exist.', 46, $this->source); })()), "getTypeClass", [(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 46, $this->source); })())], "method", false, false, false, 46) == "CHAR")) {
                // line 47
                echo "              <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 48, $this->source); })()), $context["i"], [], "array", false, false, false, 48), "html", null, true);
                // line 49
                echo "</option>
            ";
            }
            // line 51
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </select>
      </div>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"useRegex\" id=\"useRegex\">
        <label class=\"form-check-label\" for=\"useRegex\">";
        // line 57
echo _gettext("Use regular expression");
        echo "</label>
      </div>
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"";
        // line 62
echo _gettext("Go");
        echo "\">
    </div>
  </div>
</form>
<div id=\"sqlqueryresultsouter\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/find_replace/index.twig";
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
        return array (  166 => 62,  158 => 57,  151 => 52,  145 => 51,  141 => 49,  139 => 48,  135 => 47,  133 => 46,  130 => 45,  127 => 44,  123 => 43,  118 => 41,  110 => 36,  102 => 31,  95 => 27,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  69 => 16,  65 => 15,  57 => 10,  53 => 9,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"nav nav-pills m-2\">
  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"{{ url('/table/search', {'db': db, 'table': table, 'pos': 0}) }}\">
      {{ get_icon('b_search', 'Table search'|trans, false, false, 'TabsMode') }}
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"{{ url('/table/zoom-search', {'db': db, 'table': table}) }}\">
      {{ get_icon('b_select', 'Zoom search'|trans, false, false, 'TabsMode') }}
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link active disableAjax\" href=\"{{ url('/table/find-replace', {'db': db, 'table': table}) }}\">
      {{ get_icon('b_find_replace', 'Find and replace'|trans, false, false, 'TabsMode') }}
    </a>
  </li>
</ul>

<form method=\"post\" action=\"{{ url('/table/find-replace') }}\" name=\"insertForm\" id=\"find_replace_form\" class=\"ajax lock-page\">
  {{ get_hidden_inputs(db, table) }}
  <input type=\"hidden\" name=\"goto\" value=\"{{ goto }}\">
  <input type=\"hidden\" name=\"back\" value=\"{{ url('/table/find-replace') }}\">

  <div class=\"card\">
    <div class=\"card-header\">{% trans 'Find and replace' %}</div>

    <div class=\"card-body\">
      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"findInput\">{% trans 'Find:' %}</label>
        <input class=\"form-control\" type=\"text\" value=\"\" name=\"find\" id=\"findInput\" required>
      </div>

      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"replaceWithInput\">{% trans 'Replace with:' %}</label>
        <input class=\"form-control\" type=\"text\" value=\"\" name=\"replaceWith\" id=\"replaceWithInput\">
      </div>

      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"columnIndexSelect\">{% trans 'Column:' %}</label>
        <select class=\"form-select\" name=\"columnIndex\" id=\"columnIndexSelect\">
          {% for i in 0..column_names|length - 1 %}
            {% set type = types[column_names[i]] %}

            {% if sql_types.getTypeClass(type) == 'CHAR' %}
              <option value=\"{{ i }}\">
                {{- column_names[i] -}}
              </option>
            {% endif %}
          {% endfor %}
        </select>
      </div>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"useRegex\" id=\"useRegex\">
        <label class=\"form-check-label\" for=\"useRegex\">{% trans 'Use regular expression' %}</label>
      </div>
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"{% trans 'Go' %}\">
    </div>
  </div>
</form>
<div id=\"sqlqueryresultsouter\"></div>
", "table/find_replace/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/find_replace/index.twig");
    }
}
