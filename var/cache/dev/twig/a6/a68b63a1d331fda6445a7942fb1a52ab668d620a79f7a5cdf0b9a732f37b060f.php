<?php

/* BlogBundle:Admin:index.html.twig */
class __TwigTemplate_d8ad9def8265ff2954f0b76150132e48ffb58dcc84d51d0f4c50500392ee4e77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Admin:index.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e7b5e827a1ad35da5f9e796eb9ded5f68d86cba48f601a3a96254c4b0708d56 = $this->env->getExtension("native_profiler");
        $__internal_2e7b5e827a1ad35da5f9e796eb9ded5f68d86cba48f601a3a96254c4b0708d56->enter($__internal_2e7b5e827a1ad35da5f9e796eb9ded5f68d86cba48f601a3a96254c4b0708d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e7b5e827a1ad35da5f9e796eb9ded5f68d86cba48f601a3a96254c4b0708d56->leave($__internal_2e7b5e827a1ad35da5f9e796eb9ded5f68d86cba48f601a3a96254c4b0708d56_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b2c6e5570798eaef92790cbc541602efec7e5555f258f71cc38c80ca33868ad = $this->env->getExtension("native_profiler");
        $__internal_4b2c6e5570798eaef92790cbc541602efec7e5555f258f71cc38c80ca33868ad->enter($__internal_4b2c6e5570798eaef92790cbc541602efec7e5555f258f71cc38c80ca33868ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "79a3604_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_79a3604_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/79a3604_part_1_admin_1.css");
            // line 9
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"admin\" />
    ";
            // asset "79a3604_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_79a3604_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/79a3604_part_1_blog_2.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"admin\" />
    ";
            // asset "79a3604_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_79a3604_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/79a3604_part_1_sidebar_3.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"admin\" />
    ";
        } else {
            // asset "79a3604"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_79a3604") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/79a3604.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"admin\" />
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_4b2c6e5570798eaef92790cbc541602efec7e5555f258f71cc38c80ca33868ad->leave($__internal_4b2c6e5570798eaef92790cbc541602efec7e5555f258f71cc38c80ca33868ad_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac6de2af3a3f7baaf507f086a3b58b1a1d0d46ac8b233284d3e489b9ccf1a943 = $this->env->getExtension("native_profiler");
        $__internal_ac6de2af3a3f7baaf507f086a3b58b1a1d0d46ac8b233284d3e489b9ccf1a943->enter($__internal_ac6de2af3a3f7baaf507f086a3b58b1a1d0d46ac8b233284d3e489b9ccf1a943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_ac6de2af3a3f7baaf507f086a3b58b1a1d0d46ac8b233284d3e489b9ccf1a943->leave($__internal_ac6de2af3a3f7baaf507f086a3b58b1a1d0d46ac8b233284d3e489b9ccf1a943_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4d5305b9c5632b6114adeb1f73f565549ec56882ffee6ecffb6c69a8950e196 = $this->env->getExtension("native_profiler");
        $__internal_c4d5305b9c5632b6114adeb1f73f565549ec56882ffee6ecffb6c69a8950e196->enter($__internal_c4d5305b9c5632b6114adeb1f73f565549ec56882ffee6ecffb6c69a8950e196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <h2>
        Welcome to the administrator's page, ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "!
    </h2>

    <p>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 22
            echo "                <div class=\"flash-notice\">
                    ";
            // line 23
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </p>

    <h3>
        The articles:
    </h3>
    <table class=\"articles\">
        <tr>
            <th>id</th>
            <th>image </th>
            <th>title </th>
            <th>author</th>
            <th>comments</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 43
            echo "            <tr>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "id", array()), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute($context["blog"], "image", array())))), "html", null, true);
            echo "\" /></td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "author", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "commentsCount", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()), "slug" => $this->getAttribute($context["blog"], "slug", array()))), "html", null, true);
            echo "\">View</a></td>
                <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_update", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\">Change</a></td>
                <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_delete", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\">Delete</a></td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "            <p>There are no blog entries for symblog</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </table>

";
        
        $__internal_c4d5305b9c5632b6114adeb1f73f565549ec56882ffee6ecffb6c69a8950e196->leave($__internal_c4d5305b9c5632b6114adeb1f73f565549ec56882ffee6ecffb6c69a8950e196_prof);

    }

    // line 60
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_839c3ebd8a029c3191ddff59f30622c7413c9e70720df64529b1f6abb1199e00 = $this->env->getExtension("native_profiler");
        $__internal_839c3ebd8a029c3191ddff59f30622c7413c9e70720df64529b1f6abb1199e00->enter($__internal_839c3ebd8a029c3191ddff59f30622c7413c9e70720df64529b1f6abb1199e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_839c3ebd8a029c3191ddff59f30622c7413c9e70720df64529b1f6abb1199e00->leave($__internal_839c3ebd8a029c3191ddff59f30622c7413c9e70720df64529b1f6abb1199e00_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 60,  196 => 56,  189 => 54,  181 => 51,  177 => 50,  173 => 49,  169 => 48,  165 => 47,  161 => 46,  157 => 45,  153 => 44,  150 => 43,  145 => 42,  127 => 26,  118 => 23,  115 => 22,  111 => 21,  104 => 17,  101 => 16,  95 => 15,  83 => 13,  52 => 9,  48 => 6,  43 => 5,  37 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     {% stylesheets*/
/*     '@BlogBundle/Resources/public/css/*'*/
/*     %}*/
/*         <link href="{{ asset_url }}" rel="stylesheet" media="admin" />*/
/*     {% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block title %}Admin{% endblock%}*/
/* */
/* {% block body %}*/
/*     <h2>*/
/*         Welcome to the administrator's page, {{ app.user.username }}!*/
/*     </h2>*/
/* */
/*     <p>*/
/*         {% for flash_message in app.session.flashBag.get('notice') %}*/
/*                 <div class="flash-notice">*/
/*                     {{ flash_message }}*/
/*                 </div>*/
/*         {% endfor %}*/
/*     </p>*/
/* */
/*     <h3>*/
/*         The articles:*/
/*     </h3>*/
/*     <table class="articles">*/
/*         <tr>*/
/*             <th>id</th>*/
/*             <th>image </th>*/
/*             <th>title </th>*/
/*             <th>author</th>*/
/*             <th>comments</th>*/
/*             <th></th>*/
/*             <th></th>*/
/*             <th></th>*/
/*         </tr>*/
/*         {% for blog in blogs %}*/
/*             <tr>*/
/*                 <td>{{ blog.id  }}</td>*/
/*                 <td><img src="{{ asset(['images/',blog.image]|join) }}" /></td>*/
/*                 <td>{{ blog.title  }}</td>*/
/*                 <td>{{ blog.author  }}</td>*/
/*                 <td>{{ blog.commentsCount }}</td>*/
/*                 <td><a href="{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id, 'slug': blog.slug }) }}">View</a></td>*/
/*                 <td><a href="{{ path('BloggerBlogBundle_blog_update', { 'id': blog.id }) }}">Change</a></td>*/
/*                 <td><a href="{{ path('BloggerBlogBundle_blog_delete', { 'id': blog.id }) }}">Delete</a></td>*/
/*             </tr>*/
/*         {% else %}*/
/*             <p>There are no blog entries for symblog</p>*/
/*         {% endfor %}*/
/*     </table>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* {% endblock %}*/
