<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * product_warehouse
 *
 * @ORM\Table("product_warehouse")
 * @ORM\Entity
 */

class ProductWarehouse{
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
     * @var integer
     * @ORM\Column(name="quantity", type="integer") 
     */
    
    private $quantity;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Product",inversedBy="productWarehouses")
     */
    private $product;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Warehouse")
     */
    private $warehouse;


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
 

