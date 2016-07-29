<?php

/* SonataAdminBundle:Helper:short-object-description.html.twig */
class __TwigTemplate_8d89e9e030bbb7e24e6441b7f93387d6341e3ebd330f97f31098c6dec152d88a extends Twig_Template
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
        $__internal_a27d582be5fadfdfcf0d5344f4dc944a083c6d43136a97c9e86adad709273b88 = $this->env->getExtension("native_profiler");
        $__internal_a27d582be5fadfdfcf0d5344f4dc944a083c6d43136a97c9e86adad709273b88->enter($__internal_a27d582be5fadfdfcf0d5344f4dc944a083c6d43136a97c9e86adad709273b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:short-object-description.html.twig"));

        // line 1
        echo "<span class=\"inner-field-short-description\">
    ";
        // line 2
        if ((((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT"), "method"))) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => (isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters"))), "method"), "html", null, true);
            echo "\" target=\"new\">";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</span>
";
        
        $__internal_a27d582be5fadfdfcf0d5344f4dc944a083c6d43136a97c9e86adad709273b88->leave($__internal_a27d582be5fadfdfcf0d5344f4dc944a083c6d43136a97c9e86adad709273b88_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:short-object-description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  35 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <span class="inner-field-short-description">*/
/*     {% if object and admin.hasRoute('edit') and admin.isGranted('EDIT') %}*/
/*         <a href="{{ admin.generateObjectUrl('edit', object, link_parameters) }}" target="new">{{ description }}</a>*/
/*     {% else %}*/
/*         {{ description }}*/
/*     {% endif %}*/
/* </span>*/
/* */
