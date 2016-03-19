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



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return Feature
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set datUpd
     *
     * @param \DateTime $datUpd
     *
     * @return Feature
     */
    public function setDatUpd($datUpd)
    {
        $this->datUpd = $datUpd;

        return $this;
    }

    /**
     * Get datUpd
     *
     * @return \DateTime
     */
    public function getDatUpd()
    {
        return $this->datUpd;
    }

    /**
     * Set datCre
     *
     * @param \DateTime $datCre
     *
     * @return Feature
     */
    public function setDatCre($datCre)
    {
        $this->datCre = $datCre;

        return $this;
    }

    /**
     * Get datCre
     *
     * @return \DateTime
     */
    public function getDatCre()
    {
        return $this->datCre;
    }

    /**
     * Set name
     *
     * @param \AppBundle\Entity\FeatureName $name
     *
     * @return Feature
     */
    public function setName(\AppBundle\Entity\FeatureName $name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return \AppBundle\Entity\FeatureName
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set product
     *
     * @param \AppBundle\Entity\Product $product
     *
     * @return Feature
     */
    public function setProduct(\AppBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \AppBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }
}
