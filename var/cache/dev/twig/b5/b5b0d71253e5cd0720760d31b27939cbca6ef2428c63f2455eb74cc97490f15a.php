<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_05e0c22fca7ac65108fedc0e428fa9813358ba2b4b853b20c55ee39a8d3f8f27 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ddf260dcc8d112f353b19a6b71cfb23b23c6eefdb07681028dd8a398a9968be = $this->env->getExtension("native_profiler");
        $__internal_9ddf260dcc8d112f353b19a6b71cfb23b23c6eefdb07681028dd8a398a9968be->enter($__internal_9ddf260dcc8d112f353b19a6b71cfb23b23c6eefdb07681028dd8a398a9968be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ddf260dcc8d112f353b19a6b71cfb23b23c6eefdb07681028dd8a398a9968be->leave($__internal_9ddf260dcc8d112f353b19a6b71cfb23b23c6eefdb07681028dd8a398a9968be_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0d4ed3539f0e8240c0eb7bee5bff5e65c5d21acdda5502d6664d37467fb7149a = $this->env->getExtension("native_profiler");
        $__internal_0d4ed3539f0e8240c0eb7bee5bff5e65c5d21acdda5502d6664d37467fb7149a->enter($__internal_0d4ed3539f0e8240c0eb7bee5bff5e65c5d21acdda5502d6664d37467fb7149a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_0d4ed3539f0e8240c0eb7bee5bff5e65c5d21acdda5502d6664d37467fb7149a->leave($__internal_0d4ed3539f0e8240c0eb7bee5bff5e65c5d21acdda5502d6664d37467fb7149a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
