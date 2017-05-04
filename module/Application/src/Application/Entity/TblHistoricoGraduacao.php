<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblHistoricoGraduacao
 *
 * @ORM\Table(name="tbl_historico_graduacao")
 * @ORM\Entity
 */
class TblHistoricoGraduacao
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
     * @ORM\Column(name="patamar_momento", type="integer", nullable=false)
     */
    private $patamarMomento;

    /**
     * @var integer
     *
     * @ORM\Column(name="patamar_obtido", type="integer", nullable=false)
     */
    private $patamarObtido;

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
     * @return TblHistoricoGraduacao
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
     * Set patamarMomento
     *
     * @param integer $patamarMomento
     *
     * @return TblHistoricoGraduacao
     */
    public function setPatamarMomento($patamarMomento)
    {
        $this->patamarMomento = $patamarMomento;

        return $this;
    }

    /**
     * Get patamarMomento
     *
     * @return integer
     */
    public function getPatamarMomento()
    {
        return $this->patamarMomento;
    }

    /**
     * Set patamarObtido
     *
     * @param integer $patamarObtido
     *
     * @return TblHistoricoGraduacao
     */
    public function setPatamarObtido($patamarObtido)
    {
        $this->patamarObtido = $patamarObtido;

        return $this;
    }

    /**
     * Get patamarObtido
     *
     * @return integer
     */
    public function getPatamarObtido()
    {
        return $this->patamarObtido;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return TblHistoricoGraduacao
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
