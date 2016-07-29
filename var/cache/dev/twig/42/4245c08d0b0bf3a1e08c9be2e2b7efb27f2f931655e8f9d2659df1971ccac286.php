<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_954a64b8e95e3f4435ca3ac1afe21b5821395df695d78346957cde5a5fa76cec extends Twig_Template
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
        $__internal_de3b1e91fb96c9ba3645ad7cd0ac0fe5624c54059542edf4f415ffb1a70bba40 = $this->env->getExtension("native_profiler");
        $__internal_de3b1e91fb96c9ba3645ad7cd0ac0fe5624c54059542edf4f415ffb1a70bba40->enter($__internal_de3b1e91fb96c9ba3645ad7cd0ac0fe5624c54059542edf4f415ffb1a70bba40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de3b1e91fb96c9ba3645ad7cd0ac0fe5624c54059542edf4f415ffb1a70bba40->leave($__internal_de3b1e91fb96c9ba3645ad7cd0ac0fe5624c54059542edf4f415ffb1a70bba40_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_36a87f1e89f756679f9986d36d80883b644d504c907d87fa4cb8d07d6a5dedc6 = $this->env->getExtension("native_profiler");
        $__internal_36a87f1e89f756679f9986d36d80883b644d504c907d87fa4cb8d07d6a5dedc6->enter($__internal_36a87f1e89f756679f9986d36d80883b644d504c907d87fa4cb8d07d6a5dedc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_36a87f1e89f756679f9986d36d80883b644d504c907d87fa4cb8d07d6a5dedc6->leave($__internal_36a87f1e89f756679f9986d36d80883b644d504c907d87fa4cb8d07d6a5dedc6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c634cf02cecb405d723115a0fac82278605f3b8f32025bffed27b569097d079 = $this->env->getExtension("native_profiler");
        $__internal_3c634cf02cecb405d723115a0fac82278605f3b8f32025bffed27b569097d079->enter($__internal_3c634cf02cecb405d723115a0fac82278605f3b8f32025bffed27b569097d079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3c634cf02cecb405d723115a0fac82278605f3b8f32025bffed27b569097d079->leave($__internal_3c634cf02cecb405d723115a0fac82278605f3b8f32025bffed27b569097d079_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0611d2438d32632fffd856ea2326f3fe8dc5435bb0542cdc79bf40f267c3b13c = $this->env->getExtension("native_profiler");
        $__internal_0611d2438d32632fffd856ea2326f3fe8dc5435bb0542cdc79bf40f267c3b13c->enter($__internal_0611d2438d32632fffd856ea2326f3fe8dc5435bb0542cdc79bf40f267c3b13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0611d2438d32632fffd856ea2326f3fe8dc5435bb0542cdc79bf40f267c3b13c->leave($__internal_0611d2438d32632fffd856ea2326f3fe8dc5435bb0542cdc79bf40f267c3b13c_prof);

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
