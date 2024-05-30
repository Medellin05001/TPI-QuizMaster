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

/* display/results/table.twig */
class __TwigTemplate_03de402cf5c1fbfb47605888decd420f extends Template
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
        ob_start(function () { return ''; });
        // line 2
        echo "  ";
        if ( !twig_test_empty(($context["navigation"] ?? null))) {
            // line 3
            echo "    <table class=\"navigation d-print-none\">
      <tr>
        <td class=\"navigation_separator\"></td>

        ";
            // line 7
            if ((twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "pos", [], "any", false, false, false, 7) &&  !twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "is_showing_all", [], "any", false, false, false, 7))) {
                // line 8
                echo "          <td>
            <form action=\"";
                // line 9
                echo $this->env->getFunction('url')->getCallable()("/sql");
                echo "\" method=\"post\">
              ";
                // line 10
                echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
                echo "
              <input type=\"hidden\" name=\"sql_query\" value=\"";
                // line 11
                echo twig_escape_filter($this->env, ($context["sql_query"] ?? null), "html", null, true);
                echo "\">
              <input type=\"hidden\" name=\"pos\" value=\"0\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"";
                // line 13
                echo twig_escape_filter($this->env, ($context["is_browse_distinct"] ?? null), "html", null, true);
                echo "\">
              <input type=\"hidden\" name=\"goto\" value=\"";
                // line 14
                echo twig_escape_filter($this->env, ($context["goto"] ?? null), "html", null, true);
                echo "\">
              ";
                // line 15
                ob_start(function () { return ''; });
                // line 16
                echo (($this->env->getFunction('show_icons')->getCallable()("TableNavigationLinksMode")) ? ("<<") : (""));
                // line 17
                if ($this->env->getFunction('show_text')->getCallable()("TableNavigationLinksMode")) {
                    // line 18
                    echo "&nbsp;";
echo _pgettext("First page", "Begin");
                }
                $context["begin_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 21
                echo "              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"";
                echo twig_escape_filter($this->env, ($context["begin_text"] ?? null), "html", null, true);
                echo "\" title=\"";
echo _pgettext("First page", "Begin");
                echo "\">
            </form>
          </td>

          <td>
            <form action=\"";
                // line 26
                echo $this->env->getFunction('url')->getCallable()("/sql");
                echo "\" method=\"post\">
              ";
                // line 27
                echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
                echo "
              <input type=\"hidden\" name=\"sql_query\" value=\"";
                // line 28
                echo twig_escape_filter($this->env, ($context["sql_query"] ?? null), "html", null, true);
                echo "\">
              <input type=\"hidden\" name=\"pos\" value=\"";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "pos_previous", [], "any", false, false, false, 29), "html", null, true);
                echo "\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"";
                // line 30
                echo twig_escape_filter($this->env, ($context["is_browse_distinct"] ?? null), "html", null, true);
                echo "\">
              <input type=\"hidden\" name=\"goto\" value=\"";
                // line 31
                echo twig_escape_filter($this->env, ($context["goto"] ?? null), "html", null, true);
                echo "\">
              ";
                // line 32
                ob_start(function () { return ''; });
                // line 33
                echo (($this->env->getFunction('show_icons')->getCallable()("TableNavigationLinksMode")) ? ("<") : (""));
                // line 34
                if ($this->env->getFunction('show_text')->getCallable()("TableNavigationLinksMode")) {
                    // line 35
                    echo "&nbsp;";
echo _pgettext("Previous page", "Previous");
                }
                $context["previous_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 38
                echo "              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"";
                echo twig_escape_filter($this->env, ($context["previous_text"] ?? null), "html", null, true);
                echo "\" title=\"";
echo _pgettext("Previous page", "Previous");
                echo "\">
            </form>
          </td>
        ";
            }
            // line 42
            echo "
        ";
            // line 43
            echo twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "page_selector", [], "any", false, false, false, 43);
            echo "

        ";
            // line 45
            if ( !twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "is_last_page", [], "any", false, false, false, 45)) {
                // line 46
                echo "          <td>
            <form action=\"";
                // line 47
                echo $this->env->getFunction('url')->getCallable()("/sql");
                echo "\" method=\"post\">
              ";
                // line 48
                echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
                echo "
              <input type=\"hidden\" name=\"sql_query\" value=\"";
                // line 49
                echo twig_escape_filter($this->env, ($context["sql_query"] ?? null), "html", null, true);
                echo "\">
              <input type=\"hidden\" name=\"pos\" value=\"";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "pos_next", [], "any", false, false, false, 50), "html", null, true);
                echo "\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"";
                // line 51
                echo twig_escape_filter($this->env, ($context["is_browse_distinct"] ?? null), "html", null, true);
                echo "\">
              <input type=\"hidden\" name=\"goto\" value=\"";
                // line 52
                echo twig_escape_filter($this->env, ($context["goto"] ?? null), "html", null, true);
                echo "\">
              ";
                // line 53
                ob_start(function () { return ''; });
                // line 54
                if ($this->env->getFunction('show_text')->getCallable()("TableNavigationLinksMode")) {
echo _pgettext("Next page", "Next");
                    // line 55
                    echo "&nbsp;";
                }
                // line 57
                echo (($this->env->getFunction('show_icons')->getCallable()("TableNavigationLinksMode")) ? (">") : (""));
                $context["next_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 59
                echo "              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"";
                echo twig_escape_filter($this->env, ($context["next_text"] ?? null), "html", null, true);
                echo "\" title=\"";
echo _pgettext("Next page", "Next");
                echo "\">
            </form>
          </td>

          ";
                // line 63
                if (twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "is_last_page_known", [], "any", false, false, false, 63)) {
                    // line 64
                    echo "          <td>
            <form action=\"";
                    // line 65
                    echo $this->env->getFunction('url')->getCallable()("/sql");
                    echo "\" method=\"post\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "onsubmit", [], "any", false, false, false, 65);
                    echo ">
              ";
                    // line 66
                    echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
                    echo "
              <input type=\"hidden\" name=\"sql_query\" value=\"";
                    // line 67
                    echo twig_escape_filter($this->env, ($context["sql_query"] ?? null), "html", null, true);
                    echo "\">
              <input type=\"hidden\" name=\"pos\" value=\"";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "pos_last", [], "any", false, false, false, 68), "html", null, true);
                    echo "\">
              <input type=\"hidden\" name=\"is_browse_distinct\" value=\"";
                    // line 69
                    echo twig_escape_filter($this->env, ($context["is_browse_distinct"] ?? null), "html", null, true);
                    echo "\">
              <input type=\"hidden\" name=\"goto\" value=\"";
                    // line 70
                    echo twig_escape_filter($this->env, ($context["goto"] ?? null), "html", null, true);
                    echo "\">
              ";
                    // line 71
                    ob_start(function () { return ''; });
                    // line 72
                    if ($this->env->getFunction('show_text')->getCallable()("TableNavigationLinksMode")) {
echo _pgettext("Last page", "End");
                        // line 73
                        echo "&nbsp;";
                    }
                    // line 75
                    echo (($this->env->getFunction('show_icons')->getCallable()("TableNavigationLinksMode")) ? (">>") : (""));
                    $context["end_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 77
                    echo "              <input type=\"submit\" name=\"navig\" class=\"btn btn-secondary ajax\" value=\"";
                    echo twig_escape_filter($this->env, ($context["end_text"] ?? null), "html", null, true);
                    echo "\" title=\"";
echo _pgettext("Last page", "End");
                    echo "\">
            </form>
          </td>
          ";
                }
                // line 81
                echo "        ";
            }
            // line 82
            echo "
        ";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "number_total_page", [], "any", false, false, false, 83) != 1)) {
                // line 84
                echo "          <td><div class=\"navigation_separator\">|</div></td>
        ";
            }
            // line 86
            echo "
        ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "has_show_all", [], "any", false, false, false, 87)) {
                // line 88
                echo "          <td>
            <form action=\"";
                // line 89
                echo $this->env->getFunction('url')->getCallable()("/sql");
                echo "\" method=\"post\">
              ";
                // line 90
                echo $this->env->getFunction('get_hidden_fields')->getCallable()(twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "hidden_fields", [], "any", false, false, false, 90), ["session_max_rows" => twig_get_attribute($this->env, $this->source,                 // line 91
($context["navigation"] ?? null), "session_max_rows", [], "any", false, false, false, 91), "pos" => "0"]));
                // line 93
                echo "
              <input type=\"checkbox\" name=\"navig\" id=\"showAll_";
                // line 94
                echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                echo "\" class=\"showAllRows\" value=\"all\"";
                // line 95
                echo ((twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "is_showing_all", [], "any", false, false, false, 95)) ? (" checked") : (""));
                echo ">
              <label for=\"showAll_";
                // line 96
                echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                echo "\">";
