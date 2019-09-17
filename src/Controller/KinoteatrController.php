<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class KinoteatrController extends AbstractController
{
    /**
     * @Route("/kinoteatr", name="kinoteatr")
     */
    public function index()
    {
        return $this->render('kinoteatr/index.html.twig', [
            'controller_name' => 'KinoteatrController',
        ]);
    }
}
