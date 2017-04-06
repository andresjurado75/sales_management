<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_6ce2082fa68d99bacb9835f32be3c0fc7be2778153ab9f7ca947402beff01d68 extends Twig_Template
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
        $__internal_73e8e825e62d35ba9e9d372f4debac443d7089809add273abbe731aa0999e679 = $this->env->getExtension("native_profiler");
        $__internal_73e8e825e62d35ba9e9d372f4debac443d7089809add273abbe731aa0999e679->enter($__internal_73e8e825e62d35ba9e9d372f4debac443d7089809add273abbe731aa0999e679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_73e8e825e62d35ba9e9d372f4debac443d7089809add273abbe731aa0999e679->leave($__internal_73e8e825e62d35ba9e9d372f4debac443d7089809add273abbe731aa0999e679_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
