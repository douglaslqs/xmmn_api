<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPontosEcommerce
 *
 * @ORM\Table(name="tbl_pontos_ecommerce")
 * @ORM\Entity
 */
class TblPontosEcommerce
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
     * @ORM\Column(name="id_pedido_ecommerce", type="integer", nullable=false)
     */
    private $idPedidoEcommerce;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $valor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=100, nullable=false)
     */
    private $status = 'NÃO Pago';

    /**
     * @var integer
     *
     * @ORM\Column(name="ativo", type="integer", nullable=false)
     */
    private $ativo = '1';



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
     * @return TblPontosEcommerce
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
     * Set idPedidoEcommerce
     *
     * @param integer $idPedidoEcommerce
     *
     * @return TblPontosEcommerce
     */
    public function setIdPedidoEcommerce($idPedidoEcommerce)
    {
        $this->idPedidoEcommerce = $idPedidoEcommerce;

        return $this;
    }

    /**
     * Get idPedidoEcommerce
     *
     * @return integer
     */
    public function getIdPedidoEcommerce()
    {
        return $this->idPedidoEcommerce;
    }

    /**
     * Set valor
     *
     * @param float $valor
     *
     * @return TblPontosEcommerce
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return TblPontosEcommerce
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return TblPontosEcommerce
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
     * Set ativo
     *
     * @param integer $ativo
     *
     * @return TblPontosEcommerce
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Get ativo
     *
     * @return integer
     */
    public function getAtivo()
    {
        return $this->ativo;
    }
}
