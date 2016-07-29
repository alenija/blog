<?php

/* BlogBundle:Security:login.html.twig */
class __TwigTemplate_6066ded6668b81f95147ea6e67818628a488f078bb2fd6066c638bf5242fa0fc extends Twig_Template
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
        $__internal_d9cf132c6e47995295d01d78fd29ee875897ee7389b10ef03bdf9388db52d4d6 = $this->env->getExtension("native_profiler");
        $__internal_d9cf132c6e47995295d01d78fd29ee875897ee7389b10ef03bdf9388db52d4d6->enter($__internal_d9cf132c6e47995295d01d78fd29ee875897ee7389b10ef03bdf9388db52d4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9cf132c6e47995295d01d78fd29ee875897ee7389b10ef03bdf9388db52d4d6->leave($__internal_d9cf132c6e47995295d01d78fd29ee875897ee7389b10ef03bdf9388db52d4d6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e65de85122aeaa65d9a86077e4fb6d8ac5d52e35e94dbf6edb52091a49b2ae2 = $this->env->getExtension("native_profiler");
        $__internal_4e65de85122aeaa65d9a86077e4fb6d8ac5d52e35e94dbf6edb52091a49b2ae2->enter($__internal_4e65de85122aeaa65d9a86077e4fb6d8ac5d52e35e94dbf6edb52091a49b2ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_4e65de85122aeaa65d9a86077e4fb6d8ac5d52e35e94dbf6edb52091a49b2ae2->leave($__internal_4e65de85122aeaa65d9a86077e4fb6d8ac5d52e35e94dbf6edb52091a49b2ae2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_44e6a638215b2d818cf9d603cca7df748d6f09267482d2014b81c092eb739dd8 = $this->env->getExtension("native_profiler");
        $__internal_44e6a638215b2d818cf9d603cca7df748d6f09267482d2014b81c092eb739dd8->enter($__internal_44e6a638215b2d818cf9d603cca7df748d6f09267482d2014b81c092eb739dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <label for=\"username\">Логин:</label>
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
                    <label for=\"password\">Пароль:</label>
                </td>
                <td>
                    <input type=\"password\" id=\"password\" name=\"_password\" />
                </td>
            </tr>
        </table>
        <input type=\"submit\" name=\"login\" value=\"Отправить\" />
    </form>
";
        
        $__internal_44e6a638215b2d818cf9d603cca7df748d6f09267482d2014b81c092eb739dd8->leave($__internal_44e6a638215b2d818cf9d603cca7df748d6f09267482d2014b81c092eb739dd8_prof);

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
/* {% block title %}About{% endblock%}*/
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
/*                     <label for="username">Логин:</label>*/
/*                 </td>*/
/*                 <td>*/
/*                     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <label for="password">Пароль:</label>*/
/*                 </td>*/
/*                 <td>*/
/*                     <input type="password" id="password" name="_password" />*/
/*                 </td>*/
/*             </tr>*/
/*         </table>*/
/*         <input type="submit" name="login" value="Отправить" />*/
/*     </form>*/
/* {% endblock %}*/
