<?php

/* BlogBundle:Comment:form.html.twig */
class __TwigTemplate_d649d3db5559b4e31ea6b3b12175712f33f57b25891fa6f502bb860f8196969c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3144164d36ba23d1ffdf3751f2f895681e5ce52db6bd714e6706a977ced11ef5 = $this->env->getExtension("native_profiler");
        $__internal_3144164d36ba23d1ffdf3751f2f895681e5ce52db6bd714e6706a977ced11ef5->enter($__internal_3144164d36ba23d1ffdf3751f2f895681e5ce52db6bd714e6706a977ced11ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Comment:form.html.twig"));

        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("BloggerBlogBundle_comment_create", array("blog_id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog", array()), "id", array()))), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "

    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<p>
    <input type=\"submit\" value=\"Submit\">
</p>";
        
        $__internal_3144164d36ba23d1ffdf3751f2f895681e5ce52db6bd714e6706a977ced11ef5->leave($__internal_3144164d36ba23d1ffdf3751f2f895681e5ce52db6bd714e6706a977ced11ef5_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Comment/form.html.twig #}*/
/* {{ form_start(form, { 'action': path('BloggerBlogBundle_comment_create' , { 'blog_id' : comment.blog.id }), 'method': 'POST', 'attr': {'class': 'blogger'} }) }}*/
/* */
/*     {{ form_widget(form) }}*/
/* <p>*/
/*     <input type="submit" value="Submit">*/
/* </p>*/
