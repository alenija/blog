<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_68becd17bcf3f05d999623571e53ea327677d2155241c05cff9e3a337a2ae3f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d653ec7fa8a70ab3bd448c2e02a548e2b8e9466e4c1550738028df778c50cbc = $this->env->getExtension("native_profiler");
        $__internal_7d653ec7fa8a70ab3bd448c2e02a548e2b8e9466e4c1550738028df778c50cbc->enter($__internal_7d653ec7fa8a70ab3bd448c2e02a548e2b8e9466e4c1550738028df778c50cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d653ec7fa8a70ab3bd448c2e02a548e2b8e9466e4c1550738028df778c50cbc->leave($__internal_7d653ec7fa8a70ab3bd448c2e02a548e2b8e9466e4c1550738028df778c50cbc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
