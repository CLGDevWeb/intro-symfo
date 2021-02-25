<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home() 
    {
        return $this->render('home.html.twig', [
            'title' => 'Introduction à Symfony',
            'age' => 19,
        ]);
    }
    
    /**
     * @Route("/post", name="post")
     */
    public function index(): Response
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }

    /**
     * @Route("/post/show", name="post.show")
     */
    public function show(): Response
    {
        return $this->render('post/show.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }
}
