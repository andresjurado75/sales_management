<?php

/* ::base.html.twig */
class __TwigTemplate_aa734b8e9ad08b0fc7a0fdf76aae65518264da632dcc081408f64e2d132ac92e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8a451f5f45452f2dc2b367f958aa0ea2f5cc6d600a67d9d0742f4b7f050b0c7 = $this->env->getExtension("native_profiler");
        $__internal_e8a451f5f45452f2dc2b367f958aa0ea2f5cc6d600a67d9d0742f4b7f050b0c7->enter($__internal_e8a451f5f45452f2dc2b367f958aa0ea2f5cc6d600a67d9d0742f4b7f050b0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Librerias/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Librerias/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "         <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Librerias/js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Librerias/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_e8a451f5f45452f2dc2b367f958aa0ea2f5cc6d600a67d9d0742f4b7f050b0c7->leave($__internal_e8a451f5f45452f2dc2b367f958aa0ea2f5cc6d600a67d9d0742f4b7f050b0c7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2bcdcb8c6e33768158fe88d88a2899eb7b7f20bbf1efa1a7a615d830b77f32e = $this->env->getExtension("native_profiler");
        $__internal_b2bcdcb8c6e33768158fe88d88a2899eb7b7f20bbf1efa1a7a615d830b77f32e->enter($__internal_b2bcdcb8c6e33768158fe88d88a2899eb7b7f20bbf1efa1a7a615d830b77f32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b2bcdcb8c6e33768158fe88d88a2899eb7b7f20bbf1efa1a7a615d830b77f32e->leave($__internal_b2bcdcb8c6e33768158fe88d88a2899eb7b7f20bbf1efa1a7a615d830b77f32e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f23aea206d503f5ed897eabb7ed1a1bc396a9ed92b19ac7f06b57ccb8239473 = $this->env->getExtension("native_profiler");
        $__internal_3f23aea206d503f5ed897eabb7ed1a1bc396a9ed92b19ac7f06b57ccb8239473->enter($__internal_3f23aea206d503f5ed897eabb7ed1a1bc396a9ed92b19ac7f06b57ccb8239473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3f23aea206d503f5ed897eabb7ed1a1bc396a9ed92b19ac7f06b57ccb8239473->leave($__internal_3f23aea206d503f5ed897eabb7ed1a1bc396a9ed92b19ac7f06b57ccb8239473_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_37900da449a9a376a8ebd3e98b90851678ac19009df70a43f368d818a46a99da = $this->env->getExtension("native_profiler");
        $__internal_37900da449a9a376a8ebd3e98b90851678ac19009df70a43f368d818a46a99da->enter($__internal_37900da449a9a376a8ebd3e98b90851678ac19009df70a43f368d818a46a99da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_37900da449a9a376a8ebd3e98b90851678ac19009df70a43f368d818a46a99da->leave($__internal_37900da449a9a376a8ebd3e98b90851678ac19009df70a43f368d818a46a99da_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8164917b0a5b119837889b33ead083a659c830b13cffbd50ef2433b96f360398 = $this->env->getExtension("native_profiler");
        $__internal_8164917b0a5b119837889b33ead083a659c830b13cffbd50ef2433b96f360398->enter($__internal_8164917b0a5b119837889b33ead083a659c830b13cffbd50ef2433b96f360398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8164917b0a5b119837889b33ead083a659c830b13cffbd50ef2433b96f360398->leave($__internal_8164917b0a5b119837889b33ead083a659c830b13cffbd50ef2433b96f360398_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 15,  98 => 12,  87 => 8,  75 => 5,  66 => 16,  64 => 15,  60 => 14,  55 => 13,  53 => 12,  46 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('Librerias/css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('Librerias/css/bootstrap-theme.min.css') }}">*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*          <script type="text/javascript" src="{{ asset('Librerias/js/jquery-3.1.0.min.js') }}"></script>*/
/*          <script type="text/javascript" src="{{ asset('Librerias/js/bootstrap.min.js') }}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
