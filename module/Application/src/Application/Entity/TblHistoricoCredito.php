<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblHistoricoCredito
 *
 * @ORM\Table(name="tbl_historico_credito", indexes={@ORM\Index(name="in_id_consultor", columns={"id_consultor"}), @ORM\Index(name="in_id_fechamento", columns={"id_fechamento"})})
 * @ORM\Entity
 */
class TblHistoricoCredito
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
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_consultor", type="integer", nullable=true)
     */
    private $idConsultor;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=10, scale=0, nullable=true)
     */
    private $valor;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_fechamento", type="integer", nullable=true)
     */
    private $idFechamento;



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
     * @return TblHistoricoCredito
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
     * Set idConsultor
     *
     * @param integer $idConsultor
     *
     * @return TblHistoricoCredito
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
     * Set valor
     *
     * @param float $valor
     *
     * @return TblHistoricoCredito
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
     * Set idFechamento
     *
     * @param integer $idFechamento
     *
     * @return TblHistoricoCredito
     */
    public function setIdFechamento($idFechamento)
    {
        $this->idFechamento = $idFechamento;

        return $this;
    }

    /**
     * Get idFechamento
     *
     * @return integer
     */
    public function getIdFechamento()
    {
        return $this->idFechamento;
    }
}
