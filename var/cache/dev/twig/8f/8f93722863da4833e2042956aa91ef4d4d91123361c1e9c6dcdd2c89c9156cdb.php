<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_9b96d732dc86890c60fd5723a3d2887cc46257a4c45b644b29446084b71c50c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5ce59b5282a3a9855eac60ef5fb0769f4c221385f389460cd56a77137329736 = $this->env->getExtension("native_profiler");
        $__internal_a5ce59b5282a3a9855eac60ef5fb0769f4c221385f389460cd56a77137329736->enter($__internal_a5ce59b5282a3a9855eac60ef5fb0769f4c221385f389460cd56a77137329736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5ce59b5282a3a9855eac60ef5fb0769f4c221385f389460cd56a77137329736->leave($__internal_a5ce59b5282a3a9855eac60ef5fb0769f4c221385f389460cd56a77137329736_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_31877ae6ac4fb1e803fd627e35c9aebc0f7848769b8106bde7bb3d533d46b601 = $this->env->getExtension("native_profiler");
        $__internal_31877ae6ac4fb1e803fd627e35c9aebc0f7848769b8106bde7bb3d533d46b601->enter($__internal_31877ae6ac4fb1e803fd627e35c9aebc0f7848769b8106bde7bb3d533d46b601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_31877ae6ac4fb1e803fd627e35c9aebc0f7848769b8106bde7bb3d533d46b601->leave($__internal_31877ae6ac4fb1e803fd627e35c9aebc0f7848769b8106bde7bb3d533d46b601_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
