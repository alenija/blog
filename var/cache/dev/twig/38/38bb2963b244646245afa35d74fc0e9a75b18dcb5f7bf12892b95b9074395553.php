<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_4734cf9c20860ee3352bab2485977210d5df5f8f60a49a20476b91f796379fe6 extends Twig_Template
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
        $__internal_dcc2621d2de6bba9eeefc39a2cad4747482bfc406dd743091135e2b9196d660c = $this->env->getExtension("native_profiler");
        $__internal_dcc2621d2de6bba9eeefc39a2cad4747482bfc406dd743091135e2b9196d660c->enter($__internal_dcc2621d2de6bba9eeefc39a2cad4747482bfc406dd743091135e2b9196d660c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_dcc2621d2de6bba9eeefc39a2cad4747482bfc406dd743091135e2b9196d660c->leave($__internal_dcc2621d2de6bba9eeefc39a2cad4747482bfc406dd743091135e2b9196d660c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
