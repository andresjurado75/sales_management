<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e5fd099fd98a7c17af6b523c02e66304dcdb3f2fbe041641465bb9a94b1f59b2 extends Twig_Template
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
        $__internal_e1b6fc9d07ab4dfad1b80883cfc1e0ee52899500196088472c2469c042034b53 = $this->env->getExtension("native_profiler");
        $__internal_e1b6fc9d07ab4dfad1b80883cfc1e0ee52899500196088472c2469c042034b53->enter($__internal_e1b6fc9d07ab4dfad1b80883cfc1e0ee52899500196088472c2469c042034b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e1b6fc9d07ab4dfad1b80883cfc1e0ee52899500196088472c2469c042034b53->leave($__internal_e1b6fc9d07ab4dfad1b80883cfc1e0ee52899500196088472c2469c042034b53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
