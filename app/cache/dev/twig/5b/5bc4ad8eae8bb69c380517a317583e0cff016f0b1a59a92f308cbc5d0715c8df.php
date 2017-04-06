<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_a2186b8b6fabb697052039520f0b2b855774cda07e3ad2a0a0da623415b96d58 extends Twig_Template
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
        $__internal_e5b3887cffebe6d845cfea508c9880c98b85766e7f60fcc4c192a5e6997a83ae = $this->env->getExtension("native_profiler");
        $__internal_e5b3887cffebe6d845cfea508c9880c98b85766e7f60fcc4c192a5e6997a83ae->enter($__internal_e5b3887cffebe6d845cfea508c9880c98b85766e7f60fcc4c192a5e6997a83ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e5b3887cffebe6d845cfea508c9880c98b85766e7f60fcc4c192a5e6997a83ae->leave($__internal_e5b3887cffebe6d845cfea508c9880c98b85766e7f60fcc4c192a5e6997a83ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
