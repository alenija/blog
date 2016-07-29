<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_4fa7d8a2e7b4d69cd82d24b03034d02fa7fc8aee790ddf70adb59dcbcfe49e52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_a3b0f79cd73f09128b69609d6e1cebe657138a5208292a8cc716a34149ff7230 = $this->env->getExtension("native_profiler");
        $__internal_a3b0f79cd73f09128b69609d6e1cebe657138a5208292a8cc716a34149ff7230->enter($__internal_a3b0f79cd73f09128b69609d6e1cebe657138a5208292a8cc716a34149ff7230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3b0f79cd73f09128b69609d6e1cebe657138a5208292a8cc716a34149ff7230->leave($__internal_a3b0f79cd73f09128b69609d6e1cebe657138a5208292a8cc716a34149ff7230_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0064e27dc1f16985c5d1cf63dd2d2f7c2eeb3918b9853610241c05cdc4b67e4c = $this->env->getExtension("native_profiler");
        $__internal_0064e27dc1f16985c5d1cf63dd2d2f7c2eeb3918b9853610241c05cdc4b67e4c->enter($__internal_0064e27dc1f16985c5d1cf63dd2d2f7c2eeb3918b9853610241c05cdc4b67e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_0064e27dc1f16985c5d1cf63dd2d2f7c2eeb3918b9853610241c05cdc4b67e4c->leave($__internal_0064e27dc1f16985c5d1cf63dd2d2f7c2eeb3918b9853610241c05cdc4b67e4c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
