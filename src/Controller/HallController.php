<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HallController extends AbstractController
{
    /**
     * @Route("/hall", name="hall")
     */
    public function index()
    {
        return $this->render('hall/index.html.twig', [
            'controller_name' => 'HallController',
        ]);
    }
}
