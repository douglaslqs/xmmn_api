<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCategorias
 *
 * @ORM\Table(name="tbl_categorias")
 * @ORM\Entity
 */
class TblCategorias
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
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=200, nullable=false)
     */
    private $nome;

    /**
     * @var integer
     *
     * @ORM\Column(name="ativo", type="integer", nullable=false)
     */
    private $ativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="excluido", type="integer", nullable=false)
     */
    private $excluido = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pai", type="integer", nullable=false)
     */
    private $pai = '0';



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
     * Set nome
     *
     * @param string $nome
     *
     * @return TblCategorias
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set ativo
     *
     * @param integer $ativo
     *
     * @return TblCategorias
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
     * Set excluido
     *
     * @param integer $excluido
     *
     * @return TblCategorias
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
     * Set pai
     *
     * @param integer $pai
     *
     * @return TblCategorias
     */
    public function setPai($pai)
    {
        $this->pai = $pai;

        return $this;
    }

    /**
     * Get pai
     *
     * @return integer
     */
    public function getPai()
    {
        return $this->pai;
    }
}
