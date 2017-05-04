<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAdesaoBoleto
 *
 * @ORM\Table(name="tbl_adesao_boleto")
 * @ORM\Entity
 */
class TblAdesaoBoleto
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
     * @var integer
     *
     * @ORM\Column(name="id_pedido", type="integer", nullable=false)
     */
    private $idPedido;

    /**
     * @var string
     *
     * @ORM\Column(name="rastreador", type="string", length=40, nullable=false)
     */
    private $rastreador;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=40, nullable=false)
     */
    private $status = 'NÃO Pago';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_insercao", type="datetime", nullable=false)
     */
    private $dataInsercao;



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
     * @return TblAdesaoBoleto
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
     * Set idPedido
     *
     * @param integer $idPedido
     *
     * @return TblAdesaoBoleto
     */
    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;

        return $this;
    }

    /**
     * Get idPedido
     *
     * @return integer
     */
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * Set rastreador
     *
     * @param string $rastreador
     *
     * @return TblAdesaoBoleto
     */
    public function setRastreador($rastreador)
    {
        $this->rastreador = $rastreador;

        return $this;
    }

    /**
     * Get rastreador
     *
     * @return string
     */
    public function getRastreador()
    {
        return $this->rastreador;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return TblAdesaoBoleto
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set dataInsercao
     *
     * @param \DateTime $dataInsercao
     *
     * @return TblAdesaoBoleto
     */
    public function setDataInsercao($dataInsercao)
    {
        $this->dataInsercao = $dataInsercao;

        return $this;
    }

    /**
     * Get dataInsercao
     *
     * @return \DateTime
     */
    public function getDataInsercao()
    {
        return $this->dataInsercao;
    }
}
