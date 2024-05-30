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

/* server/privileges/user_properties.twig */
class __TwigTemplate_3294759b411ddefd6ce17804fa1dd407 extends Template
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
        echo "<div class=\"container\" id=\"edit_user_dialog\">
  <h2>
    ";
        // line 3
        echo $this->env->getFunction('get_icon')->getCallable()("b_usredit");
        echo "
    ";
echo _gettext("Edit privileges:");
        // line 5
        echo "    ";
echo _gettext("User account");
        // line 6
        echo "
    ";
        // line 7
        if ( !twig_test_empty(($context["database"] ?? null))) {
            // line 8
            echo "      <em>
        <a class=\"edit_user_anchor\" href=\"";
            // line 9
            echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["username" =>             // line 10
($context["username"] ?? null), "hostname" =>             // line 11
($context["hostname"] ?? null), "dbname" => "", "tablename" => ""]);
            // line 14
            echo "\">
          '";
            // line 15
            echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
            echo "'@'";
            echo twig_escape_filter($this->env, ($context["hostname"] ?? null), "html", null, true);
            echo "'
        </a>
      </em>
      -
      ";
            // line 19
            if (($context["is_databases"] ?? null)) {
                // line 20
                echo "        ";
echo _gettext("Databases");
                // line 21
                echo "      ";
            } else {
                // line 22
                echo "        ";
echo _gettext("Database");
                // line 23
                echo "      ";
            }
            // line 24
            echo "
      ";
            // line 25
            if ( !twig_test_empty(($context["table"] ?? null))) {
                // line 26
                echo "        <em>
          <a href=\"";
                // line 27
                echo $this->env->getFunction('url')->getCallable()("/server/privileges", ["username" =>                 // line 28
($context["username"] ?? null), "hostname" =>                 // line 29
($context["hostname"] ?? null), "dbname" =>                 // line 30
($context["dbname"] ?? null), "tablename" => ""]);
                // line 32
                echo "\">
            ";
                // line 33
                echo twig_escape_filter($this->env, ($context["database"] ?? null), "html", null, true);
                echo "
          </a>
        </em>
        -
        ";
echo _gettext("Table");
                // line 38
                echo "        <em>";
                echo twig_escape_filter($this->env, ($context["table"] ?? null), "html", null, true);
                echo "</em>
      ";
            } else {
                // line 40
                echo "        ";
                if ( !is_iterable(($context["database"] ?? null))) {
                    // line 41
                    echo "          ";
                    $context["database"] = [($context["database"] ?? null)];
                    // line 42
                    echo "        ";
                }
                // line 43
                echo "        <em>
          ";
                // line 44
                echo twig_escape_filter($this->env, twig_join_filter(($context["database"] ?? null), ", "), "html", null, true);
                echo "
        </em>
      ";
            }
            // line 47
            echo "    ";
        } else {
            // line 48
            echo "      <em>'";
            echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
            echo "'@'";
            echo twig_escape_filter($this->env, ($context["hostname"] ?? null), "html", null, true);
            echo "'</em>
    ";
        }
        // line 50
        echo "  </h2>

  ";
        // line 52
        if ((($context["current_user"] ?? null) == ((($context["username"] ?? null) . "@") . ($context["hostname"] ?? null)))) {
            // line 53
            echo "    ";
            echo $this->env->getFilter('notice')->getCallable()(_gettext("Note: You are attempting to edit privileges of the user with which you are currently logged in."));
            echo "
  ";
        }
        // line 55
        echo "
  ";
        // line 56
        if (($context["user_does_not_exists"] ?? null)) {
            // line 57
            echo "    ";
            echo $this->env->getFilter('error')->getCallable()(_gettext("The selected user was not found in the privilege table."));
            echo "
  ";
        }
        // line 59
        echo "
  <form class=\"submenu-item\" name=\"usersForm\" id=\"addUsersForm\" action=\"";
        // line 60
        echo $this->env->getFunction('url')->getCallable()("/server/privileges");
        echo "\" method=\"post\">
    ";
        // line 61
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()(($context["params"] ?? null));
        echo "

    ";
        // line 63
        echo ($context["privileges_table"] ?? null);
        echo "
  </form>

  ";
        // line 66
        echo ($context["table_specific_rights"] ?? null);
        echo "

  ";
        // line 68
        if ((( !is_iterable(($context["database"] ?? null)) && (twig_length_filter($this->env, ($context["database"] ?? null)) > 0)) &&  !($context["is_wildcard"] ?? null))) {
            // line 69
            echo "    [
    ";
echo _gettext("Database");
            // line 71
            echo "    <a href=\"";
            echo ($context["database_url"] ?? null);
            echo $this->env->getFunction('get_common')->getCallable()(["db" => twig_replace_filter(            // line 72
($context["database"] ?? null), ["\\_" => "_", "\\%" => "%"]), "reload" => true], "&");
            // line 74
            echo "\">
      ";
            // line 75
            echo twig_escape_filter($this->env, twig_replace_filter(($context["database"] ?? null), ["\\_" => "_", "\\%" => "%"]), "html", null, true);
            echo ":
      ";
            // line 76
            echo twig_escape_filter($this->env, ($context["database_url_title"] ?? null), "html", null, true);
            echo "
    </a>
    ]
    ";
            // line 79
            if ((twig_length_filter($this->env, ($context["table"] ?? null)) > 0)) {
                // line 80
                echo "      [
      ";
echo _gettext("Table");
                // line 82
                echo "      <a href=\"";
                echo ($context["table_url"] ?? null);
                echo $this->env->getFunction('get_common')->getCallable()(["db" => twig_replace_filter(                // line 83
($context["database"] ?? null), ["\\_" => "_", "\\%" => "%"]), "table" =>                 // line 84
($context["table"] ?? null), "reload" => true], "&");
                // line 86
                echo "\">
        ";
                // line 87
                echo twig_escape_filter($this->env, ($context["table"] ?? null), "html", null, true);
                echo ":
        ";
                // line 88
                echo twig_escape_filter($this->env, ($context["table_url_title"] ?? null), "html", null, true);
                echo "
      </a>
      ]
    ";
            }
            // line 92
            echo "  ";
        }
        // line 93
        echo "
  ";
        // line 94
        echo ($context["change_password"] ?? null);
        echo "

  <form action=\"";
        // line 96
        echo $this->env->getFunction('url')->getCallable()("/server/privileges");
        echo "\" id=\"copyUserForm\" method=\"post\" class=\"copyUserForm submenu-item\" autocomplete=\"off\">
    ";
        // line 97
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()();
        echo "
    <input type=\"hidden\" name=\"old_username\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"old_hostname\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, ($context["hostname"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 100
        if ( !twig_test_empty(($context["user_group"] ?? null))) {
            // line 101
            echo "      <input type=\"hidden\" name=\"old_usergroup\" value=\"";
            echo twig_escape_filter($this->env, ($context["user_group"] ?? null), "html", null, true);
            echo "\">
    ";
        }
        // line 103
        echo "
    <div class=\"card mb-3\">
      <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
echo _gettext("Login Information");
        // line 105
        echo "\">
        ";
echo _gettext("Change login information / Copy user account");
        // line 107
        echo "      </div>

      <div class=\"card-body\">
        ";
        // line 110
        echo ($context["change_login_info_fields"] ?? null);
        echo "

        <div class=\"card\">
          <div class=\"card-header\">
            ";
echo _gettext("Create a new user account with the same privileges and …");
        // line 115
        echo "          </div>

          <div class=\"card-body\">

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_4\" value=\"4\" checked>
              <label class=\"form-check-label\" for=\"mode_4\">
                ";
echo _gettext("… keep the old one.");
        // line 123
        echo "              </label>
            </div>

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_1\" value=\"1\">
              <label class=\"form-check-label\" for=\"mode_1\">
                ";
echo _gettext("… delete the old one from the user tables.");
        // line 130
        echo "              </label>
            </div>

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_2\" value=\"2\">
              <label class=\"form-check-label\" for=\"mode_2\">
                ";
echo _gettext("… revoke all active privileges from the old one and delete it afterwards.");
        // line 137
        echo "              </label>
            </div>

            <div class=\"mb-3 form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_3\" value=\"3\">
              <label class=\"form-check-label\" for=\"mode_3\">
                ";
echo _gettext("… delete the old one from the user tables and reload the privileges afterwards.");
        // line 144
        echo "              </label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <input type=\"hidden\" name=\"change_copy\" value=\"1\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Go");
        // line 153
        echo "\">
    </div>
  </form>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/user_properties.twig";
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
        return array (  348 => 153,  336 => 144,  327 => 137,  318 => 130,  309 => 123,  299 => 115,  291 => 110,  286 => 107,  282 => 105,  277 => 103,  271 => 101,  269 => 100,  265 => 99,  261 => 98,  257 => 97,  253 => 96,  248 => 94,  245 => 93,  242 => 92,  235 => 88,  231 => 87,  228 => 86,  226 => 84,  225 => 83,  222 => 82,  218 => 80,  216 => 79,  210 => 76,  206 => 75,  203 => 74,  201 => 72,  198 => 71,  194 => 69,  192 => 68,  187 => 66,  181 => 63,  176 => 61,  172 => 60,  169 => 59,  163 => 57,  161 => 56,  158 => 55,  152 => 53,  150 => 52,  146 => 50,  138 => 48,  135 => 47,  129 => 44,  126 => 43,  123 => 42,  120 => 41,  117 => 40,  111 => 38,  103 => 33,  100 => 32,  98 => 30,  97 => 29,  96 => 28,  95 => 27,  92 => 26,  90 => 25,  87 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 20,  73 => 19,  64 => 15,  61 => 14,  59 => 11,  58 => 10,  57 => 9,  54 => 8,  52 => 7,  49 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/user_properties.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\server\\privileges\\user_properties.twig");
    }
}
