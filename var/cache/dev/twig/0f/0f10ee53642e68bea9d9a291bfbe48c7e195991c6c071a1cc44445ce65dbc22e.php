<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_9eeee1b0243b75aedca7af9e4a30b255f471d92b7881cafe8d6e26a3d7e37b29 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_976e5e177da7cd6b802ed3be511b4c4bf1e64070f97d631eb03b596f8f322735 = $this->env->getExtension("native_profiler");
        $__internal_976e5e177da7cd6b802ed3be511b4c4bf1e64070f97d631eb03b596f8f322735->enter($__internal_976e5e177da7cd6b802ed3be511b4c4bf1e64070f97d631eb03b596f8f322735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_976e5e177da7cd6b802ed3be511b4c4bf1e64070f97d631eb03b596f8f322735->leave($__internal_976e5e177da7cd6b802ed3be511b4c4bf1e64070f97d631eb03b596f8f322735_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8fed5546b8a15566c966f3be59de4670f31fb8ebc4fa07b66605ffefac96e4a8 = $this->env->getExtension("native_profiler");
        $__internal_8fed5546b8a15566c966f3be59de4670f31fb8ebc4fa07b66605ffefac96e4a8->enter($__internal_8fed5546b8a15566c966f3be59de4670f31fb8ebc4fa07b66605ffefac96e4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_8fed5546b8a15566c966f3be59de4670f31fb8ebc4fa07b66605ffefac96e4a8->leave($__internal_8fed5546b8a15566c966f3be59de4670f31fb8ebc4fa07b66605ffefac96e4a8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
