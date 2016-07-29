<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_2e1785f4a31d7670dc1a09cea44c1f99eee9d8a8f2ce17cae5f178d1e4a338a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e43b7e592962f65b3d24d1fda8cba49453f97f53089fb8a2e8a7c1020515e89b = $this->env->getExtension("native_profiler");
        $__internal_e43b7e592962f65b3d24d1fda8cba49453f97f53089fb8a2e8a7c1020515e89b->enter($__internal_e43b7e592962f65b3d24d1fda8cba49453f97f53089fb8a2e8a7c1020515e89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e43b7e592962f65b3d24d1fda8cba49453f97f53089fb8a2e8a7c1020515e89b->leave($__internal_e43b7e592962f65b3d24d1fda8cba49453f97f53089fb8a2e8a7c1020515e89b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_97ddbd2fddde8f6dd6f4202676e6ddc25e3c7c9399bf20bf985d9d31856d8303 = $this->env->getExtension("native_profiler");
        $__internal_97ddbd2fddde8f6dd6f4202676e6ddc25e3c7c9399bf20bf985d9d31856d8303->enter($__internal_97ddbd2fddde8f6dd6f4202676e6ddc25e3c7c9399bf20bf985d9d31856d8303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_97ddbd2fddde8f6dd6f4202676e6ddc25e3c7c9399bf20bf985d9d31856d8303->leave($__internal_97ddbd2fddde8f6dd6f4202676e6ddc25e3c7c9399bf20bf985d9d31856d8303_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
