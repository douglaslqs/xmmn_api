<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblConsultorCdn
 *
 * @ORM\Table(name="tbl_consultor_cdn")
 * @ORM\Entity
 */
class TblConsultorCdn
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_consultor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConsultor;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_loja", type="integer", nullable=true)
     */
    private $idLoja;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_admin", type="integer", nullable=false)
     */
    private $idAdmin = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nome_consultor", type="string", length=100, nullable=true)
     */
    private $nomeConsultor;

    /**
     * @var string
     *
     * @ORM\Column(name="login_consultor", type="string", length=30, nullable=false)
     */
    private $loginConsultor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="senha_consultor", type="string", length=255, nullable=false)
     */
    private $senhaConsultor = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="ativo_consultor", type="integer", nullable=true)
     */
    private $ativoConsultor = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ativacao", type="date", nullable=false)
     */
    private $dataAtivacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="especial_consultor", type="integer", nullable=false)
     */
    private $especialConsultor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_consultor", type="integer", nullable=false)
     */
    private $tipoConsultor = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="fase_consultor", type="integer", nullable=false)
     */
    private $faseConsultor = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="patamar_consultor", type="integer", nullable=false)
     */
    private $patamarConsultor = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_cadastro_consultor", type="datetime", nullable=false)
     */
    private $dataCadastroConsultor;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_consultor", type="integer", nullable=false)
     */
    private $statusConsultor;

    /**
     * @var string
     *
     * @ORM\Column(name="email_consultor", type="string", length=255, nullable=false)
     */
    private $emailConsultor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="telefone_consultor", type="string", length=255, nullable=false)
     */
    private $telefoneConsultor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="celular_consultor", type="string", length=255, nullable=false)
     */
    private $celularConsultor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="banco_consultor", type="string", length=200, nullable=false)
     */
    private $bancoConsultor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="agencia_consultor", type="string", length=15, nullable=false)
     */
    private $agenciaConsultor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="conta_consultor", type="string", length=15, nullable=false)
     */
    private $contaConsultor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sexo_consultor", type="string", length=1, nullable=false)
     */
    private $sexoConsultor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_consultor", type="string", length=20, nullable=false)
     */
    private $cpfConsultor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="endereco_consultor", type="string", length=100, nullable=false)
     */
    private $enderecoConsultor = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_consultor", type="integer", nullable=true)
     */
    private $numeroConsultor;

    /**
     * @var string
     *
     * @ORM\Column(name="cep_consultor", type="string", length=11, nullable=true)
     */
    private $cepConsultor;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro_consultor", type="string", length=100, nullable=false)
     */
    private $bairroConsultor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cidade_consultor", type="string", length=50, nullable=false)
     */
    private $cidadeConsultor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="estado_consultor", type="string", length=50, nullable=true)
     */
    private $estadoConsultor;

    /**
     * @var float
     *
     * @ORM\Column(name="ganhos_ativacao", type="float", precision=10, scale=0, nullable=false)
     */
    private $ganhosAtivacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_ativos", type="integer", nullable=false)
     */
    private $totalAtivos;

    /**
     * @var float
     *
     * @ORM\Column(name="total_credito", type="float", precision=10, scale=0, nullable=false)
     */
    private $totalCredito;

    /**
     * @var integer
     *
     * @ORM\Column(name="administrador", type="integer", nullable=false)
     */
    private $administrador = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="validade", type="date", nullable=false)
     */
    private $validade;

    /**
     * @var integer
     *
     * @ORM\Column(name="bloqueado", type="integer", nullable=false)
     */
    private $bloqueado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="complemento_consultor", type="string", length=255, nullable=true)
     */
    private $complementoConsultor;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255, nullable=true)
     */
    private $tipo = 'cdn';

    /**
     * @var integer
     *
     * @ORM\Column(name="excluido", type="integer", nullable=true)
     */
    private $excluido = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comercializa_kit", type="string", length=1, nullable=true)
     */
    private $comercializaKit = '0';



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
     * Set idLoja
     *
     * @param integer $idLoja
     *
     * @return TblConsultorCdn
     */
    public function setIdLoja($idLoja)
    {
        $this->idLoja = $idLoja;

        return $this;
    }

    /**
     * Get idLoja
     *
     * @return integer
     */
    public function getIdLoja()
    {
        return $this->idLoja;
    }

    /**
     * Set idAdmin
     *
     * @param integer $idAdmin
     *
     * @return TblConsultorCdn
     */
    public function setIdAdmin($idAdmin)
    {
        $this->idAdmin = $idAdmin;

        return $this;
    }

    /**
     * Get idAdmin
     *
     * @return integer
     */
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }

    /**
     * Set nomeConsultor
     *
     * @param string $nomeConsultor
     *
     * @return TblConsultorCdn
     */
    public function setNomeConsultor($nomeConsultor)
    {
        $this->nomeConsultor = $nomeConsultor;

        return $this;
    }

    /**
     * Get nomeConsultor
     *
     * @return string
     */
    public function getNomeConsultor()
    {
        return $this->nomeConsultor;
    }

    /**
     * Set loginConsultor
     *
     * @param string $loginConsultor
     *
     * @return TblConsultorCdn
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
     * Set senhaConsultor
     *
     * @param string $senhaConsultor
     *
     * @return TblConsultorCdn
     */
    public function setSenhaConsultor($senhaConsultor)
    {
        $this->senhaConsultor = $senhaConsultor;

        return $this;
    }

    /**
     * Get senhaConsultor
     *
     * @return string
     */
    public function getSenhaConsultor()
    {
        return $this->senhaConsultor;
    }

    /**
     * Set ativoConsultor
     *
     * @param integer $ativoConsultor
     *
     * @return TblConsultorCdn
     */
    public function setAtivoConsultor($ativoConsultor)
    {
        $this->ativoConsultor = $ativoConsultor;

        return $this;
    }

    /**
     * Get ativoConsultor
     *
     * @return integer
     */
    public function getAtivoConsultor()
    {
        return $this->ativoConsultor;
    }

    /**
     * Set dataAtivacao
     *
     * @param \DateTime $dataAtivacao
     *
     * @return TblConsultorCdn
     */
    public function setDataAtivacao($dataAtivacao)
    {
        $this->dataAtivacao = $dataAtivacao;

        return $this;
    }

    /**
     * Get dataAtivacao
     *
     * @return \DateTime
     */
    public function getDataAtivacao()
    {
        return $this->dataAtivacao;
    }

    /**
     * Set especialConsultor
     *
     * @param integer $especialConsultor
     *
     * @return TblConsultorCdn
     */
    public function setEspecialConsultor($especialConsultor)
    {
        $this->especialConsultor = $especialConsultor;

        return $this;
    }

    /**
     * Get especialConsultor
     *
     * @return integer
     */
    public function getEspecialConsultor()
    {
        return $this->especialConsultor;
    }

    /**
     * Set tipoConsultor
     *
     * @param integer $tipoConsultor
     *
     * @return TblConsultorCdn
     */
    public function setTipoConsultor($tipoConsultor)
    {
        $this->tipoConsultor = $tipoConsultor;

        return $this;
    }

    /**
     * Get tipoConsultor
     *
     * @return integer
     */
    public function getTipoConsultor()
    {
        return $this->tipoConsultor;
    }

    /**
     * Set faseConsultor
     *
     * @param integer $faseConsultor
     *
     * @return TblConsultorCdn
     */
    public function setFaseConsultor($faseConsultor)
    {
        $this->faseConsultor = $faseConsultor;

        return $this;
    }

    /**
     * Get faseConsultor
     *
     * @return integer
     */
    public function getFaseConsultor()
    {
        return $this->faseConsultor;
    }

    /**
     * Set patamarConsultor
     *
     * @param integer $patamarConsultor
     *
     * @return TblConsultorCdn
     */
    public function setPatamarConsultor($patamarConsultor)
    {
        $this->patamarConsultor = $patamarConsultor;

        return $this;
    }

    /**
     * Get patamarConsultor
     *
     * @return integer
     */
    public function getPatamarConsultor()
    {
        return $this->patamarConsultor;
    }

    /**
     * Set dataCadastroConsultor
     *
     * @param \DateTime $dataCadastroConsultor
     *
     * @return TblConsultorCdn
     */
    public function setDataCadastroConsultor($dataCadastroConsultor)
    {
        $this->dataCadastroConsultor = $dataCadastroConsultor;

        return $this;
    }

    /**
     * Get dataCadastroConsultor
     *
     * @return \DateTime
     */
    public function getDataCadastroConsultor()
    {
        return $this->dataCadastroConsultor;
    }

    /**
     * Set statusConsultor
     *
     * @param integer $statusConsultor
     *
     * @return TblConsultorCdn
     */
    public function setStatusConsultor($statusConsultor)
    {
        $this->statusConsultor = $statusConsultor;

        return $this;
    }

    /**
     * Get statusConsultor
     *
     * @return integer
     */
    public function getStatusConsultor()
    {
        return $this->statusConsultor;
    }

    /**
     * Set emailConsultor
     *
     * @param string $emailConsultor
     *
     * @return TblConsultorCdn
     */
    public function setEmailConsultor($emailConsultor)
    {
        $this->emailConsultor = $emailConsultor;

        return $this;
    }

    /**
     * Get emailConsultor
     *
     * @return string
     */
    public function getEmailConsultor()
    {
        return $this->emailConsultor;
    }

    /**
     * Set telefoneConsultor
     *
     * @param string $telefoneConsultor
     *
     * @return TblConsultorCdn
     */
    public function setTelefoneConsultor($telefoneConsultor)
    {
        $this->telefoneConsultor = $telefoneConsultor;

        return $this;
    }

    /**
     * Get telefoneConsultor
     *
     * @return string
     */
    public function getTelefoneConsultor()
    {
        return $this->telefoneConsultor;
    }

    /**
     * Set celularConsultor
     *
     * @param string $celularConsultor
     *
     * @return TblConsultorCdn
     */
    public function setCelularConsultor($celularConsultor)
    {
        $this->celularConsultor = $celularConsultor;

        return $this;
    }

    /**
     * Get celularConsultor
     *
     * @return string
     */
    public function getCelularConsultor()
    {
        return $this->celularConsultor;
    }

    /**
     * Set bancoConsultor
     *
     * @param string $bancoConsultor
     *
     * @return TblConsultorCdn
     */
    public function setBancoConsultor($bancoConsultor)
    {
        $this->bancoConsultor = $bancoConsultor;

        return $this;
    }

    /**
     * Get bancoConsultor
     *
     * @return string
     */
    public function getBancoConsultor()
    {
        return $this->bancoConsultor;
    }

    /**
     * Set agenciaConsultor
     *
     * @param string $agenciaConsultor
     *
     * @return TblConsultorCdn
     */
    public function setAgenciaConsultor($agenciaConsultor)
    {
        $this->agenciaConsultor = $agenciaConsultor;

        return $this;
    }

    /**
     * Get agenciaConsultor
     *
     * @return string
     */
    public function getAgenciaConsultor()
    {
        return $this->agenciaConsultor;
    }

    /**
     * Set contaConsultor
     *
     * @param string $contaConsultor
     *
     * @return TblConsultorCdn
     */
    public function setContaConsultor($contaConsultor)
    {
        $this->contaConsultor = $contaConsultor;

        return $this;
    }

    /**
     * Get contaConsultor
     *
     * @return string
     */
    public function getContaConsultor()
    {
        return $this->contaConsultor;
    }

    /**
     * Set sexoConsultor
     *
     * @param string $sexoConsultor
     *
     * @return TblConsultorCdn
     */
    public function setSexoConsultor($sexoConsultor)
    {
        $this->sexoConsultor = $sexoConsultor;

        return $this;
    }

    /**
     * Get sexoConsultor
     *
     * @return string
     */
    public function getSexoConsultor()
    {
        return $this->sexoConsultor;
    }

    /**
     * Set cpfConsultor
     *
     * @param string $cpfConsultor
     *
     * @return TblConsultorCdn
     */
    public function setCpfConsultor($cpfConsultor)
    {
        $this->cpfConsultor = $cpfConsultor;

        return $this;
    }

    /**
     * Get cpfConsultor
     *
     * @return string
     */
    public function getCpfConsultor()
    {
        return $this->cpfConsultor;
    }

    /**
     * Set enderecoConsultor
     *
     * @param string $enderecoConsultor
     *
     * @return TblConsultorCdn
     */
    public function setEnderecoConsultor($enderecoConsultor)
    {
        $this->enderecoConsultor = $enderecoConsultor;

        return $this;
    }

    /**
     * Get enderecoConsultor
     *
     * @return string
     */
    public function getEnderecoConsultor()
    {
        return $this->enderecoConsultor;
    }

    /**
     * Set numeroConsultor
     *
     * @param integer $numeroConsultor
     *
     * @return TblConsultorCdn
     */
    public function setNumeroConsultor($numeroConsultor)
    {
        $this->numeroConsultor = $numeroConsultor;

        return $this;
    }

    /**
     * Get numeroConsultor
     *
     * @return integer
     */
    public function getNumeroConsultor()
    {
        return $this->numeroConsultor;
    }

    /**
     * Set cepConsultor
     *
     * @param string $cepConsultor
     *
     * @return TblConsultorCdn
     */
    public function setCepConsultor($cepConsultor)
    {
        $this->cepConsultor = $cepConsultor;

        return $this;
    }

    /**
     * Get cepConsultor
     *
     * @return string
     */
    public function getCepConsultor()
    {
        return $this->cepConsultor;
    }

    /**
     * Set bairroConsultor
     *
     * @param string $bairroConsultor
     *
     * @return TblConsultorCdn
     */
    public function setBairroConsultor($bairroConsultor)
    {
        $this->bairroConsultor = $bairroConsultor;

        return $this;
    }

    /**
     * Get bairroConsultor
     *
     * @return string
     */
    public function getBairroConsultor()
    {
        return $this->bairroConsultor;
    }

    /**
     * Set cidadeConsultor
     *
     * @param string $cidadeConsultor
     *
     * @return TblConsultorCdn
     */
    public function setCidadeConsultor($cidadeConsultor)
    {
        $this->cidadeConsultor = $cidadeConsultor;

        return $this;
    }

    /**
     * Get cidadeConsultor
     *
     * @return string
     */
    public function getCidadeConsultor()
    {
        return $this->cidadeConsultor;
    }

    /**
     * Set estadoConsultor
     *
     * @param string $estadoConsultor
     *
     * @return TblConsultorCdn
     */
    public function setEstadoConsultor($estadoConsultor)
    {
        $this->estadoConsultor = $estadoConsultor;

        return $this;
    }

    /**
     * Get estadoConsultor
     *
     * @return string
     */
    public function getEstadoConsultor()
    {
        return $this->estadoConsultor;
    }

    /**
     * Set ganhosAtivacao
     *
     * @param float $ganhosAtivacao
     *
     * @return TblConsultorCdn
     */
    public function setGanhosAtivacao($ganhosAtivacao)
    {
        $this->ganhosAtivacao = $ganhosAtivacao;

        return $this;
    }

    /**
     * Get ganhosAtivacao
     *
     * @return float
     */
    public function getGanhosAtivacao()
    {
        return $this->ganhosAtivacao;
    }

    /**
     * Set totalAtivos
     *
     * @param integer $totalAtivos
     *
     * @return TblConsultorCdn
     */
    public function setTotalAtivos($totalAtivos)
    {
        $this->totalAtivos = $totalAtivos;

        return $this;
    }

    /**
     * Get totalAtivos
     *
     * @return integer
     */
    public function getTotalAtivos()
    {
        return $this->totalAtivos;
    }

    /**
     * Set totalCredito
     *
     * @param float $totalCredito
     *
     * @return TblConsultorCdn
     */
    public function setTotalCredito($totalCredito)
    {
        $this->totalCredito = $totalCredito;

        return $this;
    }

    /**
     * Get totalCredito
     *
     * @return float
     */
    public function getTotalCredito()
    {
        return $this->totalCredito;
    }

    /**
     * Set administrador
     *
     * @param integer $administrador
     *
     * @return TblConsultorCdn
     */
    public function setAdministrador($administrador)
    {
        $this->administrador = $administrador;

        return $this;
    }

    /**
     * Get administrador
     *
     * @return integer
     */
    public function getAdministrador()
    {
        return $this->administrador;
    }

    /**
     * Set validade
     *
     * @param \DateTime $validade
     *
     * @return TblConsultorCdn
     */
    public function setValidade($validade)
    {
        $this->validade = $validade;

        return $this;
    }

    /**
     * Get validade
     *
     * @return \DateTime
     */
    public function getValidade()
    {
        return $this->validade;
    }

    /**
     * Set bloqueado
     *
     * @param integer $bloqueado
     *
     * @return TblConsultorCdn
     */
    public function setBloqueado($bloqueado)
    {
        $this->bloqueado = $bloqueado;

        return $this;
    }

    /**
     * Get bloqueado
     *
     * @return integer
     */
    public function getBloqueado()
    {
        return $this->bloqueado;
    }

    /**
     * Set complementoConsultor
     *
     * @param string $complementoConsultor
     *
     * @return TblConsultorCdn
     */
    public function setComplementoConsultor($complementoConsultor)
    {
        $this->complementoConsultor = $complementoConsultor;

        return $this;
    }

    /**
     * Get complementoConsultor
     *
     * @return string
     */
    public function getComplementoConsultor()
    {
        return $this->complementoConsultor;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return TblConsultorCdn
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
     * Set excluido
     *
     * @param integer $excluido
     *
     * @return TblConsultorCdn
     */
    public function setExcluido($excluido)
    {
        $this->excluido = $excluido;

        return $this;
    }

    /**
     * Get excluido
     *
     * @return integer
     */
    public function getExcluido()
    {
        return $this->excluido;
    }

    /**
     * Set comercializaKit
     *
     * @param string $comercializaKit
     *
     * @return TblConsultorCdn
     */
    public function setComercializaKit($comercializaKit)
    {
        $this->comercializaKit = $comercializaKit;

        return $this;
    }

    /**
     * Get comercializaKit
     *
     * @return string
     */
    public function getComercializaKit()
    {
        return $this->comercializaKit;
    }
}
