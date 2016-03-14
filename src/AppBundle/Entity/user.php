<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Partner
 *
 * @ORM\Table()
 * @ORM\Entity
 *  
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
     * @ORM\ManyToOne (targetEntity="Address")
     */
    private $address;
}
 

