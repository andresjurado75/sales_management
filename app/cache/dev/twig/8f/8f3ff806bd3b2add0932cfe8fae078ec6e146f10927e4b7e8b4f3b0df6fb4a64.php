<?php

/* securityBundle:Default:index.html.twig */
class __TwigTemplate_d5cb08e598bdb107649f2f37d786430aeb6359d6e2055d361cf5bc79af7794d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "securityBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_697e9b664127eea0b3bfbc05cdb628003e144d1dd4b72e5e3ff8b45f2538e1ea = $this->env->getExtension("native_profiler");
        $__internal_697e9b664127eea0b3bfbc05cdb628003e144d1dd4b72e5e3ff8b45f2538e1ea->enter($__internal_697e9b664127eea0b3bfbc05cdb628003e144d1dd4b72e5e3ff8b45f2538e1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "securityBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_697e9b664127eea0b3bfbc05cdb628003e144d1dd4b72e5e3ff8b45f2538e1ea->leave($__internal_697e9b664127eea0b3bfbc05cdb628003e144d1dd4b72e5e3ff8b45f2538e1ea_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ba0be838abcd868f6a18c7ffbaa16f389488a8530759cbedbaab2d16ee34fb8 = $this->env->getExtension("native_profiler");
        $__internal_0ba0be838abcd868f6a18c7ffbaa16f389488a8530759cbedbaab2d16ee34fb8->enter($__internal_0ba0be838abcd868f6a18c7ffbaa16f389488a8530759cbedbaab2d16ee34fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Styles/StyleSecurityView.css"), "html", null, true);
        echo "\">

";
        
        $__internal_0ba0be838abcd868f6a18c7ffbaa16f389488a8530759cbedbaab2d16ee34fb8->leave($__internal_0ba0be838abcd868f6a18c7ffbaa16f389488a8530759cbedbaab2d16ee34fb8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ff90a942b73ceb7b3776ebdf7d85b7a880025a7ed92b116be8311ea5e7520c2 = $this->env->getExtension("native_profiler");
        $__internal_3ff90a942b73ceb7b3776ebdf7d85b7a880025a7ed92b116be8311ea5e7520c2->enter($__internal_3ff90a942b73ceb7b3776ebdf7d85b7a880025a7ed92b116be8311ea5e7520c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
<nav class=\" header navbar navbar-inverse\" id=\"barraNav\">
\t<span id=\"icono\" class=\"glyphicon glyphicon-object-align-left\"></span>
<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("security_viewSearch");
        echo "\">
\t<span>Buscar Empleado</span>
</a>
<a>
    <span>Actualizar Empleado</span>
</a>
<a>
    <span>Eliminar Empleado</span>
</a>
</nav>

<div>
    <ol class=\"breadcrumb\">
        <li>
            <a href=\"#\">Home</a>
        </li>
        <li class=\"active\">
            Registrar
        </li>
    </ol>
</div>

<div class=\"container\">
\t<div class=\"panel panel-default row\" >
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\"> Registar Empleados </h3>
\t\t</div>
            <div class=\"panel-body col-lg-12\">
                
                ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">Identificacion del Empleado</span>
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idEmployee", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingrese su Identificacion")));
        echo "
                </div>
                <div>
                     <span class=\"text-danger\"> ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idEmployee", array()), 'errors');
        echo " </span>
                </div>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">Nombre del Empleado</span>
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employeeName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingrese su Nombre")));
        echo "
                </div>
                <div>
                     <span class=\"text-danger\"> ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employeeName", array()), 'errors');
        echo " </span>
                </div>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">Apellido del Empleado</span>
                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employeeLastname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingrese su Apellido")));
        echo "
                </div>
                <div>
                     <span class=\"text-danger\"> ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employeeLastname", array()), 'errors');
        echo " </span>
                </div>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">Email del Empleado</span>
                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingrese su Email")));
        echo "
                </div>
                <div>
                     <span class=\"text-danger\"> ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo " </span>
                </div>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">Password</span>
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingrese un password")));
        echo "
                </div>
                <div>
                     <span class=\"text-danger\"> ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo " </span>
                </div>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\">Selecciones un Role</span>
                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div>
                     <span class=\"text-danger\"> ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'errors');
        echo " </span>
                </div>
                <div>
                    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Registrar", array()), 'widget');
        echo "
                </div>
                

