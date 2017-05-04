<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPedidosEcommerce
 *
 * @ORM\Table(name="tbl_pedidos_ecommerce")
 * @ORM\Entity
 */
class TblPedidosEcommerce
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
     * @ORM\Column(name="tipo_entrega", type="string", length=15, nullable=false)
     */
    private $tipoEntrega = 'PAC';

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=200, nullable=false)
     */
    private $endereco;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=200, nullable=false)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=200, nullable=false)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=50, nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=20, nullable=false)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=20, nullable=false)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="rastreador", type="string", length=20, nullable=false)
     */
    private $rastreador;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=50, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_pagamento", type="string", length=50, nullable=false)
     */
    private $tipoPagamento;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cliente", type="integer", nullable=false)
     */
    private $idCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_consultor", type="integer", nullable=true)
     */
    private $idConsultor;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotal", type="float", precision=10, scale=0, nullable=false)
     */
    private $subtotal;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=false)
     */
    private $total;

    /**
     * @var float
     *
     * @ORM\Column(name="frete", type="float", precision=10, scale=0, nullable=false)
     */
    private $frete;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=50, nullable=false)
     */
    private $status = 'NÃO Pago';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_venc_boleto", type="date", nullable=true)
     */
    private $dtVencBoleto;

    /**
     * @var string
     *
     * @ORM\Column(name="forma_entrega", type="string", length=255, nullable=true)
     */
    private $formaEntrega = 'receber_em_casa';

    /**
     * @var string
     *
     * @ORM\Column(name="complemento", type="string", length=255, nullable=true)
     */
    private $complemento;

    /**
     * @var string
     *
     * @ORM\Column(name="ponto_referencia", type="string", length=255, nullable=true)
     */
    private $pontoReferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="remessa_boleto", type="integer", nullable=true)
     */
    private $remessaBoleto = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_pagamento", type="date", nullable=true)
     */
    private $dataPagamento;

    /**
     * @var string
     *
     * @ORM\Column(name="status_entrega", type="string", length=255, nullable=true)
     */
    private $statusEntrega;

    /**
     * @var integer
     *
     * @ORM\Column(name="fechamento", type="integer", nullable=true)
     */
    private $fechamento = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ponto", type="float", precision=10, scale=0, nullable=true)
     */
    private $ponto;

    /**
     * @var integer
     *
     * @ORM\Column(name="visualizar", type="integer", nullable=true)
     */
    private $visualizar = '1';



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
     * Set tipoEntrega
     *
     * @param string $tipoEntrega
     *
     * @return TblPedidosEcommerce
     */
    public function setTipoEntrega($tipoEntrega)
    {
        $this->tipoEntrega = $tipoEntrega;

        return $this;
    }

    /**
     * Get tipoEntrega
     *
     * @return string
     */
    public function getTipoEntrega()
    {
        return $this->tipoEntrega;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     *
     * @return TblPedidosEcommerce
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco
     *
     * @return string
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return TblPedidosEcommerce
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set bairro
     *
     * @param string $bairro
     *
     * @return TblPedidosEcommerce
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get bairro
     *
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     *
     * @return TblPedidosEcommerce
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return TblPedidosEcommerce
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return TblPedidosEcommerce
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set cep
     *
     * @param string $cep
     *
     * @return TblPedidosEcommerce
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set rastreador
     *
     * @param string $rastreador
     *
     * @return TblPedidosEcommerce
     */
    public function setRastreador($rastreador)
    {
        $this->rastreador = $rastreador;

        return $this;
    }

    /**
     * Get rastreador
     *
     * @return string
     */
    public function getRastreador()
    {
        return $this->rastreador;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return TblPedidosEcommerce
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
     * Set tipoPagamento
     *
     * @param string $tipoPagamento
     *
     * @return TblPedidosEcommerce
     */
    public function setTipoPagamento($tipoPagamento)
    {
        $this->tipoPagamento = $tipoPagamento;

        return $this;
    }

    /**
     * Get tipoPagamento
     *
     * @return string
     */
    public function getTipoPagamento()
    {
        return $this->tipoPagamento;
    }

    /**
     * Set idCliente
     *
     * @param integer $idCliente
     *
     * @return TblPedidosEcommerce
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return integer
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set idConsultor
     *
     * @param integer $idConsultor
     *
     * @return TblPedidosEcommerce
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
     * Set subtotal
     *
     * @param float $subtotal
     *
     * @return TblPedidosEcommerce
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * Get subtotal
     *
     * @return float
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return TblPedidosEcommerce
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set frete
     *
     * @param float $frete
     *
     * @return TblPedidosEcommerce
     */
    public function setFrete($frete)
    {
        $this->frete = $frete;

        return $this;
    }

    /**
     * Get frete
     *
     * @return float
     */
    public function getFrete()
    {
        return $this->frete;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return TblPedidosEcommerce
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
     * Set status
     *
     * @param string $status
     *
     * @return TblPedidosEcommerce
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
     * Set dtVencBoleto
     *
     * @param \DateTime $dtVencBoleto
     *
     * @return TblPedidosEcommerce
     */
    public function setDtVencBoleto($dtVencBoleto)
    {
        $this->dtVencBoleto = $dtVencBoleto;

        return $this;
    }

    /**
     * Get dtVencBoleto
     *
     * @return \DateTime
     */
    public function getDtVencBoleto()
    {
        return $this->dtVencBoleto;
    }

    /**
     * Set formaEntrega
     *
     * @param string $formaEntrega
     *
     * @return TblPedidosEcommerce
     */
    public function setFormaEntrega($formaEntrega)
    {
        $this->formaEntrega = $formaEntrega;

        return $this;
    }

    /**
     * Get formaEntrega
     *
     * @return string
     */
    public function getFormaEntrega()
    {
        return $this->formaEntrega;
    }

    /**
     * Set complemento
     *
     * @param string $complemento
     *
     * @return TblPedidosEcommerce
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Get complemento
     *
     * @return string
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Set pontoReferencia
     *
     * @param string $pontoReferencia
     *
     * @return TblPedidosEcommerce
     */
    public function setPontoReferencia($pontoReferencia)
    {
        $this->pontoReferencia = $pontoReferencia;

        return $this;
    }

    /**
     * Get pontoReferencia
     *
     * @return string
     */
    public function getPontoReferencia()
    {
        return $this->pontoReferencia;
    }

    /**
     * Set remessaBoleto
     *
     * @param integer $remessaBoleto
     *
     * @return TblPedidosEcommerce
     */
    public function setRemessaBoleto($remessaBoleto)
    {
        $this->remessaBoleto = $remessaBoleto;

        return $this;
    }

    /**
     * Get remessaBoleto
     *
     * @return integer
     */
    public function getRemessaBoleto()
    {
        return $this->remessaBoleto;
    }

    /**
     * Set dataPagamento
     *
     * @param \DateTime $dataPagamento
     *
     * @return TblPedidosEcommerce
     */
    public function setDataPagamento($dataPagamento)
    {
        $this->dataPagamento = $dataPagamento;

        return $this;
    }

    /**
     * Get dataPagamento
     *
     * @return \DateTime
     */
    public function getDataPagamento()
    {
        return $this->dataPagamento;
    }

    /**
     * Set statusEntrega
     *
     * @param string $statusEntrega
     *
     * @return TblPedidosEcommerce
     */
    public function setStatusEntrega($statusEntrega)
    {
        $this->statusEntrega = $statusEntrega;

        return $this;
    }

    /**
     * Get statusEntrega
     *
     * @return string
     */
    public function getStatusEntrega()
    {
        return $this->statusEntrega;
    }

    /**
     * Set fechamento
     *
     * @param integer $fechamento
     *
     * @return TblPedidosEcommerce
     */
    public function setFechamento($fechamento)
    {
        $this->fechamento = $fechamento;

        return $this;
    }

    /**
     * Get fechamento
     *
     * @return integer
     */
    public function getFechamento()
    {
        return $this->fechamento;
    }

    /**
     * Set ponto
     *
     * @param float $ponto
     *
     * @return TblPedidosEcommerce
     */
    public function setPonto($ponto)
    {
        $this->ponto = $ponto;

        return $this;
    }

    /**
     * Get ponto
     *
     * @return float
     */
    public function getPonto()
    {
        return $this->ponto;
    }

    /**
     * Set visualizar
     *
     * @param integer $visualizar
     *
     * @return TblPedidosEcommerce
     */
    public function setVisualizar($visualizar)
    {
        $this->visualizar = $visualizar;

        return $this;
    }

    /**
     * Get visualizar
     *
     * @return integer
     */
    public function getVisualizar()
    {
        return $this->visualizar;
    }
}
