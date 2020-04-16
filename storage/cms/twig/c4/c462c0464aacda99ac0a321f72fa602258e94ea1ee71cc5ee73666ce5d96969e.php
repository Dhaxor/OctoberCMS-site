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

/* /opt/lampp/htdocs/acme/themes/responsiv-clean/partials/home/posts.htm */
class __TwigTemplate_200c11d5cabd9c5b098a4962cb33a8d454cb72d5987ff6c3b4b61a9abe557c25 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "    <div class=\"home-post\">
        ";
            // line 3
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['post'] = $context["post"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/post"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/acme/themes/responsiv-clean/partials/home/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for post in posts %}
    <div class=\"home-post\">
        {% partial 'blog/post' post=post %}
    </div>
{% endfor %}", "/opt/lampp/htdocs/acme/themes/responsiv-clean/partials/home/posts.htm", "");
    }
}
