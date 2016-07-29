<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_9cf76faa219af9beefaab933b160e1a47f159cc6aecc20ccec3ea43bfb6c48e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_5357476183b51603e4dae0bfb4120f883363e87a610a30c8676faf5d2ea54fa0 = $this->env->getExtension("native_profiler");
        $__internal_5357476183b51603e4dae0bfb4120f883363e87a610a30c8676faf5d2ea54fa0->enter($__internal_5357476183b51603e4dae0bfb4120f883363e87a610a30c8676faf5d2ea54fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5357476183b51603e4dae0bfb4120f883363e87a610a30c8676faf5d2ea54fa0->leave($__internal_5357476183b51603e4dae0bfb4120f883363e87a610a30c8676faf5d2ea54fa0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bbc17bedf61efc68fc271fbd22ca4476a8158202338bc8a7c63940df8cbafc7b = $this->env->getExtension("native_profiler");
        $__internal_bbc17bedf61efc68fc271fbd22ca4476a8158202338bc8a7c63940df8cbafc7b->enter($__internal_bbc17bedf61efc68fc271fbd22ca4476a8158202338bc8a7c63940df8cbafc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_bbc17bedf61efc68fc271fbd22ca4476a8158202338bc8a7c63940df8cbafc7b->leave($__internal_bbc17bedf61efc68fc271fbd22ca4476a8158202338bc8a7c63940df8cbafc7b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
