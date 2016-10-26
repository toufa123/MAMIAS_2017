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
class OriginAdmin extends Admin{
    
    //protected $baseRouteName = 'your_name'; 
    //protected $baseRoutePattern = 'your_name';
    
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
                
                ->add('originCode')
            ->add('originRegion')
            
            
        ;
    }
    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
             ->add('originCode')
            ->add('originRegion')
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
               ->add('originCode')
            ->add('originRegion')
            
        ;
    }
    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('originCode')
            ->add('originRegion')
        ;
    }
}
