<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_651a4832ca5280364d337cd467cebea423a7527c86401cd1ddb95a2d749981a0 extends Twig_Template
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
        $__internal_3ea9771ca3bec820b0c83f4bd162f183af0dd7f41d57e1312575b7618d9ebf81 = $this->env->getExtension("native_profiler");
        $__internal_3ea9771ca3bec820b0c83f4bd162f183af0dd7f41d57e1312575b7618d9ebf81->enter($__internal_3ea9771ca3bec820b0c83f4bd162f183af0dd7f41d57e1312575b7618d9ebf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3ea9771ca3bec820b0c83f4bd162f183af0dd7f41d57e1312575b7618d9ebf81->leave($__internal_3ea9771ca3bec820b0c83f4bd162f183af0dd7f41d57e1312575b7618d9ebf81_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