echo _gettext("Show all");
                echo "</label>
            </form>
          </td>
          <td><div class=\"navigation_separator\">|</div></td>
        ";
            }
            // line 101
            echo "
        <td>
          <div class=\"save_edited hide\">
            <input class=\"btn btn-link\" type=\"submit\" value=\"";
echo _gettext("Save edited data");
            // line 104
            echo "\">
            <div class=\"navigation_separator\">|</div>
          </div>
        </td>
        <td>
          <div class=\"restore_column hide\">
            <input class=\"btn btn-link\" type=\"submit\" value=\"";
echo _gettext("Restore column order");
            // line 110
            echo "\">
            <div class=\"navigation_separator\">|</div>
          </div>
        </td>
        <td class=\"navigation_goto\">
          <form action=\"";
            // line 115
            echo $this->env->getFunction('url')->getCallable()("/sql");
            echo "\" method=\"post\" class=\"maxRowsForm\">
            ";
            // line 116
            echo $this->env->getFunction('get_hidden_fields')->getCallable()(twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "hidden_fields", [], "any", false, false, false, 116), ["pos" => twig_get_attribute($this->env, $this->source,             // line 117
($context["navigation"] ?? null), "pos", [], "any", false, false, false, 117), "unlim_num_rows" =>             // line 118
($context["unlim_num_rows"] ?? null)]));
            // line 119
            echo "

            <label for=\"sessionMaxRowsSelect\">";
