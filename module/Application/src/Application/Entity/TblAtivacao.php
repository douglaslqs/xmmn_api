<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAtivacao
 *
 * @ORM\Table(name="tbl_ativacao", indexes={@ORM\Index(name="in_id_consultor", columns={"id_consultor"}), @ORM\Index(name="in_patrocinador", columns={"id_patrocinador"})})
 * @ORM\Entity
 */
class TblAtivacao
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
     * @ORM\Column(name="id_patrocinador", type="integer", nullable=false)
     */
    private $idPatrocinador;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $valor;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
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
     * @return TblAtivacao
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
     * Set idPatrocinador
     *
     * @param integer $idPatrocinador
     *
     * @return TblAtivacao
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
     * Set valor
     *
     * @param float $valor
     *
     * @return TblAtivacao
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
     * Set status
     *
     * @param integer $status
     *
     * @return TblAtivacao
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return TblAtivacao
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
