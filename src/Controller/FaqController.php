<?php

namespace App\Controller;

use App\Entity\Questions;
use App\Entity\Reponses;
use App\Form\QuestionType;
use App\Form\ReponseType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class FaqController extends AbstractController
{
    /**
     * @Route("/faq", name="faq")
     */
    public function index(Request $request)
    {
        $reponseList = $this->getDoctrine()->getRepository(Reponses::class)->findAll();
        $questionList = $this->getDoctrine()->getRepository(Questions::class)->findAll();

        $question = new Questions;

        $form = $this->createForm(QuestionType::class, $question);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($question);
            $em->flush();

            return $this->redirectToRoute('faq');
        }
        
        return $this->render('faq/index.html.twig', [
            'questions' => $questionList,
            'reponses' => $reponseList,
            'formQuestions' => $form->createView(),
        ]);
    }

    /**
     * @Route("/faq/repondre/{id}", name="faq_repondre")
     */
    public function faqRepondre(Reponses $questionid, Request $request)
    {
        $question = $this->getDoctrine()->getRepository(Reponses::class)->find($questionid);
        
        $reponse = new Reponses();
        

        $formRep = $this->createForm(ReponseType::class, $reponse);

        $formRep->handleRequest($request);

        if($formRep->isSubmitted() && $formRep->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($reponse);
            $em->flush();

            
        }
        
        return $this->render('faq/repondre.html.twig', [
            'formReponses' => $formRep->createView(),
            'question' => $question,
        ]);
        
    }

    /**
     * @Route("/faq/supprimer/{id}", name="faq_suppression")
     */
    public function supprimerMessage(Reponses $reponse)
    {

        $em = $this->getDoctrine()->getManager();

        $em->remove($reponse);
        $em->flush();

        return new Response('Réponse supprimé.');
    }
}
