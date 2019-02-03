<?php

namespace AppBundle\Controller;

use AppBundle\Entity\File_addd;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\symfony\src\Symfony\Component\Routing;
use Symfony\Component\HttpFoundation\Response;

/**
 * File_addd controller.
 * @Route("/fileadd")
 */
class File_adddController extends Controller
{
    /**
     * Lists all file_addd entities.
     *  @Route("/", name="file_addd")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $file_addds = $em->getRepository('AppBundle:File_addd')->findAll();

        return $this->render('file_addd/index.html.twig', array(
            'file_addds' => $file_addds,
        ));
    }

    /**
     * Creates a new file_addd entity.
     *
     */
    public function newAction(Request $request)
    {
        $file_addd = new File_addd();
        $form = $this->createForm('AppBundle\Form\File_adddType', $file_addd);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($file_addd);
            $em->flush();

            return $this->redirectToRoute('file_addd_show', array('id' => $file_addd->getId()));
        }

        return $this->render('file_addd/new.html.twig', array(
            'file_addd' => $file_addd,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a file_addd entity.
     *
     */
    public function showAction(File_addd $file_addd)
    {
        $deleteForm = $this->createDeleteForm($file_addd);

        return $this->render('file_addd/show.html.twig', array(
            'file_addd' => $file_addd,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing file_addd entity.
     *
     */
    public function editAction(Request $request, File_addd $file_addd)
    {
        $deleteForm = $this->createDeleteForm($file_addd);
        $editForm = $this->createForm('AppBundle\Form\File_adddType', $file_addd);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('file_addd_edit', array('id' => $file_addd->getId()));
        }

        return $this->render('file_addd/edit.html.twig', array(
            'file_addd' => $file_addd,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a file_addd entity.
     *
     */
    public function deleteAction(Request $request, File_addd $file_addd)
    {
        $form = $this->createDeleteForm($file_addd);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($file_addd);
            $em->flush();
        }

        return $this->redirectToRoute('file_addd_index');
    }

    /**
     * Creates a form to delete a file_addd entity.
     *
     * @param File_addd $file_addd The file_addd entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(File_addd $file_addd)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('file_addd_delete', array('id' => $file_addd->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
