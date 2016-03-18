<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 * @UniqueEntity("email")
 */

class User{
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
     * @ORM\ManyToMany(targetEntity="Role", inversedBy="roles")
     */
    private $roles;
    /**
     *
     * @var string
     * @ORM\Column(name="username", type="string")
     */
    private $username;
    /**
     *
     * @var string
     * @ORM\Column(name="email", type="string")
     */    
    private $email;
    /**
     *
     * @var string
     * @ORM\Column(name="password", type="string")
     */        
    private $password;
    
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
 

