<?php

namespace App\Controller;

use App\Entity\OrderProducts;
use App\Form\OrderProductsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/order/products")
 */
class OrderProductsController extends AbstractController
{
    /**
     * @Route("/", name="order_products_index", methods={"GET"})
     */
    public function index(): Response
    {
        $orderProducts = $this->getDoctrine()
            ->getRepository(OrderProducts::class)
            ->findAll();

        return $this->render('order_products/index.html.twig', [
            'order_products' => $orderProducts,
        ]);
    }

    /**
     * @Route("/new", name="order_products_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $orderProduct = new OrderProducts();
        $form = $this->createForm(OrderProductsType::class, $orderProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($orderProduct);
            $entityManager->flush();

            return $this->redirectToRoute('order_products_index');
        }

        return $this->render('order_products/new.html.twig', [
            'order_product' => $orderProduct,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="order_products_show", methods={"GET"})
     */
    public function show(OrderProducts $orderProduct): Response
    {
        return $this->render('order_products/show.html.twig', [
            'order_product' => $orderProduct,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="order_products_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, OrderProducts $orderProduct): Response
    {
        $form = $this->createForm(OrderProductsType::class, $orderProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('order_products_index');
        }

        return $this->render('order_products/edit.html.twig', [
            'order_product' => $orderProduct,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="order_products_delete", methods={"DELETE"})
     */
    public function delete(Request $request, OrderProducts $orderProduct): Response
    {
        if ($this->isCsrfTokenValid('delete'.$orderProduct->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($orderProduct);
            $entityManager->flush();
        }

        return $this->redirectToRoute('order_products_index');
    }
}
