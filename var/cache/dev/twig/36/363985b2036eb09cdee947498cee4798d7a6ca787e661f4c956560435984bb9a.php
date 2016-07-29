<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c05ca4badd2bf1bb243e6bffe6c27994be4b9aed1d622734dec478820e5270eb extends Twig_Template
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
        $__internal_f9a4b1807c45d254feeb73a33658d10de1d8a0dae0a8330f3417b0103fb8c7fa = $this->env->getExtension("native_profiler");
        $__internal_f9a4b1807c45d254feeb73a33658d10de1d8a0dae0a8330f3417b0103fb8c7fa->enter($__internal_f9a4b1807c45d254feeb73a33658d10de1d8a0dae0a8330f3417b0103fb8c7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f9a4b1807c45d254feeb73a33658d10de1d8a0dae0a8330f3417b0103fb8c7fa->leave($__internal_f9a4b1807c45d254feeb73a33658d10de1d8a0dae0a8330f3417b0103fb8c7fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
