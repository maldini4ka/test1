<?php

namespace App\Controller;

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
    public function index(Request $request)
    {

//        $pages = [
//            [
//            'title' => 'Заголовок 1',
//            'content' => 'Контент 1'
//            ],
//            [
//                'title' => 'Заголовок 2',
//                'content' => 'Контент 2'
//            ],
//            [
//                'title' => 'Заголовок 3',
//                'content' => 'Контент 3'
//            ],
//            [
//                'title' => 'Заголовок 4',
//                'content' => 'Контент 4'
//            ]
//        ];
//
//
//
        $form = $this->createForm(TestFormType::class);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            dump($data['title']);
        }






        return $this->render('main/index.html.twig', ['form' => $form->createView()]);

    }
}
