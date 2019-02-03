<?php

namespace AppBundle\Controller;

use AppBundle\Entity\access;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\symfony\src\Symfony\Component\Routing;
use Symfony\Component\HttpFoundation\Response;

/**
 * Access controller.
 * @Route("/access")
 */
class accessController extends Controller
{
    /**
     * Lists all access entities.
     * @Route("/", name="access")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $accesses = $em->getRepository('AppBundle:access')->findAll();

        return $this->render('access/index.html.twig', array(
            'accesses' => $accesses,
        ));
    }

    /**
     * Creates a new access entity.
     *
     */
    public function newAction(Request $request)
    {
        $access = new Access();
        $form = $this->createForm('AppBundle\Form\accessType', $access);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($access);
            $em->flush();

            return $this->redirectToRoute('access_show', array('id' => $access->getId()));
        }

        return $this->render('access/new.html.twig', array(
            'access' => $access,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a access entity.
     *
     */
    public function showAction(access $access)
    {
        $deleteForm = $this->createDeleteForm($access);

        return $this->render('access/show.html.twig', array(
            'access' => $access,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing access entity.
     *
     */
    public function editAction(Request $request, access $access)
    {
        $deleteForm = $this->createDeleteForm($access);
        $editForm = $this->createForm('AppBundle\Form\accessType', $access);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('access_edit', array('id' => $access->getId()));
        }

        return $this->render('access/edit.html.twig', array(
            'access' => $access,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a access entity.
     *
     */
    public function deleteAction(Request $request, access $access)
    {
        $form = $this->createDeleteForm($access);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($access);
            $em->flush();
        }

        return $this->redirectToRoute('access_index');
    }

    /**
     * Creates a form to delete a access entity.
     *
     * @param access $access The access entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(access $access)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('access_delete', array('id' => $access->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
