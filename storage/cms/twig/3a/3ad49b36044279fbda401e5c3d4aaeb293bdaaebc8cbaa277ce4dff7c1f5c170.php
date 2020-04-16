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

/* /opt/lampp/htdocs/acme/themes/responsiv-clean/partials/site/footer.htm */
class __TwigTemplate_6a7ca8f4c2f905136177bf9290e1e9594f6818a794891c95482965991f44daa0 extends \Twig\Template
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
        echo "<div class=\"footer-inner\">
    <p class=\"muted credit\">
        &copy; 2013 - ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
        &mdash; Powered by <a href=\"#\">October CMS</a>
        using <a href=\"https://github.com/responsiv/clean-theme\">a clean theme</a>.
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/acme/themes/responsiv-clean/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer-inner\">
    <p class=\"muted credit\">
        &copy; 2013 - {{ \"now\"|date(\"Y\") }}
        &mdash; Powered by <a href=\"#\">October CMS</a>
        using <a href=\"https://github.com/responsiv/clean-theme\">a clean theme</a>.
    </p>
</div>", "/opt/lampp/htdocs/acme/themes/responsiv-clean/partials/site/footer.htm", "");
    }
}
