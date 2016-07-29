<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_62007a6d83a226d08c06e919fb3a53bdc16605d733de5790c1af18363f8779e3 extends Twig_Template
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
        $__internal_271d212da1dc3ccb37d002be9d73257362f9283df3fe3a245cbdc98c8d9233a8 = $this->env->getExtension("native_profiler");
        $__internal_271d212da1dc3ccb37d002be9d73257362f9283df3fe3a245cbdc98c8d9233a8->enter($__internal_271d212da1dc3ccb37d002be9d73257362f9283df3fe3a245cbdc98c8d9233a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_271d212da1dc3ccb37d002be9d73257362f9283df3fe3a245cbdc98c8d9233a8->leave($__internal_271d212da1dc3ccb37d002be9d73257362f9283df3fe3a245cbdc98c8d9233a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
