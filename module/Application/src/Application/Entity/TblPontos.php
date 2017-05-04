<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPontos
 *
 * @ORM\Table(name="tbl_pontos")
 * @ORM\Entity
 */
class TblPontos
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
     * @var float
     *
     * @ORM\Column(name="pontos_esquerda", type="float", precision=10, scale=0, nullable=false)
     */
    private $pontosEsquerda;

    /**
     * @var float
     *
     * @ORM\Column(name="pontos_direita", type="float", precision=10, scale=0, nullable=false)
     */
    private $pontosDireita;



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
     * @return TblPontos
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
     * Set pontosEsquerda
     *
     * @param float $pontosEsquerda
     *
     * @return TblPontos
     */
    public function setPontosEsquerda($pontosEsquerda)
    {
        $this->pontosEsquerda = $pontosEsquerda;

        return $this;
    }

    /**
     * Get pontosEsquerda
     *
     * @return float
     */
    public function getPontosEsquerda()
    {
        return $this->pontosEsquerda;
    }

    /**
     * Set pontosDireita
     *
     * @param float $pontosDireita
     *
     * @return TblPontos
     */
    public function setPontosDireita($pontosDireita)
    {
        $this->pontosDireita = $pontosDireita;

        return $this;
    }

    /**
     * Get pontosDireita
     *
     * @return float
     */
    public function getPontosDireita()
    {
        return $this->pontosDireita;
    }
}
