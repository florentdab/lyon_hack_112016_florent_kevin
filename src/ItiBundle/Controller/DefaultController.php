<?php

namespace ItiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ItiBundle:Default:index.html.twig');
    }
}
