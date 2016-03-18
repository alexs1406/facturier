<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Role
 *
 * @ORM\Table()
 * @ORM\Entity
 * @UniqueEntity("name")
 */

class Role{
    /**
     *
     * @var type integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    
    private $id;
    /**
     *
     * @var string
     * @ORM\ManyToMany(targetEntity="User", mappedBy="roles")
     */
    private $users;
    
    /**
     *
     * @var string
     * @ORM\Column(name="name", type="string") 
     */
    
    private $name;
    
    /**
     *
     * @var string
     * @ORM\Column(name="role", type="string") 
     */
    
    private $role;
    
    /**
     *
     * @var \DateTime
     * @ORM\Column(name="dat_upd", type="datetime")
     */
    
    private $datUpd;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dat_cre", type="datetime")
     */
    
    private $datCre;

}
 

