<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_06efc5b5cdbebc52314dd968e8dd97da9a8b64c05875cd48d210b3754d1438ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5dc4f5b473f57adf31f9bce1560b7131e5c1c766c0562b081c5f06394fb057ed = $this->env->getExtension("native_profiler");
        $__internal_5dc4f5b473f57adf31f9bce1560b7131e5c1c766c0562b081c5f06394fb057ed->enter($__internal_5dc4f5b473f57adf31f9bce1560b7131e5c1c766c0562b081c5f06394fb057ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_5dc4f5b473f57adf31f9bce1560b7131e5c1c766c0562b081c5f06394fb057ed->leave($__internal_5dc4f5b473f57adf31f9bce1560b7131e5c1c766c0562b081c5f06394fb057ed_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_41fc3cd92c5abc4422c53bf726eb06b633ea7a1ac9d4c541b7859fb1f4630656 = $this->env->getExtension("native_profiler");
        $__internal_41fc3cd92c5abc4422c53bf726eb06b633ea7a1ac9d4c541b7859fb1f4630656->enter($__internal_41fc3cd92c5abc4422c53bf726eb06b633ea7a1ac9d4c541b7859fb1f4630656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_41fc3cd92c5abc4422c53bf726eb06b633ea7a1ac9d4c541b7859fb1f4630656->leave($__internal_41fc3cd92c5abc4422c53bf726eb06b633ea7a1ac9d4c541b7859fb1f4630656_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_18399fc3a4c8ad90df0d0b6ca874f16344846f5b23d17fbc8b223dc5bf2d0304 = $this->env->getExtension("native_profiler");
        $__internal_18399fc3a4c8ad90df0d0b6ca874f16344846f5b23d17fbc8b223dc5bf2d0304->enter($__internal_18399fc3a4c8ad90df0d0b6ca874f16344846f5b23d17fbc8b223dc5bf2d0304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_18399fc3a4c8ad90df0d0b6ca874f16344846f5b23d17fbc8b223dc5bf2d0304->leave($__internal_18399fc3a4c8ad90df0d0b6ca874f16344846f5b23d17fbc8b223dc5bf2d0304_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_c04aa42cd80929429eca71d60c1bc7ff0f22653cd59656965bd20fa0f4d805c3 = $this->env->getExtension("native_profiler");
        $__internal_c04aa42cd80929429eca71d60c1bc7ff0f22653cd59656965bd20fa0f4d805c3->enter($__internal_c04aa42cd80929429eca71d60c1bc7ff0f22653cd59656965bd20fa0f4d805c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_c04aa42cd80929429eca71d60c1bc7ff0f22653cd59656965bd20fa0f4d805c3->leave($__internal_c04aa42cd80929429eca71d60c1bc7ff0f22653cd59656965bd20fa0f4d805c3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
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
/* <th{% if(is_diff|default(false)) %} class="diff"{% endif %}>{% block name %}{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}{% endblock %}</th>*/
/* <td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>*/
/* */
/* {% block field_compare %}*/
/*     {% if(value_compare is defined) %}*/
/*         <td>*/
/*             {% set value = value_compare %}*/
/*             {{ block('field') }}*/
/*         </td>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
