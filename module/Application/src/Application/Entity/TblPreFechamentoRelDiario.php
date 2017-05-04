<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPreFechamentoRelDiario
 *
 * @ORM\Table(name="tbl_pre_fechamento_rel_diario", indexes={@ORM\Index(name="in_data", columns={"data"})})
 * @ORM\Entity
 */
class TblPreFechamentoRelDiario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=true)
     */
    private $data;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_pedidos_adesao", type="float", precision=24, scale=2, nullable=true)
     */
    private $valorPedidosAdesao = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="qtd_pedidos_adesao", type="integer", nullable=true)
     */
    private $qtdPedidosAdesao = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="valor_pedidos_ativacao", type="float", precision=24, scale=2, nullable=true)
     */
    private $valorPedidosAtivacao = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor_pedidos_recompra", type="float", precision=24, scale=2, nullable=true)
     */
    private $valorPedidosRecompra = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor_binario_divisao_dia", type="float", precision=24, scale=2, nullable=true)
     */
    private $valorBinarioDivisaoDia = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor_binario_divisao", type="float", precision=24, scale=2, nullable=true)
     */
    private $valorBinarioDivisao = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor_binario_nao_pago", type="float", precision=24, scale=2, nullable=true)
     */
    private $valorBinarioNaoPago = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor_binario_pago", type="float", precision=24, scale=2, nullable=true)
     */
    private $valorBinarioPago = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="total_cotas_binario", type="float", precision=24, scale=2, nullable=true)
     */
    private $totalCotasBinario = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor_cota_binario", type="float", precision=24, scale=2, nullable=true)
     */
    private $valorCotaBinario = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor_cota_binario_real", type="float", precision=24, scale=2, nullable=true)
     */
    private $valorCotaBinarioReal = '0.00';



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
     * @return TblPreFechamentoRelDiario
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
     * Set valorPedidosAdesao
     *
     * @param float $valorPedidosAdesao
     *
     * @return TblPreFechamentoRelDiario
     */
    public function setValorPedidosAdesao($valorPedidosAdesao)
    {
        $this->valorPedidosAdesao = $valorPedidosAdesao;

        return $this;
    }

    /**
     * Get valorPedidosAdesao
     *
     * @return float
     */
    public function getValorPedidosAdesao()
    {
        return $this->valorPedidosAdesao;
    }

    /**
     * Set qtdPedidosAdesao
     *
     * @param integer $qtdPedidosAdesao
     *
     * @return TblPreFechamentoRelDiario
     */
    public function setQtdPedidosAdesao($qtdPedidosAdesao)
    {
        $this->qtdPedidosAdesao = $qtdPedidosAdesao;

        return $this;
    }

    /**
     * Get qtdPedidosAdesao
     *
     * @return integer
     */
    public function getQtdPedidosAdesao()
    {
        return $this->qtdPedidosAdesao;
    }

    /**
     * Set valorPedidosAtivacao
     *
     * @param float $valorPedidosAtivacao
     *
     * @return TblPreFechamentoRelDiario
     */
    public function setValorPedidosAtivacao($valorPedidosAtivacao)
    {
        $this->valorPedidosAtivacao = $valorPedidosAtivacao;

        return $this;
    }

    /**
     * Get valorPedidosAtivacao
     *
     * @return float
     */
    public function getValorPedidosAtivacao()
    {
        return $this->valorPedidosAtivacao;
    }

    /**
     * Set valorPedidosRecompra
     *
     * @param float $valorPedidosRecompra
     *
     * @return TblPreFechamentoRelDiario
     */
    public function setValorPedidosRecompra($valorPedidosRecompra)
    {
        $this->valorPedidosRecompra = $valorPedidosRecompra;

        return $this;
    }

    /**
     * Get valorPedidosRecompra
     *
     * @return float
     */
    public function getValorPedidosRecompra()
    {
        return $this->valorPedidosRecompra;
    }

    /**
     * Set valorBinarioDivisaoDia
     *
     * @param float $valorBinarioDivisaoDia
     *
     * @return TblPreFechamentoRelDiario
     */
    public function setValorBinarioDivisaoDia($valorBinarioDivisaoDia)
    {
        $this->valorBinarioDivisaoDia = $valorBinarioDivisaoDia;

        return $this;
    }

    /**
     * Get valorBinarioDivisaoDia
     *
     * @return float
     */
    public function getValorBinarioDivisaoDia()
    {
        return $this->valorBinarioDivisaoDia;
    }

    /**
     * Set valorBinarioDivisao
     *
     * @param float $valorBinarioDivisao
     *
     * @return TblPreFechamentoRelDiario
     */
    public function setValorBinarioDivisao($valorBinarioDivisao)
    {
        $this->valorBinarioDivisao = $valorBinarioDivisao;

        return $this;
    }

    /**
     * Get valorBinarioDivisao
     *
     * @return float
     */
    public function getValorBinarioDivisao()
    {
        return $this->valorBinarioDivisao;
    }

    /**
     * Set valorBinarioNaoPago
     *
     * @param float $valorBinarioNaoPago
     *
     * @return TblPreFechamentoRelDiario
     */
    public function setValorBinarioNaoPago($valorBinarioNaoPago)
    {
        $this->valorBinarioNaoPago = $valorBinarioNaoPago;

        return $this;
    }

    /**
     * Get valorBinarioNaoPago
     *
     * @return float
     */
    public function getValorBinarioNaoPago()
    {
        return $this->valorBinarioNaoPago;
    }

    /**
     * Set valorBinarioPago
     *
     * @param float $valorBinarioPago
     *
     * @return TblPreFechamentoRelDiario
     */
    public function setValorBinarioPago($valorBinarioPago)
    {
        $this->valorBinarioPago = $valorBinarioPago;

        return $this;
    }

    /**
     * Get valorBinarioPago
     *
     * @return float
     */
    public function getValorBinarioPago()
    {
        return $this->valorBinarioPago;
    }

    /**
     * Set totalCotasBinario
     *
     * @param float $totalCotasBinario
     *
     * @return TblPreFechamentoRelDiario
     */
    public function setTotalCotasBinario($totalCotasBinario)
    {
        $this->totalCotasBinario = $totalCotasBinario;

        return $this;
    }

    /**
     * Get totalCotasBinario
     *
     * @return float
     */
    public function getTotalCotasBinario()
    {
        return $this->totalCotasBinario;
    }

    /**
     * Set valorCotaBinario
     *
     * @param float $valorCotaBinario
     *
     * @return TblPreFechamentoRelDiario
     */
    public function setValorCotaBinario($valorCotaBinario)
    {
        $this->valorCotaBinario = $valorCotaBinario;

        return $this;
    }

    /**
     * Get valorCotaBinario
     *
     * @return float
     */
    public function getValorCotaBinario()
    {
        return $this->valorCotaBinario;
    }

    /**
     * Set valorCotaBinarioReal
     *
     * @param float $valorCotaBinarioReal
     *
     * @return TblPreFechamentoRelDiario
     */
    public function setValorCotaBinarioReal($valorCotaBinarioReal)
    {
        $this->valorCotaBinarioReal = $valorCotaBinarioReal;

        return $this;
    }

    /**
     * Get valorCotaBinarioReal
     *
     * @return float
     */
    public function getValorCotaBinarioReal()
    {
        return $this->valorCotaBinarioReal;
    }
}
