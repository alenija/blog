<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_9bc9e4328d92f8497b94fc02d4627081579ba2765460a2b056ed464d0669e209 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f450677286a718fdd9876748d51dbc848261fa5fd50af153117690dfea3289db = $this->env->getExtension("native_profiler");
        $__internal_f450677286a718fdd9876748d51dbc848261fa5fd50af153117690dfea3289db->enter($__internal_f450677286a718fdd9876748d51dbc848261fa5fd50af153117690dfea3289db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f450677286a718fdd9876748d51dbc848261fa5fd50af153117690dfea3289db->leave($__internal_f450677286a718fdd9876748d51dbc848261fa5fd50af153117690dfea3289db_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0cc534e37c2b97db31bea7e5b920be4e992b0fec9320c706824c3ee6c53d87d0 = $this->env->getExtension("native_profiler");
        $__internal_0cc534e37c2b97db31bea7e5b920be4e992b0fec9320c706824c3ee6c53d87d0->enter($__internal_0cc534e37c2b97db31bea7e5b920be4e992b0fec9320c706824c3ee6c53d87d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_0cc534e37c2b97db31bea7e5b920be4e992b0fec9320c706824c3ee6c53d87d0->leave($__internal_0cc534e37c2b97db31bea7e5b920be4e992b0fec9320c706824c3ee6c53d87d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
