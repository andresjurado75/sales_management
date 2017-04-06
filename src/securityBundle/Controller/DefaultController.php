<?php

namespace securityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EntityBundle\Entity\employee;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;



class DefaultController extends Controller
{
   public function indexAction(Request $request)
    {

    	$employee = new employee();
    	$form = $this-> formCreate($employee);
        $form->handleRequest($request);
        
        if($form->isValid()){
            $psw = $form->get("password")->getData();
            $encoder = $this->container->get("security.password_encoder");
            $encoded = $encoder->encodePassword($employee, $psw);

            $employee->setPassword($encoded);
            $em = $this-> getDoctrine()-> getManager();
            $em->persist($employee);
            $em->flush();
        }

        return $this->render('securityBundle:Default:index.html.twig', array('form' => $form->createView()));
    }


    public function updateAction(){



        return $this->render('securityBundle:Default:updateEmployee.html.twig');

    }


    public function searchAction(){

        $form_search = $this->createFormBuilder()
        ->add('Campo', TextType::class, array('attr' => array('class' => 'form-control field')))
        ->add('Buscar', ButtonType::class, array('attr' => array('class' => 'btn btn-danger search')))
        ->getForm();

        return $this->render('securityBundle:Default:SearchEmployee.html.twig', array('form' => $form_search->createView()));
    }

    public function formcreate($entity){
    	$form = $this->createFormBuilder($entity)
    	->add('employeeName', TextType::class)
        ->add('idEmployee', TextType::class)
        ->add('employeeLastname', TextType::class)
        ->add('roles', ChoiceType::class, array('choices' => array('' => 'Seleccione un Role','ROLE_USER' => 'Empleado', 'ROLE_ADMIN'=> 'Administrador')))
        ->add('password', PasswordType::class)
        ->add('email', EmailType::class)
        ->add('Registrar', SubmitType::class, array('attr' => array('class' => 'btn btn-primary btn-md btn-block')))
    	->getForm();

    	return $form;
    }

    public function search_employeesAction(Request $request){
        if($request->isXmlHttpRequest()){
            $aux = $request->request->get('data');
            $em = $this->getDoctrine()->getRepository('EntityBundle:employee');
            $data = $em->findOneBy(array('idEmployee' => $aux));
            $aux = array('id' => $data->getId() ,'idempleado' => $data->getIdEmployee(), 'nombre' => $data->getEmployeeName(), 'apellido' => $data->getEmployeeLastname(), 'role' => $data->getRoles(), 'email' => $data->getEmail());
            return new JsonResponse($aux);

        }
    }

    public function search_employeesAllAction(Request $request){
        if($request->isXmlHttpRequest()){
            $aux = $request->request->get('data');
            $em = $this->getDoctrine()->getRepository('EntityBundle:employee');
            $data = $em->findAll();
            $role;

            for ($i=0; $i < sizeof($data); $i++) { 

                if($data[$i]->getRoles() === "ROLE_USER"){
                    $role = "Empleado";
                }

                if($data[$i]->getRoles() === "ROLE_ADMIN"){
                    $role = "Administrador";
                }

                $empl[$i] = array('id' => $data[$i]->getId() ,'idempleado' => $data[$i]->getIdEmployee(), 'nombre' => $data[$i]->getEmployeeName(), 'apellido' => $data[$i]->getEmployeeLastname(), 'role' => $role, 'email' => $data[$i]->getEmail());


            }

            return new JsonResponse($empl);

        }
    }

}
