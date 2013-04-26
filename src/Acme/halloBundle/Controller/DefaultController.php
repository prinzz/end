<?php

namespace acme\halloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('acmehalloBundle:Default:index.html.twig', array('name' => $name));
    }
}
