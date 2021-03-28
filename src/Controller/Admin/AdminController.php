<?php

namespace App\Controller\Admin;

use App\Entity\Concert;
use App\Entity\Groupe;
use App\Entity\MessageUrgent;
use App\Entity\Programme;
use App\Form\ConcertModifType;
use App\Form\ConcertType;
use App\Form\GroupeModifType;
use App\Form\GroupeType;
use App\Form\MessageModifType;
use App\Form\MessageType;
use App\Form\ProgrammeModifType;
use App\Form\ProgrammeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
* @Route("/admin", name="admin_")
* @package App\Controller\Admin
*/
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {

        $programme = $this->getDoctrine()->getRepository(Programme::class)->findAll();

        $concerts = $this->getDoctrine()->getRepository(Concert::class)->findAll();

        $groupe = $this->getDoctrine()->getRepository(Groupe::class)->findAll();

        $message = $this->getDoctrine()->getRepository(MessageUrgent::class)->findAll();

        return $this->render('admin/index.html.twig', [
            'messages' => $message,
            'programmes' => $programme,
            'concerts' => $concerts,
            'groupes' => $groupe,
        ]);
    }

    /**
     * @Route("/message/ajout", name="message_ajout")
     */
    public function ajoutMessage(Request $Request)
    {
        $message = new MessageUrgent;

        $form = $this->createForm(MessageType::class, $message);

        $form->handleRequest($Request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            return $this->redirectToRoute('admin_home');
        }

        return $this->render('admin/message/ajoutmessage.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    
    /**
     * @Route("/message/modifier/{id}", name="message_modification")
     */

    public function modifierMessage(MessageUrgent $message,Request $Request)
    {

        $form = $this->createForm(MessageModifType::class, $message);

        $form->handleRequest($Request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            return $this->redirectToRoute('admin_home');
        }

        return $this->render('admin/message/modifmessage.html.twig', [
            'form' => $form->createView(),
        ]);
        
    }

    /**
     * @Route("/message/supprimer/{id}", name="message_suppression")
     */
    public function supprimerMessage(MessageUrgent $message)
    {

        $em = $this->getDoctrine()->getManager();

        $em->remove($message);
        $em->flush();

        return new Response('Message supprimé.');
    }

    /**
     * @Route("/programme/ajout", name="programme_ajout")
     */
    public function ajoutProgramme(Request $Request)
    {
        $programme = new Programme;

        $form = $this->createForm(ProgrammeType::class, $programme);

        $form->handleRequest($Request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($programme);
            $em->flush();

            return $this->redirectToRoute('admin_home');
        }

        return $this->render('admin/programme/ajoutprogramme.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/programme/modifier/{id}", name="programme_modification")
     */

    public function modifierProgramme(Programme $programme,Request $Request)
    {

        $form = $this->createForm(ProgrammeModifType::class, $programme);

        $form->handleRequest($Request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($programme);
            $em->flush();

            return $this->redirectToRoute('admin_home');
        }

        return $this->render('admin/programme/modifprogramme.html.twig', [
            'form' => $form->createView(),
        ]);
        
    }

    /**
     * @Route("/programme/supprimer/{id}", name="programme_suppression")
     */
    public function supprimerProgramme(Programme $programme)
    {

        $em = $this->getDoctrine()->getManager();

        $em->remove($programme);
        $em->flush();

        return new Response('Programme supprimé.');
    }

    /**
     * @Route("/concert/ajout", name="concert_ajout")
     */
    public function ajoutConcert(Request $Request)
    {
        $concert = new Concert;

        $form = $this->createForm(ConcertType::class, $concert);

        $form->handleRequest($Request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($concert);
            $em->flush();

            return $this->redirectToRoute('admin_home');
        }

        return $this->render('admin/concert/ajoutconcert.html.twig', [
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/concert/modifier/{id}", name="concert_modification")
     */

    public function modifierConcert(Concert $concert,Request $Request)
    {

        $form = $this->createForm(ConcertModifType::class, $concert);

        $form->handleRequest($Request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($concert);
            $em->flush();

            return $this->redirectToRoute('admin_home');
        }

        return $this->render('admin/concert/modifconcert.html.twig', [
            'form' => $form->createView(),
        ]);
        
    }

    /**
     * @Route("/concert/supprimer/{id}", name="concert_suppression")
     */
    public function supprimerConcert(Concert $concert)
    {

        $em = $this->getDoctrine()->getManager();

        $em->remove($concert);
        $em->flush();

        return new Response('Groupe supprimé.');
    }

    /**
     * @Route("/groupe/ajout", name="groupe_ajout")
     */
    public function ajoutGroupe(Request $Request)
    {
        $groupe = new Groupe;

        $form = $this->createForm(GroupeType::class, $groupe);

        $form->handleRequest($Request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($groupe);
            $em->flush();

            return $this->redirectToRoute('admin_home');
        }

        return $this->render('admin/groupe/ajoutgroupe.html.twig', [
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/groupe/modifier/{id}", name="groupe_modification")
     */

    public function modifierGroupe(Groupe $groupe,Request $Request)
    {

        $form = $this->createForm(GroupeModifType::class, $groupe);

        $form->handleRequest($Request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($groupe);
            $em->flush();

            return $this->redirectToRoute('admin_home');
        }

        return $this->render('admin/groupe/modifgroupe.html.twig', [
            'form' => $form->createView(),
        ]);
        
    }

    /**
     * @Route("/groupe/supprimer/{id}", name="groupe_suppression")
     */
    public function supprimerGroupe(Groupe $groupe)
    {

        $em = $this->getDoctrine()->getManager();

        $em->remove($groupe);
        $em->flush();

        return new Response('Groupe supprimé.');
    }
}
