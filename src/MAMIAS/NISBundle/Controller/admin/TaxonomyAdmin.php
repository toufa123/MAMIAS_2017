<?php
namespace MAMIAS\NISBundle\Controller\admin;
use Sonata\AdminBundle\Admin\Admin;
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
class TaxonomyAdmin extends Admin{
    
    //protected $baseRouteName = 'your_name'; 
    //protected $baseRoutePattern = 'your_name';
    
    protected function configureRoutes(\Sonata\AdminBundle\Route\RouteCollection $collection)
{
     
    {
        $collection->add('verify', $this->getRouterIdParameter().'/verify');
    }
}
    
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('species',null,array('label' => 'Species Name'))
            ->add('kingdomL1',null,array('label'=>'Kingdom'))
            ->add('phylumL2',null,array('label'=>'phylum'))
            ->add('classL3',null,array('label'=>'Class'))
            ->add('orderL4',null,array('label'=>'Order'))
            ->add('familyL5',null,array('label'=>'Family'))
            
            //->add('refTax',null,array('label'=>'Taxonomic refernce'))
            
        ;
    }
    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('species',null,array('label' => 'Species Name'))
            ->add('kingdomL1',null,array('label'=>'Kingdom'))
            ->add('phylumL2',null,array('label'=>'phylum'))
            ->add('classL3',null,array('label'=>'Class'))
            ->add('orderL4',null,array('label'=>'Order'))
            ->add('familyL5',null,array('label'=>'Family'))
            
            //->add('refTax',null,array('label'=>'Taxonomic refernce'))
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
             ->add('species',null,array('label' => 'Species Name'))
            ->add('kingdomL1',null,array('label'=>'Kingdom'))
            ->add('phylumL2',null,array('label'=>'phylum'))
            ->add('classL3',null,array('label'=>'Class'))
            ->add('orderL4',null,array('label'=>'Order'))
            ->add('familyL5',null,array('label'=>'Family'))
            
           //->add('refTax',null,array('label'=>'Taxonomic refernce'))
        ;
    }
    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('species',null,array('label' => 'Species Name'))
            ->add('kingdomL1',null,array('label'=>'Kingdom'))
            ->add('phylumL2',null,array('label'=>'phylum'))
            ->add('classL3',null,array('label'=>'Class'))
            ->add('orderL4',null,array('label'=>'Order'))
            ->add('familyL5',null,array('label'=>'Family'))
            
            //->add('refTax',null,array('label'=>'Taxonomic refernce'))
        ;
    }
    
    
}
