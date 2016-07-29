<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_43f6fcdc3f98e142ded607b385bc3ef195f31ad3a22ff45cedba0249e7d69320 extends Twig_Template
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
        $__internal_bdd7c39090944aa4aff104925de17bdd2e5c6efa6c4f93c20edd1d9842e27048 = $this->env->getExtension("native_profiler");
        $__internal_bdd7c39090944aa4aff104925de17bdd2e5c6efa6c4f93c20edd1d9842e27048->enter($__internal_bdd7c39090944aa4aff104925de17bdd2e5c6efa6c4f93c20edd1d9842e27048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdd7c39090944aa4aff104925de17bdd2e5c6efa6c4f93c20edd1d9842e27048->leave($__internal_bdd7c39090944aa4aff104925de17bdd2e5c6efa6c4f93c20edd1d9842e27048_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8a8432d8321afebfffb1c03bd2941cb5105fb082b4d298ba4dbf2f804196d909 = $this->env->getExtension("native_profiler");
        $__internal_8a8432d8321afebfffb1c03bd2941cb5105fb082b4d298ba4dbf2f804196d909->enter($__internal_8a8432d8321afebfffb1c03bd2941cb5105fb082b4d298ba4dbf2f804196d909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        // line 8
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "79a3604_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_79a3604_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/79a3604_part_1_admin_1.css");
            // line 11
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "79a3604_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_79a3604_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/79a3604_part_1_blog_2.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "79a3604_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_79a3604_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/79a3604_part_1_sidebar_3.css");
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
        // line 15
        echo "
";
        
        $__internal_8a8432d8321afebfffb1c03bd2941cb5105fb082b4d298ba4dbf2f804196d909->leave($__internal_8a8432d8321afebfffb1c03bd2941cb5105fb082b4d298ba4dbf2f804196d909_prof);

    }

    // line 18
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d80435b76954c8799ee39dc80db4d688dbf69ec7f8aa027112dd437906811980 = $this->env->getExtension("native_profiler");
        $__internal_d80435b76954c8799ee39dc80db4d688dbf69ec7f8aa027112dd437906811980->enter($__internal_d80435b76954c8799ee39dc80db4d688dbf69ec7f8aa027112dd437906811980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 19
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BlogBundle:Page:sidebar"));
        echo " ";
        
        $__internal_d80435b76954c8799ee39dc80db4d688dbf69ec7f8aa027112dd437906811980->leave($__internal_d80435b76954c8799ee39dc80db4d688dbf69ec7f8aa027112dd437906811980_prof);

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
        return array (  96 => 19,  90 => 18,  82 => 15,  80 => 14,  78 => 13,  52 => 11,  47 => 8,  41 => 5,  35 => 4,  11 => 2,);
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
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {{ render(controller('BlogBundle:Page:sidebar' ))}} {#PageController.php -> sidebarAction()#}*/
/* {% endblock %}*/
