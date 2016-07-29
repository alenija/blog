<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_5c54bc499e771954c9e2810f1e260ae58037811cd1e1003f3d2f0fcb967f96be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_ea7db2c8533fe562606e8cd2ba53551991c9879a2767c58dceaeb1a1c44a2ce1 = $this->env->getExtension("native_profiler");
        $__internal_ea7db2c8533fe562606e8cd2ba53551991c9879a2767c58dceaeb1a1c44a2ce1->enter($__internal_ea7db2c8533fe562606e8cd2ba53551991c9879a2767c58dceaeb1a1c44a2ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea7db2c8533fe562606e8cd2ba53551991c9879a2767c58dceaeb1a1c44a2ce1->leave($__internal_ea7db2c8533fe562606e8cd2ba53551991c9879a2767c58dceaeb1a1c44a2ce1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a3242f220d5193ca548a35273b1abbb07c46e1d087cf382eb9be766a6762ae9 = $this->env->getExtension("native_profiler");
        $__internal_3a3242f220d5193ca548a35273b1abbb07c46e1d087cf382eb9be766a6762ae9->enter($__internal_3a3242f220d5193ca548a35273b1abbb07c46e1d087cf382eb9be766a6762ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3a3242f220d5193ca548a35273b1abbb07c46e1d087cf382eb9be766a6762ae9->leave($__internal_3a3242f220d5193ca548a35273b1abbb07c46e1d087cf382eb9be766a6762ae9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