echo _gettext("Number of rows:");
            // line 121
            echo "</label>
            <select class=\"autosubmit\" name=\"session_max_rows\" id=\"sessionMaxRowsSelect\">
              ";
            // line 123
            if (twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "is_showing_all", [], "any", false, false, false, 123)) {
                // line 124
                echo "                <option value=\"\" disabled selected>";
echo _gettext("All");
                echo "</option>
              ";
            }
            // line 126
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(["25", "50", "100", "250", "500"]);
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 127
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "max_rows", [], "any", false, false, false, 127) == $context["option"])) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "            </select>
          </form>
        </td>
        <td class=\"navigation_separator\"></td>
        <td class=\"largescreenonly\">
          <div class=\"row g-1 p-1 align-items-center\">
            <div class=\"col-auto\">
              <label for=\"filterRows\" class=\"col-form-label\">";
echo _gettext("Filter rows:");
            // line 136
            echo "</label>
            </div>
            <div class=\"col-auto\">
              <input type=\"text\" id=\"filterRows\" class=\"filter_rows form-control\"
                    placeholder=\"";
echo _gettext("Search this table");
            // line 140
            echo "\" data-for=\"";
            echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
            echo "\">
            </div>
          </div>
        </td>
        <td class=\"largescreenonly\">
          ";
            // line 145
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "sort_by_key", [], "any", false, false, false, 145))) {
                // line 146
                echo "            <form action=\"";
                echo $this->env->getFunction('url')->getCallable()("/sql");
                echo "\" method=\"post\" class=\"d-print-none\">
              ";
                // line 147
                echo $this->env->getFunction('get_hidden_fields')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "sort_by_key", [], "any", false, false, false, 147), "hidden_fields", [], "any", false, false, false, 147));
                echo "
              ";
