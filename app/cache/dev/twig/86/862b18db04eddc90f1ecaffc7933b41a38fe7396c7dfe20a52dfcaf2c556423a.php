<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_94d4ae47e73428605c2b0097f47324c3d188c801af5cb7094ff4ecb08f40dde5 extends Twig_Template
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
        $__internal_5932269eb598a23ee7f254ce87f54c8e133e0ddfe57c81d3024755d4116241ff = $this->env->getExtension("native_profiler");
        $__internal_5932269eb598a23ee7f254ce87f54c8e133e0ddfe57c81d3024755d4116241ff->enter($__internal_5932269eb598a23ee7f254ce87f54c8e133e0ddfe57c81d3024755d4116241ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5932269eb598a23ee7f254ce87f54c8e133e0ddfe57c81d3024755d4116241ff->leave($__internal_5932269eb598a23ee7f254ce87f54c8e133e0ddfe57c81d3024755d4116241ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
