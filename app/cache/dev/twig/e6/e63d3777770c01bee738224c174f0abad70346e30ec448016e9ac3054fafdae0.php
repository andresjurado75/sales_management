<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_13d6379aba09eaf9269bfab69eb3bf8dba2c0b8afa3348c5d244c9b9697f9db3 extends Twig_Template
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
        $__internal_16f704589edc4ccc8a70b41d287d269471b190db704a9c2da86aae520a678b92 = $this->env->getExtension("native_profiler");
        $__internal_16f704589edc4ccc8a70b41d287d269471b190db704a9c2da86aae520a678b92->enter($__internal_16f704589edc4ccc8a70b41d287d269471b190db704a9c2da86aae520a678b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_16f704589edc4ccc8a70b41d287d269471b190db704a9c2da86aae520a678b92->leave($__internal_16f704589edc4ccc8a70b41d287d269471b190db704a9c2da86aae520a678b92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
