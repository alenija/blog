<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_a5bcb83d0e7d6de873dda456fb4f38ba618d34aaedc3bd224f0f0a6557c50138 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6dae728c1114613ad53741fbd447f724deb8ceb12c48b067b35bfd602389630e = $this->env->getExtension("native_profiler");
        $__internal_6dae728c1114613ad53741fbd447f724deb8ceb12c48b067b35bfd602389630e->enter($__internal_6dae728c1114613ad53741fbd447f724deb8ceb12c48b067b35bfd602389630e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dae728c1114613ad53741fbd447f724deb8ceb12c48b067b35bfd602389630e->leave($__internal_6dae728c1114613ad53741fbd447f724deb8ceb12c48b067b35bfd602389630e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
