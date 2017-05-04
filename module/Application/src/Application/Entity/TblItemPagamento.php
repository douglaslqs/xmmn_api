<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblItemPagamento
 *
 * @ORM\Table(name="tbl_item_pagamento")
 * @ORM\Entity
 */
class TblItemPagamento
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
     * @ORM\Column(name="id_pagamento", type="integer", nullable=false)
     */
    private $idPagamento;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_fechamento", type="integer", nullable=false)
     */
    private $idFechamento = '0';



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
     * Set idPagamento
     *
     * @param integer $idPagamento
     *
     * @return TblItemPagamento
     */
    public function setIdPagamento($idPagamento)
    {
        $this->idPagamento = $idPagamento;

        return $this;
    }

    /**
     * Get idPagamento
     *
     * @return integer
     */
    public function getIdPagamento()
    {
        return $this->idPagamento;
    }

    /**
     * Set idFechamento
     *
     * @param integer $idFechamento
     *
     * @return TblItemPagamento
     */
    public function setIdFechamento($idFechamento)
    {
        $this->idFechamento = $idFechamento;

        return $this;
    }

    /**
     * Get idFechamento
     *
     * @return integer
     */
    public function getIdFechamento()
    {
        return $this->idFechamento;
    }
}
