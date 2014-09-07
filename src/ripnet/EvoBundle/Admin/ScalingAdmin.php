<?php

namespace ripnet\EvoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use ripnet\EvoBundle\Entity\Scaling;

class ScalingAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('units', null, array('required' => false))
            ->add('toexpr', null, array('required' => false))
            ->add('frexpr', null, array('required' => false))
            ->add('format', null, array('required' => false))
            ->add('min', null, array('required' => false))
            ->add('max', null, array('required' => false))
            ->add('inc', null, array('required' => false))
            ->add('storagetype', 'choice', array('choices' => Scaling::$storageTypes))
            ->add('endian', 'choice', array('choices' => Scaling::$endianTypes))
            ->add('storagebits', null, array('label' => 'Storage Bits', 'required' => false))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('units')
            ->add('storagetype')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('units')
            ->add('toexpr')
            ->add('frexpr')
            ->add('format')
            ->add('inc')
            ->add('storagetype')
        ;
    }
}