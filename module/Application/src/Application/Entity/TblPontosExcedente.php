<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPontosExcedente
 *
 * @ORM\Table(name="tbl_pontos_excedente")
 * @ORM\Entity
 */
class TblPontosExcedente
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
     * @ORM\Column(name="pontos_excedente", type="float", precision=10, scale=0, nullable=false)
     */
    private $pontosExcedente;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo", type="text", length=65535, nullable=false)
     */
    private $motivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_insercao", type="datetime", nullable=false)
     */
    private $dataInsercao;



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
     * @return TblPontosExcedente
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
     * Set pontosExcedente
     *
     * @param float $pontosExcedente
     *
     * @return TblPontosExcedente
     */
    public function setPontosExcedente($pontosExcedente)
    {
        $this->pontosExcedente = $pontosExcedente;

        return $this;
    }

    /**
     * Get pontosExcedente
     *
     * @return float
     */
    public function getPontosExcedente()
    {
        return $this->pontosExcedente;
    }

    /**
     * Set motivo
     *
     * @param string $motivo
     *
     * @return TblPontosExcedente
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get motivo
     *
     * @return string
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set dataInsercao
     *
     * @param \DateTime $dataInsercao
     *
     * @return TblPontosExcedente
     */
    public function setDataInsercao($dataInsercao)
    {
        $this->dataInsercao = $dataInsercao;

        return $this;
    }

    /**
     * Get dataInsercao
     *
     * @return \DateTime
     */
    public function getDataInsercao()
    {
        return $this->dataInsercao;
    }
}
