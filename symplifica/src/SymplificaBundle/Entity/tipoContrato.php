<?php

namespace SymplificaBundle\Entity;

/**
 * tipoContrato
 */
class tipoContrato
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombreContrato;

    /**
     * @var string
     */
    private $descripcionContrato;

    /**
    * @ORM\OneToMany(targetEntity="Empleado", mappedBy="tipoContrato")
    */
    private $empleado;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreContrato
     *
     * @param string $nombreContrato
     *
     * @return tipoContrato
     */
    public function setNombreContrato($nombreContrato)
    {
        $this->nombreContrato = $nombreContrato;

        return $this;
    }

    /**
     * Get nombreContrato
     *
     * @return string
     */
    public function getNombreContrato()
    {
        return $this->nombreContrato;
    }

    /**
     * Set descripcionContrato
     *
     * @param string $descripcionContrato
     *
     * @return tipoContrato
     */
    public function setDescripcionContrato($descripcionContrato)
    {
        $this->descripcionContrato = $descripcionContrato;

        return $this;
    }

    /**
     * Get descripcionContrato
     *
     * @return string
     */
    public function getDescripcionContrato()
    {
        return $this->descripcionContrato;
    }
}

