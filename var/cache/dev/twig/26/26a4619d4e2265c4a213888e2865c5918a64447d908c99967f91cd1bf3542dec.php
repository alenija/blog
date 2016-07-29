<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0c1544cc9f4bd5627c59237f0d969d21760b0b1e41bacad471ba2005cc76c0b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e697fc828e1ff1772af99e5853cc894b1d1b5b576d9ca4816bd77454694652c3 = $this->env->getExtension("native_profiler");
        $__internal_e697fc828e1ff1772af99e5853cc894b1d1b5b576d9ca4816bd77454694652c3->enter($__internal_e697fc828e1ff1772af99e5853cc894b1d1b5b576d9ca4816bd77454694652c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e697fc828e1ff1772af99e5853cc894b1d1b5b576d9ca4816bd77454694652c3->leave($__internal_e697fc828e1ff1772af99e5853cc894b1d1b5b576d9ca4816bd77454694652c3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_022917186db6686bf1ae17c771982e221d14018d95e7a8f49a9121e9435eb152 = $this->env->getExtension("native_profiler");
        $__internal_022917186db6686bf1ae17c771982e221d14018d95e7a8f49a9121e9435eb152->enter($__internal_022917186db6686bf1ae17c771982e221d14018d95e7a8f49a9121e9435eb152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_022917186db6686bf1ae17c771982e221d14018d95e7a8f49a9121e9435eb152->leave($__internal_022917186db6686bf1ae17c771982e221d14018d95e7a8f49a9121e9435eb152_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
