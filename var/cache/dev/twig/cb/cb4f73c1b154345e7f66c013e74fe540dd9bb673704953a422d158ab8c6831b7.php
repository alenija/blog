<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7b6b5bb86be3680031904b0f827fd39efd2b21cba30ad89fabaa9340c0c2121f extends Twig_Template
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
        $__internal_b298faaee27ea75220aefaced5e9ffbf3125ba9ce3ed4cee3e8d20a79ac22675 = $this->env->getExtension("native_profiler");
        $__internal_b298faaee27ea75220aefaced5e9ffbf3125ba9ce3ed4cee3e8d20a79ac22675->enter($__internal_b298faaee27ea75220aefaced5e9ffbf3125ba9ce3ed4cee3e8d20a79ac22675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b298faaee27ea75220aefaced5e9ffbf3125ba9ce3ed4cee3e8d20a79ac22675->leave($__internal_b298faaee27ea75220aefaced5e9ffbf3125ba9ce3ed4cee3e8d20a79ac22675_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
