<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_b87324c357f39645663a900cab11447d4b8029004f333bd1eaf79461ac51b1c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7c651b9c7a98a0deddf5e07a452528ba780c49ae6debc2238adfd031375c894 = $this->env->getExtension("native_profiler");
        $__internal_c7c651b9c7a98a0deddf5e07a452528ba780c49ae6debc2238adfd031375c894->enter($__internal_c7c651b9c7a98a0deddf5e07a452528ba780c49ae6debc2238adfd031375c894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7c651b9c7a98a0deddf5e07a452528ba780c49ae6debc2238adfd031375c894->leave($__internal_c7c651b9c7a98a0deddf5e07a452528ba780c49ae6debc2238adfd031375c894_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d9fa05a88f5fb3ba8dbda4644a2a7881d8d144c0cade5e0453df6ef8278eda01 = $this->env->getExtension("native_profiler");
        $__internal_d9fa05a88f5fb3ba8dbda4644a2a7881d8d144c0cade5e0453df6ef8278eda01->enter($__internal_d9fa05a88f5fb3ba8dbda4644a2a7881d8d144c0cade5e0453df6ef8278eda01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_d9fa05a88f5fb3ba8dbda4644a2a7881d8d144c0cade5e0453df6ef8278eda01->leave($__internal_d9fa05a88f5fb3ba8dbda4644a2a7881d8d144c0cade5e0453df6ef8278eda01_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_733c88f310ffb666e59405a15efccc98b955f448075bf64c455031e7f1b90fbc = $this->env->getExtension("native_profiler");
        $__internal_733c88f310ffb666e59405a15efccc98b955f448075bf64c455031e7f1b90fbc->enter($__internal_733c88f310ffb666e59405a15efccc98b955f448075bf64c455031e7f1b90fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_733c88f310ffb666e59405a15efccc98b955f448075bf64c455031e7f1b90fbc->leave($__internal_733c88f310ffb666e59405a15efccc98b955f448075bf64c455031e7f1b90fbc_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_b98ec43beea511ff6b19596fe66460c1f0c541e4244930d3b21084ee055466b0 = $this->env->getExtension("native_profiler");
        $__internal_b98ec43beea511ff6b19596fe66460c1f0c541e4244930d3b21084ee055466b0->enter($__internal_b98ec43beea511ff6b19596fe66460c1f0c541e4244930d3b21084ee055466b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_b98ec43beea511ff6b19596fe66460c1f0c541e4244930d3b21084ee055466b0->leave($__internal_b98ec43beea511ff6b19596fe66460c1f0c541e4244930d3b21084ee055466b0_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_b56b3b062c6e1683f3a936afdb86231ea8d03ee3ab220b2ecc06deb5992e3b14 = $this->env->getExtension("native_profiler");
        $__internal_b56b3b062c6e1683f3a936afdb86231ea8d03ee3ab220b2ecc06deb5992e3b14->enter($__internal_b56b3b062c6e1683f3a936afdb86231ea8d03ee3ab220b2ecc06deb5992e3b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_b56b3b062c6e1683f3a936afdb86231ea8d03ee3ab220b2ecc06deb5992e3b14->leave($__internal_b56b3b062c6e1683f3a936afdb86231ea8d03ee3ab220b2ecc06deb5992e3b14_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  86 => 24,  76 => 22,  70 => 21,  62 => 24,  59 => 21,  53 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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
/* {% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}*/
/* */
/* {% block form %}*/
/*     {% block form_acl_roles %}*/
/*         {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/*     {% block form_acl_users %}*/
/*         {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
