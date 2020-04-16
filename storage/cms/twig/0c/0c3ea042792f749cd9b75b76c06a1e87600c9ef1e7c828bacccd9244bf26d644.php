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

/* /opt/lampp/htdocs/acme/themes/acme/partials/site/header.htm */
class __TwigTemplate_306d8459b842a79227986288ebf73f74dea3e5eaea6c07e4f79e1599d3c7eecb extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 2), "site_name", [], "any", false, false, false, 2), "html", null, true);
        echo "</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
        </li>
      </ul>
    </div>
  </nav>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/acme/themes/acme/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  62 => 15,  56 => 12,  50 => 9,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">{{this.theme.site_name}}</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{'home'|page}}\">Home <span class=\"sr-only\">(current)</span></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{'about'|page}}\">About</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{'blog'|page}}\">Blog</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{'contact'|page}}\">Contact</a>
        </li>
      </ul>
    </div>
  </nav>", "/opt/lampp/htdocs/acme/themes/acme/partials/site/header.htm", "");
    }
}
