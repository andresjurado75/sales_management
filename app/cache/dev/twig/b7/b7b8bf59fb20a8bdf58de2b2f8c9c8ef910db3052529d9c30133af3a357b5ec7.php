<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e646c6e05aaa48617ed8ec4da136980d2818362efd6dd175c5a62dd546aa03f2 extends Twig_Template
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
        $__internal_3fe635048e5a219043981b99f25f19ca4a076e6fea500216cf8286227304c938 = $this->env->getExtension("native_profiler");
        $__internal_3fe635048e5a219043981b99f25f19ca4a076e6fea500216cf8286227304c938->enter($__internal_3fe635048e5a219043981b99f25f19ca4a076e6fea500216cf8286227304c938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3fe635048e5a219043981b99f25f19ca4a076e6fea500216cf8286227304c938->leave($__internal_3fe635048e5a219043981b99f25f19ca4a076e6fea500216cf8286227304c938_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
