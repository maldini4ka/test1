<?php

namespace App\Controller;

use App\Entity\Seans;
use App\Form\SeansType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/seans")
 */
class SeansController extends AbstractController
{
    /**
     * @Route("/", name="seans_index", methods={"GET"})
     */
    public function index(): Response
    {
        $seans = $this->getDoctrine()
            ->getRepository(Seans::class)
            ->findAll();

        return $this->render('seans/index.html.twig', [
            'seans' => $seans,
        ]);
    }

    /**
     * @Route("/new", name="seans_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $sean = new Seans();
        $form = $this->createForm(SeansType::class, $sean);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($sean);
            $entityManager->flush();

            return $this->redirectToRoute('seans_index');
        }

        return $this->render('seans/new.html.twig', [
            'sean' => $sean,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="seans_show", methods={"GET"})
     */
    public function show(Seans $sean): Response
    {
        return $this->render('seans/show.html.twig', [
            'sean' => $sean,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="seans_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Seans $sean): Response
    {
        $form = $this->createForm(SeansType::class, $sean);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('seans_index');
        }

        return $this->render('seans/edit.html.twig', [
            'sean' => $sean,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="seans_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Seans $sean): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sean->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($sean);
            $entityManager->flush();
        }

        return $this->redirectToRoute('seans_index');
    }
}
