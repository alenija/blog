<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_af1a3d1ca643ff0c44ae876d47113edea32d29f79c4b62b94ed033cd8713019a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_a9fd1b9ee2f89ab862b5700be7169375e9fa5cbeeec4d8f7ebb15bc51ef4abeb = $this->env->getExtension("native_profiler");
        $__internal_a9fd1b9ee2f89ab862b5700be7169375e9fa5cbeeec4d8f7ebb15bc51ef4abeb->enter($__internal_a9fd1b9ee2f89ab862b5700be7169375e9fa5cbeeec4d8f7ebb15bc51ef4abeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9fd1b9ee2f89ab862b5700be7169375e9fa5cbeeec4d8f7ebb15bc51ef4abeb->leave($__internal_a9fd1b9ee2f89ab862b5700be7169375e9fa5cbeeec4d8f7ebb15bc51ef4abeb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2718aa6e792c5ef1fb77b816a6f7980103b4e5bcebdf4b1b06531805f34a8bb0 = $this->env->getExtension("native_profiler");
        $__internal_2718aa6e792c5ef1fb77b816a6f7980103b4e5bcebdf4b1b06531805f34a8bb0->enter($__internal_2718aa6e792c5ef1fb77b816a6f7980103b4e5bcebdf4b1b06531805f34a8bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_2718aa6e792c5ef1fb77b816a6f7980103b4e5bcebdf4b1b06531805f34a8bb0->leave($__internal_2718aa6e792c5ef1fb77b816a6f7980103b4e5bcebdf4b1b06531805f34a8bb0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
