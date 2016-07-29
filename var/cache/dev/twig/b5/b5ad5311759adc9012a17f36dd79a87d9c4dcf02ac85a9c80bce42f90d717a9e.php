<?php

/* SonataAdminBundle:CRUD:list_html.html.twig */
class __TwigTemplate_0f5f71e95d2f0480ea4c9a50b0c4ea223819998e7608d5771f53df2412e16b9f extends Twig_Template
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
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_html.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3fd1e00da96db08062a7732213e7c1639d1b0d0f8b887c7e4c6bf0835b93bcf = $this->env->getExtension("native_profiler");
        $__internal_b3fd1e00da96db08062a7732213e7c1639d1b0d0f8b887c7e4c6bf0835b93bcf->enter($__internal_b3fd1e00da96db08062a7732213e7c1639d1b0d0f8b887c7e4c6bf0835b93bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_html.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3fd1e00da96db08062a7732213e7c1639d1b0d0f8b887c7e4c6bf0835b93bcf->leave($__internal_b3fd1e00da96db08062a7732213e7c1639d1b0d0f8b887c7e4c6bf0835b93bcf_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_e55c6592e56de8c5e77242d444f7244086fb335c0f034675798219d08ee0d8e2 = $this->env->getExtension("native_profiler");
        $__internal_e55c6592e56de8c5e77242d444f7244086fb335c0f034675798219d08ee0d8e2->enter($__internal_e55c6592e56de8c5e77242d444f7244086fb335c0f034675798219d08ee0d8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "truncate", array(), "any", true, true)) {
                // line 8
                $context["truncate"] = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "truncate", array());
                // line 9
                echo "            ";
                $context["length"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "length", array()), 30)) : (30));
                // line 10
                echo "            ";
                $context["preserve"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "preserve", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "preserve", array()), false)) : (false));
                // line 11
                echo "            ";
                $context["separator"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "separator", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "separator", array()), "...")) : ("..."));
                // line 12
                echo "            ";
                echo twig_truncate_filter($this->env, strip_tags((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), (isset($context["length"]) ? $context["length"] : $this->getContext($context, "length")), (isset($context["preserve"]) ? $context["preserve"] : $this->getContext($context, "preserve")), (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")));
            } else {
                // line 14
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "strip", array(), "any", true, true)) {
                    // line 15
                    $context["value"] = strip_tags((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                }
                // line 17
                echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                echo "
        ";
            }
            // line 19
            echo "    ";
        }
        
        $__internal_e55c6592e56de8c5e77242d444f7244086fb335c0f034675798219d08ee0d8e2->leave($__internal_e55c6592e56de8c5e77242d444f7244086fb335c0f034675798219d08ee0d8e2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  67 => 17,  64 => 15,  62 => 14,  58 => 12,  55 => 11,  52 => 10,  49 => 9,  47 => 8,  45 => 7,  41 => 5,  39 => 4,  33 => 3,  18 => 1,);
    }
}
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {% else %}*/
/*         {%- if field_description.options.truncate is defined -%}*/
/*             {% set truncate = field_description.options.truncate %}*/
/*             {% set length = truncate.length|default(30) %}*/
/*             {% set preserve = truncate.preserve|default(false) %}*/
/*             {% set separator = truncate.separator|default('...') %}*/
/*             {{ value|striptags|truncate(length, preserve, separator)|raw }}*/
/*         {%- else -%}*/
/*             {%- if field_description.options.strip is defined -%}*/
/*                 {% set value = value|striptags %}*/
/*             {%- endif -%}*/
/*             {{ value|raw }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
