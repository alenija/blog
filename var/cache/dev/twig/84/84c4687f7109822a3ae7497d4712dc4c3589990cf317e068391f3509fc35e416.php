<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_2e34c54620e7d1d0518b48559f16503fd399224090536e47b081f9a259516dd3 extends Twig_Template
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
        $__internal_fdbaeac16f3662e3b25e0d94dbb3a2e0bc64dd8920f9f45ed3cd638efb8fbfca = $this->env->getExtension("native_profiler");
        $__internal_fdbaeac16f3662e3b25e0d94dbb3a2e0bc64dd8920f9f45ed3cd638efb8fbfca->enter($__internal_fdbaeac16f3662e3b25e0d94dbb3a2e0bc64dd8920f9f45ed3cd638efb8fbfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fdbaeac16f3662e3b25e0d94dbb3a2e0bc64dd8920f9f45ed3cd638efb8fbfca->leave($__internal_fdbaeac16f3662e3b25e0d94dbb3a2e0bc64dd8920f9f45ed3cd638efb8fbfca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
