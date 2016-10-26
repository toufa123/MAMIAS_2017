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
class LiteratureAdmin extends Admin{
    
    //protected $baseRouteName = 'your_name'; 
    //protected $baseRoutePattern = 'your_name';
    
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
                ->add('literatureCode')
                ->add('literature')
                        ->add('regionalsea')
            ->add('country')
            ->add('msfd')
            ->add('species')
            
        ;
    }
    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
             //->add('literatureCode')
                ->add('species')
                ->add('literatureCode')
                ->add('literature')
                        ->add('regionalsea')
            ->add('country')
            ->add('msfd')
            
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
             //->add('literatureCode')
                //->add('literature')
                ->add('literatureCode')
                ->add('species')
                ->add('country')
                ->add('regionalsea')
                ->add('msfd')
            
        ;
    }
    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                ->add('literatureCode')
                ->add('species')
                ->add('regionalsea')
                ->add('country')
                ->add('msfd')
                ->add('literature')
            
            
        ;
    }
}
