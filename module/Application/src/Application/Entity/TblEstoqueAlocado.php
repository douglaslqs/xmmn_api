<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblEstoqueAlocado
 *
 * @ORM\Table(name="tbl_estoque_alocado")
 * @ORM\Entity
 */
class TblEstoqueAlocado
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
     * @ORM\Column(name="id_cdn", type="integer", nullable=true)
     */
    private $idCdn;

    /**
     * @var string
     *
     * @ORM\Column(name="id_consultor", type="string", length=255, nullable=true)
     */
    private $idConsultor;

    /**
     * @var string
     *
     * @ORM\Column(name="id_pedido", type="string", length=255, nullable=true)
     */
    private $idPedido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="ativo", type="integer", nullable=true)
     */
    private $ativo = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_produto", type="integer", nullable=true)
     */
    private $idProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=30, nullable=true)
     */
    private $status = 'NÃO pago';

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=255, nullable=true)
     */
    private $observacao;



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
     * Set idCdn
     *
     * @param integer $idCdn
     *
     * @return TblEstoqueAlocado
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
     * Set idConsultor
     *
     * @param string $idConsultor
     *
     * @return TblEstoqueAlocado
     */
    public function setIdConsultor($idConsultor)
    {
        $this->idConsultor = $idConsultor;

        return $this;
    }

    /**
     * Get idConsultor
     *
     * @return string
     */
    public function getIdConsultor()
    {
        return $this->idConsultor;
    }

    /**
     * Set idPedido
     *
     * @param string $idPedido
     *
     * @return TblEstoqueAlocado
     */
    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;

        return $this;
    }

    /**
     * Get idPedido
     *
     * @return string
     */
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return TblEstoqueAlocado
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
     * Set ativo
     *
     * @param integer $ativo
     *
     * @return TblEstoqueAlocado
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
     * Set idProduto
     *
     * @param integer $idProduto
     *
     * @return TblEstoqueAlocado
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
     * Set status
     *
     * @param string $status
     *
     * @return TblEstoqueAlocado
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
     * Set observacao
     *
     * @param string $observacao
     *
     * @return TblEstoqueAlocado
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }
}
