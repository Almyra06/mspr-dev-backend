<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{

    public function index(): Response
    {
        $programmes=$this->getprogramme();

        /*$group=$this->getGroup();
        foreach ($programmes as $programme) {
            $programme['groupe']= $group[];
        }*/
        
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'programmes'=>$programmes,
        ]);
    }
    private function getprogramme(){
        $programme=[[
            'id'=>1,
            'date_debut'=>'12/02/2021',
            'horraire_debut'=>'13h45',
            'horraire_fin'=>'15h15',
            'duree' => '1h30',
            'emplacement'=>'scene principale',
            'group_id'=>[
                    'nom'=>'Jull'
                ]
            ],
            [
            'id'=>2,
            'date_debut'=>'12/02/2021',
            'horraire_debut'=>'13h45',
            'horraire_fin'=>'15h45',
            'duree' => '2h',
            'emplacement'=>'scene secondaire',
            'group_id'=>[
                'nom'=>'wenjdege'
            ]
            ],
            [
            'id'=>3,
            'date_debut'=>'12/02/2021',
            'horraire_debut'=>'15h15',
            'horraire_fin'=>'16h15',
            'duree' => '1h',
            'emplacement'=>'scene principale',
            'group_id'=>[
                'nom'=>'Yanakamoura'
            ]
            ]
        ];
        return $programme;
    }
    private function getGroup($id){
        $groups=array([[
            'id'=>1,
            'nom'=>'soprano'
        ],
        [
            'id'=>2,
            'nom'=>'Jull'
        ],
        [
            'id'=>3,
            'nom'=>'wenjdege'
        ],
        [
            'id'=>4,
            'nom'=>'Yanakamoura'
        ]]);
        return $groups;
    }
}
