<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0b9c6eccf8fc76712c06459e75a0c32a6c6458ad463d82095704b51137bdb509 extends Twig_Template
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
        $__internal_7183054a6a9eed10aed14e297be312320f25b84daa58337488d0d0975797b4c9 = $this->env->getExtension("native_profiler");
        $__internal_7183054a6a9eed10aed14e297be312320f25b84daa58337488d0d0975797b4c9->enter($__internal_7183054a6a9eed10aed14e297be312320f25b84daa58337488d0d0975797b4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7183054a6a9eed10aed14e297be312320f25b84daa58337488d0d0975797b4c9->leave($__internal_7183054a6a9eed10aed14e297be312320f25b84daa58337488d0d0975797b4c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
