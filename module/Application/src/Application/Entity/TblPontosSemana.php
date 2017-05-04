<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPontosSemana
 *
 * @ORM\Table(name="tbl_pontos_semana")
 * @ORM\Entity
 */
class TblPontosSemana
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
     * @ORM\Column(name="semana_1", type="date", nullable=false)
     */
    private $semana1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="semana_2", type="date", nullable=false)
     */
    private $semana2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="semana_3", type="date", nullable=false)
     */
    private $semana3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="semana_4", type="date", nullable=false)
     */
    private $semana4;

    /**
     * @var float
     *
     * @ORM\Column(name="pontos_semana_1", type="float", precision=10, scale=0, nullable=false)
     */
    private $pontosSemana1;

    /**
     * @var float
     *
     * @ORM\Column(name="pontos_semana_2", type="float", precision=10, scale=0, nullable=false)
     */
    private $pontosSemana2;

    /**
     * @var float
     *
     * @ORM\Column(name="pontos_semana_3", type="float", precision=10, scale=0, nullable=false)
     */
    private $pontosSemana3;

    /**
     * @var float
     *
     * @ORM\Column(name="pontos_semana_4", type="float", precision=10, scale=0, nullable=false)
     */
    private $pontosSemana4;



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
     * @return TblPontosSemana
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
     * Set semana1
     *
     * @param \DateTime $semana1
     *
     * @return TblPontosSemana
     */
    public function setSemana1($semana1)
    {
        $this->semana1 = $semana1;

        return $this;
    }

    /**
     * Get semana1
     *
     * @return \DateTime
     */
    public function getSemana1()
    {
        return $this->semana1;
    }

    /**
     * Set semana2
     *
     * @param \DateTime $semana2
     *
     * @return TblPontosSemana
     */
    public function setSemana2($semana2)
    {
        $this->semana2 = $semana2;

        return $this;
    }

    /**
     * Get semana2
     *
     * @return \DateTime
     */
    public function getSemana2()
    {
        return $this->semana2;
    }

    /**
     * Set semana3
     *
     * @param \DateTime $semana3
     *
     * @return TblPontosSemana
     */
    public function setSemana3($semana3)
    {
        $this->semana3 = $semana3;

        return $this;
    }

    /**
     * Get semana3
     *
     * @return \DateTime
     */
    public function getSemana3()
    {
        return $this->semana3;
    }

    /**
     * Set semana4
     *
     * @param \DateTime $semana4
     *
     * @return TblPontosSemana
     */
    public function setSemana4($semana4)
    {
        $this->semana4 = $semana4;

        return $this;
    }

    /**
     * Get semana4
     *
     * @return \DateTime
     */
    public function getSemana4()
    {
        return $this->semana4;
    }

    /**
     * Set pontosSemana1
     *
     * @param float $pontosSemana1
     *
     * @return TblPontosSemana
     */
    public function setPontosSemana1($pontosSemana1)
    {
        $this->pontosSemana1 = $pontosSemana1;

        return $this;
    }

    /**
     * Get pontosSemana1
     *
     * @return float
     */
    public function getPontosSemana1()
    {
        return $this->pontosSemana1;
    }

    /**
     * Set pontosSemana2
     *
     * @param float $pontosSemana2
     *
     * @return TblPontosSemana
     */
    public function setPontosSemana2($pontosSemana2)
    {
        $this->pontosSemana2 = $pontosSemana2;

        return $this;
    }

    /**
     * Get pontosSemana2
     *
     * @return float
     */
    public function getPontosSemana2()
    {
        return $this->pontosSemana2;
    }

    /**
     * Set pontosSemana3
     *
     * @param float $pontosSemana3
     *
     * @return TblPontosSemana
     */
    public function setPontosSemana3($pontosSemana3)
    {
        $this->pontosSemana3 = $pontosSemana3;

        return $this;
    }

    /**
     * Get pontosSemana3
     *
     * @return float
     */
    public function getPontosSemana3()
    {
        return $this->pontosSemana3;
    }

    /**
     * Set pontosSemana4
     *
     * @param float $pontosSemana4
     *
     * @return TblPontosSemana
     */
    public function setPontosSemana4($pontosSemana4)
    {
        $this->pontosSemana4 = $pontosSemana4;

        return $this;
    }

    /**
     * Get pontosSemana4
     *
     * @return float
     */
    public function getPontosSemana4()
    {
        return $this->pontosSemana4;
    }
}
