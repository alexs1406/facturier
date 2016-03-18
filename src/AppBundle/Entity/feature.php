<?php
 
namespace AppBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Feature
 * @ORM\Table()
 * @ORM\Entity
 */

class Feature
{
/**
 * @var integer
 * @ORM\Column(name="id", type="integer")
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO")
 * 
 */
private $id;
/**
 *
 * @ORM\OneToOne(targetEntity="FeatureName")
 */
private $name;
/**
 *
 * @var string
 * @ORM\Column(name="value", type="string")
 */
private $value;
/**
 *
 * @ORM\ManyToOne(targetEntity="Product",inversedBy="features")
 */
private $product;
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
 

