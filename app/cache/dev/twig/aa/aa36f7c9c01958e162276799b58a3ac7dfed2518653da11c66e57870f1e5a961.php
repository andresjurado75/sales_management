<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ec01241df50fef0cb714f7b897c17ecb5f90d7f40834e650f320fec0ee3b18d9 extends Twig_Template
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
        $__internal_ca49cfd6ac502dfcfea0789aa79292ca573f3c6ddbacbb8096ce0f14e6929d70 = $this->env->getExtension("native_profiler");
        $__internal_ca49cfd6ac502dfcfea0789aa79292ca573f3c6ddbacbb8096ce0f14e6929d70->enter($__internal_ca49cfd6ac502dfcfea0789aa79292ca573f3c6ddbacbb8096ce0f14e6929d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ca49cfd6ac502dfcfea0789aa79292ca573f3c6ddbacbb8096ce0f14e6929d70->leave($__internal_ca49cfd6ac502dfcfea0789aa79292ca573f3c6ddbacbb8096ce0f14e6929d70_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
