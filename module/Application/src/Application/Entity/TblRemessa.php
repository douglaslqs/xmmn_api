<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblRemessa
 *
 * @ORM\Table(name="tbl_remessa")
 * @ORM\Entity
 */
class TblRemessa
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
     * @ORM\Column(name="id_remessa", type="integer", nullable=true)
     */
    private $idRemessa;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=50, nullable=false)
     */
    private $tipo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_remessa", type="datetime", nullable=true)
     */
    private $dataRemessa = 'CURRENT_TIMESTAMP';



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
     * Set idRemessa
     *
     * @param integer $idRemessa
     *
     * @return TblRemessa
     */
    public function setIdRemessa($idRemessa)
    {
        $this->idRemessa = $idRemessa;

        return $this;
    }

    /**
     * Get idRemessa
     *
     * @return integer
     */
    public function getIdRemessa()
    {
        return $this->idRemessa;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return TblRemessa
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
     * Set dataRemessa
     *
     * @param \DateTime $dataRemessa
     *
     * @return TblRemessa
     */
    public function setDataRemessa($dataRemessa)
    {
        $this->dataRemessa = $dataRemessa;

        return $this;
    }

    /**
     * Get dataRemessa
     *
     * @return \DateTime
     */
    public function getDataRemessa()
    {
        return $this->dataRemessa;
    }
}
