<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e74e309b36cdd9d79601243d029a59337aa53a18fbb366faa6054d2cfd30aa66 extends Twig_Template
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
        $__internal_204f0d84694bec234779c55acbd8cb9bb4dde2c10a1e64d566e733967deb1545 = $this->env->getExtension("native_profiler");
        $__internal_204f0d84694bec234779c55acbd8cb9bb4dde2c10a1e64d566e733967deb1545->enter($__internal_204f0d84694bec234779c55acbd8cb9bb4dde2c10a1e64d566e733967deb1545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_204f0d84694bec234779c55acbd8cb9bb4dde2c10a1e64d566e733967deb1545->leave($__internal_204f0d84694bec234779c55acbd8cb9bb4dde2c10a1e64d566e733967deb1545_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
