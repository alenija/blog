<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_109f95f680e2e02ecd65db225749584a0cc543d06bb01ea7e9a21b545cb1e378 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b12c3ff68d084841021716946376e71866b7c0113513f0b831c20118bb27ebe7 = $this->env->getExtension("native_profiler");
        $__internal_b12c3ff68d084841021716946376e71866b7c0113513f0b831c20118bb27ebe7->enter($__internal_b12c3ff68d084841021716946376e71866b7c0113513f0b831c20118bb27ebe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b12c3ff68d084841021716946376e71866b7c0113513f0b831c20118bb27ebe7->leave($__internal_b12c3ff68d084841021716946376e71866b7c0113513f0b831c20118bb27ebe7_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_95cf798320418264c4d20adf93dfe6242f8e1d3fc297f1f4857ae021bca47e0c = $this->env->getExtension("native_profiler");
        $__internal_95cf798320418264c4d20adf93dfe6242f8e1d3fc297f1f4857ae021bca47e0c->enter($__internal_95cf798320418264c4d20adf93dfe6242f8e1d3fc297f1f4857ae021bca47e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_95cf798320418264c4d20adf93dfe6242f8e1d3fc297f1f4857ae021bca47e0c->leave($__internal_95cf798320418264c4d20adf93dfe6242f8e1d3fc297f1f4857ae021bca47e0c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
