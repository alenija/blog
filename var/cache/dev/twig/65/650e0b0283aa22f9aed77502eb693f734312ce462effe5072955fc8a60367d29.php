<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_d7782a8717958071c7f19b78968f5f05cad8c90185a68b8ff1ae64832c02a149 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_3a59f70205ac859e33b029afc66186edd20f2dddb97dd49b94f6dfde81e7d81e = $this->env->getExtension("native_profiler");
        $__internal_3a59f70205ac859e33b029afc66186edd20f2dddb97dd49b94f6dfde81e7d81e->enter($__internal_3a59f70205ac859e33b029afc66186edd20f2dddb97dd49b94f6dfde81e7d81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a59f70205ac859e33b029afc66186edd20f2dddb97dd49b94f6dfde81e7d81e->leave($__internal_3a59f70205ac859e33b029afc66186edd20f2dddb97dd49b94f6dfde81e7d81e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ec14fabc30403723630ce73219f4f4343d9871f646ee187581dabfd15b4aff8c = $this->env->getExtension("native_profiler");
        $__internal_ec14fabc30403723630ce73219f4f4343d9871f646ee187581dabfd15b4aff8c->enter($__internal_ec14fabc30403723630ce73219f4f4343d9871f646ee187581dabfd15b4aff8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_ec14fabc30403723630ce73219f4f4343d9871f646ee187581dabfd15b4aff8c->leave($__internal_ec14fabc30403723630ce73219f4f4343d9871f646ee187581dabfd15b4aff8c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
