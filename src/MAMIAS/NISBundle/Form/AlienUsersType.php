<?php

namespace MAMIAS\NISBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlienUsersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userFirstName')
            ->add('userLastName')
            ->add('userEmail')
            ->add('password')
            ->add('userAdresse')
            ->add('userTelephone')
            ->add('userSkype')
            ->add('userFax')
            ->add('userCountry')
            ->add('userInstitution')
            ->add('expertConfiance')
            ->add('salt')
            ->add('userExpert')
            ->add('userAdmin')
            ->add('role')
            ->add('username')
            ->add('ref')
            ->add('profil')
            ->add('country')
            ->add('msfd')
            ->add('regionalSea')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAMIAS\NISBundle\Entity\AlienUsers'
        ));
    }
}
