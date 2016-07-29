<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_7e28d80bb99f0c0b661eb8f5f50d870c7f076957d8682824ceb840eeba7d005d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27d0f1297b35c6037232ee7b1d1470a5fe000d12ec1b583369bd901245dd4ba1 = $this->env->getExtension("native_profiler");
        $__internal_27d0f1297b35c6037232ee7b1d1470a5fe000d12ec1b583369bd901245dd4ba1->enter($__internal_27d0f1297b35c6037232ee7b1d1470a5fe000d12ec1b583369bd901245dd4ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27d0f1297b35c6037232ee7b1d1470a5fe000d12ec1b583369bd901245dd4ba1->leave($__internal_27d0f1297b35c6037232ee7b1d1470a5fe000d12ec1b583369bd901245dd4ba1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
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
/* {# DEPRECATED #}*/
/* {# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}*/
/* */
/* {% extends 'SonataAdminBundle:Button:create_button.html.twig' %}*/
/* */
