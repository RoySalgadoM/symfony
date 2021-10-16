<?php

namespace App\Form;

use App\Entity\Customers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('customername')
            ->add('contactlastname')
            ->add('contactfirstname')
            ->add('phone')
            ->add('addressline1')
            ->add('addressline2')
            ->add('city')
            ->add('state')
            ->add('postalcode')
            ->add('country')
            ->add('creditlimit')
            ->add('salesrepemployeenumber')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Customers::class,
        ]);
    }
}
