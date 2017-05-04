<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 02/05/17
 * Time: 00:20
 */

namespace Api\Models;


use Application\Entity\TblPedidos;
use Doctrine\ORM\EntityManager;

class PedidoModel {
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @var TblPedidos
    */
    public $pedidos;

    public function __construct(EntityManager $em)
    {
            $this->em = $em;
    }

    public function search($filters)
    {
        $query = $this->em->createQueryBuilder();

        $query->select('TblPedidos.idCdn as idLoja, TblPedidos.idConsultor, TblPedidos.dataPagamento,
                            TblPedidos.data,TblPedidos.status,TblPedidos.cancelado,TblPedidos.tipoEntrega,TblPedidos.formaEntrega,
                            TblPedidos.endereco,TblPedidos.numero,TblPedidos.bairro,TblPedidos.cidade,TblPedidos.estado,
                            TblPedidos.cep,TblPedidos.complemento,TblPedidos.tipo,TblPedidos.tipoPagamento,TblPedidos.subtotal,
                            TblPedidos.total,TblPedidos.frete,TblPedidos.dataCancelamento')
                    ->from('Application\Entity\TblPedidos','TblPedidos')
                    ->where('1=1');



        if($filters['idLoja'])
            $query->andWhere('TblPedidos.idCdn = :idLoja')->setParameter('idLoja',$filters['idLoja']);

        if($filters['idConsultor'])
            $query->andWhere('TblPedidos.idConsultor = :consultor')->setParameter('consultor',$filters['idConsultor']);

        if($filters['dataPedido'])
            $query->andWhere('TblPedidos.data = :dataPedido')->setParameter('dataPedido',$filters['dataPedido']);

        if($filters['dataPag'])
            $query->andWhere('TblPedidos.dataPagamento = :dataPag')->setParameter('dataPag',$filters['dataPag']);

        if($filters['status'])
            $query->andWhere('TblPedidos.status = :status')->setParameter('status',$filters['status']);

        if($filters['integracao'])
            $query->andWhere('TblPedidos.integracao = :integracao')->setParameter('integracao',$filters['integracao']);

        if($filters['cancelado'])
            $query->andWhere('TblPedidos.cancelado = :cancelado')->setParameter('cancelado',$filters['cancelado']);

        try{
            $this->pedidos = $query->setMaxResults(1000)->getQuery()->getArrayResult();
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }

        if(!$this->pedidos)
            return null;

        return $this->pedidos;
    }

} 