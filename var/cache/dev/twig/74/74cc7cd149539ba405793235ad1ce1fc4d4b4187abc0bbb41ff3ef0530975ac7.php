<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_41cf9add6c0b50a271f16ed0358a5be4b65f34774750e01af1fb9c9e2c448d7d extends Twig_Template
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
        $__internal_05fce30bda6e4796ec37c17e861c8122447634c609ea32e6b3b456ea1ef04765 = $this->env->getExtension("native_profiler");
        $__internal_05fce30bda6e4796ec37c17e861c8122447634c609ea32e6b3b456ea1ef04765->enter($__internal_05fce30bda6e4796ec37c17e861c8122447634c609ea32e6b3b456ea1ef04765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_05fce30bda6e4796ec37c17e861c8122447634c609ea32e6b3b456ea1ef04765->leave($__internal_05fce30bda6e4796ec37c17e861c8122447634c609ea32e6b3b456ea1ef04765_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
