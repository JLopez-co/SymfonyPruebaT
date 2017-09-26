<?php

namespace SymplificaBundle\Entity;

/**
 * Empleador
 */
class Empleador
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombreCompleto;

    /**
     * @var string
     */
    private $sexo;

    /**
     * @var int
     */
    private $documentoIdentidad;

    /**
     * @var int
     */
    private $telefono;

    /**
     * @var string
     */
    private $dirrecion;

    /**
     * @var string
     */
    private $fechaNacimiento;

    /**
    * @ORM\OneToMany(targetEntity="Empleado", mappedBy="Empleador")
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
     * Set nombreCompleto
     *
     * @param string $nombreCompleto
     *
     * @return Empleador
     */
    public function setNombreCompleto($nombreCompleto)
    {
        $this->nombreCompleto = $nombreCompleto;

        return $this;
    }

    /**
     * Get nombreCompleto
     *
     * @return string
     */
    public function getNombreCompleto()
    {
        return $this->nombreCompleto;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Empleador
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set documentoIdentidad
     *
     * @param integer $documentoIdentidad
     *
     * @return Empleador
     */
    public function setDocumentoIdentidad($documentoIdentidad)
    {
        $this->documentoIdentidad = $documentoIdentidad;

        return $this;
    }

    /**
     * Get documentoIdentidad
     *
     * @return int
     */
    public function getDocumentoIdentidad()
    {
        return $this->documentoIdentidad;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Empleador
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return int
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set dirrecion
     *
     * @param string $dirrecion
     *
     * @return Empleador
     */
    public function setDirrecion($dirrecion)
    {
        $this->dirrecion = $dirrecion;

        return $this;
    }

    /**
     * Get dirrecion
     *
     * @return string
     */
    public function getDirrecion()
    {
        return $this->dirrecion;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return Empleador
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \Date
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }
}

