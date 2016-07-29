<?php

/* BlogBundle:Comment:create.html.twig */
class __TwigTemplate_918c6383c96e01f7beb426b0943cf0889ae695598292c3fadf3293a819004d8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Comment:create.html.twig", 1);
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
        $__internal_c18ad24b53b44d715045ab9af69475853213cae74fad83f450d43a799c64d296 = $this->env->getExtension("native_profiler");
        $__internal_c18ad24b53b44d715045ab9af69475853213cae74fad83f450d43a799c64d296->enter($__internal_c18ad24b53b44d715045ab9af69475853213cae74fad83f450d43a799c64d296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c18ad24b53b44d715045ab9af69475853213cae74fad83f450d43a799c64d296->leave($__internal_c18ad24b53b44d715045ab9af69475853213cae74fad83f450d43a799c64d296_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_02e5e56083e5374f0308b38aff6257d536ee5889ab2944e3db3f50c666bbb8f3 = $this->env->getExtension("native_profiler");
        $__internal_02e5e56083e5374f0308b38aff6257d536ee5889ab2944e3db3f50c666bbb8f3->enter($__internal_02e5e56083e5374f0308b38aff6257d536ee5889ab2944e3db3f50c666bbb8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add Comment";
        
        $__internal_02e5e56083e5374f0308b38aff6257d536ee5889ab2944e3db3f50c666bbb8f3->leave($__internal_02e5e56083e5374f0308b38aff6257d536ee5889ab2944e3db3f50c666bbb8f3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cf3e999544912e078641641e88d4420ea3ac83c52b32951b5d7326ca4602487 = $this->env->getExtension("native_profiler");
        $__internal_3cf3e999544912e078641641e88d4420ea3ac83c52b32951b5d7326ca4602487->enter($__internal_3cf3e999544912e078641641e88d4420ea3ac83c52b32951b5d7326ca4602487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Add comment for blog post \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog", array()), "title", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 7
        $this->loadTemplate("BlogBundle:Comment:form.html.twig", "BlogBundle:Comment:create.html.twig", 7)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        
        $__internal_3cf3e999544912e078641641e88d4420ea3ac83c52b32951b5d7326ca4602487->leave($__internal_3cf3e999544912e078641641e88d4420ea3ac83c52b32951b5d7326ca4602487_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Comment:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Add Comment{% endblock%}*/
/* */
/* {% block body %}*/
/*     <h1>Add comment for blog post "{{ comment.blog.title }}"</h1>*/
/*     {% include 'BlogBundle:Comment:form.html.twig' with { 'form': form } %}*/
/* {% endblock %}*/
