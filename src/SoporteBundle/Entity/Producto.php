<?php

namespace SoporteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Campo
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity
 */
class Producto {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="serie", type="string", nullable=true)
     */
    private $serie;

    /**
     * @var string
     *
     * @ORM\Column(name="precio_compra", type="float", nullable=false)
     */
    private $precioCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="precio_venta", type="float", nullable=false)
     */
    private $precioVenta;

    /**
     * @ORM\ManyToOne(targetEntity="Marca", inversedBy="productos")
     * @ORM\JoinColumn(name="marca_id", referencedColumnName="id")
     */
    private $marca;

    /**
     * @ORM\ManyToOne(targetEntity="Proveedor", inversedBy="productos")
     * @ORM\JoinColumn(name="proveedor_id", referencedColumnName="id")
     */
    private $proveedor;

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getSerie() {
        return $this->serie;
    }

    function getPrecioCompra() {
        return $this->precioCompra;
    }

    function getPrecioVenta() {
        return $this->precioVenta;
    }

    function getMarca() {
        return $this->marca;
    }

    function getProveedor() {
        return $this->proveedor;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setSerie($serie) {
        $this->serie = $serie;
    }

    function setPrecioCompra($precioCompra) {
        $this->precioCompra = $precioCompra;
    }

    function setPrecioVenta($precioVenta) {
        $this->precioVenta = $precioVenta;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setProveedor($proveedor) {
        $this->proveedor = $proveedor;
    }

}
