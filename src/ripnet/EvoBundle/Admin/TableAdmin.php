<?php

namespace ripnet\EvoBundle\Admin;

use ripnet\EvoBundle\Form\DataTransformer\StaticValuesTransformer;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use ripnet\EvoBundle\Entity\Table;

class TableAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $staticValuesTransformer = new StaticValuesTransformer();
        $formMapper
            ->add('name', 'text')
            ->add('tableType', 'choice', array('choices' => Table::$tableTypes, 'attr' => array('style' => 'width: 150px')))
            ->add('category')
            ->add('scaling', 'sonata_type_model_list', array(
                'required'      => true,
                'btn_delete'    => false,
            ))
            ->add('flipX', null, array('required' => false))
            ->add('flipY', null, array('required' => false))
            ->add('swapXY', null, array('required' => false))

            ->add('xAxisName', null, array('required' => false))
            ->add('xAxisType', 'choice', array('choices' => Table::$xAxisTypes, 'required' => false))
            ->add('xAxisElements', null, array('required' => false))
            ->add('xAxisScaling', 'sonata_type_model_list', array(
                'required'      => false,
            ))
            //->add('xAxisStaticValues', null, array('required' => false))
            ->add($formMapper->create('xAxisStaticValues', 'textarea', array('required' => false, 'attr' => array('style' => 'width: 200px; height: 200px')))->addViewTransformer($staticValuesTransformer))

            ->add('yAxisName', null, array('required' => false))
            ->add('yAxisType', 'choice', array('choices' => Table::$yAxisTypes, 'required' => false))
            ->add('yAxisElements', null, array('required' => false))
            ->add('yAxisScaling', 'sonata_type_model_list', array(
                'required'      => false,
            ))
            //->add('yAxisStaticValues', null, array('required' => false))
            ->add($formMapper->create('yAxisStaticValues', 'textarea', array('required' => false, 'attr' => array('style' => 'width: 200px; height: 200px')))->addViewTransformer($staticValuesTransformer))

        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('tableType')
            ->add('category')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('tableType')
            ->add('category')
        ;
    }
}