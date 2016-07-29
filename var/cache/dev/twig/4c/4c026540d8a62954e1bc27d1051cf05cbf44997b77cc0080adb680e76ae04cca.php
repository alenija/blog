<?php

/* BlogBundle:Page:contactEmail.txt.twig */
class __TwigTemplate_e6573fe31955c1272b358142fc15e393759385600f9173f5ba3b15cb5cdebc55 extends Twig_Template
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
        $__internal_9c7bd55b3d2e8b491371fe5c6cff8edfa7aef332b33c67980d38926282d433fd = $this->env->getExtension("native_profiler");
        $__internal_9c7bd55b3d2e8b491371fe5c6cff8edfa7aef332b33c67980d38926282d433fd->enter($__internal_9c7bd55b3d2e8b491371fe5c6cff8edfa7aef332b33c67980d38926282d433fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:contactEmail.txt.twig"));

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
        
        $__internal_9c7bd55b3d2e8b491371fe5c6cff8edfa7aef332b33c67980d38926282d433fd->leave($__internal_9c7bd55b3d2e8b491371fe5c6cff8edfa7aef332b33c67980d38926282d433fd_prof);

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
