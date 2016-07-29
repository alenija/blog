<?php

/* BlogBundle:Page:contact.html.twig */
class __TwigTemplate_4eb003a9a294ed60b9a6a3c4b02ea2bc0eba7633253aa681d887801a0c9508db extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Contact";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>

    <p>Want to contact symblog?</p>

    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact"), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row');
        echo "
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'row');
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'row');
        echo "

    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

    <input type=\"submit\" value=\"Submit\" />

";
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
        return array (  72 => 20,  67 => 18,  63 => 17,  59 => 16,  55 => 15,  50 => 13,  46 => 12,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Contact{% endblock%}*/
/* */
/* {% block body %}*/
/*     <header>*/
/*         <h1>Contact symblog</h1>*/
/*     </header>*/
/* */
/*     <p>Want to contact symblog?</p>*/
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
