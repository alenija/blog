<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9df851ec92252c069d8f11252e90294b988adc371c4b517257ecbd043c816679 extends Twig_Template
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
        $__internal_dc9fdc0eeb8da583dbe788105f76750945bf62b8c409649ee964995778d5bb97 = $this->env->getExtension("native_profiler");
        $__internal_dc9fdc0eeb8da583dbe788105f76750945bf62b8c409649ee964995778d5bb97->enter($__internal_dc9fdc0eeb8da583dbe788105f76750945bf62b8c409649ee964995778d5bb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_dc9fdc0eeb8da583dbe788105f76750945bf62b8c409649ee964995778d5bb97->leave($__internal_dc9fdc0eeb8da583dbe788105f76750945bf62b8c409649ee964995778d5bb97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
