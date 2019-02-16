<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Course;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\CourseType;

class MainController extends Controller
{
    public function indexAction(Request $request)
    {
        $profile = $this -> getUser();

        $course = new Course();
        $form = $this ->createForm('AppBundle\Form\CourseType', $course);
        $form -> handleRequest($request);

        return $this->render('Page/main.html.twig',
            array(
                'form' => $form -> createView(),
                'profile' => $profile,
            ));
    }
}