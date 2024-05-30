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

/* import.twig */
class __TwigTemplate_2a707138265cabdecb3f14484a1059be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container\">
  <h2 class=\"my-3\">
    ";
        // line 3
        echo $this->env->getFunction('get_image')->getCallable()("b_import", _gettext("Import"));
        echo "
    ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "  </h2>

  ";
        // line 7
        echo ($context["page_settings_error_html"] ?? null);
        echo "
  ";
        // line 8
        echo ($context["page_settings_html"] ?? null);
        echo "

  <iframe id=\"import_upload_iframe\" name=\"import_upload_iframe\" width=\"1\" height=\"1\" class=\"hide\"></iframe>
  <div id=\"import_form_status\" class=\"hide\"></div>

  <div class=\"d-none\" id=\"upload_progress_info\" data-upload-id=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["upload_id"] ?? null), "html_attr");
        echo "\" data-handler=\"";
        echo twig_escape_filter($this->env, ($context["handler"] ?? null), "html_attr");
        echo "\"></div>

  <div id=\"importmain\">
    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("ajax_clock_small.gif"), "html", null, true);
        echo "\" width=\"16\" height=\"16\" alt=\"ajax clock\" class=\"hide\">

    <form id=\"import_file_form\" action=\"";
        // line 18
        echo $this->env->getFunction('url')->getCallable()("/import");
        echo "\" method=\"post\" enctype=\"multipart/form-data\" name=\"import\" class=\"ajax\"";
        // line 19
        if ((($context["handler"] ?? null) != "PhpMyAdmin\\Plugins\\Import\\Upload\\UploadNoplugin")) {
            echo " target=\"import_upload_iframe\"";
        }
        echo ">
      ";
        // line 20
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["hidden_inputs"] ?? null));
        echo "

      <div class=\"card mb-3\">
        <div class=\"card-header\">";
