<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 02/05/17
 * Time: 01:01
 */

namespace Api\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TesteController extends AbstractActionController{

    public function diegoAction()
    {
        $filters['idConsultor'] = '15';

        $query = $this->getEntityManager()->createQueryBuilder();

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
            $query->andWhere('TblPedidos.idConsultor = :idConsultor')->setParameter('idConsultor',$filters['idConsultor']);

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
            $estoque = $query->getQuery()->getArrayResult();
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }

        foreach($estoque as $pedido){
            $data['produto'][$i]['idLoja'] = $pedido['idLoja'];
            $data['produto'][$i]['idConsultor'] = $pedido['idConsultor'];
            $data['produto'][$i]['dataPedido'] = $pedido['data'];
                                $data['produto'][$i]['tipoEntrega'] = $pedido['tipoEntrega'];
            $data['produto'][$i]['formaEntrega'] = $pedido['formaEntrega'];
            $data['produto'][$i]['endereco'] = $pedido['endereco'];
            $data['produto'][$i]['numero'] = $pedido['numero'];
            $data['produto'][$i]['bairro'] = $pedido['bairro'];
                                $data['produto'][$i]['cidade'] = $pedido['cidade'];
            $data['produto'][$i]['estado'] = $pedido['estado'];
            $data['produto'][$i]['cep'] = $pedido['cep'];
            $data['produto'][$i]['complemento'] = $pedido['complemento'];
                                $data['produto'][$i]['tipo'] = $pedido['tipo'];
            $data['produto'][$i]['tipoPagamento'] = $pedido['tipoPagamento'];
            $data['produto'][$i]['subtotal'] = $pedido['subtotal'];
            $data['produto'][$i]['total'] = $pedido['total'];
            $data['produto'][$i]['frete'] = $pedido['frete'];
            $data['produto'][$i]['dataPag'] = $pedido['dataPagamento'];
            $data['produto'][$i]['status'] = $pedido['status'];
            $data['produto'][$i]['dataPag'] = $pedido['dataPagamento'];
            $data['produto'][$i]['cancelado'] = $pedido['cancelado'];
            $data['produto'][$i]['dataCancelado'] = $pedido['dataCancelado'];

        }


        \Zend\Debug\Debug::dump($data);

        return new ViewModel();
    }
} 