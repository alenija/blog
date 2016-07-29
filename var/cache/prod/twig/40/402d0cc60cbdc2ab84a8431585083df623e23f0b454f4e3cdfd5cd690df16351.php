<?php

/* BlogBundle:Page:index.html.twig */
class __TwigTemplate_8f5e5c44702b688405eb3ead026bc575ca61ea9b4aa14d5f9c577a6fda815b45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Page:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "items", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog_template"]) {
            // line 7
            echo "        <article class=\"blog\">
            <div class=\"date\"><time datetime=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog_template"], "created", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog_template"], "created", array()), "l, F j, Y"), "html", null, true);
            echo "</time></div>
            <header>
                <h2><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog_template"], "id", array()), "slug" => $this->getAttribute($context["blog_template"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog_template"], "title", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute($context["blog_template"], "image", array())))), "html", null, true);
            echo "\" />
            <div class=\"snippet\">
                <p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog_template"], "blog", array()), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog_template"], "id", array()), "slug" => $this->getAttribute($context["blog_template"], "slug", array()))), "html", null, true);
            echo "\">Continue reading...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comments: <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog_template"], "id", array()), "slug" => $this->getAttribute($context["blog_template"], "slug", array()))), "html", null, true);
            echo "#comments\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog_template"], "commentsCount", array()), "html", null, true);
            echo "</a></p>

                ";
            // line 23
            echo "                ";
            // line 24
            echo "
                <p>Posted by <span class=\"highlight\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog_template"], "author", array()), "html", null, true);
            echo "</span> at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog_template"], "created", array()), "h:iA"), "html", null, true);
            echo "</p>
                <p>Tags: <span class=\"highlight\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog_template"], "tags", array()), "html", null, true);
            echo "</span></p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    <div class=\"navigation\">
        ";
        // line 33
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 33,  106 => 31,  100 => 30,  91 => 26,  85 => 25,  82 => 24,  80 => 23,  73 => 20,  66 => 16,  62 => 15,  57 => 13,  49 => 10,  42 => 8,  39 => 7,  34 => 6,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Page/index.html.twig #}*/
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     {% for blog_template in pagination.items %}*/
/*         <article class="blog">*/
/*             <div class="date"><time datetime="{{ blog_template.created|date('c') }}">{{ blog_template.created|date('l, F j, Y') }}</time></div>*/
/*             <header>*/
/*                 <h2><a href="{{ path('BloggerBlogBundle_blog_show', { 'id': blog_template.id, 'slug': blog_template.slug }) }}">{{ blog_template.title }}</a></h2>*/
/*             </header>*/
/* */
/*             <img src="{{ asset(['images/', blog_template.image]|join) }}" />*/
/*             <div class="snippet">*/
/*                 <p>{{ blog_template.blog }}</p>*/
/*                 <p class="continue"><a href="{{ path('BloggerBlogBundle_blog_show', { 'id': blog_template.id, 'slug': blog_template.slug }) }}">Continue reading...</a></p>*/
/*             </div>*/
/* */
/*             <footer class="meta">*/
/*                 <p>Comments: <a href="{{ path('BloggerBlogBundle_blog_show', { 'id': blog_template.id, 'slug': blog_template.slug }) }}#comments">{{ blog_template.commentsCount }}</a></p>*/
/* */
/*                 {#example from the article on Habrahabr(it is working)#}*/
/*                 {#<p>Comments: {{ blog_template.comments|length }}</p>#}*/
/* */
/*                 <p>Posted by <span class="highlight">{{blog_template.author}}</span> at {{ blog_template.created|date('h:iA') }}</p>*/
/*                 <p>Tags: <span class="highlight">{{ blog_template.tags }}</span></p>*/
/*             </footer>*/
/*         </article>*/
/*     {% else %}*/
/*     {% endfor %}*/
/* */
/*     <div class="navigation">*/
/*         {{ knp_pagination_render(pagination) }}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
