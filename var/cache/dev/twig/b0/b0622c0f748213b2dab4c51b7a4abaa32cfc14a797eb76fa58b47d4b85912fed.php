<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3448f6a5303829ebf92da7c19ef0d1f29a51f3ea7712c7de7d6d111464ce2698 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_040c525c55026a438cab5631ec320c7d010acd3e1e35827699ca10b14f562bc7 = $this->env->getExtension("native_profiler");
        $__internal_040c525c55026a438cab5631ec320c7d010acd3e1e35827699ca10b14f562bc7->enter($__internal_040c525c55026a438cab5631ec320c7d010acd3e1e35827699ca10b14f562bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_040c525c55026a438cab5631ec320c7d010acd3e1e35827699ca10b14f562bc7->leave($__internal_040c525c55026a438cab5631ec320c7d010acd3e1e35827699ca10b14f562bc7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6732f2dcc7c4e9af70f6cd2f1cb94e092c70c6af0795fda60929bee24292d2c7 = $this->env->getExtension("native_profiler");
        $__internal_6732f2dcc7c4e9af70f6cd2f1cb94e092c70c6af0795fda60929bee24292d2c7->enter($__internal_6732f2dcc7c4e9af70f6cd2f1cb94e092c70c6af0795fda60929bee24292d2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6732f2dcc7c4e9af70f6cd2f1cb94e092c70c6af0795fda60929bee24292d2c7->leave($__internal_6732f2dcc7c4e9af70f6cd2f1cb94e092c70c6af0795fda60929bee24292d2c7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a443e318d327bb1ec9d0f11ecdad33c3799ed3de5865a855306a514cf28d9019 = $this->env->getExtension("native_profiler");
        $__internal_a443e318d327bb1ec9d0f11ecdad33c3799ed3de5865a855306a514cf28d9019->enter($__internal_a443e318d327bb1ec9d0f11ecdad33c3799ed3de5865a855306a514cf28d9019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a443e318d327bb1ec9d0f11ecdad33c3799ed3de5865a855306a514cf28d9019->leave($__internal_a443e318d327bb1ec9d0f11ecdad33c3799ed3de5865a855306a514cf28d9019_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
