<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReseauxController extends AbstractController
{
    /**
     * @Route("/reseaux", name="reseaux")
     */
    public function index(): Response
    {
        return $this->render('reseaux/index.html.twig', [
            'controller_name' => 'ReseauxController',
        ]);
    }
}
