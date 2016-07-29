<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0728d57289f866035db684e2c03db37173f277ef4478cfd6bc4f294864aa20f2 extends Twig_Template
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
        $__internal_b173fc0af3bf82be99474a39f59fe376c5a2c2e58e628f66086fe65d3a8b43eb = $this->env->getExtension("native_profiler");
        $__internal_b173fc0af3bf82be99474a39f59fe376c5a2c2e58e628f66086fe65d3a8b43eb->enter($__internal_b173fc0af3bf82be99474a39f59fe376c5a2c2e58e628f66086fe65d3a8b43eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b173fc0af3bf82be99474a39f59fe376c5a2c2e58e628f66086fe65d3a8b43eb->leave($__internal_b173fc0af3bf82be99474a39f59fe376c5a2c2e58e628f66086fe65d3a8b43eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
