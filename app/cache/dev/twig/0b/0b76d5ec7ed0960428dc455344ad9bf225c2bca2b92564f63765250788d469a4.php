<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ae1c7a21132e255965d14ac998abe6d42bc0b48fbc3797f6011173d7237cb993 extends Twig_Template
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
        $__internal_ca62765a73dacb0a46ecd610504fa7786a47e92658172894014213661063e16c = $this->env->getExtension("native_profiler");
        $__internal_ca62765a73dacb0a46ecd610504fa7786a47e92658172894014213661063e16c->enter($__internal_ca62765a73dacb0a46ecd610504fa7786a47e92658172894014213661063e16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ca62765a73dacb0a46ecd610504fa7786a47e92658172894014213661063e16c->leave($__internal_ca62765a73dacb0a46ecd610504fa7786a47e92658172894014213661063e16c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
