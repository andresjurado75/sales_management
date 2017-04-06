<?php

namespace SalesCRUDBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SalesCRUDBundle:Default:index.html.twig');
    }
}
