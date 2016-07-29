<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a1108027200c9dda0f508056bf1c195b0ef6d09e47b486f04e633d7b178c715d extends Twig_Template
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
        $__internal_cf7354fcacede386c600dd401cdbfbb9602fb7fb878829666198286664d4df6c = $this->env->getExtension("native_profiler");
        $__internal_cf7354fcacede386c600dd401cdbfbb9602fb7fb878829666198286664d4df6c->enter($__internal_cf7354fcacede386c600dd401cdbfbb9602fb7fb878829666198286664d4df6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_cf7354fcacede386c600dd401cdbfbb9602fb7fb878829666198286664d4df6c->leave($__internal_cf7354fcacede386c600dd401cdbfbb9602fb7fb878829666198286664d4df6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
