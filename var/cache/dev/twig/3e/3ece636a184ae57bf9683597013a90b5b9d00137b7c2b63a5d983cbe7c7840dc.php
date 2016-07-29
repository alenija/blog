<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_528ccbd7e1584719629298ee24c67372340d15889fef916aa3db1f05ce6715bb extends Twig_Template
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
        $__internal_4a44b38a8450794e95644d6dac729f0082e517432ad370dc44fb5225f06e22d5 = $this->env->getExtension("native_profiler");
        $__internal_4a44b38a8450794e95644d6dac729f0082e517432ad370dc44fb5225f06e22d5->enter($__internal_4a44b38a8450794e95644d6dac729f0082e517432ad370dc44fb5225f06e22d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4a44b38a8450794e95644d6dac729f0082e517432ad370dc44fb5225f06e22d5->leave($__internal_4a44b38a8450794e95644d6dac729f0082e517432ad370dc44fb5225f06e22d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
