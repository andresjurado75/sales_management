<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c4637231554cf7ed02d240fe7f32b04f96dcea8e9e2c016ae64a74757b8e6be4 extends Twig_Template
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
        $__internal_8d74155ab108d434bf707810e40d9fa2660e15458eaa5ac6857bcd5798e987c2 = $this->env->getExtension("native_profiler");
        $__internal_8d74155ab108d434bf707810e40d9fa2660e15458eaa5ac6857bcd5798e987c2->enter($__internal_8d74155ab108d434bf707810e40d9fa2660e15458eaa5ac6857bcd5798e987c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8d74155ab108d434bf707810e40d9fa2660e15458eaa5ac6857bcd5798e987c2->leave($__internal_8d74155ab108d434bf707810e40d9fa2660e15458eaa5ac6857bcd5798e987c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
