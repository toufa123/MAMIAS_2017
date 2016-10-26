<?php

namespace MAMIAS\NISBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;

class StatisticType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {  
       $builder
                
               ->add('ecofunctional', 'entity', array(
                    'class' => 'MAMIASNISBundle:AlienEcofunctional',
                    'empty_value' => ' ',
                    'property' => 'ecofunctional', 'query_builder'
                    => function(EntityRepository $er) {
                        return $er->createQueryBuilder('u');
                    }, 'required' => false,
                ))        
                            
                ->add('originRegion', 'entity', array(
                    'class' => 'MAMIASNISBundle:AlienOrigin',
                    'empty_value' => ' ',
                    'property' => 'originRegion', 'query_builder'
                    => function(EntityRepository $er) {
                        return $er->createQueryBuilder('u');
                    }, 'required' => false,
                ))            
               
               ->add('successType', 'entity', array(
                    'class' => 'MAMIASNISBundle:AlienSuccessType',
                    'empty_value' => ' ',
                    'property' => 'successType', 'query_builder'
                    => function(EntityRepository $er) {
                        return $er->createQueryBuilder('u');
                    }, 'required' => false,
                ))
               
               ->add('invasive', 'choice', array(
                    'choices' => array('0' => ' ', '2' => 'False', '1' => 'True'),
                ))
               
               
                ->add('country', 'entity', array(
                    'class' => 'MAMIASNISBundle:AlienCountry',
                    'empty_value' => ' ',
                    'property' => 'country', 'query_builder'
                    => function(EntityRepository $er) {
                        return $er->createQueryBuilder('u');
                    }, 'required' => false,
                ))
                            
                ->add('regionalSea', 'entity', array(
                    'class' => 'MAMIASNISBundle:AlienRegionalSea',
                    'empty_value' => ' ',
                    'property' => 'regionalSea', 'query_builder'
                    => function(EntityRepository $er) {
                        return $er->createQueryBuilder('u');
                    }, 'required' => false,
                ))
                            
               ->add('msfd', 'entity', array(
                    'class' => 'MAMIASNISBundle:AlienMsfd',
                    'empty_value' => ' ',
                    'property' => 'msfd', 'query_builder'
                    => function(EntityRepository $er) {
                        return $er->createQueryBuilder('u');
                    }, 'required' => false,
                ))
                            
              
        ; 
      
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAMIAS\NISBundle\Entity\Statistics'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mamias_statistiquebundle_aliencountry';
    }
}
