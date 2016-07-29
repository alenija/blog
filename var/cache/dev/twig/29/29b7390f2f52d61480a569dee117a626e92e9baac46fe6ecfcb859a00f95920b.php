<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_13148b9091fca17201553fe6d170cadb4809f6f8ac616449e8a701bc827bfa36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_0f31a334a478f887a9d869ad2a8f389081aff38a2a24eaa5bd8042e159c93bb2 = $this->env->getExtension("native_profiler");
        $__internal_0f31a334a478f887a9d869ad2a8f389081aff38a2a24eaa5bd8042e159c93bb2->enter($__internal_0f31a334a478f887a9d869ad2a8f389081aff38a2a24eaa5bd8042e159c93bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f31a334a478f887a9d869ad2a8f389081aff38a2a24eaa5bd8042e159c93bb2->leave($__internal_0f31a334a478f887a9d869ad2a8f389081aff38a2a24eaa5bd8042e159c93bb2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_233b7f00346fb2ad417295eb218094087151725c8bda4408746d1585d3cf62b2 = $this->env->getExtension("native_profiler");
        $__internal_233b7f00346fb2ad417295eb218094087151725c8bda4408746d1585d3cf62b2->enter($__internal_233b7f00346fb2ad417295eb218094087151725c8bda4408746d1585d3cf62b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_233b7f00346fb2ad417295eb218094087151725c8bda4408746d1585d3cf62b2->leave($__internal_233b7f00346fb2ad417295eb218094087151725c8bda4408746d1585d3cf62b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
