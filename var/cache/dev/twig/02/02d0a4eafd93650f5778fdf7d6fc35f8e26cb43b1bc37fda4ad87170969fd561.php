<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_eecf28c16fa00f29de81882491e2a17d737a632c7b54dbb3ff0bfb16e1be5385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4329a6c41dfba38d660bc0ed84a700146f2ab8a6a1b7b097fa9513c202fd622 = $this->env->getExtension("native_profiler");
        $__internal_a4329a6c41dfba38d660bc0ed84a700146f2ab8a6a1b7b097fa9513c202fd622->enter($__internal_a4329a6c41dfba38d660bc0ed84a700146f2ab8a6a1b7b097fa9513c202fd622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4329a6c41dfba38d660bc0ed84a700146f2ab8a6a1b7b097fa9513c202fd622->leave($__internal_a4329a6c41dfba38d660bc0ed84a700146f2ab8a6a1b7b097fa9513c202fd622_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20a2c548ea9013c94cf7480b36f383f80e7e746326f5b9289a3cbd45ef6ac085 = $this->env->getExtension("native_profiler");
        $__internal_20a2c548ea9013c94cf7480b36f383f80e7e746326f5b9289a3cbd45ef6ac085->enter($__internal_20a2c548ea9013c94cf7480b36f383f80e7e746326f5b9289a3cbd45ef6ac085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_20a2c548ea9013c94cf7480b36f383f80e7e746326f5b9289a3cbd45ef6ac085->leave($__internal_20a2c548ea9013c94cf7480b36f383f80e7e746326f5b9289a3cbd45ef6ac085_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
