<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_47a57265a62f97038519b56b68f77e4eb12dea8f328be53b33b165c84f88a4a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7e14fa5822c820a4b71e3e0889010191b1177858348e4e3f33693436dc049eb = $this->env->getExtension("native_profiler");
        $__internal_f7e14fa5822c820a4b71e3e0889010191b1177858348e4e3f33693436dc049eb->enter($__internal_f7e14fa5822c820a4b71e3e0889010191b1177858348e4e3f33693436dc049eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7e14fa5822c820a4b71e3e0889010191b1177858348e4e3f33693436dc049eb->leave($__internal_f7e14fa5822c820a4b71e3e0889010191b1177858348e4e3f33693436dc049eb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b84db0979e2fb7ea902a24eb752c72e61cba50f3e57a3b57c5982c3a237fb54d = $this->env->getExtension("native_profiler");
        $__internal_b84db0979e2fb7ea902a24eb752c72e61cba50f3e57a3b57c5982c3a237fb54d->enter($__internal_b84db0979e2fb7ea902a24eb752c72e61cba50f3e57a3b57c5982c3a237fb54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_b84db0979e2fb7ea902a24eb752c72e61cba50f3e57a3b57c5982c3a237fb54d->leave($__internal_b84db0979e2fb7ea902a24eb752c72e61cba50f3e57a3b57c5982c3a237fb54d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field%}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date('F j, Y') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
