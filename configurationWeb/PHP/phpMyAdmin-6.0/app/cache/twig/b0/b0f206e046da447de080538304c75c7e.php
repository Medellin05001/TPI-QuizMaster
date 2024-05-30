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

/* sql/bookmark.twig */
class __TwigTemplate_521dd6901778d21cb875b88d655a0461 extends Template
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
        echo "<form action=\"";
        echo $this->env->getFunction('url')->getCallable()("/sql");
        echo "\" method=\"post\" class=\"card bookmarkQueryForm d-print-none\"
  onsubmit=\"return ! Functions.emptyCheckTheField(this, 'bkm_fields[bkm_label]');\">
  ";
        // line 3
        echo $this->env->getFunction('get_hidden_inputs')->getCallable()();
        echo "
  <input type=\"hidden\" name=\"db\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["db"] ?? null), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["goto"] ?? null), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"bkm_fields[bkm_database]\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["db"] ?? null), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"bkm_fields[bkm_user]\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"bkm_fields[bkm_sql_query]\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["sql_query"] ?? null), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"store_bkm\" value=\"1\">

  <div class=\"card-header\">";
        // line 11
        echo $this->env->getFunction('get_icon')->getCallable()("b_bookmark", _gettext("Bookmark this SQL query"), true);
        echo "</div>
  <div class=\"card-body\">
    <div class=\"mb-3\">
      <label class=\"form-label\" for=\"bookmarkLabelField\">";
echo _gettext("Bookmark label:");
        // line 14
        echo "</label>
      <input class=\"form-control\" id=\"bookmarkLabelField\" type=\"text\" name=\"bkm_fields[bkm_label]\" value=\"\">
    </div>

    ";
        // line 18
        if ((array_key_exists("allow_shared_bookmarks", $context) && ($context["allow_shared_bookmarks"] ?? null))) {
            // line 19
            echo "      <div class=\"form-check form-switch\">
        <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"bookmarkAllUsersCheckbox\" name=\"bkm_all_users\" value=\"true\">
        <label class=\"form-check-label\" for=\"bookmarkAllUsersCheckbox\">";
echo _gettext("Let every user access this bookmark");
            // line 21
            echo "</label>
      </div>
    ";
        }
        // line 24
        echo "  </div>
  <div class=\"card-footer\">
    <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
echo _gettext("Create new bookmark");
        // line 26
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
        return "sql/bookmark.twig";
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
        return array (  99 => 26,  94 => 24,  89 => 21,  84 => 19,  82 => 18,  76 => 14,  69 => 11,  63 => 8,  59 => 7,  55 => 6,  51 => 5,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sql/bookmark.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\sql\\bookmark.twig");
    }
}
