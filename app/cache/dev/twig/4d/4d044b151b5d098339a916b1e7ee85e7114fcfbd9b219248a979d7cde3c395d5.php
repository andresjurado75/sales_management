<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a2f23ee9460ca4c3dff032dbac88ffc68946298e0f2178d0a785d407ff792deb extends Twig_Template
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
        $__internal_972454691a6447a8e041a35fe428442b0a40cc8caa22d521e49c692be5cdcffa = $this->env->getExtension("native_profiler");
        $__internal_972454691a6447a8e041a35fe428442b0a40cc8caa22d521e49c692be5cdcffa->enter($__internal_972454691a6447a8e041a35fe428442b0a40cc8caa22d521e49c692be5cdcffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_972454691a6447a8e041a35fe428442b0a40cc8caa22d521e49c692be5cdcffa->leave($__internal_972454691a6447a8e041a35fe428442b0a40cc8caa22d521e49c692be5cdcffa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
