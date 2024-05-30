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

/* server/privileges/change_password.twig */
class __TwigTemplate_19e22d208c8ea6d634bd8f523d9521d5 extends Template
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
        echo "<form method=\"post\" id=\"change_password_form\" action=\"";
        // line 2
        echo ((($context["is_privileges"] ?? null)) ? ($this->env->getFunction('url')->getCallable()("/server/privileges")) : ($this->env->getFunction('url')->getCallable()("/user-password")));
        echo "\" name=\"chgPassword\" class=\"";
        echo ((($context["is_privileges"] ?? null)) ? ("submenu-item") : (""));
        echo "\" autocomplete=\"off\">
  ";
        // line 3
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()();
        echo "
  ";
        // line 4
        if (($context["is_privileges"] ?? null)) {
            // line 5
            echo "    <input type=\"hidden\" name=\"username\" value=\"";
            echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
            echo "\">
    <input type=\"hidden\" name=\"hostname\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, ($context["hostname"] ?? null), "html", null, true);
            echo "\">
  ";
        }
        // line 8
        echo "
  <div class=\"card mb-3\" id=\"fieldset_change_password\">
    <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
echo _gettext("Change password");
        // line 10
        echo "\">
      ";
echo _gettext("Change password");
        // line 12
        echo "    </div>
    <div class=\"card-body\">
    <table class=\"table-borderless\" style=\"background: transparent;\">
      <tr class=\"mb-4\">
        <td colspan=\"3\">
          <input type=\"radio\" name=\"nopass\" value=\"1\" id=\"nopass_1\">
          <label for=\"nopass_1\">";
echo _gettext("No Password");
        // line 18
        echo "</label>
        </td>
      </tr>
      <tr class=\"align-middle mb-4\">
        <td>
          <input type=\"radio\" name=\"nopass\" value=\"0\" id=\"nopass_0\" checked>
          <label for=\"nopass_0\">";
echo _gettext("Password:");
        // line 24
        echo "&nbsp;</label>
        </td>
        <td>
          <div class=\"row\">
            <span class=\"d-flex align-items-center col-4\">";
echo _gettext("Enter:");
        // line 28
        echo "</span>
            <input type=\"password\" name=\"pma_pw\" id=\"text_pma_change_pw\" size=\"10\" class=\"textfield col-6\" spellcheck=\"false\" autocomplete=\"new-password\">
          </div>
          <div class=\"row mt-2\">
            <span class=\"d-flex align-items-center col-4\">";
echo _gettext("Re-type:");
        // line 32
        echo "</span>
            <input type=\"password\" name=\"pma_pw2\" id=\"text_pma_change_pw2\" size=\"10\" class=\"textfield col-6\" spellcheck=\"false\" autocomplete=\"new-password\">
          </div>
        </td>
        <td class=\"col-2\">
          <div>
            <span>";
echo _pgettext("Password strength", "Strength:");
        // line 38
        echo "</span>
            <meter max=\"4\" id=\"change_password_strength_meter\" name=\"pw_meter\"></meter>
          </div>
          <span id=\"change_password_strength\" name=\"pw_strength\"></span>
        </td>
      </tr>

      ";
        // line 45
        if (( !($context["is_new"] ?? null) || (($context["is_new"] ?? null) && ($context["has_more_auth_plugins"] ?? null)))) {
            // line 46
            echo "        <tr class=\"align-middle mb-4\">
          <td>
            <label for=\"select_authentication_plugin_cp\">";
echo _gettext("Password Hashing:");
            // line 48
            echo "</label>
          </td>
          <td colspan=\"2\">
            <select name=\"authentication_plugin\" id=\"select_authentication_plugin_cp\" class=\"col-8\">
              ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["active_auth_plugins"] ?? null));
            foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin_description"]) {
                // line 53
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["plugin_name"], "html", null, true);
                echo "\"";
                echo ((($context["plugin_name"] == ($context["orig_auth_plugin"] ?? null))) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $context["plugin_description"], "html", null, true);
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "            </select>
          </td>
        </tr>
      ";
        }
        // line 59
        echo "
      <tr id=\"tr_element_before_generate_password\"></tr>
    </table>

    ";
        // line 63
        if ((($context["is_new"] ?? null) && ($context["has_more_auth_plugins"] ?? null))) {
            // line 64
            echo "      <div";
            echo (((($context["orig_auth_plugin"] ?? null) != "sha256_password")) ? (" class=\"hide\"") : (""));
            echo " id=\"ssl_reqd_warning_cp\">
        ";
            // line 65
            ob_start(function () { return ''; });
            // line 66
            echo "          ";
echo _gettext("This method requires using an '<i>SSL connection</i>' or an '<i>unencrypted connection that encrypts the password using RSA</i>'; while connecting to the server.");
            // line 69
            echo "          ";
            echo $this->env->getFunction('show_mysql_docu')->getCallable()("sha256-authentication-plugin");
            echo "
        ";
            $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 65
            echo $this->env->getFilter('notice')->getCallable()($___internal_parse_0_);
            // line 71
            echo "      </div>
    ";
        }
        // line 73
        echo "    </div>

  </div>

  <div id=\"fieldset_change_password_footer\">
    <input type=\"hidden\" name=\"change_pw\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Go");
        // line 79
        echo "\">
  </div>
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/change_password.twig";
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
        return array (  195 => 79,  186 => 73,  182 => 71,  180 => 65,  174 => 69,  171 => 66,  169 => 65,  164 => 64,  162 => 63,  156 => 59,  150 => 55,  137 => 53,  133 => 52,  127 => 48,  122 => 46,  120 => 45,  111 => 38,  102 => 32,  95 => 28,  88 => 24,  79 => 18,  70 => 12,  66 => 10,  61 => 8,  56 => 6,  51 => 5,  49 => 4,  45 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/change_password.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\server\\privileges\\change_password.twig");
    }
}
