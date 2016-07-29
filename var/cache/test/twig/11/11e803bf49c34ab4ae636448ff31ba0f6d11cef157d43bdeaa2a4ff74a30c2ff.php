<?php

/* BlogBundle:Page:sidebar.html.twig */
class __TwigTemplate_28b891f6e6ccc02d5a0a53f2445c2af36925c82551c19d4a168a779021486e55 extends Twig_Template
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
        $__internal_736733e1042402bde1666893df70de3df8f27b77d20db6afabce70a2160c79c8 = $this->env->getExtension("native_profiler");
        $__internal_736733e1042402bde1666893df70de3df8f27b77d20db6afabce70a2160c79c8->enter($__internal_736733e1042402bde1666893df70de3df8f27b77d20db6afabce70a2160c79c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:sidebar.html.twig"));

        // line 2
        echo "
<section class=\"section\">
    <header>
        <h3>Tag Cloud</h3>
    </header>
    <p class=\"tags\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["tag"] => $context["weight"]) {
            // line 9
            echo "        <span class=\"weight-";
            echo twig_escape_filter($this->env, $context["weight"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</span>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "    <p>There are no tags</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['weight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </p>
</section>

<section class=\"section\">
    <header>
        <h3>Latest Comments</h3>
    </header>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestComments"]) ? $context["latestComments"] : $this->getContext($context, "latestComments")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 21
            echo "        <article class=\"comment\">
            <header>
                <p class=\"small\"><span class=\"highlight\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "user", array()), "html", null, true);
            echo "</span> commented on
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($this->getAttribute($context["comment"], "blog", array()), "id", array()), "slug" => $this->getAttribute($this->getAttribute($context["comment"], "blog", array()), "slug", array()))), "html", null, true);
            echo "#comment-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "blog", array()), "title", array()), "html", null, true);
            echo "
                    </a>
                    <em><time datetime=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('blogger_blog_extension')->createdAgo($this->getAttribute($context["comment"], "created", array())), "html", null, true);
            echo " </time></em>
                </p>
            </header>
            <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
            echo "</p>
            </p>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "        <p>There are no recent comments</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</section>";
        
        $__internal_736733e1042402bde1666893df70de3df8f27b77d20db6afabce70a2160c79c8->leave($__internal_736733e1042402bde1666893df70de3df8f27b77d20db6afabce70a2160c79c8_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Page:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 36,  102 => 34,  93 => 30,  85 => 27,  80 => 25,  74 => 24,  70 => 23,  66 => 21,  61 => 20,  52 => 13,  45 => 11,  35 => 9,  30 => 8,  22 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Page/sidebar.html.twig #}*/
/* */
/* <section class="section">*/
/*     <header>*/
/*         <h3>Tag Cloud</h3>*/
/*     </header>*/
/*     <p class="tags">*/
/*         {% for tag, weight in tags %}*/
/*         <span class="weight-{{ weight }}">{{ tag }}</span>*/
/*         {% else %}*/
/*     <p>There are no tags</p>*/
/*     {% endfor %}*/
/*     </p>*/
/* </section>*/
/* */
/* <section class="section">*/
/*     <header>*/
/*         <h3>Latest Comments</h3>*/
/*     </header>*/
/*     {% for comment in latestComments %}*/
/*         <article class="comment">*/
/*             <header>*/
/*                 <p class="small"><span class="highlight">{{ comment.user }}</span> commented on*/
/*                     <a href="{{ path('BloggerBlogBundle_blog_show', { 'id': comment.blog.id, 'slug': comment.blog.slug  }) }}#comment-{{ comment.id }}">*/
/*                         {{ comment.blog.title }}*/
/*                     </a>*/
/*                     <em><time datetime="{{ comment.created|date('c') }}">{{ comment.created|created_ago }} </time></em>*/
/*                 </p>*/
/*             </header>*/
/*             <p>{{ comment.comment }}</p>*/
/*             </p>*/
/*         </article>*/
/*     {% else %}*/
/*         <p>There are no recent comments</p>*/
/*     {% endfor %}*/
/* </section>*/
