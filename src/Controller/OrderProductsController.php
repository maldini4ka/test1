<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrderProductsController extends AbstractController
{
    /**
     * @Route("/order/products", name="order_products")
     */
    public function index()
    {
        return $this->render('order_products/index.html.twig', [
            'controller_name' => 'OrderProductsController',
        ]);
    }
}
