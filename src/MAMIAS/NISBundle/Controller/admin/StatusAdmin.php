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
class StatusAdmin extends AbstractAdmin{
    
    //protected $baseRouteName = 'your_name'; 
    //protected $baseRoutePattern = 'your_name';
    
    protected $datagridValues = array(

        // display the first page (default = 1)
        '_page' => 1,

        // reverse order (default = 'ASC')
        '_sort_order' => 'ASC',

        // name of the ordered field (default = the model's id field, if any)
        //'_sort_by' => 'authorCode',
    );
    
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
           ->add('statusName')
            
        ;
    }
    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                ->add('statusName')
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
               ->add('statusName')
            //->add('itisTaxonAuthorId')
            //->add('wormsTaxonAuthorId')
            //->add('doi')
            
        ;
    }
    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                ->add('statusName')
        ;
    }
}
