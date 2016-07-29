<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6ab756248485a7abd25f70fb0fa83ac24f5626aad9b98b913624c13e691dd602 extends Twig_Template
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
        $__internal_be3d716f18d296ada7aab0e1eda59098d74d3b229deb72dc8f1f11e9e21c211b = $this->env->getExtension("native_profiler");
        $__internal_be3d716f18d296ada7aab0e1eda59098d74d3b229deb72dc8f1f11e9e21c211b->enter($__internal_be3d716f18d296ada7aab0e1eda59098d74d3b229deb72dc8f1f11e9e21c211b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_be3d716f18d296ada7aab0e1eda59098d74d3b229deb72dc8f1f11e9e21c211b->leave($__internal_be3d716f18d296ada7aab0e1eda59098d74d3b229deb72dc8f1f11e9e21c211b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
