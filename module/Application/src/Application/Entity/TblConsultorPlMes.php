<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblConsultorPlMes
 *
 * @ORM\Table(name="tbl_consultor_pl_mes", indexes={@ORM\Index(name="id_consultor", columns={"id_consultor"}), @ORM\Index(name="mes_corrente", columns={"mes_corrente"})})
 * @ORM\Entity
 */
class TblConsultorPlMes
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
     * @ORM\Column(name="id_consultor", type="integer", nullable=true)
     */
    private $idConsultor;

    /**
     * @var string
     *
     * @ORM\Column(name="mes_corrente", type="string", length=60, nullable=true)
     */
    private $mesCorrente;

    /**
     * @var integer
     *
     * @ORM\Column(name="dias_mes", type="integer", nullable=true)
     */
    private $diasMes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dias_ativo", type="integer", nullable=true)
     */
    private $diasAtivo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pl_real", type="float", precision=11, scale=2, nullable=true)
     */
    private $plReal = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="pl_mes", type="float", precision=11, scale=2, nullable=true)
     */
    private $plMes = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor_pl", type="float", precision=11, scale=2, nullable=true)
     */
    private $valorPl = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="bonus_mes", type="float", precision=11, scale=2, nullable=true)
     */
    private $bonusMes = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="binario_ativo", type="string", length=1, nullable=true)
     */
    private $binarioAtivo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ativacao_binario", type="date", nullable=true)
     */
    private $dataAtivacaoBinario = '0000-00-00';

    /**
     * @var float
     *
     * @ORM\Column(name="teto_pl", type="float", precision=11, scale=2, nullable=true)
     */
    private $tetoPl = '0.00';



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
     * @return TblConsultorPlMes
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
     * Set mesCorrente
     *
     * @param string $mesCorrente
     *
     * @return TblConsultorPlMes
     */
    public function setMesCorrente($mesCorrente)
    {
        $this->mesCorrente = $mesCorrente;

        return $this;
    }

    /**
     * Get mesCorrente
     *
     * @return string
     */
    public function getMesCorrente()
    {
        return $this->mesCorrente;
    }

    /**
     * Set diasMes
     *
     * @param integer $diasMes
     *
     * @return TblConsultorPlMes
     */
    public function setDiasMes($diasMes)
    {
        $this->diasMes = $diasMes;

        return $this;
    }

    /**
     * Get diasMes
     *
     * @return integer
     */
    public function getDiasMes()
    {
        return $this->diasMes;
    }

    /**
     * Set diasAtivo
     *
     * @param integer $diasAtivo
     *
     * @return TblConsultorPlMes
     */
    public function setDiasAtivo($diasAtivo)
    {
        $this->diasAtivo = $diasAtivo;

        return $this;
    }

    /**
     * Get diasAtivo
     *
     * @return integer
     */
    public function getDiasAtivo()
    {
        return $this->diasAtivo;
    }

    /**
     * Set plReal
     *
     * @param float $plReal
     *
     * @return TblConsultorPlMes
     */
    public function setPlReal($plReal)
    {
        $this->plReal = $plReal;

        return $this;
    }

    /**
     * Get plReal
     *
     * @return float
     */
    public function getPlReal()
    {
        return $this->plReal;
    }

    /**
     * Set plMes
     *
     * @param float $plMes
     *
     * @return TblConsultorPlMes
     */
    public function setPlMes($plMes)
    {
        $this->plMes = $plMes;

        return $this;
    }

    /**
     * Get plMes
     *
     * @return float
     */
    public function getPlMes()
    {
        return $this->plMes;
    }

    /**
     * Set valorPl
     *
     * @param float $valorPl
     *
     * @return TblConsultorPlMes
     */
    public function setValorPl($valorPl)
    {
        $this->valorPl = $valorPl;

        return $this;
    }

    /**
     * Get valorPl
     *
     * @return float
     */
    public function getValorPl()
    {
        return $this->valorPl;
    }

    /**
     * Set bonusMes
     *
     * @param float $bonusMes
     *
     * @return TblConsultorPlMes
     */
    public function setBonusMes($bonusMes)
    {
        $this->bonusMes = $bonusMes;

        return $this;
    }

    /**
     * Get bonusMes
     *
     * @return float
     */
    public function getBonusMes()
    {
        return $this->bonusMes;
    }

    /**
     * Set binarioAtivo
     *
     * @param string $binarioAtivo
     *
     * @return TblConsultorPlMes
     */
    public function setBinarioAtivo($binarioAtivo)
    {
        $this->binarioAtivo = $binarioAtivo;

        return $this;
    }

    /**
     * Get binarioAtivo
     *
     * @return string
     */
    public function getBinarioAtivo()
    {
        return $this->binarioAtivo;
    }

    /**
     * Set dataAtivacaoBinario
     *
     * @param \DateTime $dataAtivacaoBinario
     *
     * @return TblConsultorPlMes
     */
    public function setDataAtivacaoBinario($dataAtivacaoBinario)
    {
        $this->dataAtivacaoBinario = $dataAtivacaoBinario;

        return $this;
    }

    /**
     * Get dataAtivacaoBinario
     *
     * @return \DateTime
     */
    public function getDataAtivacaoBinario()
    {
        return $this->dataAtivacaoBinario;
    }

    /**
     * Set tetoPl
     *
     * @param float $tetoPl
     *
     * @return TblConsultorPlMes
     */
    public function setTetoPl($tetoPl)
    {
        $this->tetoPl = $tetoPl;

        return $this;
    }

    /**
     * Get tetoPl
     *
     * @return float
     */
    public function getTetoPl()
    {
        return $this->tetoPl;
    }
}
