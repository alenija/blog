<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_64578fea263bc3caf9a050ee2562109696a157daacbf3602152c424e631a78cc extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7eeced64b327ffa858f2418895b4e7cfba86ff01a4f0aa137bcf7fa86f9e5d53 = $this->env->getExtension("native_profiler");
        $__internal_7eeced64b327ffa858f2418895b4e7cfba86ff01a4f0aa137bcf7fa86f9e5d53->enter($__internal_7eeced64b327ffa858f2418895b4e7cfba86ff01a4f0aa137bcf7fa86f9e5d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7eeced64b327ffa858f2418895b4e7cfba86ff01a4f0aa137bcf7fa86f9e5d53->leave($__internal_7eeced64b327ffa858f2418895b4e7cfba86ff01a4f0aa137bcf7fa86f9e5d53_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_55b972c9119d31ea9a587d571705518931b2704f3235c325b6ff8cf3a18f33f9 = $this->env->getExtension("native_profiler");
        $__internal_55b972c9119d31ea9a587d571705518931b2704f3235c325b6ff8cf3a18f33f9->enter($__internal_55b972c9119d31ea9a587d571705518931b2704f3235c325b6ff8cf3a18f33f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_55b972c9119d31ea9a587d571705518931b2704f3235c325b6ff8cf3a18f33f9->leave($__internal_55b972c9119d31ea9a587d571705518931b2704f3235c325b6ff8cf3a18f33f9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
