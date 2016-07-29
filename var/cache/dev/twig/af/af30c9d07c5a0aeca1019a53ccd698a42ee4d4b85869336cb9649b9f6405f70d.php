<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3b72d0eedd073d37ed34ce377cc74c3826c31c3a38d5f18fc257c33c77622324 extends Twig_Template
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
        $__internal_b6db87b1b6bf1eb6a16a99344764bb9bd4f2beefd4f4f8f520fd6b981ba70145 = $this->env->getExtension("native_profiler");
        $__internal_b6db87b1b6bf1eb6a16a99344764bb9bd4f2beefd4f4f8f520fd6b981ba70145->enter($__internal_b6db87b1b6bf1eb6a16a99344764bb9bd4f2beefd4f4f8f520fd6b981ba70145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b6db87b1b6bf1eb6a16a99344764bb9bd4f2beefd4f4f8f520fd6b981ba70145->leave($__internal_b6db87b1b6bf1eb6a16a99344764bb9bd4f2beefd4f4f8f520fd6b981ba70145_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
