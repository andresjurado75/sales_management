<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8c3a7b1c3c13a7df411f39755d46d3df0f47c4d5982b5289195ceb48a4b01ddd extends Twig_Template
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
        $__internal_676141f5a5497a69769c610310c5849f1ff5e3f73e4a4234b911ab369668b75b = $this->env->getExtension("native_profiler");
        $__internal_676141f5a5497a69769c610310c5849f1ff5e3f73e4a4234b911ab369668b75b->enter($__internal_676141f5a5497a69769c610310c5849f1ff5e3f73e4a4234b911ab369668b75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_676141f5a5497a69769c610310c5849f1ff5e3f73e4a4234b911ab369668b75b->leave($__internal_676141f5a5497a69769c610310c5849f1ff5e3f73e4a4234b911ab369668b75b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
