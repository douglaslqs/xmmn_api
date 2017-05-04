<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblItemPedido
 *
 * @ORM\Table(name="tbl_item_pedido", indexes={@ORM\Index(name="in_id_pedido", columns={"id_pedido"}), @ORM\Index(name="in_id_produto", columns={"id_produto"})})
 * @ORM\Entity
 */
class TblItemPedido
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
     * @ORM\Column(name="id_produto", type="integer", nullable=false)
     */
    private $idProduto;

    /**
     * @var float
     *
     * @ORM\Column(name="desconto", type="float", precision=10, scale=0, nullable=false)
     */
    private $desconto;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=10, scale=0, nullable=true)
     */
    private $valor;

    /**
     * @var float
     *
     * @ORM\Column(name="ponto", type="float", precision=10, scale=0, nullable=true)
     */
    private $ponto;

    /**
     * @var string
     *
     * @ORM\Column(name="envio_logistica", type="string", length=255, nullable=true)
     */
    private $envioLogistica;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="status_entrega", type="string", length=255, nullable=true)
     */
    private $statusEntrega;

    /**
     * @var string
     *
     * @ORM\Column(name="encomenda", type="string", length=1, nullable=true)
     */
    private $encomenda = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_old", type="integer", nullable=true)
     */
    private $idOld;



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
     * @return TblItemPedido
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
     * Set idProduto
     *
     * @param integer $idProduto
     *
     * @return TblItemPedido
     */
    public function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;

        return $this;
    }

    /**
     * Get idProduto
     *
     * @return integer
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * Set desconto
     *
     * @param float $desconto
     *
     * @return TblItemPedido
     */
    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;

        return $this;
    }

    /**
     * Get desconto
     *
     * @return float
     */
    public function getDesconto()
    {
        return $this->desconto;
    }

    /**
     * Set valor
     *
     * @param float $valor
     *
     * @return TblItemPedido
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
     * Set ponto
     *
     * @param float $ponto
     *
     * @return TblItemPedido
     */
    public function setPonto($ponto)
    {
        $this->ponto = $ponto;

        return $this;
    }

    /**
     * Get ponto
     *
     * @return float
     */
    public function getPonto()
    {
        return $this->ponto;
    }

    /**
     * Set envioLogistica
     *
     * @param string $envioLogistica
     *
     * @return TblItemPedido
     */
    public function setEnvioLogistica($envioLogistica)
    {
        $this->envioLogistica = $envioLogistica;

        return $this;
    }

    /**
     * Get envioLogistica
     *
     * @return string
     */
    public function getEnvioLogistica()
    {
        return $this->envioLogistica;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return TblItemPedido
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
     * Set statusEntrega
     *
     * @param string $statusEntrega
     *
     * @return TblItemPedido
     */
    public function setStatusEntrega($statusEntrega)
    {
        $this->statusEntrega = $statusEntrega;

        return $this;
    }

    /**
     * Get statusEntrega
     *
     * @return string
     */
    public function getStatusEntrega()
    {
        return $this->statusEntrega;
    }

    /**
     * Set encomenda
     *
     * @param string $encomenda
     *
     * @return TblItemPedido
     */
    public function setEncomenda($encomenda)
    {
        $this->encomenda = $encomenda;

        return $this;
    }

    /**
     * Get encomenda
     *
     * @return string
     */
    public function getEncomenda()
    {
        return $this->encomenda;
    }

    /**
     * Set idOld
     *
     * @param integer $idOld
     *
     * @return TblItemPedido
     */
    public function setIdOld($idOld)
    {
        $this->idOld = $idOld;

        return $this;
    }

    /**
     * Get idOld
     *
     * @return integer
     */
    public function getIdOld()
    {
        return $this->idOld;
    }
}
