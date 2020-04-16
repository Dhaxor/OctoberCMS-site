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

/* /opt/lampp/htdocs/acme/themes/responsiv-clean/partials/site/header.htm */
class __TwigTemplate_87b80e619d96363ac347c5696c0ef18e40daf4dd440744c4fc8c735b76ffa9bc extends \Twig\Template
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
        echo "<div class=\"row\">
    <div class=\"col-sm-9\">
        <h1 class=\"site-name\">
            <a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "site_name", [], "any", false, false, false, 4), "html", null, true);
        echo "</a>
        </h1>
        <p class=\"site-motto\">
            ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "site_motto", [], "any", false, false, false, 7), "html", null, true);
        echo "
        </p>
    </div>
    <div class=\"col-sm-3\">
        <button type=\"button\" class=\"sidebar-toggle\" onclick=\"toggleSidebar()\">
            <span class=\"icon-bars\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </span>
            <span class=\"menu-text\">Menu</span>
        </button>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/acme/themes/responsiv-clean/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-sm-9\">
        <h1 class=\"site-name\">
            <a href=\"{{ 'home'|page }}\">{{ this.theme.site_name }}</a>
        </h1>
        <p class=\"site-motto\">
            {{ this.theme.site_motto }}
        </p>
    </div>
    <div class=\"col-sm-3\">
        <button type=\"button\" class=\"sidebar-toggle\" onclick=\"toggleSidebar()\">
            <span class=\"icon-bars\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </span>
            <span class=\"menu-text\">Menu</span>
        </button>
    </div>
</div>", "/opt/lampp/htdocs/acme/themes/responsiv-clean/partials/site/header.htm", "");
    }
}
