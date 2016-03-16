<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 *
 * @ORM\Table("product_image")
 * @ORM\Entity
 * @UniqueEntity("name")
 */

class ProductImage{
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
     * @ORM\ManyToMany(targetEntity="Product",inversedBy="images")
     */
    private $products;
    /**
     *
     * @var type string
     * @ORM\Column(name="name", type="string")
     */
    private $name;
    /**
     *
     * @var type string
     * @ORM\Column(name="path", type="string")
     */    
    private $path;
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
 

