<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_76ba2ba3b03253a6c3d95195683e63579e49ed0d418e8b60bdc568f7ea85c110 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d343e8e0e922a5bb1f738609d2259f84b32940a606ed25862919dbeda5cec2d3 = $this->env->getExtension("native_profiler");
        $__internal_d343e8e0e922a5bb1f738609d2259f84b32940a606ed25862919dbeda5cec2d3->enter($__internal_d343e8e0e922a5bb1f738609d2259f84b32940a606ed25862919dbeda5cec2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d343e8e0e922a5bb1f738609d2259f84b32940a606ed25862919dbeda5cec2d3->leave($__internal_d343e8e0e922a5bb1f738609d2259f84b32940a606ed25862919dbeda5cec2d3_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_cfc4b9de7e40ac96d52adcfb2b8d049386acbd3928394a3615cbd908215633d7 = $this->env->getExtension("native_profiler");
        $__internal_cfc4b9de7e40ac96d52adcfb2b8d049386acbd3928394a3615cbd908215633d7->enter($__internal_cfc4b9de7e40ac96d52adcfb2b8d049386acbd3928394a3615cbd908215633d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_cfc4b9de7e40ac96d52adcfb2b8d049386acbd3928394a3615cbd908215633d7->leave($__internal_cfc4b9de7e40ac96d52adcfb2b8d049386acbd3928394a3615cbd908215633d7_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_a8117fdbcb0f645ed555bc015758a988297fee24c2165c720b2d29217d0669f5 = $this->env->getExtension("native_profiler");
        $__internal_a8117fdbcb0f645ed555bc015758a988297fee24c2165c720b2d29217d0669f5->enter($__internal_a8117fdbcb0f645ed555bc015758a988297fee24c2165c720b2d29217d0669f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_a8117fdbcb0f645ed555bc015758a988297fee24c2165c720b2d29217d0669f5->leave($__internal_a8117fdbcb0f645ed555bc015758a988297fee24c2165c720b2d29217d0669f5_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_4623b2b6641fc1d4339122106051c528bac25274eb8f0a28b75734e46b86085c = $this->env->getExtension("native_profiler");
        $__internal_4623b2b6641fc1d4339122106051c528bac25274eb8f0a28b75734e46b86085c->enter($__internal_4623b2b6641fc1d4339122106051c528bac25274eb8f0a28b75734e46b86085c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_4623b2b6641fc1d4339122106051c528bac25274eb8f0a28b75734e46b86085c->leave($__internal_4623b2b6641fc1d4339122106051c528bac25274eb8f0a28b75734e46b86085c_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_c1ad592fb7ca3abfc65eb4439319cf91eb598c76b5299430d06f247d62cbb17f = $this->env->getExtension("native_profiler");
        $__internal_c1ad592fb7ca3abfc65eb4439319cf91eb598c76b5299430d06f247d62cbb17f->enter($__internal_c1ad592fb7ca3abfc65eb4439319cf91eb598c76b5299430d06f247d62cbb17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_c1ad592fb7ca3abfc65eb4439319cf91eb598c76b5299430d06f247d62cbb17f->leave($__internal_c1ad592fb7ca3abfc65eb4439319cf91eb598c76b5299430d06f247d62cbb17f_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e41a76474f51912ab05b6521e4e868fac4a96543e4eb3959638f6286494add6 = $this->env->getExtension("native_profiler");
        $__internal_2e41a76474f51912ab05b6521e4e868fac4a96543e4eb3959638f6286494add6->enter($__internal_2e41a76474f51912ab05b6521e4e868fac4a96543e4eb3959638f6286494add6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_2e41a76474f51912ab05b6521e4e868fac4a96543e4eb3959638f6286494add6->leave($__internal_2e41a76474f51912ab05b6521e4e868fac4a96543e4eb3959638f6286494add6_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_311a4257ef9a1e625190c6c33d8a1e919275c4785c7c82b53526f2f83e269ebc = $this->env->getExtension("native_profiler");
        $__internal_311a4257ef9a1e625190c6c33d8a1e919275c4785c7c82b53526f2f83e269ebc->enter($__internal_311a4257ef9a1e625190c6c33d8a1e919275c4785c7c82b53526f2f83e269ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_311a4257ef9a1e625190c6c33d8a1e919275c4785c7c82b53526f2f83e269ebc->leave($__internal_311a4257ef9a1e625190c6c33d8a1e919275c4785c7c82b53526f2f83e269ebc_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_1d1e2d59e780b9f5100c102ffe71ce19fc89ea88edb4cc1058e30f44b8dde33e = $this->env->getExtension("native_profiler");
        $__internal_1d1e2d59e780b9f5100c102ffe71ce19fc89ea88edb4cc1058e30f44b8dde33e->enter($__internal_1d1e2d59e780b9f5100c102ffe71ce19fc89ea88edb4cc1058e30f44b8dde33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_1d1e2d59e780b9f5100c102ffe71ce19fc89ea88edb4cc1058e30f44b8dde33e->leave($__internal_1d1e2d59e780b9f5100c102ffe71ce19fc89ea88edb4cc1058e30f44b8dde33e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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
/* {% extends admin_pool.getTemplate('layout') %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
