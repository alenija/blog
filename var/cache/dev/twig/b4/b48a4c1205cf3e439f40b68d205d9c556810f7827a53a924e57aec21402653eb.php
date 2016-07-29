<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_5982eb978bfd023aa168edd30a8549f23b9485bb2dcd2705e301eedc4ea24d2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ade06762543bb82e88002ffd83db5c503814f069c2baf448d6be54dc26f458cd = $this->env->getExtension("native_profiler");
        $__internal_ade06762543bb82e88002ffd83db5c503814f069c2baf448d6be54dc26f458cd->enter($__internal_ade06762543bb82e88002ffd83db5c503814f069c2baf448d6be54dc26f458cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ade06762543bb82e88002ffd83db5c503814f069c2baf448d6be54dc26f458cd->leave($__internal_ade06762543bb82e88002ffd83db5c503814f069c2baf448d6be54dc26f458cd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