echo _gettext("File to import:");
        // line 23
        echo "</div>
        <div class=\"card-body\">
          ";
        // line 26
        echo "          ";
        if ( !twig_test_empty(($context["compressions"] ?? null))) {
            // line 27
            echo "            <p class=\"card-text\">
              ";
            // line 28
            echo twig_escape_filter($this->env, twig_sprintf(_gettext("File may be compressed (%s) or uncompressed."), twig_join_filter(($context["compressions"] ?? null), ", ")), "html", null, true);
            echo "<br>
              ";
echo _gettext("A compressed file's name must end in <strong>.[format].[compression]</strong>. Example: <strong>.sql.zip</strong>");
            // line 30
            echo "            </p>
          ";
        }
        // line 32
        echo "
          ";
        // line 33
        if ((($context["is_upload"] ?? null) &&  !twig_test_empty(($context["upload_dir"] ?? null)))) {
            // line 34
            echo "            ";
            $context["use_local_file_import"] = ( !twig_test_empty(($context["timeout_passed_global"] ?? null)) &&  !twig_test_empty(($context["local_import_file"] ?? null)));
            // line 35
            echo "            <ul class=\"nav nav-pills mb-3\" id=\"importFileTab\" role=\"tablist\">
              <li class=\"nav-item\" role=\"presentation\">
                <button class=\"nav-link";
            // line 37
            echo (( !($context["use_local_file_import"] ?? null)) ? (" active") : (""));
            echo "\" id=\"uploadFileTab\" data-bs-toggle=\"tab\" data-bs-target=\"#uploadFile\" type=\"button\" role=\"tab\" aria-controls=\"uploadFile\" aria-selected=\"";
            echo (( !($context["use_local_file_import"] ?? null)) ? ("true") : ("false"));
            echo "\">";
echo _gettext("Upload a file");
            echo "</button>
              </li>
              <li class=\"nav-item\" role=\"presentation\">
                <button class=\"nav-link";
            // line 40
            echo ((($context["use_local_file_import"] ?? null)) ? (" active") : (""));
            echo "\" id=\"localFileTab\" data-bs-toggle=\"tab\" data-bs-target=\"#localFile\" type=\"button\" role=\"tab\" aria-controls=\"localFile\" aria-selected=\"";
            echo ((($context["use_local_file_import"] ?? null)) ? ("true") : ("false"));
            echo "\">";
echo _gettext("Select file to import");
            echo "</button>
              </li>
            </ul>
            <div class=\"tab-content mb-3\" id=\"importFileTabContent\">
              <div class=\"tab-pane fade";
            // line 44
            echo (( !($context["use_local_file_import"] ?? null)) ? (" show active") : (""));
            echo "\" id=\"uploadFile\" role=\"tabpanel\" aria-labelledby=\"uploadFileTab\">
                <div class=\"mb-3\">
                  <label class=\"form-label\" for=\"input_import_file\">";
echo _gettext("Browse your computer:");
            // line 46
            echo " <small>";
            echo twig_escape_filter($this->env, ($context["formatted_maximum_upload_size"] ?? null), "html", null, true);
            echo "</small></label>
                  <input class=\"form-control\" type=\"file\" name=\"import_file\" id=\"input_import_file\">
                </div>
                <div id=\"upload_form_status\" class=\"hide\"></div>
                <div id=\"upload_form_status_info\" class=\"hide\"></div>
                <p class=\"card-text\">";
echo _gettext("You may also drag and drop a file on any page.");
            // line 51
            echo "</p>
              </div>

              <div class=\"tab-pane fade";
            // line 54
            echo ((($context["use_local_file_import"] ?? null)) ? (" show active") : (""));
            echo "\" id=\"localFile\" role=\"tabpanel\" aria-labelledby=\"localFileTab\">
                ";
            // line 55
            if ((($context["local_files"] ?? null) === false)) {
                // line 56
                echo "                  ";
                echo $this->env->getFilter('error')->getCallable()(_gettext("The directory you set for upload work cannot be reached."));
                echo "
                ";
            } elseif ( !twig_test_empty(            // line 57
($context["local_files"] ?? null))) {
                // line 58
                echo "                  <label class=\"form-label\" for=\"select_local_import_file\">";
                echo $this->env->getFilter('sanitize')->getCallable()(twig_sprintf(_gettext("Select from the web server upload directory [strong]%s[/strong]:"), ($context["user_upload_dir"] ?? null)));
                echo "</label>
                  <select class=\"form-select\" size=\"1\" name=\"local_import_file\" id=\"select_local_import_file\">
                    <option value=\"\"></option>
                    ";
                // line 61
                echo ($context["local_files"] ?? null);
                echo "
                  </select>
                ";
            } else {
                // line 64
                echo "                  <div class=\"alert alert-info\" role=\"alert\">
                    ";
echo _gettext("There are no files to import!");
                // line 66
                echo "                  </div>
                ";
            }
            // line 68
            echo "              </div>
            </div>
          ";
        } elseif (        // line 70
($context["is_upload"] ?? null)) {
            // line 71
            echo "            <div class=\"mb-3\">
              <label class=\"form-label\" for=\"input_import_file\">";
echo _gettext("Browse your computer:");
            // line 72
            echo " <small>";
            echo twig_escape_filter($this->env, ($context["formatted_maximum_upload_size"] ?? null), "html", null, true);
            echo "</small></label>
              <input class=\"form-control\" type=\"file\" name=\"import_file\" id=\"input_import_file\">
            </div>
            <div id=\"upload_form_status\" class=\"hide\"></div>
            <div id=\"upload_form_status_info\" class=\"hide\"></div>
            <p class=\"card-text\">";
echo _gettext("You may also drag and drop a file on any page.");
            // line 77
            echo "</p>
          ";
        } elseif ( !twig_test_empty(        // line 78
($context["upload_dir"] ?? null))) {
            // line 79
            echo "            ";
            if ((($context["local_files"] ?? null) === false)) {
                // line 80
                echo "              ";
                echo $this->env->getFilter('error')->getCallable()(_gettext("The directory you set for upload work cannot be reached."));
                echo "
            ";
            } elseif ( !twig_test_empty(            // line 81
($context["local_files"] ?? null))) {
                // line 82
                echo "              <div class=\"mb-3\">
                <label class=\"form-label\" for=\"select_local_import_file\">";
                // line 83
                echo $this->env->getFilter('sanitize')->getCallable()(twig_sprintf(_gettext("Select from the web server upload directory [strong]%s[/strong]:"), ($context["user_upload_dir"] ?? null)));
                echo "</label>
                <select class=\"form-select\" size=\"1\" name=\"local_import_file\" id=\"select_local_import_file\">
                  <option value=\"\"></option>
                  ";
                // line 86
                echo ($context["local_files"] ?? null);
                echo "
                </select>
              </div>
            ";
            } else {
                // line 90
                echo "              <div class=\"alert alert-info\" role=\"alert\">
                ";
echo _gettext("There are no files to import!");
                // line 92
                echo "              </div>
            ";
            }
            // line 94
            echo "          ";
        } else {
            // line 95
            echo "            ";
            echo $this->env->getFilter('notice')->getCallable()(_gettext("File uploads are not allowed on this server."));
            echo "
          ";
        }
        // line 97
        echo "
          <label class=\"form-label\" for=\"charset_of_file\">";
