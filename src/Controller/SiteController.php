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
    public function index()
    {
        return $this->render('site/index.html.twig', [
        ]);
    }

    /**
     * @Route("/programme")
     */
    public function programme()
    {
        return $this->render('site/programme.html.twig', [
        ]);
    }

    /**
     * @Route("/album")
     */
    public function album()
    {
        return $this->render('site/album.html.twig', [
        ]);
    }
}
