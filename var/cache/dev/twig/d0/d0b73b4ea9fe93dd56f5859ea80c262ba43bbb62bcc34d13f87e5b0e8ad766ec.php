<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_fe29de98ec4b571de779baab29321b76c0fbaa02181d4c89958643b853396057 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00d65cec8e1b36c7ff01f3ba0029dcddffbbfcae6e5cbdf4d29377e9f87a06ee = $this->env->getExtension("native_profiler");
        $__internal_00d65cec8e1b36c7ff01f3ba0029dcddffbbfcae6e5cbdf4d29377e9f87a06ee->enter($__internal_00d65cec8e1b36c7ff01f3ba0029dcddffbbfcae6e5cbdf4d29377e9f87a06ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00d65cec8e1b36c7ff01f3ba0029dcddffbbfcae6e5cbdf4d29377e9f87a06ee->leave($__internal_00d65cec8e1b36c7ff01f3ba0029dcddffbbfcae6e5cbdf4d29377e9f87a06ee_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
