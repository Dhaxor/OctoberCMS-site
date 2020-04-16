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

/* /opt/lampp/htdocs/acme/themes/acme/pages/about.htm */
class __TwigTemplate_634843ab0eb3927265c80e3db38677c5750fb371993391e7f9beca69d3d575d2 extends \Twig\Template
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
        echo "<h1>About us</h1>

<p>This is the about Page</p>

<hr>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/acme/themes/acme/pages/about.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>About us</h1>

<p>This is the about Page</p>

<hr>", "/opt/lampp/htdocs/acme/themes/acme/pages/about.htm", "");
    }
}
