<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblConsultor
 *
 * @ORM\Table(name="tbl_consultor", indexes={@ORM\Index(name="in_login_consultor", columns={"login_consultor"}), @ORM\Index(name="in_cpf_consultor", columns={"cpf_consultor"}), @ORM\Index(name="in_id_rede", columns={"id_rede"}), @ORM\Index(name="in_data_ativacao", columns={"data_ativacao"}), @ORM\Index(name="in_id_patrocinador", columns={"id_patrocinador"}), @ORM\Index(name="in_tipo_consultor", columns={"tipo_consultor"}), @ORM\Index(name="in_bloqueado", columns={"bloqueado"}), @ORM\Index(name="in_nome_consultor", columns={"nome_consultor"})})
 * @ORM\Entity
 */
class TblConsultor
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
     * @ORM\Column(name="id_rede", type="integer", nullable=true)
     */
    private $idRede = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_patrocinador", type="integer", nullable=true)
     */
    private $idPatrocinador = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nome_consultor", type="string", length=100, nullable=true)
     */
    private $nomeConsultor;

    /**
     * @var string
     *
     * @ORM\Column(name="login_consultor", type="string", length=20, nullable=false)
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
     * @ORM\Column(name="cpf_bancario_consultor", type="string", length=255, nullable=true)
     */
    private $cpfBancarioConsultor;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo_consultor", type="string", length=1, nullable=false)
     */
    private $sexoConsultor = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nascimento", type="date", nullable=true)
     */
    private $dataNascimento;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_consultor", type="string", length=20, nullable=false)
     */
    private $cpfConsultor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="rg_consultor", type="string", length=20, nullable=false)
     */
    private $rgConsultor;

    /**
     * @var string
     *
     * @ORM\Column(name="pis_consultor", type="string", length=40, nullable=false)
     */
    private $pisConsultor;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco_consultor", type="string", length=255, nullable=false)
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
     * @ORM\Column(name="bairro_consultor", type="string", length=255, nullable=false)
     */
    private $bairroConsultor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cidade_consultor", type="string", length=255, nullable=false)
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
     * @ORM\Column(name="total_credito", type="float", precision=11, scale=2, nullable=true)
     */
    private $totalCredito = '0.00';

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
     * @ORM\Column(name="tipo_conta_bancaria", type="string", length=255, nullable=true)
     */
    private $tipoContaBancaria;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_conta_bancaria", type="string", length=255, nullable=true)
     */
    private $cpfContaBancaria;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_conta_bancaria", type="string", length=255, nullable=true)
     */
    private $nomeContaBancaria;

    /**
     * @var integer
     *
     * @ORM\Column(name="pagou_adesao", type="integer", nullable=true)
     */
    private $pagouAdesao = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="total_dinheiro", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalDinheiro = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pin", type="string", length=4, nullable=true)
     */
    private $pin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=4, nullable=true)
     */
    private $token = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bloqueado_origem", type="string", length=255, nullable=true)
     */
    private $bloqueadoOrigem;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_pagamento_adesao", type="datetime", nullable=true)
     */
    private $dataPagamentoAdesao;

    /**
     * @var float
     *
     * @ORM\Column(name="total_credito_interno", type="float", precision=11, scale=2, nullable=true)
     */
    private $totalCreditoInterno = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="lado_binario", type="string", length=1, nullable=true)
     */
    private $ladoBinario = 'E';

    /**
     * @var float
     *
     * @ORM\Column(name="credito_binario_diario", type="float", precision=11, scale=2, nullable=true)
     */
    private $creditoBinarioDiario = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_consultor", type="string", length=255, nullable=true)
     */
    private $cnpjConsultor;

    /**
     * @var string
     *
     * @ORM\Column(name="ie_consultor", type="string", length=255, nullable=true)
     */
    private $ieConsultor;

    /**
     * @var float
     *
     * @ORM\Column(name="conta_credito", type="float", precision=11, scale=2, nullable=true)
     */
    private $contaCredito;

    /**
     * @var string
     *
     * @ORM\Column(name="senha_expirada", type="string", length=1, nullable=true)
     */
    private $senhaExpirada = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="senha_interna", type="string", length=255, nullable=true)
     */
    private $senhaInterna;

    /**
     * @var string
     *
     * @ORM\Column(name="senha_interna_expirada", type="string", length=1, nullable=true)
     */
    private $senhaInternaExpirada = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="credito_corrigido", type="float", precision=11, scale=2, nullable=true)
     */
    private $creditoCorrigido;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_consultor_old", type="integer", nullable=true)
     */
    private $idConsultorOld;

    /**
     * @var string
     *
     * @ORM\Column(name="retorno_stone", type="text", length=16777215, nullable=true)
     */
    private $retornoStone;

    /**
     * @var string
     *
     * @ORM\Column(name="consultor_vip", type="string", length=1, nullable=true)
     */
    private $consultorVip;

    /**
     * @var string
     *
     * @ORM\Column(name="status_clearsale", type="string", length=10, nullable=true)
     */
    private $statusClearsale;

    /**
     * @var string
     *
     * @ORM\Column(name="json_clearsale", type="text", length=16777215, nullable=true)
     */
    private $jsonClearsale;



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
     * Set idRede
     *
     * @param integer $idRede
     *
     * @return TblConsultor
     */
    public function setIdRede($idRede)
    {
        $this->idRede = $idRede;

        return $this;
    }

    /**
     * Get idRede
     *
     * @return integer
     */
    public function getIdRede()
    {
        return $this->idRede;
    }

    /**
     * Set idPatrocinador
     *
     * @param integer $idPatrocinador
     *
     * @return TblConsultor
     */
    public function setIdPatrocinador($idPatrocinador)
    {
        $this->idPatrocinador = $idPatrocinador;

        return $this;
    }

    /**
     * Get idPatrocinador
     *
     * @return integer
     */
    public function getIdPatrocinador()
    {
        return $this->idPatrocinador;
    }

    /**
     * Set nomeConsultor
     *
     * @param string $nomeConsultor
     *
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * Set cpfBancarioConsultor
     *
     * @param string $cpfBancarioConsultor
     *
     * @return TblConsultor
     */
    public function setCpfBancarioConsultor($cpfBancarioConsultor)
    {
        $this->cpfBancarioConsultor = $cpfBancarioConsultor;

        return $this;
    }

    /**
     * Get cpfBancarioConsultor
     *
     * @return string
     */
    public function getCpfBancarioConsultor()
    {
        return $this->cpfBancarioConsultor;
    }

    /**
     * Set sexoConsultor
     *
     * @param string $sexoConsultor
     *
     * @return TblConsultor
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
     * Set dataNascimento
     *
     * @param \DateTime $dataNascimento
     *
     * @return TblConsultor
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }

    /**
     * Get dataNascimento
     *
     * @return \DateTime
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * Set cpfConsultor
     *
     * @param string $cpfConsultor
     *
     * @return TblConsultor
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
     * Set rgConsultor
     *
     * @param string $rgConsultor
     *
     * @return TblConsultor
     */
    public function setRgConsultor($rgConsultor)
    {
        $this->rgConsultor = $rgConsultor;

        return $this;
    }

    /**
     * Get rgConsultor
     *
     * @return string
     */
    public function getRgConsultor()
    {
        return $this->rgConsultor;
    }

    /**
     * Set pisConsultor
     *
     * @param string $pisConsultor
     *
     * @return TblConsultor
     */
    public function setPisConsultor($pisConsultor)
    {
        $this->pisConsultor = $pisConsultor;

        return $this;
    }

    /**
     * Get pisConsultor
     *
     * @return string
     */
    public function getPisConsultor()
    {
        return $this->pisConsultor;
    }

    /**
     * Set enderecoConsultor
     *
     * @param string $enderecoConsultor
     *
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * @return TblConsultor
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
     * Set tipoContaBancaria
     *
     * @param string $tipoContaBancaria
     *
     * @return TblConsultor
     */
    public function setTipoContaBancaria($tipoContaBancaria)
    {
        $this->tipoContaBancaria = $tipoContaBancaria;

        return $this;
    }

    /**
     * Get tipoContaBancaria
     *
     * @return string
     */
    public function getTipoContaBancaria()
    {
        return $this->tipoContaBancaria;
    }

    /**
     * Set cpfContaBancaria
     *
     * @param string $cpfContaBancaria
     *
     * @return TblConsultor
     */
    public function setCpfContaBancaria($cpfContaBancaria)
    {
        $this->cpfContaBancaria = $cpfContaBancaria;

        return $this;
    }

    /**
     * Get cpfContaBancaria
     *
     * @return string
     */
    public function getCpfContaBancaria()
    {
        return $this->cpfContaBancaria;
    }

    /**
     * Set nomeContaBancaria
     *
     * @param string $nomeContaBancaria
     *
     * @return TblConsultor
     */
    public function setNomeContaBancaria($nomeContaBancaria)
    {
        $this->nomeContaBancaria = $nomeContaBancaria;

        return $this;
    }

    /**
     * Get nomeContaBancaria
     *
     * @return string
     */
    public function getNomeContaBancaria()
    {
        return $this->nomeContaBancaria;
    }

    /**
     * Set pagouAdesao
     *
     * @param integer $pagouAdesao
     *
     * @return TblConsultor
     */
    public function setPagouAdesao($pagouAdesao)
    {
        $this->pagouAdesao = $pagouAdesao;

        return $this;
    }

    /**
     * Get pagouAdesao
     *
     * @return integer
     */
    public function getPagouAdesao()
    {
        return $this->pagouAdesao;
    }

    /**
     * Set totalDinheiro
     *
     * @param float $totalDinheiro
     *
     * @return TblConsultor
     */
    public function setTotalDinheiro($totalDinheiro)
    {
        $this->totalDinheiro = $totalDinheiro;

        return $this;
    }

    /**
     * Get totalDinheiro
     *
     * @return float
     */
    public function getTotalDinheiro()
    {
        return $this->totalDinheiro;
    }

    /**
     * Set pin
     *
     * @param string $pin
     *
     * @return TblConsultor
     */
    public function setPin($pin)
    {
        $this->pin = $pin;

        return $this;
    }

    /**
     * Get pin
     *
     * @return string
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return TblConsultor
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set bloqueadoOrigem
     *
     * @param string $bloqueadoOrigem
     *
     * @return TblConsultor
     */
    public function setBloqueadoOrigem($bloqueadoOrigem)
    {
        $this->bloqueadoOrigem = $bloqueadoOrigem;

        return $this;
    }

    /**
     * Get bloqueadoOrigem
     *
     * @return string
     */
    public function getBloqueadoOrigem()
    {
        return $this->bloqueadoOrigem;
    }

    /**
     * Set dataPagamentoAdesao
     *
     * @param \DateTime $dataPagamentoAdesao
     *
     * @return TblConsultor
     */
    public function setDataPagamentoAdesao($dataPagamentoAdesao)
    {
        $this->dataPagamentoAdesao = $dataPagamentoAdesao;

        return $this;
    }

    /**
     * Get dataPagamentoAdesao
     *
     * @return \DateTime
     */
    public function getDataPagamentoAdesao()
    {
        return $this->dataPagamentoAdesao;
    }

    /**
     * Set totalCreditoInterno
     *
     * @param float $totalCreditoInterno
     *
     * @return TblConsultor
     */
    public function setTotalCreditoInterno($totalCreditoInterno)
    {
        $this->totalCreditoInterno = $totalCreditoInterno;

        return $this;
    }

    /**
     * Get totalCreditoInterno
     *
     * @return float
     */
    public function getTotalCreditoInterno()
    {
        return $this->totalCreditoInterno;
    }

    /**
     * Set ladoBinario
     *
     * @param string $ladoBinario
     *
     * @return TblConsultor
     */
    public function setLadoBinario($ladoBinario)
    {
        $this->ladoBinario = $ladoBinario;

        return $this;
    }

    /**
     * Get ladoBinario
     *
     * @return string
     */
    public function getLadoBinario()
    {
        return $this->ladoBinario;
    }

    /**
     * Set creditoBinarioDiario
     *
     * @param float $creditoBinarioDiario
     *
     * @return TblConsultor
     */
    public function setCreditoBinarioDiario($creditoBinarioDiario)
    {
        $this->creditoBinarioDiario = $creditoBinarioDiario;

        return $this;
    }

    /**
     * Get creditoBinarioDiario
     *
     * @return float
     */
    public function getCreditoBinarioDiario()
    {
        return $this->creditoBinarioDiario;
    }

    /**
     * Set cnpjConsultor
     *
     * @param string $cnpjConsultor
     *
     * @return TblConsultor
     */
    public function setCnpjConsultor($cnpjConsultor)
    {
        $this->cnpjConsultor = $cnpjConsultor;

        return $this;
    }

    /**
     * Get cnpjConsultor
     *
     * @return string
     */
    public function getCnpjConsultor()
    {
        return $this->cnpjConsultor;
    }

    /**
     * Set ieConsultor
     *
     * @param string $ieConsultor
     *
     * @return TblConsultor
     */
    public function setIeConsultor($ieConsultor)
    {
        $this->ieConsultor = $ieConsultor;

        return $this;
    }

    /**
     * Get ieConsultor
     *
     * @return string
     */
    public function getIeConsultor()
    {
        return $this->ieConsultor;
    }

    /**
     * Set contaCredito
     *
     * @param float $contaCredito
     *
     * @return TblConsultor
     */
    public function setContaCredito($contaCredito)
    {
        $this->contaCredito = $contaCredito;

        return $this;
    }

    /**
     * Get contaCredito
     *
     * @return float
     */
    public function getContaCredito()
    {
        return $this->contaCredito;
    }

    /**
     * Set senhaExpirada
     *
     * @param string $senhaExpirada
     *
     * @return TblConsultor
     */
    public function setSenhaExpirada($senhaExpirada)
    {
        $this->senhaExpirada = $senhaExpirada;

        return $this;
    }

    /**
     * Get senhaExpirada
     *
     * @return string
     */
    public function getSenhaExpirada()
    {
        return $this->senhaExpirada;
    }

    /**
     * Set senhaInterna
     *
     * @param string $senhaInterna
     *
     * @return TblConsultor
     */
    public function setSenhaInterna($senhaInterna)
    {
        $this->senhaInterna = $senhaInterna;

        return $this;
    }

    /**
     * Get senhaInterna
     *
     * @return string
     */
    public function getSenhaInterna()
    {
        return $this->senhaInterna;
    }

    /**
     * Set senhaInternaExpirada
     *
     * @param string $senhaInternaExpirada
     *
     * @return TblConsultor
     */
    public function setSenhaInternaExpirada($senhaInternaExpirada)
    {
        $this->senhaInternaExpirada = $senhaInternaExpirada;

        return $this;
    }

    /**
     * Get senhaInternaExpirada
     *
     * @return string
     */
    public function getSenhaInternaExpirada()
    {
        return $this->senhaInternaExpirada;
    }

    /**
     * Set creditoCorrigido
     *
     * @param float $creditoCorrigido
     *
     * @return TblConsultor
     */
    public function setCreditoCorrigido($creditoCorrigido)
    {
        $this->creditoCorrigido = $creditoCorrigido;

        return $this;
    }

    /**
     * Get creditoCorrigido
     *
     * @return float
     */
    public function getCreditoCorrigido()
    {
        return $this->creditoCorrigido;
    }

    /**
     * Set idConsultorOld
     *
     * @param integer $idConsultorOld
     *
     * @return TblConsultor
     */
    public function setIdConsultorOld($idConsultorOld)
    {
        $this->idConsultorOld = $idConsultorOld;

        return $this;
    }

    /**
     * Get idConsultorOld
     *
     * @return integer
     */
    public function getIdConsultorOld()
    {
        return $this->idConsultorOld;
    }

    /**
     * Set retornoStone
     *
     * @param string $retornoStone
     *
     * @return TblConsultor
     */
    public function setRetornoStone($retornoStone)
    {
        $this->retornoStone = $retornoStone;

        return $this;
    }

    /**
     * Get retornoStone
     *
     * @return string
     */
    public function getRetornoStone()
    {
        return $this->retornoStone;
    }

    /**
     * Set consultorVip
     *
     * @param string $consultorVip
     *
     * @return TblConsultor
     */
    public function setConsultorVip($consultorVip)
    {
        $this->consultorVip = $consultorVip;

        return $this;
    }

    /**
     * Get consultorVip
     *
     * @return string
     */
    public function getConsultorVip()
    {
        return $this->consultorVip;
    }

    /**
     * Set statusClearsale
     *
     * @param string $statusClearsale
     *
     * @return TblConsultor
     */
    public function setStatusClearsale($statusClearsale)
    {
        $this->statusClearsale = $statusClearsale;

        return $this;
    }

    /**
     * Get statusClearsale
     *
     * @return string
     */
    public function getStatusClearsale()
    {
        return $this->statusClearsale;
    }

    /**
     * Set jsonClearsale
     *
     * @param string $jsonClearsale
     *
     * @return TblConsultor
     */
    public function setJsonClearsale($jsonClearsale)
    {
        $this->jsonClearsale = $jsonClearsale;

        return $this;
    }

    /**
     * Get jsonClearsale
     *
     * @return string
     */
    public function getJsonClearsale()
    {
        return $this->jsonClearsale;
    }
}
