<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_17290f49424392d7a1600d81c22d5f826b08fbaf185912663e22957793bf82da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_deb77c88442a237a42bab1ee9641842740bd37a516737e753676d48a6697e575 = $this->env->getExtension("native_profiler");
        $__internal_deb77c88442a237a42bab1ee9641842740bd37a516737e753676d48a6697e575->enter($__internal_deb77c88442a237a42bab1ee9641842740bd37a516737e753676d48a6697e575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_deb77c88442a237a42bab1ee9641842740bd37a516737e753676d48a6697e575->leave($__internal_deb77c88442a237a42bab1ee9641842740bd37a516737e753676d48a6697e575_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_77922dac68c98973abfa8775f7e9f42496c56342c100b26c8da30f9731cce70c = $this->env->getExtension("native_profiler");
        $__internal_77922dac68c98973abfa8775f7e9f42496c56342c100b26c8da30f9731cce70c->enter($__internal_77922dac68c98973abfa8775f7e9f42496c56342c100b26c8da30f9731cce70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_77922dac68c98973abfa8775f7e9f42496c56342c100b26c8da30f9731cce70c->leave($__internal_77922dac68c98973abfa8775f7e9f42496c56342c100b26c8da30f9731cce70c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
