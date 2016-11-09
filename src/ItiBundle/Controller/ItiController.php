<?php

namespace ItiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ItiController extends Controller
{
    public function indexAction()
    {
        return $this->render('ItiBundle:ItiView:index.html.twig');
    }
}