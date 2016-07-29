<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_9f3ed205668a1394a5045a57eacb2ebd23df7ae6b720c5b8d9f2a0ffd15bb6e9 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fbc015c09af24a02271b445bb18b68538d2a1c0badaaf2fefa2398a47065381 = $this->env->getExtension("native_profiler");
        $__internal_2fbc015c09af24a02271b445bb18b68538d2a1c0badaaf2fefa2398a47065381->enter($__internal_2fbc015c09af24a02271b445bb18b68538d2a1c0badaaf2fefa2398a47065381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fbc015c09af24a02271b445bb18b68538d2a1c0badaaf2fefa2398a47065381->leave($__internal_2fbc015c09af24a02271b445bb18b68538d2a1c0badaaf2fefa2398a47065381_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d68a6e8d18e96a033464168c75a347e0fbb15ef42b7c5ae2060eaa63c27203ff = $this->env->getExtension("native_profiler");
        $__internal_d68a6e8d18e96a033464168c75a347e0fbb15ef42b7c5ae2060eaa63c27203ff->enter($__internal_d68a6e8d18e96a033464168c75a347e0fbb15ef42b7c5ae2060eaa63c27203ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_d68a6e8d18e96a033464168c75a347e0fbb15ef42b7c5ae2060eaa63c27203ff->leave($__internal_d68a6e8d18e96a033464168c75a347e0fbb15ef42b7c5ae2060eaa63c27203ff_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
