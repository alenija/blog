<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_a2a8faa746874adbe54ceeb6347576a5f548d6a3ad94ee724694ab264564c4e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b820161a7f20cf1c5b2cf252aeeb5a9d5387e35a44c8dcc8d4bf839d1da0cf76 = $this->env->getExtension("native_profiler");
        $__internal_b820161a7f20cf1c5b2cf252aeeb5a9d5387e35a44c8dcc8d4bf839d1da0cf76->enter($__internal_b820161a7f20cf1c5b2cf252aeeb5a9d5387e35a44c8dcc8d4bf839d1da0cf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b820161a7f20cf1c5b2cf252aeeb5a9d5387e35a44c8dcc8d4bf839d1da0cf76->leave($__internal_b820161a7f20cf1c5b2cf252aeeb5a9d5387e35a44c8dcc8d4bf839d1da0cf76_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f0aa75c7f409a8ad9d73618f909f8a9a2530314f8b684dfbdfd7fb981d88eb40 = $this->env->getExtension("native_profiler");
        $__internal_f0aa75c7f409a8ad9d73618f909f8a9a2530314f8b684dfbdfd7fb981d88eb40->enter($__internal_f0aa75c7f409a8ad9d73618f909f8a9a2530314f8b684dfbdfd7fb981d88eb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_f0aa75c7f409a8ad9d73618f909f8a9a2530314f8b684dfbdfd7fb981d88eb40->leave($__internal_f0aa75c7f409a8ad9d73618f909f8a9a2530314f8b684dfbdfd7fb981d88eb40_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_26ec761bfaae13a148869552f4b533bea94e0793c2d231f4a9f220a014931358 = $this->env->getExtension("native_profiler");
        $__internal_26ec761bfaae13a148869552f4b533bea94e0793c2d231f4a9f220a014931358->enter($__internal_26ec761bfaae13a148869552f4b533bea94e0793c2d231f4a9f220a014931358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_26ec761bfaae13a148869552f4b533bea94e0793c2d231f4a9f220a014931358->leave($__internal_26ec761bfaae13a148869552f4b533bea94e0793c2d231f4a9f220a014931358_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f102bd0321f89f3ec38abed5e1c8fc3500298c9d24f907fc0d5e5d1f68d5c501 = $this->env->getExtension("native_profiler");
        $__internal_f102bd0321f89f3ec38abed5e1c8fc3500298c9d24f907fc0d5e5d1f68d5c501->enter($__internal_f102bd0321f89f3ec38abed5e1c8fc3500298c9d24f907fc0d5e5d1f68d5c501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f102bd0321f89f3ec38abed5e1c8fc3500298c9d24f907fc0d5e5d1f68d5c501->leave($__internal_f102bd0321f89f3ec38abed5e1c8fc3500298c9d24f907fc0d5e5d1f68d5c501_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
