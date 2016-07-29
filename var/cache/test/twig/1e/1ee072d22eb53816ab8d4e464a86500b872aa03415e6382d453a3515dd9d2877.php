<?php

/* ::base.html.twig */
class __TwigTemplate_0d30cf7a628c063fd707c5a2814c296f65daa2569b420eaa9c86df5490917dd5 extends Twig_Template
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
        $__internal_c15fe65276010ec042c78c6f141c49c978499debf8ae042bffc48f9c99ff2216 = $this->env->getExtension("native_profiler");
        $__internal_c15fe65276010ec042c78c6f141c49c978499debf8ae042bffc48f9c99ff2216->enter($__internal_c15fe65276010ec042c78c6f141c49c978499debf8ae042bffc48f9c99ff2216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            ";
        // line 21
        $this->displayBlock('navigation', $context, $blocks);
        // line 30
        echo "        </div>

        <hgroup>
            <h2>";
        // line 33
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
            <h3>";
        // line 34
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
        </hgroup>

    </header>

    <section class=\"main-col\">
        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 44
        echo "    </aside>

    <div id=\"footer\">
        ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "    </div>
</section>

";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "</body>
</html>";
        
        $__internal_c15fe65276010ec042c78c6f141c49c978499debf8ae042bffc48f9c99ff2216->leave($__internal_c15fe65276010ec042c78c6f141c49c978499debf8ae042bffc48f9c99ff2216_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcf3e020f0c20cadfb4f3f2e337416be1db26e46bea84a4cd79e59c622180900 = $this->env->getExtension("native_profiler");
        $__internal_dcf3e020f0c20cadfb4f3f2e337416be1db26e46bea84a4cd79e59c622180900->enter($__internal_dcf3e020f0c20cadfb4f3f2e337416be1db26e46bea84a4cd79e59c622180900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symblog";
        
        $__internal_dcf3e020f0c20cadfb4f3f2e337416be1db26e46bea84a4cd79e59c622180900->leave($__internal_dcf3e020f0c20cadfb4f3f2e337416be1db26e46bea84a4cd79e59c622180900_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a28fff2c27b456ac979a7be956a59f37d240052badf4b769a42b42894664d0a3 = $this->env->getExtension("native_profiler");
        $__internal_a28fff2c27b456ac979a7be956a59f37d240052badf4b769a42b42894664d0a3->enter($__internal_a28fff2c27b456ac979a7be956a59f37d240052badf4b769a42b42894664d0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_a28fff2c27b456ac979a7be956a59f37d240052badf4b769a42b42894664d0a3->leave($__internal_a28fff2c27b456ac979a7be956a59f37d240052badf4b769a42b42894664d0a3_prof);

    }

    // line 21
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_6b39f5ec984810f387375a71d2683f5413727247e6f53f8d9430f25cbb630cb1 = $this->env->getExtension("native_profiler");
        $__internal_6b39f5ec984810f387375a71d2683f5413727247e6f53f8d9430f25cbb630cb1->enter($__internal_6b39f5ec984810f387375a71d2683f5413727247e6f53f8d9430f25cbb630cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 22
        echo "                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about");
        echo "\">About</a></li>
                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\">Contact</a></li>
                    </ul>
                </nav>
            ";
        
        $__internal_6b39f5ec984810f387375a71d2683f5413727247e6f53f8d9430f25cbb630cb1->leave($__internal_6b39f5ec984810f387375a71d2683f5413727247e6f53f8d9430f25cbb630cb1_prof);

    }

    // line 33
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_9a3a4a334d760a460de055029138a47bc430dabd75b4e8a27d6857041b367a53 = $this->env->getExtension("native_profiler");
        $__internal_9a3a4a334d760a460de055029138a47bc430dabd75b4e8a27d6857041b367a53->enter($__internal_9a3a4a334d760a460de055029138a47bc430dabd75b4e8a27d6857041b367a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">My blog</a>";
        
        $__internal_9a3a4a334d760a460de055029138a47bc430dabd75b4e8a27d6857041b367a53->leave($__internal_9a3a4a334d760a460de055029138a47bc430dabd75b4e8a27d6857041b367a53_prof);

    }

    // line 34
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_4d326b0c1e8be6ea240fd95a25c78832f6188e3f3f99d78d25ed2a4c8ba6e47b = $this->env->getExtension("native_profiler");
        $__internal_4d326b0c1e8be6ea240fd95a25c78832f6188e3f3f99d78d25ed2a4c8ba6e47b->enter($__internal_4d326b0c1e8be6ea240fd95a25c78832f6188e3f3f99d78d25ed2a4c8ba6e47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creating a blog in Symfony2</a>";
        
        $__internal_4d326b0c1e8be6ea240fd95a25c78832f6188e3f3f99d78d25ed2a4c8ba6e47b->leave($__internal_4d326b0c1e8be6ea240fd95a25c78832f6188e3f3f99d78d25ed2a4c8ba6e47b_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f864a23373dfceb580de7e6b38f05566dfbfa49c295d53223ef4a1850a6b401 = $this->env->getExtension("native_profiler");
        $__internal_3f864a23373dfceb580de7e6b38f05566dfbfa49c295d53223ef4a1850a6b401->enter($__internal_3f864a23373dfceb580de7e6b38f05566dfbfa49c295d53223ef4a1850a6b401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3f864a23373dfceb580de7e6b38f05566dfbfa49c295d53223ef4a1850a6b401->leave($__internal_3f864a23373dfceb580de7e6b38f05566dfbfa49c295d53223ef4a1850a6b401_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_5bbcb8f48c17fb9686fd37555ec298a4a1fe42d813442656da4ae59f07dcfa56 = $this->env->getExtension("native_profiler");
        $__internal_5bbcb8f48c17fb9686fd37555ec298a4a1fe42d813442656da4ae59f07dcfa56->enter($__internal_5bbcb8f48c17fb9686fd37555ec298a4a1fe42d813442656da4ae59f07dcfa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_5bbcb8f48c17fb9686fd37555ec298a4a1fe42d813442656da4ae59f07dcfa56->leave($__internal_5bbcb8f48c17fb9686fd37555ec298a4a1fe42d813442656da4ae59f07dcfa56_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0d4329f0cadae3bb6a313f0cda31826bd722fb5143092b6978cbcb00f03380a4 = $this->env->getExtension("native_profiler");
        $__internal_0d4329f0cadae3bb6a313f0cda31826bd722fb5143092b6978cbcb00f03380a4->enter($__internal_0d4329f0cadae3bb6a313f0cda31826bd722fb5143092b6978cbcb00f03380a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "            Symfony2 blog - created by <a href=\"https://github.com/alenija\">alenija</a>
        ";
        
        $__internal_0d4329f0cadae3bb6a313f0cda31826bd722fb5143092b6978cbcb00f03380a4->leave($__internal_0d4329f0cadae3bb6a313f0cda31826bd722fb5143092b6978cbcb00f03380a4_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c23e8d1d81c1ee91b4ae9cd5254bfa620de37c2db6e9c845cffbe7035d6521df = $this->env->getExtension("native_profiler");
        $__internal_c23e8d1d81c1ee91b4ae9cd5254bfa620de37c2db6e9c845cffbe7035d6521df->enter($__internal_c23e8d1d81c1ee91b4ae9cd5254bfa620de37c2db6e9c845cffbe7035d6521df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c23e8d1d81c1ee91b4ae9cd5254bfa620de37c2db6e9c845cffbe7035d6521df->leave($__internal_c23e8d1d81c1ee91b4ae9cd5254bfa620de37c2db6e9c845cffbe7035d6521df_prof);

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
        return array (  227 => 53,  219 => 48,  213 => 47,  202 => 43,  191 => 40,  179 => 34,  167 => 33,  156 => 26,  152 => 25,  148 => 24,  144 => 22,  138 => 21,  129 => 12,  125 => 10,  119 => 9,  107 => 5,  99 => 54,  97 => 53,  92 => 50,  90 => 47,  85 => 44,  83 => 43,  79 => 41,  77 => 40,  68 => 34,  64 => 33,  59 => 30,  57 => 21,  46 => 14,  44 => 9,  37 => 5,  31 => 1,);
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
/*     {% block stylesheets %}*/
/*         <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>*/
/*         <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>*/
/*         <link href="{{ asset('css/screen.css') }}" type="text/css" rel="stylesheet" />*/
/*     {% endblock %}*/
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
/*                     </ul>*/
/*                 </nav>*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         <hgroup>*/
/*             <h2>{% block blog_title %}<a href="#">My blog</a>{% endblock %}</h2>*/
/*             <h3>{% block blog_tagline %}<a href="#">creating a blog in Symfony2</a>{% endblock %}</h3>*/
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
/*             Symfony2 blog - created by <a href="https://github.com/alenija">alenija</a>*/
/*         {% endblock %}*/
/*     </div>*/
/* </section>*/
/* */
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
