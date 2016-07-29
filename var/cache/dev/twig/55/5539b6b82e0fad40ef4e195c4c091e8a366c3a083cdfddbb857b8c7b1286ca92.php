<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ad39a36f663bc1ded646d68b4f7fbd625f435295a08ebc2289d0810ed878ccbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_31c1bc92120c75b64c03d2df198e22afc53e003b41445f48ae7407d45b0c2738 = $this->env->getExtension("native_profiler");
        $__internal_31c1bc92120c75b64c03d2df198e22afc53e003b41445f48ae7407d45b0c2738->enter($__internal_31c1bc92120c75b64c03d2df198e22afc53e003b41445f48ae7407d45b0c2738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31c1bc92120c75b64c03d2df198e22afc53e003b41445f48ae7407d45b0c2738->leave($__internal_31c1bc92120c75b64c03d2df198e22afc53e003b41445f48ae7407d45b0c2738_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ed718fa6b1800b4a3d2c3836a56247f14880fa744b1cdf3ce886bcb0e1dabac = $this->env->getExtension("native_profiler");
        $__internal_8ed718fa6b1800b4a3d2c3836a56247f14880fa744b1cdf3ce886bcb0e1dabac->enter($__internal_8ed718fa6b1800b4a3d2c3836a56247f14880fa744b1cdf3ce886bcb0e1dabac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8ed718fa6b1800b4a3d2c3836a56247f14880fa744b1cdf3ce886bcb0e1dabac->leave($__internal_8ed718fa6b1800b4a3d2c3836a56247f14880fa744b1cdf3ce886bcb0e1dabac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_69d800ac9ae18868d403f13791b4e9530c3d23529a24051c3f01b7e2cbb2822a = $this->env->getExtension("native_profiler");
        $__internal_69d800ac9ae18868d403f13791b4e9530c3d23529a24051c3f01b7e2cbb2822a->enter($__internal_69d800ac9ae18868d403f13791b4e9530c3d23529a24051c3f01b7e2cbb2822a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_69d800ac9ae18868d403f13791b4e9530c3d23529a24051c3f01b7e2cbb2822a->leave($__internal_69d800ac9ae18868d403f13791b4e9530c3d23529a24051c3f01b7e2cbb2822a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5f0258b7a45b9f1d03e10b121d82cf117b3df8b967a221af79bb38a2d574107 = $this->env->getExtension("native_profiler");
        $__internal_d5f0258b7a45b9f1d03e10b121d82cf117b3df8b967a221af79bb38a2d574107->enter($__internal_d5f0258b7a45b9f1d03e10b121d82cf117b3df8b967a221af79bb38a2d574107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d5f0258b7a45b9f1d03e10b121d82cf117b3df8b967a221af79bb38a2d574107->leave($__internal_d5f0258b7a45b9f1d03e10b121d82cf117b3df8b967a221af79bb38a2d574107_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
