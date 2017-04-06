<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_135067337e94091eef2ceb28df43060c1e5b9346cfc4a4144afda70a6877e8d0 extends Twig_Template
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
        $__internal_db068caa1e2af67439960d6c942dca0de196bc6c0a56606c3296292461eb78f9 = $this->env->getExtension("native_profiler");
        $__internal_db068caa1e2af67439960d6c942dca0de196bc6c0a56606c3296292461eb78f9->enter($__internal_db068caa1e2af67439960d6c942dca0de196bc6c0a56606c3296292461eb78f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_db068caa1e2af67439960d6c942dca0de196bc6c0a56606c3296292461eb78f9->leave($__internal_db068caa1e2af67439960d6c942dca0de196bc6c0a56606c3296292461eb78f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
