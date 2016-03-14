<?php
 
namespace AppBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
 
/**
 * @ORM\Table()
 * @ORM\Entity
 */
class Shipping
{
/**
 * @var integer
 * @ORM\Column(name="id", type="integer")
 * @ORM\Id
 * @ORM\GeneratedValue()
 */
private $id;
/**
 * @var string
 * @ORM\Column(name="ship_name", type="string")
 */
private $shipName;
}