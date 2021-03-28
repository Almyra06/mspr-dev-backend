<?php

namespace App\Form;

use App\Entity\Programme;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchConcertType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder
            ->add('programme', EntityType::class,[
                
                'class' => Programme::class,
                'choice_label' => 'name',//LE PROBLEME
                'placeholder' => '-- TOUS LES CONCERTS --',
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'widget' => 'text',
                    
                ],
                'required' => false
            ])

            ->add('Valider', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary',
                ]
            ])
        ;

                    

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
