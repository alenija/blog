<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_73f49fe3f9d762716c2391191600183c2476a4f1bc08dd3e7cbbe286bcfeb3a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51c7b20bf99297e1c67387a70f654ba5f9e7326498c66628f2ad5ed91040c430 = $this->env->getExtension("native_profiler");
        $__internal_51c7b20bf99297e1c67387a70f654ba5f9e7326498c66628f2ad5ed91040c430->enter($__internal_51c7b20bf99297e1c67387a70f654ba5f9e7326498c66628f2ad5ed91040c430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_51c7b20bf99297e1c67387a70f654ba5f9e7326498c66628f2ad5ed91040c430->leave($__internal_51c7b20bf99297e1c67387a70f654ba5f9e7326498c66628f2ad5ed91040c430_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b673145b391ff0380f17768a2a2d53881a4f7db3671adc02419fb351b70d4d98 = $this->env->getExtension("native_profiler");
        $__internal_b673145b391ff0380f17768a2a2d53881a4f7db3671adc02419fb351b70d4d98->enter($__internal_b673145b391ff0380f17768a2a2d53881a4f7db3671adc02419fb351b70d4d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b673145b391ff0380f17768a2a2d53881a4f7db3671adc02419fb351b70d4d98->leave($__internal_b673145b391ff0380f17768a2a2d53881a4f7db3671adc02419fb351b70d4d98_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d685ad993560bda43b6921df0f053ac0782c98a39fc3ac5b96a418fc241707b1 = $this->env->getExtension("native_profiler");
        $__internal_d685ad993560bda43b6921df0f053ac0782c98a39fc3ac5b96a418fc241707b1->enter($__internal_d685ad993560bda43b6921df0f053ac0782c98a39fc3ac5b96a418fc241707b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d685ad993560bda43b6921df0f053ac0782c98a39fc3ac5b96a418fc241707b1->leave($__internal_d685ad993560bda43b6921df0f053ac0782c98a39fc3ac5b96a418fc241707b1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_44d6d59af63548370fc0f0c594910c0b06d107a9577df6964407aec0d37ffdcc = $this->env->getExtension("native_profiler");
        $__internal_44d6d59af63548370fc0f0c594910c0b06d107a9577df6964407aec0d37ffdcc->enter($__internal_44d6d59af63548370fc0f0c594910c0b06d107a9577df6964407aec0d37ffdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_44d6d59af63548370fc0f0c594910c0b06d107a9577df6964407aec0d37ffdcc->leave($__internal_44d6d59af63548370fc0f0c594910c0b06d107a9577df6964407aec0d37ffdcc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
