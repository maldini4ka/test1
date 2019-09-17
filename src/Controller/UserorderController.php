<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserorderController extends AbstractController
{
    /**
     * @Route("/userorder", name="userorder")
     */
    public function index()
    {
        return $this->render('userorder/index.html.twig', [
            'controller_name' => 'UserorderController',
        ]);
    }
}
