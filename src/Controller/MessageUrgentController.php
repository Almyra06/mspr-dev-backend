<?php

namespace App\Controller;

use App\Entity\MessageUrgent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessageUrgentController extends AbstractController
{
    
    /**
     * @Route("/message/{id}", name="message_urgent")
     */
    public function index($id)
    {
        $message = $this->getDoctrine()->getRepository(MessageUrgent::class)->find($id);
        
        return $this->render('message_urgent/index.html.twig', [
            'message' => $message,
        ]);
    }
}