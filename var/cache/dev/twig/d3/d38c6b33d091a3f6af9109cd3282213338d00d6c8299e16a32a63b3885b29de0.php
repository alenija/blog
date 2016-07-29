<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_48f979e77c3112ceaae88976f46d2a1bc1e7730115d72e2f5f02fb2924b943d7 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9efdf559e9715a2323b7bc8736acdaa01c482b4f840a93eec0e81f27686d0543 = $this->env->getExtension("native_profiler");
        $__internal_9efdf559e9715a2323b7bc8736acdaa01c482b4f840a93eec0e81f27686d0543->enter($__internal_9efdf559e9715a2323b7bc8736acdaa01c482b4f840a93eec0e81f27686d0543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9efdf559e9715a2323b7bc8736acdaa01c482b4f840a93eec0e81f27686d0543->leave($__internal_9efdf559e9715a2323b7bc8736acdaa01c482b4f840a93eec0e81f27686d0543_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6e0cd0de70ab123b2b887fb3ad6c90a845bb6bc1f63e77803781bb19c78f19a4 = $this->env->getExtension("native_profiler");
        $__internal_6e0cd0de70ab123b2b887fb3ad6c90a845bb6bc1f63e77803781bb19c78f19a4->enter($__internal_6e0cd0de70ab123b2b887fb3ad6c90a845bb6bc1f63e77803781bb19c78f19a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_6e0cd0de70ab123b2b887fb3ad6c90a845bb6bc1f63e77803781bb19c78f19a4->leave($__internal_6e0cd0de70ab123b2b887fb3ad6c90a845bb6bc1f63e77803781bb19c78f19a4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
