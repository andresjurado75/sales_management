<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_fad4062fe2c0fa2f75f2efda28960800f280f5d7d5bb19d9e75864b3b4481bff extends Twig_Template
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
        $__internal_42164d5a42e26da03119ba52feb6f288f0ee1b1aca86f252d20db2c741588be0 = $this->env->getExtension("native_profiler");
        $__internal_42164d5a42e26da03119ba52feb6f288f0ee1b1aca86f252d20db2c741588be0->enter($__internal_42164d5a42e26da03119ba52feb6f288f0ee1b1aca86f252d20db2c741588be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_42164d5a42e26da03119ba52feb6f288f0ee1b1aca86f252d20db2c741588be0->leave($__internal_42164d5a42e26da03119ba52feb6f288f0ee1b1aca86f252d20db2c741588be0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
