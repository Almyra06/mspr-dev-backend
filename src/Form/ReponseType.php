<?php

namespace App\Form;

use App\Entity\Questions;
use App\Entity\Reponses;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReponseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('question', EntityType::class,[
                    
                'class' => Reponses::class,
                'choice_label' => 'question.question',//LE PROBLEME
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'widget' => 'text',
                    
                ],
                'required' => false
            ])
            ->add('reponse', TextType::class)
            ->add('Repondre', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reponses::class,
        ]);
    }
}
