<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblProdutosPreco
 *
 * @ORM\Table(name="tbl_produtos_preco")
 * @ORM\Entity
 */
class TblProdutosPreco
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idproduto", type="integer", nullable=true)
     */
    private $idproduto;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipoconsultor", type="integer", nullable=true)
     */
    private $tipoconsultor;

    /**
     * @var float
     *
     * @ORM\Column(name="precocompra", type="float", precision=11, scale=2, nullable=true)
     */
    private $precocompra;

    /**
     * @var float
     *
     * @ORM\Column(name="precovenda", type="float", precision=11, scale=2, nullable=true)
     */
    private $precovenda;

    /**
     * @var float
     *
     * @ORM\Column(name="ponto", type="float", precision=11, scale=2, nullable=true)
     */
    private $ponto;

    /**
     * @var float
     *
     * @ORM\Column(name="preco_bonus", type="float", precision=11, scale=2, nullable=true)
     */
    private $precoBonus;



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
     * Set idproduto
     *
     * @param integer $idproduto
     *
     * @return TblProdutosPreco
     */
    public function setIdproduto($idproduto)
    {
        $this->idproduto = $idproduto;

        return $this;
    }

    /**
     * Get idproduto
     *
     * @return integer
     */
    public function getIdproduto()
    {
        return $this->idproduto;
    }

    /**
     * Set tipoconsultor
     *
     * @param integer $tipoconsultor
     *
     * @return TblProdutosPreco
     */
    public function setTipoconsultor($tipoconsultor)
    {
        $this->tipoconsultor = $tipoconsultor;

        return $this;
    }

    /**
     * Get tipoconsultor
     *
     * @return integer
     */
    public function getTipoconsultor()
    {
        return $this->tipoconsultor;
    }

    /**
     * Set precocompra
     *
     * @param float $precocompra
     *
     * @return TblProdutosPreco
     */
    public function setPrecocompra($precocompra)
    {
        $this->precocompra = $precocompra;

        return $this;
    }

    /**
     * Get precocompra
     *
     * @return float
     */
    public function getPrecocompra()
    {
        return $this->precocompra;
    }

    /**
     * Set precovenda
     *
     * @param float $precovenda
     *
     * @return TblProdutosPreco
     */
    public function setPrecovenda($precovenda)
    {
        $this->precovenda = $precovenda;

        return $this;
    }

    /**
     * Get precovenda
     *
     * @return float
     */
    public function getPrecovenda()
    {
        return $this->precovenda;
    }

    /**
     * Set ponto
     *
     * @param float $ponto
     *
     * @return TblProdutosPreco
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
     * Set precoBonus
     *
     * @param float $precoBonus
     *
     * @return TblProdutosPreco
     */
    public function setPrecoBonus($precoBonus)
    {
        $this->precoBonus = $precoBonus;

        return $this;
    }

    /**
     * Get precoBonus
     *
     * @return float
     */
    public function getPrecoBonus()
    {
        return $this->precoBonus;
    }
}
