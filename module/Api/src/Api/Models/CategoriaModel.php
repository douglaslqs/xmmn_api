<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 18/04/17
 * Time: 00:45
 */

namespace Api\Models;

use Application\Entity\TblCategorias;
use Application\Entity\TblConsultor;
use Doctrine\ORM\EntityManager;

class CategoriaModel{


    /*
     * *
     * @var EntityManager
     * **/
    private $em;



    /*
     *
     * @var Application/Entity/TblCategoria
     * */
    private $categorias;

    /*
     *
     * @var Application/Entity/TblCategoria
     * */
    private $categoria;



    public function __construct(EntityManager $em)
    {
        $this->em = $em;

    }


    public function setCategoria($post)
    {
        $this->categoria = new TblCategorias();
        $this->categoria->setNome($post['categoria']);

        $this->em->persist($this->categoria);
        $this->em->flush();

        return $this;
    }

    public function getCategoria()
    {
        if(!$this->categoria)
            return null;

        return $this->categoria;
    }

    public function setCategorias($filters)
    {

        $query = $this->em->createQueryBuilder();

        $query->select('TblCategorias')->from('Application\Entity\TblCategorias','TblCategorias')->where('1=1');

        if($filters['categoria'])
            $query->andWhere('TblCategorias.nome like :categoria')->setParameter('categoria',"%".$filters['categoria']."%");


        try{
            $this->categorias = $query->getQuery()->getResult();
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
        return $this;
    }


    public function getCategorias()
    {
        if(!$this->categorias)
            return array();

        return $this->categorias;
    }

}
