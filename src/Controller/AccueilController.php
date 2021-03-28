<?php

namespace App\Controller;

use App\Entity\Concert;
use App\Entity\MessageUrgent;
use App\Form\SearchConcertType;
use App\Form\SearchProgrammeType;
use App\Repository\ConcertRepository;
use App\Repository\GroupeRepository;
use App\Repository\MessageRepository;
use App\Repository\ProgrammeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */

    public function index(ConcertRepository $concertRepo, Request $request)
    {
        $form = $this->createForm(SearchConcertType::class);

        $search = $form->handleRequest($request);

        //$programmes=$this->getprogramme();
        $concerts = $this->getDoctrine()->getRepository(Concert::class)->findAll();

        $message = $this->getDoctrine()->getRepository(MessageUrgent::class)->findAll();

        if($form->isSubmitted() && $form->isValid()){
            //Recherche des annonces correpondant à l'id
            $concert = $concertRepo->search(
                $search->get('programme')->getData()
            );
        }else{
            $concert = "";
        }
        
        return $this->render('accueil/index.html.twig', [
            'concertsfiltre' => $concert,
            'concerts' => $concerts,
            'messages' => $message,
            'formFiltre' => $form->createView(),
        ]);
    }

}
