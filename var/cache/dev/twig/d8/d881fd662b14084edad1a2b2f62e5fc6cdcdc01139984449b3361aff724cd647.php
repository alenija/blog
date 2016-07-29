<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6ee654cd225a1fddc1d153722e6aa56cb98824e2dc241274a8d11608c124948c extends Twig_Template
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
        $__internal_d4a93fd62236a3e3ee0b74975b464bf50e7bf6493f5a70e2dcf968fa7b392a4f = $this->env->getExtension("native_profiler");
        $__internal_d4a93fd62236a3e3ee0b74975b464bf50e7bf6493f5a70e2dcf968fa7b392a4f->enter($__internal_d4a93fd62236a3e3ee0b74975b464bf50e7bf6493f5a70e2dcf968fa7b392a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d4a93fd62236a3e3ee0b74975b464bf50e7bf6493f5a70e2dcf968fa7b392a4f->leave($__internal_d4a93fd62236a3e3ee0b74975b464bf50e7bf6493f5a70e2dcf968fa7b392a4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
