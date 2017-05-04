<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 18/04/17
 * Time: 00:45
 */

namespace Api\Models;

use Application\Entity\TblConsultor;
use Doctrine\ORM\EntityManager;

class ConsultorModel{


    /*
     * *
     * @var EntityManager
     * **/
    private $em;



    /*
     *
     * @var Application/Entity/TblConsultor
     * */
    private $consultores;



    public function __construct(EntityManager $em)
    {
        $this->em = $em;


    }

    public function setConsultorByParam($filters)
    {

        $query = $this->em->createQueryBuilder();

        $query->select('TblConsultor')->from('Application\Entity\TblConsultor','TblConsultor')->where('1=1');

        if($filters['loginConsultor'])
            $query->andWhere('TblConsultor.loginConsultor = :filtroLogin')->setParameter('filtroLogin',$filters['loginConsultor']);

        if($filters['cpfConsultor'])
            $query->andWhere('TblConsultor.cpfConsultor = :filtroCpf')->setParameter('filtroCpf',$filters['cpfConsultor']);

        if($filters['cnpjConsultor'])
            $query->andWhere('TblConsultor.cnpjConsultor = :filtroCnpj')->setParameter('filtroCnpj',$filters['cnpjConsultor']);

        if($filters['dataCadastroConsultor'])
            $query->andWhere('TblConsultor.dataCadastroConsultor >= :filtroData OR TblConsultor.dataCadastroConsultor <= :filtroData ')->setParameter('filtroData',$filters['dataCadastroConsultor']);


    try{
        $this->consultores = $query->getQuery()->getResult();
    }catch(\Exception $e){
        throw new \Exception($e->getMessage());
    }
        return $this;
    }


    public function getConsultores()
    {
        if(!$this->consultores)
            return array();

        return $this->consultores;
    }

}
