<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCredito
 *
 * @ORM\Table(name="tbl_credito", indexes={@ORM\Index(name="in_id_consultor", columns={"id_consultor"}), @ORM\Index(name="in_id_consultor_trans", columns={"id_consultor_transacao"}), @ORM\Index(name="in_id_pedido", columns={"id_pedido"})})
 * @ORM\Entity
 */
class TblCredito
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
     * @var float
     *
     * @ORM\Column(name="valor_indicacao", type="float", precision=10, scale=0, nullable=false)
     */
    private $valorIndicacao;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_ativacoes", type="float", precision=10, scale=0, nullable=false)
     */
    private $valorAtivacoes;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_rede", type="float", precision=10, scale=0, nullable=false)
     */
    private $valorRede;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_binario", type="float", precision=10, scale=0, nullable=false)
     */
    private $valorBinario;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_ecommerce", type="float", precision=10, scale=0, nullable=false)
     */
    private $valorEcommerce;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_star", type="float", precision=10, scale=0, nullable=false)
     */
    private $valorStar;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=20, nullable=false)
     */
    private $tipo;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=false)
     */
    private $total;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_insercao", type="datetime", nullable=false)
     */
    private $dataInsercao;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=400, nullable=false)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_transacao", type="string", length=50, nullable=true)
     */
    private $tipoTransacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_consultor_transacao", type="integer", nullable=true)
     */
    private $idConsultorTransacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_pedido", type="integer", nullable=true)
     */
    private $idPedido;



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
     * @return TblCredito
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
     * Set valorIndicacao
     *
     * @param float $valorIndicacao
     *
     * @return TblCredito
     */
    public function setValorIndicacao($valorIndicacao)
    {
        $this->valorIndicacao = $valorIndicacao;

        return $this;
    }

    /**
     * Get valorIndicacao
     *
     * @return float
     */
    public function getValorIndicacao()
    {
        return $this->valorIndicacao;
    }

    /**
     * Set valorAtivacoes
     *
     * @param float $valorAtivacoes
     *
     * @return TblCredito
     */
    public function setValorAtivacoes($valorAtivacoes)
    {
        $this->valorAtivacoes = $valorAtivacoes;

        return $this;
    }

    /**
     * Get valorAtivacoes
     *
     * @return float
     */
    public function getValorAtivacoes()
    {
        return $this->valorAtivacoes;
    }

    /**
     * Set valorRede
     *
     * @param float $valorRede
     *
     * @return TblCredito
     */
    public function setValorRede($valorRede)
    {
        $this->valorRede = $valorRede;

        return $this;
    }

    /**
     * Get valorRede
     *
     * @return float
     */
    public function getValorRede()
    {
        return $this->valorRede;
    }

    /**
     * Set valorBinario
     *
     * @param float $valorBinario
     *
     * @return TblCredito
     */
    public function setValorBinario($valorBinario)
    {
        $this->valorBinario = $valorBinario;

        return $this;
    }

    /**
     * Get valorBinario
     *
     * @return float
     */
    public function getValorBinario()
    {
        return $this->valorBinario;
    }

    /**
     * Set valorEcommerce
     *
     * @param float $valorEcommerce
     *
     * @return TblCredito
     */
    public function setValorEcommerce($valorEcommerce)
    {
        $this->valorEcommerce = $valorEcommerce;

        return $this;
    }

    /**
     * Get valorEcommerce
     *
     * @return float
     */
    public function getValorEcommerce()
    {
        return $this->valorEcommerce;
    }

    /**
     * Set valorStar
     *
     * @param float $valorStar
     *
     * @return TblCredito
     */
    public function setValorStar($valorStar)
    {
        $this->valorStar = $valorStar;

        return $this;
    }

    /**
     * Get valorStar
     *
     * @return float
     */
    public function getValorStar()
    {
        return $this->valorStar;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return TblCredito
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
     * Set total
     *
     * @param float $total
     *
     * @return TblCredito
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
     * Set dataInsercao
     *
     * @param \DateTime $dataInsercao
     *
     * @return TblCredito
     */
    public function setDataInsercao($dataInsercao)
    {
        $this->dataInsercao = $dataInsercao;

        return $this;
    }

    /**
     * Get dataInsercao
     *
     * @return \DateTime
     */
    public function getDataInsercao()
    {
        return $this->dataInsercao;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return TblCredito
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set tipoTransacao
     *
     * @param string $tipoTransacao
     *
     * @return TblCredito
     */
    public function setTipoTransacao($tipoTransacao)
    {
        $this->tipoTransacao = $tipoTransacao;

        return $this;
    }

    /**
     * Get tipoTransacao
     *
     * @return string
     */
    public function getTipoTransacao()
    {
        return $this->tipoTransacao;
    }

    /**
     * Set idConsultorTransacao
     *
     * @param integer $idConsultorTransacao
     *
     * @return TblCredito
     */
    public function setIdConsultorTransacao($idConsultorTransacao)
    {
        $this->idConsultorTransacao = $idConsultorTransacao;

        return $this;
    }

    /**
     * Get idConsultorTransacao
     *
     * @return integer
     */
    public function getIdConsultorTransacao()
    {
        return $this->idConsultorTransacao;
    }

    /**
     * Set idPedido
     *
     * @param integer $idPedido
     *
     * @return TblCredito
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
}
