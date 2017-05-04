<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblConsultorDados
 *
 * @ORM\Table(name="tbl_consultor_dados")
 * @ORM\Entity
 */
class TblConsultorDados
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
     * @ORM\Column(name="desconto_cotas_esquerda", type="float", precision=11, scale=2, nullable=true)
     */
    private $descontoCotasEsquerda = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="desconto_cotas_direita", type="float", precision=11, scale=2, nullable=true)
     */
    private $descontoCotasDireita = '0.00';



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
     * @return TblConsultorDados
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
     * Set descontoCotasEsquerda
     *
     * @param float $descontoCotasEsquerda
     *
     * @return TblConsultorDados
     */
    public function setDescontoCotasEsquerda($descontoCotasEsquerda)
    {
        $this->descontoCotasEsquerda = $descontoCotasEsquerda;

        return $this;
    }

    /**
     * Get descontoCotasEsquerda
     *
     * @return float
     */
    public function getDescontoCotasEsquerda()
    {
        return $this->descontoCotasEsquerda;
    }

    /**
     * Set descontoCotasDireita
     *
     * @param float $descontoCotasDireita
     *
     * @return TblConsultorDados
     */
    public function setDescontoCotasDireita($descontoCotasDireita)
    {
        $this->descontoCotasDireita = $descontoCotasDireita;

        return $this;
    }

    /**
     * Get descontoCotasDireita
     *
     * @return float
     */
    public function getDescontoCotasDireita()
    {
        return $this->descontoCotasDireita;
    }
}
