<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3d07ae3ead81f52d26cd1f3f8b7a8daac241e287af1428e0150b4f498f7a1c61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e822c7c35f520c99c4ec3b104004052f113e3f062b36686cc3416fbf83bfecb = $this->env->getExtension("native_profiler");
        $__internal_0e822c7c35f520c99c4ec3b104004052f113e3f062b36686cc3416fbf83bfecb->enter($__internal_0e822c7c35f520c99c4ec3b104004052f113e3f062b36686cc3416fbf83bfecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e822c7c35f520c99c4ec3b104004052f113e3f062b36686cc3416fbf83bfecb->leave($__internal_0e822c7c35f520c99c4ec3b104004052f113e3f062b36686cc3416fbf83bfecb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6678b164821e769d7f5daf6dc41901b459c9f1fc8c61a423e2fbc9d294f7ed08 = $this->env->getExtension("native_profiler");
        $__internal_6678b164821e769d7f5daf6dc41901b459c9f1fc8c61a423e2fbc9d294f7ed08->enter($__internal_6678b164821e769d7f5daf6dc41901b459c9f1fc8c61a423e2fbc9d294f7ed08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6678b164821e769d7f5daf6dc41901b459c9f1fc8c61a423e2fbc9d294f7ed08->leave($__internal_6678b164821e769d7f5daf6dc41901b459c9f1fc8c61a423e2fbc9d294f7ed08_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fe46ce8d342f40c5749c71d3b0f42b13284acce0bf6a929523c9b0f5d18951a5 = $this->env->getExtension("native_profiler");
        $__internal_fe46ce8d342f40c5749c71d3b0f42b13284acce0bf6a929523c9b0f5d18951a5->enter($__internal_fe46ce8d342f40c5749c71d3b0f42b13284acce0bf6a929523c9b0f5d18951a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fe46ce8d342f40c5749c71d3b0f42b13284acce0bf6a929523c9b0f5d18951a5->leave($__internal_fe46ce8d342f40c5749c71d3b0f42b13284acce0bf6a929523c9b0f5d18951a5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4053465952e6e085c668620881d22f9cccec9f95dd131c0c99eee3e007e7eaf6 = $this->env->getExtension("native_profiler");
        $__internal_4053465952e6e085c668620881d22f9cccec9f95dd131c0c99eee3e007e7eaf6->enter($__internal_4053465952e6e085c668620881d22f9cccec9f95dd131c0c99eee3e007e7eaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4053465952e6e085c668620881d22f9cccec9f95dd131c0c99eee3e007e7eaf6->leave($__internal_4053465952e6e085c668620881d22f9cccec9f95dd131c0c99eee3e007e7eaf6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
