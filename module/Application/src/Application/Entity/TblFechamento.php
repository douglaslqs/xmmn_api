<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblFechamento
 *
 * @ORM\Table(name="tbl_fechamento", indexes={@ORM\Index(name="in_id_consultor", columns={"id_consultor"}), @ORM\Index(name="in_data", columns={"data"}), @ORM\Index(name="in_status", columns={"status"}), @ORM\Index(name="in_mes_corrente", columns={"mes_corrente"}), @ORM\Index(name="in_ciclo", columns={"ciclo_no_mes"})})
 * @ORM\Entity
 */
class TblFechamento
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
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var float
     *
     * @ORM\Column(name="indicacao", type="float", precision=11, scale=2, nullable=true)
     */
    private $indicacao = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="derramamento", type="float", precision=11, scale=2, nullable=true)
     */
    private $derramamento = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="pl", type="float", precision=11, scale=2, nullable=true)
     */
    private $pl = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="ganho_por_equipe", type="float", precision=11, scale=2, nullable=true)
     */
    private $ganhoPorEquipe = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="equiparacao", type="float", precision=11, scale=2, nullable=true)
     */
    private $equiparacao = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="bonus_rede", type="float", precision=11, scale=2, nullable=true)
     */
    private $bonusRede = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="bonus_ecommerce", type="float", precision=11, scale=2, nullable=true)
     */
    private $bonusEcommerce = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="naopago_fechamento_passado", type="float", precision=11, scale=2, nullable=true)
     */
    private $naopagoFechamentoPassado;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status = 'NÃO pago';

    /**
     * @var float
     *
     * @ORM\Column(name="credito", type="float", precision=10, scale=0, nullable=true)
     */
    private $credito;

    /**
     * @var float
     *
     * @ORM\Column(name="dinheiro", type="float", precision=10, scale=0, nullable=true)
     */
    private $dinheiro = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ir", type="float", precision=11, scale=2, nullable=true)
     */
    private $ir = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="a_receber", type="float", precision=11, scale=2, nullable=true)
     */
    private $aReceber = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="mes_corrente", type="string", length=30, nullable=true)
     */
    private $mesCorrente;

    /**
     * @var string
     *
     * @ORM\Column(name="ciclo_no_mes", type="string", length=2, nullable=true)
     */
    private $cicloNoMes;

    /**
     * @var string
     *
     * @ORM\Column(name="ativo_mes", type="string", length=1, nullable=true)
     */
    private $ativoMes = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="bonus_unilevel", type="float", precision=11, scale=2, nullable=true)
     */
    private $bonusUnilevel = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="bonus_lideranca", type="float", precision=11, scale=2, nullable=true)
     */
    private $bonusLideranca = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="bonus_participacao", type="float", precision=11, scale=2, nullable=true)
     */
    private $bonusParticipacao = '0.00';



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
     * @return TblFechamento
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
     * Set data
     *
     * @param \DateTime $data
     *
     * @return TblFechamento
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

    /**
     * Set indicacao
     *
     * @param float $indicacao
     *
     * @return TblFechamento
     */
    public function setIndicacao($indicacao)
    {
        $this->indicacao = $indicacao;

        return $this;
    }

    /**
     * Get indicacao
     *
     * @return float
     */
    public function getIndicacao()
    {
        return $this->indicacao;
    }

    /**
     * Set derramamento
     *
     * @param float $derramamento
     *
     * @return TblFechamento
     */
    public function setDerramamento($derramamento)
    {
        $this->derramamento = $derramamento;

        return $this;
    }

    /**
     * Get derramamento
     *
     * @return float
     */
    public function getDerramamento()
    {
        return $this->derramamento;
    }

    /**
     * Set pl
     *
     * @param float $pl
     *
     * @return TblFechamento
     */
    public function setPl($pl)
    {
        $this->pl = $pl;

        return $this;
    }

    /**
     * Get pl
     *
     * @return float
     */
    public function getPl()
    {
        return $this->pl;
    }

    /**
     * Set ganhoPorEquipe
     *
     * @param float $ganhoPorEquipe
     *
     * @return TblFechamento
     */
    public function setGanhoPorEquipe($ganhoPorEquipe)
    {
        $this->ganhoPorEquipe = $ganhoPorEquipe;

        return $this;
    }

    /**
     * Get ganhoPorEquipe
     *
     * @return float
     */
    public function getGanhoPorEquipe()
    {
        return $this->ganhoPorEquipe;
    }

    /**
     * Set equiparacao
     *
     * @param float $equiparacao
     *
     * @return TblFechamento
     */
    public function setEquiparacao($equiparacao)
    {
        $this->equiparacao = $equiparacao;

        return $this;
    }

    /**
     * Get equiparacao
     *
     * @return float
     */
    public function getEquiparacao()
    {
        return $this->equiparacao;
    }

    /**
     * Set bonusRede
     *
     * @param float $bonusRede
     *
     * @return TblFechamento
     */
    public function setBonusRede($bonusRede)
    {
        $this->bonusRede = $bonusRede;

        return $this;
    }

    /**
     * Get bonusRede
     *
     * @return float
     */
    public function getBonusRede()
    {
        return $this->bonusRede;
    }

    /**
     * Set bonusEcommerce
     *
     * @param float $bonusEcommerce
     *
     * @return TblFechamento
     */
    public function setBonusEcommerce($bonusEcommerce)
    {
        $this->bonusEcommerce = $bonusEcommerce;

        return $this;
    }

    /**
     * Get bonusEcommerce
     *
     * @return float
     */
    public function getBonusEcommerce()
    {
        return $this->bonusEcommerce;
    }

    /**
     * Set naopagoFechamentoPassado
     *
     * @param float $naopagoFechamentoPassado
     *
     * @return TblFechamento
     */
    public function setNaopagoFechamentoPassado($naopagoFechamentoPassado)
    {
        $this->naopagoFechamentoPassado = $naopagoFechamentoPassado;

        return $this;
    }

    /**
     * Get naopagoFechamentoPassado
     *
     * @return float
     */
    public function getNaopagoFechamentoPassado()
    {
        return $this->naopagoFechamentoPassado;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return TblFechamento
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

    /**
     * Set credito
     *
     * @param float $credito
     *
     * @return TblFechamento
     */
    public function setCredito($credito)
    {
        $this->credito = $credito;

        return $this;
    }

    /**
     * Get credito
     *
     * @return float
     */
    public function getCredito()
    {
        return $this->credito;
    }

    /**
     * Set dinheiro
     *
     * @param float $dinheiro
     *
     * @return TblFechamento
     */
    public function setDinheiro($dinheiro)
    {
        $this->dinheiro = $dinheiro;

        return $this;
    }

    /**
     * Get dinheiro
     *
     * @return float
     */
    public function getDinheiro()
    {
        return $this->dinheiro;
    }

    /**
     * Set ir
     *
     * @param float $ir
     *
     * @return TblFechamento
     */
    public function setIr($ir)
    {
        $this->ir = $ir;

        return $this;
    }

    /**
     * Get ir
     *
     * @return float
     */
    public function getIr()
    {
        return $this->ir;
    }

    /**
     * Set aReceber
     *
     * @param float $aReceber
     *
     * @return TblFechamento
     */
    public function setAReceber($aReceber)
    {
        $this->aReceber = $aReceber;

        return $this;
    }

    /**
     * Get aReceber
     *
     * @return float
     */
    public function getAReceber()
    {
        return $this->aReceber;
    }

    /**
     * Set mesCorrente
     *
     * @param string $mesCorrente
     *
     * @return TblFechamento
     */
    public function setMesCorrente($mesCorrente)
    {
        $this->mesCorrente = $mesCorrente;

        return $this;
    }

    /**
     * Get mesCorrente
     *
     * @return string
     */
    public function getMesCorrente()
    {
        return $this->mesCorrente;
    }

    /**
     * Set cicloNoMes
     *
     * @param string $cicloNoMes
     *
     * @return TblFechamento
     */
    public function setCicloNoMes($cicloNoMes)
    {
        $this->cicloNoMes = $cicloNoMes;

        return $this;
    }

    /**
     * Get cicloNoMes
     *
     * @return string
     */
    public function getCicloNoMes()
    {
        return $this->cicloNoMes;
    }

    /**
     * Set ativoMes
     *
     * @param string $ativoMes
     *
     * @return TblFechamento
     */
    public function setAtivoMes($ativoMes)
    {
        $this->ativoMes = $ativoMes;

        return $this;
    }

    /**
     * Get ativoMes
     *
     * @return string
     */
    public function getAtivoMes()
    {
        return $this->ativoMes;
    }

    /**
     * Set bonusUnilevel
     *
     * @param float $bonusUnilevel
     *
     * @return TblFechamento
     */
    public function setBonusUnilevel($bonusUnilevel)
    {
        $this->bonusUnilevel = $bonusUnilevel;

        return $this;
    }

    /**
     * Get bonusUnilevel
     *
     * @return float
     */
    public function getBonusUnilevel()
    {
        return $this->bonusUnilevel;
    }

    /**
     * Set bonusLideranca
     *
     * @param float $bonusLideranca
     *
     * @return TblFechamento
     */
    public function setBonusLideranca($bonusLideranca)
    {
        $this->bonusLideranca = $bonusLideranca;

        return $this;
    }

    /**
     * Get bonusLideranca
     *
     * @return float
     */
    public function getBonusLideranca()
    {
        return $this->bonusLideranca;
    }

    /**
     * Set bonusParticipacao
     *
     * @param float $bonusParticipacao
     *
     * @return TblFechamento
     */
    public function setBonusParticipacao($bonusParticipacao)
    {
        $this->bonusParticipacao = $bonusParticipacao;

        return $this;
    }

    /**
     * Get bonusParticipacao
     *
     * @return float
     */
    public function getBonusParticipacao()
    {
        return $this->bonusParticipacao;
    }
}
