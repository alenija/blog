<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_41a4279be7708323f49a3fe653b0b4de06290ee56703db0892f82bdc43ee208a extends Twig_Template
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
        $__internal_e7a4764aeab190f09f172dc9296b31844ba669de2e8eb2e5bd2495f96c0ec001 = $this->env->getExtension("native_profiler");
        $__internal_e7a4764aeab190f09f172dc9296b31844ba669de2e8eb2e5bd2495f96c0ec001->enter($__internal_e7a4764aeab190f09f172dc9296b31844ba669de2e8eb2e5bd2495f96c0ec001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e7a4764aeab190f09f172dc9296b31844ba669de2e8eb2e5bd2495f96c0ec001->leave($__internal_e7a4764aeab190f09f172dc9296b31844ba669de2e8eb2e5bd2495f96c0ec001_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
