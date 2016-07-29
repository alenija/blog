<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_81bd74ea0d64ca4db852696461bbbfc7636a923cac9f8110ddcb43a965c8f857 extends Twig_Template
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
        $__internal_bf807fabd74c3d2ea4a7636041e29bc92824cf49bde67a2853154b002d33a308 = $this->env->getExtension("native_profiler");
        $__internal_bf807fabd74c3d2ea4a7636041e29bc92824cf49bde67a2853154b002d33a308->enter($__internal_bf807fabd74c3d2ea4a7636041e29bc92824cf49bde67a2853154b002d33a308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bf807fabd74c3d2ea4a7636041e29bc92824cf49bde67a2853154b002d33a308->leave($__internal_bf807fabd74c3d2ea4a7636041e29bc92824cf49bde67a2853154b002d33a308_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
