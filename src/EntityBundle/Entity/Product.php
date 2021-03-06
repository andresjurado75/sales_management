<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", unique=true)
     */
    private $idProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=60)
     */
    private $productName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="cost", type="integer")
     */
    private $cost;

    /**
    *
    *@ORM\ManyToOne(targetEntity="Category",inversedBy="product")
    *@ORM\JoinColumn(name="id_category", referencedColumnName="id")
    *
    */

    private $category;

    /**
    *
    *@ORM\OneToMany(targetEntity="Detail", mappedBy="product")
    *
    */

    private $details;

    public function __construct(){

        $this-> details = new ArrayCollection();
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
     * Set idProduct
     *
     * @param integer $idProduct
     * @return Product
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    /**
     * Get idProduct
     *
     * @return integer 
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Set productName
     *
     * @param string $productName
     * @return Product
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string 
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     * @return Product
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return integer 
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set category
     *
     * @param \EntityBundle\Entity\Category $category
     * @return Product
     */
    public function setCategory(\EntityBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \EntityBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add details
     *
     * @param \EntityBundle\Entity\Detail $details
     * @return Product
     */
    public function addDetail(\EntityBundle\Entity\Detail $details)
    {
        $this->details[] = $details;

        return $this;
    }

    /**
     * Remove details
     *
     * @param \EntityBundle\Entity\Detail $details
     */
    public function removeDetail(\EntityBundle\Entity\Detail $details)
    {
        $this->details->removeElement($details);
    }

    /**
     * Get details
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetails()
    {
        return $this->details;
    }
}