echo _gettext("Sort by key:");
                // line 149
                echo "              <select name=\"sql_query\" class=\"autosubmit\">
                ";
                // line 150
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "sort_by_key", [], "any", false, false, false, 150), "options", [], "any", false, false, false, 150));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 151
                    echo "                  <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 151), "html", null, true);
                    echo "\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["option"], "is_selected", [], "any", false, false, false, 151)) ? (" selected") : (""));
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "content", [], "any", false, false, false, 151), "html", null, true);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "              </select>
            </form>
          ";
            }
            // line 156
            echo "        </td>
        <td class=\"navigation_separator\"></td>
      </tr>
    </table>
  ";
        }
        $context["navigation_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 162
        echo "
";
        // line 163
        echo ($context["sql_query_message"] ?? null);
        echo "

";
        // line 165
        echo twig_escape_filter($this->env, ($context["navigation_html"] ?? null), "html", null, true);
        echo "

<input class=\"save_cells_at_once\" type=\"hidden\" value=\"";
        // line 167
        echo twig_escape_filter($this->env, ($context["save_cells_at_once"] ?? null), "html", null, true);
        echo "\">
<div class=\"common_hidden_inputs\">
  ";
        // line 169
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
</div>

";
        // line 172
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "column_order", [], "any", false, false, false, 172))) {
            // line 173
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "column_order", [], "any", false, false, false, 173), "order", [], "any", false, false, false, 173)) {
                // line 174
                echo "    <input class=\"col_order\" type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "column_order", [], "any", false, false, false, 174), "order", [], "any", false, false, false, 174), ","), "html", null, true);
                echo "\">
  ";
            }
            // line 176
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "column_order", [], "any", false, false, false, 176), "visibility", [], "any", false, false, false, 176)) {
                // line 177
                echo "    <input class=\"col_visib\" type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "column_order", [], "any", false, false, false, 177), "visibility", [], "any", false, false, false, 177), ","), "html", null, true);
                echo "\">
  ";
            }
            // line 179
            echo "  ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "column_order", [], "any", false, false, false, 179), "is_view", [], "any", false, false, false, 179)) {
                // line 180
                echo "    <input class=\"table_create_time\" type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "column_order", [], "any", false, false, false, 180), "table_create_time", [], "any", false, false, false, 180), "html", null, true);
                echo "\">
  ";
            }
        }
        // line 183
        echo "
";
        // line 184
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 184))) {
            // line 185
            echo "  <form method=\"post\" action=\"";
            echo $this->env->getFunction('url')->getCallable()("/sql");
            echo "\" name=\"displayOptionsForm\" class=\"ajax d-print-none\">
    ";
            // line 186
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()(["db" =>             // line 187
($context["db"] ?? null), "table" =>             // line 188
($context["table"] ?? null), "sql_query" =>             // line 189
($context["sql_query"] ?? null), "goto" =>             // line 190
($context["goto"] ?? null), "display_options_form" => 1]);
            // line 192
            echo "

    ";
            // line 194
            if ((($context["default_sliders_state"] ?? null) != "disabled")) {
                // line 195
                echo "    <div class=\"mb-3\">
      <button class=\"btn btn-sm btn-secondary\" type=\"button\" id=\"extraOptionsButton\" data-bs-toggle=\"collapse\" data-bs-target=\"#extraOptions\" aria-expanded=\"";
                // line 196
                echo (((($context["default_sliders_state"] ?? null) == "open")) ? ("true") : ("false"));
                echo "\" aria-controls=\"extraOptions\">
        ";
echo _gettext("Extra options");
                // line 198
                echo "      </button>
    </div>
    <div class=\"collapse mb-3";
                // line 200
                echo (((($context["default_sliders_state"] ?? null) == "open")) ? (" show") : (""));
                echo "\" id=\"extraOptions\">
    ";
            }
            // line 202
            echo "
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            <fieldset class=\"col-auto\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"pftext\" id=\"partialFulltextRadioP";
            // line 208
            echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
            echo "\" value=\"P\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 208), "pftext", [], "any", false, false, false, 208) == "P")) ? (" checked") : (""));
            echo ">
                <label class=\"form-check-label\" for=\"partialFulltextRadioP";
            // line 209
            echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
            echo "\">";
echo _gettext("Partial texts");
            echo "</label>
              </div>
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"pftext\" id=\"partialFulltextRadioF";
            // line 212
            echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
            echo "\" value=\"F\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 212), "pftext", [], "any", false, false, false, 212) == "F")) ? (" checked") : (""));
            echo ">
                <label class=\"form-check-label\" for=\"partialFulltextRadioF";
            // line 213
            echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
            echo "\">";
echo _gettext("Full texts");
            echo "</label>
              </div>
            </fieldset>

            ";
            // line 217
            if ((($context["relwork"] ?? null) && ($context["displaywork"] ?? null))) {
                // line 218
                echo "              <fieldset class=\"col-auto\">
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"radio\" name=\"relational_display\" id=\"relationalDisplayRadioK";
                // line 220
                echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                echo "\" value=\"K\"";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 220), "relational_display", [], "any", false, false, false, 220) == "K")) ? (" checked") : (""));
                echo ">
                  <label class=\"form-check-label\" for=\"relationalDisplayRadioK";
                // line 221
                echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                echo "\">";
