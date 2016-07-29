<?php

/* ::base.html.twig */
class __TwigTemplate_761bc1e54b7251d41295381a9233719fa6364e4768042a9b530436e2b3a830f9 extends Twig_Template
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
        $__internal_7e25a7344362d31b87766ccd09b8668a18d4a143f1cf708acfbf5860bc2ae94c = $this->env->getExtension("native_profiler");
        $__internal_7e25a7344362d31b87766ccd09b8668a18d4a143f1cf708acfbf5860bc2ae94c->enter($__internal_7e25a7344362d31b87766ccd09b8668a18d4a143f1cf708acfbf5860bc2ae94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 39
        echo "        </div>

        <hgroup>
            <h2>";
        // line 42
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
            <h3>";
        // line 43
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
        </hgroup>

    </header>

    <section class=\"main-col\">
        ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 52
        $this->displayBlock('sidebar', $context, $blocks);
        // line 53
        echo "    </aside>

    <div id=\"footer\">
        ";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 59
        echo "    </div>
</section>

";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "</body>
</html>";
        
        $__internal_7e25a7344362d31b87766ccd09b8668a18d4a143f1cf708acfbf5860bc2ae94c->leave($__internal_7e25a7344362d31b87766ccd09b8668a18d4a143f1cf708acfbf5860bc2ae94c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_48fe894a0ca34c7c69e1e38b4cf2722bf79d35dbe78f9ba67ff30f0b87090192 = $this->env->getExtension("native_profiler");
        $__internal_48fe894a0ca34c7c69e1e38b4cf2722bf79d35dbe78f9ba67ff30f0b87090192->enter($__internal_48fe894a0ca34c7c69e1e38b4cf2722bf79d35dbe78f9ba67ff30f0b87090192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symblog";
        
        $__internal_48fe894a0ca34c7c69e1e38b4cf2722bf79d35dbe78f9ba67ff30f0b87090192->leave($__internal_48fe894a0ca34c7c69e1e38b4cf2722bf79d35dbe78f9ba67ff30f0b87090192_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_05ab60d72b4e089aab53dbdc9af0fda7dc0997f71a0cfcd9eb5d5818882cbdfc = $this->env->getExtension("native_profiler");
        $__internal_05ab60d72b4e089aab53dbdc9af0fda7dc0997f71a0cfcd9eb5d5818882cbdfc->enter($__internal_05ab60d72b4e089aab53dbdc9af0fda7dc0997f71a0cfcd9eb5d5818882cbdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_05ab60d72b4e089aab53dbdc9af0fda7dc0997f71a0cfcd9eb5d5818882cbdfc->leave($__internal_05ab60d72b4e089aab53dbdc9af0fda7dc0997f71a0cfcd9eb5d5818882cbdfc_prof);

    }

    // line 25
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_8cf1216ba7b8b09b3f6349078fac8e2962d525a9e645a8c0a368a09d3932e2fa = $this->env->getExtension("native_profiler");
        $__internal_8cf1216ba7b8b09b3f6349078fac8e2962d525a9e645a8c0a368a09d3932e2fa->enter($__internal_8cf1216ba7b8b09b3f6349078fac8e2962d525a9e645a8c0a368a09d3932e2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
                        ";
        // line 31
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 32
            echo "                            <li>
                                <a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("_security_logout");
            echo "\">Exit</a>
                            </li>
                        ";
        }
        // line 36
        echo "                    </ul>
                </nav>
            ";
        
        $__internal_8cf1216ba7b8b09b3f6349078fac8e2962d525a9e645a8c0a368a09d3932e2fa->leave($__internal_8cf1216ba7b8b09b3f6349078fac8e2962d525a9e645a8c0a368a09d3932e2fa_prof);

    }

    // line 42
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_8f80106f3cc87486cc90d9f48ffc965e5ca3cb4b8d6a4c0c09c1b4bc8db51e49 = $this->env->getExtension("native_profiler");
        $__internal_8f80106f3cc87486cc90d9f48ffc965e5ca3cb4b8d6a4c0c09c1b4bc8db51e49->enter($__internal_8f80106f3cc87486cc90d9f48ffc965e5ca3cb4b8d6a4c0c09c1b4bc8db51e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">My blog</a>";
        
        $__internal_8f80106f3cc87486cc90d9f48ffc965e5ca3cb4b8d6a4c0c09c1b4bc8db51e49->leave($__internal_8f80106f3cc87486cc90d9f48ffc965e5ca3cb4b8d6a4c0c09c1b4bc8db51e49_prof);

    }

    // line 43
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_18163595d7dd01f2c65262dd3f3360c0badb3ab328a885d175e147bdd09ee624 = $this->env->getExtension("native_profiler");
        $__internal_18163595d7dd01f2c65262dd3f3360c0badb3ab328a885d175e147bdd09ee624->enter($__internal_18163595d7dd01f2c65262dd3f3360c0badb3ab328a885d175e147bdd09ee624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creating a blog in Symfony3</a>";
        
        $__internal_18163595d7dd01f2c65262dd3f3360c0badb3ab328a885d175e147bdd09ee624->leave($__internal_18163595d7dd01f2c65262dd3f3360c0badb3ab328a885d175e147bdd09ee624_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_b80f8beea23eca79d255308c34eb913e2125d4624e7df4a88ceb51bc9a460dd8 = $this->env->getExtension("native_profiler");
        $__internal_b80f8beea23eca79d255308c34eb913e2125d4624e7df4a88ceb51bc9a460dd8->enter($__internal_b80f8beea23eca79d255308c34eb913e2125d4624e7df4a88ceb51bc9a460dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b80f8beea23eca79d255308c34eb913e2125d4624e7df4a88ceb51bc9a460dd8->leave($__internal_b80f8beea23eca79d255308c34eb913e2125d4624e7df4a88ceb51bc9a460dd8_prof);

    }

    // line 52
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_5cd9b96e99fd11c328beb34be5b83d3e877b714c4808c8817fc1e563eeedbd9c = $this->env->getExtension("native_profiler");
        $__internal_5cd9b96e99fd11c328beb34be5b83d3e877b714c4808c8817fc1e563eeedbd9c->enter($__internal_5cd9b96e99fd11c328beb34be5b83d3e877b714c4808c8817fc1e563eeedbd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_5cd9b96e99fd11c328beb34be5b83d3e877b714c4808c8817fc1e563eeedbd9c->leave($__internal_5cd9b96e99fd11c328beb34be5b83d3e877b714c4808c8817fc1e563eeedbd9c_prof);

    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5b968013bc88b5badad77e1759bf4a4c373196aca5e4961803d23df3866b2b1e = $this->env->getExtension("native_profiler");
        $__internal_5b968013bc88b5badad77e1759bf4a4c373196aca5e4961803d23df3866b2b1e->enter($__internal_5b968013bc88b5badad77e1759bf4a4c373196aca5e4961803d23df3866b2b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 57
        echo "            Symfony3 blog - created by <a href=\"https://github.com/alenija\">alenija</a>
        ";
        
        $__internal_5b968013bc88b5badad77e1759bf4a4c373196aca5e4961803d23df3866b2b1e->leave($__internal_5b968013bc88b5badad77e1759bf4a4c373196aca5e4961803d23df3866b2b1e_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8af477ee39d9df7a038baf0e8a9ba50cdac54e7879e68d9458f06eda18194711 = $this->env->getExtension("native_profiler");
        $__internal_8af477ee39d9df7a038baf0e8a9ba50cdac54e7879e68d9458f06eda18194711->enter($__internal_8af477ee39d9df7a038baf0e8a9ba50cdac54e7879e68d9458f06eda18194711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8af477ee39d9df7a038baf0e8a9ba50cdac54e7879e68d9458f06eda18194711->leave($__internal_8af477ee39d9df7a038baf0e8a9ba50cdac54e7879e68d9458f06eda18194711_prof);

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
        return array (  261 => 62,  253 => 57,  247 => 56,  236 => 52,  225 => 49,  213 => 43,  199 => 42,  190 => 36,  184 => 33,  181 => 32,  179 => 31,  175 => 30,  171 => 29,  167 => 28,  163 => 26,  157 => 25,  150 => 16,  136 => 14,  132 => 13,  128 => 11,  122 => 10,  110 => 5,  102 => 63,  100 => 62,  95 => 59,  93 => 56,  88 => 53,  86 => 52,  82 => 50,  80 => 49,  71 => 43,  67 => 42,  62 => 39,  60 => 25,  50 => 18,  47 => 17,  45 => 10,  37 => 5,  31 => 1,);
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
