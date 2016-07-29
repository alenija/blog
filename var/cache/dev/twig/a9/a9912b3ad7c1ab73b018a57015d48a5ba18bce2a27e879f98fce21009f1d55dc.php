<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_5b5ced9c781055cccc89d26b08c36151bf0cf8ec91fde890a3d6382602b22d35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_77ffadaf6b82c7ddb7858a8b547ff0a1e15d7b425791785c5cf75313a8d1397c = $this->env->getExtension("native_profiler");
        $__internal_77ffadaf6b82c7ddb7858a8b547ff0a1e15d7b425791785c5cf75313a8d1397c->enter($__internal_77ffadaf6b82c7ddb7858a8b547ff0a1e15d7b425791785c5cf75313a8d1397c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77ffadaf6b82c7ddb7858a8b547ff0a1e15d7b425791785c5cf75313a8d1397c->leave($__internal_77ffadaf6b82c7ddb7858a8b547ff0a1e15d7b425791785c5cf75313a8d1397c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4614a106ea4fc9b3dc312e50e8cecd96433bd3ee799de709f6dbdc946a5a3a46 = $this->env->getExtension("native_profiler");
        $__internal_4614a106ea4fc9b3dc312e50e8cecd96433bd3ee799de709f6dbdc946a5a3a46->enter($__internal_4614a106ea4fc9b3dc312e50e8cecd96433bd3ee799de709f6dbdc946a5a3a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_4614a106ea4fc9b3dc312e50e8cecd96433bd3ee799de709f6dbdc946a5a3a46->leave($__internal_4614a106ea4fc9b3dc312e50e8cecd96433bd3ee799de709f6dbdc946a5a3a46_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