echo _gettext("Relational key");
                echo "</label>
                </div>
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"radio\" name=\"relational_display\" id=\"relationalDisplayRadioD";
                // line 224
                echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                echo "\" value=\"D\"";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 224), "relational_display", [], "any", false, false, false, 224) == "D")) ? (" checked") : (""));
                echo ">
                  <label class=\"form-check-label\" for=\"relationalDisplayRadioD";
                // line 225
                echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                echo "\">";
echo _gettext("Display column for relationships");
                echo "</label>
                </div>
              </fieldset>
            ";
            }
            // line 229
            echo "
            <fieldset class=\"col-auto\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"display_binary\" id=\"display_binary_";
            // line 232
            echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
            echo "\"";
            // line 233
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 233), "display_binary", [], "any", false, false, false, 233))) ? (" checked") : (""));
            echo ">
                <label class=\"form-check-label\" for=\"display_binary_";
            // line 234
            echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
            echo "\">";
echo _gettext("Show binary contents");
            echo "</label>
              </div>

              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"display_blob\" id=\"display_blob_";
            // line 238
            echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
            echo "\"";
            // line 239
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 239), "display_blob", [], "any", false, false, false, 239))) ? (" checked") : (""));
            echo ">
                <label class=\"form-check-label\" for=\"display_blob_";
            // line 240
            echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
            echo "\">";
echo _gettext("Show BLOB contents");
            echo "</label>
              </div>
            </fieldset>

            ";
            // line 248
            echo "            <div class=\"col-auto\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"hide_transformation\" id=\"hide_transformation_";
            // line 250
            echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
            echo "\"";
            // line 251
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 251), "hide_transformation", [], "any", false, false, false, 251))) ? (" checked") : (""));
            echo ">
                <label class=\"form-check-label\" for=\"hide_transformation_";
            // line 252
            echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
            echo "\">";
echo _gettext("Hide browser transformation");
            echo "</label>
              </div>
            </div>

            <fieldset class=\"col-auto\">
              ";
            // line 257
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 257), "possible_as_geometry", [], "any", false, false, false, 257)) {
                // line 258
                echo "                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"radio\" name=\"geoOption\" id=\"geoOptionRadioGeom";
                // line 259
                echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                echo "\" value=\"GEOM\"";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 259), "geo_option", [], "any", false, false, false, 259) == "GEOM")) ? (" checked") : (""));
                echo ">
                  <label class=\"form-check-label\" for=\"geoOptionRadioGeom";
                // line 260
                echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                echo "\">";
echo _gettext("Geometry");
                echo "</label>
                </div>
              ";
            }
            // line 263
            echo "              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"geoOption\" id=\"geoOptionRadioWkt";
            // line 264
            echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
            echo "\" value=\"WKT\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 264), "geo_option", [], "any", false, false, false, 264) == "WKT")) ? (" checked") : (""));
            echo ">
                <label class=\"form-check-label\" for=\"geoOptionRadioWkt";
            // line 265
            echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
            echo "\">";
