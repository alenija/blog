<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b848be16a09d2c3947dc43eb2e289ece77d4d0c15c5d457ff75ce07065447ee2 extends Twig_Template
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
        $__internal_539420ede4d8e9ca51070fc367abbd4310c6d564675f50e8bdea29ef033c54d2 = $this->env->getExtension("native_profiler");
        $__internal_539420ede4d8e9ca51070fc367abbd4310c6d564675f50e8bdea29ef033c54d2->enter($__internal_539420ede4d8e9ca51070fc367abbd4310c6d564675f50e8bdea29ef033c54d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_539420ede4d8e9ca51070fc367abbd4310c6d564675f50e8bdea29ef033c54d2->leave($__internal_539420ede4d8e9ca51070fc367abbd4310c6d564675f50e8bdea29ef033c54d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
