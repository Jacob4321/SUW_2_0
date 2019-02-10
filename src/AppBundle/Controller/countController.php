<?php
/**
 * Created by PhpStorm.
 * User: jakub
 * Date: 2019-02-10
 * Time: 14:54
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Files;
use AppBundle\Entity\User;
use AppBundle\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;


class countController extends Controller
{
    /**
     * @Route("/count")
     */

    public function indexAction()
    {
        $users = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->countUsers('user');


        return new JsonResponse(array('users' => $users), 200, array('Access-Control-Allow-Origin'=> '*'));
    }
}