<?php

namespace App\Controller;

use App\Entity\Kinoteatr;
use App\Form\KinoteatrType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/kinoteatr")
 */
class KinoteatrController extends AbstractController
{
    /**
     * @Route("/", name="kinoteatr_index", methods={"GET"})
     */
    public function index(): Response
    {
        $kinoteatrs = $this->getDoctrine()
            ->getRepository(Kinoteatr::class)
            ->findAll();

        return $this->render('kinoteatr/index.html.twig', [
            'kinoteatrs' => $kinoteatrs,
        ]);
    }

    /**
     * @Route("/new", name="kinoteatr_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $kinoteatr = new Kinoteatr();
        $form = $this->createForm(KinoteatrType::class, $kinoteatr);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($kinoteatr);
            $entityManager->flush();

            return $this->redirectToRoute('kinoteatr_index');
        }

        return $this->render('kinoteatr/new.html.twig', [
            'kinoteatr' => $kinoteatr,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="kinoteatr_show", methods={"GET"})
     */
    public function show(Kinoteatr $kinoteatr): Response
    {
        return $this->render('kinoteatr/show.html.twig', [
            'kinoteatr' => $kinoteatr,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="kinoteatr_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Kinoteatr $kinoteatr): Response
    {
        $form = $this->createForm(KinoteatrType::class, $kinoteatr);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('kinoteatr_index');
        }

        return $this->render('kinoteatr/edit.html.twig', [
            'kinoteatr' => $kinoteatr,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="kinoteatr_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Kinoteatr $kinoteatr): Response
    {
        if ($this->isCsrfTokenValid('delete'.$kinoteatr->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($kinoteatr);
            $entityManager->flush();
        }

        return $this->redirectToRoute('kinoteatr_index');
    }
}
