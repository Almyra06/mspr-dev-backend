<?php

namespace App\Controller;

use App\Repository\ConcertRepository;
use App\Entity\Concert;
use App\Form\ConcertType;
use App\Repository\GroupeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{

    public function index(ConcertRepository $concertRepo): Response
    {
        $em = $this->getDoctrine()->getManager();
        $concerts = $concertRepo->findall();

        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'concerts' => $concerts,
        ]);
    }
    public function adminIndex(ConcertRepository $concertRepo): Response{
        $em = $this->getDoctrine()->getManager();
        $concerts = $concertRepo->findall();
        //dd($concerts);
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AccueilController',
            'concerts' => $concerts,
        ]);

    }

    public function newConcert(Request $request): Response
    {
        $concert = new Concert();
        $form = $this->createForm(ConcertType::class, $concert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($concert);
            $entityManager->flush();

            return $this->redirectToRoute('live_events_accueil_admin');
        }

        return $this->render('admin/concert/new.html.twig', [
            'concert' => $concert,
            'form' => $form->createView(),
        ]);
    }

    public function editConcert(Request $request, Concert $concert): Response
    {
        $form = $this->createForm(ConcertType::class, $concert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('live_events_accueil_admin');
        }

        return $this->render('admin/concert/edit.html.twig', [
            'concert' => $concert,
            'form' => $form->createView(),
        ]);
    }

    public function delete(Request $request, Concert $concert): Response
    {
        if ($this->isCsrfTokenValid('delete'.$concert->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($concert);
            $entityManager->flush();
        }

        return $this->redirectToRoute('live_events_accueil_admin');
    }

   

    
}
