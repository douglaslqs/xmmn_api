<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblRastreadorCorreios
 *
 * @ORM\Table(name="tbl_rastreador_correios")
 * @ORM\Entity
 */
class TblRastreadorCorreios
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
     * @var string
     *
     * @ORM\Column(name="codigo_rastreio", type="string", length=255, nullable=false)
     */
    private $codigoRastreio = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_pedido", type="integer", nullable=false)
     */
    private $idPedido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=false)
     */
    private $dataCriacao = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", length=65535, nullable=false)
     */
    private $descricao;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_registro", type="string", length=20, nullable=true)
     */
    private $tipoRegistro;



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
     * Set codigoRastreio
     *
     * @param string $codigoRastreio
     *
     * @return TblRastreadorCorreios
     */
    public function setCodigoRastreio($codigoRastreio)
    {
        $this->codigoRastreio = $codigoRastreio;

        return $this;
    }

    /**
     * Get codigoRastreio
     *
     * @return string
     */
    public function getCodigoRastreio()
    {
        return $this->codigoRastreio;
    }

    /**
     * Set idPedido
     *
     * @param integer $idPedido
     *
     * @return TblRastreadorCorreios
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
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return TblRastreadorCorreios
     */
    public function setDataCriacao($dataCriacao)
    {
        $this->dataCriacao = $dataCriacao;

        return $this;
    }

    /**
     * Get dataCriacao
     *
     * @return \DateTime
     */
    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return TblRastreadorCorreios
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return TblRastreadorCorreios
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set tipoRegistro
     *
     * @param string $tipoRegistro
     *
     * @return TblRastreadorCorreios
     */
    public function setTipoRegistro($tipoRegistro)
    {
        $this->tipoRegistro = $tipoRegistro;

        return $this;
    }

    /**
     * Get tipoRegistro
     *
     * @return string
     */
    public function getTipoRegistro()
    {
        return $this->tipoRegistro;
    }
}
