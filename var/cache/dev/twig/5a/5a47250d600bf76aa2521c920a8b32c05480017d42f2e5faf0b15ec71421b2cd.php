<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_66aba0f566569ad7dd01710243880e78a71d2fb928543c2830c7f1e760a836c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_335a46161cd86ed396c0882ed0073cdf228192b55ea6a1a3f81df2699216d246 = $this->env->getExtension("native_profiler");
        $__internal_335a46161cd86ed396c0882ed0073cdf228192b55ea6a1a3f81df2699216d246->enter($__internal_335a46161cd86ed396c0882ed0073cdf228192b55ea6a1a3f81df2699216d246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_335a46161cd86ed396c0882ed0073cdf228192b55ea6a1a3f81df2699216d246->leave($__internal_335a46161cd86ed396c0882ed0073cdf228192b55ea6a1a3f81df2699216d246_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_adb46be3075bedafd4ed62dc9635c44a1689a32dc3617e988faf456d0e418d0d = $this->env->getExtension("native_profiler");
        $__internal_adb46be3075bedafd4ed62dc9635c44a1689a32dc3617e988faf456d0e418d0d->enter($__internal_adb46be3075bedafd4ed62dc9635c44a1689a32dc3617e988faf456d0e418d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_adb46be3075bedafd4ed62dc9635c44a1689a32dc3617e988faf456d0e418d0d->leave($__internal_adb46be3075bedafd4ed62dc9635c44a1689a32dc3617e988faf456d0e418d0d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
