<?php

namespace App\Controller;

use App\Entity\Film;
use App\Form\TestFormType;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index(): Response
    {
        $results=[];
        $films = $this->getDoctrine()
            ->getRepository(Film::class)
            ->findBy([],['id'=>'DESC']);
        for ($i = 0; $i <= 7 ; $i++){

            $results[$i] = $films[$i];
        }

        return $this->render('main/index.html.twig', [
            'results' => $results,
        ]);
    }
}
