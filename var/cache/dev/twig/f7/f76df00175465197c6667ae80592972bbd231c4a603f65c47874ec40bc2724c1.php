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
        $__internal_839a11d6d4a041ae7d1e4522b0c84f98043748e15c05ba4a42f154eb15646fff = $this->env->getExtension("native_profiler");
        $__internal_839a11d6d4a041ae7d1e4522b0c84f98043748e15c05ba4a42f154eb15646fff->enter($__internal_839a11d6d4a041ae7d1e4522b0c84f98043748e15c05ba4a42f154eb15646fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_839a11d6d4a041ae7d1e4522b0c84f98043748e15c05ba4a42f154eb15646fff->leave($__internal_839a11d6d4a041ae7d1e4522b0c84f98043748e15c05ba4a42f154eb15646fff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d468147c61770f470236d738d9cc743d84b2ccac6a774cc0749adb7c14c55af1 = $this->env->getExtension("native_profiler");
        $__internal_d468147c61770f470236d738d9cc743d84b2ccac6a774cc0749adb7c14c55af1->enter($__internal_d468147c61770f470236d738d9cc743d84b2ccac6a774cc0749adb7c14c55af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symblog";
        
        $__internal_d468147c61770f470236d738d9cc743d84b2ccac6a774cc0749adb7c14c55af1->leave($__internal_d468147c61770f470236d738d9cc743d84b2ccac6a774cc0749adb7c14c55af1_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f0ea6be5092bff4ec5b9dd610d2440098a9c9081caf8b260e4747c010ffd0a6c = $this->env->getExtension("native_profiler");
        $__internal_f0ea6be5092bff4ec5b9dd610d2440098a9c9081caf8b260e4747c010ffd0a6c->enter($__internal_f0ea6be5092bff4ec5b9dd610d2440098a9c9081caf8b260e4747c010ffd0a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f0ea6be5092bff4ec5b9dd610d2440098a9c9081caf8b260e4747c010ffd0a6c->leave($__internal_f0ea6be5092bff4ec5b9dd610d2440098a9c9081caf8b260e4747c010ffd0a6c_prof);

    }

    // line 25
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_cb27aa6ef7b60f3c6706dbe4a0ff2dd157a67901fcc260f84784c4f0d876b91c = $this->env->getExtension("native_profiler");
        $__internal_cb27aa6ef7b60f3c6706dbe4a0ff2dd157a67901fcc260f84784c4f0d876b91c->enter($__internal_cb27aa6ef7b60f3c6706dbe4a0ff2dd157a67901fcc260f84784c4f0d876b91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_cb27aa6ef7b60f3c6706dbe4a0ff2dd157a67901fcc260f84784c4f0d876b91c->leave($__internal_cb27aa6ef7b60f3c6706dbe4a0ff2dd157a67901fcc260f84784c4f0d876b91c_prof);

    }

    // line 43
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_31245ffd6320f8479ab017d0aa91b0d2ea2ed792e0c9cc3179391bcb4639175b = $this->env->getExtension("native_profiler");
        $__internal_31245ffd6320f8479ab017d0aa91b0d2ea2ed792e0c9cc3179391bcb4639175b->enter($__internal_31245ffd6320f8479ab017d0aa91b0d2ea2ed792e0c9cc3179391bcb4639175b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">My blog</a>";
        
        $__internal_31245ffd6320f8479ab017d0aa91b0d2ea2ed792e0c9cc3179391bcb4639175b->leave($__internal_31245ffd6320f8479ab017d0aa91b0d2ea2ed792e0c9cc3179391bcb4639175b_prof);

    }

    // line 44
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_af8ba0a3007760da80bb4953fc6f997671c63997efafc61cf6d5d6023c35a4f4 = $this->env->getExtension("native_profiler");
        $__internal_af8ba0a3007760da80bb4953fc6f997671c63997efafc61cf6d5d6023c35a4f4->enter($__internal_af8ba0a3007760da80bb4953fc6f997671c63997efafc61cf6d5d6023c35a4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creating a blog in Symfony3</a>";
        
        $__internal_af8ba0a3007760da80bb4953fc6f997671c63997efafc61cf6d5d6023c35a4f4->leave($__internal_af8ba0a3007760da80bb4953fc6f997671c63997efafc61cf6d5d6023c35a4f4_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5476f3d483a605be14ed622dad476ae2a7edb377c07fcb7749bbca376d9051b = $this->env->getExtension("native_profiler");
        $__internal_b5476f3d483a605be14ed622dad476ae2a7edb377c07fcb7749bbca376d9051b->enter($__internal_b5476f3d483a605be14ed622dad476ae2a7edb377c07fcb7749bbca376d9051b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b5476f3d483a605be14ed622dad476ae2a7edb377c07fcb7749bbca376d9051b->leave($__internal_b5476f3d483a605be14ed622dad476ae2a7edb377c07fcb7749bbca376d9051b_prof);

    }

    // line 53
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4f135b1f994fc446ee80c1fa0c8bb026372a3783ad8a195323fc20e743cda00f = $this->env->getExtension("native_profiler");
        $__internal_4f135b1f994fc446ee80c1fa0c8bb026372a3783ad8a195323fc20e743cda00f->enter($__internal_4f135b1f994fc446ee80c1fa0c8bb026372a3783ad8a195323fc20e743cda00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_4f135b1f994fc446ee80c1fa0c8bb026372a3783ad8a195323fc20e743cda00f->leave($__internal_4f135b1f994fc446ee80c1fa0c8bb026372a3783ad8a195323fc20e743cda00f_prof);

    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2ec30b0212585532a60af91321f5c1488b19ad7fb2a40581685d104768786434 = $this->env->getExtension("native_profiler");
        $__internal_2ec30b0212585532a60af91321f5c1488b19ad7fb2a40581685d104768786434->enter($__internal_2ec30b0212585532a60af91321f5c1488b19ad7fb2a40581685d104768786434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 58
        echo "            Symfony3 blog - created by <a href=\"https://github.com/alenija\">alenija</a>
        ";
        
        $__internal_2ec30b0212585532a60af91321f5c1488b19ad7fb2a40581685d104768786434->leave($__internal_2ec30b0212585532a60af91321f5c1488b19ad7fb2a40581685d104768786434_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ba47a1f2ca7219ec760b64c814b912c6ab56924e99ed5c0e2f10cd1c53c45dbf = $this->env->getExtension("native_profiler");
        $__internal_ba47a1f2ca7219ec760b64c814b912c6ab56924e99ed5c0e2f10cd1c53c45dbf->enter($__internal_ba47a1f2ca7219ec760b64c814b912c6ab56924e99ed5c0e2f10cd1c53c45dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ba47a1f2ca7219ec760b64c814b912c6ab56924e99ed5c0e2f10cd1c53c45dbf->leave($__internal_ba47a1f2ca7219ec760b64c814b912c6ab56924e99ed5c0e2f10cd1c53c45dbf_prof);

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
