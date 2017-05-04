<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblBinarioDiario
 *
 * @ORM\Table(name="tbl_binario_diario", indexes={@ORM\Index(name="in_data", columns={"data"}), @ORM\Index(name="in_ciclo", columns={"ciclo_no_mes"}), @ORM\Index(name="in_id_consultor", columns={"id_consultor"})})
 * @ORM\Entity
 */
class TblBinarioDiario
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
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=true)
     */
    private $data = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="ciclo_no_mes", type="string", length=2, nullable=true)
     */
    private $cicloNoMes;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_consultor", type="integer", nullable=true)
     */
    private $idConsultor;

    /**
     * @var string
     *
     * @ORM\Column(name="login_consultor", type="string", length=255, nullable=true)
     */
    private $loginConsultor;

    /**
     * @var float
     *
     * @ORM\Column(name="esquerda", type="float", precision=24, scale=2, nullable=true)
     */
    private $esquerda = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="direita", type="float", precision=24, scale=2, nullable=true)
     */
    private $direita = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="ponto_acumulado", type="float", precision=24, scale=2, nullable=true)
     */
    private $pontoAcumulado = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="lado_acumulado", type="string", length=1, nullable=true)
     */
    private $ladoAcumulado = 'E';

    /**
     * @var string
     *
     * @ORM\Column(name="lado_pagamento", type="string", length=1, nullable=true)
     */
    private $ladoPagamento = 'E';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ultima_atualizacao", type="datetime", nullable=true)
     */
    private $ultimaAtualizacao = 'CURRENT_TIMESTAMP';

    /**
     * @var float
     *
     * @ORM\Column(name="cotas", type="float", precision=24, scale=2, nullable=true)
     */
    private $cotas = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="teto_binario", type="float", precision=24, scale=2, nullable=true)
     */
    private $tetoBinario = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="bonus_binario", type="float", precision=24, scale=2, nullable=true)
     */
    private $bonusBinario = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor_cota", type="float", precision=24, scale=2, nullable=true)
     */
    private $valorCota = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="binario_ativo", type="string", length=1, nullable=true)
     */
    private $binarioAtivo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="status_pagamento", type="string", length=30, nullable=true)
     */
    private $statusPagamento = 'nao_pago';

    /**
     * @var string
     *
     * @ORM\Column(name="atingiu_teto", type="string", length=1, nullable=true)
     */
    private $atingiuTeto = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="desconto_esquerda", type="float", precision=11, scale=2, nullable=true)
     */
    private $descontoEsquerda = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="desconto_direita", type="float", precision=11, scale=2, nullable=true)
     */
    private $descontoDireita = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="bonus_equiparacao", type="float", precision=11, scale=2, nullable=true)
     */
    private $bonusEquiparacao = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="pontos_esquerda", type="float", precision=11, scale=2, nullable=true)
     */
    private $pontosEsquerda = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="pontos_direita", type="float", precision=11, scale=2, nullable=true)
     */
    private $pontosDireita = '0.00';



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
     * Set data
     *
     * @param \DateTime $data
     *
     * @return TblBinarioDiario
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
     * Set cicloNoMes
     *
     * @param string $cicloNoMes
     *
     * @return TblBinarioDiario
     */
    public function setCicloNoMes($cicloNoMes)
    {
        $this->cicloNoMes = $cicloNoMes;

        return $this;
    }

    /**
     * Get cicloNoMes
     *
     * @return string
     */
    public function getCicloNoMes()
    {
        return $this->cicloNoMes;
    }

    /**
     * Set idConsultor
     *
     * @param integer $idConsultor
     *
     * @return TblBinarioDiario
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
     * Set loginConsultor
     *
     * @param string $loginConsultor
     *
     * @return TblBinarioDiario
     */
    public function setLoginConsultor($loginConsultor)
    {
        $this->loginConsultor = $loginConsultor;

        return $this;
    }

    /**
     * Get loginConsultor
     *
     * @return string
     */
    public function getLoginConsultor()
    {
        return $this->loginConsultor;
    }

    /**
     * Set esquerda
     *
     * @param float $esquerda
     *
     * @return TblBinarioDiario
     */
    public function setEsquerda($esquerda)
    {
        $this->esquerda = $esquerda;

        return $this;
    }

    /**
     * Get esquerda
     *
     * @return float
     */
    public function getEsquerda()
    {
        return $this->esquerda;
    }

    /**
     * Set direita
     *
     * @param float $direita
     *
     * @return TblBinarioDiario
     */
    public function setDireita($direita)
    {
        $this->direita = $direita;

        return $this;
    }

    /**
     * Get direita
     *
     * @return float
     */
    public function getDireita()
    {
        return $this->direita;
    }

    /**
     * Set pontoAcumulado
     *
     * @param float $pontoAcumulado
     *
     * @return TblBinarioDiario
     */
    public function setPontoAcumulado($pontoAcumulado)
    {
        $this->pontoAcumulado = $pontoAcumulado;

        return $this;
    }

    /**
     * Get pontoAcumulado
     *
     * @return float
     */
    public function getPontoAcumulado()
    {
        return $this->pontoAcumulado;
    }

    /**
     * Set ladoAcumulado
     *
     * @param string $ladoAcumulado
     *
     * @return TblBinarioDiario
     */
    public function setLadoAcumulado($ladoAcumulado)
    {
        $this->ladoAcumulado = $ladoAcumulado;

        return $this;
    }

    /**
     * Get ladoAcumulado
     *
     * @return string
     */
    public function getLadoAcumulado()
    {
        return $this->ladoAcumulado;
    }

    /**
     * Set ladoPagamento
     *
     * @param string $ladoPagamento
     *
     * @return TblBinarioDiario
     */
    public function setLadoPagamento($ladoPagamento)
    {
        $this->ladoPagamento = $ladoPagamento;

        return $this;
    }

    /**
     * Get ladoPagamento
     *
     * @return string
     */
    public function getLadoPagamento()
    {
        return $this->ladoPagamento;
    }

    /**
     * Set ultimaAtualizacao
     *
     * @param \DateTime $ultimaAtualizacao
     *
     * @return TblBinarioDiario
     */
    public function setUltimaAtualizacao($ultimaAtualizacao)
    {
        $this->ultimaAtualizacao = $ultimaAtualizacao;

        return $this;
    }

    /**
     * Get ultimaAtualizacao
     *
     * @return \DateTime
     */
    public function getUltimaAtualizacao()
    {
        return $this->ultimaAtualizacao;
    }

    /**
     * Set cotas
     *
     * @param float $cotas
     *
     * @return TblBinarioDiario
     */
    public function setCotas($cotas)
    {
        $this->cotas = $cotas;

        return $this;
    }

    /**
     * Get cotas
     *
     * @return float
     */
    public function getCotas()
    {
        return $this->cotas;
    }

    /**
     * Set tetoBinario
     *
     * @param float $tetoBinario
     *
     * @return TblBinarioDiario
     */
    public function setTetoBinario($tetoBinario)
    {
        $this->tetoBinario = $tetoBinario;

        return $this;
    }

    /**
     * Get tetoBinario
     *
     * @return float
     */
    public function getTetoBinario()
    {
        return $this->tetoBinario;
    }

    /**
     * Set bonusBinario
     *
     * @param float $bonusBinario
     *
     * @return TblBinarioDiario
     */
    public function setBonusBinario($bonusBinario)
    {
        $this->bonusBinario = $bonusBinario;

        return $this;
    }

    /**
     * Get bonusBinario
     *
     * @return float
     */
    public function getBonusBinario()
    {
        return $this->bonusBinario;
    }

    /**
     * Set valorCota
     *
     * @param float $valorCota
     *
     * @return TblBinarioDiario
     */
    public function setValorCota($valorCota)
    {
        $this->valorCota = $valorCota;

        return $this;
    }

    /**
     * Get valorCota
     *
     * @return float
     */
    public function getValorCota()
    {
        return $this->valorCota;
    }

    /**
     * Set binarioAtivo
     *
     * @param string $binarioAtivo
     *
     * @return TblBinarioDiario
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
     * Set statusPagamento
     *
     * @param string $statusPagamento
     *
     * @return TblBinarioDiario
     */
    public function setStatusPagamento($statusPagamento)
    {
        $this->statusPagamento = $statusPagamento;

        return $this;
    }

    /**
     * Get statusPagamento
     *
     * @return string
     */
    public function getStatusPagamento()
    {
        return $this->statusPagamento;
    }

    /**
     * Set atingiuTeto
     *
     * @param string $atingiuTeto
     *
     * @return TblBinarioDiario
     */
    public function setAtingiuTeto($atingiuTeto)
    {
        $this->atingiuTeto = $atingiuTeto;

        return $this;
    }

    /**
     * Get atingiuTeto
     *
     * @return string
     */
    public function getAtingiuTeto()
    {
        return $this->atingiuTeto;
    }

    /**
     * Set descontoEsquerda
     *
     * @param float $descontoEsquerda
     *
     * @return TblBinarioDiario
     */
    public function setDescontoEsquerda($descontoEsquerda)
    {
        $this->descontoEsquerda = $descontoEsquerda;

        return $this;
    }

    /**
     * Get descontoEsquerda
     *
     * @return float
     */
    public function getDescontoEsquerda()
    {
        return $this->descontoEsquerda;
    }

    /**
     * Set descontoDireita
     *
     * @param float $descontoDireita
     *
     * @return TblBinarioDiario
     */
    public function setDescontoDireita($descontoDireita)
    {
        $this->descontoDireita = $descontoDireita;

        return $this;
    }

    /**
     * Get descontoDireita
     *
     * @return float
     */
    public function getDescontoDireita()
    {
        return $this->descontoDireita;
    }

    /**
     * Set bonusEquiparacao
     *
     * @param float $bonusEquiparacao
     *
     * @return TblBinarioDiario
     */
    public function setBonusEquiparacao($bonusEquiparacao)
    {
        $this->bonusEquiparacao = $bonusEquiparacao;

        return $this;
    }

    /**
     * Get bonusEquiparacao
     *
     * @return float
     */
    public function getBonusEquiparacao()
    {
        return $this->bonusEquiparacao;
    }

    /**
     * Set pontosEsquerda
     *
     * @param float $pontosEsquerda
     *
     * @return TblBinarioDiario
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
     * @return TblBinarioDiario
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
