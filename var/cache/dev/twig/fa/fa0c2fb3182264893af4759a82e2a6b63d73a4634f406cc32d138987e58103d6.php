<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1f9166ed5366d829999e71101e728addcfeeb1860d3e09b247b43f2f2020d934 extends Twig_Template
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
        $__internal_04a33441ff9d48d7e14ef616c48f397dbc42acc276896934aa9a41880b847bc2 = $this->env->getExtension("native_profiler");
        $__internal_04a33441ff9d48d7e14ef616c48f397dbc42acc276896934aa9a41880b847bc2->enter($__internal_04a33441ff9d48d7e14ef616c48f397dbc42acc276896934aa9a41880b847bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_04a33441ff9d48d7e14ef616c48f397dbc42acc276896934aa9a41880b847bc2->leave($__internal_04a33441ff9d48d7e14ef616c48f397dbc42acc276896934aa9a41880b847bc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
