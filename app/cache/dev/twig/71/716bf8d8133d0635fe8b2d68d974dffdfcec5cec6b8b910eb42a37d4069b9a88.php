<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d7a452526b5d70e3fa57109f33bc0f672aef68d9e5efa7d26a9509adbb1a1593 extends Twig_Template
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
        $__internal_112bcc87f75d571e47ac7daa376c4984a96fdd98e12386a76286ef50e3d804ec = $this->env->getExtension("native_profiler");
        $__internal_112bcc87f75d571e47ac7daa376c4984a96fdd98e12386a76286ef50e3d804ec->enter($__internal_112bcc87f75d571e47ac7daa376c4984a96fdd98e12386a76286ef50e3d804ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_112bcc87f75d571e47ac7daa376c4984a96fdd98e12386a76286ef50e3d804ec->leave($__internal_112bcc87f75d571e47ac7daa376c4984a96fdd98e12386a76286ef50e3d804ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
