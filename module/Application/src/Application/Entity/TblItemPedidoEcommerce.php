<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblItemPedidoEcommerce
 *
 * @ORM\Table(name="tbl_item_pedido_ecommerce", indexes={@ORM\Index(name="in_id_pedido_eco", columns={"id_pedido_ecommerce"}), @ORM\Index(name="in_id_produto", columns={"id_produto"})})
 * @ORM\Entity
 */
class TblItemPedidoEcommerce
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
     * @ORM\Column(name="id_pedido_ecommerce", type="integer", nullable=false)
     */
    private $idPedidoEcommerce;

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
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;



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
     * Set idPedidoEcommerce
     *
     * @param integer $idPedidoEcommerce
     *
     * @return TblItemPedidoEcommerce
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
     * Set idProduto
     *
     * @param integer $idProduto
     *
     * @return TblItemPedidoEcommerce
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
     * @return TblItemPedidoEcommerce
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
     * @return TblItemPedidoEcommerce
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
     * @return TblItemPedidoEcommerce
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
     * Set data
     *
     * @param \DateTime $data
     *
     * @return TblItemPedidoEcommerce
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
}
