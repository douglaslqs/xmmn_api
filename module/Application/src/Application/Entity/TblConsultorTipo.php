<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblConsultorTipo
 *
 * @ORM\Table(name="tbl_consultor_tipo")
 * @ORM\Entity
 */
class TblConsultorTipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipoconsultor", type="integer", nullable=true)
     */
    private $tipoconsultor;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=30, nullable=true)
     */
    private $tipo;

    /**
     * @var float
     *
     * @ORM\Column(name="preco", type="float", precision=11, scale=2, nullable=true)
     */
    private $preco;

    /**
     * @var float
     *
     * @ORM\Column(name="ponto", type="float", precision=11, scale=2, nullable=true)
     */
    private $ponto;

    /**
     * @var string
     *
     * @ORM\Column(name="pin", type="string", length=30, nullable=true)
     */
    private $pin;



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
     * Set tipoconsultor
     *
     * @param integer $tipoconsultor
     *
     * @return TblConsultorTipo
     */
    public function setTipoconsultor($tipoconsultor)
    {
        $this->tipoconsultor = $tipoconsultor;

        return $this;
    }

    /**
     * Get tipoconsultor
     *
     * @return integer
     */
    public function getTipoconsultor()
    {
        return $this->tipoconsultor;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return TblConsultorTipo
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
     * Set preco
     *
     * @param float $preco
     *
     * @return TblConsultorTipo
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get preco
     *
     * @return float
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set ponto
     *
     * @param float $ponto
     *
     * @return TblConsultorTipo
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
     * Set pin
     *
     * @param string $pin
     *
     * @return TblConsultorTipo
     */
    public function setPin($pin)
    {
        $this->pin = $pin;

        return $this;
    }

    /**
     * Get pin
     *
     * @return string
     */
    public function getPin()
    {
        return $this->pin;
    }
}