echo _gettext("Well Known Text");
            echo "</label>
              </div>
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"geoOption\" id=\"geoOptionRadioWkb";
            // line 268
            echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
            echo "\" value=\"WKB\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 268), "geo_option", [], "any", false, false, false, 268) == "WKB")) ? (" checked") : (""));
            echo ">
                <label class=\"form-check-label\" for=\"geoOptionRadioWkb";
            // line 269
            echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
            echo "\">";
echo _gettext("Well Known Binary");
            echo "</label>
              </div>
            </fieldset>
          </div>
        </div>

        <div class=\"card-footer\">
          <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Go");
            // line 276
            echo "\">
        </div>
      </div>
    ";
            // line 279
            if ((($context["default_sliders_state"] ?? null) != "disabled")) {
                // line 280
                echo "    </div>
    ";
            }
            // line 282
            echo "  </form>
";
        }
        // line 284
        echo "
";
        // line 285
        if (twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "has_bulk_actions_form", [], "any", false, false, false, 285)) {
            // line 286
            echo "  <form method=\"post\" name=\"resultsForm\" id=\"resultsForm_";
            echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
            echo "\" class=\"ajax\">
    ";
            // line 287
            echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
            echo "
    <input type=\"hidden\" name=\"goto\" value=\"";
            // line 288
            echo $this->env->getFunction('url')->getCallable()("/sql");
            echo "\">
";
        }
        // line 290
        echo "
  <div class=\"table-responsive-md\">
    <table class=\"table table-striped table-hover table-sm table_results data ajax w-auto\" data-uniqueId=\"";
        // line 292
        echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
        echo "\">
      <thead>
        <tr>

          ";
        // line 296
        echo twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "button", [], "any", false, false, false, 296);
        echo "
          ";
        // line 297
        echo twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "table_headers_for_columns", [], "any", false, false, false, 297);
        echo "
          ";
        // line 298
        echo twig_get_attribute($this->env, $this->source, ($context["headers"] ?? null), "column_at_right_side", [], "any", false, false, false, 298);
        echo "

        </tr>
      </thead>

      <tbody>
        ";
        // line 304
        echo ($context["body"] ?? null);
        echo "
      </tbody>
    </table>
  </div>

";
        // line 309
        if ((array_key_exists("has_bulk_links", $context) && ($context["has_bulk_links"] ?? null))) {
            // line 310
            echo "    <div class=\"d-print-none\">
      ";
            // line 311
            echo $this->env->getFunction('get_image')->getCallable()("select_all_arrow", _gettext("With selected:"), ["dir" => ($context["text_dir"] ?? null), "width" => "38", "height" => "22"]);
            echo "
      <input type=\"checkbox\" id=\"resultsForm_";
            // line 312
            echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
            echo "_checkall\" class=\"checkall_box\" title=\"";
echo _gettext("Check all");
            echo "\">
      <label for=\"resultsForm_";
            // line 313
            echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
            echo "_checkall\">";
echo _gettext("Check all");
            echo "</label>
      <em class=\"with-selected\">";
echo _gettext("With selected:");
            // line 314
            echo "</em>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"edit\" title=\"";
echo _gettext("Edit");
            // line 316
            echo "\">
        ";
            // line 317
            echo $this->env->getFunction('get_icon')->getCallable()("b_edit", _gettext("Edit"));
            echo "
      </button>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"copy\" title=\"";
echo _gettext("Copy");
            // line 320
            echo "\">
        ";
            // line 321
            echo $this->env->getFunction('get_icon')->getCallable()("b_insrow", _gettext("Copy"));
            echo "
      </button>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"delete\" title=\"";
echo _gettext("Delete");
            // line 324
            echo "\">
        ";
            // line 325
            echo $this->env->getFunction('get_icon')->getCallable()("b_drop", _gettext("Delete"));
            echo "
      </button>

      ";
            // line 328
            if (($context["has_export_button"] ?? null)) {
                // line 329
                echo "        <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"";
echo _gettext("Export");
                echo "\">
          ";
                // line 330
                echo $this->env->getFunction('get_icon')->getCallable()("b_tblexport", _gettext("Export"));
                echo "
        </button>
      ";
            }
            // line 333
            echo "    </div>

    <input type=\"hidden\" name=\"clause_is_unique\" value=\"";
            // line 335
            echo twig_escape_filter($this->env, ($context["clause_is_unique"] ?? null), "html", null, true);
            echo "\">
    <input type=\"hidden\" name=\"sql_query\" value=\"";
            // line 336
            echo twig_escape_filter($this->env, ($context["sql_query"] ?? null), "html", null, true);
            echo "\">
  </form>
";
        }
        // line 339
        echo "
