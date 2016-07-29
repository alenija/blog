<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c58e62f6e6837574d4ab38f0f2d814eef3b68dd13b21dd9a85545606f3550fcb extends Twig_Template
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
        $__internal_46db4711f8c7fd5bfc19806741f87b3186d9835dde8398406deb3f3370d90022 = $this->env->getExtension("native_profiler");
        $__internal_46db4711f8c7fd5bfc19806741f87b3186d9835dde8398406deb3f3370d90022->enter($__internal_46db4711f8c7fd5bfc19806741f87b3186d9835dde8398406deb3f3370d90022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_46db4711f8c7fd5bfc19806741f87b3186d9835dde8398406deb3f3370d90022->leave($__internal_46db4711f8c7fd5bfc19806741f87b3186d9835dde8398406deb3f3370d90022_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
