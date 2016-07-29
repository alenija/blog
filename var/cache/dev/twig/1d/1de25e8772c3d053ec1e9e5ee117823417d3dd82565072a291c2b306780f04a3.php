<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_4300599b9132959ce27e2bc4aadd97c22b41434b79c9cb2990c03fcc41f35bbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e23b2d77728994bbc03f341afa248e58f8ae1b4990a866d225432b3b68a71174 = $this->env->getExtension("native_profiler");
        $__internal_e23b2d77728994bbc03f341afa248e58f8ae1b4990a866d225432b3b68a71174->enter($__internal_e23b2d77728994bbc03f341afa248e58f8ae1b4990a866d225432b3b68a71174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_e23b2d77728994bbc03f341afa248e58f8ae1b4990a866d225432b3b68a71174->leave($__internal_e23b2d77728994bbc03f341afa248e58f8ae1b4990a866d225432b3b68a71174_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_559a3471ecaae2ae6b9ef85bf52327e794d8982ef26e00ae733d1befe433348d = $this->env->getExtension("native_profiler");
        $__internal_559a3471ecaae2ae6b9ef85bf52327e794d8982ef26e00ae733d1befe433348d->enter($__internal_559a3471ecaae2ae6b9ef85bf52327e794d8982ef26e00ae733d1befe433348d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_559a3471ecaae2ae6b9ef85bf52327e794d8982ef26e00ae733d1befe433348d->leave($__internal_559a3471ecaae2ae6b9ef85bf52327e794d8982ef26e00ae733d1befe433348d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
