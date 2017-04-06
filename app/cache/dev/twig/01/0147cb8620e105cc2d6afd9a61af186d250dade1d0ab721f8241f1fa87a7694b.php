<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2c840fae7138cb7d337db8d86bb42bbfd26f422482d6cb0a9265d3dd3ee2a2a7 extends Twig_Template
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
        $__internal_1691b7480cf4293e3c81679cbab381d716f3e5df2a7c7941d26c359d9d318817 = $this->env->getExtension("native_profiler");
        $__internal_1691b7480cf4293e3c81679cbab381d716f3e5df2a7c7941d26c359d9d318817->enter($__internal_1691b7480cf4293e3c81679cbab381d716f3e5df2a7c7941d26c359d9d318817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1691b7480cf4293e3c81679cbab381d716f3e5df2a7c7941d26c359d9d318817->leave($__internal_1691b7480cf4293e3c81679cbab381d716f3e5df2a7c7941d26c359d9d318817_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
