<?php

namespace App\Controller;

use App\Entity\Message;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    private $manager;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }

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

    /**
     * @Route("/messages")
     */
    public function messages()
    {
        $messages = $this->manager->getRepository(Message::class)->findAll();

        return $this->render('site/messages.html.twig', [
            'messages' => $messages
        ]);
    }

    /**
    * @Route("/messages/post",  methods={"POST", "GET"})
    */
    public function createMessage(Request $request)
    {
        // retrieves GET and POST variables respectively
        $name = $request->request->get('name');
        $messageText = $request->request->get('message');

        if ($name && $messageText) {
            $message = new Message();
            $message->setName($name);
            $message->setMessage($messageText);

            $this->manager->persist($message);
            $this->manager->flush();
        }

        return $this->redirectToRoute('app_site_messages');
    }
}
