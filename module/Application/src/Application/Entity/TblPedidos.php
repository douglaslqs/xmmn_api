<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPedidos
 *
 * @ORM\Table(name="tbl_pedidos", indexes={@ORM\Index(name="in_id_consultor", columns={"id_consultor"}), @ORM\Index(name="in_tipo", columns={"tipo"}), @ORM\Index(name="in_tipo_entrega", columns={"tipo_entrega"}), @ORM\Index(name="in_tipo_pagamento", columns={"tipo_pagamento"}), @ORM\Index(name="in_status", columns={"status"}), @ORM\Index(name="in_forma_entrega", columns={"forma_entrega"}), @ORM\Index(name="in_id_cdn", columns={"id_cdn"}), @ORM\Index(name="in_fechamento", columns={"fechamento"}), @ORM\Index(name="in_data_pagamento", columns={"data_pagamento"}), @ORM\Index(name="in_cancelado", columns={"cancelado"})})
 * @ORM\Entity
 */
class TblPedidos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pedido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPedido;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_entrega", type="string", length=20, nullable=false)
     */
    private $tipoEntrega = 'PAC';

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=200, nullable=true)
     */
    private $endereco;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=200, nullable=true)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=200, nullable=true)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=200, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=200, nullable=true)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=20, nullable=true)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="rastreador", type="string", length=100, nullable=false)
     */
    private $rastreador;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=200, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_pagamento", type="string", length=40, nullable=false)
     */
    private $tipoPagamento;

    /**
     * @var string
     *
     * @ORM\Column(name="bandeira", type="string", length=50, nullable=false)
     */
    private $bandeira;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_consultor", type="integer", nullable=false)
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
    private $status = 'NÃO pago';

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
    private $formaEntrega;

    /**
     * @var float
     *
     * @ORM\Column(name="peso", type="float", precision=5, scale=3, nullable=true)
     */
    private $peso = '0.000';

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
     * @ORM\Column(name="id_cdn", type="integer", nullable=true)
     */
    private $idCdn;

    /**
     * @var integer
     *
     * @ORM\Column(name="remessa_boleto", type="integer", nullable=false)
     */
    private $remessaBoleto = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_pagamento", type="datetime", nullable=true)
     */
    private $dataPagamento;

    /**
     * @var string
     *
     * @ORM\Column(name="status_entrega", type="string", length=200, nullable=true)
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
     * @ORM\Column(name="cancelado", type="integer", nullable=true)
     */
    private $cancelado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="upgrade", type="integer", nullable=true)
     */
    private $upgrade = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=true)
     */
    private $token;

    /**
     * @var integer
     *
     * @ORM\Column(name="downgrade", type="integer", nullable=true)
     */
    private $downgrade = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="visualizar", type="integer", nullable=true)
     */
    private $visualizar = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="credito_utilizado", type="float", precision=10, scale=0, nullable=true)
     */
    private $creditoUtilizado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="app_processado", type="integer", nullable=true)
     */
    private $appProcessado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="status_pagamento", type="integer", nullable=true)
     */
    private $statusPagamento = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ponto_excedente", type="float", precision=11, scale=2, nullable=true)
     */
    private $pontoExcedente;

    /**
     * @var float
     *
     * @ORM\Column(name="ponto_ativacao", type="float", precision=11, scale=2, nullable=true)
     */
    private $pontoAtivacao;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_pedido", type="string", length=255, nullable=true)
     */
    private $tipoPedido;

    /**
     * @var integer
     *
     * @ORM\Column(name="expirado", type="integer", nullable=true)
     */
    private $expirado;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_upgrade", type="integer", nullable=true)
     */
    private $idUpgrade;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_cancelamento", type="datetime", nullable=true)
     */
    private $dataCancelamento;

    /**
     * @var string
     *
     * @ORM\Column(name="status_entrega_bkp", type="string", length=200, nullable=true)
     */
    private $statusEntregaBkp;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_pedido_old", type="integer", nullable=true)
     */
    private $idPedidoOld;



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
     * Set tipoEntrega
     *
     * @param string $tipoEntrega
     *
     * @return TblPedidos
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
     * @return TblPedidos
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
     * @return TblPedidos
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
     * @return TblPedidos
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
     * @return TblPedidos
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
     * @return TblPedidos
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
     * @return TblPedidos
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
     * @return TblPedidos
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
     * @return TblPedidos
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
     * @return TblPedidos
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
     * @return TblPedidos
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
     * Set bandeira
     *
     * @param string $bandeira
     *
     * @return TblPedidos
     */
    public function setBandeira($bandeira)
    {
        $this->bandeira = $bandeira;

        return $this;
    }

    /**
     * Get bandeira
     *
     * @return string
     */
    public function getBandeira()
    {
        return $this->bandeira;
    }

    /**
     * Set idConsultor
     *
     * @param integer $idConsultor
     *
     * @return TblPedidos
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
     * @return TblPedidos
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
     * @return TblPedidos
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
     * @return TblPedidos
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
     * @return TblPedidos
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
     * @return TblPedidos
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
     * @return TblPedidos
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
     * @return TblPedidos
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
     * Set peso
     *
     * @param float $peso
     *
     * @return TblPedidos
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return float
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set complemento
     *
     * @param string $complemento
     *
     * @return TblPedidos
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
     * @return TblPedidos
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
     * Set idCdn
     *
     * @param integer $idCdn
     *
     * @return TblPedidos
     */
    public function setIdCdn($idCdn)
    {
        $this->idCdn = $idCdn;

        return $this;
    }

    /**
     * Get idCdn
     *
     * @return integer
     */
    public function getIdCdn()
    {
        return $this->idCdn;
    }

    /**
     * Set remessaBoleto
     *
     * @param integer $remessaBoleto
     *
     * @return TblPedidos
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
     * @return TblPedidos
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
     * @return TblPedidos
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
     * @return TblPedidos
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
     * @return TblPedidos
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
     * Set cancelado
     *
     * @param integer $cancelado
     *
     * @return TblPedidos
     */
    public function setCancelado($cancelado)
    {
        $this->cancelado = $cancelado;

        return $this;
    }

    /**
     * Get cancelado
     *
     * @return integer
     */
    public function getCancelado()
    {
        return $this->cancelado;
    }

    /**
     * Set upgrade
     *
     * @param integer $upgrade
     *
     * @return TblPedidos
     */
    public function setUpgrade($upgrade)
    {
        $this->upgrade = $upgrade;

        return $this;
    }

    /**
     * Get upgrade
     *
     * @return integer
     */
    public function getUpgrade()
    {
        return $this->upgrade;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return TblPedidos
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set downgrade
     *
     * @param integer $downgrade
     *
     * @return TblPedidos
     */
    public function setDowngrade($downgrade)
    {
        $this->downgrade = $downgrade;

        return $this;
    }

    /**
     * Get downgrade
     *
     * @return integer
     */
    public function getDowngrade()
    {
        return $this->downgrade;
    }

    /**
     * Set visualizar
     *
     * @param integer $visualizar
     *
     * @return TblPedidos
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

    /**
     * Set creditoUtilizado
     *
     * @param float $creditoUtilizado
     *
     * @return TblPedidos
     */
    public function setCreditoUtilizado($creditoUtilizado)
    {
        $this->creditoUtilizado = $creditoUtilizado;

        return $this;
    }

    /**
     * Get creditoUtilizado
     *
     * @return float
     */
    public function getCreditoUtilizado()
    {
        return $this->creditoUtilizado;
    }

    /**
     * Set appProcessado
     *
     * @param integer $appProcessado
     *
     * @return TblPedidos
     */
    public function setAppProcessado($appProcessado)
    {
        $this->appProcessado = $appProcessado;

        return $this;
    }

    /**
     * Get appProcessado
     *
     * @return integer
     */
    public function getAppProcessado()
    {
        return $this->appProcessado;
    }

    /**
     * Set statusPagamento
     *
     * @param integer $statusPagamento
     *
     * @return TblPedidos
     */
    public function setStatusPagamento($statusPagamento)
    {
        $this->statusPagamento = $statusPagamento;

        return $this;
    }

    /**
     * Get statusPagamento
     *
     * @return integer
     */
    public function getStatusPagamento()
    {
        return $this->statusPagamento;
    }

    /**
     * Set pontoExcedente
     *
     * @param float $pontoExcedente
     *
     * @return TblPedidos
     */
    public function setPontoExcedente($pontoExcedente)
    {
        $this->pontoExcedente = $pontoExcedente;

        return $this;
    }

    /**
     * Get pontoExcedente
     *
     * @return float
     */
    public function getPontoExcedente()
    {
        return $this->pontoExcedente;
    }

    /**
     * Set pontoAtivacao
     *
     * @param float $pontoAtivacao
     *
     * @return TblPedidos
     */
    public function setPontoAtivacao($pontoAtivacao)
    {
        $this->pontoAtivacao = $pontoAtivacao;

        return $this;
    }

    /**
     * Get pontoAtivacao
     *
     * @return float
     */
    public function getPontoAtivacao()
    {
        return $this->pontoAtivacao;
    }

    /**
     * Set tipoPedido
     *
     * @param string $tipoPedido
     *
     * @return TblPedidos
     */
    public function setTipoPedido($tipoPedido)
    {
        $this->tipoPedido = $tipoPedido;

        return $this;
    }

    /**
     * Get tipoPedido
     *
     * @return string
     */
    public function getTipoPedido()
    {
        return $this->tipoPedido;
    }

    /**
     * Set expirado
     *
     * @param integer $expirado
     *
     * @return TblPedidos
     */
    public function setExpirado($expirado)
    {
        $this->expirado = $expirado;

        return $this;
    }

    /**
     * Get expirado
     *
     * @return integer
     */
    public function getExpirado()
    {
        return $this->expirado;
    }

    /**
     * Set idUpgrade
     *
     * @param integer $idUpgrade
     *
     * @return TblPedidos
     */
    public function setIdUpgrade($idUpgrade)
    {
        $this->idUpgrade = $idUpgrade;

        return $this;
    }

    /**
     * Get idUpgrade
     *
     * @return integer
     */
    public function getIdUpgrade()
    {
        return $this->idUpgrade;
    }

    /**
     * Set dataCancelamento
     *
     * @param \DateTime $dataCancelamento
     *
     * @return TblPedidos
     */
    public function setDataCancelamento($dataCancelamento)
    {
        $this->dataCancelamento = $dataCancelamento;

        return $this;
    }

    /**
     * Get dataCancelamento
     *
     * @return \DateTime
     */
    public function getDataCancelamento()
    {
        return $this->dataCancelamento;
    }

    /**
     * Set statusEntregaBkp
     *
     * @param string $statusEntregaBkp
     *
     * @return TblPedidos
     */
    public function setStatusEntregaBkp($statusEntregaBkp)
    {
        $this->statusEntregaBkp = $statusEntregaBkp;

        return $this;
    }

    /**
     * Get statusEntregaBkp
     *
     * @return string
     */
    public function getStatusEntregaBkp()
    {
        return $this->statusEntregaBkp;
    }

    /**
     * Set idPedidoOld
     *
     * @param integer $idPedidoOld
     *
     * @return TblPedidos
     */
    public function setIdPedidoOld($idPedidoOld)
    {
        $this->idPedidoOld = $idPedidoOld;

        return $this;
    }

    /**
     * Get idPedidoOld
     *
     * @return integer
     */
    public function getIdPedidoOld()
    {
        return $this->idPedidoOld;
    }
}
