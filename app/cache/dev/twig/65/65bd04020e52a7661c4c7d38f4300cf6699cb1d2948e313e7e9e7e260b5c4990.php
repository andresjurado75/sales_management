<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b23d379b7c465e231abd39eec2efa57ca58ceb49fcdee7fc5d1ed70e20b211ef extends Twig_Template
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
        $__internal_5705f31d9e5e0a543522a3d09d15a8d70d2ce4b91691a9c27244e9785ed322b5 = $this->env->getExtension("native_profiler");
        $__internal_5705f31d9e5e0a543522a3d09d15a8d70d2ce4b91691a9c27244e9785ed322b5->enter($__internal_5705f31d9e5e0a543522a3d09d15a8d70d2ce4b91691a9c27244e9785ed322b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5705f31d9e5e0a543522a3d09d15a8d70d2ce4b91691a9c27244e9785ed322b5->leave($__internal_5705f31d9e5e0a543522a3d09d15a8d70d2ce4b91691a9c27244e9785ed322b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
