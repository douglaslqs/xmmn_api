<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblConsultoresExcluidos
 *
 * @ORM\Table(name="tbl_consultores_excluidos")
 * @ORM\Entity
 */
class TblConsultoresExcluidos
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
     * @return TblConsultoresExcluidos
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
     * Set motivo
     *
     * @param string $motivo
     *
     * @return TblConsultoresExcluidos
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
     * @return TblConsultoresExcluidos
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
