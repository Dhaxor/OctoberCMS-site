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

/* /opt/lampp/htdocs/acme/themes/acme/pages/home.htm */
class __TwigTemplate_040b9db784cf0e7c5cbda43d16fa74455f1f63c27be4b23a809d5e67677a575c extends \Twig\Template
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
        echo "<div class=\"jumbotron text-center text-primary\">
    <h1>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 2), "site_name", [], "any", false, false, false, 2), "html", null, true);
        echo "</h1>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 3), "site_description", [], "any", false, false, false, 3), "html", null, true);
        echo "</p>
    <p>
        <a href=\"{'home'|page}\" class=\"btn btn-secondary\">Read more</a>
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/acme/themes/acme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron text-center text-primary\">
    <h1>{{this.theme.site_name}}</h1>
    <p>{{this.theme.site_description}}</p>
    <p>
        <a href=\"{'home'|page}\" class=\"btn btn-secondary\">Read more</a>
    </p>
</div>", "/opt/lampp/htdocs/acme/themes/acme/pages/home.htm", "");
    }
}
