<?php

namespace ItiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('country')
            ->add('city')
            ->add('language');
    }

    public function getParent()
    {
        return 'fos_user_registration';

    }
    public function getBlockPrefix()
    {
        return 'iti_user_registration';
    }
    public function getCountry()
    {
        return $this->getBlockPrefix();
    }

    public function getCity()
    {
        return $this->getBlockPrefix();
    }

    public function getLanguage()
    {
        return $this->getBlockPrefix();
    }
}