";
        // line 340
        echo twig_escape_filter($this->env, ($context["navigation_html"] ?? null), "html", null, true);
        echo "

";
        // line 342
        if ( !twig_test_empty(($context["operations"] ?? null))) {
            // line 343
            echo "  <div class=\"card mb-3 d-print-none\">
    <div class=\"card-header\">";
echo _gettext("Query results operations");
            // line 344
            echo "</div>

    <div class=\"card-body\">
      ";
            // line 347
            if (twig_get_attribute($this->env, $this->source, ($context["operations"] ?? null), "has_print_link", [], "any", false, false, false, 347)) {
                // line 348
                echo "        <button type=\"button\" class=\"btn btn-link jsPrintButton\">";
                echo $this->env->getFunction('get_icon')->getCallable()("b_print", _gettext("Print"), true);
                echo "</button>

        ";
                // line 350
                echo $this->env->getFunction('link_or_button')->getCallable()("#", null, $this->env->getFunction('get_icon')->getCallable()("b_insrow", _gettext("Copy to clipboard"), true), ["id" => "copyToClipBoard", "class" => "btn"]);
                // line 355
                echo "
      ";
            }
            // line 357
            echo "
      ";
            // line 358
            if ( !twig_get_attribute($this->env, $this->source, ($context["operations"] ?? null), "has_procedure", [], "any", false, false, false, 358)) {
                // line 359
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["operations"] ?? null), "has_export_link", [], "any", false, false, false, 359)) {
                    // line 360
                    echo "          ";
                    echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/table/export"), twig_get_attribute($this->env, $this->source,                     // line 362
($context["operations"] ?? null), "url_params", [], "any", false, false, false, 362), $this->env->getFunction('get_icon')->getCallable()("b_tblexport", _gettext("Export"), true), ["class" => "btn"]);
                    // line 365
                    echo "

          ";
                    // line 367
                    echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/table/chart"), twig_get_attribute($this->env, $this->source,                     // line 369
($context["operations"] ?? null), "url_params", [], "any", false, false, false, 369), $this->env->getFunction('get_icon')->getCallable()("b_chart", _gettext("Display chart"), true), ["class" => "btn"]);
                    // line 372
                    echo "

          ";
                    // line 374
                    if (twig_get_attribute($this->env, $this->source, ($context["operations"] ?? null), "has_geometry", [], "any", false, false, false, 374)) {
                        // line 375
                        echo "            ";
                        echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/table/gis-visualization"), twig_get_attribute($this->env, $this->source,                         // line 377
($context["operations"] ?? null), "url_params", [], "any", false, false, false, 377), $this->env->getFunction('get_icon')->getCallable()("b_globe", _gettext("Visualize GIS data"), true), ["class" => "btn"]);
                        // line 380
                        echo "
          ";
                    }
                    // line 382
                    echo "        ";
                }
                // line 383
                echo "
        <span>
          ";
                // line 385
                echo $this->env->getFunction('link_or_button')->getCallable()($this->env->getFunction('url')->getCallable()("/view/create"), ["db" =>                 // line 387
($context["db"] ?? null), "table" => ($context["table"] ?? null), "sql_query" => ($context["sql_query"] ?? null), "printview" => true], $this->env->getFunction('get_icon')->getCallable()("b_view_add", _gettext("Create view"), true), ["class" => "btn create_view ajax"]);
                // line 390
                echo "
        </span>
      ";
            }
            // line 393
            echo "    </div>
  </div>
