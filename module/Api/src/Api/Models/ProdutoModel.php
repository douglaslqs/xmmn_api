<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 02/05/17
 * Time: 00:20
 */

namespace Api\Models;


use Application\Entity\TblProdutos;
use Doctrine\ORM\EntityManager;

class ProdutoModel {
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @var TblProdutos
    */
    public $produtos;

    public function __construct(EntityManager $em)
    {
            $this->em = $em;
    }

    public function search($filters)
    {
        $query = $this->em->createQueryBuilder();

        $query->select('TblProdutos')
            ->from('Application\Entity\TblProdutos','TblProdutos')
            ->leftJoin('Application\Entity\TblCategorias','TblCategorias','with','TblProdutos.idCategoria = TblCategorias.id')
            ->where('1=1 and TblProdutos.ativo = 1');

        $filters = array();

        if($filters['nome'])
            $query->andWhere('TblProdutos.nome like :nome')->setParameter('nome',"%".$filters['nome']."%");

        if($filters['marca'])
            $query->andWhere('TblProdutos.marca like :marca')->setParameter('marca',"%".$filters['marca']."%");

        if($filters['referencia'])
            $query->andWhere('TblProdutos.referencia like :referencia')->setParameter('referencia',"%".$filters['referencia']."%");

        if($filters['categoria'])
            $query->andWhere('TblCategoria.nome like :categoria')->setParameter('categoria',"%".$filters['categoria']."%");

        try{
            $this->produtos = $query->getQuery()->getArrayResult();
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }

        if(!$this->produtos)
            return null;

        return $this->produtos;
    }

} 