<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblResgate
 *
 * @ORM\Table(name="tbl_resgate")
 * @ORM\Entity
 */
class TblResgate
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
     * @var \DateTime
     *
     * @ORM\Column(name="data_resgate", type="date", nullable=false)
     */
    private $dataResgate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=false)
     */
    private $dataCriacao;

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
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=false)
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=30, nullable=false)
     */
    private $status = 'NÃO Pago';



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
     * @return TblResgate
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
     * Set dataResgate
     *
     * @param \DateTime $dataResgate
     *
     * @return TblResgate
     */
    public function setDataResgate($dataResgate)
    {
        $this->dataResgate = $dataResgate;

        return $this;
    }

    /**
     * Get dataResgate
     *
     * @return \DateTime
     */
    public function getDataResgate()
    {
        return $this->dataResgate;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return TblResgate
     */
    public function setDataCriacao($dataCriacao)
    {
        $this->dataCriacao = $dataCriacao;

        return $this;
    }

    /**
     * Get dataCriacao
     *
     * @return \DateTime
     */
    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    /**
     * Set valorIndicacao
     *
     * @param float $valorIndicacao
     *
     * @return TblResgate
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
     * @return TblResgate
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
     * @return TblResgate
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
     * @return TblResgate
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
     * @return TblResgate
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
     * @return TblResgate
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
     * Set total
     *
     * @param float $total
     *
     * @return TblResgate
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
     * Set status
     *
     * @param string $status
     *
     * @return TblResgate
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
}
