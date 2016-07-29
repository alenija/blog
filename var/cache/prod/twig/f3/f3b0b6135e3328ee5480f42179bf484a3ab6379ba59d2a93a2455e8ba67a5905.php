<?php

/* BlogBundle:Blog:show.html.twig */
class __TwigTemplate_cb66d998a6b67d9ecfb4bbfc20b6f3ff6aa3ee75dabc1a37f108315c40e8c7f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Blog:show.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "title", array()), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
    <article class=\"blog\">
        <header>
            <div class=\"date\"><time datetime=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "created", array()), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "created", array()), "l, F j, Y"), "html", null, true);
        echo "</time></div>
            <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "title", array()), "html", null, true);
        echo "</h2>
        </header>
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "image", array())))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "title", array()), "html", null, true);
        echo " image not found\" class=\"large\" />
        <div>
            <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "blog", array()), "html", null, true);
        echo "</p>
        </div>
    </article>

    <section class=\"comments\" id=\"comments\">
        <section class=\"previous-comments\">
            <h3>Comments</h3>
            ";
        // line 22
        $this->loadTemplate("BlogBundle:Comment:index.html.twig", "BlogBundle:Blog:show.html.twig", 22)->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : null))));
        // line 23
        echo "        </section>

        <h3>Add Comment</h3>
        ";
        // line 26
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BlogBundle:Comment:new", array("blog_id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "id", array()))));
        echo "

    </section>

";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 26,  73 => 23,  71 => 22,  61 => 15,  54 => 13,  49 => 11,  43 => 10,  38 => 7,  35 => 6,  29 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resouces/views/Blog/show.html.twig #}*/
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}{{ blog.title }}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <article class="blog">*/
/*         <header>*/
/*             <div class="date"><time datetime="{{ blog.created|date('c') }}">{{ blog.created|date('l, F j, Y') }}</time></div>*/
/*             <h2>{{ blog.title }}</h2>*/
/*         </header>*/
/*         <img src="{{ asset(['images/', blog.image]|join) }}" alt="{{ blog.title }} image not found" class="large" />*/
/*         <div>*/
/*             <p>{{ blog.blog }}</p>*/
/*         </div>*/
/*     </article>*/
/* */
/*     <section class="comments" id="comments">*/
/*         <section class="previous-comments">*/
/*             <h3>Comments</h3>*/
/*             {% include 'BlogBundle:Comment:index.html.twig' with { 'comments': comments } %}*/
/*         </section>*/
/* */
/*         <h3>Add Comment</h3>*/
/*         {{ render(controller('BlogBundle:Comment:new',{ 'blog_id': blog.id })) }}*/
/* */
/*     </section>*/
/* */
/* {% endblock %}*/
