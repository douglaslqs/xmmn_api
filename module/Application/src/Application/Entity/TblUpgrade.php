<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblUpgrade
 *
 * @ORM\Table(name="tbl_upgrade", indexes={@ORM\Index(name="in_id_consultor", columns={"id_consultor"}), @ORM\Index(name="in_id_pedido", columns={"id_pedido"})})
 * @ORM\Entity
 */
class TblUpgrade
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
     * @var integer
     *
     * @ORM\Column(name="id_pedido", type="integer", nullable=false)
     */
    private $idPedido;

    /**
     * @var string
     *
     * @ORM\Column(name="pedido_pago_antes_upgrade", type="string", length=1, nullable=true)
     */
    private $pedidoPagoAntesUpgrade = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_produto", type="integer", nullable=true)
     */
    private $idProduto;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=24, scale=2, nullable=true)
     */
    private $valor;

    /**
     * @var float
     *
     * @ORM\Column(name="desconto", type="float", precision=11, scale=2, nullable=true)
     */
    private $desconto = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="upgrade", type="integer", nullable=false)
     */
    private $upgrade;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status = 'NÃO pago';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_produto_anterior", type="integer", nullable=true)
     */
    private $idProdutoAnterior;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_anterior", type="float", precision=24, scale=2, nullable=true)
     */
    private $valorAnterior;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_pagamento_anterior", type="datetime", nullable=true)
     */
    private $dataPagamentoAnterior;

    /**
     * @var float
     *
     * @ORM\Column(name="frete", type="float", precision=24, scale=2, nullable=true)
     */
    private $frete;

    /**
     * @var string
     *
     * @ORM\Column(name="forma_entrega", type="string", length=255, nullable=true)
     */
    private $formaEntrega;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=255, nullable=true)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=60, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=255, nullable=true)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=255, nullable=true)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=255, nullable=true)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=255, nullable=true)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento", type="string", length=255, nullable=true)
     */
    private $complemento;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_pagamento", type="string", length=60, nullable=true)
     */
    private $tipoPagamento;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cdn", type="integer", nullable=true)
     */
    private $idCdn;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_entrega", type="string", length=30, nullable=true)
     */
    private $tipoEntrega;

    /**
     * @var string
     *
     * @ORM\Column(name="cancelado", type="string", length=1, nullable=true)
     */
    private $cancelado = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_cancelamento", type="datetime", nullable=true)
     */
    private $dataCancelamento;



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
     * @return TblUpgrade
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
     * Set idPedido
     *
     * @param integer $idPedido
     *
     * @return TblUpgrade
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
     * Set pedidoPagoAntesUpgrade
     *
     * @param string $pedidoPagoAntesUpgrade
     *
     * @return TblUpgrade
     */
    public function setPedidoPagoAntesUpgrade($pedidoPagoAntesUpgrade)
    {
        $this->pedidoPagoAntesUpgrade = $pedidoPagoAntesUpgrade;

        return $this;
    }

    /**
     * Get pedidoPagoAntesUpgrade
     *
     * @return string
     */
    public function getPedidoPagoAntesUpgrade()
    {
        return $this->pedidoPagoAntesUpgrade;
    }

    /**
     * Set idProduto
     *
     * @param integer $idProduto
     *
     * @return TblUpgrade
     */
    public function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;

        return $this;
    }

    /**
     * Get idProduto
     *
     * @return integer
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * Set valor
     *
     * @param float $valor
     *
     * @return TblUpgrade
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set desconto
     *
     * @param float $desconto
     *
     * @return TblUpgrade
     */
    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;

        return $this;
    }

    /**
     * Get desconto
     *
     * @return float
     */
    public function getDesconto()
    {
        return $this->desconto;
    }

    /**
     * Set upgrade
     *
     * @param integer $upgrade
     *
     * @return TblUpgrade
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
     * Set data
     *
     * @param \DateTime $data
     *
     * @return TblUpgrade
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
     * @return TblUpgrade
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
     * Set idProdutoAnterior
     *
     * @param integer $idProdutoAnterior
     *
     * @return TblUpgrade
     */
    public function setIdProdutoAnterior($idProdutoAnterior)
    {
        $this->idProdutoAnterior = $idProdutoAnterior;

        return $this;
    }

    /**
     * Get idProdutoAnterior
     *
     * @return integer
     */
    public function getIdProdutoAnterior()
    {
        return $this->idProdutoAnterior;
    }

    /**
     * Set valorAnterior
     *
     * @param float $valorAnterior
     *
     * @return TblUpgrade
     */
    public function setValorAnterior($valorAnterior)
    {
        $this->valorAnterior = $valorAnterior;

        return $this;
    }

    /**
     * Get valorAnterior
     *
     * @return float
     */
    public function getValorAnterior()
    {
        return $this->valorAnterior;
    }

    /**
     * Set dataPagamentoAnterior
     *
     * @param \DateTime $dataPagamentoAnterior
     *
     * @return TblUpgrade
     */
    public function setDataPagamentoAnterior($dataPagamentoAnterior)
    {
        $this->dataPagamentoAnterior = $dataPagamentoAnterior;

        return $this;
    }

    /**
     * Get dataPagamentoAnterior
     *
     * @return \DateTime
     */
    public function getDataPagamentoAnterior()
    {
        return $this->dataPagamentoAnterior;
    }

    /**
     * Set frete
     *
     * @param float $frete
     *
     * @return TblUpgrade
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
     * Set formaEntrega
     *
     * @param string $formaEntrega
     *
     * @return TblUpgrade
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
     * Set endereco
     *
     * @param string $endereco
     *
     * @return TblUpgrade
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
     * @param string $numero
     *
     * @return TblUpgrade
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
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
     * @return TblUpgrade
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
     * @return TblUpgrade
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
     * @return TblUpgrade
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
     * @return TblUpgrade
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
     * @return TblUpgrade
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
     * Set complemento
     *
     * @param string $complemento
     *
     * @return TblUpgrade
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
     * Set tipoPagamento
     *
     * @param string $tipoPagamento
     *
     * @return TblUpgrade
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
     * Set idCdn
     *
     * @param integer $idCdn
     *
     * @return TblUpgrade
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
     * Set tipoEntrega
     *
     * @param string $tipoEntrega
     *
     * @return TblUpgrade
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
     * Set cancelado
     *
     * @param string $cancelado
     *
     * @return TblUpgrade
     */
    public function setCancelado($cancelado)
    {
        $this->cancelado = $cancelado;

        return $this;
    }

    /**
     * Get cancelado
     *
     * @return string
     */
    public function getCancelado()
    {
        return $this->cancelado;
    }

    /**
     * Set dataCancelamento
     *
     * @param \DateTime $dataCancelamento
     *
     * @return TblUpgrade
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
}
