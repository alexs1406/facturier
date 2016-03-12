<?php
 
namespace AppBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
 
/**
 * Partner
 *
 * @ORM\Table(name="partner")
 * @ORM\Entity
 * @UniqueEntity("nume")
 *  
 */
class Partner
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nume", type="string")
     * 
     */
    private $name;   
    
    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="Address", mappedBy="partner")
     * 
     */
    private $address; 
    
      /**
     * @var \DateTime
     *
     * @ORM\Column(name="dat_cre", type="datetime")
     */  
    
    private $datCre;
 
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dat_upd", type="datetime")
     */
    private $datUpd;    
 
}