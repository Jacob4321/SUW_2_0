<?php

namespace AppBundle\Controller;

use FOS\UserBundle\FOSUserBundle;
use FOS\UserBundle\FOSUserBundle\Resources\config\routing;
use FOS\UserBundle\FOSUserBundle\Resources\config\routing\registration as Registry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller
{
    /**
     * @Route("/registerr")
     */
    public function indexAction()
    {
        return $this->render('Page/register.html.twig');
    }
}