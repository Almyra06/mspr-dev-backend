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
                'placeholder' => '-- TOUS LES PROGRAMMES --',
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'widget' => 'text',
                    
                ],
                'required' => false
            ])

            ->add('Valider', SubmitType::class, [
                'label' => 'Rechercher',
                'attr' => [
                    'class' => 'btn btn-primary btn-lg mt-3 linear-gradient',
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
