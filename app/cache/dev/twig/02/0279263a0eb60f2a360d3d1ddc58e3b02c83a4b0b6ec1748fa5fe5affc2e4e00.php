<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_cd4680089da6ce5b788913642cfe797728e6f33dd0e5c1b59fe316d43f4f844e extends Twig_Template
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
        $__internal_fc0e51ab31142ff0094e1929217ae532f610d38bdbf0ab4061c7d053b31ce71f = $this->env->getExtension("native_profiler");
        $__internal_fc0e51ab31142ff0094e1929217ae532f610d38bdbf0ab4061c7d053b31ce71f->enter($__internal_fc0e51ab31142ff0094e1929217ae532f610d38bdbf0ab4061c7d053b31ce71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fc0e51ab31142ff0094e1929217ae532f610d38bdbf0ab4061c7d053b31ce71f->leave($__internal_fc0e51ab31142ff0094e1929217ae532f610d38bdbf0ab4061c7d053b31ce71f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
