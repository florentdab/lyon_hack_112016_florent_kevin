<?php

namespace ItiBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use FOS\UserBundle\FOSUserBundle;

class ItiController extends Controller
{
    public function indexAction()
    {
        return $this->render('ItiBundle:ItiView:index.html.twig');
    }

    public function userCreateAction(Request $request)
    {

    }
}