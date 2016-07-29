<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a3a411ecba7ec18ed41498a2cff6219dc04bda2f3f7d41398825a281a460caff extends Twig_Template
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
        $__internal_aae4d163463425425f3fb09f93fc6c625ea19beb1c415f73c33107660c674e18 = $this->env->getExtension("native_profiler");
        $__internal_aae4d163463425425f3fb09f93fc6c625ea19beb1c415f73c33107660c674e18->enter($__internal_aae4d163463425425f3fb09f93fc6c625ea19beb1c415f73c33107660c674e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_aae4d163463425425f3fb09f93fc6c625ea19beb1c415f73c33107660c674e18->leave($__internal_aae4d163463425425f3fb09f93fc6c625ea19beb1c415f73c33107660c674e18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
