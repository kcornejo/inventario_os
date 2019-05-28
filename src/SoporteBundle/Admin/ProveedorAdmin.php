<?php

namespace SoporteBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ProveedorAdmin extends AbstractAdmin {

    public function configureFormFields(FormMapper $form) {
        $form->add('codigo', TextType::class);
        $form->add('nombre', TextType::class);
    }

    public function configureListFields(ListMapper $list) {
        $list->addIdentifier('codigo');
        $list->add('nombre');
    }

    public function configureDatagridFilters(DatagridMapper $filter) {
        $filter->add('codigo');
        $filter->add('nombre');
    }

}
