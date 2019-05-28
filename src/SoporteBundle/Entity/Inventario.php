<?php

namespace SoporteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Campo
 *
 * @ORM\Table(name="inventario")
 * @ORM\Entity
 */
class Inventario {

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
     * @ORM\Column(name="fecha_entrada", type="date", nullable=true)
     */
    private $fechaEntrada;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_salida", type="date", nullable=true)
     */
    private $fechaSalida;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad_entra", type="integer", nullable=true)
     */
    private $cantidadEntra;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad_sale", type="integer", nullable=true)
     */
    private $cantidadSale;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad_disponible", type="integer", nullable=true)
     */
    private $cantidadDisponible;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", nullable=true)
     */
    private $estado;

    /**
     * @ORM\ManyToOne(targetEntity="Producto", inversedBy="inventarios")
     * @ORM\JoinColumn(name="producto_id", referencedColumnName="id")
     */
    private $producto;

    function getId() {
        return $this->id;
    }

    function getFechaEntrada() {
        return $this->fechaEntrada;
    }

    function getFechaSalida() {
        return $this->fechaSalida;
    }

    function getCantidadEntra() {
        return $this->cantidadEntra;
    }

    function getCantidadSale() {
        return $this->cantidadSale;
    }

    function getCantidadDisponible() {
        return $this->cantidadDisponible;
    }

    function getEstado() {
        return $this->estado;
    }

    function getProducto() {
        return $this->producto;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setFechaEntrada($fechaEntrada) {
        $this->fechaEntrada = $fechaEntrada;
    }

    function setFechaSalida($fechaSalida) {
        $this->fechaSalida = $fechaSalida;
    }

    function setCantidadEntra($cantidadEntra) {
        $this->cantidadEntra = $cantidadEntra;
    }

    function setCantidadSale($cantidadSale) {
        $this->cantidadSale = $cantidadSale;
    }

    function setCantidadDisponible($cantidadDisponible) {
        $this->cantidadDisponible = $cantidadDisponible;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setProducto($producto) {
        $this->producto = $producto;
    }

}
