<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/site/{pageName}")
     */
    public function pageAction($pageName) 
    {
      return $this->render("site/$pageName.html.twig");
      //return new Response('Página de ayuda');
    }
    
    /**
     * @Route("/privacidad")
     */
    public function privacityAction()
    {
      return $this->render('site/privacity.html.twig');
    }
    
    /**
     * @Route("/sobre-nosotros")
     */
    public function abouUsAction()
    {
      return $this->render('site/about_us.html.twig');
    }
}
