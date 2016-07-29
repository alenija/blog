<?php

/* BlogBundle:Page:contactEmail.txt.twig */
class __TwigTemplate_7a3cd19f2eec400e3a8b48385d54fbc32435eac29701dc606d02df3bb1262392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f87476f11ac8f008006d4c161328e87e2fd677cb173d502e204fd55b85cfffc4 = $this->env->getExtension("native_profiler");
        $__internal_f87476f11ac8f008006d4c161328e87e2fd677cb173d502e204fd55b85cfffc4->enter($__internal_f87476f11ac8f008006d4c161328e87e2fd677cb173d502e204fd55b85cfffc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:contactEmail.txt.twig"));

        // line 2
        echo "A contact enquiry was made by ";
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "name", array());
        echo " at ";
        echo twig_date_format_filter($this->env, "now", "Y-m-d H:i");
        echo ".

Reply-To: ";
        // line 4
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "email", array());
        echo "
Subject: ";
        // line 5
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "subject", array());
        echo "
Body:
";
        // line 7
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "body", array());
        
        $__internal_f87476f11ac8f008006d4c161328e87e2fd677cb173d502e204fd55b85cfffc4->leave($__internal_f87476f11ac8f008006d4c161328e87e2fd677cb173d502e204fd55b85cfffc4_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Page:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  34 => 5,  30 => 4,  22 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Page/contactEmail.txt.twig #}*/
/* A contact enquiry was made by {{ enquiry.name }} at {{ "now" | date("Y-m-d H:i") }}.*/
/* */
/* Reply-To: {{ enquiry.email }}*/
/* Subject: {{ enquiry.subject }}*/
/* Body:*/
/* {{ enquiry.body }}*/
