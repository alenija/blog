<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_1ef48e6733b252057a1a8885029a58e2a1b496bf3c35d77c110f217f8b8462e8 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blog/css/sidebar.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BlogBundle:Page:sidebar"));
        echo " ";
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
        return array (  50 => 11,  47 => 10,  41 => 7,  37 => 6,  32 => 5,  29 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('bundles/blog/css/blog.css') }}" type="text/css" rel="stylesheet" />*/
/*     <link href="{{ asset('bundles/blog/css/sidebar.css') }}" type="text/css" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {{ render(controller('BlogBundle:Page:sidebar' ))}} {#PageController.php -> sidebarAction()#}*/
/* {% endblock %}*/
