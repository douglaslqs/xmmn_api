<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPontoAcumulado
 *
 * @ORM\Table(name="tbl_ponto_acumulado")
 * @ORM\Entity
 */
class TblPontoAcumulado
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
     * @ORM\Column(name="mes_corrente", type="string", length=20, nullable=false)
     */
    private $mesCorrente;

    /**
     * @var integer
     *
     * @ORM\Column(name="graduacao_mes", type="integer", nullable=false)
     */
    private $graduacaoMes;

    /**
     * @var float
     *
     * @ORM\Column(name="pontos_pessoais", type="float", precision=10, scale=0, nullable=false)
     */
    private $pontosPessoais;

    /**
     * @var float
     *
     * @ORM\Column(name="pontos_recompra", type="float", precision=10, scale=0, nullable=false)
     */
    private $pontosRecompra;

    /**
     * @var float
     *
     * @ORM\Column(name="pontos_adesao", type="float", precision=10, scale=0, nullable=false)
     */
    private $pontosAdesao;

    /**
     * @var float
     *
     * @ORM\Column(name="pontos_ativacao", type="float", precision=10, scale=0, nullable=false)
     */
    private $pontosAtivacao;

    /**
     * @var float
     *
     * @ORM\Column(name="total_acumulado", type="float", precision=10, scale=0, nullable=false)
     */
    private $totalAcumulado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=false)
     */
    private $dataCriacao;



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
     * @return TblPontoAcumulado
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
     * @return TblPontoAcumulado
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
     * Set graduacaoMes
     *
     * @param integer $graduacaoMes
     *
     * @return TblPontoAcumulado
     */
    public function setGraduacaoMes($graduacaoMes)
    {
        $this->graduacaoMes = $graduacaoMes;

        return $this;
    }

    /**
     * Get graduacaoMes
     *
     * @return integer
     */
    public function getGraduacaoMes()
    {
        return $this->graduacaoMes;
    }

    /**
     * Set pontosPessoais
     *
     * @param float $pontosPessoais
     *
     * @return TblPontoAcumulado
     */
    public function setPontosPessoais($pontosPessoais)
    {
        $this->pontosPessoais = $pontosPessoais;

        return $this;
    }

    /**
     * Get pontosPessoais
     *
     * @return float
     */
    public function getPontosPessoais()
    {
        return $this->pontosPessoais;
    }

    /**
     * Set pontosRecompra
     *
     * @param float $pontosRecompra
     *
     * @return TblPontoAcumulado
     */
    public function setPontosRecompra($pontosRecompra)
    {
        $this->pontosRecompra = $pontosRecompra;

        return $this;
    }

    /**
     * Get pontosRecompra
     *
     * @return float
     */
    public function getPontosRecompra()
    {
        return $this->pontosRecompra;
    }

    /**
     * Set pontosAdesao
     *
     * @param float $pontosAdesao
     *
     * @return TblPontoAcumulado
     */
    public function setPontosAdesao($pontosAdesao)
    {
        $this->pontosAdesao = $pontosAdesao;

        return $this;
    }

    /**
     * Get pontosAdesao
     *
     * @return float
     */
    public function getPontosAdesao()
    {
        return $this->pontosAdesao;
    }

    /**
     * Set pontosAtivacao
     *
     * @param float $pontosAtivacao
     *
     * @return TblPontoAcumulado
     */
    public function setPontosAtivacao($pontosAtivacao)
    {
        $this->pontosAtivacao = $pontosAtivacao;

        return $this;
    }

    /**
     * Get pontosAtivacao
     *
     * @return float
     */
    public function getPontosAtivacao()
    {
        return $this->pontosAtivacao;
    }

    /**
     * Set totalAcumulado
     *
     * @param float $totalAcumulado
     *
     * @return TblPontoAcumulado
     */
    public function setTotalAcumulado($totalAcumulado)
    {
        $this->totalAcumulado = $totalAcumulado;

        return $this;
    }

    /**
     * Get totalAcumulado
     *
     * @return float
     */
    public function getTotalAcumulado()
    {
        return $this->totalAcumulado;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return TblPontoAcumulado
     */
    public function setDataCriacao($dataCriacao)
    {
        $this->dataCriacao = $dataCriacao;

        return $this;
    }

    /**
     * Get dataCriacao
     *
     * @return \DateTime
     */
    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }
}