echo _gettext("Character set of the file:");
        // line 98
        echo "</label>
          ";
        // line 99
        if (($context["is_encoding_supported"] ?? null)) {
            // line 100
            echo "            <select class=\"form-select\" id=\"charset_of_file\" name=\"charset_of_file\" size=\"1\">
              ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["encodings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                // line 102
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["charset"], "html", null, true);
                echo "\"";
                if (((twig_test_empty(($context["import_charset"] ?? null)) && ($context["charset"] == "utf-8")) || ($context["charset"] == ($context["import_charset"] ?? null)))) {
                    echo " selected";
                }
                echo ">";
                // line 103
                echo twig_escape_filter($this->env, $context["charset"], "html", null, true);
                // line 104
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "            </select>
          ";
        } else {
            // line 108
            echo "            <select class=\"form-select\" lang=\"en\" dir=\"ltr\" name=\"charset_of_file\" id=\"charset_of_file\">
              <option value=\"\"></option>
              ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["charsets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                // line 111
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 111), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getDescription", [], "method", false, false, false, 111), "html", null, true);
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 111) == "utf8")) ? (" selected") : (""));
                echo ">";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 112), "html", null, true);
                // line 113
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "            </select>
          ";
        }
        // line 117
        echo "        </div>
      </div>

      <div class=\"card mb-3\">
        <div class=\"card-header\">";
echo _gettext("Partial import:");
        // line 121
        echo "</div>
        <div class=\"card-body\">
          ";
        // line 123
        if ((array_key_exists("timeout_passed", $context) && ($context["timeout_passed"] ?? null))) {
            // line 124
            echo "            <input type=\"hidden\" name=\"skip\" value=\"";
            echo twig_escape_filter($this->env, ($context["offset"] ?? null), "html", null, true);
            echo "\">
            <div class=\"alert alert-info\" role=\"alert\">
              ";
            // line 126
            echo twig_escape_filter($this->env, twig_sprintf(_gettext("Previous import timed out, after resubmitting will continue from position %d."), ($context["offset"] ?? null)), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 129
        echo "
          <div class=\"form-check form-switch mb-3\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"allow_interrupt\" value=\"yes\" id=\"checkbox_allow_interrupt\"";
        // line 131
        echo ($context["is_allow_interrupt_checked"] ?? null);
        echo " aria-describedby=\"allowInterruptHelp\">
            <label class=\"form-check-label\" for=\"checkbox_allow_interrupt\">
              ";
echo _gettext("Allow the interruption of an import in case the script detects it is close to the PHP timeout limit.");
        // line 134
        echo "            </label>
            <div id=\"allowInterruptHelp\" class=\"form-text\">";
echo _gettext("This might be a good way to import large files, however it can break transactions.");
        // line 135
        echo "</div>
          </div>

          ";
        // line 138
        if ( !(array_key_exists("timeout_passed", $context) && ($context["timeout_passed"] ?? null))) {
            // line 139
            echo "            <label class=\"form-label\" for=\"text_skip_queries\">";
echo _gettext("Skip this number of queries (for SQL) starting from the first one:");
            echo "</label>
            <input class=\"form-control\" type=\"number\" name=\"skip_queries\" value=\"";
            // line 140
            echo ($context["skip_queries_default"] ?? null);
            echo "\" id=\"text_skip_queries\" min=\"0\">
          ";
        } else {
            // line 142
            echo "            ";
            // line 143
            echo "            <input type=\"hidden\" name=\"skip_queries\" value=\"";
            echo ($context["skip_queries_default"] ?? null);
            echo "\" id=\"text_skip_queries\">
          ";
        }
        // line 145
        echo "        </div>
      </div>

      <div class=\"card mb-3\">
        <div class=\"card-header\">";
echo _gettext("Other options");
        // line 149
        echo "</div>
        <div class=\"card-body\">
          <input type=\"hidden\" name=\"fk_checks\" value=\"0\">
          <div class=\"form-check form-switch\">
            <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" name=\"fk_checks\" id=\"fk_checks\" value=\"1\"";
        // line 153
        echo ((($context["is_foreign_key_check"] ?? null)) ? (" checked") : (""));
        echo ">
            <label class=\"form-check-label\" for=\"fk_checks\">";
echo _gettext("Enable foreign key checks");
        // line 154
        echo "</label>
          </div>
        </div>
      </div>

      <div class=\"card mb-3\">
        <div class=\"card-header\">";
echo _gettext("Format");
        // line 160
        echo "</div>
        <div class=\"card-body\">
          <select class=\"form-select\" id=\"plugins\" name=\"format\" aria-label=\"";
echo _gettext("Format");
        // line 162
        echo "\">
            ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plugins_choice"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 164
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 164), "html", null, true);
            echo "\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["option"], "is_selected", [], "any", false, false, false, 164)) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "text", [], "any", false, false, false, 164), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "          </select>

          <div id=\"import_notification\"></div>
        </div>
      </div>

      <div class=\"card mb-3\" id=\"format_specific_opts\">
        <div class=\"card-header\">";
