<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblNotaFiscal
 *
 * @ORM\Table(name="tbl_nota_fiscal")
 * @ORM\Entity
 */
class TblNotaFiscal
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
     * @ORM\Column(name="id_pedido", type="integer", nullable=true)
     */
    private $idPedido;

    /**
     * @var string
     *
     * @ORM\Column(name="origem_pedido", type="string", length=30, nullable=true)
     */
    private $origemPedido = 'escritorio';

    /**
     * @var string
     *
     * @ORM\Column(name="numero_nf", type="string", length=60, nullable=true)
     */
    private $numeroNf;

    /**
     * @var string
     *
     * @ORM\Column(name="id_nf", type="string", length=60, nullable=true)
     */
    private $idNf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_registro", type="datetime", nullable=true)
     */
    private $dataRegistro = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="cod_erro", type="string", length=30, nullable=true)
     */
    private $codErro;

    /**
     * @var string
     *
     * @ORM\Column(name="msg_erro", type="string", length=60, nullable=true)
     */
    private $msgErro;

    /**
     * @var string
     *
     * @ORM\Column(name="nf_enviada", type="string", length=1, nullable=true)
     */
    private $nfEnviada = '0';



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
     * Set idPedido
     *
     * @param integer $idPedido
     *
     * @return TblNotaFiscal
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
     * Set origemPedido
     *
     * @param string $origemPedido
     *
     * @return TblNotaFiscal
     */
    public function setOrigemPedido($origemPedido)
    {
        $this->origemPedido = $origemPedido;

        return $this;
    }

    /**
     * Get origemPedido
     *
     * @return string
     */
    public function getOrigemPedido()
    {
        return $this->origemPedido;
    }

    /**
     * Set numeroNf
     *
     * @param string $numeroNf
     *
     * @return TblNotaFiscal
     */
    public function setNumeroNf($numeroNf)
    {
        $this->numeroNf = $numeroNf;

        return $this;
    }

    /**
     * Get numeroNf
     *
     * @return string
     */
    public function getNumeroNf()
    {
        return $this->numeroNf;
    }

    /**
     * Set idNf
     *
     * @param string $idNf
     *
     * @return TblNotaFiscal
     */
    public function setIdNf($idNf)
    {
        $this->idNf = $idNf;

        return $this;
    }

    /**
     * Get idNf
     *
     * @return string
     */
    public function getIdNf()
    {
        return $this->idNf;
    }

    /**
     * Set dataRegistro
     *
     * @param \DateTime $dataRegistro
     *
     * @return TblNotaFiscal
     */
    public function setDataRegistro($dataRegistro)
    {
        $this->dataRegistro = $dataRegistro;

        return $this;
    }

    /**
     * Get dataRegistro
     *
     * @return \DateTime
     */
    public function getDataRegistro()
    {
        return $this->dataRegistro;
    }

    /**
     * Set codErro
     *
     * @param string $codErro
     *
     * @return TblNotaFiscal
     */
    public function setCodErro($codErro)
    {
        $this->codErro = $codErro;

        return $this;
    }

    /**
     * Get codErro
     *
     * @return string
     */
    public function getCodErro()
    {
        return $this->codErro;
    }

    /**
     * Set msgErro
     *
     * @param string $msgErro
     *
     * @return TblNotaFiscal
     */
    public function setMsgErro($msgErro)
    {
        $this->msgErro = $msgErro;

        return $this;
    }

    /**
     * Get msgErro
     *
     * @return string
     */
    public function getMsgErro()
    {
        return $this->msgErro;
    }

    /**
     * Set nfEnviada
     *
     * @param string $nfEnviada
     *
     * @return TblNotaFiscal
     */
    public function setNfEnviada($nfEnviada)
    {
        $this->nfEnviada = $nfEnviada;

        return $this;
    }

    /**
     * Get nfEnviada
     *
     * @return string
     */
    public function getNfEnviada()
    {
        return $this->nfEnviada;
    }
}
