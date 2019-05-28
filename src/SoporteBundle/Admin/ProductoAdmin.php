<?php

namespace SoporteBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ProductoAdmin extends AbstractAdmin {

    public function configureFormFields(FormMapper $form) {
        $form->add('nombre', TextType::class);
        $form->add('serie', TextType::class);
        $form->add('precioCompra', NumberType::class);
        $form->add('precioVenta', NumberType::class);
        $form->add('proveedor', EntityType::class, array(
            'required' => true,
            'class' => 'SoporteBundle:Proveedor',
            "choice_label" => 'nombre',
            'choice_value' => 'id',
        ));

        $form->add('marca', EntityType::class, array(
            'required' => true,
            'class' => 'SoporteBundle:Marca',
            "choice_label" => 'nombre',
            'choice_value' => 'id',
        ));
    }

    public function configureListFields(ListMapper $list) {
        $list->addIdentifier('nombre');
    }

    public function configureDatagridFilters(DatagridMapper $filter) {
        $filter->add('nombre');
    }

}
