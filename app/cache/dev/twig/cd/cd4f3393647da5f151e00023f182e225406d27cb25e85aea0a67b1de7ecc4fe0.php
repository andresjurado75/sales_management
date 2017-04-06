<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_93ebc7698252653102c3ddbbd89e160afd7750a871c31ebf34fbd5a20e4f2d25 extends Twig_Template
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
        $__internal_bc8635673a00ca232a5b43c3af414496c469b75914b184bacf25bf177b2e6e22 = $this->env->getExtension("native_profiler");
        $__internal_bc8635673a00ca232a5b43c3af414496c469b75914b184bacf25bf177b2e6e22->enter($__internal_bc8635673a00ca232a5b43c3af414496c469b75914b184bacf25bf177b2e6e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bc8635673a00ca232a5b43c3af414496c469b75914b184bacf25bf177b2e6e22->leave($__internal_bc8635673a00ca232a5b43c3af414496c469b75914b184bacf25bf177b2e6e22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
