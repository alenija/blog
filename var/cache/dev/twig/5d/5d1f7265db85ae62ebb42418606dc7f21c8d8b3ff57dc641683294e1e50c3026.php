<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_452ec9a31c20a4fc5bf19d3bad059df120eca62e6741a6246c5936d8dc703782 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffe50c341ac1d933d913a392b648f5db48f10c31bd47ef443b0eaea86d4862dc = $this->env->getExtension("native_profiler");
        $__internal_ffe50c341ac1d933d913a392b648f5db48f10c31bd47ef443b0eaea86d4862dc->enter($__internal_ffe50c341ac1d933d913a392b648f5db48f10c31bd47ef443b0eaea86d4862dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffe50c341ac1d933d913a392b648f5db48f10c31bd47ef443b0eaea86d4862dc->leave($__internal_ffe50c341ac1d933d913a392b648f5db48f10c31bd47ef443b0eaea86d4862dc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_220ef608998799c347b3fa0f25790b14d3987d055ec69fbadfbc6e77cbb84a43 = $this->env->getExtension("native_profiler");
        $__internal_220ef608998799c347b3fa0f25790b14d3987d055ec69fbadfbc6e77cbb84a43->enter($__internal_220ef608998799c347b3fa0f25790b14d3987d055ec69fbadfbc6e77cbb84a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_220ef608998799c347b3fa0f25790b14d3987d055ec69fbadfbc6e77cbb84a43->leave($__internal_220ef608998799c347b3fa0f25790b14d3987d055ec69fbadfbc6e77cbb84a43_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
