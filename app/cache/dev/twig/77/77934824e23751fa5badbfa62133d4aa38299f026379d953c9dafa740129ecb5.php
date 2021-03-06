<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_60f29b09f09b0f42e6cc8c25a79f669f0477b857e1345793e2a008888ee4e836 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ebdd378154e69a7a4bbdcc0e5b2ab792211a1c91baca0fc0bad599d27c3a2115 = $this->env->getExtension("native_profiler");
        $__internal_ebdd378154e69a7a4bbdcc0e5b2ab792211a1c91baca0fc0bad599d27c3a2115->enter($__internal_ebdd378154e69a7a4bbdcc0e5b2ab792211a1c91baca0fc0bad599d27c3a2115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebdd378154e69a7a4bbdcc0e5b2ab792211a1c91baca0fc0bad599d27c3a2115->leave($__internal_ebdd378154e69a7a4bbdcc0e5b2ab792211a1c91baca0fc0bad599d27c3a2115_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb8c2342234670df3bc2b96f50923332933deadee39aa471d6ba4922a96a65ee = $this->env->getExtension("native_profiler");
        $__internal_fb8c2342234670df3bc2b96f50923332933deadee39aa471d6ba4922a96a65ee->enter($__internal_fb8c2342234670df3bc2b96f50923332933deadee39aa471d6ba4922a96a65ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fb8c2342234670df3bc2b96f50923332933deadee39aa471d6ba4922a96a65ee->leave($__internal_fb8c2342234670df3bc2b96f50923332933deadee39aa471d6ba4922a96a65ee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_54ee88ff85070dffd12df65df331a4beb52ca2b016f13f0abcd8de997dd906ca = $this->env->getExtension("native_profiler");
        $__internal_54ee88ff85070dffd12df65df331a4beb52ca2b016f13f0abcd8de997dd906ca->enter($__internal_54ee88ff85070dffd12df65df331a4beb52ca2b016f13f0abcd8de997dd906ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_54ee88ff85070dffd12df65df331a4beb52ca2b016f13f0abcd8de997dd906ca->leave($__internal_54ee88ff85070dffd12df65df331a4beb52ca2b016f13f0abcd8de997dd906ca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
