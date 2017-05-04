<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblGatewayPagamento
 *
 * @ORM\Table(name="tbl_gateway_pagamento")
 * @ORM\Entity
 */
class TblGatewayPagamento
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
     * @ORM\Column(name="id_pedido", type="integer", nullable=false)
     */
    private $idPedido;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_consultor", type="integer", nullable=false)
     */
    private $idConsultor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="retorno_stone", type="text", length=16777215, nullable=true)
     */
    private $retornoStone;

    /**
     * @var string
     *
     * @ORM\Column(name="status_clearsale", type="string", length=10, nullable=true)
     */
    private $statusClearsale;

    /**
     * @var string
     *
     * @ORM\Column(name="json_clearsale", type="text", length=16777215, nullable=true)
     */
    private $jsonClearsale;



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
     * Set idPedido
     *
     * @param integer $idPedido
     *
     * @return TblGatewayPagamento
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
     * Set idConsultor
     *
     * @param integer $idConsultor
     *
     * @return TblGatewayPagamento
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
     * Set data
     *
     * @param \DateTime $data
     *
     * @return TblGatewayPagamento
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
     * Set retornoStone
     *
     * @param string $retornoStone
     *
     * @return TblGatewayPagamento
     */
    public function setRetornoStone($retornoStone)
    {
        $this->retornoStone = $retornoStone;

        return $this;
    }

    /**
     * Get retornoStone
     *
     * @return string
     */
    public function getRetornoStone()
    {
        return $this->retornoStone;
    }

    /**
     * Set statusClearsale
     *
     * @param string $statusClearsale
     *
     * @return TblGatewayPagamento
     */
    public function setStatusClearsale($statusClearsale)
    {
        $this->statusClearsale = $statusClearsale;

        return $this;
    }

    /**
     * Get statusClearsale
     *
     * @return string
     */
    public function getStatusClearsale()
    {
        return $this->statusClearsale;
    }

    /**
     * Set jsonClearsale
     *
     * @param string $jsonClearsale
     *
     * @return TblGatewayPagamento
     */
    public function setJsonClearsale($jsonClearsale)
    {
        $this->jsonClearsale = $jsonClearsale;

        return $this;
    }

    /**
     * Get jsonClearsale
     *
     * @return string
     */
    public function getJsonClearsale()
    {
        return $this->jsonClearsale;
    }
}
