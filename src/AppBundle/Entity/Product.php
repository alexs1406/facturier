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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->features = new \Doctrine\Common\Collections\ArrayCollection();
        $this->productWarehouses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * 
     * @inheritDoc
     */
    public function __toString() {
        return $this->reference;
    }
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
     * Set manufacturer
     *
     * @param string $manufacturer
     *
     * @return Product
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Product
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set salePrice
     *
     * @param float $salePrice
     *
     * @return Product
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;

        return $this;
    }

    /**
     * Get salePrice
     *
     * @return float
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * Set ean
     *
     * @param string $ean
     *
     * @return Product
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * Get ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * Set datUpd
     *
     * @param \DateTime $datUpd
     *
     * @return Product
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
     * @return Product
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
     * Add category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Product
     */
    public function addCategory(\AppBundle\Entity\Category $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \AppBundle\Entity\Category $category
     */
    public function removeCategory(\AppBundle\Entity\Category $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add feature
     *
     * @param \AppBundle\Entity\Feature $feature
     *
     * @return Product
     */
    public function addFeature(\AppBundle\Entity\Feature $feature)
    {
        $this->features[] = $feature;

        return $this;
    }

    /**
     * Remove feature
     *
     * @param \AppBundle\Entity\Feature $feature
     */
    public function removeFeature(\AppBundle\Entity\Feature $feature)
    {
        $this->features->removeElement($feature);
    }

    /**
     * Get features
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Add productWarehouse
     *
     * @param \AppBundle\Entity\ProductWarehouse $productWarehouse
     *
     * @return Product
     */
    public function addProductWarehouse(\AppBundle\Entity\ProductWarehouse $productWarehouse)
    {
        $this->productWarehouses[] = $productWarehouse;

        return $this;
    }

    /**
     * Remove productWarehouse
     *
     * @param \AppBundle\Entity\ProductWarehouse $productWarehouse
     */
    public function removeProductWarehouse(\AppBundle\Entity\ProductWarehouse $productWarehouse)
    {
        $this->productWarehouses->removeElement($productWarehouse);
    }

    /**
     * Get productWarehouses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductWarehouses()
    {
        return $this->productWarehouses;
    }

    /**
     * Set unitMeasure
     *
     * @param \AppBundle\Entity\unitMeasure $unitMeasure
     *
     * @return Product
     */
    public function setUnitMeasure(\AppBundle\Entity\unitMeasure $unitMeasure = null)
    {
        $this->unitMeasure = $unitMeasure;

        return $this;
    }

    /**
     * Get unitMeasure
     *
     * @return \AppBundle\Entity\unitMeasure
     */
    public function getUnitMeasure()
    {
        return $this->unitMeasure;
    }

    /**
     * Add image
     *
     * @param \AppBundle\Entity\ProductImage $image
     *
     * @return Product
     */
    public function addImage(\AppBundle\Entity\ProductImage $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \AppBundle\Entity\ProductImage $image
     */
    public function removeImage(\AppBundle\Entity\ProductImage $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }
}
