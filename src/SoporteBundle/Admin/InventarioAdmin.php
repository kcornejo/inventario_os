<?php

namespace SoporteBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class InventarioAdmin extends AbstractAdmin {

    public function configureFormFields(FormMapper $form) {
        $form->add('producto', EntityType::class, array(
            'required' => true,
            'class' => 'SoporteBundle:Producto',
            "choice_label" => 'nombre',
            'choice_value' => 'id',
        ));
        $form->add('cantidadDisponible', IntegerType::class);
    }

    public function configureListFields(ListMapper $list) {
        $list->addIdentifier('producto.nombre');
        $list->addIdentifier('cantidad');
    }

    public function configureDatagridFilters(DatagridMapper $filter) {
        $filter->add('producto.nombre');
    }

}
