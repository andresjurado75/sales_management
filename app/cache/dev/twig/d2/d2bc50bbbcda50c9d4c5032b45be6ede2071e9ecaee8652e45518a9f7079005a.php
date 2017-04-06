<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b1c000b5973f222620d54a99073292accc405988dfe96c8b0b2bbb72d06bf134 extends Twig_Template
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
        $__internal_2ce60a3f5f50d76df2d633b48c2f94782a541de4c2dcbe1a07d937135f153aea = $this->env->getExtension("native_profiler");
        $__internal_2ce60a3f5f50d76df2d633b48c2f94782a541de4c2dcbe1a07d937135f153aea->enter($__internal_2ce60a3f5f50d76df2d633b48c2f94782a541de4c2dcbe1a07d937135f153aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2ce60a3f5f50d76df2d633b48c2f94782a541de4c2dcbe1a07d937135f153aea->leave($__internal_2ce60a3f5f50d76df2d633b48c2f94782a541de4c2dcbe1a07d937135f153aea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
