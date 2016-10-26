<?php

namespace MAMIAS\NISBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlienSpeciesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('speciesName')
            ->add('notes')
            ->add('modificationDate', 'date')
            ->add('invasive')
            ->add('urlink')
            ->add('invasiveLink')
            ->add('trigger')
            ->add('med1stSighting')
            ->add('speciesCode')
            ->add('donorArea')
            ->add('ecofunctional')
            ->add('med1stCitation')
            ->add('medSuccess')
            ->add('origin')
            ->add('status')
            ->add('taxonAuthor')
            ->add('taxonomy')
            ->add('Vectors')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NIS\MAMIASBundle\Entity\AlienSpecies'
        ));
    }
}
