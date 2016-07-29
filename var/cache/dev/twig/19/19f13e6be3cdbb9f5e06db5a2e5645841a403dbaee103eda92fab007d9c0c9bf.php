<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_036532cddc7f9d263830505c26103ca67439b4a2fad1862b1d42e72035657044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a8cb663f4f12e2b3e57291f92f1a83fb3df0a22b8f6dcd677396b73a8cfe1b9 = $this->env->getExtension("native_profiler");
        $__internal_9a8cb663f4f12e2b3e57291f92f1a83fb3df0a22b8f6dcd677396b73a8cfe1b9->enter($__internal_9a8cb663f4f12e2b3e57291f92f1a83fb3df0a22b8f6dcd677396b73a8cfe1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a8cb663f4f12e2b3e57291f92f1a83fb3df0a22b8f6dcd677396b73a8cfe1b9->leave($__internal_9a8cb663f4f12e2b3e57291f92f1a83fb3df0a22b8f6dcd677396b73a8cfe1b9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */
