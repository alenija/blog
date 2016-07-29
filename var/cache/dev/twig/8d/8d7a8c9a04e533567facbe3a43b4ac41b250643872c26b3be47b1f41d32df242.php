<?php

/* BlogBundle:Blog:create.html.twig */
class __TwigTemplate_716cd2da2c733ab9cd748b4afc529a22fde9c2a0a490013ab3fc85518085c4a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Blog:create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f06f4534817f4f619b8ffc1b7a6d6ffcf376d5f6b3938de42d08ea4d809c127 = $this->env->getExtension("native_profiler");
        $__internal_0f06f4534817f4f619b8ffc1b7a6d6ffcf376d5f6b3938de42d08ea4d809c127->enter($__internal_0f06f4534817f4f619b8ffc1b7a6d6ffcf376d5f6b3938de42d08ea4d809c127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f06f4534817f4f619b8ffc1b7a6d6ffcf376d5f6b3938de42d08ea4d809c127->leave($__internal_0f06f4534817f4f619b8ffc1b7a6d6ffcf376d5f6b3938de42d08ea4d809c127_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4b6d7c2f63aa8cb657f71528f9d91f42d2b3d64c12fbf6255565767e162a767 = $this->env->getExtension("native_profiler");
        $__internal_e4b6d7c2f63aa8cb657f71528f9d91f42d2b3d64c12fbf6255565767e162a767->enter($__internal_e4b6d7c2f63aa8cb657f71528f9d91f42d2b3d64c12fbf6255565767e162a767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add Blog";
        
        $__internal_e4b6d7c2f63aa8cb657f71528f9d91f42d2b3d64c12fbf6255565767e162a767->leave($__internal_e4b6d7c2f63aa8cb657f71528f9d91f42d2b3d64c12fbf6255565767e162a767_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1af97f2a44b34b9f360fcaf6113129075369334aa2ab22c9207779fdd0b3c7db = $this->env->getExtension("native_profiler");
        $__internal_1af97f2a44b34b9f360fcaf6113129075369334aa2ab22c9207779fdd0b3c7db->enter($__internal_1af97f2a44b34b9f360fcaf6113129075369334aa2ab22c9207779fdd0b3c7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Add article for blog</h1>
    ";
        // line 7
        $this->loadTemplate("BlogBundle:Blog:form.html.twig", "BlogBundle:Blog:create.html.twig", 7)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        
        $__internal_1af97f2a44b34b9f360fcaf6113129075369334aa2ab22c9207779fdd0b3c7db->leave($__internal_1af97f2a44b34b9f360fcaf6113129075369334aa2ab22c9207779fdd0b3c7db_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Add Blog{% endblock%}*/
/* */
/* {% block body %}*/
/*     <h1>Add article for blog</h1>*/
/*     {% include 'BlogBundle:Blog:form.html.twig' with { 'form': form } %}*/
/* {% endblock %}*/
