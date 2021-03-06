<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f5ba2c52671bf4bd8eb36eeb27a859bec0b3540f601c2315c35f4f2adf194744 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b5b8e610836a95ac8bee95869745964d1588b144392847142066619d7900e91e = $this->env->getExtension("native_profiler");
        $__internal_b5b8e610836a95ac8bee95869745964d1588b144392847142066619d7900e91e->enter($__internal_b5b8e610836a95ac8bee95869745964d1588b144392847142066619d7900e91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5b8e610836a95ac8bee95869745964d1588b144392847142066619d7900e91e->leave($__internal_b5b8e610836a95ac8bee95869745964d1588b144392847142066619d7900e91e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b0a7245d4a88dab3222f137556a637dfbe4146d18e7f5bba45e3d16ce6bf10b = $this->env->getExtension("native_profiler");
        $__internal_4b0a7245d4a88dab3222f137556a637dfbe4146d18e7f5bba45e3d16ce6bf10b->enter($__internal_4b0a7245d4a88dab3222f137556a637dfbe4146d18e7f5bba45e3d16ce6bf10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4b0a7245d4a88dab3222f137556a637dfbe4146d18e7f5bba45e3d16ce6bf10b->leave($__internal_4b0a7245d4a88dab3222f137556a637dfbe4146d18e7f5bba45e3d16ce6bf10b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43c7b8231220a04c0a1377690cd6a4535bc523d6107c00d12f2ef5a41067d9a6 = $this->env->getExtension("native_profiler");
        $__internal_43c7b8231220a04c0a1377690cd6a4535bc523d6107c00d12f2ef5a41067d9a6->enter($__internal_43c7b8231220a04c0a1377690cd6a4535bc523d6107c00d12f2ef5a41067d9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_43c7b8231220a04c0a1377690cd6a4535bc523d6107c00d12f2ef5a41067d9a6->leave($__internal_43c7b8231220a04c0a1377690cd6a4535bc523d6107c00d12f2ef5a41067d9a6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2182b8e1eed6c26ac7188689f39ea8011f5dee41aea48c0877206220196fccbf = $this->env->getExtension("native_profiler");
        $__internal_2182b8e1eed6c26ac7188689f39ea8011f5dee41aea48c0877206220196fccbf->enter($__internal_2182b8e1eed6c26ac7188689f39ea8011f5dee41aea48c0877206220196fccbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2182b8e1eed6c26ac7188689f39ea8011f5dee41aea48c0877206220196fccbf->leave($__internal_2182b8e1eed6c26ac7188689f39ea8011f5dee41aea48c0877206220196fccbf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
