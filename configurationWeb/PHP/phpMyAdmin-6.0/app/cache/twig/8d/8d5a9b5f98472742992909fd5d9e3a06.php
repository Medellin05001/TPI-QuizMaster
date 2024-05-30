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

/* table/insert/get_html_for_insert_edit_form_header.twig */
class __TwigTemplate_9e3e557d3c49b96c3c6154c1b5189201 extends Template
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
        echo "<form id=\"insertForm\" class=\"lock-page";
        echo (((($context["has_blob_field"] ?? null) && ($context["is_upload"] ?? null))) ? (" disableAjax") : (""));
        echo "\" method=\"post\" action=\"";
        echo $this->env->getFunction('url')->getCallable()("/table/replace");
        echo "\" name=\"insertForm\"";
        echo ((($context["is_upload"] ?? null)) ? (" enctype=\"multipart/form-data\"") : (""));
        echo ">
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/insert/get_html_for_insert_edit_form_header.twig";
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
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/insert/get_html_for_insert_edit_form_header.twig", "C:\\Users\\pz24gvr\\Desktop\\PHP\\phpMyAdmin-6.0\\resources\\templates\\table\\insert\\get_html_for_insert_edit_form_header.twig");
    }
}
