<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9e2f5ca46758356469764fd3a710631e217cee4a3e38539549ed294b677b85d4 extends Twig_Template
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
        $__internal_8526478e0c8c233deae0a60bb3c56b4cc9079f742218ff958582df65b06ce2f1 = $this->env->getExtension("native_profiler");
        $__internal_8526478e0c8c233deae0a60bb3c56b4cc9079f742218ff958582df65b06ce2f1->enter($__internal_8526478e0c8c233deae0a60bb3c56b4cc9079f742218ff958582df65b06ce2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8526478e0c8c233deae0a60bb3c56b4cc9079f742218ff958582df65b06ce2f1->leave($__internal_8526478e0c8c233deae0a60bb3c56b4cc9079f742218ff958582df65b06ce2f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
