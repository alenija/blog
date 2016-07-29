<?php

/* BlogBundle:Comment:form.html.twig */
class __TwigTemplate_eed0b708c2c0bcea6c19b09de41c48f048cb5fd57a81e159af426c3dcb077cd6 extends Twig_Template
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
        $__internal_10c38ef8ef68730962d8933be1c216e876fd2a5465ce6e8162e8a0b0a85caddc = $this->env->getExtension("native_profiler");
        $__internal_10c38ef8ef68730962d8933be1c216e876fd2a5465ce6e8162e8a0b0a85caddc->enter($__internal_10c38ef8ef68730962d8933be1c216e876fd2a5465ce6e8162e8a0b0a85caddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Comment:form.html.twig"));

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
        
        $__internal_10c38ef8ef68730962d8933be1c216e876fd2a5465ce6e8162e8a0b0a85caddc->leave($__internal_10c38ef8ef68730962d8933be1c216e876fd2a5465ce6e8162e8a0b0a85caddc_prof);

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
