<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\FOSUserBundle\Resources\config\routing;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    /**
     * @Route("/loginn")
     */
    public function numberAction()
    {
        $zmienna = 0;

        return $this->render('Page/login.html.twig', array(
            'loginn' => $zmienna,
        ));
    }
}