<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9cc9db1b701d3b46ea0f51b0446748c076860f573a009004a661740413eeeaf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a359fb4689cbf739a1472fc13c73df1f86cd1443d583ec08f6856a2ff5454848 = $this->env->getExtension("native_profiler");
        $__internal_a359fb4689cbf739a1472fc13c73df1f86cd1443d583ec08f6856a2ff5454848->enter($__internal_a359fb4689cbf739a1472fc13c73df1f86cd1443d583ec08f6856a2ff5454848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a359fb4689cbf739a1472fc13c73df1f86cd1443d583ec08f6856a2ff5454848->leave($__internal_a359fb4689cbf739a1472fc13c73df1f86cd1443d583ec08f6856a2ff5454848_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_451c683dde130e795fb3ce18811f5f6fa2e5bb85cc9f3b0022de9a08c86c9348 = $this->env->getExtension("native_profiler");
        $__internal_451c683dde130e795fb3ce18811f5f6fa2e5bb85cc9f3b0022de9a08c86c9348->enter($__internal_451c683dde130e795fb3ce18811f5f6fa2e5bb85cc9f3b0022de9a08c86c9348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_451c683dde130e795fb3ce18811f5f6fa2e5bb85cc9f3b0022de9a08c86c9348->leave($__internal_451c683dde130e795fb3ce18811f5f6fa2e5bb85cc9f3b0022de9a08c86c9348_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ea52e8fb0a796d29837a3b02460e528fad299e609b881fdb753e825c3345734 = $this->env->getExtension("native_profiler");
        $__internal_6ea52e8fb0a796d29837a3b02460e528fad299e609b881fdb753e825c3345734->enter($__internal_6ea52e8fb0a796d29837a3b02460e528fad299e609b881fdb753e825c3345734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6ea52e8fb0a796d29837a3b02460e528fad299e609b881fdb753e825c3345734->leave($__internal_6ea52e8fb0a796d29837a3b02460e528fad299e609b881fdb753e825c3345734_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef0ab5bbabd7a705ea8d03b42503c8171d3e126affd4acaed3c735995b0e14f7 = $this->env->getExtension("native_profiler");
        $__internal_ef0ab5bbabd7a705ea8d03b42503c8171d3e126affd4acaed3c735995b0e14f7->enter($__internal_ef0ab5bbabd7a705ea8d03b42503c8171d3e126affd4acaed3c735995b0e14f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ef0ab5bbabd7a705ea8d03b42503c8171d3e126affd4acaed3c735995b0e14f7->leave($__internal_ef0ab5bbabd7a705ea8d03b42503c8171d3e126affd4acaed3c735995b0e14f7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
