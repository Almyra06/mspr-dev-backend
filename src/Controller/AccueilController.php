<?php

namespace App\Controller;

use App\Repository\ConcertRepository;
use App\Repository\GroupeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{

    public function index(ConcertRepository $concertRepo, GroupeRepository $groupeRepo): Response
    {
        $em = $this->getDoctrine()->getManager();
        //$programmes=$this->getprogramme();
        $concerts = $concertRepo->findall();

        //dd($concerts);
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'concerts' => $concerts,
        ]);
    }
    private function getprogramme()
    {
        $programme = [
            [
                'id' => 1,
                'date_debut' => '12/02/2021',
                'horaire_debut' => '13h45',
                'horaire_fin' => '15h15',
                'duree' => '1h30',
                'emplacement' => 'scene principale',
                'group_id' => [
                    'nom' => 'Jull'
                ]
            ],
            [
                'id' => 2,
                'date_debut' => '12/02/2021',
                'horraire_debut' => '13h45',
                'horraire_fin' => '15h45',
                'duree' => '2h',
                'emplacement' => 'scene secondaire',
                'group_id' => [
                    'nom' => 'wenjdege'
                ]
            ],
            [
                'id' => 3,
                'date_debut' => '12/02/2021',
                'horraire_debut' => '15h15',
                'horraire_fin' => '16h15',
                'duree' => '1h',
                'emplacement' => 'scene principale',
                'group_id' => [
                    'nom' => 'Yanakamoura'
                ]
            ]
        ];
        return $programme;
    }
}
