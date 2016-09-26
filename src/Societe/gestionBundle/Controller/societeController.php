<?php

namespace Societe\gestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Societe\gestionBundle\Entity\societe;
use Societe\gestionBundle\Form\societeType;

/**
 * societe controller.
 *
 * @Route("/societe")
 */
class societeController extends Controller
{
    /**
     * Lists all societe entities.
     *
     * @Route("/", name="societe_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $societes = $em->getRepository('gestionBundle:societe')->findAll();

        return $this->render('societe/index.html.twig', array(
            'societes' => $societes,
        ));
    }

    /**
     * Creates a new societe entity.
     *
     * @Route("/new", name="societe_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $societe = new societe();
        $form = $this->createForm('Societe\gestionBundle\Form\societeType', $societe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($societe);
            $em->flush();

            return $this->redirectToRoute('societe_show', array('id' => $societe->getId()));
        }

        return $this->render('societe/new.html.twig', array(
            'societe' => $societe,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a societe entity.
     *
     * @Route("/{id}", name="societe_show")
     * @Method("GET")
     */
    public function showAction(societe $societe)
    {
        $deleteForm = $this->createDeleteForm($societe);

        return $this->render('societe/show.html.twig', array(
            'societe' => $societe,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing societe entity.
     *
     * @Route("/{id}/edit", name="societe_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, societe $societe)
    {
        $deleteForm = $this->createDeleteForm($societe);
        $editForm = $this->createForm('Societe\gestionBundle\Form\societeType', $societe);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($societe);
            $em->flush();

            return $this->redirectToRoute('societe_edit', array('id' => $societe->getId()));
        }

        return $this->render('societe/edit.html.twig', array(
            'societe' => $societe,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a societe entity.
     *
     * @Route("/{id}", name="societe_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, societe $societe)
    {
        $form = $this->createDeleteForm($societe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($societe);
            $em->flush();
        }

        return $this->redirectToRoute('societe_index');
    }

    /**
     * Creates a form to delete a societe entity.
     *
     * @param societe $societe The societe entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(societe $societe)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('societe_delete', array('id' => $societe->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
