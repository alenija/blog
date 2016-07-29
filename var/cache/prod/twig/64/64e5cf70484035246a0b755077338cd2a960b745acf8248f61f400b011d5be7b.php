<?php

/* ::base.html.twig */
class __TwigTemplate_bcd33e8a591fbd59e163834f923d9cc3ec68110bb362b536f0abcd2e40a66ed7 extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Symblog";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
    }

    // line 21
    public function block_navigation($context, array $blocks = array())
    {
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
    }

    // line 33
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"#\">My blog</a>";
    }

    // line 34
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"#\">creating a blog in Symfony2</a>";
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        // line 48
        echo "            Symfony2 blog - created by <a href=\"https://github.com/alenija\">alenija</a>
        ";
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  173 => 53,  168 => 48,  165 => 47,  160 => 43,  155 => 40,  149 => 34,  143 => 33,  135 => 26,  131 => 25,  127 => 24,  123 => 22,  120 => 21,  114 => 12,  110 => 10,  107 => 9,  101 => 5,  96 => 54,  94 => 53,  89 => 50,  87 => 47,  82 => 44,  80 => 43,  76 => 41,  74 => 40,  65 => 34,  61 => 33,  56 => 30,  54 => 21,  43 => 14,  41 => 9,  34 => 5,  28 => 1,);
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
