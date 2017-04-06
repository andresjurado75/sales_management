<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6503c3a2c2839f5502e8f76b66e81c7a0184126ef3f0e90adff8568926cdae7e extends Twig_Template
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
        $__internal_0e351af9a3397b526ced0732c12cad109a47517455b827f2a4d08618e15852cf = $this->env->getExtension("native_profiler");
        $__internal_0e351af9a3397b526ced0732c12cad109a47517455b827f2a4d08618e15852cf->enter($__internal_0e351af9a3397b526ced0732c12cad109a47517455b827f2a4d08618e15852cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0e351af9a3397b526ced0732c12cad109a47517455b827f2a4d08618e15852cf->leave($__internal_0e351af9a3397b526ced0732c12cad109a47517455b827f2a4d08618e15852cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
