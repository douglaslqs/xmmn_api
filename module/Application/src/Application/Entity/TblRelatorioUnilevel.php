<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblRelatorioUnilevel
 *
 * @ORM\Table(name="tbl_relatorio_unilevel")
 * @ORM\Entity
 */
class TblRelatorioUnilevel
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
     * @ORM\Column(name="id_consultor", type="integer", nullable=true)
     */
    private $idConsultor;

    /**
     * @var float
     *
     * @ORM\Column(name="ponto_pessoal", type="float", precision=10, scale=0, nullable=true)
     */
    private $pontoPessoal;

    /**
     * @var float
     *
     * @ORM\Column(name="ponto_adesao", type="float", precision=10, scale=0, nullable=true)
     */
    private $pontoAdesao;

    /**
     * @var float
     *
     * @ORM\Column(name="ponto_ativacao", type="float", precision=10, scale=0, nullable=true)
     */
    private $pontoAtivacao;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_total", type="float", precision=10, scale=0, nullable=true)
     */
    private $valorTotal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;



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
     * @return TblRelatorioUnilevel
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
     * Set pontoPessoal
     *
     * @param float $pontoPessoal
     *
     * @return TblRelatorioUnilevel
     */
    public function setPontoPessoal($pontoPessoal)
    {
        $this->pontoPessoal = $pontoPessoal;

        return $this;
    }

    /**
     * Get pontoPessoal
     *
     * @return float
     */
    public function getPontoPessoal()
    {
        return $this->pontoPessoal;
    }

    /**
     * Set pontoAdesao
     *
     * @param float $pontoAdesao
     *
     * @return TblRelatorioUnilevel
     */
    public function setPontoAdesao($pontoAdesao)
    {
        $this->pontoAdesao = $pontoAdesao;

        return $this;
    }

    /**
     * Get pontoAdesao
     *
     * @return float
     */
    public function getPontoAdesao()
    {
        return $this->pontoAdesao;
    }

    /**
     * Set pontoAtivacao
     *
     * @param float $pontoAtivacao
     *
     * @return TblRelatorioUnilevel
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
     * Set valorTotal
     *
     * @param float $valorTotal
     *
     * @return TblRelatorioUnilevel
     */
    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;

        return $this;
    }

    /**
     * Get valorTotal
     *
     * @return float
     */
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return TblRelatorioUnilevel
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
}
