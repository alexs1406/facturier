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
 * @ORM\ManyToMany(targetEntity="Category", inversedBy="products")
 */
private $categories;
/**
 *
 * @ORM\OneToMany(targetEntity="Feature",mappedBy="product")
 */

private $features;
/**
 *
 * @ORM\OneToMany(targetEntity="ProductWarehouse", mappedBy="product")
 */
private $productWarehouses;
/**
 *
 * @ORM\ManyToOne(targetEntity="unitMeasure")
 */
private $unitMeasure;
/**
 *
 * @var string
 * @ORM\Column("manufacturer", type="string")
 */
private $manufacturer;
/**
 *
 * @var string
 * @ORM\Column("reference", type="string")
 */
private $reference;
/**
 *
 * @var float
 * @ORM\Column("sale_price", type="float")
 */
private $salePrice;
/**
 *
 * @var string
 * @ORM\Column("ean", type="string")
 */
private $ean;
/**
 *
 * @ORM\ManyToMany(targetEntity="ProductImage", inversedBy="products")
 */
private $images;
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