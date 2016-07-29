<?php

/* BlogBundle:Page:index.html.twig */
class __TwigTemplate_dfd6bbdf8b9a7a259ae5d2c364e83b468a1c6a889adce221b20512dc0dae1c40 extends Twig_Template
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
        $__internal_2e4673b7da1444ef56763d4c3e394c89315a433e581136e921b282dda2f20e09 = $this->env->getExtension("native_profiler");
        $__internal_2e4673b7da1444ef56763d4c3e394c89315a433e581136e921b282dda2f20e09->enter($__internal_2e4673b7da1444ef56763d4c3e394c89315a433e581136e921b282dda2f20e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e4673b7da1444ef56763d4c3e394c89315a433e581136e921b282dda2f20e09->leave($__internal_2e4673b7da1444ef56763d4c3e394c89315a433e581136e921b282dda2f20e09_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4d7abe077074fbd0a7215c534c8868d1a89189ede0012dc2b5853a3f4a204cc = $this->env->getExtension("native_profiler");
        $__internal_d4d7abe077074fbd0a7215c534c8868d1a89189ede0012dc2b5853a3f4a204cc->enter($__internal_d4d7abe077074fbd0a7215c534c8868d1a89189ede0012dc2b5853a3f4a204cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "items", array()));
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
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
    </div>

    ";
        // line 36
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 37
            echo "        <div>
            <p>New article for blog: <a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_create");
            echo "\"> MyBlog </a></p>
        </div>
    ";
        }
        // line 41
        echo "
";
        
        $__internal_d4d7abe077074fbd0a7215c534c8868d1a89189ede0012dc2b5853a3f4a204cc->leave($__internal_d4d7abe077074fbd0a7215c534c8868d1a89189ede0012dc2b5853a3f4a204cc_prof);

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
        return array (  136 => 41,  130 => 38,  127 => 37,  125 => 36,  119 => 33,  115 => 31,  109 => 30,  100 => 26,  94 => 25,  91 => 24,  89 => 23,  82 => 20,  75 => 16,  71 => 15,  66 => 13,  58 => 10,  51 => 8,  48 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
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
/*     {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*         <div>*/
/*             <p>New article for blog: <a href="{{ path('BloggerBlogBundle_blog_create') }}"> MyBlog </a></p>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