\t\t";
        // line 92
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
\t</div>
</div>
";
        
        $__internal_3ff90a942b73ceb7b3776ebdf7d85b7a880025a7ed92b116be8311ea5e7520c2->leave($__internal_3ff90a942b73ceb7b3776ebdf7d85b7a880025a7ed92b116be8311ea5e7520c2_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3a7cbf5187e15d35b392d1dc4622d891d58a728982e7f8be06db5c31b1c77c7f = $this->env->getExtension("native_profiler");
        $__internal_3a7cbf5187e15d35b392d1dc4622d891d58a728982e7f8be06db5c31b1c77c7f->enter($__internal_3a7cbf5187e15d35b392d1dc4622d891d58a728982e7f8be06db5c31b1c77c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3a7cbf5187e15d35b392d1dc4622d891d58a728982e7f8be06db5c31b1c77c7f->leave($__internal_3a7cbf5187e15d35b392d1dc4622d891d58a728982e7f8be06db5c31b1c77c7f_prof);

    }

    public function getTemplateName()
    {
        return "securityBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 98,  189 => 92,  182 => 88,  176 => 85,  170 => 82,  163 => 78,  157 => 75,  150 => 71,  144 => 68,  137 => 64,  131 => 61,  124 => 57,  118 => 54,  111 => 50,  105 => 47,  98 => 43,  66 => 14,  61 => 11,  55 => 10,  45 => 6,  42 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* {% block stylesheets %}*/
/* */
/* <link rel="stylesheet" type="text/css" href="{{ asset('Styles/StyleSecurityView.css') }}">*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <nav class=" header navbar navbar-inverse" id="barraNav">*/
/* 	<span id="icono" class="glyphicon glyphicon-object-align-left"></span>*/
/* <a href="{{path('security_viewSearch')}}">*/
/* 	<span>Buscar Empleado</span>*/
/* </a>*/
/* <a>*/
/*     <span>Actualizar Empleado</span>*/
/* </a>*/
/* <a>*/
/*     <span>Eliminar Empleado</span>*/
/* </a>*/
/* </nav>*/
/* */
/* <div>*/
/*     <ol class="breadcrumb">*/
/*         <li>*/
/*             <a href="#">Home</a>*/
/*         </li>*/
/*         <li class="active">*/
/*             Registrar*/
/*         </li>*/
/*     </ol>*/
/* </div>*/
/* */
/* <div class="container">*/
/* 	<div class="panel panel-default row" >*/
/* 		<div class="panel-heading">*/
/* 			<h3 class="panel-title"> Registar Empleados </h3>*/
/* 		</div>*/
/*             <div class="panel-body col-lg-12">*/
/*                 */
/*                 {{ form_start(form, {"attr":{"novalidate":"novalidate"}})}}*/
/*                 */
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon">Identificacion del Empleado</span>*/
/*                     {{form_widget(form.idEmployee, {"attr":{"class":"form-control", "placeholder":"Ingrese su Identificacion"}})}}*/
/*                 </div>*/
/*                 <div>*/
/*                      <span class="text-danger"> {{ form_errors(form.idEmployee) }} </span>*/
/*                 </div>*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon">Nombre del Empleado</span>*/
/*                     {{form_widget(form.employeeName, {"attr":{"class":"form-control", "placeholder":"Ingrese su Nombre"}})}}*/
/*                 </div>*/
/*                 <div>*/
/*                      <span class="text-danger"> {{ form_errors(form.employeeName) }} </span>*/
/*                 </div>*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon">Apellido del Empleado</span>*/
/*                     {{form_widget(form.employeeLastname, {"attr":{"class":"form-control", "placeholder":"Ingrese su Apellido"}})}}*/
/*                 </div>*/
/*                 <div>*/
/*                      <span class="text-danger"> {{ form_errors(form.employeeLastname) }} </span>*/
/*                 </div>*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon">Email del Empleado</span>*/
/*                     {{form_widget(form.email, {"attr":{"class":"form-control", "placeholder":"Ingrese su Email"}})}}*/
/*                 </div>*/
/*                 <div>*/
/*                      <span class="text-danger"> {{ form_errors(form.email) }} </span>*/
/*                 </div>*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon">Password</span>*/
/*                     {{form_widget(form.password, {"attr":{"class":"form-control", "placeholder":"Ingrese un password"}})}}*/
/*                 </div>*/
/*                 <div>*/
/*                      <span class="text-danger"> {{ form_errors(form.password) }} </span>*/
/*                 </div>*/
/*                 <div class="input-group">*/
/*                     <span class="input-group-addon">Selecciones un Role</span>*/
/*                     {{form_widget(form.roles, {"attr":{"class":"form-control"}})}}*/
/*                 </div>*/
/*                 <div>*/
/*                      <span class="text-danger"> {{ form_errors(form.roles) }} </span>*/
/*                 </div>*/
/*                 <div>*/
/*                     {{form_widget(form.Registrar)}}*/
/*                 </div>*/
/*                 */
/* */
/* 		{{ form_end(form) }}*/
/*             </div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}{% endblock %}*/
