<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_7c4489125035c8f9ff985a953cb493d2a2e70911e64e7029a74c6c071905eb96 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52f886ba808d79cd6ef327774e5a2bccc4366cb72bb3db25e69d7c2cf89e7f30 = $this->env->getExtension("native_profiler");
        $__internal_52f886ba808d79cd6ef327774e5a2bccc4366cb72bb3db25e69d7c2cf89e7f30->enter($__internal_52f886ba808d79cd6ef327774e5a2bccc4366cb72bb3db25e69d7c2cf89e7f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52f886ba808d79cd6ef327774e5a2bccc4366cb72bb3db25e69d7c2cf89e7f30->leave($__internal_52f886ba808d79cd6ef327774e5a2bccc4366cb72bb3db25e69d7c2cf89e7f30_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_740d7037f1f9419ec8ec6933c65af33a5888bcafff793c9ac5a2f54ccd972531 = $this->env->getExtension("native_profiler");
        $__internal_740d7037f1f9419ec8ec6933c65af33a5888bcafff793c9ac5a2f54ccd972531->enter($__internal_740d7037f1f9419ec8ec6933c65af33a5888bcafff793c9ac5a2f54ccd972531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_740d7037f1f9419ec8ec6933c65af33a5888bcafff793c9ac5a2f54ccd972531->leave($__internal_740d7037f1f9419ec8ec6933c65af33a5888bcafff793c9ac5a2f54ccd972531_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
