<?php
namespace MAMIAS\NISBundle\Controller\admin;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\Bundle\DemoBundle\Entity\Inspection;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AuthorAdmin
 *
 * @author MKH
 */
class DistributionAdmin extends AbstractAdmin{
    
    //protected $baseRouteName = 'your_name'; 
    //protected $baseRoutePattern = 'your_name';
    
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('distributionCode')
            ->add('species')
            ->add('country')
            ->add('regionalSea')
            ->add('firstAreaSighting')
            ->add('areaSuccess')
            //->add('areaNotes')
            ->add('firstAreaCitation')
            ->add('msfd')
            //->add('longAsc')
            //->add('latAsc')
            ->add('longitude')
            ->add('latitude')
            ->add('contrebution')
            //->add('chart')
            //->add('modificationDate')
            //->add('success')
                      
            
           
           
        ;
    }
    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('distributionCode')
            ->add('species')
            ->add('country')
            ->add('regionalSea')
            ->add('firstAreaSighting')
            ->add('areaSuccess')
            //->add('areaNotes')
            ->add('firstAreaCitation')
            ->add('msfd')
            //->add('longAsc')
            //->add('latAsc')
            ->add('longitude')
            ->add('latitude')
            ->add('contrebution')
            //->add('chart')
            ->add('modificationDate')
            //->add('success')
                ->add('_action', null, array(
            'actions' => array(
                'show' => array(),
                'edit' => array(),
                'delete' => array(),
            )
        ))
        ;
    }
    /**
     * {@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                 //->add('distributionCode')
            ->add('species')
            ->add('country')
            ->add('regionalSea')
            ->add('firstAreaSighting')
            ->add('areaSuccess')
            //->add('areaNotes')
            //->add('firstAreaCitation')
            ->add('msfd')
            //->add('longAsc')
            //->add('latAsc')
            ->add('longitude')
            ->add('latitude')
            ->add('contrebution')
            //->add('chart')
            ->add('modificationDate')
            //->add('success')
            //->add('vector')
            
            
        ;
    }
    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                //->add('distributionCode')
            //->add('species')
            ->add('country')
            ->add('regionalSea')
            ->add('firstAreaSighting')
            ->add('areaSuccess')
            //->add('areaNotes')
            ->add('firstAreaCitation')
            ->add('msfd')
            //->add('longAsc')
            //->add('latAsc')
            ->add('longitude')
            ->add('latitude')
            ->add('contrebution')
            //->add('chart')
            ->add('modificationDate')
            //->add('success')
            //->add('vector')
        ;
    }
    
    

}
