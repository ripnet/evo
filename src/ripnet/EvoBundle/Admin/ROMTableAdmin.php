<?php

namespace ripnet\EvoBundle\Admin;

use ripnet\EvoBundle\Form\DataTransformer\StaticValuesTransformer;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use ripnet\EvoBundle\Entity\ROMTable;

class ROMTableAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $staticValuesTransformer = new StaticValuesTransformer();
        $formMapper
            ->add('rom', 'sonata_type_model_list', array(
                'required'      => true,
                'btn_delete'    => false,
                'label'         => 'ROM',
            ))
            ->add('table', 'sonata_type_model_list', array(
                'required'      => true,
                'btn_delete'    => false,
                'label'         => 'Table',
            ))
            ->add('address', null, array('label' => "Table Address"))
            ->add('xAddress', null, array('label' => "X Axis Address", 'required' => false))
            ->add('yAddress', null, array('label' => "Y Axis Address", 'required' => false))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('rom', null, array('label' => 'ROM'))
            ->add('table', null, array('label' => 'Table'))
            ->add('address')
            ->add('xAddress')
            ->add('yAddress')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('rom')
            ->add('table')
            ->add('address')
            ->add('xAddress')
            ->add('yAddress')
        ;
    }
}