echo _gettext("Format-specific options:");
        // line 173
        echo "</div>
        <div class=\"card-body\">
          ";
        // line 175
        echo ($context["options"] ?? null);
        echo "
        </div>
      </div>

      ";
        // line 180
        echo "      ";
        if (($context["can_convert_kanji"] ?? null)) {
            // line 181
            echo "        <div class=\"card mb-3\" id=\"kanji_encoding\">
          <div class=\"card-header\">";
echo _gettext("Encoding Conversion:");
            // line 182
            echo "</div>
          <div class=\"card-body\">
            ";
            // line 184
            $this->loadTemplate("encoding/kanji_encoding_form.twig", "import.twig", 184)->display($context);
            // line 185
            echo "          </div>
        </div>
      ";
        }
        // line 188
        echo "
      <div id=\"submit\">
        <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Import");
        // line 190
        echo "\">
      </div>
    </form>
  </div>
</div>
";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "import.twig";
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
        return array (  503 => 4,  494 => 190,  489 => 188,  484 => 185,  482 => 184,  478 => 182,  474 => 181,  471 => 180,  464 => 175,  460 => 173,  450 => 166,  437 => 164,  433 => 163,  430 => 162,  425 => 160,  416 => 154,  411 => 153,  405 => 149,  398 => 145,  392 => 143,  390 => 142,  385 => 140,  380 => 139,  378 => 138,  373 => 135,  369 => 134,  363 => 131,  359 => 129,  353 => 126,  347 => 124,  345 => 123,  341 => 121,  334 => 117,  330 => 115,  323 => 113,  321 => 112,  313 => 111,  309 => 110,  305 => 108,  301 => 106,  294 => 104,  292 => 103,  284 => 102,  280 => 101,  277 => 100,  275 => 99,  272 => 98,  268 => 97,  262 => 95,  259 => 94,  255 => 92,  251 => 90,  244 => 86,  238 => 83,  235 => 82,  233 => 81,  228 => 80,  225 => 79,  223 => 78,  220 => 77,  210 => 72,  206 => 71,  204 => 70,  200 => 68,  196 => 66,  192 => 64,  186 => 61,  179 => 58,  177 => 57,  172 => 56,  170 => 55,  166 => 54,  161 => 51,  151 => 46,  145 => 44,  134 => 40,  124 => 37,  120 => 35,  117 => 34,  115 => 33,  112 => 32,  108 => 30,  103 => 28,  100 => 27,  97 => 26,  93 => 23,  86 => 20,  80 => 19,  77 => 18,  72 => 16,  64 => 13,  56 => 8,  52 => 7,  48 => 5,  46 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "import.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\import.twig");
    }
}
