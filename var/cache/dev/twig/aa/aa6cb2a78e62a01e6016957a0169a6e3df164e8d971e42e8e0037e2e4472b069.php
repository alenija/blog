<?php

/* BlogBundle:Blog:edit.html.twig */
class __TwigTemplate_8a8051c68d1f68d9a9c89472135d230ec51f7788e225290cdd9aa4b10d15590d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Blog:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cfc3a89e62668e55c88a86c2a6bac0b25451b824bf7a46a68bb3b26c987516b = $this->env->getExtension("native_profiler");
        $__internal_7cfc3a89e62668e55c88a86c2a6bac0b25451b824bf7a46a68bb3b26c987516b->enter($__internal_7cfc3a89e62668e55c88a86c2a6bac0b25451b824bf7a46a68bb3b26c987516b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cfc3a89e62668e55c88a86c2a6bac0b25451b824bf7a46a68bb3b26c987516b->leave($__internal_7cfc3a89e62668e55c88a86c2a6bac0b25451b824bf7a46a68bb3b26c987516b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_35f7ff7a768b45a62ce84fe47aff1594585ee6ffcd7d1f35dea66838d1fbbb58 = $this->env->getExtension("native_profiler");
        $__internal_35f7ff7a768b45a62ce84fe47aff1594585ee6ffcd7d1f35dea66838d1fbbb58->enter($__internal_35f7ff7a768b45a62ce84fe47aff1594585ee6ffcd7d1f35dea66838d1fbbb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add Blog";
        
        $__internal_35f7ff7a768b45a62ce84fe47aff1594585ee6ffcd7d1f35dea66838d1fbbb58->leave($__internal_35f7ff7a768b45a62ce84fe47aff1594585ee6ffcd7d1f35dea66838d1fbbb58_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_45b3a13fd7cc9ef46ce1b3081daf57f57f8fef9de9f054b2d765fb41bdee52ac = $this->env->getExtension("native_profiler");
        $__internal_45b3a13fd7cc9ef46ce1b3081daf57f57f8fef9de9f054b2d765fb41bdee52ac->enter($__internal_45b3a13fd7cc9ef46ce1b3081daf57f57f8fef9de9f054b2d765fb41bdee52ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Edit article for blog ";
        echo twig_escape_filter($this->env, (isset($context["Title"]) ? $context["Title"] : $this->getContext($context, "Title")), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST", "attr" => array("class" => "blogger")));
        // line 12
        echo "
    
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
";
        
        $__internal_45b3a13fd7cc9ef46ce1b3081daf57f57f8fef9de9f054b2d765fb41bdee52ac->leave($__internal_45b3a13fd7cc9ef46ce1b3081daf57f57f8fef9de9f054b2d765fb41bdee52ac_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  61 => 12,  59 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Add Blog{% endblock%}*/
/* */
/* {% block body %}*/
/*     <h1>Edit article for blog {{ Title }}</h1>*/
/* */
/*     {{ form_start(form, {*/
/*         'method': 'POST',*/
/*         'attr': {'class': 'blogger'}*/
/*     }*/
/*     ) }}*/
/*     */
/*     {{ form_widget(form) }}*/
/*     <p>*/
/*         <input type="submit" value="Submit">*/
/*     </p>*/
/* {% endblock %}*/
