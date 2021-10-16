<?php

namespace App\Form;

use App\Entity\Offices;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OfficesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('city')
            ->add('phone')
            ->add('addressline1')
            ->add('addressline2')
            ->add('state')
            ->add('country')
            ->add('postalcode')
            ->add('territory')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offices::class,
        ]);
    }
}
