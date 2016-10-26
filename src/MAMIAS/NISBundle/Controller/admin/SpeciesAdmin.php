<?php
namespace MAMIAS\NISBundle\Controller\admin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\Bundle\DemoBundle\Entity\Inspection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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
class SpeciesAdmin extends Admin{
    
    //protected $baseRouteName = 'your_name'; 
    //protected $baseRoutePattern = 'your_name';
    
    protected $maxPerPage = 200;
    protected $datagridValues = array(

        // display the first page (default = 1)
        '_page' => 1,

        // reverse order (default = 'ASC')
        '_sort_order' => 'ASC',
        
       

        // name of the ordered field (default = the model's id field, if any)
        '_sort_by' => 'speciesName',
    );
    
    
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
                ->with('Species details',array('class' => 'col-md-6'))
                    ->add('speciesName',null,array('label' => 'Species Name'))
                    ->add('urlink','url', array('hide_protocol' => true))
                    ->add('taxonAuthor', null,array('label' => 'Author'))
                    ->add('ecofunctional',null,array('label' => 'Ecofunctional Group'))
                    ->add('med1stSighting','text',array('label' => 'First Mediterranean Sighting','header_style' => 'width: 5%; text-align: center',
                    'row_align' => 'center')) 
                    ->add('medSuccess',null,array('label' => 'Establishement/Success')) 
                    ->add('origin', null,array('label' => 'Origin'))
                    ->add('med1stCitation',null,array('label' => 'First Mediterranean Ciatation'))
                    ->add('invasive',null,array('label' => 'Invasive'))
                    ->add('status')
                ->end()
                 ->with('Pathway/Vector',array('class' => 'col-md-6'))
                        ->add('Vectors','entity', array('label' => 'Pathway/Vector','class'=> 'MAMIASNISBundle:AlienVectorName',
                        'property' => 'vectorName','template' => 'MAMIASNISBundle:species:vectors.html.twig'))
                ->end()
                
                ->with('Distribution')
                        ->add('distribution', 'entity', array('class'=> 'MAMIASNISBundle:AlienDistribution',
                        'template' => 'MAMIASNISBundle:species:distribution.html.twig'))
                ->end()
               
        ;
    }
    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                //->add('speciesCode')
                ->add('speciesName',null,array('label' => 'Species Name'))
                ->add('taxonAuthor', null,array('label' => 'Author'))
                ->add('ecofunctional',null,array('label' => 'Ecofunctional Group'))
                ->add('med1stSighting','text',array('label' => 'First Mediterranean Sighting','header_style' => 'width: 5%; text-align: center',
                'row_align' => 'center')) 
                ->add('medSuccess',null,array('label' => 'Establishement/Success')) 
                ->add('origin', null,array('label' => 'Origin'))
                ->add('med1stCitation',null,array('label' => 'First Mediterranean Ciatation'))
                ->add('invasive',null,array('label' => 'Invasive'))
                ->add('status')
                //->add('status')
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
                ->add('speciesName', 'shtumi_ajax_autocomplete', array('show_filter' => true,'operator_type' => 'hidden',
            'advanced_filter' => false,'entity_alias'=>'Species',
        'callback' =>
        function ($queryBuilder, $alias, $field, $data) {
            if (!$data['value']) {
            return;
            }
            if ($data['type']== 1){ //1 - no, 0 - yes
                $eq = " != ";
            } else {
               $eq = " = ";
            }

            $queryBuilder
                ->andWhere($alias . '.speciesName' . $eq . ':value1')
                ->setParameter('value1', $data['value']);
        }))
                //->add('speciesName', 'genemu_jqueryautocompleter_entity', array(
       //     'class' => 'MAMIAS\NISBundle\Entity\AlienSpecies','property' => 'speciesName'
        //))
                //->add('speciesName',null,array('label' => 'Species Name'))
                ->add('invasive')
                //->add('trigger')
                ->add('med1stSighting')
                //->add('med1stSighting','doctrine_orm_date_range',array('field_type'=>'sonata_type_date_picker'))
                //->add('med1stSighting', 'doctrine_orm_date_range', [
                //'field_type'=>'sonata_type_date_range_picker'])
                ->add('medSuccess', null, array('show_filter' => true, 'operator_type' => 'hidden',
                    'advanced_filter' => false))
                ->add('donorArea')
                ->add('ecofunctional', null, array('show_filter' => true, 'operator_type' => 'hidden',
                    'advanced_filter' => false))
                ->add('origin', null, array('show_filter' => true, 'operator_type' => 'hidden',
                    'advanced_filter' => false))
                ->add('status')
        ;
    }
    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                ->with('Species details',array('class' => 'col-md-6'))
                        ->add('speciesName',null,array('label' => 'Species Name'))
                        ->add('taxonAuthor', null,array('label' => 'Author'))
                        ->add('ecofunctional',null,array('label' => 'Ecofunctional Group'))
                        ->add('med1stSighting','text',array('label' => 'First Mediterranean Sighting')) 
                        ->add('medSuccess',null,array('label' => 'Establishement/Success')) 
                        ->add('origin', null,array('label' => 'Origin'))
                        ->add('med1stCitation',null,array('label' => 'First Mediterranean Ciatation'))
                        ->add('invasive',null,array('label' => 'Invasive'))
                       
                        //->add('status')
                ->end()
                
                ->with('Pathway/Vector',array('class' => 'col-md-6'))
                        ->add('Vectors')
                ->end()
                //->with('Synonyms',array('class' => 'col-md-6'))
                
                //->end()
                
                //->with('Taxonomy',array('class' => 'col-md-6'))
                //->add('taxonomy','sonata_type_admin', array(), array('edit' => 'list'))
                
                    
                //->end()
                //->with('Image',array('class' => 'col-md-6'))
                     //->add('Image','file', array('required'=> false,'data_class' => null,'label'=> 'Image'))
                    
            
                ->end()
                ->with('Distribution')
                        ->add('distribution', 'sonata_type_collection', array('by_reference' => false), array('edit' => 'inline','inline' => 'table'))
                ->end()
                ;          
        
    }
}
