<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d6ec35b45b7e2549eb06d8dfc45e94ea814dd67080f2d0643552f995379d69d1 extends Twig_Template
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
        $__internal_9bf2a67faf26e02ab972c68606aa215dc1774bc01c3537fdcfbed1c8f6262cc6 = $this->env->getExtension("native_profiler");
        $__internal_9bf2a67faf26e02ab972c68606aa215dc1774bc01c3537fdcfbed1c8f6262cc6->enter($__internal_9bf2a67faf26e02ab972c68606aa215dc1774bc01c3537fdcfbed1c8f6262cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9bf2a67faf26e02ab972c68606aa215dc1774bc01c3537fdcfbed1c8f6262cc6->leave($__internal_9bf2a67faf26e02ab972c68606aa215dc1774bc01c3537fdcfbed1c8f6262cc6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
