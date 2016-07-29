<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_112e09296665561a3cffe03d3558267c3996f38b2e81f377c8e53729f4360bd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f3dcaf9df022555121facf52b55da7594c63c56ff16df288976d74a3d5bf1d9 = $this->env->getExtension("native_profiler");
        $__internal_3f3dcaf9df022555121facf52b55da7594c63c56ff16df288976d74a3d5bf1d9->enter($__internal_3f3dcaf9df022555121facf52b55da7594c63c56ff16df288976d74a3d5bf1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f3dcaf9df022555121facf52b55da7594c63c56ff16df288976d74a3d5bf1d9->leave($__internal_3f3dcaf9df022555121facf52b55da7594c63c56ff16df288976d74a3d5bf1d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_623a66cb9c83ef8b0a8130ae819159e0805273e0a422724a2a543508befcabc6 = $this->env->getExtension("native_profiler");
        $__internal_623a66cb9c83ef8b0a8130ae819159e0805273e0a422724a2a543508befcabc6->enter($__internal_623a66cb9c83ef8b0a8130ae819159e0805273e0a422724a2a543508befcabc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_623a66cb9c83ef8b0a8130ae819159e0805273e0a422724a2a543508befcabc6->leave($__internal_623a66cb9c83ef8b0a8130ae819159e0805273e0a422724a2a543508befcabc6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
