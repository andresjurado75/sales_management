<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_34e2cad49578cc8ed65b909e4b55f1431ab1ca507e7fb575b7f862f85e421a2c extends Twig_Template
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
        $__internal_632bcef523d7855878a06feea062f8e87eec7647fe4ad568c851759fed722227 = $this->env->getExtension("native_profiler");
        $__internal_632bcef523d7855878a06feea062f8e87eec7647fe4ad568c851759fed722227->enter($__internal_632bcef523d7855878a06feea062f8e87eec7647fe4ad568c851759fed722227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_632bcef523d7855878a06feea062f8e87eec7647fe4ad568c851759fed722227->leave($__internal_632bcef523d7855878a06feea062f8e87eec7647fe4ad568c851759fed722227_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
