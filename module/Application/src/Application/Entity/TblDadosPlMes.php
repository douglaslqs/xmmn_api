<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblDadosPlMes
 *
 * @ORM\Table(name="tbl_dados_pl_mes")
 * @ORM\Entity
 */
class TblDadosPlMes
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
     * @var string
     *
     * @ORM\Column(name="mes_corrente", type="string", length=60, nullable=true)
     */
    private $mesCorrente;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_pedidos_mes", type="float", precision=11, scale=2, nullable=true)
     */
    private $valorPedidosMes = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor_pedidos_divisao", type="float", precision=11, scale=2, nullable=true)
     */
    private $valorPedidosDivisao = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="acumulado_mes_anterior", type="float", precision=11, scale=2, nullable=true)
     */
    private $acumuladoMesAnterior = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="qtd_pl_mes", type="float", precision=11, scale=2, nullable=true)
     */
    private $qtdPlMes = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor_pl_mes", type="float", precision=11, scale=2, nullable=true)
     */
    private $valorPlMes = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor_pl_mes_real", type="float", precision=11, scale=2, nullable=true)
     */
    private $valorPlMesReal;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_pago_bonus", type="float", precision=11, scale=2, nullable=true)
     */
    private $valorPagoBonus = '0.00';



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
     * Set mesCorrente
     *
     * @param string $mesCorrente
     *
     * @return TblDadosPlMes
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
     * Set valorPedidosMes
     *
     * @param float $valorPedidosMes
     *
     * @return TblDadosPlMes
     */
    public function setValorPedidosMes($valorPedidosMes)
    {
        $this->valorPedidosMes = $valorPedidosMes;

        return $this;
    }

    /**
     * Get valorPedidosMes
     *
     * @return float
     */
    public function getValorPedidosMes()
    {
        return $this->valorPedidosMes;
    }

    /**
     * Set valorPedidosDivisao
     *
     * @param float $valorPedidosDivisao
     *
     * @return TblDadosPlMes
     */
    public function setValorPedidosDivisao($valorPedidosDivisao)
    {
        $this->valorPedidosDivisao = $valorPedidosDivisao;

        return $this;
    }

    /**
     * Get valorPedidosDivisao
     *
     * @return float
     */
    public function getValorPedidosDivisao()
    {
        return $this->valorPedidosDivisao;
    }

    /**
     * Set acumuladoMesAnterior
     *
     * @param float $acumuladoMesAnterior
     *
     * @return TblDadosPlMes
     */
    public function setAcumuladoMesAnterior($acumuladoMesAnterior)
    {
        $this->acumuladoMesAnterior = $acumuladoMesAnterior;

        return $this;
    }

    /**
     * Get acumuladoMesAnterior
     *
     * @return float
     */
    public function getAcumuladoMesAnterior()
    {
        return $this->acumuladoMesAnterior;
    }

    /**
     * Set qtdPlMes
     *
     * @param float $qtdPlMes
     *
     * @return TblDadosPlMes
     */
    public function setQtdPlMes($qtdPlMes)
    {
        $this->qtdPlMes = $qtdPlMes;

        return $this;
    }

    /**
     * Get qtdPlMes
     *
     * @return float
     */
    public function getQtdPlMes()
    {
        return $this->qtdPlMes;
    }

    /**
     * Set valorPlMes
     *
     * @param float $valorPlMes
     *
     * @return TblDadosPlMes
     */
    public function setValorPlMes($valorPlMes)
    {
        $this->valorPlMes = $valorPlMes;

        return $this;
    }

    /**
     * Get valorPlMes
     *
     * @return float
     */
    public function getValorPlMes()
    {
        return $this->valorPlMes;
    }

    /**
     * Set valorPlMesReal
     *
     * @param float $valorPlMesReal
     *
     * @return TblDadosPlMes
     */
    public function setValorPlMesReal($valorPlMesReal)
    {
        $this->valorPlMesReal = $valorPlMesReal;

        return $this;
    }

    /**
     * Get valorPlMesReal
     *
     * @return float
     */
    public function getValorPlMesReal()
    {
        return $this->valorPlMesReal;
    }

    /**
     * Set valorPagoBonus
     *
     * @param float $valorPagoBonus
     *
     * @return TblDadosPlMes
     */
    public function setValorPagoBonus($valorPagoBonus)
    {
        $this->valorPagoBonus = $valorPagoBonus;

        return $this;
    }

    /**
     * Get valorPagoBonus
     *
     * @return float
     */
    public function getValorPagoBonus()
    {
        return $this->valorPagoBonus;
    }
}
