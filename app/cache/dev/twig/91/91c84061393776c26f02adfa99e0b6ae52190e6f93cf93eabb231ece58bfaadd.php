<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_7a9d40fa7f419d205f4155ac69f42ac0ef0f932f2c3d3e64237ba86b54ac0a2c extends Twig_Template
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
        $__internal_0337024bd64de51f45f32e060ebf6391c141e9c3f76e15305c48caf71ddf6910 = $this->env->getExtension("native_profiler");
        $__internal_0337024bd64de51f45f32e060ebf6391c141e9c3f76e15305c48caf71ddf6910->enter($__internal_0337024bd64de51f45f32e060ebf6391c141e9c3f76e15305c48caf71ddf6910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0337024bd64de51f45f32e060ebf6391c141e9c3f76e15305c48caf71ddf6910->leave($__internal_0337024bd64de51f45f32e060ebf6391c141e9c3f76e15305c48caf71ddf6910_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
