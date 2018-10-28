<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomePageController extends AbstractController
{

    /**
     * @Route("/", name="home_page")
     */
    public function index()
    {
	return new Response('This is the HomePage !!!!');
    }

    /**
     * @Route("/home", name="home")
     */
    public function home()
    {
        $title = "bracloud";
        $comments = [
            'Devops is DevOps',
            'Youhou !',
            'BravOps !',
        ];

        return $this->render('home.html.twig', [
            'title' => $title,
            'comments' => $comments
        ]);
    }

    /**
     * @Route("/debug/{slug}", name="debug")
     */
    public function debug($slug)
    {
        $title = "bracloud";
        $comments = [
            'Devops is DevOps',
            'Youhou !',
            'BravOps !',
        ];

	dump($slug, $this);

        return $this->render('home.html.twig', [
            'title' => $slug,
            'comments' => $comments
        ]);
    }
}
