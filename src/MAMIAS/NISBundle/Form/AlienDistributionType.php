<?php

namespace MAMIAS\NISBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlienDistributionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstAreaSighting')
            ->add('areaNotes')
            ->add('firstAreaCitation')
            ->add('longitude')
            ->add('latitude')
            ->add('successId')
            ->add('distributionCode')
            ->add('modificationDate')
            ->add('country')
            ->add('msfd')
            ->add('regionalSea')
            ->add('species')
            ->add('vector')
            ->add('areaSuccess')
            ->add('contrebution')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NIS\MAMIASBundle\Entity\AlienDistribution'
        ));
    }
}
