<?php
 
namespace AppBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * @ORM\Table("document_line")
 * @ORM\Entity
 * @UniqueEntity("name")
 */

class DocumentLine
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
 * @ORM\ManyToOne(targetEntity="Product")
 */
private $product;
/**
 *
 * @var integer
 * @ORM\Column(name="quantity", type="integer")
 */
private $quantity;
/**
 *
 * @var float
 * @ORM\Column(name="sale_price", type="float")
 */
private $salePrice;
/**
 *
 * @ORM\ManyToOne(targetEntity="Document", inversedBy="documentLines")
 */
private $document;
/**
 *
 * @ORM\ManyToOne(targetEntity="VatRate")
 */
private $vatRate;
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
 

