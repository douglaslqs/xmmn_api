<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPontosCarreira
 *
 * @ORM\Table(name="tbl_pontos_carreira")
 * @ORM\Entity
 */
class TblPontosCarreira
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
     * @ORM\Column(name="pontos_total", type="float", precision=10, scale=0, nullable=false)
     */
    private $pontosTotal;



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
     * @return TblPontosCarreira
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
     * Set pontosTotal
     *
     * @param float $pontosTotal
     *
     * @return TblPontosCarreira
     */
    public function setPontosTotal($pontosTotal)
    {
        $this->pontosTotal = $pontosTotal;

        return $this;
    }

    /**
     * Get pontosTotal
     *
     * @return float
     */
    public function getPontosTotal()
    {
        return $this->pontosTotal;
    }
}
