<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_9485919f7b56b132c7978d896ff45d31274c77092612cbd2954fc8e75120e327 extends Twig_Template
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
        $__internal_cd4afb28b4cbbb15e6d4f5c4225d4de497b3882d09aaa0ea0ccc60413f8e80ee = $this->env->getExtension("native_profiler");
        $__internal_cd4afb28b4cbbb15e6d4f5c4225d4de497b3882d09aaa0ea0ccc60413f8e80ee->enter($__internal_cd4afb28b4cbbb15e6d4f5c4225d4de497b3882d09aaa0ea0ccc60413f8e80ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_cd4afb28b4cbbb15e6d4f5c4225d4de497b3882d09aaa0ea0ccc60413f8e80ee->leave($__internal_cd4afb28b4cbbb15e6d4f5c4225d4de497b3882d09aaa0ea0ccc60413f8e80ee_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
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
/* {{ revision.timestamp|date }}*/
/* */
