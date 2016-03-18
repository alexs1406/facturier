<?php
 
namespace AppBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
//use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * @ORM\Table()
 * @ORM\Entity
 */

class Document
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
 * @ORM\ManyToOne(targetEntity="Partner")
 */
private $partner;
/**
 *
 * @ORM\ManyToOne(targetEntity="DocType")
 */
private $docType;
/**
 *
 * @ORM\ManyToOne(targetEntity="PaymentType")
 */
private $paymentType;
/**
 *
 * @ORM\OneToMany(targetEntity="documentLine", mappedBy="document")
 */
private $documentLines;
/**
 *
 * @var string
 * @ORM\Column(name="doc_number", type="string")
 */
private $docNumber;
/**
 *
 * @var string
 * @ORM\Column(name="doc_status", type="string")
 */
private $docStatus;
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
 

