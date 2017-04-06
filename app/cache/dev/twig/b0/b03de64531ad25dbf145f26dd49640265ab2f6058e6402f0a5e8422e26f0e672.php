<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_cbd1d2fc20441615f83a692b11c475218166ee2e41e31d6d2a4fea40c89d3c72 extends Twig_Template
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
        $__internal_7e11f14bea0a2a38ba9f57652649bf909d396a6e1b47db7e53a8a33219721b18 = $this->env->getExtension("native_profiler");
        $__internal_7e11f14bea0a2a38ba9f57652649bf909d396a6e1b47db7e53a8a33219721b18->enter($__internal_7e11f14bea0a2a38ba9f57652649bf909d396a6e1b47db7e53a8a33219721b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7e11f14bea0a2a38ba9f57652649bf909d396a6e1b47db7e53a8a33219721b18->leave($__internal_7e11f14bea0a2a38ba9f57652649bf909d396a6e1b47db7e53a8a33219721b18_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
