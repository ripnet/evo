<?php

namespace ripnet\EvoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ROMAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('xmlid', 'text', array('label' => 'XML ID'))
            ->add('parent', 'entity', array('class' => 'ripnet\EvoBundle\Entity\ROM', 'required' => false))
            ->add('internalidaddress', 'text', array('label' => 'Internal ID Address'))
            ->add('internalidhex', 'text', array('label' => 'Internal ID Hex'))
            ->add('caseid', 'text', array('label' => 'Case ID', 'required' => false))
            ->add('ecuid', 'text', array('label' => 'ECU ID', 'required' => false))
            ->add('make')
            ->add('market')
            ->add('model')
            ->add('submodel')
            ->add('transmission')
            ->add('year')
            ->add('flashmethod')
            ->add('memmodel')
            ->add('checksummodule', 'text', array('label' => 'Checksum Module', 'required' => false))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('xmlid', null, array('label' => 'ROM ID'))
            ->add('parent')
            ->add('year')
            ->add('make')
            ->add('market')
            ->add('model')
            ->add('submodel')
            ->add('transmission')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('xmlid', null, array('label' => 'ROM ID'))
            ->add('parent')
            ->add('year')
            ->add('make')
            ->add('market')
            ->add('model')
            ->add('submodel')
            ->add('transmission')
        ;
    }
}