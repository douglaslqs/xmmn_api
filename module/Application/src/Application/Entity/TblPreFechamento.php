<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPreFechamento
 *
 * @ORM\Table(name="tbl_pre_fechamento", indexes={@ORM\Index(name="in_id_consultor", columns={"id_consultor"}), @ORM\Index(name="in_login_consultor", columns={"login_consultor"}), @ORM\Index(name="in_mes_corrente", columns={"mes_corrente"}), @ORM\Index(name="in_especial", columns={"especial"}), @ORM\Index(name="in_patrocinador", columns={"patrocinador_consultor"}), @ORM\Index(name="in_ciclo", columns={"ciclo_no_mes"})})
 * @ORM\Entity
 */
class TblPreFechamento
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
     * @var integer
     *
     * @ORM\Column(name="adesao", type="integer", nullable=true)
     */
    private $adesao = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ativo", type="integer", nullable=true)
     */
    private $ativo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pontuacao_pessoal", type="float", precision=10, scale=0, nullable=true)
     */
    private $pontuacaoPessoal;

    /**
     * @var float
     *
     * @ORM\Column(name="pontuacao_recompra", type="float", precision=10, scale=0, nullable=true)
     */
    private $pontuacaoRecompra;

    /**
     * @var float
     *
     * @ORM\Column(name="pontuacao_adesao", type="float", precision=10, scale=0, nullable=true)
     */
    private $pontuacaoAdesao;

    /**
     * @var float
     *
     * @ORM\Column(name="pontuacao_ativacao", type="float", precision=10, scale=0, nullable=true)
     */
    private $pontuacaoAtivacao;

    /**
     * @var float
     *
     * @ORM\Column(name="pontuacao_linha", type="float", precision=10, scale=0, nullable=true)
     */
    private $pontuacaoLinha;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade_bronzes", type="integer", nullable=true)
     */
    private $quantidadeBronzes;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade_linhas_bronzes", type="integer", nullable=true)
     */
    private $quantidadeLinhasBronzes;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade_diamantes", type="integer", nullable=true)
     */
    private $quantidadeDiamantes;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade_linhas_diamantes", type="integer", nullable=true)
     */
    private $quantidadeLinhasDiamantes;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade_duplos_diamantes", type="integer", nullable=true)
     */
    private $quantidadeDuplosDiamantes;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade_linhas_duplos_diamantes", type="integer", nullable=true)
     */
    private $quantidadeLinhasDuplosDiamantes;

    /**
     * @var integer
     *
     * @ORM\Column(name="graduacao", type="integer", nullable=true)
     */
    private $graduacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="patrocinador_consultor", type="integer", nullable=true)
     */
    private $patrocinadorConsultor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ultima_atualizacao", type="datetime", nullable=true)
     */
    private $ultimaAtualizacao;

    /**
     * @var string
     *
     * @ORM\Column(name="login_consultor", type="string", length=255, nullable=true)
     */
    private $loginConsultor;

    /**
     * @var string
     *
     * @ORM\Column(name="mes_corrente", type="string", length=255, nullable=true)
     */
    private $mesCorrente;

    /**
     * @var string
     *
     * @ORM\Column(name="ciclo_no_mes", type="string", length=2, nullable=true)
     */
    private $cicloNoMes;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_indicacao", type="float", precision=10, scale=0, nullable=true)
     */
    private $valorIndicacao;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_ativacao", type="float", precision=10, scale=0, nullable=true)
     */
    private $valorAtivacao;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=500, nullable=true)
     */
    private $observacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="especial", type="integer", nullable=true)
     */
    private $especial = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="direita", type="float", precision=10, scale=0, nullable=true)
     */
    private $direita;

    /**
     * @var float
     *
     * @ORM\Column(name="esquerda", type="float", precision=10, scale=0, nullable=true)
     */
    private $esquerda;

    /**
     * @var float
     *
     * @ORM\Column(name="bonus_rede", type="float", precision=24, scale=2, nullable=true)
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
     * @ORM\Column(name="bonus_lideranca", type="float", precision=24, scale=2, nullable=true)
     */
    private $bonusLideranca = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="bonus_unilevel", type="float", precision=11, scale=2, nullable=true)
     */
    private $bonusUnilevel = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="bonus_participacao", type="float", precision=11, scale=2, nullable=true)
     */
    private $bonusParticipacao = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="bonus_derramamento", type="float", precision=11, scale=2, nullable=true)
     */
    private $bonusDerramamento = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pago", type="string", length=1, nullable=true)
     */
    private $pago = '0';



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
     * @return TblPreFechamento
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
     * Set adesao
     *
     * @param integer $adesao
     *
     * @return TblPreFechamento
     */
    public function setAdesao($adesao)
    {
        $this->adesao = $adesao;

        return $this;
    }

    /**
     * Get adesao
     *
     * @return integer
     */
    public function getAdesao()
    {
        return $this->adesao;
    }

    /**
     * Set ativo
     *
     * @param integer $ativo
     *
     * @return TblPreFechamento
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Get ativo
     *
     * @return integer
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Set pontuacaoPessoal
     *
     * @param float $pontuacaoPessoal
     *
     * @return TblPreFechamento
     */
    public function setPontuacaoPessoal($pontuacaoPessoal)
    {
        $this->pontuacaoPessoal = $pontuacaoPessoal;

        return $this;
    }

    /**
     * Get pontuacaoPessoal
     *
     * @return float
     */
    public function getPontuacaoPessoal()
    {
        return $this->pontuacaoPessoal;
    }

    /**
     * Set pontuacaoRecompra
     *
     * @param float $pontuacaoRecompra
     *
     * @return TblPreFechamento
     */
    public function setPontuacaoRecompra($pontuacaoRecompra)
    {
        $this->pontuacaoRecompra = $pontuacaoRecompra;

        return $this;
    }

    /**
     * Get pontuacaoRecompra
     *
     * @return float
     */
    public function getPontuacaoRecompra()
    {
        return $this->pontuacaoRecompra;
    }

    /**
     * Set pontuacaoAdesao
     *
     * @param float $pontuacaoAdesao
     *
     * @return TblPreFechamento
     */
    public function setPontuacaoAdesao($pontuacaoAdesao)
    {
        $this->pontuacaoAdesao = $pontuacaoAdesao;

        return $this;
    }

    /**
     * Get pontuacaoAdesao
     *
     * @return float
     */
    public function getPontuacaoAdesao()
    {
        return $this->pontuacaoAdesao;
    }

    /**
     * Set pontuacaoAtivacao
     *
     * @param float $pontuacaoAtivacao
     *
     * @return TblPreFechamento
     */
    public function setPontuacaoAtivacao($pontuacaoAtivacao)
    {
        $this->pontuacaoAtivacao = $pontuacaoAtivacao;

        return $this;
    }

    /**
     * Get pontuacaoAtivacao
     *
     * @return float
     */
    public function getPontuacaoAtivacao()
    {
        return $this->pontuacaoAtivacao;
    }

    /**
     * Set pontuacaoLinha
     *
     * @param float $pontuacaoLinha
     *
     * @return TblPreFechamento
     */
    public function setPontuacaoLinha($pontuacaoLinha)
    {
        $this->pontuacaoLinha = $pontuacaoLinha;

        return $this;
    }

    /**
     * Get pontuacaoLinha
     *
     * @return float
     */
    public function getPontuacaoLinha()
    {
        return $this->pontuacaoLinha;
    }

    /**
     * Set quantidadeBronzes
     *
     * @param integer $quantidadeBronzes
     *
     * @return TblPreFechamento
     */
    public function setQuantidadeBronzes($quantidadeBronzes)
    {
        $this->quantidadeBronzes = $quantidadeBronzes;

        return $this;
    }

    /**
     * Get quantidadeBronzes
     *
     * @return integer
     */
    public function getQuantidadeBronzes()
    {
        return $this->quantidadeBronzes;
    }

    /**
     * Set quantidadeLinhasBronzes
     *
     * @param integer $quantidadeLinhasBronzes
     *
     * @return TblPreFechamento
     */
    public function setQuantidadeLinhasBronzes($quantidadeLinhasBronzes)
    {
        $this->quantidadeLinhasBronzes = $quantidadeLinhasBronzes;

        return $this;
    }

    /**
     * Get quantidadeLinhasBronzes
     *
     * @return integer
     */
    public function getQuantidadeLinhasBronzes()
    {
        return $this->quantidadeLinhasBronzes;
    }

    /**
     * Set quantidadeDiamantes
     *
     * @param integer $quantidadeDiamantes
     *
     * @return TblPreFechamento
     */
    public function setQuantidadeDiamantes($quantidadeDiamantes)
    {
        $this->quantidadeDiamantes = $quantidadeDiamantes;

        return $this;
    }

    /**
     * Get quantidadeDiamantes
     *
     * @return integer
     */
    public function getQuantidadeDiamantes()
    {
        return $this->quantidadeDiamantes;
    }

    /**
     * Set quantidadeLinhasDiamantes
     *
     * @param integer $quantidadeLinhasDiamantes
     *
     * @return TblPreFechamento
     */
    public function setQuantidadeLinhasDiamantes($quantidadeLinhasDiamantes)
    {
        $this->quantidadeLinhasDiamantes = $quantidadeLinhasDiamantes;

        return $this;
    }

    /**
     * Get quantidadeLinhasDiamantes
     *
     * @return integer
     */
    public function getQuantidadeLinhasDiamantes()
    {
        return $this->quantidadeLinhasDiamantes;
    }

    /**
     * Set quantidadeDuplosDiamantes
     *
     * @param integer $quantidadeDuplosDiamantes
     *
     * @return TblPreFechamento
     */
    public function setQuantidadeDuplosDiamantes($quantidadeDuplosDiamantes)
    {
        $this->quantidadeDuplosDiamantes = $quantidadeDuplosDiamantes;

        return $this;
    }

    /**
     * Get quantidadeDuplosDiamantes
     *
     * @return integer
     */
    public function getQuantidadeDuplosDiamantes()
    {
        return $this->quantidadeDuplosDiamantes;
    }

    /**
     * Set quantidadeLinhasDuplosDiamantes
     *
     * @param integer $quantidadeLinhasDuplosDiamantes
     *
     * @return TblPreFechamento
     */
    public function setQuantidadeLinhasDuplosDiamantes($quantidadeLinhasDuplosDiamantes)
    {
        $this->quantidadeLinhasDuplosDiamantes = $quantidadeLinhasDuplosDiamantes;

        return $this;
    }

    /**
     * Get quantidadeLinhasDuplosDiamantes
     *
     * @return integer
     */
    public function getQuantidadeLinhasDuplosDiamantes()
    {
        return $this->quantidadeLinhasDuplosDiamantes;
    }

    /**
     * Set graduacao
     *
     * @param integer $graduacao
     *
     * @return TblPreFechamento
     */
    public function setGraduacao($graduacao)
    {
        $this->graduacao = $graduacao;

        return $this;
    }

    /**
     * Get graduacao
     *
     * @return integer
     */
    public function getGraduacao()
    {
        return $this->graduacao;
    }

    /**
     * Set patrocinadorConsultor
     *
     * @param integer $patrocinadorConsultor
     *
     * @return TblPreFechamento
     */
    public function setPatrocinadorConsultor($patrocinadorConsultor)
    {
        $this->patrocinadorConsultor = $patrocinadorConsultor;

        return $this;
    }

    /**
     * Get patrocinadorConsultor
     *
     * @return integer
     */
    public function getPatrocinadorConsultor()
    {
        return $this->patrocinadorConsultor;
    }

    /**
     * Set ultimaAtualizacao
     *
     * @param \DateTime $ultimaAtualizacao
     *
     * @return TblPreFechamento
     */
    public function setUltimaAtualizacao($ultimaAtualizacao)
    {
        $this->ultimaAtualizacao = $ultimaAtualizacao;

        return $this;
    }

    /**
     * Get ultimaAtualizacao
     *
     * @return \DateTime
     */
    public function getUltimaAtualizacao()
    {
        return $this->ultimaAtualizacao;
    }

    /**
     * Set loginConsultor
     *
     * @param string $loginConsultor
     *
     * @return TblPreFechamento
     */
    public function setLoginConsultor($loginConsultor)
    {
        $this->loginConsultor = $loginConsultor;

        return $this;
    }

    /**
     * Get loginConsultor
     *
     * @return string
     */
    public function getLoginConsultor()
    {
        return $this->loginConsultor;
    }

    /**
     * Set mesCorrente
     *
     * @param string $mesCorrente
     *
     * @return TblPreFechamento
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
     * @return TblPreFechamento
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
     * Set valorIndicacao
     *
     * @param float $valorIndicacao
     *
     * @return TblPreFechamento
     */
    public function setValorIndicacao($valorIndicacao)
    {
        $this->valorIndicacao = $valorIndicacao;

        return $this;
    }

    /**
     * Get valorIndicacao
     *
     * @return float
     */
    public function getValorIndicacao()
    {
        return $this->valorIndicacao;
    }

    /**
     * Set valorAtivacao
     *
     * @param float $valorAtivacao
     *
     * @return TblPreFechamento
     */
    public function setValorAtivacao($valorAtivacao)
    {
        $this->valorAtivacao = $valorAtivacao;

        return $this;
    }

    /**
     * Get valorAtivacao
     *
     * @return float
     */
    public function getValorAtivacao()
    {
        return $this->valorAtivacao;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return TblPreFechamento
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set especial
     *
     * @param integer $especial
     *
     * @return TblPreFechamento
     */
    public function setEspecial($especial)
    {
        $this->especial = $especial;

        return $this;
    }

    /**
     * Get especial
     *
     * @return integer
     */
    public function getEspecial()
    {
        return $this->especial;
    }

    /**
     * Set direita
     *
     * @param float $direita
     *
     * @return TblPreFechamento
     */
    public function setDireita($direita)
    {
        $this->direita = $direita;

        return $this;
    }

    /**
     * Get direita
     *
     * @return float
     */
    public function getDireita()
    {
        return $this->direita;
    }

    /**
     * Set esquerda
     *
     * @param float $esquerda
     *
     * @return TblPreFechamento
     */
    public function setEsquerda($esquerda)
    {
        $this->esquerda = $esquerda;

        return $this;
    }

    /**
     * Get esquerda
     *
     * @return float
     */
    public function getEsquerda()
    {
        return $this->esquerda;
    }

    /**
     * Set bonusRede
     *
     * @param float $bonusRede
     *
     * @return TblPreFechamento
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
     * @return TblPreFechamento
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
     * Set bonusLideranca
     *
     * @param float $bonusLideranca
     *
     * @return TblPreFechamento
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
     * Set bonusUnilevel
     *
     * @param float $bonusUnilevel
     *
     * @return TblPreFechamento
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
     * Set bonusParticipacao
     *
     * @param float $bonusParticipacao
     *
     * @return TblPreFechamento
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

    /**
     * Set bonusDerramamento
     *
     * @param float $bonusDerramamento
     *
     * @return TblPreFechamento
     */
    public function setBonusDerramamento($bonusDerramamento)
    {
        $this->bonusDerramamento = $bonusDerramamento;

        return $this;
    }

    /**
     * Get bonusDerramamento
     *
     * @return float
     */
    public function getBonusDerramamento()
    {
        return $this->bonusDerramamento;
    }

    /**
     * Set pago
     *
     * @param string $pago
     *
     * @return TblPreFechamento
     */
    public function setPago($pago)
    {
        $this->pago = $pago;

        return $this;
    }

    /**
     * Get pago
     *
     * @return string
     */
    public function getPago()
    {
        return $this->pago;
    }
}
