<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPontosHistoricoBinario
 *
 * @ORM\Table(name="tbl_pontos_historico_binario")
 * @ORM\Entity
 */
class TblPontosHistoricoBinario
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
     * @ORM\Column(name="id_consultor", type="integer", nullable=true)
     */
    private $idConsultor;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_consultor_upline", type="integer", nullable=true)
     */
    private $idConsultorUpline;

    /**
     * @var float
     *
     * @ORM\Column(name="pontos", type="float", precision=24, scale=2, nullable=true)
     */
    private $pontos;

    /**
     * @var string
     *
     * @ORM\Column(name="lado", type="string", length=2, nullable=true)
     */
    private $lado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_loja", type="string", length=60, nullable=true)
     */
    private $tipoLoja;

    /**
     * @var float
     *
     * @ORM\Column(name="cota", type="float", precision=24, scale=2, nullable=true)
     */
    private $cota = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=30, nullable=true)
     */
    private $status;

    /**
     * @var float
     *
     * @ORM\Column(name="desconto_ativacao", type="float", precision=11, scale=2, nullable=true)
     */
    private $descontoAtivacao = '0.00';



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
     * @return TblPontosHistoricoBinario
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
     * Set idConsultor
     *
     * @param integer $idConsultor
     *
     * @return TblPontosHistoricoBinario
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
     * Set idConsultorUpline
     *
     * @param integer $idConsultorUpline
     *
     * @return TblPontosHistoricoBinario
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
     * @return TblPontosHistoricoBinario
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
     * Set lado
     *
     * @param string $lado
     *
     * @return TblPontosHistoricoBinario
     */
    public function setLado($lado)
    {
        $this->lado = $lado;

        return $this;
    }

    /**
     * Get lado
     *
     * @return string
     */
    public function getLado()
    {
        return $this->lado;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return TblPontosHistoricoBinario
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
     * Set tipoLoja
     *
     * @param string $tipoLoja
     *
     * @return TblPontosHistoricoBinario
     */
    public function setTipoLoja($tipoLoja)
    {
        $this->tipoLoja = $tipoLoja;

        return $this;
    }

    /**
     * Get tipoLoja
     *
     * @return string
     */
    public function getTipoLoja()
    {
        return $this->tipoLoja;
    }

    /**
     * Set cota
     *
     * @param float $cota
     *
     * @return TblPontosHistoricoBinario
     */
    public function setCota($cota)
    {
        $this->cota = $cota;

        return $this;
    }

    /**
     * Get cota
     *
     * @return float
     */
    public function getCota()
    {
        return $this->cota;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return TblPontosHistoricoBinario
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set descontoAtivacao
     *
     * @param float $descontoAtivacao
     *
     * @return TblPontosHistoricoBinario
     */
    public function setDescontoAtivacao($descontoAtivacao)
    {
        $this->descontoAtivacao = $descontoAtivacao;

        return $this;
    }

    /**
     * Get descontoAtivacao
     *
     * @return float
     */
    public function getDescontoAtivacao()
    {
        return $this->descontoAtivacao;
    }
}
