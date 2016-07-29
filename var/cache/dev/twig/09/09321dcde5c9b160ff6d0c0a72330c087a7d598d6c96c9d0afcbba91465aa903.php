<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_b619a3eb03dbb3482bcb3fea22787a8fecd4b6d26e170197780d31b312178fb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9cbd5dcb97a7215c78e04500862891d966fb2a5011c70ec9cbd6b639035dd2a = $this->env->getExtension("native_profiler");
        $__internal_b9cbd5dcb97a7215c78e04500862891d966fb2a5011c70ec9cbd6b639035dd2a->enter($__internal_b9cbd5dcb97a7215c78e04500862891d966fb2a5011c70ec9cbd6b639035dd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9cbd5dcb97a7215c78e04500862891d966fb2a5011c70ec9cbd6b639035dd2a->leave($__internal_b9cbd5dcb97a7215c78e04500862891d966fb2a5011c70ec9cbd6b639035dd2a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}*/
/* */
