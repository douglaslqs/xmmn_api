<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPontosRede
 *
 * @ORM\Table(name="tbl_pontos_rede")
 * @ORM\Entity
 */
class TblPontosRede
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_consultor", type="integer", nullable=false)
     */
    private $idConsultor;

    /**
     * @var float
     *
     * @ORM\Column(name="pontos_total", type="float", precision=10, scale=0, nullable=false)
     */
    private $pontosTotal;

    /**
     * @var float
     *
     * @ORM\Column(name="pontos_pagos", type="float", precision=10, scale=0, nullable=false)
     */
    private $pontosPagos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ultimo_resgate", type="datetime", nullable=false)
     */
    private $ultimoResgate;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idConsultor
     *
     * @param integer $idConsultor
     *
     * @return TblPontosRede
     */
    public function setIdConsultor($idConsultor)
    {
        $this->idConsultor = $idConsultor;

        return $this;
    }

    /**
     * Get idConsultor
     *
     * @return integer
     */
    public function getIdConsultor()
    {
        return $this->idConsultor;
    }

    /**
     * Set pontosTotal
     *
     * @param float $pontosTotal
     *
     * @return TblPontosRede
     */
    public function setPontosTotal($pontosTotal)
    {
        $this->pontosTotal = $pontosTotal;

        return $this;
    }

    /**
     * Get pontosTotal
     *
     * @return float
     */
    public function getPontosTotal()
    {
        return $this->pontosTotal;
    }

    /**
     * Set pontosPagos
     *
     * @param float $pontosPagos
     *
     * @return TblPontosRede
     */
    public function setPontosPagos($pontosPagos)
    {
        $this->pontosPagos = $pontosPagos;

        return $this;
    }

    /**
     * Get pontosPagos
     *
     * @return float
     */
    public function getPontosPagos()
    {
        return $this->pontosPagos;
    }

    /**
     * Set ultimoResgate
     *
     * @param \DateTime $ultimoResgate
     *
     * @return TblPontosRede
     */
    public function setUltimoResgate($ultimoResgate)
    {
        $this->ultimoResgate = $ultimoResgate;

        return $this;
    }

    /**
     * Get ultimoResgate
     *
     * @return \DateTime
     */
    public function getUltimoResgate()
    {
        return $this->ultimoResgate;
    }
}
