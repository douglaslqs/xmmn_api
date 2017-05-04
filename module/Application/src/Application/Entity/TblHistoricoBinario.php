<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblHistoricoBinario
 *
 * @ORM\Table(name="tbl_historico_binario", indexes={@ORM\Index(name="in_id_consultor", columns={"id_consultor"})})
 * @ORM\Entity
 */
class TblHistoricoBinario
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
     * @ORM\Column(name="configuracao_historico", type="integer", nullable=true)
     */
    private $configuracaoHistorico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_historico", type="datetime", nullable=true)
     */
    private $dataHistorico;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_consultor", type="integer", nullable=true)
     */
    private $idConsultor;



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
     * Set configuracaoHistorico
     *
     * @param integer $configuracaoHistorico
     *
     * @return TblHistoricoBinario
     */
    public function setConfiguracaoHistorico($configuracaoHistorico)
    {
        $this->configuracaoHistorico = $configuracaoHistorico;

        return $this;
    }

    /**
     * Get configuracaoHistorico
     *
     * @return integer
     */
    public function getConfiguracaoHistorico()
    {
        return $this->configuracaoHistorico;
    }

    /**
     * Set dataHistorico
     *
     * @param \DateTime $dataHistorico
     *
     * @return TblHistoricoBinario
     */
    public function setDataHistorico($dataHistorico)
    {
        $this->dataHistorico = $dataHistorico;

        return $this;
    }

    /**
     * Get dataHistorico
     *
     * @return \DateTime
     */
    public function getDataHistorico()
    {
        return $this->dataHistorico;
    }

    /**
     * Set idConsultor
     *
     * @param integer $idConsultor
     *
     * @return TblHistoricoBinario
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
}
