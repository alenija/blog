<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_009608b29d02d57e6fac6fff3bd7c9d1142f823bf941d2db9d86406ae37fef18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_9ebc8e6ade2d922ff1caf4ed36774e391051266e7578c7f2e5a9d29036223515 = $this->env->getExtension("native_profiler");
        $__internal_9ebc8e6ade2d922ff1caf4ed36774e391051266e7578c7f2e5a9d29036223515->enter($__internal_9ebc8e6ade2d922ff1caf4ed36774e391051266e7578c7f2e5a9d29036223515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ebc8e6ade2d922ff1caf4ed36774e391051266e7578c7f2e5a9d29036223515->leave($__internal_9ebc8e6ade2d922ff1caf4ed36774e391051266e7578c7f2e5a9d29036223515_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a3060672f223dcf7381c511d73a25a79c4ec87f69df26bed3b07ae898ea246f = $this->env->getExtension("native_profiler");
        $__internal_9a3060672f223dcf7381c511d73a25a79c4ec87f69df26bed3b07ae898ea246f->enter($__internal_9a3060672f223dcf7381c511d73a25a79c4ec87f69df26bed3b07ae898ea246f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_9a3060672f223dcf7381c511d73a25a79c4ec87f69df26bed3b07ae898ea246f->leave($__internal_9a3060672f223dcf7381c511d73a25a79c4ec87f69df26bed3b07ae898ea246f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
