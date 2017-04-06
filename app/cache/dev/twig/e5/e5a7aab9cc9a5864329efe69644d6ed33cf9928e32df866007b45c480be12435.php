<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2c463a39b4e085d05f95de9835476bc61a4dac0fda2e4f352105827c946a6a25 extends Twig_Template
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
        $__internal_d6bc09450c7dc94d1ae4d41e2949c415910568292ed14e2ec5f3290af40909e9 = $this->env->getExtension("native_profiler");
        $__internal_d6bc09450c7dc94d1ae4d41e2949c415910568292ed14e2ec5f3290af40909e9->enter($__internal_d6bc09450c7dc94d1ae4d41e2949c415910568292ed14e2ec5f3290af40909e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d6bc09450c7dc94d1ae4d41e2949c415910568292ed14e2ec5f3290af40909e9->leave($__internal_d6bc09450c7dc94d1ae4d41e2949c415910568292ed14e2ec5f3290af40909e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
