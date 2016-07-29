<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_cdbb4d31dc464b1b1ddbdb4a77cae4d16d8402ff34c4e42ceaea3825a0fe2d8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "BlogBundle::layout.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e5d33e3ced0e6a1135d4ed97da34526402652ada98d1aa2751ea25cb2eb4e2a = $this->env->getExtension("native_profiler");
        $__internal_9e5d33e3ced0e6a1135d4ed97da34526402652ada98d1aa2751ea25cb2eb4e2a->enter($__internal_9e5d33e3ced0e6a1135d4ed97da34526402652ada98d1aa2751ea25cb2eb4e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e5d33e3ced0e6a1135d4ed97da34526402652ada98d1aa2751ea25cb2eb4e2a->leave($__internal_9e5d33e3ced0e6a1135d4ed97da34526402652ada98d1aa2751ea25cb2eb4e2a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_34b2419e4ba93b0daace5d873a9415e846750d906ac6988fd995f7be0a1ae232 = $this->env->getExtension("native_profiler");
        $__internal_34b2419e4ba93b0daace5d873a9415e846750d906ac6988fd995f7be0a1ae232->enter($__internal_34b2419e4ba93b0daace5d873a9415e846750d906ac6988fd995f7be0a1ae232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        // line 8
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "79a3604_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_79a3604_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/79a3604_part_1_blog_1.css");
            // line 11
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "79a3604_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_79a3604_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/79a3604_part_1_sidebar_2.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
    ";
        } else {
            // asset "79a3604"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_79a3604") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/79a3604.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
    ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        
        $__internal_34b2419e4ba93b0daace5d873a9415e846750d906ac6988fd995f7be0a1ae232->leave($__internal_34b2419e4ba93b0daace5d873a9415e846750d906ac6988fd995f7be0a1ae232_prof);

    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f11866b37cd7fb1c6146b2047d774da9307575b8516689e86afe987abcda34b4 = $this->env->getExtension("native_profiler");
        $__internal_f11866b37cd7fb1c6146b2047d774da9307575b8516689e86afe987abcda34b4->enter($__internal_f11866b37cd7fb1c6146b2047d774da9307575b8516689e86afe987abcda34b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BlogBundle:Page:sidebar"));
        echo " ";
        
        $__internal_f11866b37cd7fb1c6146b2047d774da9307575b8516689e86afe987abcda34b4->leave($__internal_f11866b37cd7fb1c6146b2047d774da9307575b8516689e86afe987abcda34b4_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 18,  81 => 17,  74 => 14,  72 => 13,  52 => 11,  47 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/* {#Merge all css files    #}*/
/*     {% stylesheets*/
/*     '@BlogBundle/Resources/public/css/*'*/
/*     %}*/
/*     <link href="{{ asset_url }}" rel="stylesheet" media="screen" />*/
/*     {% endstylesheets %}*/
/*     {#<link href="{{ asset('bundles/blog/css/blog.css') }}" type="text/css" rel="stylesheet" />#}*/
/*     {#<link href="{{ asset('bundles/blog/css/sidebar.css') }}" type="text/css" rel="stylesheet" />#}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {{ render(controller('BlogBundle:Page:sidebar' ))}} {#PageController.php -> sidebarAction()#}*/
/* {% endblock %}*/
