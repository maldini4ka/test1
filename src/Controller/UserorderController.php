<?php

namespace App\Controller;

use App\Entity\Userorder;
use App\Form\UserorderType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/userorder")
 */
class UserorderController extends AbstractController
{
    /**
     * @Route("/", name="userorder_index", methods={"GET"})
     */
    public function index(): Response
    {
        $userorders = $this->getDoctrine()
            ->getRepository(Userorder::class)
            ->findAll();

        return $this->render('userorder/index.html.twig', [
            'userorders' => $userorders,
        ]);
    }

    /**
     * @Route("/new", name="userorder_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $userorder = new Userorder();
        $form = $this->createForm(UserorderType::class, $userorder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($userorder);
            $entityManager->flush();

            return $this->redirectToRoute('userorder_index');
        }

        return $this->render('userorder/new.html.twig', [
            'userorder' => $userorder,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="userorder_show", methods={"GET"})
     */
    public function show(Userorder $userorder): Response
    {
        return $this->render('userorder/show.html.twig', [
            'userorder' => $userorder,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="userorder_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Userorder $userorder): Response
    {
        $form = $this->createForm(UserorderType::class, $userorder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('userorder_index');
        }

        return $this->render('userorder/edit.html.twig', [
            'userorder' => $userorder,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="userorder_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Userorder $userorder): Response
    {
        if ($this->isCsrfTokenValid('delete'.$userorder->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($userorder);
            $entityManager->flush();
        }

        return $this->redirectToRoute('userorder_index');
    }
}
