<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblConsultoresDesativados
 *
 * @ORM\Table(name="tbl_consultores_desativados")
 * @ORM\Entity
 */
class TblConsultoresDesativados
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
     * @var \DateTime
     *
     * @ORM\Column(name="data_insercao", type="datetime", nullable=false)
     */
    private $dataInsercao;

    /**
     * @var string
     *
     * @ORM\Column(name="relatorio", type="text", length=65535, nullable=false)
     */
    private $relatorio;



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
     * @return TblConsultoresDesativados
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
     * Set dataInsercao
     *
     * @param \DateTime $dataInsercao
     *
     * @return TblConsultoresDesativados
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

    /**
     * Set relatorio
     *
     * @param string $relatorio
     *
     * @return TblConsultoresDesativados
     */
    public function setRelatorio($relatorio)
    {
        $this->relatorio = $relatorio;

        return $this;
    }

    /**
     * Get relatorio
     *
     * @return string
     */
    public function getRelatorio()
    {
        return $this->relatorio;
    }
}
