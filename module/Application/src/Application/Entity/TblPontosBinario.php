<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPontosBinario
 *
 * @ORM\Table(name="tbl_pontos_binario")
 * @ORM\Entity
 */
class TblPontosBinario
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
     * @ORM\Column(name="mes_corrente", type="string", length=255, nullable=true)
     */
    private $mesCorrente;

    /**
     * @var float
     *
     * @ORM\Column(name="esquerda", type="float", precision=10, scale=0, nullable=true)
     */
    private $esquerda;

    /**
     * @var float
     *
     * @ORM\Column(name="direita", type="float", precision=10, scale=0, nullable=true)
     */
    private $direita;

    /**
     * @var string
     *
     * @ORM\Column(name="login_consultor", type="string", length=255, nullable=true)
     */
    private $loginConsultor;

    /**
     * @var float
     *
     * @ORM\Column(name="diferenca", type="float", precision=10, scale=0, nullable=true)
     */
    private $diferenca;

    /**
     * @var string
     *
     * @ORM\Column(name="lado_acumulado_errado", type="string", length=1, nullable=true)
     */
    private $ladoAcumuladoErrado;

    /**
     * @var float
     *
     * @ORM\Column(name="ponto_acumulado_real", type="float", precision=10, scale=0, nullable=true)
     */
    private $pontoAcumuladoReal;

    /**
     * @var string
     *
     * @ORM\Column(name="lado_acumulado_real", type="string", length=1, nullable=true)
     */
    private $ladoAcumuladoReal;

    /**
     * @var string
     *
     * @ORM\Column(name="lado_pagamento", type="string", length=3, nullable=true)
     */
    private $ladoPagamento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ultima_atualizacao", type="datetime", nullable=true)
     */
    private $dataUltimaAtualizacao = 'CURRENT_TIMESTAMP';



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
     * @return TblPontosBinario
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
     * @return TblPontosBinario
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
     * Set esquerda
     *
     * @param float $esquerda
     *
     * @return TblPontosBinario
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
     * @return TblPontosBinario
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
     * Set loginConsultor
     *
     * @param string $loginConsultor
     *
     * @return TblPontosBinario
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
     * Set diferenca
     *
     * @param float $diferenca
     *
     * @return TblPontosBinario
     */
    public function setDiferenca($diferenca)
    {
        $this->diferenca = $diferenca;

        return $this;
    }

    /**
     * Get diferenca
     *
     * @return float
     */
    public function getDiferenca()
    {
        return $this->diferenca;
    }

    /**
     * Set ladoAcumuladoErrado
     *
     * @param string $ladoAcumuladoErrado
     *
     * @return TblPontosBinario
     */
    public function setLadoAcumuladoErrado($ladoAcumuladoErrado)
    {
        $this->ladoAcumuladoErrado = $ladoAcumuladoErrado;

        return $this;
    }

    /**
     * Get ladoAcumuladoErrado
     *
     * @return string
     */
    public function getLadoAcumuladoErrado()
    {
        return $this->ladoAcumuladoErrado;
    }

    /**
     * Set pontoAcumuladoReal
     *
     * @param float $pontoAcumuladoReal
     *
     * @return TblPontosBinario
     */
    public function setPontoAcumuladoReal($pontoAcumuladoReal)
    {
        $this->pontoAcumuladoReal = $pontoAcumuladoReal;

        return $this;
    }

    /**
     * Get pontoAcumuladoReal
     *
     * @return float
     */
    public function getPontoAcumuladoReal()
    {
        return $this->pontoAcumuladoReal;
    }

    /**
     * Set ladoAcumuladoReal
     *
     * @param string $ladoAcumuladoReal
     *
     * @return TblPontosBinario
     */
    public function setLadoAcumuladoReal($ladoAcumuladoReal)
    {
        $this->ladoAcumuladoReal = $ladoAcumuladoReal;

        return $this;
    }

    /**
     * Get ladoAcumuladoReal
     *
     * @return string
     */
    public function getLadoAcumuladoReal()
    {
        return $this->ladoAcumuladoReal;
    }

    /**
     * Set ladoPagamento
     *
     * @param string $ladoPagamento
     *
     * @return TblPontosBinario
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
     * Set dataUltimaAtualizacao
     *
     * @param \DateTime $dataUltimaAtualizacao
     *
     * @return TblPontosBinario
     */
    public function setDataUltimaAtualizacao($dataUltimaAtualizacao)
    {
        $this->dataUltimaAtualizacao = $dataUltimaAtualizacao;

        return $this;
    }

    /**
     * Get dataUltimaAtualizacao
     *
     * @return \DateTime
     */
    public function getDataUltimaAtualizacao()
    {
        return $this->dataUltimaAtualizacao;
    }
}
