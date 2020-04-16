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

/* /opt/lampp/htdocs/acme/themes/acme/pages/blog/post.htm */
class __TwigTemplate_31bd8d7bc759e69bd2617099a43abad7f4772245e3c5b976e08a86846ed01969 extends \Twig\Template
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
        $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 1), "first", [], "any", false, false, false, 1);
        // line 2
        $context["nextPost"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "nextPost", [], "any", false, false, false, 2);
        // line 3
        $context["lastPost"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "previousPost", [], "any", false, false, false, 3);
        // line 4
        echo "
<div class=\"post-single\">
    <article>
        ";
        // line 7
        if (($context["image"] ?? null)) {
            // line 8
            echo "            <div class=\"post-image\">
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "path", [], "any", false, false, false, 9), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 9), "html", null, true);
            echo "\" />
            </div>
        ";
        }
        // line 12
        echo "        <header class=\"post-title\">
            <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
        </header>

        <div class=\"post-content\">
            ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 17);
        echo "
        </div>

        <footer>
            <span class=\"published\"><i class=\"icon icon-calendar\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 21), "M d, Y"), "html", null, true);
        echo "</span>
            ";
        // line 23
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 23), "count", [], "any", false, false, false, 23)) {
            echo " in
                <span class=\"category\">
                    <i class=\"icon icon-folder-open\"></i>
                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 26));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 27
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 27), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 27)) {
                    echo ", ";
                }
                // line 28
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                </span>
            ";
        }
        // line 31
        echo "        </footer>
    </article>
    <nav class=\"post-links\">
        ";
        // line 34
        if (($context["lastPost"] ?? null)) {
            // line 35
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastPost"] ?? null), "url", [], "any", false, false, false, 35), "html", null, true);
            echo "\" class=\"link-previous\">
                <p>Previous</p>
                <span>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastPost"] ?? null), "title", [], "any", false, false, false, 37), "html", null, true);
            echo "</span>
            </a>
        ";
        }
        // line 40
        echo "        ";
        if (($context["nextPost"] ?? null)) {
            // line 41
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["nextPost"] ?? null), "url", [], "any", false, false, false, 41), "html", null, true);
            echo "\" class=\"link-next\">
                <p>Next</p>
                <span>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["nextPost"] ?? null), "title", [], "any", false, false, false, 43), "html", null, true);
            echo "</span>
            </a>
        ";
        }
        // line 46
        echo "    </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/acme/themes/acme/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 46,  161 => 43,  155 => 41,  152 => 40,  146 => 37,  140 => 35,  138 => 34,  133 => 31,  129 => 29,  115 => 28,  106 => 27,  89 => 26,  82 => 23,  78 => 21,  71 => 17,  64 => 13,  61 => 12,  53 => 9,  50 => 8,  48 => 7,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set image = post.featured_images.first %}
{% set nextPost = blogPost.nextPost %}
{% set lastPost = blogPost.previousPost %}

<div class=\"post-single\">
    <article>
        {% if image %}
            <div class=\"post-image\">
                <img src=\"{{ image.path }}\" alt=\"{{ post.title }}\" />
            </div>
        {% endif %}
        <header class=\"post-title\">
            <h1>{{ post.title }}</h1>
        </header>

        <div class=\"post-content\">
            {{ post.content_html|raw }}
        </div>

        <footer>
            <span class=\"published\"><i class=\"icon icon-calendar\"></i> {{ post.published_at|date('M d, Y') }}</span>
            {# <span class=\"author\"><i class=\"icon icon-user\"></i> {{ post.author.full_name }}</span> #}
            {% if post.categories.count %} in
                <span class=\"category\">
                    <i class=\"icon icon-folder-open\"></i>
                    {% for category in post.categories %}
                        <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                    {% endfor %}
                </span>
            {% endif %}
        </footer>
    </article>
    <nav class=\"post-links\">
        {% if lastPost %}
            <a href=\"{{ lastPost.url }}\" class=\"link-previous\">
                <p>Previous</p>
                <span>{{ lastPost.title }}</span>
            </a>
        {% endif %}
        {% if nextPost %}
            <a href=\"{{ nextPost.url }}\" class=\"link-next\">
                <p>Next</p>
                <span>{{ nextPost.title }}</span>
            </a>
        {% endif %}
    </nav>
</div>", "/opt/lampp/htdocs/acme/themes/acme/pages/blog/post.htm", "");
    }
}
