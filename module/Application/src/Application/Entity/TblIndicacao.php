<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblIndicacao
 *
 * @ORM\Table(name="tbl_indicacao")
 * @ORM\Entity
 */
class TblIndicacao
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
     * @ORM\Column(name="id_patrocinador", type="integer", nullable=false)
     */
    private $idPatrocinador;

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
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $valor;

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
     * @var integer
     *
     * @ORM\Column(name="ativo", type="integer", nullable=false)
     */
    private $ativo;



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
     * Set idPatrocinador
     *
     * @param integer $idPatrocinador
     *
     * @return TblIndicacao
     */
    public function setIdPatrocinador($idPatrocinador)
    {
        $this->idPatrocinador = $idPatrocinador;

        return $this;
    }

    /**
     * Get idPatrocinador
     *
     * @return integer
     */
    public function getIdPatrocinador()
    {
        return $this->idPatrocinador;
    }

    /**
     * Set idConsultor
     *
     * @param integer $idConsultor
     *
     * @return TblIndicacao
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
     * @return TblIndicacao
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
     * Set valor
     *
     * @param float $valor
     *
     * @return TblIndicacao
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
     * Set data
     *
     * @param \DateTime $data
     *
     * @return TblIndicacao
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
     * @return TblIndicacao
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
     * Set ativo
     *
     * @param integer $ativo
     *
     * @return TblIndicacao
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
}
