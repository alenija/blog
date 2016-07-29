<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a89ccd84e88118dcdc6e7fc0bbd951ed1f86349607156414fc2e02b4ca998906 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_7271e4d0fe32566ca548da089a8169867a39d49d4a3acc426a40c865a3d7ca3a = $this->env->getExtension("native_profiler");
        $__internal_7271e4d0fe32566ca548da089a8169867a39d49d4a3acc426a40c865a3d7ca3a->enter($__internal_7271e4d0fe32566ca548da089a8169867a39d49d4a3acc426a40c865a3d7ca3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7271e4d0fe32566ca548da089a8169867a39d49d4a3acc426a40c865a3d7ca3a->leave($__internal_7271e4d0fe32566ca548da089a8169867a39d49d4a3acc426a40c865a3d7ca3a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72efa30e50d3a8e5de184b5abd1450dd85212f32dd21e6568025a0a365faf036 = $this->env->getExtension("native_profiler");
        $__internal_72efa30e50d3a8e5de184b5abd1450dd85212f32dd21e6568025a0a365faf036->enter($__internal_72efa30e50d3a8e5de184b5abd1450dd85212f32dd21e6568025a0a365faf036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_72efa30e50d3a8e5de184b5abd1450dd85212f32dd21e6568025a0a365faf036->leave($__internal_72efa30e50d3a8e5de184b5abd1450dd85212f32dd21e6568025a0a365faf036_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
