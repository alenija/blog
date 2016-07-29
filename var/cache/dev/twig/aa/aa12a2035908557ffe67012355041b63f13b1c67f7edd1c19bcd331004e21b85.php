<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_0758ae09fe8d04cf3925be209f1074f2d263a77eaf60d5bb49cb371cadd525bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a8637ab528d29f71a6b8e118dd96f35e11b3caaa47513cf6af70dae511166ca = $this->env->getExtension("native_profiler");
        $__internal_5a8637ab528d29f71a6b8e118dd96f35e11b3caaa47513cf6af70dae511166ca->enter($__internal_5a8637ab528d29f71a6b8e118dd96f35e11b3caaa47513cf6af70dae511166ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a8637ab528d29f71a6b8e118dd96f35e11b3caaa47513cf6af70dae511166ca->leave($__internal_5a8637ab528d29f71a6b8e118dd96f35e11b3caaa47513cf6af70dae511166ca_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_07ae7fc97daca0176d78da25eed54e14a0b3eaf573fe5d4fa1f1d69ae4a4bb39 = $this->env->getExtension("native_profiler");
        $__internal_07ae7fc97daca0176d78da25eed54e14a0b3eaf573fe5d4fa1f1d69ae4a4bb39->enter($__internal_07ae7fc97daca0176d78da25eed54e14a0b3eaf573fe5d4fa1f1d69ae4a4bb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_07ae7fc97daca0176d78da25eed54e14a0b3eaf573fe5d4fa1f1d69ae4a4bb39->leave($__internal_07ae7fc97daca0176d78da25eed54e14a0b3eaf573fe5d4fa1f1d69ae4a4bb39_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_a10b66db0c3521cb1e6d94dfe6fe6fcc9f755175b18e7bf191aa5843aa6b88d3 = $this->env->getExtension("native_profiler");
        $__internal_a10b66db0c3521cb1e6d94dfe6fe6fcc9f755175b18e7bf191aa5843aa6b88d3->enter($__internal_a10b66db0c3521cb1e6d94dfe6fe6fcc9f755175b18e7bf191aa5843aa6b88d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_a10b66db0c3521cb1e6d94dfe6fe6fcc9f755175b18e7bf191aa5843aa6b88d3->leave($__internal_a10b66db0c3521cb1e6d94dfe6fe6fcc9f755175b18e7bf191aa5843aa6b88d3_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_27c41f66268b8541d69ef64dba34d937469876eaf80fa7261ca1c6eddc60a7a2 = $this->env->getExtension("native_profiler");
        $__internal_27c41f66268b8541d69ef64dba34d937469876eaf80fa7261ca1c6eddc60a7a2->enter($__internal_27c41f66268b8541d69ef64dba34d937469876eaf80fa7261ca1c6eddc60a7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_27c41f66268b8541d69ef64dba34d937469876eaf80fa7261ca1c6eddc60a7a2->leave($__internal_27c41f66268b8541d69ef64dba34d937469876eaf80fa7261ca1c6eddc60a7a2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 24,  58 => 20,  55 => 19,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
