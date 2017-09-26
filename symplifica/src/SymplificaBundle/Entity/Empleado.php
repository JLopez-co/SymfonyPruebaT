<?php

namespace SymplificaBundle\Entity;

/**
 * Empleado
 */
class Empleado
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
     * @var int
     */
    private $fkTipoContrato;

    /**
     * @var int
     */
    private $fkEmpleador;


    /**
    * @ORM\ManyToOne(targetEntity="Empleador", inversedBy="Empleado")
    * @ORM\JoinColumn(name="fk_empleador", referencedColumnName="id", nullable=false)
    */
    private $empleador;
    /**
    * @ORM\ManyToOne(targetEntity="tipoContrato", inversedBy="Empleado")
    * @ORM\JoinColumn(name="fk_tipo_contrato", referencedColumnName="id", nullable=false)
    */
    private $tipoContrato;

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
     * @return Empleado
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
     * @return Empleado
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
     * @return Empleado
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
     * @return Empleado
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
     * Set fkTipoContrato
     *
     * @param integer $fkTipoContrato
     *
     * @return Empleado
     */
    public function setFkTipoContrato($fkTipoContrato)
    {
        $this->fkTipoContrato = $fkTipoContrato;

        return $this;
    }

    /**
     * Get fkTipoContrato
     *
     * @return int
     */
    public function getFkTipoContrato()
    {
        return $this->fkTipoContrato;
    }

    /**
     * Set fkEmpleador
     *
     * @param integer $fkEmpleador
     *
     * @return Empleado
     */
    public function setFkEmpleador($fkEmpleador)
    {
        $this->fkEmpleador = $fkEmpleador;

        return $this;
    }

    /**
     * Get fkEmpleador
     *
     * @return int
     */
    public function getFkEmpleador()
    {
        return $this->fkEmpleador;
    }
}

