<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_35d7a33c411fd2c33deb020644ea1621fba194a4d6968a6b8977c12ee1317943 extends Twig_Template
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
        $__internal_08f5456cc1be80c3e42a76363c27adb54a2bf7af4899ad225599a2c3eab78b5d = $this->env->getExtension("native_profiler");
        $__internal_08f5456cc1be80c3e42a76363c27adb54a2bf7af4899ad225599a2c3eab78b5d->enter($__internal_08f5456cc1be80c3e42a76363c27adb54a2bf7af4899ad225599a2c3eab78b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08f5456cc1be80c3e42a76363c27adb54a2bf7af4899ad225599a2c3eab78b5d->leave($__internal_08f5456cc1be80c3e42a76363c27adb54a2bf7af4899ad225599a2c3eab78b5d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4771b9e1b011d89d2c0686b01921de5c2ea4df9cd20ae5bab700c448a696607d = $this->env->getExtension("native_profiler");
        $__internal_4771b9e1b011d89d2c0686b01921de5c2ea4df9cd20ae5bab700c448a696607d->enter($__internal_4771b9e1b011d89d2c0686b01921de5c2ea4df9cd20ae5bab700c448a696607d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4771b9e1b011d89d2c0686b01921de5c2ea4df9cd20ae5bab700c448a696607d->leave($__internal_4771b9e1b011d89d2c0686b01921de5c2ea4df9cd20ae5bab700c448a696607d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cccb2f589ba79642c659017f034cc5fd8dfd498c66738edae7118c4998a8d06d = $this->env->getExtension("native_profiler");
        $__internal_cccb2f589ba79642c659017f034cc5fd8dfd498c66738edae7118c4998a8d06d->enter($__internal_cccb2f589ba79642c659017f034cc5fd8dfd498c66738edae7118c4998a8d06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cccb2f589ba79642c659017f034cc5fd8dfd498c66738edae7118c4998a8d06d->leave($__internal_cccb2f589ba79642c659017f034cc5fd8dfd498c66738edae7118c4998a8d06d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_30579db0ce4e81e3a799f7381c9c6c78b988a088c743af77d7362d40adf22169 = $this->env->getExtension("native_profiler");
        $__internal_30579db0ce4e81e3a799f7381c9c6c78b988a088c743af77d7362d40adf22169->enter($__internal_30579db0ce4e81e3a799f7381c9c6c78b988a088c743af77d7362d40adf22169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_30579db0ce4e81e3a799f7381c9c6c78b988a088c743af77d7362d40adf22169->leave($__internal_30579db0ce4e81e3a799f7381c9c6c78b988a088c743af77d7362d40adf22169_prof);

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
