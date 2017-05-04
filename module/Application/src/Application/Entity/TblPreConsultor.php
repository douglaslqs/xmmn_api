<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblPreConsultor
 *
 * @ORM\Table(name="tbl_pre_consultor")
 * @ORM\Entity
 */
class TblPreConsultor
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
     * @ORM\Column(name="id_patrocinador", type="integer", nullable=false)
     */
    private $idPatrocinador;

    /**
     * @var integer
     *
     * @ORM\Column(name="ADICIONADO", type="integer", nullable=false)
     */
    private $adicionado = '0';

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
     * @ORM\Column(name="email_consultor", type="string", length=255, nullable=false)
     */
    private $emailConsultor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="senha_consultor", type="string", length=255, nullable=false)
     */
    private $senhaConsultor = '';

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
     * @var integer
     *
     * @ORM\Column(name="especial_consultor", type="integer", nullable=false)
     */
    private $especialConsultor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_consultor", type="string", length=255, nullable=false)
     */
    private $tipoConsultor = '';

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
     * @var string
     *
     * @ORM\Column(name="rastreador", type="string", length=100, nullable=false)
     */
    private $rastreador;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento_consultor", type="string", length=255, nullable=true)
     */
    private $complementoConsultor;

    /**
     * @var string
     *
     * @ORM\Column(name="opcao_arvore_consultor", type="string", length=2, nullable=true)
     */
    private $opcaoArvoreConsultor = 'E';

    /**
     * @var string
     *
     * @ORM\Column(name="ie_consultor", type="string", length=255, nullable=true)
     */
    private $ieConsultor;

    /**
     * @var string
     *
     * @ORM\Column(name="im_consultor", type="string", length=255, nullable=true)
     */
    private $imConsultor;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_consultor", type="string", length=20, nullable=true)
     */
    private $cnpjConsultor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nascimento", type="date", nullable=true)
     */
    private $dataNascimento;



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
     * Set idPatrocinador
     *
     * @param integer $idPatrocinador
     *
     * @return TblPreConsultor
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
     * Set adicionado
     *
     * @param integer $adicionado
     *
     * @return TblPreConsultor
     */
    public function setAdicionado($adicionado)
    {
        $this->adicionado = $adicionado;

        return $this;
    }

    /**
     * Get adicionado
     *
     * @return integer
     */
    public function getAdicionado()
    {
        return $this->adicionado;
    }

    /**
     * Set nomeConsultor
     *
     * @param string $nomeConsultor
     *
     * @return TblPreConsultor
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
     * @return TblPreConsultor
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
     * Set emailConsultor
     *
     * @param string $emailConsultor
     *
     * @return TblPreConsultor
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
     * Set senhaConsultor
     *
     * @param string $senhaConsultor
     *
     * @return TblPreConsultor
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
     * Set telefoneConsultor
     *
     * @param string $telefoneConsultor
     *
     * @return TblPreConsultor
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
     * @return TblPreConsultor
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
     * Set especialConsultor
     *
     * @param integer $especialConsultor
     *
     * @return TblPreConsultor
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
     * @param string $tipoConsultor
     *
     * @return TblPreConsultor
     */
    public function setTipoConsultor($tipoConsultor)
    {
        $this->tipoConsultor = $tipoConsultor;

        return $this;
    }

    /**
     * Get tipoConsultor
     *
     * @return string
     */
    public function getTipoConsultor()
    {
        return $this->tipoConsultor;
    }

    /**
     * Set patamarConsultor
     *
     * @param integer $patamarConsultor
     *
     * @return TblPreConsultor
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
     * @return TblPreConsultor
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
     * @return TblPreConsultor
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
     * Set bancoConsultor
     *
     * @param string $bancoConsultor
     *
     * @return TblPreConsultor
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
     * @return TblPreConsultor
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
     * @return TblPreConsultor
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
     * @return TblPreConsultor
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
     * @return TblPreConsultor
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
     * @return TblPreConsultor
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
     * @return TblPreConsultor
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
     * @return TblPreConsultor
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
     * @return TblPreConsultor
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
     * @return TblPreConsultor
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
     * @return TblPreConsultor
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
     * Set rastreador
     *
     * @param string $rastreador
     *
     * @return TblPreConsultor
     */
    public function setRastreador($rastreador)
    {
        $this->rastreador = $rastreador;

        return $this;
    }

    /**
     * Get rastreador
     *
     * @return string
     */
    public function getRastreador()
    {
        return $this->rastreador;
    }

    /**
     * Set complementoConsultor
     *
     * @param string $complementoConsultor
     *
     * @return TblPreConsultor
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
     * Set opcaoArvoreConsultor
     *
     * @param string $opcaoArvoreConsultor
     *
     * @return TblPreConsultor
     */
    public function setOpcaoArvoreConsultor($opcaoArvoreConsultor)
    {
        $this->opcaoArvoreConsultor = $opcaoArvoreConsultor;

        return $this;
    }

    /**
     * Get opcaoArvoreConsultor
     *
     * @return string
     */
    public function getOpcaoArvoreConsultor()
    {
        return $this->opcaoArvoreConsultor;
    }

    /**
     * Set ieConsultor
     *
     * @param string $ieConsultor
     *
     * @return TblPreConsultor
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
     * Set imConsultor
     *
     * @param string $imConsultor
     *
     * @return TblPreConsultor
     */
    public function setImConsultor($imConsultor)
    {
        $this->imConsultor = $imConsultor;

        return $this;
    }

    /**
     * Get imConsultor
     *
     * @return string
     */
    public function getImConsultor()
    {
        return $this->imConsultor;
    }

    /**
     * Set cnpjConsultor
     *
     * @param string $cnpjConsultor
     *
     * @return TblPreConsultor
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
     * Set dataNascimento
     *
     * @param \DateTime $dataNascimento
     *
     * @return TblPreConsultor
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
}
