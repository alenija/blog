<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8560120a3c6c64f0383ed35daab7d584b9a9de0fdb705252b10fe607c7184ef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8ba55c613086e8b659c6d6ec2d3fb9d9d63c03ca5789a736c528d017cadd9be = $this->env->getExtension("native_profiler");
        $__internal_d8ba55c613086e8b659c6d6ec2d3fb9d9d63c03ca5789a736c528d017cadd9be->enter($__internal_d8ba55c613086e8b659c6d6ec2d3fb9d9d63c03ca5789a736c528d017cadd9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d8ba55c613086e8b659c6d6ec2d3fb9d9d63c03ca5789a736c528d017cadd9be->leave($__internal_d8ba55c613086e8b659c6d6ec2d3fb9d9d63c03ca5789a736c528d017cadd9be_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fd53b25a79232f9b62efec9fa519b9b4699c72b1f972e962eeb252a41f5a767 = $this->env->getExtension("native_profiler");
        $__internal_0fd53b25a79232f9b62efec9fa519b9b4699c72b1f972e962eeb252a41f5a767->enter($__internal_0fd53b25a79232f9b62efec9fa519b9b4699c72b1f972e962eeb252a41f5a767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0fd53b25a79232f9b62efec9fa519b9b4699c72b1f972e962eeb252a41f5a767->leave($__internal_0fd53b25a79232f9b62efec9fa519b9b4699c72b1f972e962eeb252a41f5a767_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
