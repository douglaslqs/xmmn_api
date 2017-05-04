<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPontosHistorico
 *
 * @ORM\Table(name="tbl_pontos_historico", indexes={@ORM\Index(name="id_pedido", columns={"id_pedido"}), @ORM\Index(name="id_consultor_upline", columns={"id_consultor_upline"}), @ORM\Index(name="tipo", columns={"tipo"}), @ORM\Index(name="id_consultor", columns={"id_consultor"}), @ORM\Index(name="mes_corrente", columns={"mes_corrente"})})
 * @ORM\Entity
 */
class TblPontosHistorico
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
     * @ORM\Column(name="id_pedido", type="integer", nullable=true)
     */
    private $idPedido;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_consultor_upline", type="integer", nullable=true)
     */
    private $idConsultorUpline;

    /**
     * @var float
     *
     * @ORM\Column(name="pontos", type="float", precision=11, scale=3, nullable=true)
     */
    private $pontos = '0.000';

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=50, nullable=true)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_consultor", type="integer", nullable=true)
     */
    private $idConsultor;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_pre_fechamento", type="integer", nullable=true)
     */
    private $idPreFechamento;

    /**
     * @var string
     *
     * @ORM\Column(name="mes_corrente", type="string", length=255, nullable=true)
     */
    private $mesCorrente;

    /**
     * @var string
     *
     * @ORM\Column(name="ciclo_no_mes", type="string", length=2, nullable=true)
     */
    private $cicloNoMes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_atualizacao", type="datetime", nullable=true)
     */
    private $dataAtualizacao = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="nivel_upline", type="integer", nullable=true)
     */
    private $nivelUpline;



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
     * Set idPedido
     *
     * @param integer $idPedido
     *
     * @return TblPontosHistorico
     */
    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;

        return $this;
    }

    /**
     * Get idPedido
     *
     * @return integer
     */
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * Set idConsultorUpline
     *
     * @param integer $idConsultorUpline
     *
     * @return TblPontosHistorico
     */
    public function setIdConsultorUpline($idConsultorUpline)
    {
        $this->idConsultorUpline = $idConsultorUpline;

        return $this;
    }

    /**
     * Get idConsultorUpline
     *
     * @return integer
     */
    public function getIdConsultorUpline()
    {
        return $this->idConsultorUpline;
    }

    /**
     * Set pontos
     *
     * @param float $pontos
     *
     * @return TblPontosHistorico
     */
    public function setPontos($pontos)
    {
        $this->pontos = $pontos;

        return $this;
    }

    /**
     * Get pontos
     *
     * @return float
     */
    public function getPontos()
    {
        return $this->pontos;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return TblPontosHistorico
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set idConsultor
     *
     * @param integer $idConsultor
     *
     * @return TblPontosHistorico
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
     * Set idPreFechamento
     *
     * @param integer $idPreFechamento
     *
     * @return TblPontosHistorico
     */
    public function setIdPreFechamento($idPreFechamento)
    {
        $this->idPreFechamento = $idPreFechamento;

        return $this;
    }

    /**
     * Get idPreFechamento
     *
     * @return integer
     */
    public function getIdPreFechamento()
    {
        return $this->idPreFechamento;
    }

    /**
     * Set mesCorrente
     *
     * @param string $mesCorrente
     *
     * @return TblPontosHistorico
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
     * Set cicloNoMes
     *
     * @param string $cicloNoMes
     *
     * @return TblPontosHistorico
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
     * Set dataAtualizacao
     *
     * @param \DateTime $dataAtualizacao
     *
     * @return TblPontosHistorico
     */
    public function setDataAtualizacao($dataAtualizacao)
    {
        $this->dataAtualizacao = $dataAtualizacao;

        return $this;
    }

    /**
     * Get dataAtualizacao
     *
     * @return \DateTime
     */
    public function getDataAtualizacao()
    {
        return $this->dataAtualizacao;
    }

    /**
     * Set nivelUpline
     *
     * @param integer $nivelUpline
     *
     * @return TblPontosHistorico
     */
    public function setNivelUpline($nivelUpline)
    {
        $this->nivelUpline = $nivelUpline;

        return $this;
    }

    /**
     * Get nivelUpline
     *
     * @return integer
     */
    public function getNivelUpline()
    {
        return $this->nivelUpline;
    }
}
