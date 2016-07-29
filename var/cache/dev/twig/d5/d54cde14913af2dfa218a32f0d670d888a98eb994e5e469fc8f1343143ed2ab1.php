<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_4e6aed9925dd2edc77ca026ecc08d7f74646b18120da2cb970d4f4877f4e0008 extends Twig_Template
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
        $__internal_bbcc83392f456d445862c81069f7fff094981f98023705a4a6e9220677bc7fd1 = $this->env->getExtension("native_profiler");
        $__internal_bbcc83392f456d445862c81069f7fff094981f98023705a4a6e9220677bc7fd1->enter($__internal_bbcc83392f456d445862c81069f7fff094981f98023705a4a6e9220677bc7fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_bbcc83392f456d445862c81069f7fff094981f98023705a4a6e9220677bc7fd1->leave($__internal_bbcc83392f456d445862c81069f7fff094981f98023705a4a6e9220677bc7fd1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
