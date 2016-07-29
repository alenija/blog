<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_228286bcfe4f0e6385437949a5284b5f3fd53b70d78fa76d9f2f9b3b9cf38bfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a2330749d10ad3c5e24a574ed11b2d2d3c496aa82743d5b8c022f427ad16b29 = $this->env->getExtension("native_profiler");
        $__internal_0a2330749d10ad3c5e24a574ed11b2d2d3c496aa82743d5b8c022f427ad16b29->enter($__internal_0a2330749d10ad3c5e24a574ed11b2d2d3c496aa82743d5b8c022f427ad16b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_0a2330749d10ad3c5e24a574ed11b2d2d3c496aa82743d5b8c022f427ad16b29->leave($__internal_0a2330749d10ad3c5e24a574ed11b2d2d3c496aa82743d5b8c022f427ad16b29_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_e15d1044d57cd42ba420a8f202dd278559e508508a5b8049e4f4d86fe74f6b4e = $this->env->getExtension("native_profiler");
        $__internal_e15d1044d57cd42ba420a8f202dd278559e508508a5b8049e4f4d86fe74f6b4e->enter($__internal_e15d1044d57cd42ba420a8f202dd278559e508508a5b8049e4f4d86fe74f6b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_e15d1044d57cd42ba420a8f202dd278559e508508a5b8049e4f4d86fe74f6b4e->leave($__internal_e15d1044d57cd42ba420a8f202dd278559e508508a5b8049e4f4d86fe74f6b4e_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_6b7c3069f3d80969fa55d4f5cb9c5a43ee24731956582cff13a891b76f59ecad = $this->env->getExtension("native_profiler");
        $__internal_6b7c3069f3d80969fa55d4f5cb9c5a43ee24731956582cff13a891b76f59ecad->enter($__internal_6b7c3069f3d80969fa55d4f5cb9c5a43ee24731956582cff13a891b76f59ecad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_6b7c3069f3d80969fa55d4f5cb9c5a43ee24731956582cff13a891b76f59ecad->leave($__internal_6b7c3069f3d80969fa55d4f5cb9c5a43ee24731956582cff13a891b76f59ecad_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
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
/* */
/* <div>*/
/*     {% block label %}*/
/*         {% if filter.fielddescription.options.name is defined %}*/
/*             {{ form_label(filter_form, filter.fielddescription.options.name) }}*/
/*         {% else %}*/
/*             {{ form_label(filter_form) }}*/
/*         {% endif %}*/
/*         <br>*/
/*     {% endblock %}*/
/* */
/*     <div class="sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(filter_form) }}{% endblock %}*/
/*     </div>*/
/* </div>*/
/* */
