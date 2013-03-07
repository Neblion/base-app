<?php

namespace Neblion\BaseAppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
        ;
    }

    public function getName()
    {
        return 'neblion_baseappbundle_profiletype';
    }
}
