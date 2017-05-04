<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblEstoqueCdn
 *
 * @ORM\Table(name="tbl_estoque_cdn")
 * @ORM\Entity
 */
class TblEstoqueCdn
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
     * @ORM\Column(name="id_produto", type="integer", nullable=true)
     */
    private $idProduto;

    /**
     * @var integer
     *
     * @ORM\Column(name="estoque", type="integer", nullable=true)
     */
    private $estoque;

    /**
     * @var integer
     *
     * @ORM\Column(name="ativo", type="integer", nullable=true)
     */
    private $ativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="destaque", type="integer", nullable=true)
     */
    private $destaque;

    /**
     * @var integer
     *
     * @ORM\Column(name="mais_vendido", type="integer", nullable=true)
     */
    private $maisVendido;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cdn", type="integer", nullable=true)
     */
    private $idCdn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DtCadastro", type="datetime", nullable=true)
     */
    private $dtcadastro = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DtAlteracao", type="datetime", nullable=true)
     */
    private $dtalteracao = '0000-00-00 00:00:00';



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
     * Set idProduto
     *
     * @param integer $idProduto
     *
     * @return TblEstoqueCdn
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
     * Set estoque
     *
     * @param integer $estoque
     *
     * @return TblEstoqueCdn
     */
    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;

        return $this;
    }

    /**
     * Get estoque
     *
     * @return integer
     */
    public function getEstoque()
    {
        return $this->estoque;
    }

    /**
     * Set ativo
     *
     * @param integer $ativo
     *
     * @return TblEstoqueCdn
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

    /**
     * Set destaque
     *
     * @param integer $destaque
     *
     * @return TblEstoqueCdn
     */
    public function setDestaque($destaque)
    {
        $this->destaque = $destaque;

        return $this;
    }

    /**
     * Get destaque
     *
     * @return integer
     */
    public function getDestaque()
    {
        return $this->destaque;
    }

    /**
     * Set maisVendido
     *
     * @param integer $maisVendido
     *
     * @return TblEstoqueCdn
     */
    public function setMaisVendido($maisVendido)
    {
        $this->maisVendido = $maisVendido;

        return $this;
    }

    /**
     * Get maisVendido
     *
     * @return integer
     */
    public function getMaisVendido()
    {
        return $this->maisVendido;
    }

    /**
     * Set idCdn
     *
     * @param integer $idCdn
     *
     * @return TblEstoqueCdn
     */
    public function setIdCdn($idCdn)
    {
        $this->idCdn = $idCdn;

        return $this;
    }

    /**
     * Get idCdn
     *
     * @return integer
     */
    public function getIdCdn()
    {
        return $this->idCdn;
    }

    /**
     * Set dtcadastro
     *
     * @param \DateTime $dtcadastro
     *
     * @return TblEstoqueCdn
     */
    public function setDtcadastro($dtcadastro)
    {
        $this->dtcadastro = $dtcadastro;

        return $this;
    }

    /**
     * Get dtcadastro
     *
     * @return \DateTime
     */
    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    /**
     * Set dtalteracao
     *
     * @param \DateTime $dtalteracao
     *
     * @return TblEstoqueCdn
     */
    public function setDtalteracao($dtalteracao)
    {
        $this->dtalteracao = $dtalteracao;

        return $this;
    }

    /**
     * Get dtalteracao
     *
     * @return \DateTime
     */
    public function getDtalteracao()
    {
        return $this->dtalteracao;
    }
}