";
        }
        // line 396
        if (( !twig_test_empty(($context["operations"] ?? null)) &&  !twig_get_attribute($this->env, $this->source, ($context["operations"] ?? null), "has_procedure", [], "any", false, false, false, 396))) {
            // line 397
            echo twig_include($this->env, $context, "modals/create_view.twig");
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "display/results/table.twig";
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
        return array (  953 => 397,  951 => 396,  946 => 393,  941 => 390,  939 => 387,  938 => 385,  934 => 383,  931 => 382,  927 => 380,  925 => 377,  923 => 375,  921 => 374,  917 => 372,  915 => 369,  914 => 367,  910 => 365,  908 => 362,  906 => 360,  903 => 359,  901 => 358,  898 => 357,  894 => 355,  892 => 350,  886 => 348,  884 => 347,  879 => 344,  875 => 343,  873 => 342,  868 => 340,  865 => 339,  859 => 336,  855 => 335,  851 => 333,  845 => 330,  840 => 329,  838 => 328,  832 => 325,  829 => 324,  822 => 321,  819 => 320,  812 => 317,  809 => 316,  804 => 314,  797 => 313,  791 => 312,  787 => 311,  784 => 310,  782 => 309,  774 => 304,  765 => 298,  761 => 297,  757 => 296,  750 => 292,  746 => 290,  741 => 288,  737 => 287,  732 => 286,  730 => 285,  727 => 284,  723 => 282,  719 => 280,  717 => 279,  712 => 276,  699 => 269,  693 => 268,  685 => 265,  679 => 264,  676 => 263,  668 => 260,  662 => 259,  659 => 258,  657 => 257,  647 => 252,  643 => 251,  640 => 250,  636 => 248,  627 => 240,  623 => 239,  620 => 238,  611 => 234,  607 => 233,  604 => 232,  599 => 229,  590 => 225,  584 => 224,  576 => 221,  570 => 220,  566 => 218,  564 => 217,  555 => 213,  549 => 212,  541 => 209,  535 => 208,  527 => 202,  522 => 200,  518 => 198,  513 => 196,  510 => 195,  508 => 194,  504 => 192,  502 => 190,  501 => 189,  500 => 188,  499 => 187,  498 => 186,  493 => 185,  491 => 184,  488 => 183,  481 => 180,  478 => 179,  472 => 177,  469 => 176,  463 => 174,  460 => 173,  458 => 172,  452 => 169,  447 => 167,  442 => 165,  437 => 163,  434 => 162,  426 => 156,  421 => 153,  408 => 151,  404 => 150,  401 => 149,  396 => 147,  391 => 146,  389 => 145,  380 => 140,  373 => 136,  363 => 129,  350 => 127,  345 => 126,  339 => 124,  337 => 123,  333 => 121,  328 => 119,  326 => 118,  325 => 117,  324 => 116,  320 => 115,  313 => 110,  304 => 104,  298 => 101,  288 => 96,  284 => 95,  281 => 94,  278 => 93,  276 => 91,  275 => 90,  271 => 89,  268 => 88,  266 => 87,  263 => 86,  259 => 84,  257 => 83,  254 => 82,  251 => 81,  241 => 77,  238 => 75,  235 => 73,  232 => 72,  230 => 71,  226 => 70,  222 => 69,  218 => 68,  214 => 67,  210 => 66,  204 => 65,  201 => 64,  199 => 63,  189 => 59,  186 => 57,  183 => 55,  180 => 54,  178 => 53,  174 => 52,  170 => 51,  166 => 50,  162 => 49,  158 => 48,  154 => 47,  151 => 46,  149 => 45,  144 => 43,  141 => 42,  131 => 38,  126 => 35,  124 => 34,  122 => 33,  120 => 32,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  85 => 21,  80 => 18,  78 => 17,  76 => 16,  74 => 15,  70 => 14,  66 => 13,  61 => 11,  57 => 10,  53 => 9,  50 => 8,  48 => 7,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "display/results/table.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\display\\results\\table.twig");
    }
}
