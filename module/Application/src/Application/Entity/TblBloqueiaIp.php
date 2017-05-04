<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblBloqueiaIp
 *
 * @ORM\Table(name="tbl_bloqueia_ip")
 * @ORM\Entity
 */
class TblBloqueiaIp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
