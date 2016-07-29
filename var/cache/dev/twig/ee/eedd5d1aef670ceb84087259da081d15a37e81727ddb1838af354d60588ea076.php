<?php

/* BlogBundle:Blog:form.html.twig */
class __TwigTemplate_df57f7f5c6efc32e523a3fa3cf5c419cca9b8808fec9ce6d4a9e10835f98a4c3 extends Twig_Template
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
        $__internal_3ad01ac9b76a94e52e95f026b2538d6b2697b757833106666a2ad92a812c1d8d = $this->env->getExtension("native_profiler");
        $__internal_3ad01ac9b76a94e52e95f026b2538d6b2697b757833106666a2ad92a812c1d8d->enter($__internal_3ad01ac9b76a94e52e95f026b2538d6b2697b757833106666a2ad92a812c1d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:form.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_create"), "method" => "POST", "attr" => array("class" => "blogger")));
        // line 6
        echo "

";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "

    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<p>
    <input type=\"submit\" value=\"Submit\">
</p>";
        
        $__internal_3ad01ac9b76a94e52e95f026b2538d6b2697b757833106666a2ad92a812c1d8d->leave($__internal_3ad01ac9b76a94e52e95f026b2538d6b2697b757833106666a2ad92a812c1d8d_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  28 => 8,  24 => 6,  22 => 1,);
    }
}
/* {{ form_start(form, { 'action': path('BloggerBlogBundle_blog_create' ),*/
/*                         'method': 'POST',*/
/*                         'attr': {'class': 'blogger'}*/
/*                     }*/
/*             )*/
/* }}*/
/* */
/* {{ form_row(form.image) }}*/
/* */
/*     {{ form_widget(form) }}*/
/* <p>*/
/*     <input type="submit" value="Submit">*/
/* </p>*/
