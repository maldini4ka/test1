<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SeansController extends AbstractController
{
    /**
     * @Route("/seans", name="seans")
     */
    public function index()
    {
        return $this->render('seans/index.html.twig', [
            'controller_name' => 'SeansController',
        ]);
    }
}
