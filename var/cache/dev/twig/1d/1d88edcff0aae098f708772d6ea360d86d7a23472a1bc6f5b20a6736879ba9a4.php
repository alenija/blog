<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a155410bef000e222026fdd822a0de81151f81825eb99afebb8d48c88b61d151 extends Twig_Template
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
        $__internal_23c6ff352517c7c0d7b9b143b9373d07c47fd0e37b7a02e623c6ce4b023b566f = $this->env->getExtension("native_profiler");
        $__internal_23c6ff352517c7c0d7b9b143b9373d07c47fd0e37b7a02e623c6ce4b023b566f->enter($__internal_23c6ff352517c7c0d7b9b143b9373d07c47fd0e37b7a02e623c6ce4b023b566f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_23c6ff352517c7c0d7b9b143b9373d07c47fd0e37b7a02e623c6ce4b023b566f->leave($__internal_23c6ff352517c7c0d7b9b143b9373d07c47fd0e37b7a02e623c6ce4b023b566f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
