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

/* server/privileges/login_information_fields.twig */
class __TwigTemplate_9c15018439ea3fd4e0dc95812613a7c7 extends Template
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
        echo "<div class=\"card mb-3\" id=\"fieldset_add_user_login\">
  <div class=\"card-header\">";
echo _gettext("Login Information");
        // line 2
        echo "</div>
  <div class=\"card-body\">
    <div class=\"item\">
      <label for=\"select_pred_username\">";
echo _gettext("User name:");
        // line 5
        echo "</label>
      <span class=\"options\">
        <select name=\"pred_username\" id=\"select_pred_username\" title=\"";
echo _gettext("User name");
        // line 7
        echo "\">
          <option value=\"any\"";
        // line 8
        echo (((($context["pred_username"] ?? null) == "any")) ? (" selected") : (""));
        echo ">";
echo _gettext("Any user");
        echo "</option>
          <option value=\"userdefined\"";
        // line 9
        echo ((((null === ($context["pred_username"] ?? null)) || (($context["pred_username"] ?? null) == "userdefined"))) ? (" selected") : (""));
        echo ">";
echo _gettext("Use text field");
        echo "</option>
        </select>
      </span>
      <input type=\"text\" spellcheck=\"false\" name=\"username\" id=\"pma_username\" class=\"autofocus\" maxlength=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["username_length"] ?? null), "html", null, true);
        echo "\" title=\"";
echo _gettext("User name");
        echo "\"";
        // line 13
        if ( !twig_test_empty(($context["username"] ?? null))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (( !(null === ($context["new_username"] ?? null))) ? (($context["new_username"] ?? null)) : (($context["username"] ?? null))), "html", null, true);
            echo "\"";
        }
        // line 14
        echo ((((null === ($context["pred_username"] ?? null)) || (($context["pred_username"] ?? null) == "userdefined"))) ? (" required") : (""));
        echo ">

      <div id=\"user_exists_warning\" class=\"hide\">
        ";
        // line 17
        echo $this->env->getFilter('notice')->getCallable()(_gettext("An account already exists with the same username but possibly a different hostname."));
        echo "
      </div>
    </div>

    <div class=\"item\">
      <label for=\"select_pred_hostname\">
        ";
echo _gettext("Host name:");
        // line 24
        echo "      </label>
      <span class=\"options\">
        <select name=\"pred_hostname\" id=\"select_pred_hostname\" title=\"";
echo _gettext("Host name");
        // line 26
        echo "\"";
        // line 27
        (((( !(null === ($context["this_host"] ?? null)) && (($context["this_host"] ?? null) != "localhost")) && (($context["this_host"] ?? null) != "127.0.0.1"))) ? (print (twig_escape_filter($this->env, ((" data-thishost=\"" . ($context["this_host"] ?? null)) . "\""), "html", null, true))) : (print ("")));
        echo ">
          <option value=\"any\"";
        // line 28
        echo (((($context["pred_hostname"] ?? null) == "any")) ? (" selected") : (""));
        echo ">";
echo _gettext("Any host");
        echo "</option>
          <option value=\"localhost\"";
        // line 29
        echo (((($context["pred_hostname"] ?? null) == "localhost")) ? (" selected") : (""));
        echo ">";
echo _gettext("Local");
        echo "</option>
          ";
        // line 30
        if ( !twig_test_empty(($context["this_host"] ?? null))) {
            // line 31
            echo "            <option value=\"thishost\"";
            echo (((($context["pred_hostname"] ?? null) == "thishost")) ? (" selected") : (""));
            echo ">";
echo _gettext("This host");
            echo "</option>
          ";
        }
        // line 33
        echo "          <option value=\"hosttable\"";
        echo (((($context["pred_hostname"] ?? null) == "hosttable")) ? (" selected") : (""));
        echo ">";
echo _gettext("Use host table");
        echo "</option>
          <option value=\"userdefined\"";
        // line 34
        echo (((($context["pred_hostname"] ?? null) == "userdefined")) ? (" selected") : (""));
        echo ">";
echo _gettext("Use text field");
        echo "</option>
        </select>
      </span>
      <input type=\"text\" name=\"hostname\" id=\"pma_hostname\" maxlength=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["hostname_length"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("hostname", $context)) ? (_twig_default_filter(($context["hostname"] ?? null), "%")) : ("%")), "html", null, true);
        echo "\" title=\"";
echo _gettext("Host name");
        // line 38
        echo "\"";
        echo (((($context["pred_hostname"] ?? null) == "userdefined")) ? (" required") : (""));
        echo ">

      ";
        // line 40
        echo $this->env->getFunction('show_hint')->getCallable()(_gettext("When Host table is used, this field is ignored and values stored in Host table are used instead."));
        echo "
    </div>

    <div class=\"item\">
      <label for=\"select_pred_password\">";
