<?php

namespace Collab\CollabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as config;
use JMS\DiExtraBundle\Annotation as DI;

class HomeController extends Controller
{
    /**
     * @config\Route("/")
     * @config\Method("GET")
     */
    public function indexAction()
    {
        return $this->render('CollabBundle:Default:index.html.twig', array('name' => $name));	    
    }
}
