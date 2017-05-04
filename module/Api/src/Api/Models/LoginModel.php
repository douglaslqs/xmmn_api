<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 18/04/17
 * Time: 00:45
 */

namespace Api\Models;

use Doctrine\ORM\EntityManager;

class LoginModel{


    /*
     * *
     * @var EntityManager
     * **/
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;

    }

    public function setLogin()
    {

        return $this;
    }

    public function getLogin()
    {
        if(!$this->login)
            return 'Login Não encontrado';

        return $this->login;
    }

}
