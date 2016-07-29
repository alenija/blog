<?php

/* BlogBundle:Comment:form.html.twig */
class __TwigTemplate_9b7337d37ec7086355ceca7e8bbd102f7d1aed8741b2d093e9fb21f709719d27 extends Twig_Template
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
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("BloggerBlogBundle_comment_create", array("blog_id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "blog", array()), "id", array()))), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "

    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
<p>
    <input type=\"submit\" value=\"Submit\">
</p>";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Comment/form.html.twig #}*/
/* {{ form_start(form, { 'action': path('BloggerBlogBundle_comment_create' , { 'blog_id' : comment.blog.id }), 'method': 'POST', 'attr': {'class': 'blogger'} }) }}*/
/* */
/*     {{ form_widget(form) }}*/
/* <p>*/
/*     <input type="submit" value="Submit">*/
/* </p>*/
