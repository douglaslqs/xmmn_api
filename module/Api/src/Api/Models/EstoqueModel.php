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

class EstoqueModel {
    /**
     * @var EntityManager
     */
    private $em;

    public $estoque;

    public function __construct(EntityManager $em)
    {
            $this->em = $em;
    }

    public function search($filters)
    {
        $query = $this->em->createQueryBuilder();

        $query->select('TblProdutos.referencia,TblProdutos.marca, TblEstoqueCdn.idCdn as idLoja,TblCategorias.nome as categoria, TblEstoqueCdn.estoque as quantidade,TblProdutos.ativo')
            ->from('Application\Entity\TblEstoqueCdn','TblEstoqueCdn')
            ->leftJoin('Application\Entity\TblProdutos','TblProdutos','with','TblEstoqueCdn.idProduto = TblProdutos.id')
            ->leftJoin('Application\Entity\TblCategorias','TblCategorias','with','TblProdutos.idCategoria = TblCategorias.id')
            ->where('1=1');

        if(isset($filters['idLoja']))
            $query->andWhere('TblEstoqueCdn.idCdn = :idcdn')->setParameter('idcdn',$filters['idLoja']);

        if(isset($filters['marca']))
            $query->andWhere('TblProdutos.marca like :marca')->setParameter('marca',"%".$filters['marca']."%");

        if(isset($filters['referencia']))
            $query->andWhere('TblProdutos.referencia = :referencia')->setParameter('referencia',$filters['referencia']);

        if(isset($filters['categoria']))
            $query->andWhere('TblCategorias.nome like :categoria')->setParameter('categoria',"%".$filters['categoria']."%");


        $this->estoque = $query->getQuery()->getArrayResult();

        return $this->estoque;
    }

} 