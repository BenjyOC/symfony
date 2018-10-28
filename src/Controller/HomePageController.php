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
     * @Route("/random/{slug}", name="random")
     */
    public function random($slug)
    {
       return new Response(sprintf(
            'Random page to show : "%s"',
            $slug
        ));
    }
}
