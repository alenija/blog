<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_8908696d3948471b442c52c05411fc5c8bd264543986f8bc4e84c976ef22be87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_68d787088ddfd165099c4f2ac23f62b98760e7e9098dbd5809d7847241cf306b = $this->env->getExtension("native_profiler");
        $__internal_68d787088ddfd165099c4f2ac23f62b98760e7e9098dbd5809d7847241cf306b->enter($__internal_68d787088ddfd165099c4f2ac23f62b98760e7e9098dbd5809d7847241cf306b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68d787088ddfd165099c4f2ac23f62b98760e7e9098dbd5809d7847241cf306b->leave($__internal_68d787088ddfd165099c4f2ac23f62b98760e7e9098dbd5809d7847241cf306b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6bb0170ac2c5dff76eba85e364e20ccee84c6bbb5d462895dd1e8c08dfdca26f = $this->env->getExtension("native_profiler");
        $__internal_6bb0170ac2c5dff76eba85e364e20ccee84c6bbb5d462895dd1e8c08dfdca26f->enter($__internal_6bb0170ac2c5dff76eba85e364e20ccee84c6bbb5d462895dd1e8c08dfdca26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6bb0170ac2c5dff76eba85e364e20ccee84c6bbb5d462895dd1e8c08dfdca26f->leave($__internal_6bb0170ac2c5dff76eba85e364e20ccee84c6bbb5d462895dd1e8c08dfdca26f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
