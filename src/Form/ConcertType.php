<?php

namespace App\Form;

use App\Entity\Concert;
use App\Entity\Groupe;
use App\Entity\Programme;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConcertType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('horaire_debut', TimeType::class)
            ->add('horaire_fin', TimeType::class)
            ->add('duree', TextType::class)
            ->add('emplacement', TextType::class)

            ->add('groupe', EntityType::class,[
                'class' => Groupe::class
            ])

            ->add('programme_id', EntityType::class,[
                'class' => Programme::class
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
            'data_class' => Concert::class,
        ]);
    }
}
