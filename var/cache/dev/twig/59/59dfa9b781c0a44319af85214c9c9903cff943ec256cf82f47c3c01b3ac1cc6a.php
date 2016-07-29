<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_6326397e4d15a0a796cd84910f1443744a523a1c161f27ea19236eac4a0b0a44 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a465efc48b2ac0a3ffd65c131caea1b53c6a0d090409781ff9c70ee0237a94b = $this->env->getExtension("native_profiler");
        $__internal_3a465efc48b2ac0a3ffd65c131caea1b53c6a0d090409781ff9c70ee0237a94b->enter($__internal_3a465efc48b2ac0a3ffd65c131caea1b53c6a0d090409781ff9c70ee0237a94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a465efc48b2ac0a3ffd65c131caea1b53c6a0d090409781ff9c70ee0237a94b->leave($__internal_3a465efc48b2ac0a3ffd65c131caea1b53c6a0d090409781ff9c70ee0237a94b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_44b585432dceb7a5da8c826597ff41ae7c37f9a84487a6ebbef3503e911ea80e = $this->env->getExtension("native_profiler");
        $__internal_44b585432dceb7a5da8c826597ff41ae7c37f9a84487a6ebbef3503e911ea80e->enter($__internal_44b585432dceb7a5da8c826597ff41ae7c37f9a84487a6ebbef3503e911ea80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_44b585432dceb7a5da8c826597ff41ae7c37f9a84487a6ebbef3503e911ea80e->leave($__internal_44b585432dceb7a5da8c826597ff41ae7c37f9a84487a6ebbef3503e911ea80e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
