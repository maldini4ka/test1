<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FilmController extends AbstractController
{
    /**
     * @Route("/film", name="film")
     */
    public function index()
    {

        $films = [
            'film_1' => [
                'title' => 'Бригада',
                'body' => 'сериал'
            ],
            'film_2' => [
                'title' => 'Ну погоди!',
                'body' => 'Мультсериал'
            ]
        ];
        return $this->render('film/index.html.twig', [
            'films' => $films,
        ]);




//        return $this->render('film/index.html.twig', [
//            'controller_name' => 'FilmController',
//        ]);
    }
}
