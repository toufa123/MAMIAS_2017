<?php

namespace MAMIAS\NISBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlienLiteratureType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('literature')
            ->add('literatureCode')
            ->add('regionalsea')
            ->add('country')
            ->add('msfd')
            ->add('species')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NIS\MAMIASBundle\Entity\AlienLiterature'
        ));
    }
}
