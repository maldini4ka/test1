<?php

namespace App\Controller;

use App\Entity\Film;
use App\Entity\Seans;
use App\Form\FilmType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/film")
 */
class FilmController extends AbstractController
{
    /**
     * @Route("/", name="film_index", methods={"GET"})
     */
    public function index(): Response
{
    $films = $this->getDoctrine()
        ->getRepository(Film::class)
        ->findBy([],['name'=>'ASC']);

    return $this->render('film/index.html.twig', [
        'films' => $films,
    ]);
}

    /**
     * @Route("/new", name="film_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $film = new Film();
        $form = $this->createForm(FilmType::class, $film);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($film);
            $entityManager->flush();

            return $this->redirectToRoute('film_index');
        }

        return $this->render('film/new.html.twig', [
            'film' => $film,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="film_show", methods={"GET"})
     */
    public function show(Film $film): Response
    {
        $results=[];
        $films = $this->getDoctrine()
            ->getRepository(Film::class)
            ->findBy([],['id'=>'DESC']);

        $seanses =$this->getDoctrine()
            ->getRepository(Seans::class)
            ->findBy(['filmid' => $film]);


        return $this->render('film/show.html.twig', [
            'film' => $film,
            'films' => $films,
            'seanses' => $seanses
        ]);
    }

    /**
     * @Route("/{id}/edit", name="film_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Film $film): Response
    {
        $form = $this->createForm(FilmType::class, $film);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('film_index');
        }

        return $this->render('film/edit.html.twig', [
            'film' => $film,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="film_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Film $film): Response
    {
        if ($this->isCsrfTokenValid('delete'.$film->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($film);
            $entityManager->flush();
        }

        return $this->redirectToRoute('film_index');
    }


    /**
     * @Route("/category/{category}", name="film_category", methods={"GET"})
     */
    public function showcategory(Request $request)
    {
        $query = $request->get('category');
        $results = [];
        $i = 0;

        $films = $this->getDoctrine()
            ->getRepository(Film::class)
            ->findBy([], ['name'=>'ASC']);

        foreach ($films as $film){
            if ($film->getCategory() == $query ){
                $results[$i] = $film;
                $i++;
            }
        }






        return $this->render('film/showcategory.html.twig', [
            'films' => $films,
            'query' => $query,
            'results' => $results
        ]);

    }
}
