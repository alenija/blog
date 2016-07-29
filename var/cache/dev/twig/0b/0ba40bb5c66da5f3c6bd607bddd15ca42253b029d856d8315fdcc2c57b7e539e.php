<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_ca6ed0566dd37750563598e3b77dacae274d55922314c85d599f68198c71c42d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98c737493c70cbc6cce7cfea4cf89fb94e04cd70c050f385e41a723bdec01be4 = $this->env->getExtension("native_profiler");
        $__internal_98c737493c70cbc6cce7cfea4cf89fb94e04cd70c050f385e41a723bdec01be4->enter($__internal_98c737493c70cbc6cce7cfea4cf89fb94e04cd70c050f385e41a723bdec01be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98c737493c70cbc6cce7cfea4cf89fb94e04cd70c050f385e41a723bdec01be4->leave($__internal_98c737493c70cbc6cce7cfea4cf89fb94e04cd70c050f385e41a723bdec01be4_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_93853db78692dd415f33cbe3a8fdd5e12dca9c00adf26802d4fd428dd69e9dd6 = $this->env->getExtension("native_profiler");
        $__internal_93853db78692dd415f33cbe3a8fdd5e12dca9c00adf26802d4fd428dd69e9dd6->enter($__internal_93853db78692dd415f33cbe3a8fdd5e12dca9c00adf26802d4fd428dd69e9dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_93853db78692dd415f33cbe3a8fdd5e12dca9c00adf26802d4fd428dd69e9dd6->leave($__internal_93853db78692dd415f33cbe3a8fdd5e12dca9c00adf26802d4fd428dd69e9dd6_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
