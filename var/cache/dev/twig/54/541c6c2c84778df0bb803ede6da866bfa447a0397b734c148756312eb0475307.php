<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_457071a210421889f05f447528660baf844e29698e6b3a9a058b67296ed6bb88 extends Twig_Template
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
        $__internal_4cd5a7dc59f2a479ad9eda284af176b29eb951d9aba3a7470540e2c6cd189812 = $this->env->getExtension("native_profiler");
        $__internal_4cd5a7dc59f2a479ad9eda284af176b29eb951d9aba3a7470540e2c6cd189812->enter($__internal_4cd5a7dc59f2a479ad9eda284af176b29eb951d9aba3a7470540e2c6cd189812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4cd5a7dc59f2a479ad9eda284af176b29eb951d9aba3a7470540e2c6cd189812->leave($__internal_4cd5a7dc59f2a479ad9eda284af176b29eb951d9aba3a7470540e2c6cd189812_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
