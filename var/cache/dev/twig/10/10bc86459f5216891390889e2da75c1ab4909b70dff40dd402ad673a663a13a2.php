<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_49a875e9b9702ec952ec7be39bedaf8dd8654558fdd1c7109238ececb8da9e22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_c176c44e69b4ec4ab63b75c34e67368a5fa3b4afc58a7c59844cf151c70497c7 = $this->env->getExtension("native_profiler");
        $__internal_c176c44e69b4ec4ab63b75c34e67368a5fa3b4afc58a7c59844cf151c70497c7->enter($__internal_c176c44e69b4ec4ab63b75c34e67368a5fa3b4afc58a7c59844cf151c70497c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c176c44e69b4ec4ab63b75c34e67368a5fa3b4afc58a7c59844cf151c70497c7->leave($__internal_c176c44e69b4ec4ab63b75c34e67368a5fa3b4afc58a7c59844cf151c70497c7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a22cd7eece29fccba356e7ec5064c1498dec8ae949070fcbceb72eda678ff10c = $this->env->getExtension("native_profiler");
        $__internal_a22cd7eece29fccba356e7ec5064c1498dec8ae949070fcbceb72eda678ff10c->enter($__internal_a22cd7eece29fccba356e7ec5064c1498dec8ae949070fcbceb72eda678ff10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_a22cd7eece29fccba356e7ec5064c1498dec8ae949070fcbceb72eda678ff10c->leave($__internal_a22cd7eece29fccba356e7ec5064c1498dec8ae949070fcbceb72eda678ff10c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
