<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPagseguroTransacao
 *
 * @ORM\Table(name="tbl_pagseguro_transacao")
 * @ORM\Entity
 */
class TblPagseguroTransacao
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
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_transacao", type="datetime", nullable=true)
     */
    private $dataTransacao = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_id", type="string", length=255, nullable=true)
     */
    private $transactionId;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_pedido", type="string", length=255, nullable=true)
     */
    private $tipoPedido;

    /**
     * @var string
     *
     * @ORM\Column(name="url_boleto", type="string", length=255, nullable=true)
     */
    private $urlBoleto;

    /**
     * @var string
     *
     * @ORM\Column(name="excluido", type="string", length=1, nullable=true)
     */
    private $excluido = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=3, nullable=true)
     */
    private $status;



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
     * @return TblPagseguroTransacao
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
     * Set code
     *
     * @param string $code
     *
     * @return TblPagseguroTransacao
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set dataTransacao
     *
     * @param \DateTime $dataTransacao
     *
     * @return TblPagseguroTransacao
     */
    public function setDataTransacao($dataTransacao)
    {
        $this->dataTransacao = $dataTransacao;

        return $this;
    }

    /**
     * Get dataTransacao
     *
     * @return \DateTime
     */
    public function getDataTransacao()
    {
        return $this->dataTransacao;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return TblPagseguroTransacao
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set transactionId
     *
     * @param string $transactionId
     *
     * @return TblPagseguroTransacao
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * Get transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Set tipoPedido
     *
     * @param string $tipoPedido
     *
     * @return TblPagseguroTransacao
     */
    public function setTipoPedido($tipoPedido)
    {
        $this->tipoPedido = $tipoPedido;

        return $this;
    }

    /**
     * Get tipoPedido
     *
     * @return string
     */
    public function getTipoPedido()
    {
        return $this->tipoPedido;
    }

    /**
     * Set urlBoleto
     *
     * @param string $urlBoleto
     *
     * @return TblPagseguroTransacao
     */
    public function setUrlBoleto($urlBoleto)
    {
        $this->urlBoleto = $urlBoleto;

        return $this;
    }

    /**
     * Get urlBoleto
     *
     * @return string
     */
    public function getUrlBoleto()
    {
        return $this->urlBoleto;
    }

    /**
     * Set excluido
     *
     * @param string $excluido
     *
     * @return TblPagseguroTransacao
     */
    public function setExcluido($excluido)
    {
        $this->excluido = $excluido;

        return $this;
    }

    /**
     * Get excluido
     *
     * @return string
     */
    public function getExcluido()
    {
        return $this->excluido;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return TblPagseguroTransacao
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
}
