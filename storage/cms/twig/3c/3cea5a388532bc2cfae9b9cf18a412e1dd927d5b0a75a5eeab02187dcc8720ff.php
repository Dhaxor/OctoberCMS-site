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

/* /opt/lampp/htdocs/acme/themes/responsiv-clean/pages/contact.htm */
class __TwigTemplate_6c500c0def063bcaf4ba380a7a4542e3befa8edf5613e86011d510196a638630 extends \Twig\Template
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
        echo "<h1>Contact us</h1>

<form>

<div class=\"form-group\">
    
    <label for=\"name\">Name:</label>
 
     <input type=\"text\" class=\"form-control\" name=\"name\">
</div>

<div class=\"form-group\">
    
    <label for=\"Email\">Email:</label>
 
     <input type=\"email\" class=\"form-control\" name=\"name\">
</div>

<div class=\"form-group\">
    
    <label for=\"body\">Body:</label>
 
     <input type=\"text\" class=\"form-control\" name=\"name\">
</div>

<button type=\"submit\">Submit</button>

</form>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/acme/themes/responsiv-clean/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Contact us</h1>

<form>

<div class=\"form-group\">
    
    <label for=\"name\">Name:</label>
 
     <input type=\"text\" class=\"form-control\" name=\"name\">
</div>

<div class=\"form-group\">
    
    <label for=\"Email\">Email:</label>
 
     <input type=\"email\" class=\"form-control\" name=\"name\">
</div>

<div class=\"form-group\">
    
    <label for=\"body\">Body:</label>
 
     <input type=\"text\" class=\"form-control\" name=\"name\">
</div>

<button type=\"submit\">Submit</button>

</form>", "/opt/lampp/htdocs/acme/themes/responsiv-clean/pages/contact.htm", "");
    }
}
