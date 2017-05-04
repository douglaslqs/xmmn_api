<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblGraduados
 *
 * @ORM\Table(name="tbl_graduados", indexes={@ORM\Index(name="in_id_consultor", columns={"id_consultor"}), @ORM\Index(name="in_login_consultor", columns={"login_consultor"})})
 * @ORM\Entity
 */
class TblGraduados
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
     * @var string
     *
     * @ORM\Column(name="patamar", type="string", length=200, nullable=true)
     */
    private $patamar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ultima_atualizacao", type="datetime", nullable=true)
     */
    private $ultimaAtualizacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade_bronzes", type="integer", nullable=true)
     */
    private $quantidadeBronzes;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade_diamante", type="integer", nullable=true)
     */
    private $quantidadeDiamante;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade_duplo_diamante", type="integer", nullable=true)
     */
    private $quantidadeDuploDiamante;

    /**
     * @var string
     *
     * @ORM\Column(name="login_consultor", type="string", length=255, nullable=true)
     */
    private $loginConsultor;

    /**
     * @var float
     *
     * @ORM\Column(name="pontos_totais", type="float", precision=10, scale=0, nullable=true)
     */
    private $pontosTotais;

    /**
     * @var integer
     *
     * @ORM\Column(name="linhas_bronze", type="integer", nullable=true)
     */
    private $linhasBronze;

    /**
     * @var integer
     *
     * @ORM\Column(name="linhas_diamante", type="integer", nullable=true)
     */
    private $linhasDiamante;

    /**
     * @var integer
     *
     * @ORM\Column(name="linhas_duplo_diamante", type="integer", nullable=true)
     */
    private $linhasDuploDiamante;



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
     * @return TblGraduados
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
     * Set patamar
     *
     * @param string $patamar
     *
     * @return TblGraduados
     */
    public function setPatamar($patamar)
    {
        $this->patamar = $patamar;

        return $this;
    }

    /**
     * Get patamar
     *
     * @return string
     */
    public function getPatamar()
    {
        return $this->patamar;
    }

    /**
     * Set ultimaAtualizacao
     *
     * @param \DateTime $ultimaAtualizacao
     *
     * @return TblGraduados
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
     * Set quantidadeBronzes
     *
     * @param integer $quantidadeBronzes
     *
     * @return TblGraduados
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
     * Set quantidadeDiamante
     *
     * @param integer $quantidadeDiamante
     *
     * @return TblGraduados
     */
    public function setQuantidadeDiamante($quantidadeDiamante)
    {
        $this->quantidadeDiamante = $quantidadeDiamante;

        return $this;
    }

    /**
     * Get quantidadeDiamante
     *
     * @return integer
     */
    public function getQuantidadeDiamante()
    {
        return $this->quantidadeDiamante;
    }

    /**
     * Set quantidadeDuploDiamante
     *
     * @param integer $quantidadeDuploDiamante
     *
     * @return TblGraduados
     */
    public function setQuantidadeDuploDiamante($quantidadeDuploDiamante)
    {
        $this->quantidadeDuploDiamante = $quantidadeDuploDiamante;

        return $this;
    }

    /**
     * Get quantidadeDuploDiamante
     *
     * @return integer
     */
    public function getQuantidadeDuploDiamante()
    {
        return $this->quantidadeDuploDiamante;
    }

    /**
     * Set loginConsultor
     *
     * @param string $loginConsultor
     *
     * @return TblGraduados
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
     * Set pontosTotais
     *
     * @param float $pontosTotais
     *
     * @return TblGraduados
     */
    public function setPontosTotais($pontosTotais)
    {
        $this->pontosTotais = $pontosTotais;

        return $this;
    }

    /**
     * Get pontosTotais
     *
     * @return float
     */
    public function getPontosTotais()
    {
        return $this->pontosTotais;
    }

    /**
     * Set linhasBronze
     *
     * @param integer $linhasBronze
     *
     * @return TblGraduados
     */
    public function setLinhasBronze($linhasBronze)
    {
        $this->linhasBronze = $linhasBronze;

        return $this;
    }

    /**
     * Get linhasBronze
     *
     * @return integer
     */
    public function getLinhasBronze()
    {
        return $this->linhasBronze;
    }

    /**
     * Set linhasDiamante
     *
     * @param integer $linhasDiamante
     *
     * @return TblGraduados
     */
    public function setLinhasDiamante($linhasDiamante)
    {
        $this->linhasDiamante = $linhasDiamante;

        return $this;
    }

    /**
     * Get linhasDiamante
     *
     * @return integer
     */
    public function getLinhasDiamante()
    {
        return $this->linhasDiamante;
    }

    /**
     * Set linhasDuploDiamante
     *
     * @param integer $linhasDuploDiamante
     *
     * @return TblGraduados
     */
    public function setLinhasDuploDiamante($linhasDuploDiamante)
    {
        $this->linhasDuploDiamante = $linhasDuploDiamante;

        return $this;
    }

    /**
     * Get linhasDuploDiamante
     *
     * @return integer
     */
    public function getLinhasDuploDiamante()
    {
        return $this->linhasDuploDiamante;
    }
}
