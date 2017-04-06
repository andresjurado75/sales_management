<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e8b3e2ab2a977019d2b69b28c5e5a35760cad86a9d364dfc35b436abe9518d2f extends Twig_Template
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
        $__internal_c3f1dfc1fcd6031124d0f613e05d6143889f7cd33252105883580b4e8b1e4eeb = $this->env->getExtension("native_profiler");
        $__internal_c3f1dfc1fcd6031124d0f613e05d6143889f7cd33252105883580b4e8b1e4eeb->enter($__internal_c3f1dfc1fcd6031124d0f613e05d6143889f7cd33252105883580b4e8b1e4eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c3f1dfc1fcd6031124d0f613e05d6143889f7cd33252105883580b4e8b1e4eeb->leave($__internal_c3f1dfc1fcd6031124d0f613e05d6143889f7cd33252105883580b4e8b1e4eeb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
