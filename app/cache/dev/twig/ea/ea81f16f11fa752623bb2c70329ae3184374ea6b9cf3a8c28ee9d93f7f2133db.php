<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_405a3b4e8502e567d2896aa8ce1cffb2101ae0d75952332076a599a1c981336d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abc7af5ac0fa235eb2a3c503aa625f35cbf2a98bc8de58a078a3762ff3e7415e = $this->env->getExtension("native_profiler");
        $__internal_abc7af5ac0fa235eb2a3c503aa625f35cbf2a98bc8de58a078a3762ff3e7415e->enter($__internal_abc7af5ac0fa235eb2a3c503aa625f35cbf2a98bc8de58a078a3762ff3e7415e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abc7af5ac0fa235eb2a3c503aa625f35cbf2a98bc8de58a078a3762ff3e7415e->leave($__internal_abc7af5ac0fa235eb2a3c503aa625f35cbf2a98bc8de58a078a3762ff3e7415e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f512c0a4ae5162b85e61c377c8e771394fb5bd41ef9e7a95190532c3910a5762 = $this->env->getExtension("native_profiler");
        $__internal_f512c0a4ae5162b85e61c377c8e771394fb5bd41ef9e7a95190532c3910a5762->enter($__internal_f512c0a4ae5162b85e61c377c8e771394fb5bd41ef9e7a95190532c3910a5762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f512c0a4ae5162b85e61c377c8e771394fb5bd41ef9e7a95190532c3910a5762->leave($__internal_f512c0a4ae5162b85e61c377c8e771394fb5bd41ef9e7a95190532c3910a5762_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_608f1e22e0a967338ce0940edc5a61974e4b4de1559ed3702494fe78220ae8d8 = $this->env->getExtension("native_profiler");
        $__internal_608f1e22e0a967338ce0940edc5a61974e4b4de1559ed3702494fe78220ae8d8->enter($__internal_608f1e22e0a967338ce0940edc5a61974e4b4de1559ed3702494fe78220ae8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_608f1e22e0a967338ce0940edc5a61974e4b4de1559ed3702494fe78220ae8d8->leave($__internal_608f1e22e0a967338ce0940edc5a61974e4b4de1559ed3702494fe78220ae8d8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_522e8636081303c8c5e8c450804ead1b0ceeb592d42b238430d76b6c7966a17e = $this->env->getExtension("native_profiler");
        $__internal_522e8636081303c8c5e8c450804ead1b0ceeb592d42b238430d76b6c7966a17e->enter($__internal_522e8636081303c8c5e8c450804ead1b0ceeb592d42b238430d76b6c7966a17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_522e8636081303c8c5e8c450804ead1b0ceeb592d42b238430d76b6c7966a17e->leave($__internal_522e8636081303c8c5e8c450804ead1b0ceeb592d42b238430d76b6c7966a17e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
