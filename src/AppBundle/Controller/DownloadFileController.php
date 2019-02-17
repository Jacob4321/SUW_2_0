<?php

namespace AppBundle\Controller;

use AppBundle\Entity\DownloadFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Downloadfile controller.
 *
 * @Route("downloadfile")
 */
class DownloadFileController extends Controller
{
    /**
     * Lists all downloadFile entities.
     *
     * @Route("/", name="downloadfile_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $downloadFiles = $em->getRepository('AppBundle:DownloadFile')->findAll();

        return $this->render('downloadfile/index.html.twig', array(
            'downloadFiles' => $downloadFiles,
        ));
    }

    /**
     * Creates a new downloadFile entity.
     *
     * @Route("/new", name="downloadfile_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $downloadFile = new Downloadfile();
        $form = $this->createForm('AppBundle\Form\DownloadFileType', $downloadFile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($downloadFile);
            $em->flush();

            return $this->redirectToRoute('downloadfile_show', array('id' => $downloadFile->getId()));
        }

        return $this->render('downloadfile/new.html.twig', array(
            'downloadFile' => $downloadFile,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a downloadFile entity.
     *
     * @Route("/{id}", name="downloadfile_show")
     * @Method("GET")
     */
    public function showAction(DownloadFile $downloadFile)
    {
        $deleteForm = $this->createDeleteForm($downloadFile);

        return $this->render('downloadfile/show.html.twig', array(
            'downloadFile' => $downloadFile,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing downloadFile entity.
     *
     * @Route("/{id}/edit", name="downloadfile_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, DownloadFile $downloadFile)
    {
        $deleteForm = $this->createDeleteForm($downloadFile);
        $editForm = $this->createForm('AppBundle\Form\DownloadFileType', $downloadFile);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('downloadfile_edit', array('id' => $downloadFile->getId()));
        }

        return $this->render('downloadfile/edit.html.twig', array(
            'downloadFile' => $downloadFile,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a downloadFile entity.
     *
     * @Route("/{id}", name="downloadfile_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, DownloadFile $downloadFile)
    {
        $form = $this->createDeleteForm($downloadFile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($downloadFile);
            $em->flush();
        }

        return $this->redirectToRoute('downloadfile_index');
    }

    /**
     * Creates a form to delete a downloadFile entity.
     *
     * @param DownloadFile $downloadFile The downloadFile entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DownloadFile $downloadFile)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('downloadfile_delete', array('id' => $downloadFile->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
