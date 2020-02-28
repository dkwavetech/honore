<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function home()
    {
        return $this->redirectToRoute('app_site_index');
    }

    /**
      * @Route("/in-loving-memory")
      */
    public function index()
    {
        return $this->render('site/index.html.twig', [
        ]);
    }

    /**
     * @Route("/in-loving-memory/programme")
     */
    public function programme()
    {
        return $this->render('site/programme.html.twig', [
        ]);
    }
}
