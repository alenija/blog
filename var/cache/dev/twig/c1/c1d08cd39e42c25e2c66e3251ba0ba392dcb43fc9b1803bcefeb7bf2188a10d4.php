<?php

/* SonataAdminBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_7c9569da58e5bcbb28f510f334e6763b272fc37e56045b670ad396d04a7ebeab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_datetime.html.twig", 12);
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
        $__internal_00e84686f7bcdba2f164c46702e4864b67da2ea2b4e7e390781e02e073c3afc3 = $this->env->getExtension("native_profiler");
        $__internal_00e84686f7bcdba2f164c46702e4864b67da2ea2b4e7e390781e02e073c3afc3->enter($__internal_00e84686f7bcdba2f164c46702e4864b67da2ea2b4e7e390781e02e073c3afc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00e84686f7bcdba2f164c46702e4864b67da2ea2b4e7e390781e02e073c3afc3->leave($__internal_00e84686f7bcdba2f164c46702e4864b67da2ea2b4e7e390781e02e073c3afc3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7be01e2d1cc6f36dfa66875b4eea1217d247c7df898a1ff4f57f8406b34d608c = $this->env->getExtension("native_profiler");
        $__internal_7be01e2d1cc6f36dfa66875b4eea1217d247c7df898a1ff4f57f8406b34d608c->enter($__internal_7be01e2d1cc6f36dfa66875b4eea1217d247c7df898a1ff4f57f8406b34d608c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_7be01e2d1cc6f36dfa66875b4eea1217d247c7df898a1ff4f57f8406b34d608c->leave($__internal_7be01e2d1cc6f36dfa66875b4eea1217d247c7df898a1ff4f57f8406b34d608c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
