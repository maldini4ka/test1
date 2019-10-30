<?php

namespace App\Controller;

use App\Entity\Film;
use App\Entity\User;
use App\Form\RegisterUserType;
use App\Form\TestFormType;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

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

        $filmcat = $this->getDoctrine()
            ->getRepository(Film::class)
            ->findBy([],['id'=>'DESC']);
        for ($i = 0; $i <= 7 ; $i++){

            $results[$i] = $films[$i];
        }

        return $this->render('main/index.html.twig', [
            'results' => $results,
            'films' => $films
             ]);
    }

    /**
     * @Route("/register", name="register")
     */

    public function register(Request $request, UserPasswordEncoderInterface $encoder, EntityManagerInterface $em)
    {
        $user = new User();


        $form = $this->createForm(RegisterUserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
           $password = $encoder->encodePassword($user, $user->getPlainpassword());
           $user->setPassword($password);
           $user->setRoles(['ROLE_USER']);

           $em->persist($user);
           $em->flush();
        }

        return $this->render('main/register.html.twig',
        [
            'form'=>$form->createView()

        ]
            );
    }

//    /**
//     * @Route("/login", name="login")
//     */
//
//    public function login()
//    {
//
//        return $this->render('main/login.html.twig');
//    }
//

}
