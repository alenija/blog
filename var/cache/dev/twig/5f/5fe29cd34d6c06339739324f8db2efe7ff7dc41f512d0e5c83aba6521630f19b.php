<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_fd961daca520bfd379d2e00328544d174c7d1e8d28134154ee8fb6b75ebd50e3 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a9ee26fc59b3a1b0c72ff4194619ab46fe24dcbf0ee140bdb38adfcbc40eda7 = $this->env->getExtension("native_profiler");
        $__internal_0a9ee26fc59b3a1b0c72ff4194619ab46fe24dcbf0ee140bdb38adfcbc40eda7->enter($__internal_0a9ee26fc59b3a1b0c72ff4194619ab46fe24dcbf0ee140bdb38adfcbc40eda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a9ee26fc59b3a1b0c72ff4194619ab46fe24dcbf0ee140bdb38adfcbc40eda7->leave($__internal_0a9ee26fc59b3a1b0c72ff4194619ab46fe24dcbf0ee140bdb38adfcbc40eda7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_57c13b4da29128107bb45ce6c3549c242f26c470a5e8eba9323e29c04d36e1e4 = $this->env->getExtension("native_profiler");
        $__internal_57c13b4da29128107bb45ce6c3549c242f26c470a5e8eba9323e29c04d36e1e4->enter($__internal_57c13b4da29128107bb45ce6c3549c242f26c470a5e8eba9323e29c04d36e1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_57c13b4da29128107bb45ce6c3549c242f26c470a5e8eba9323e29c04d36e1e4->leave($__internal_57c13b4da29128107bb45ce6c3549c242f26c470a5e8eba9323e29c04d36e1e4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
