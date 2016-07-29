<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6cac40ca721cd2221e87b184bd21f9d90dfa6d612113cd84ca2d94bbbe5ae945 extends Twig_Template
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
        $__internal_d3a38e2d317f7b340e42a3549904a75579ca57a3f8c5edb03beb377a1606678b = $this->env->getExtension("native_profiler");
        $__internal_d3a38e2d317f7b340e42a3549904a75579ca57a3f8c5edb03beb377a1606678b->enter($__internal_d3a38e2d317f7b340e42a3549904a75579ca57a3f8c5edb03beb377a1606678b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d3a38e2d317f7b340e42a3549904a75579ca57a3f8c5edb03beb377a1606678b->leave($__internal_d3a38e2d317f7b340e42a3549904a75579ca57a3f8c5edb03beb377a1606678b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
