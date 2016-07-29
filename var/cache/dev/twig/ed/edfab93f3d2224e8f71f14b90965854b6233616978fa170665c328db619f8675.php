<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_bbf247578859f59a7e10cbfc965e618cbd705a97d3548071181c46b48695c214 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5ecde76c2a9bbf9966f8013d05b3356e62453f92bfeaa1c08952349af1046fb = $this->env->getExtension("native_profiler");
        $__internal_a5ecde76c2a9bbf9966f8013d05b3356e62453f92bfeaa1c08952349af1046fb->enter($__internal_a5ecde76c2a9bbf9966f8013d05b3356e62453f92bfeaa1c08952349af1046fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5ecde76c2a9bbf9966f8013d05b3356e62453f92bfeaa1c08952349af1046fb->leave($__internal_a5ecde76c2a9bbf9966f8013d05b3356e62453f92bfeaa1c08952349af1046fb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
