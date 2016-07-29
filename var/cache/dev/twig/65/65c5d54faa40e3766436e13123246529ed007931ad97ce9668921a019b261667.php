<?php

/* BlogBundle:Security:login.html.twig */
class __TwigTemplate_3b7f096c14f33213c46a6055eb7a7545e50a472c510d15b31b788e18090f815c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Security:login.html.twig", 1);
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
        $__internal_0d07ec298ad24c83a975bf53f683c6713532af2c1c0ab917155ea6a2617fc68e = $this->env->getExtension("native_profiler");
        $__internal_0d07ec298ad24c83a975bf53f683c6713532af2c1c0ab917155ea6a2617fc68e->enter($__internal_0d07ec298ad24c83a975bf53f683c6713532af2c1c0ab917155ea6a2617fc68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d07ec298ad24c83a975bf53f683c6713532af2c1c0ab917155ea6a2617fc68e->leave($__internal_0d07ec298ad24c83a975bf53f683c6713532af2c1c0ab917155ea6a2617fc68e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3ed1811e02701914a377d4c1b81b8d3a662639c8e98642c164e3c60951022f4 = $this->env->getExtension("native_profiler");
        $__internal_c3ed1811e02701914a377d4c1b81b8d3a662639c8e98642c164e3c60951022f4->enter($__internal_c3ed1811e02701914a377d4c1b81b8d3a662639c8e98642c164e3c60951022f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_c3ed1811e02701914a377d4c1b81b8d3a662639c8e98642c164e3c60951022f4->leave($__internal_c3ed1811e02701914a377d4c1b81b8d3a662639c8e98642c164e3c60951022f4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1905ffae04a65718636238745c8a830e91f681dc48159ab7be5e7eda666d27b0 = $this->env->getExtension("native_profiler");
        $__internal_1905ffae04a65718636238745c8a830e91f681dc48159ab7be5e7eda666d27b0->enter($__internal_1905ffae04a65718636238745c8a830e91f681dc48159ab7be5e7eda666d27b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\" method=\"POST\">
        <table>
            <tr>
                <td>
                    <label for=\"username\">Username:</label>
                </td>
                <td>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for=\"password\">Password:</label>
                </td>
                <td>
                    <input type=\"password\" id=\"password\" name=\"_password\" />
                </td>
            </tr>
        </table>
        <input type=\"submit\" name=\"login\" value=\"Отправить\" />
    </form>
";
        
        $__internal_1905ffae04a65718636238745c8a830e91f681dc48159ab7be5e7eda666d27b0->leave($__internal_1905ffae04a65718636238745c8a830e91f681dc48159ab7be5e7eda666d27b0_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  65 => 10,  62 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Login{% endblock%}*/
/* */
/* {% block body %}*/
/*     {% if error %}*/
/*         <div class="error">{{ error.message }}</div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path('_security_check') }}" method="POST">*/
/*         <table>*/
/*             <tr>*/
/*                 <td>*/
/*                     <label for="username">Username:</label>*/
/*                 </td>*/
/*                 <td>*/
/*                     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <label for="password">Password:</label>*/
/*                 </td>*/
/*                 <td>*/
/*                     <input type="password" id="password" name="_password" />*/
/*                 </td>*/
/*             </tr>*/
/*         </table>*/
/*         <input type="submit" name="login" value="Отправить" />*/
/*     </form>*/
/* {% endblock %}*/
