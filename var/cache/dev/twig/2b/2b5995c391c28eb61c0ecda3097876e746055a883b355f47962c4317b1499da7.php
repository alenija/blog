<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_17146f017b653f8a634c76d6edf50170239533d294ffb03053ea42d9de944cbf extends Twig_Template
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
        $__internal_d8b1ba9df0591eb851da15dbd65220ac36f999ab25b24c57db44a94e0f68b74d = $this->env->getExtension("native_profiler");
        $__internal_d8b1ba9df0591eb851da15dbd65220ac36f999ab25b24c57db44a94e0f68b74d->enter($__internal_d8b1ba9df0591eb851da15dbd65220ac36f999ab25b24c57db44a94e0f68b74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_d8b1ba9df0591eb851da15dbd65220ac36f999ab25b24c57db44a94e0f68b74d->leave($__internal_d8b1ba9df0591eb851da15dbd65220ac36f999ab25b24c57db44a94e0f68b74d_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
