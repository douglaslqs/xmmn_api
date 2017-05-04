<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblArvore
 *
 * @ORM\Table(name="tbl_arvore", indexes={@ORM\Index(name="id_consultor", columns={"id_consultor"}), @ORM\Index(name="esquerda_consultor", columns={"esquerda_consultor"}), @ORM\Index(name="direita_consultor", columns={"direita_consultor"}), @ORM\Index(name="patrocinador_consultor", columns={"patrocinador_consultor"}), @ORM\Index(name="in_patrocinador_lado", columns={"patrocinador_lado"}), @ORM\Index(name="in_opcao_arvore", columns={"opcao_arvore_consultor"})})
 * @ORM\Entity
 */
class TblArvore
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_arvore", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArvore;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_consultor", type="integer", nullable=true)
     */
    private $idConsultor;

    /**
     * @var float
     *
     * @ORM\Column(name="pontos_esquerda", type="float", precision=10, scale=0, nullable=false)
     */
    private $pontosEsquerda;

    /**
     * @var float
     *
     * @ORM\Column(name="pontos_direita", type="float", precision=10, scale=0, nullable=false)
     */
    private $pontosDireita;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_consultor", type="string", length=100, nullable=true)
     */
    private $nomeConsultor;

    /**
     * @var integer
     *
     * @ORM\Column(name="esquerda_consultor", type="integer", nullable=true)
     */
    private $esquerdaConsultor;

    /**
     * @var integer
     *
     * @ORM\Column(name="direita_consultor", type="integer", nullable=true)
     */
    private $direitaConsultor;

    /**
     * @var integer
     *
     * @ORM\Column(name="patrocinador_consultor", type="integer", nullable=true)
     */
    private $patrocinadorConsultor;

    /**
     * @var integer
     *
     * @ORM\Column(name="opcao_arvore_consultor", type="integer", nullable=true)
     */
    private $opcaoArvoreConsultor;

    /**
     * @var float
     *
     * @ORM\Column(name="pontos_esquerda_historico", type="float", precision=10, scale=0, nullable=true)
     */
    private $pontosEsquerdaHistorico = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pontos_direita_historico", type="float", precision=10, scale=0, nullable=true)
     */
    private $pontosDireitaHistorico = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="patrocinador_lado", type="string", length=1, nullable=true)
     */
    private $patrocinadorLado;

    /**
     * @var string
     *
     * @ORM\Column(name="sem_upline", type="string", length=1, nullable=true)
     */
    private $semUpline;

    /**
     * @var string
     *
     * @ORM\Column(name="alterado_nova_rede", type="string", length=1, nullable=true)
     */
    private $alteradoNovaRede;



    /**
     * Get idArvore
     *
     * @return integer
     */
    public function getIdArvore()
    {
        return $this->idArvore;
    }

    /**
     * Set idConsultor
     *
     * @param integer $idConsultor
     *
     * @return TblArvore
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
     * Set pontosEsquerda
     *
     * @param float $pontosEsquerda
     *
     * @return TblArvore
     */
    public function setPontosEsquerda($pontosEsquerda)
    {
        $this->pontosEsquerda = $pontosEsquerda;

        return $this;
    }

    /**
     * Get pontosEsquerda
     *
     * @return float
     */
    public function getPontosEsquerda()
    {
        return $this->pontosEsquerda;
    }

    /**
     * Set pontosDireita
     *
     * @param float $pontosDireita
     *
     * @return TblArvore
     */
    public function setPontosDireita($pontosDireita)
    {
        $this->pontosDireita = $pontosDireita;

        return $this;
    }

    /**
     * Get pontosDireita
     *
     * @return float
     */
    public function getPontosDireita()
    {
        return $this->pontosDireita;
    }

    /**
     * Set nomeConsultor
     *
     * @param string $nomeConsultor
     *
     * @return TblArvore
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
     * Set esquerdaConsultor
     *
     * @param integer $esquerdaConsultor
     *
     * @return TblArvore
     */
    public function setEsquerdaConsultor($esquerdaConsultor)
    {
        $this->esquerdaConsultor = $esquerdaConsultor;

        return $this;
    }

    /**
     * Get esquerdaConsultor
     *
     * @return integer
     */
    public function getEsquerdaConsultor()
    {
        return $this->esquerdaConsultor;
    }

    /**
     * Set direitaConsultor
     *
     * @param integer $direitaConsultor
     *
     * @return TblArvore
     */
    public function setDireitaConsultor($direitaConsultor)
    {
        $this->direitaConsultor = $direitaConsultor;

        return $this;
    }

    /**
     * Get direitaConsultor
     *
     * @return integer
     */
    public function getDireitaConsultor()
    {
        return $this->direitaConsultor;
    }

    /**
     * Set patrocinadorConsultor
     *
     * @param integer $patrocinadorConsultor
     *
     * @return TblArvore
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
     * Set opcaoArvoreConsultor
     *
     * @param integer $opcaoArvoreConsultor
     *
     * @return TblArvore
     */
    public function setOpcaoArvoreConsultor($opcaoArvoreConsultor)
    {
        $this->opcaoArvoreConsultor = $opcaoArvoreConsultor;

        return $this;
    }

    /**
     * Get opcaoArvoreConsultor
     *
     * @return integer
     */
    public function getOpcaoArvoreConsultor()
    {
        return $this->opcaoArvoreConsultor;
    }

    /**
     * Set pontosEsquerdaHistorico
     *
     * @param float $pontosEsquerdaHistorico
     *
     * @return TblArvore
     */
    public function setPontosEsquerdaHistorico($pontosEsquerdaHistorico)
    {
        $this->pontosEsquerdaHistorico = $pontosEsquerdaHistorico;

        return $this;
    }

    /**
     * Get pontosEsquerdaHistorico
     *
     * @return float
     */
    public function getPontosEsquerdaHistorico()
    {
        return $this->pontosEsquerdaHistorico;
    }

    /**
     * Set pontosDireitaHistorico
     *
     * @param float $pontosDireitaHistorico
     *
     * @return TblArvore
     */
    public function setPontosDireitaHistorico($pontosDireitaHistorico)
    {
        $this->pontosDireitaHistorico = $pontosDireitaHistorico;

        return $this;
    }

    /**
     * Get pontosDireitaHistorico
     *
     * @return float
     */
    public function getPontosDireitaHistorico()
    {
        return $this->pontosDireitaHistorico;
    }

    /**
     * Set patrocinadorLado
     *
     * @param string $patrocinadorLado
     *
     * @return TblArvore
     */
    public function setPatrocinadorLado($patrocinadorLado)
    {
        $this->patrocinadorLado = $patrocinadorLado;

        return $this;
    }

    /**
     * Get patrocinadorLado
     *
     * @return string
     */
    public function getPatrocinadorLado()
    {
        return $this->patrocinadorLado;
    }

    /**
     * Set semUpline
     *
     * @param string $semUpline
     *
     * @return TblArvore
     */
    public function setSemUpline($semUpline)
    {
        $this->semUpline = $semUpline;

        return $this;
    }

    /**
     * Get semUpline
     *
     * @return string
     */
    public function getSemUpline()
    {
        return $this->semUpline;
    }

    /**
     * Set alteradoNovaRede
     *
     * @param string $alteradoNovaRede
     *
     * @return TblArvore
     */
    public function setAlteradoNovaRede($alteradoNovaRede)
    {
        $this->alteradoNovaRede = $alteradoNovaRede;

        return $this;
    }

    /**
     * Get alteradoNovaRede
     *
     * @return string
     */
    public function getAlteradoNovaRede()
    {
        return $this->alteradoNovaRede;
    }
}
