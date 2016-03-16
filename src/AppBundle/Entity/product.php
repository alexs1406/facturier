<?php
 
namespace AppBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Product
 * @ORM\Table()
 * @ORM\Entity
 */

class Product
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
 * @var string
 * @ORM\ManyToMany(targetEntity="Category", inversedBy="products")
 */
private $categories;
/**
 *
 * @var string
 * @ORM\OneToMany(targetEntity="Feature",mappedBy="product")
 */

private $features;
/**
 *
 * @var string
 * @ORM\ManyToOne(targetEntity="unitMeasure")
 */
private $unitMeasure;
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