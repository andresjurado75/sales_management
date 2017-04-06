<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detail
 *
 * @ORM\Table(name="detail")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\DetailRepository")
 */
class Detail
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
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;


    /**
    *
    *@ORM\ManyToOne(targetEntity="Bill", inversedBy="detail")
    *@ORM\JoinColumn(name="id_bill", referencedColumnName="id");
    *
    */

    private $bill;


    /**
    *
    *@ORM\ManyToOne(targetEntity="Product", inversedBy="detail")
    *@ORM\JoinColumn(name="id_product", referencedColumnName="id");
    *
    */

    private $product;


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
     * Set quantity
     *
     * @param integer $quantity
     * @return Detail
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set bill
     *
     * @param \EntityBundle\Entity\Bill $bill
     * @return Detail
     */
    public function setBill(\EntityBundle\Entity\Bill $bill = null)
    {
        $this->bill = $bill;

        return $this;
    }

    /**
     * Get bill
     *
     * @return \EntityBundle\Entity\Bill 
     */
    public function getBill()
    {
        return $this->bill;
    }

    /**
     * Set product
     *
     * @param \EntityBundle\Entity\Product $product
     * @return Detail
     */
    public function setProduct(\EntityBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \EntityBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}
