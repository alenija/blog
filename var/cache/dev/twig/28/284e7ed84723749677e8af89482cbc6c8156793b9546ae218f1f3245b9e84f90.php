<?php

/* BlogBundle:Page:contact.html.twig */
class __TwigTemplate_6d30350277dbb8f43644289f90529ebfeb37e0df0de843e0687f682577fc5685 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Page:contact.html.twig", 1);
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
        $__internal_d5492c1edd2b2a8837a4e07f16479a9ba03699216f7e14d78ba5372c7485c86b = $this->env->getExtension("native_profiler");
        $__internal_d5492c1edd2b2a8837a4e07f16479a9ba03699216f7e14d78ba5372c7485c86b->enter($__internal_d5492c1edd2b2a8837a4e07f16479a9ba03699216f7e14d78ba5372c7485c86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5492c1edd2b2a8837a4e07f16479a9ba03699216f7e14d78ba5372c7485c86b->leave($__internal_d5492c1edd2b2a8837a4e07f16479a9ba03699216f7e14d78ba5372c7485c86b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a29bb3b7a0f23122b6c44d93e3bc284481feb9245ddf2a61681be28237cac10d = $this->env->getExtension("native_profiler");
        $__internal_a29bb3b7a0f23122b6c44d93e3bc284481feb9245ddf2a61681be28237cac10d->enter($__internal_a29bb3b7a0f23122b6c44d93e3bc284481feb9245ddf2a61681be28237cac10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_a29bb3b7a0f23122b6c44d93e3bc284481feb9245ddf2a61681be28237cac10d->leave($__internal_a29bb3b7a0f23122b6c44d93e3bc284481feb9245ddf2a61681be28237cac10d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_de42aed1a9fd421ec77fe662170d67ab44bb849a25291b34560300797cf871c7 = $this->env->getExtension("native_profiler");
        $__internal_de42aed1a9fd421ec77fe662170d67ab44bb849a25291b34560300797cf871c7->enter($__internal_de42aed1a9fd421ec77fe662170d67ab44bb849a25291b34560300797cf871c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <header>
        <h1>Contact myblog</h1>
    </header>

    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "blogger-notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"blogger-notice\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    <p>Want to contact myblog?</p>

    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact"), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'row');
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row');
        echo "

    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    <input type=\"submit\" value=\"Submit\" />

";
        
        $__internal_de42aed1a9fd421ec77fe662170d67ab44bb849a25291b34560300797cf871c7->leave($__internal_de42aed1a9fd421ec77fe662170d67ab44bb849a25291b34560300797cf871c7_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 26,  101 => 24,  97 => 23,  93 => 22,  89 => 21,  84 => 19,  80 => 18,  75 => 15,  66 => 12,  63 => 11,  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Contact{% endblock%}*/
/* */
/* {% block body %}*/
/*     <header>*/
/*         <h1>Contact myblog</h1>*/
/*     </header>*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('blogger-notice') %}*/
/*         <div class="blogger-notice">*/
/*             {{ flashMessage }}*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*     <p>Want to contact myblog?</p>*/
/* */
/*     {{ form_start(form, { 'action': path('BloggerBlogBundle_contact'), 'method': 'POST', 'attr': {'class': 'blogger'} }) }}*/
/*     {{ form_errors(form) }}*/
/* */
/*     {{ form_row(form.name) }}*/
/*     {{ form_row(form.email) }}*/
/*     {{ form_row(form.subject) }}*/
/*     {{ form_row(form.body) }}*/
/* */
/*     {{ form_rest(form) }}*/
/* */
/*     <input type="submit" value="Submit" />*/
/* */
/* {% endblock %}*/
