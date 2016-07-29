<?php

/* ::base.html.twig */
class __TwigTemplate_b0ec0985409e38f979d48e9db1d2474d0ba187a32247f125d96ff3d0e0b8312b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23522558be4322fa3c3d316d70a7b76fbbc07b477da49f5185af47bd8d9c4652 = $this->env->getExtension("native_profiler");
        $__internal_23522558be4322fa3c3d316d70a7b76fbbc07b477da49f5185af47bd8d9c4652->enter($__internal_23522558be4322fa3c3d316d70a7b76fbbc07b477da49f5185af47bd8d9c4652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - Symblog</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            ";
        // line 25
        $this->displayBlock('navigation', $context, $blocks);
        // line 40
        echo "        </div>

        <hgroup>
            <h2>";
        // line 43
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
            <h3>";
        // line 44
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
        </hgroup>

    </header>

    <section class=\"main-col\">
        ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 53
        $this->displayBlock('sidebar', $context, $blocks);
        // line 54
        echo "    </aside>

    <div id=\"footer\">
        ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 60
        echo "    </div>
</section>

";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "</body>
</html>";
        
        $__internal_23522558be4322fa3c3d316d70a7b76fbbc07b477da49f5185af47bd8d9c4652->leave($__internal_23522558be4322fa3c3d316d70a7b76fbbc07b477da49f5185af47bd8d9c4652_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_86a9b890b95a4403b17c22f769f0788e9d16360f651e29758fdbc06143d56b44 = $this->env->getExtension("native_profiler");
        $__internal_86a9b890b95a4403b17c22f769f0788e9d16360f651e29758fdbc06143d56b44->enter($__internal_86a9b890b95a4403b17c22f769f0788e9d16360f651e29758fdbc06143d56b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symblog";
        
        $__internal_86a9b890b95a4403b17c22f769f0788e9d16360f651e29758fdbc06143d56b44->leave($__internal_86a9b890b95a4403b17c22f769f0788e9d16360f651e29758fdbc06143d56b44_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e433ad748d696192cff6091eff6183129aca5b4584eada3d2d1b4661f34d6aa = $this->env->getExtension("native_profiler");
        $__internal_8e433ad748d696192cff6091eff6183129aca5b4584eada3d2d1b4661f34d6aa->enter($__internal_8e433ad748d696192cff6091eff6183129aca5b4584eada3d2d1b4661f34d6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "51c56cc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51c56cc_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/51c56cc_part_1_screen_1.css");
            // line 14
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
        ";
        } else {
            // asset "51c56cc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51c56cc") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/51c56cc.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
        ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "    ";
        
        $__internal_8e433ad748d696192cff6091eff6183129aca5b4584eada3d2d1b4661f34d6aa->leave($__internal_8e433ad748d696192cff6091eff6183129aca5b4584eada3d2d1b4661f34d6aa_prof);

    }

    // line 25
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_242e43f98c3eac378860762d42802231fb30071f7e3b8842ac4a7c5755946b69 = $this->env->getExtension("native_profiler");
        $__internal_242e43f98c3eac378860762d42802231fb30071f7e3b8842ac4a7c5755946b69->enter($__internal_242e43f98c3eac378860762d42802231fb30071f7e3b8842ac4a7c5755946b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 26
        echo "                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about");
        echo "\">About</a></li>
                        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\">Contact</a></li>
                        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_registration");
        echo "\">Registration</a></li>
                        ";
        // line 32
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 33
            echo "                            <li>
                                <a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("_security_logout");
            echo "\">Exit</a>
                            </li>
                        ";
        }
        // line 37
        echo "                    </ul>
                </nav>
            ";
        
        $__internal_242e43f98c3eac378860762d42802231fb30071f7e3b8842ac4a7c5755946b69->leave($__internal_242e43f98c3eac378860762d42802231fb30071f7e3b8842ac4a7c5755946b69_prof);

    }

    // line 43
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_a157e33e25fb57c75fea524da1b5ee3bcf1b4b63e9101d79db1e41342dc7263e = $this->env->getExtension("native_profiler");
        $__internal_a157e33e25fb57c75fea524da1b5ee3bcf1b4b63e9101d79db1e41342dc7263e->enter($__internal_a157e33e25fb57c75fea524da1b5ee3bcf1b4b63e9101d79db1e41342dc7263e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">My blog</a>";
        
        $__internal_a157e33e25fb57c75fea524da1b5ee3bcf1b4b63e9101d79db1e41342dc7263e->leave($__internal_a157e33e25fb57c75fea524da1b5ee3bcf1b4b63e9101d79db1e41342dc7263e_prof);

    }

    // line 44
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_a555a9682eba585fb9f5b17c2668aca64e273f2b3caae19aafd7abd8139261be = $this->env->getExtension("native_profiler");
        $__internal_a555a9682eba585fb9f5b17c2668aca64e273f2b3caae19aafd7abd8139261be->enter($__internal_a555a9682eba585fb9f5b17c2668aca64e273f2b3caae19aafd7abd8139261be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creating a blog in Symfony3</a>";
        
        $__internal_a555a9682eba585fb9f5b17c2668aca64e273f2b3caae19aafd7abd8139261be->leave($__internal_a555a9682eba585fb9f5b17c2668aca64e273f2b3caae19aafd7abd8139261be_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_d166c5af5cee9e05caae57d6c8852ab181d9d3b53efa388de3b10ab254cb0f26 = $this->env->getExtension("native_profiler");
        $__internal_d166c5af5cee9e05caae57d6c8852ab181d9d3b53efa388de3b10ab254cb0f26->enter($__internal_d166c5af5cee9e05caae57d6c8852ab181d9d3b53efa388de3b10ab254cb0f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d166c5af5cee9e05caae57d6c8852ab181d9d3b53efa388de3b10ab254cb0f26->leave($__internal_d166c5af5cee9e05caae57d6c8852ab181d9d3b53efa388de3b10ab254cb0f26_prof);

    }

    // line 53
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_65dac084e1b494a01385c7437d1a42b1a6dced3564f9648cfc57d454141b1711 = $this->env->getExtension("native_profiler");
        $__internal_65dac084e1b494a01385c7437d1a42b1a6dced3564f9648cfc57d454141b1711->enter($__internal_65dac084e1b494a01385c7437d1a42b1a6dced3564f9648cfc57d454141b1711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_65dac084e1b494a01385c7437d1a42b1a6dced3564f9648cfc57d454141b1711->leave($__internal_65dac084e1b494a01385c7437d1a42b1a6dced3564f9648cfc57d454141b1711_prof);

    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5f58f78e2d332733bfaed4923f21b651f6a9632b26500c0253ac7a8a58a4021b = $this->env->getExtension("native_profiler");
        $__internal_5f58f78e2d332733bfaed4923f21b651f6a9632b26500c0253ac7a8a58a4021b->enter($__internal_5f58f78e2d332733bfaed4923f21b651f6a9632b26500c0253ac7a8a58a4021b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 58
        echo "            Symfony3 blog - created by <a href=\"https://github.com/alenija\">alenija</a>
        ";
        
        $__internal_5f58f78e2d332733bfaed4923f21b651f6a9632b26500c0253ac7a8a58a4021b->leave($__internal_5f58f78e2d332733bfaed4923f21b651f6a9632b26500c0253ac7a8a58a4021b_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a9950b2d57d21ce483468890d09c8f4610a60fbd0c924aec60c0bf570c037ea = $this->env->getExtension("native_profiler");
        $__internal_5a9950b2d57d21ce483468890d09c8f4610a60fbd0c924aec60c0bf570c037ea->enter($__internal_5a9950b2d57d21ce483468890d09c8f4610a60fbd0c924aec60c0bf570c037ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5a9950b2d57d21ce483468890d09c8f4610a60fbd0c924aec60c0bf570c037ea->leave($__internal_5a9950b2d57d21ce483468890d09c8f4610a60fbd0c924aec60c0bf570c037ea_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 63,  257 => 58,  251 => 57,  240 => 53,  229 => 50,  217 => 44,  203 => 43,  194 => 37,  188 => 34,  185 => 33,  183 => 32,  179 => 31,  175 => 30,  171 => 29,  167 => 28,  163 => 26,  157 => 25,  150 => 16,  136 => 14,  132 => 13,  128 => 11,  122 => 10,  110 => 5,  102 => 64,  100 => 63,  95 => 60,  93 => 57,  88 => 54,  86 => 53,  82 => 51,  80 => 50,  71 => 44,  67 => 43,  62 => 40,  60 => 25,  50 => 18,  47 => 17,  45 => 10,  37 => 5,  31 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html"; charset=utf-8" />*/
/*     <title>{% block title %}Symblog{% endblock %} - Symblog</title>*/
/*     <!--[if lt IE 9]>*/
/*     <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*     <![endif]-->*/
/* */
/*     {% block stylesheets %}*/
/*         <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>*/
/*         <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>*/
/*         {% stylesheets 'css/*' %}*/
/*             <link href="{{ asset_url }}" rel="stylesheet" media="screen" />*/
/*         {% endstylesheets %}*/
/*     {% endblock %}*/
/* */
/*     <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* */
/* <section id="wrapper">*/
/*     <header id="header">*/
/*         <div class="top">*/
/*             {% block navigation %}*/
/*                 <nav>*/
/*                     <ul class="navigation">*/
/*                         <li><a href="{{ path('BloggerBlogBundle_homepage') }}">Home</a></li>*/
/*                         <li><a href="{{ path('BloggerBlogBundle_about') }}">About</a></li>*/
/*                         <li><a href="{{ path('BloggerBlogBundle_contact') }}">Contact</a></li>*/
/*                         <li><a href="{{ path('BloggerBlogBundle_registration') }}">Registration</a></li>*/
/*                         {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                             <li>*/
/*                                 <a href="{{ path('_security_logout') }}">Exit</a>*/
/*                             </li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 </nav>*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         <hgroup>*/
/*             <h2>{% block blog_title %}<a href="{{ path('BloggerBlogBundle_homepage') }}">My blog</a>{% endblock %}</h2>*/
/*             <h3>{% block blog_tagline %}<a href="#">creating a blog in Symfony3</a>{% endblock %}</h3>*/
/*         </hgroup>*/
/* */
/*     </header>*/
/* */
/*     <section class="main-col">*/
/*         {% block body %}{% endblock %}*/
/*     </section>*/
/*     <aside class="sidebar">*/
/*         {% block sidebar %}{% endblock %}*/
/*     </aside>*/
/* */
/*     <div id="footer">*/
/*         {% block footer %}*/
/*             Symfony3 blog - created by <a href="https://github.com/alenija">alenija</a>*/
/*         {% endblock %}*/
/*     </div>*/
/* </section>*/
/* */
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
