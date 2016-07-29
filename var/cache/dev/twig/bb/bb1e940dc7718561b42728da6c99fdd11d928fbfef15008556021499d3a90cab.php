<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_56e1a8ab813de821357f31f9e052a056b53be744f65efdebed46cd8fdb90eeb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14599f961a14974f4dc903e02517d74760e5e1df667f9da335f8fe398fd8e6ab = $this->env->getExtension("native_profiler");
        $__internal_14599f961a14974f4dc903e02517d74760e5e1df667f9da335f8fe398fd8e6ab->enter($__internal_14599f961a14974f4dc903e02517d74760e5e1df667f9da335f8fe398fd8e6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_14599f961a14974f4dc903e02517d74760e5e1df667f9da335f8fe398fd8e6ab->leave($__internal_14599f961a14974f4dc903e02517d74760e5e1df667f9da335f8fe398fd8e6ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
