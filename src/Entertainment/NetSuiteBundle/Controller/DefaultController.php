<?php

namespace Entertainment\NetSuiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('EntertainmentNetSuiteBundle:Default:index.html.twig', array('name' => $name));
    }
}