echo _gettext("Password:");
        // line 44
        echo "</label>
      <span class=\"options\">
        <select name=\"pred_password\" id=\"select_pred_password\" title=\"";
echo _gettext("Password");
        // line 46
        echo "\">
          ";
        // line 47
        if (($context["is_change"] ?? null)) {
            // line 48
            echo "            <option value=\"keep\" selected>";
echo _gettext("Do not change the password");
            echo "</option>
          ";
        }
        // line 50
        echo "          <option value=\"none\"";
        echo ((( !(null === ($context["username"] ?? null)) &&  !($context["is_change"] ?? null))) ? (" selected") : (""));
        echo ">";
echo _gettext("No password");
        echo "</option>
          <option value=\"userdefined\"";
        // line 51
        echo (((null === ($context["username"] ?? null))) ? (" selected") : (""));
        echo ">";
echo _gettext("Use text field");
        echo "</option>
        </select>
      </span>
      <input type=\"password\" spellcheck=\"false\" id=\"text_pma_pw\" name=\"pma_pw\" title=\"";
echo _gettext("Password");
        // line 54
        echo "\"";
        echo (((null === ($context["username"] ?? null))) ? (" required") : (""));
        echo ">
      <span>";
echo _pgettext("Password strength", "Strength:");
        // line 55
        echo "</span>
      <meter max=\"4\" id=\"password_strength_meter\" name=\"pw_meter\"></meter>
      <span id=\"password_strength\" name=\"pw_strength\"></span>
    </div>

    <div class=\"item\" id=\"div_element_before_generate_password\">
      <label for=\"text_pma_pw2\">";
echo _gettext("Re-type:");
        // line 61
        echo "</label>
      <span class=\"options\">&nbsp;</span>
      <input type=\"password\" spellcheck=\"false\" name=\"pma_pw2\" id=\"text_pma_pw2\" title=\"";
echo _gettext("Re-type");
        // line 63
        echo "\"";
        echo (((null === ($context["username"] ?? null))) ? (" required") : (""));
        echo ">
    </div>

    <div class=\"item\" id=\"authentication_plugin_div\">
      <label for=\"select_authentication_plugin\">
        ";
        // line 68
        if (($context["is_new"] ?? null)) {
            // line 69
            echo "          ";
echo _gettext("Authentication plugin");
            // line 70
            echo "        ";
        } else {
            // line 71
            echo "          ";
echo _gettext("Password hashing method");
            // line 72
            echo "        ";
        }
        // line 73
        echo "      </label>
      <span class=\"options\">&nbsp;</span>

      <select name=\"authentication_plugin\" id=\"select_authentication_plugin\">
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["active_auth_plugins"] ?? null));
        foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin_description"]) {
            // line 78
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $context["plugin_name"], "html", null, true);
            echo "\"";
            echo ((($context["plugin_name"] == ($context["auth_plugin"] ?? null))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["plugin_description"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "      </select>

      <div id=\"ssl_reqd_warning\"";
        // line 82
        echo (((($context["auth_plugin"] ?? null) != "sha256_password")) ? (" class=\"hide\"") : (""));
        echo ">
        ";
        // line 83
        ob_start(function () { return ''; });
        // line 84
        echo "          ";
echo _gettext("This method requires using an '<em>SSL connection</em>' or an '<em>unencrypted connection that encrypts the password using RSA</em>'; while connecting to the server.");
        // line 87
        echo "          ";
        echo $this->env->getFunction('show_mysql_docu')->getCallable()("sha256-authentication-plugin");
        echo "
        ";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo $this->env->getFilter('notice')->getCallable()($___internal_parse_1_);
        // line 89
        echo "      </div>
    </div>
    ";
        // line 92
        echo "  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/login_information_fields.twig";
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
        return array (  287 => 92,  283 => 89,  281 => 83,  275 => 87,  272 => 84,  270 => 83,  266 => 82,  262 => 80,  249 => 78,  245 => 77,  239 => 73,  236 => 72,  233 => 71,  230 => 70,  227 => 69,  225 => 68,  216 => 63,  211 => 61,  202 => 55,  196 => 54,  187 => 51,  180 => 50,  174 => 48,  172 => 47,  169 => 46,  164 => 44,  156 => 40,  150 => 38,  144 => 37,  136 => 34,  129 => 33,  121 => 31,  119 => 30,  113 => 29,  107 => 28,  103 => 27,  101 => 26,  96 => 24,  86 => 17,  80 => 14,  74 => 13,  69 => 12,  61 => 9,  55 => 8,  52 => 7,  47 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/login_information_fields.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\server\\privileges\\login_information_fields.twig");
    }
}
