<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9af2d8cb01b3730a8585f3cc738f67c0cf3bf9cf3ab965194594f5005468ecdb extends Twig_Template
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
        $__internal_ba5f4b791df187dd495815602e8c993b6b1f4519e5d54566308aef602d2ba45a = $this->env->getExtension("native_profiler");
        $__internal_ba5f4b791df187dd495815602e8c993b6b1f4519e5d54566308aef602d2ba45a->enter($__internal_ba5f4b791df187dd495815602e8c993b6b1f4519e5d54566308aef602d2ba45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ba5f4b791df187dd495815602e8c993b6b1f4519e5d54566308aef602d2ba45a->leave($__internal_ba5f4b791df187dd495815602e8c993b6b1f4519e5d54566308aef602d2ba45a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
