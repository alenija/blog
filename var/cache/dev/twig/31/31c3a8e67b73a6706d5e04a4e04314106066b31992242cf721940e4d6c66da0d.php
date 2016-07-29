<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0674f164ed5a365b5f10da478ed339f9c3afbe3451bbdb2cf2309bfd6059767a extends Twig_Template
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
        $__internal_a02c4c10e69818e372e1d964a611ad7347305e9f74e7f735f60a46ffb3a998f2 = $this->env->getExtension("native_profiler");
        $__internal_a02c4c10e69818e372e1d964a611ad7347305e9f74e7f735f60a46ffb3a998f2->enter($__internal_a02c4c10e69818e372e1d964a611ad7347305e9f74e7f735f60a46ffb3a998f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a02c4c10e69818e372e1d964a611ad7347305e9f74e7f735f60a46ffb3a998f2->leave($__internal_a02c4c10e69818e372e1d964a611ad7347305e9f74e7f735f60a46ffb3a998f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
