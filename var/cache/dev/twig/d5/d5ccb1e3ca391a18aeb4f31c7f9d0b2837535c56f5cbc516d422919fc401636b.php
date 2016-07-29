<?php

/* BlogBundle:Admin:index.html.twig */
class __TwigTemplate_c4e5a7141c123fe0416d815ad546477954afb38a629172398c697e24605305e9 extends Twig_Template
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
        $__internal_0188a7dc80f6caa636c8702c8b424ec7b81ec011524385117d2005ce76ec1d78 = $this->env->getExtension("native_profiler");
        $__internal_0188a7dc80f6caa636c8702c8b424ec7b81ec011524385117d2005ce76ec1d78->enter($__internal_0188a7dc80f6caa636c8702c8b424ec7b81ec011524385117d2005ce76ec1d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0188a7dc80f6caa636c8702c8b424ec7b81ec011524385117d2005ce76ec1d78->leave($__internal_0188a7dc80f6caa636c8702c8b424ec7b81ec011524385117d2005ce76ec1d78_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_845372e53145213a0ab21620b71dda41db65704aa39cb54d676477152c84f08b = $this->env->getExtension("native_profiler");
        $__internal_845372e53145213a0ab21620b71dda41db65704aa39cb54d676477152c84f08b->enter($__internal_845372e53145213a0ab21620b71dda41db65704aa39cb54d676477152c84f08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_845372e53145213a0ab21620b71dda41db65704aa39cb54d676477152c84f08b->leave($__internal_845372e53145213a0ab21620b71dda41db65704aa39cb54d676477152c84f08b_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f74ff270e4c1f110fdc2ce2bfa1c0cf211bd6874102ab3d89cb36fe12f75396 = $this->env->getExtension("native_profiler");
        $__internal_0f74ff270e4c1f110fdc2ce2bfa1c0cf211bd6874102ab3d89cb36fe12f75396->enter($__internal_0f74ff270e4c1f110fdc2ce2bfa1c0cf211bd6874102ab3d89cb36fe12f75396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_0f74ff270e4c1f110fdc2ce2bfa1c0cf211bd6874102ab3d89cb36fe12f75396->leave($__internal_0f74ff270e4c1f110fdc2ce2bfa1c0cf211bd6874102ab3d89cb36fe12f75396_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_20037234184ee2f846db541b603e7a369935269d883295f079d1e883647dbb9c = $this->env->getExtension("native_profiler");
        $__internal_20037234184ee2f846db541b603e7a369935269d883295f079d1e883647dbb9c->enter($__internal_20037234184ee2f846db541b603e7a369935269d883295f079d1e883647dbb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "            <p>There are no blog entries for myblog</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </table>

";
        
        $__internal_20037234184ee2f846db541b603e7a369935269d883295f079d1e883647dbb9c->leave($__internal_20037234184ee2f846db541b603e7a369935269d883295f079d1e883647dbb9c_prof);

    }

    // line 60
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a91f9f5d1ba2036a12bc4b8e89662ffbd082613f883abbabd795d6f408cbe0d3 = $this->env->getExtension("native_profiler");
        $__internal_a91f9f5d1ba2036a12bc4b8e89662ffbd082613f883abbabd795d6f408cbe0d3->enter($__internal_a91f9f5d1ba2036a12bc4b8e89662ffbd082613f883abbabd795d6f408cbe0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_a91f9f5d1ba2036a12bc4b8e89662ffbd082613f883abbabd795d6f408cbe0d3->leave($__internal_a91f9f5d1ba2036a12bc4b8e89662ffbd082613f883abbabd795d6f408cbe0d3_prof);

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
/*             <p>There are no blog entries for myblog</p>*/
/*         {% endfor %}*/
/*     </table>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* {% endblock %}*/
