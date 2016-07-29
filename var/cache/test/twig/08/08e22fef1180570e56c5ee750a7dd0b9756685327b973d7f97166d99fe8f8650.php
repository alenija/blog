<?php

/* BlogBundle:Blog:show.html.twig */
class __TwigTemplate_409685f17c8d629aa91a66cec38175f5d73a4823ef3ddd901db1671a6c853ed1 extends Twig_Template
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
        $__internal_bcdf39e27a5e15f57ab73d4999e6bb0a1afd4443435783308760b3c0529c0b8c = $this->env->getExtension("native_profiler");
        $__internal_bcdf39e27a5e15f57ab73d4999e6bb0a1afd4443435783308760b3c0529c0b8c->enter($__internal_bcdf39e27a5e15f57ab73d4999e6bb0a1afd4443435783308760b3c0529c0b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcdf39e27a5e15f57ab73d4999e6bb0a1afd4443435783308760b3c0529c0b8c->leave($__internal_bcdf39e27a5e15f57ab73d4999e6bb0a1afd4443435783308760b3c0529c0b8c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c4c0df0a065f02602c3664fc999a15ca037dd7c322cc5f067f23d24930b53ca = $this->env->getExtension("native_profiler");
        $__internal_8c4c0df0a065f02602c3664fc999a15ca037dd7c322cc5f067f23d24930b53ca->enter($__internal_8c4c0df0a065f02602c3664fc999a15ca037dd7c322cc5f067f23d24930b53ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        
        $__internal_8c4c0df0a065f02602c3664fc999a15ca037dd7c322cc5f067f23d24930b53ca->leave($__internal_8c4c0df0a065f02602c3664fc999a15ca037dd7c322cc5f067f23d24930b53ca_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f90f9267c79f2a169002e9f3f5d1fd163c758f0b0ba2d9484061049b3d778c56 = $this->env->getExtension("native_profiler");
        $__internal_f90f9267c79f2a169002e9f3f5d1fd163c758f0b0ba2d9484061049b3d778c56->enter($__internal_f90f9267c79f2a169002e9f3f5d1fd163c758f0b0ba2d9484061049b3d778c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <article class=\"blog\">
        <header>
            <div class=\"date\"><time datetime=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "l, F j, Y"), "html", null, true);
        echo "</time></div>
            <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "</h2>
        </header>
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "image", array())))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo " image not found\" class=\"large\" />
        <div>
            <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "blog", array()), "html", null, true);
        echo "</p>
        </div>
    </article>

    <section class=\"comments\" id=\"comments\">
        <section class=\"previous-comments\">
            <h3>Comments</h3>
            ";
        // line 22
        $this->loadTemplate("BlogBundle:Comment:index.html.twig", "BlogBundle:Blog:show.html.twig", 22)->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        // line 23
        echo "        </section>

        <h3>Add Comment</h3>
        ";
        // line 26
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BlogBundle:Comment:new", array("blog_id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", array()))));
        echo "

    </section>

";
        
        $__internal_f90f9267c79f2a169002e9f3f5d1fd163c758f0b0ba2d9484061049b3d778c56->leave($__internal_f90f9267c79f2a169002e9f3f5d1fd163c758f0b0ba2d9484061049b3d778c56_prof);

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
        return array (  93 => 26,  88 => 23,  86 => 22,  76 => 15,  69 => 13,  64 => 11,  58 => 10,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
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
