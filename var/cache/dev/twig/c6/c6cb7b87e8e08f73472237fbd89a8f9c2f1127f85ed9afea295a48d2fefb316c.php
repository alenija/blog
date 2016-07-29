<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_ef402b8348eed47e64ffc81d259d367c56e495ced5b0b9666fff344d3066e1ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25d672f03a7ca41ab437014947d8e4ad8fd70f38f69962c2a4dad528bb54686e = $this->env->getExtension("native_profiler");
        $__internal_25d672f03a7ca41ab437014947d8e4ad8fd70f38f69962c2a4dad528bb54686e->enter($__internal_25d672f03a7ca41ab437014947d8e4ad8fd70f38f69962c2a4dad528bb54686e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25d672f03a7ca41ab437014947d8e4ad8fd70f38f69962c2a4dad528bb54686e->leave($__internal_25d672f03a7ca41ab437014947d8e4ad8fd70f38f69962c2a4dad528bb54686e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d8969ed23573a6816bf608dfc432bbd25507fa734c7d653d3d26ee9825edc275 = $this->env->getExtension("native_profiler");
        $__internal_d8969ed23573a6816bf608dfc432bbd25507fa734c7d653d3d26ee9825edc275->enter($__internal_d8969ed23573a6816bf608dfc432bbd25507fa734c7d653d3d26ee9825edc275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_d8969ed23573a6816bf608dfc432bbd25507fa734c7d653d3d26ee9825edc275->leave($__internal_d8969ed23573a6816bf608dfc432bbd25507fa734c7d653d3d26ee9825edc275_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
