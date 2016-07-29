<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_eddaadc94d5aca2c8da6aa5b08eb9df49499c948d71cbcba9f981585f4ad7fe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc436c7f600234a01c8d52a7583ae6eeada0b40062a6b6e1f1ce6550dd8d7eba = $this->env->getExtension("native_profiler");
        $__internal_bc436c7f600234a01c8d52a7583ae6eeada0b40062a6b6e1f1ce6550dd8d7eba->enter($__internal_bc436c7f600234a01c8d52a7583ae6eeada0b40062a6b6e1f1ce6550dd8d7eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc436c7f600234a01c8d52a7583ae6eeada0b40062a6b6e1f1ce6550dd8d7eba->leave($__internal_bc436c7f600234a01c8d52a7583ae6eeada0b40062a6b6e1f1ce6550dd8d7eba_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
