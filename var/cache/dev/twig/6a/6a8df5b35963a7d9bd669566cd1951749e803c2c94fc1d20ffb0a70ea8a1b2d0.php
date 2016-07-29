<?php

/* SonataAdminBundle:CRUD:list__action_delete.html.twig */
class __TwigTemplate_a601c13c8b72315ce4e71de8af24ffdd4864064fd6fe6f2bdb95c525e64b6ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2af1e44d4e00c41d08a53f1ff2ffdcf8b4a4333790eac974b0dea72f122728b = $this->env->getExtension("native_profiler");
        $__internal_c2af1e44d4e00c41d08a53f1ff2ffdcf8b4a4333790eac974b0dea72f122728b->enter($__internal_c2af1e44d4e00c41d08a53f1ff2ffdcf8b4a4333790eac974b0dea72f122728b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action_delete.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "delete"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default delete_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"fa fa-times\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_c2af1e44d4e00c41d08a53f1ff2ffdcf8b4a4333790eac974b0dea72f122728b->leave($__internal_c2af1e44d4e00c41d08a53f1ff2ffdcf8b4a4333790eac974b0dea72f122728b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  27 => 13,  25 => 12,  22 => 11,);
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
/* {% if admin.isGranted('DELETE', object) and admin.hasRoute('delete') %}*/
/*     <a href="{{ admin.generateObjectUrl('delete', object) }}" class="btn btn-sm btn-default delete_link" title="{{ 'action_delete'|trans({}, 'SonataAdminBundle') }}">*/
/*         <i class="fa fa-times"></i>*/
/*         {{ 'action_delete'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endif %}*/
/* */
