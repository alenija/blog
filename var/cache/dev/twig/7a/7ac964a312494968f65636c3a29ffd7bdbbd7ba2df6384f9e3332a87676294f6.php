<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_993cf0757b8b1f1eae3bdc502f2c2614e887527419033ae76734d455169c7915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f921e716c08b0d623942423cc5251fdcb0705955b2de7c8bad09b14fea660fd = $this->env->getExtension("native_profiler");
        $__internal_8f921e716c08b0d623942423cc5251fdcb0705955b2de7c8bad09b14fea660fd->enter($__internal_8f921e716c08b0d623942423cc5251fdcb0705955b2de7c8bad09b14fea660fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_8f921e716c08b0d623942423cc5251fdcb0705955b2de7c8bad09b14fea660fd->leave($__internal_8f921e716c08b0d623942423cc5251fdcb0705955b2de7c8bad09b14fea660fd_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_d4f80644488ef3cfdbce4701fa69dd5b0b087ea700a7e7aa4bcd401dbd78655f = $this->env->getExtension("native_profiler");
        $__internal_d4f80644488ef3cfdbce4701fa69dd5b0b087ea700a7e7aa4bcd401dbd78655f->enter($__internal_d4f80644488ef3cfdbce4701fa69dd5b0b087ea700a7e7aa4bcd401dbd78655f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_d4f80644488ef3cfdbce4701fa69dd5b0b087ea700a7e7aa4bcd401dbd78655f->leave($__internal_d4f80644488ef3cfdbce4701fa69dd5b0b087ea700a7e7aa4bcd401dbd78655f_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
