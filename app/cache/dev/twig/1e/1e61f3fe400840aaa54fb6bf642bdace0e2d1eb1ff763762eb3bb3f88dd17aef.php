<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_90b1025b62d4b7bdde6cf2e0e8e5f390a9640ebc63a96451416fc653e08cfebb extends Twig_Template
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
        $__internal_b8be2eead05fd836de20257b8ef2d55596f486216d7a5d847a75ce1e7d41a1bb = $this->env->getExtension("native_profiler");
        $__internal_b8be2eead05fd836de20257b8ef2d55596f486216d7a5d847a75ce1e7d41a1bb->enter($__internal_b8be2eead05fd836de20257b8ef2d55596f486216d7a5d847a75ce1e7d41a1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b8be2eead05fd836de20257b8ef2d55596f486216d7a5d847a75ce1e7d41a1bb->leave($__internal_b8be2eead05fd836de20257b8ef2d55596f486216d7a5d847a75ce1e7d41a1bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
