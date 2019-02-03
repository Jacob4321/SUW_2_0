<?php

namespace AppBundle\Controller;

use AppBundle\Entity\File_download;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\symfony\src\Symfony\Component\Routing;
use Symfony\Component\HttpFoundation\Response;

/**
 * File_download controller.
 * @Route("/filedownload")
 */
class File_downloadController extends Controller
{
    /**
     * Lists all file_download entities.
     * @Route("/", name="file_dwonload")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $file_downloads = $em->getRepository('AppBundle:File_download')->findAll();

        return $this->render('file_download/index.html.twig', array(
            'file_downloads' => $file_downloads,
        ));
    }

    /**
     * Creates a new file_download entity.
     *
     */
    public function newAction(Request $request)
    {
        $file_download = new File_download();
        $form = $this->createForm('AppBundle\Form\File_downloadType', $file_download);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($file_download);
            $em->flush();

            return $this->redirectToRoute('file_download_show', array('id' => $file_download->getId()));
        }

        return $this->render('file_download/new.html.twig', array(
            'file_download' => $file_download,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a file_download entity.
     *
     */
    public function showAction(File_download $file_download)
    {
        $deleteForm = $this->createDeleteForm($file_download);

        return $this->render('file_download/show.html.twig', array(
            'file_download' => $file_download,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing file_download entity.
     *
     */
    public function editAction(Request $request, File_download $file_download)
    {
        $deleteForm = $this->createDeleteForm($file_download);
        $editForm = $this->createForm('AppBundle\Form\File_downloadType', $file_download);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('file_download_edit', array('id' => $file_download->getId()));
        }

        return $this->render('file_download/edit.html.twig', array(
            'file_download' => $file_download,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a file_download entity.
     *
     */
    public function deleteAction(Request $request, File_download $file_download)
    {
        $form = $this->createDeleteForm($file_download);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($file_download);
            $em->flush();
        }

        return $this->redirectToRoute('file_download_index');
    }

    /**
     * Creates a form to delete a file_download entity.
     *
     * @param File_download $file_download The file_download entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(File_download $file_download)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('file_download_delete', array('id' => $file_download->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
