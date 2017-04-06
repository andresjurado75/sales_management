<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_e30b88ed06803a49861f2441298dc8f9a71c2eb4757a40d55a80d907c0bc8dce extends Twig_Template
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
        $__internal_97b85cf8b04675690976dc8289c54eb6345243158cccb2930457a1304d75396d = $this->env->getExtension("native_profiler");
        $__internal_97b85cf8b04675690976dc8289c54eb6345243158cccb2930457a1304d75396d->enter($__internal_97b85cf8b04675690976dc8289c54eb6345243158cccb2930457a1304d75396d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_97b85cf8b04675690976dc8289c54eb6345243158cccb2930457a1304d75396d->leave($__internal_97b85cf8b04675690976dc8289c54eb6345243158cccb2930457a1304d75396d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
