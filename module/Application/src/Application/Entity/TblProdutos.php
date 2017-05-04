<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblProdutos
 *
 * @ORM\Table(name="tbl_produtos", indexes={@ORM\Index(name="in_id_categoria", columns={"id_categoria"})})
 * @ORM\Entity
 */
class TblProdutos
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
     * @ORM\Column(name="referencia", type="string", length=255, nullable=true)
     */
    private $referencia = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_categoria", type="integer", nullable=false)
     */
    private $idCategoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="estoque", type="integer", nullable=true)
     */
    private $estoque;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=200, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=100, nullable=true)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="resumo", type="text", length=65535, nullable=true)
     */
    private $resumo;

    /**
     * @var string
     *
     * @ORM\Column(name="sobre", type="text", length=65535, nullable=true)
     */
    private $sobre;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=11, scale=2, nullable=true)
     */
    private $valor = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor_loja", type="float", precision=11, scale=2, nullable=true)
     */
    private $valorLoja = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor_custo", type="float", precision=10, scale=0, nullable=true)
     */
    private $valorCusto;

    /**
     * @var float
     *
     * @ORM\Column(name="ponto", type="float", precision=11, scale=2, nullable=true)
     */
    private $ponto = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="ponto_binario", type="float", precision=11, scale=2, nullable=true)
     */
    private $pontoBinario;

    /**
     * @var float
     *
     * @ORM\Column(name="peso", type="float", precision=11, scale=3, nullable=true)
     */
    private $peso = '0.000';

    /**
     * @var float
     *
     * @ORM\Column(name="largura", type="float", precision=11, scale=2, nullable=true)
     */
    private $largura;

    /**
     * @var float
     *
     * @ORM\Column(name="comprimento", type="float", precision=11, scale=2, nullable=true)
     */
    private $comprimento;

    /**
     * @var float
     *
     * @ORM\Column(name="altura", type="float", precision=11, scale=2, nullable=true)
     */
    private $altura;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=200, nullable=true)
     */
    private $foto;

    /**
     * @var integer
     *
     * @ORM\Column(name="destaque", type="integer", nullable=true)
     */
    private $destaque;

    /**
     * @var integer
     *
     * @ORM\Column(name="ativo", type="integer", nullable=true)
     */
    private $ativo = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="mais_vendido", type="integer", nullable=true)
     */
    private $maisVendido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="excluido", type="integer", nullable=true)
     */
    private $excluido;

    /**
     * @var float
     *
     * @ORM\Column(name="valor1", type="float", precision=11, scale=2, nullable=true)
     */
    private $valor1 = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor2", type="float", precision=11, scale=2, nullable=true)
     */
    private $valor2 = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor3", type="float", precision=11, scale=2, nullable=true)
     */
    private $valor3 = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor4", type="float", precision=11, scale=2, nullable=true)
     */
    private $valor4 = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="valor5", type="float", precision=11, scale=2, nullable=true)
     */
    private $valor5 = '0.00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DtAlteracao", type="datetime", nullable=true)
     */
    private $dtalteracao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DtCadastro", type="datetime", nullable=true)
     */
    private $dtcadastro;



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
     * Set referencia
     *
     * @param string $referencia
     *
     * @return TblProdutos
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set idCategoria
     *
     * @param integer $idCategoria
     *
     * @return TblProdutos
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return integer
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set estoque
     *
     * @param integer $estoque
     *
     * @return TblProdutos
     */
    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;

        return $this;
    }

    /**
     * Get estoque
     *
     * @return integer
     */
    public function getEstoque()
    {
        return $this->estoque;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return TblProdutos
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set marca
     *
     * @param string $marca
     *
     * @return TblProdutos
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set resumo
     *
     * @param string $resumo
     *
     * @return TblProdutos
     */
    public function setResumo($resumo)
    {
        $this->resumo = $resumo;

        return $this;
    }

    /**
     * Get resumo
     *
     * @return string
     */
    public function getResumo()
    {
        return $this->resumo;
    }

    /**
     * Set sobre
     *
     * @param string $sobre
     *
     * @return TblProdutos
     */
    public function setSobre($sobre)
    {
        $this->sobre = $sobre;

        return $this;
    }

    /**
     * Get sobre
     *
     * @return string
     */
    public function getSobre()
    {
        return $this->sobre;
    }

    /**
     * Set valor
     *
     * @param float $valor
     *
     * @return TblProdutos
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
     * Set valorLoja
     *
     * @param float $valorLoja
     *
     * @return TblProdutos
     */
    public function setValorLoja($valorLoja)
    {
        $this->valorLoja = $valorLoja;

        return $this;
    }

    /**
     * Get valorLoja
     *
     * @return float
     */
    public function getValorLoja()
    {
        return $this->valorLoja;
    }

    /**
     * Set valorCusto
     *
     * @param float $valorCusto
     *
     * @return TblProdutos
     */
    public function setValorCusto($valorCusto)
    {
        $this->valorCusto = $valorCusto;

        return $this;
    }

    /**
     * Get valorCusto
     *
     * @return float
     */
    public function getValorCusto()
    {
        return $this->valorCusto;
    }

    /**
     * Set ponto
     *
     * @param float $ponto
     *
     * @return TblProdutos
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
     * Set pontoBinario
     *
     * @param float $pontoBinario
     *
     * @return TblProdutos
     */
    public function setPontoBinario($pontoBinario)
    {
        $this->pontoBinario = $pontoBinario;

        return $this;
    }

    /**
     * Get pontoBinario
     *
     * @return float
     */
    public function getPontoBinario()
    {
        return $this->pontoBinario;
    }

    /**
     * Set peso
     *
     * @param float $peso
     *
     * @return TblProdutos
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
     * Set largura
     *
     * @param float $largura
     *
     * @return TblProdutos
     */
    public function setLargura($largura)
    {
        $this->largura = $largura;

        return $this;
    }

    /**
     * Get largura
     *
     * @return float
     */
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * Set comprimento
     *
     * @param float $comprimento
     *
     * @return TblProdutos
     */
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;

        return $this;
    }

    /**
     * Get comprimento
     *
     * @return float
     */
    public function getComprimento()
    {
        return $this->comprimento;
    }

    /**
     * Set altura
     *
     * @param float $altura
     *
     * @return TblProdutos
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get altura
     *
     * @return float
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return TblProdutos
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set destaque
     *
     * @param integer $destaque
     *
     * @return TblProdutos
     */
    public function setDestaque($destaque)
    {
        $this->destaque = $destaque;

        return $this;
    }

    /**
     * Get destaque
     *
     * @return integer
     */
    public function getDestaque()
    {
        return $this->destaque;
    }

    /**
     * Set ativo
     *
     * @param integer $ativo
     *
     * @return TblProdutos
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Get ativo
     *
     * @return integer
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Set maisVendido
     *
     * @param integer $maisVendido
     *
     * @return TblProdutos
     */
    public function setMaisVendido($maisVendido)
    {
        $this->maisVendido = $maisVendido;

        return $this;
    }

    /**
     * Get maisVendido
     *
     * @return integer
     */
    public function getMaisVendido()
    {
        return $this->maisVendido;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return TblProdutos
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
     * Set excluido
     *
     * @param integer $excluido
     *
     * @return TblProdutos
     */
    public function setExcluido($excluido)
    {
        $this->excluido = $excluido;

        return $this;
    }

    /**
     * Get excluido
     *
     * @return integer
     */
    public function getExcluido()
    {
        return $this->excluido;
    }

    /**
     * Set valor1
     *
     * @param float $valor1
     *
     * @return TblProdutos
     */
    public function setValor1($valor1)
    {
        $this->valor1 = $valor1;

        return $this;
    }

    /**
     * Get valor1
     *
     * @return float
     */
    public function getValor1()
    {
        return $this->valor1;
    }

    /**
     * Set valor2
     *
     * @param float $valor2
     *
     * @return TblProdutos
     */
    public function setValor2($valor2)
    {
        $this->valor2 = $valor2;

        return $this;
    }

    /**
     * Get valor2
     *
     * @return float
     */
    public function getValor2()
    {
        return $this->valor2;
    }

    /**
     * Set valor3
     *
     * @param float $valor3
     *
     * @return TblProdutos
     */
    public function setValor3($valor3)
    {
        $this->valor3 = $valor3;

        return $this;
    }

    /**
     * Get valor3
     *
     * @return float
     */
    public function getValor3()
    {
        return $this->valor3;
    }

    /**
     * Set valor4
     *
     * @param float $valor4
     *
     * @return TblProdutos
     */
    public function setValor4($valor4)
    {
        $this->valor4 = $valor4;

        return $this;
    }

    /**
     * Get valor4
     *
     * @return float
     */
    public function getValor4()
    {
        return $this->valor4;
    }

    /**
     * Set valor5
     *
     * @param float $valor5
     *
     * @return TblProdutos
     */
    public function setValor5($valor5)
    {
        $this->valor5 = $valor5;

        return $this;
    }

    /**
     * Get valor5
     *
     * @return float
     */
    public function getValor5()
    {
        return $this->valor5;
    }

    /**
     * Set dtalteracao
     *
     * @param \DateTime $dtalteracao
     *
     * @return TblProdutos
     */
    public function setDtalteracao($dtalteracao)
    {
        $this->dtalteracao = $dtalteracao;

        return $this;
    }

    /**
     * Get dtalteracao
     *
     * @return \DateTime
     */
    public function getDtalteracao()
    {
        return $this->dtalteracao;
    }

    /**
     * Set dtcadastro
     *
     * @param \DateTime $dtcadastro
     *
     * @return TblProdutos
     */
    public function setDtcadastro($dtcadastro)
    {
        $this->dtcadastro = $dtcadastro;

        return $this;
    }

    /**
     * Get dtcadastro
     *
     * @return \DateTime
     */
    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }
}
