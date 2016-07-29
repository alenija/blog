<?php

/* BlogBundle:Page:about.html.twig */
class __TwigTemplate_49d65c90f9783cb98f4dd6a2681c8385c5f998b421dce403cd63514add3f6d7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Page:about.html.twig", 1);
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
        $__internal_beed7fc1761d05378bcdd5f752f0efa583b8e825d81163c6cae306a6c0d747cc = $this->env->getExtension("native_profiler");
        $__internal_beed7fc1761d05378bcdd5f752f0efa583b8e825d81163c6cae306a6c0d747cc->enter($__internal_beed7fc1761d05378bcdd5f752f0efa583b8e825d81163c6cae306a6c0d747cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_beed7fc1761d05378bcdd5f752f0efa583b8e825d81163c6cae306a6c0d747cc->leave($__internal_beed7fc1761d05378bcdd5f752f0efa583b8e825d81163c6cae306a6c0d747cc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1e6da3e1fa5b2bae0486b5e5e832434c289a87395b19b4808a54e7281bdcd27 = $this->env->getExtension("native_profiler");
        $__internal_a1e6da3e1fa5b2bae0486b5e5e832434c289a87395b19b4808a54e7281bdcd27->enter($__internal_a1e6da3e1fa5b2bae0486b5e5e832434c289a87395b19b4808a54e7281bdcd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_a1e6da3e1fa5b2bae0486b5e5e832434c289a87395b19b4808a54e7281bdcd27->leave($__internal_a1e6da3e1fa5b2bae0486b5e5e832434c289a87395b19b4808a54e7281bdcd27_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8101ca032aeabcd35fb950a8ddb077eb8d22f30ad207c981b0a60c4ac46e96bc = $this->env->getExtension("native_profiler");
        $__internal_8101ca032aeabcd35fb950a8ddb077eb8d22f30ad207c981b0a60c4ac46e96bc->enter($__internal_8101ca032aeabcd35fb950a8ddb077eb8d22f30ad207c981b0a60c4ac46e96bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <header>
        <h1>About myblog</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
            amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
            Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
            urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
            tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
            condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
            vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
            lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia Curae.</p>
    </article>
";
        
        $__internal_8101ca032aeabcd35fb950a8ddb077eb8d22f30ad207c981b0a60c4ac46e96bc->leave($__internal_8101ca032aeabcd35fb950a8ddb077eb8d22f30ad207c981b0a60c4ac46e96bc_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}About{% endblock%}*/
/* */
/* {% block body %}*/
/*     <header>*/
/*         <h1>About myblog</h1>*/
/*     </header>*/
/*     <article>*/
/*         <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit*/
/*             amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.*/
/*             Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue*/
/*             urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida*/
/*             tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas*/
/*             condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis*/
/*             vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a*/
/*             lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices*/
/*             posuere cubilia Curae.</p>*/
/*     </article>*/
/* {% endblock %}*/
