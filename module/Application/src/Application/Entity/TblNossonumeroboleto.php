<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblNossonumeroboleto
 *
 * @ORM\Table(name="tbl_nossonumeroboleto", indexes={@ORM\Index(name="in_id_pedido", columns={"id_pedido"})})
 * @ORM\Entity
 */
class TblNossonumeroboleto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nos_cod", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nosCod;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_pedido", type="integer", nullable=false)
     */
    private $idPedido = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nos_dtdocumento", type="datetime", nullable=false)
     */
    private $nosDtdocumento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nos_dtvencimento", type="datetime", nullable=false)
     */
    private $nosDtvencimento;

    /**
     * @var float
     *
     * @ORM\Column(name="nos_valor_boleto", type="float", precision=10, scale=4, nullable=false)
     */
    private $nosValorBoleto;

    /**
     * @var integer
     *
     * @ORM\Column(name="nos_remessa", type="integer", nullable=true)
     */
    private $nosRemessa = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nos_remessa_data", type="datetime", nullable=false)
     */
    private $nosRemessaData;

    /**
     * @var string
     *
     * @ORM\Column(name="nos_origem", type="string", length=30, nullable=true)
     */
    private $nosOrigem = 'escritorio';

    /**
     * @var integer
     *
     * @ORM\Column(name="boleto_upgrade", type="integer", nullable=true)
     */
    private $boletoUpgrade = '0';



    /**
     * Get nosCod
     *
     * @return integer
     */
    public function getNosCod()
    {
        return $this->nosCod;
    }

    /**
     * Set idPedido
     *
     * @param integer $idPedido
     *
     * @return TblNossonumeroboleto
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
     * Set nosDtdocumento
     *
     * @param \DateTime $nosDtdocumento
     *
     * @return TblNossonumeroboleto
     */
    public function setNosDtdocumento($nosDtdocumento)
    {
        $this->nosDtdocumento = $nosDtdocumento;

        return $this;
    }

    /**
     * Get nosDtdocumento
     *
     * @return \DateTime
     */
    public function getNosDtdocumento()
    {
        return $this->nosDtdocumento;
    }

    /**
     * Set nosDtvencimento
     *
     * @param \DateTime $nosDtvencimento
     *
     * @return TblNossonumeroboleto
     */
    public function setNosDtvencimento($nosDtvencimento)
    {
        $this->nosDtvencimento = $nosDtvencimento;

        return $this;
    }

    /**
     * Get nosDtvencimento
     *
     * @return \DateTime
     */
    public function getNosDtvencimento()
    {
        return $this->nosDtvencimento;
    }

    /**
     * Set nosValorBoleto
     *
     * @param float $nosValorBoleto
     *
     * @return TblNossonumeroboleto
     */
    public function setNosValorBoleto($nosValorBoleto)
    {
        $this->nosValorBoleto = $nosValorBoleto;

        return $this;
    }

    /**
     * Get nosValorBoleto
     *
     * @return float
     */
    public function getNosValorBoleto()
    {
        return $this->nosValorBoleto;
    }

    /**
     * Set nosRemessa
     *
     * @param integer $nosRemessa
     *
     * @return TblNossonumeroboleto
     */
    public function setNosRemessa($nosRemessa)
    {
        $this->nosRemessa = $nosRemessa;

        return $this;
    }

    /**
     * Get nosRemessa
     *
     * @return integer
     */
    public function getNosRemessa()
    {
        return $this->nosRemessa;
    }

    /**
     * Set nosRemessaData
     *
     * @param \DateTime $nosRemessaData
     *
     * @return TblNossonumeroboleto
     */
    public function setNosRemessaData($nosRemessaData)
    {
        $this->nosRemessaData = $nosRemessaData;

        return $this;
    }

    /**
     * Get nosRemessaData
     *
     * @return \DateTime
     */
    public function getNosRemessaData()
    {
        return $this->nosRemessaData;
    }

    /**
     * Set nosOrigem
     *
     * @param string $nosOrigem
     *
     * @return TblNossonumeroboleto
     */
    public function setNosOrigem($nosOrigem)
    {
        $this->nosOrigem = $nosOrigem;

        return $this;
    }

    /**
     * Get nosOrigem
     *
     * @return string
     */
    public function getNosOrigem()
    {
        return $this->nosOrigem;
    }

    /**
     * Set boletoUpgrade
     *
     * @param integer $boletoUpgrade
     *
     * @return TblNossonumeroboleto
     */
    public function setBoletoUpgrade($boletoUpgrade)
    {
        $this->boletoUpgrade = $boletoUpgrade;

        return $this;
    }

    /**
     * Get boletoUpgrade
     *
     * @return integer
     */
    public function getBoletoUpgrade()
    {
        return $this->boletoUpgrade;
    }
}
