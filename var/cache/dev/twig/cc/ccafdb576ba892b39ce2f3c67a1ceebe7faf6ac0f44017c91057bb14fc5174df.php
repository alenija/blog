<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_d79fc6f043538443d27ce12a3b1a3253b66b2b8e5bdf33f56df16031df61a8c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83bc323ea1eeed64332d213e7d00b504c9c4c067aa49701dd27ca93401d15c23 = $this->env->getExtension("native_profiler");
        $__internal_83bc323ea1eeed64332d213e7d00b504c9c4c067aa49701dd27ca93401d15c23->enter($__internal_83bc323ea1eeed64332d213e7d00b504c9c4c067aa49701dd27ca93401d15c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83bc323ea1eeed64332d213e7d00b504c9c4c067aa49701dd27ca93401d15c23->leave($__internal_83bc323ea1eeed64332d213e7d00b504c9c4c067aa49701dd27ca93401d15c23_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
