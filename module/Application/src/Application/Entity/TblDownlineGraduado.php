<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblDownlineGraduado
 *
 * @ORM\Table(name="tbl_downline_graduado")
 * @ORM\Entity
 */
class TblDownlineGraduado
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
     * @ORM\Column(name="id_consultor", type="integer", nullable=true)
     */
    private $idConsultor;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_downline", type="integer", nullable=true)
     */
    private $idDownline;

    /**
     * @var integer
     *
     * @ORM\Column(name="graduacao_downline", type="integer", nullable=true)
     */
    private $graduacaoDownline;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_pre_fechamento", type="integer", nullable=true)
     */
    private $idPreFechamento;

    /**
     * @var integer
     *
     * @ORM\Column(name="direto", type="integer", nullable=true)
     */
    private $direto = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data = 'CURRENT_TIMESTAMP';



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
     * @return TblDownlineGraduado
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
     * Set idDownline
     *
     * @param integer $idDownline
     *
     * @return TblDownlineGraduado
     */
    public function setIdDownline($idDownline)
    {
        $this->idDownline = $idDownline;

        return $this;
    }

    /**
     * Get idDownline
     *
     * @return integer
     */
    public function getIdDownline()
    {
        return $this->idDownline;
    }

    /**
     * Set graduacaoDownline
     *
     * @param integer $graduacaoDownline
     *
     * @return TblDownlineGraduado
     */
    public function setGraduacaoDownline($graduacaoDownline)
    {
        $this->graduacaoDownline = $graduacaoDownline;

        return $this;
    }

    /**
     * Get graduacaoDownline
     *
     * @return integer
     */
    public function getGraduacaoDownline()
    {
        return $this->graduacaoDownline;
    }

    /**
     * Set idPreFechamento
     *
     * @param integer $idPreFechamento
     *
     * @return TblDownlineGraduado
     */
    public function setIdPreFechamento($idPreFechamento)
    {
        $this->idPreFechamento = $idPreFechamento;

        return $this;
    }

    /**
     * Get idPreFechamento
     *
     * @return integer
     */
    public function getIdPreFechamento()
    {
        return $this->idPreFechamento;
    }

    /**
     * Set direto
     *
     * @param integer $direto
     *
     * @return TblDownlineGraduado
     */
    public function setDireto($direto)
    {
        $this->direto = $direto;

        return $this;
    }

    /**
     * Get direto
     *
     * @return integer
     */
    public function getDireto()
    {
        return $this->direto;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return TblDownlineGraduado
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
