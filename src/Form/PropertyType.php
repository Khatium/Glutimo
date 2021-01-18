<?php

namespace App\Form;

use App\Entity\Properties;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('adresse_numero')
            ->add('adresse_libelle')
            ->add('adresse_cp')
            ->add('adresse_ville')
            ->add('adresse_pays')
            ->add('prix')
            ->add('surface')
            ->add('nombre_piece')
            ->add('nombre_parking')
            ->add('description')
            ->add('image_principale')
            ->add('owner_firstname')
            ->add('owner_lastname')
            ->add('owner_phone')
            ->add('owner_email')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Properties::class,
        ]);
    }
}
