<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_8b158440f81bf8a5368e25c3485b269abfee559dd2344090a4940c8ad7560c0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf33ba8f421c588c6c5f09c231d20539e7a3382d0f38d3fdb1a80a0e06323390 = $this->env->getExtension("native_profiler");
        $__internal_cf33ba8f421c588c6c5f09c231d20539e7a3382d0f38d3fdb1a80a0e06323390->enter($__internal_cf33ba8f421c588c6c5f09c231d20539e7a3382d0f38d3fdb1a80a0e06323390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_cf33ba8f421c588c6c5f09c231d20539e7a3382d0f38d3fdb1a80a0e06323390->leave($__internal_cf33ba8f421c588c6c5f09c231d20539e7a3382d0f38d3fdb1a80a0e06323390_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4f06e586438def06a239f5a34cec5e5871f9258905452703cee499076dfcb6e4 = $this->env->getExtension("native_profiler");
        $__internal_4f06e586438def06a239f5a34cec5e5871f9258905452703cee499076dfcb6e4->enter($__internal_4f06e586438def06a239f5a34cec5e5871f9258905452703cee499076dfcb6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_4f06e586438def06a239f5a34cec5e5871f9258905452703cee499076dfcb6e4->leave($__internal_4f06e586438def06a239f5a34cec5e5871f9258905452703cee499076dfcb6e4_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_97f8b69da7da8904947efb5961d797d9506fd140d1299e71aa80dab5bb1df355 = $this->env->getExtension("native_profiler");
        $__internal_97f8b69da7da8904947efb5961d797d9506fd140d1299e71aa80dab5bb1df355->enter($__internal_97f8b69da7da8904947efb5961d797d9506fd140d1299e71aa80dab5bb1df355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_97f8b69da7da8904947efb5961d797d9506fd140d1299e71aa80dab5bb1df355->leave($__internal_97f8b69da7da8904947efb5961d797d9506fd140d1299e71aa80dab5bb1df355_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_87f16b1c5db3c34e5264cb60c0a9a78707e88b362407949289aecb9baaf08180 = $this->env->getExtension("native_profiler");
        $__internal_87f16b1c5db3c34e5264cb60c0a9a78707e88b362407949289aecb9baaf08180->enter($__internal_87f16b1c5db3c34e5264cb60c0a9a78707e88b362407949289aecb9baaf08180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_87f16b1c5db3c34e5264cb60c0a9a78707e88b362407949289aecb9baaf08180->leave($__internal_87f16b1c5db3c34e5264cb60c0a9a78707e88b362407949289aecb9baaf08180_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
/* <div>*/
/*     <div class="sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/*         {% block label %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endblock %}*/
/* */
/*         <div class="sonata-ba-field-error-messages">*/
/*             {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
