<?php

/* BlogBundle:Page:about.html.twig */
class __TwigTemplate_3490dc5c2c010e9ff206f5ff1cbf3ebface2719a1cd0081940dedadd55939ae7 extends Twig_Template
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
        $__internal_f6073f60f31669eb53b30904a9d5b2472084a90e7419086fe778877d589f6f4a = $this->env->getExtension("native_profiler");
        $__internal_f6073f60f31669eb53b30904a9d5b2472084a90e7419086fe778877d589f6f4a->enter($__internal_f6073f60f31669eb53b30904a9d5b2472084a90e7419086fe778877d589f6f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6073f60f31669eb53b30904a9d5b2472084a90e7419086fe778877d589f6f4a->leave($__internal_f6073f60f31669eb53b30904a9d5b2472084a90e7419086fe778877d589f6f4a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec5ba3417959ddb304b5bb0ee0f2db1e81a14d81c515864e363a1a14a413bc0f = $this->env->getExtension("native_profiler");
        $__internal_ec5ba3417959ddb304b5bb0ee0f2db1e81a14d81c515864e363a1a14a413bc0f->enter($__internal_ec5ba3417959ddb304b5bb0ee0f2db1e81a14d81c515864e363a1a14a413bc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_ec5ba3417959ddb304b5bb0ee0f2db1e81a14d81c515864e363a1a14a413bc0f->leave($__internal_ec5ba3417959ddb304b5bb0ee0f2db1e81a14d81c515864e363a1a14a413bc0f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0eeda4afd537aee8e77a492955aae878df77ba9dedb2d854a6fdf7a96fa2c17c = $this->env->getExtension("native_profiler");
        $__internal_0eeda4afd537aee8e77a492955aae878df77ba9dedb2d854a6fdf7a96fa2c17c->enter($__internal_0eeda4afd537aee8e77a492955aae878df77ba9dedb2d854a6fdf7a96fa2c17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0eeda4afd537aee8e77a492955aae878df77ba9dedb2d854a6fdf7a96fa2c17c->leave($__internal_0eeda4afd537aee8e77a492955aae878df77ba9dedb2d854a6fdf7a96fa2c17c_prof);

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
