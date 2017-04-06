<?php

/* securityBundle:Default:SearchEmployee.html.twig */
class __TwigTemplate_131ee4dc84f6ae945667f4afb1b64c650e2cf8d48894c9136381b97ecc527be5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "securityBundle:Default:SearchEmployee.html.twig", 1);
        $this->blocks = array(
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
        $__internal_1b39d664ef65ac6480b6b5a24eff5c6881036b934c2891f5803468112a732dc7 = $this->env->getExtension("native_profiler");
        $__internal_1b39d664ef65ac6480b6b5a24eff5c6881036b934c2891f5803468112a732dc7->enter($__internal_1b39d664ef65ac6480b6b5a24eff5c6881036b934c2891f5803468112a732dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "securityBundle:Default:SearchEmployee.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b39d664ef65ac6480b6b5a24eff5c6881036b934c2891f5803468112a732dc7->leave($__internal_1b39d664ef65ac6480b6b5a24eff5c6881036b934c2891f5803468112a732dc7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1fb7caf5526ecffd015f191498085951235a11b7b4e1241734c548346ecdeef = $this->env->getExtension("native_profiler");
        $__internal_a1fb7caf5526ecffd015f191498085951235a11b7b4e1241734c548346ecdeef->enter($__internal_a1fb7caf5526ecffd015f191498085951235a11b7b4e1241734c548346ecdeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div>
    <ol class=\"breadcrumb\">
        <li>
            <a href=\"#\">Home</a>
        </li>
        <li>
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("security_homepage");
        echo "\">Registrar</a>
        </li>
        <li class=\"active\">
            Buscar Empleado
        </li>
    </ol>
</div>

<div class=\"container\">
\t    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"input-group col-lg-5 col-lg-offset-3\">
      ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Campo", array()), 'widget');
        echo "
    </div>
      <div class=\"input-group-btn\">
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Buscar", array()), 'widget');
        echo "
        <button type=\"button\" class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <span class=\"caret\"></span>
          <span class=\"sr-only\">Toggle Dropdown</span>
        </button>
        <ul class=\"dropdown-menu\">
          <li role=\"separator\" class=\"divider\"></li>
          <li><a href=\"#\" id=\"buscarAll\">Buscar Todos lo Empleados</a></li>
        </ul>
      </div>
          ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
      </br>
\t    

<table class=\"table table-striped table-bordered table-hover\" >
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<td> #
\t\t\t\t</td>
\t\t\t\t<td> IDENTIFICACION
\t\t\t\t</td>
\t\t\t\t<td> NOMBRE
\t\t\t\t</td>
\t\t\t\t<td> APELLIDO
\t\t\t\t</td>
\t\t\t\t<td> EMAIL
\t\t\t\t</td>
\t\t\t\t<td> ROLE
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody id=\"bodyTable\">

\t\t</tbody>
</table>

</div>
";
        
        $__internal_a1fb7caf5526ecffd015f191498085951235a11b7b4e1241734c548346ecdeef->leave($__internal_a1fb7caf5526ecffd015f191498085951235a11b7b4e1241734c548346ecdeef_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d60abbde9e6060d349606d39ac171092bb376a76dd39da284cb80af2717d152f = $this->env->getExtension("native_profiler");
        $__internal_d60abbde9e6060d349606d39ac171092bb376a76dd39da284cb80af2717d152f->enter($__internal_d60abbde9e6060d349606d39ac171092bb376a76dd39da284cb80af2717d152f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "<script type=\"text/javascript\">
\$btn = \$('#buscarAll');
\$field = \$('.field');
\$dat;
\$btn.click(function(){
alert();
\t\t\$.ajax({
\t\t\turl:\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("security_searchemployeesAll");
        echo "\",
\t\t\ttype:'POST',
\t\t\tdataType: 'json',
\t\t\tdata:{data : \$field.val()},
\t\t\tsuccess: function(data){
\t\t\t\t\$bodyTable = \$('#bodyTable');
\t\t\t\t\$bodyTable.empty();
\t\t\t\tfor(i = 0; i < data.length; i++){
\t\t\t\tconsole.log(data);
\t\t\t\t\$bodyTable.append(\"<tr id='\"+  i +\"' >\" + \"<td>\" + data[i].id + \"</td>\" + \"<td>\" + data[i].idempleado + \"</td>\" + \"<td>\" + data[i].nombre + \"</td>\" + \"<td>\" + data[i].apellido + \"</td>\" + \"<td>\" + data[i].email + \"</td>\" + \"<td>\" + data[i].role + \"</td>\" + \"<td> <button class='btn-editar'> EDITAR </button> </td>\" + \"</tr>\");
\t\t\t\t}
\t\t      \t//\$bodyTable.update();
\t\t\t},
\t\t\terror: function(){
\t\t\t\talert('error');
\t\t\t},
\t\t\tcomplete: function(){
\t\t\t\t\$dat = data; 
\t\t\t\tconsole.log(\$dat);
\t\t\t}
\t\t});
})
</script>
";
        
        $__internal_d60abbde9e6060d349606d39ac171092bb376a76dd39da284cb80af2717d152f->leave($__internal_d60abbde9e6060d349606d39ac171092bb376a76dd39da284cb80af2717d152f_prof);

    }

    public function getTemplateName()
    {
        return "securityBundle:Default:SearchEmployee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 74,  129 => 67,  123 => 66,  86 => 35,  73 => 25,  67 => 22,  62 => 20,  50 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div>*/
/*     <ol class="breadcrumb">*/
/*         <li>*/
/*             <a href="#">Home</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{path('security_homepage')}}">Registrar</a>*/
/*         </li>*/
/*         <li class="active">*/
/*             Buscar Empleado*/
/*         </li>*/
/*     </ol>*/
/* </div>*/
/* */
/* <div class="container">*/
/* 	    {{form_start(form)}}*/
/*     <div class="input-group col-lg-5 col-lg-offset-3">*/
/*       {{form_widget(form.Campo)}}*/
/*     </div>*/
/*       <div class="input-group-btn">*/
/*         {{form_widget(form.Buscar)}}*/
/*         <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*           <span class="caret"></span>*/
/*           <span class="sr-only">Toggle Dropdown</span>*/
/*         </button>*/
/*         <ul class="dropdown-menu">*/
/*           <li role="separator" class="divider"></li>*/
/*           <li><a href="#" id="buscarAll">Buscar Todos lo Empleados</a></li>*/
/*         </ul>*/
/*       </div>*/
/*           {{form_end(form)}}*/
/*       </br>*/
/* 	    */
/* */
/* <table class="table table-striped table-bordered table-hover" >*/
/* 		<thead>*/
/* 			<tr>*/
/* 				<td> #*/
/* 				</td>*/
/* 				<td> IDENTIFICACION*/
/* 				</td>*/
/* 				<td> NOMBRE*/
/* 				</td>*/
/* 				<td> APELLIDO*/
/* 				</td>*/
/* 				<td> EMAIL*/
/* 				</td>*/
/* 				<td> ROLE*/
/* 				</td>*/
/* 				<td>*/
/* 				</td>*/
/* 			</tr>*/
/* 		</thead>*/
/* 		<tbody id="bodyTable">*/
/* */
/* 		</tbody>*/
/* </table>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* <script type="text/javascript">*/
/* $btn = $('#buscarAll');*/
/* $field = $('.field');*/
/* $dat;*/
/* $btn.click(function(){*/
/* alert();*/
/* 		$.ajax({*/
/* 			url:"{{path('security_searchemployeesAll')}}",*/
/* 			type:'POST',*/
/* 			dataType: 'json',*/
/* 			data:{data : $field.val()},*/
/* 			success: function(data){*/
/* 				$bodyTable = $('#bodyTable');*/
/* 				$bodyTable.empty();*/
/* 				for(i = 0; i < data.length; i++){*/
/* 				console.log(data);*/
/* 				$bodyTable.append("<tr id='"+  i +"' >" + "<td>" + data[i].id + "</td>" + "<td>" + data[i].idempleado + "</td>" + "<td>" + data[i].nombre + "</td>" + "<td>" + data[i].apellido + "</td>" + "<td>" + data[i].email + "</td>" + "<td>" + data[i].role + "</td>" + "<td> <button class='btn-editar'> EDITAR </button> </td>" + "</tr>");*/
/* 				}*/
/* 		      	//$bodyTable.update();*/
/* 			},*/
/* 			error: function(){*/
/* 				alert('error');*/
/* 			},*/
/* 			complete: function(){*/
/* 				$dat = data; */
/* 				console.log($dat);*/
/* 			}*/
/* 		});*/
/* })*/
/* </script>*/
/* {% endblock %}*/
