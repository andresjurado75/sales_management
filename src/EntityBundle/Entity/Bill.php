<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Bill
 *
 * @ORM\Table(name="bill")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\BillRepository")
 */
class Bill
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
     * @var \DateTime
     *
     * @ORM\Column(name="create_at", type="datetime")
     */
    private $createAt;


    /**
    *
    * @ORM\ManyToOne(targetEntity="Customer", inversedBy="bill")
    * @ORM\JoinColumn(name="id_customer", referencedColumnName="id")
    *
    */

    private $customer;


    /**
    *
    * @ORM\ManyToOne(targetEntity="employee", inversedBy="bill")
    * @ORM\JoinColumn(name="id_employee", referencedColumnName="id")
    *
    */

    private $employee;


    /**
    *
    *@ORM\OneToMany(targetEntity="Detail", mappedBy="bill")
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
     * Set createAt
     *
     * @param \DateTime $createAt
     * @return Bill
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime 
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Set customer
     *
     * @param \EntityBundle\Entity\Customer $customer
     * @return Bill
     */
    public function setCustomer(\EntityBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \EntityBundle\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set employee
     *
     * @param \EntityBundle\Entity\employee $employee
     * @return Bill
     */
    public function setEmployee(\EntityBundle\Entity\employee $employee = null)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return \EntityBundle\Entity\employee 
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Add details
     *
     * @param \EntityBundle\Entity\Detail $details
     * @return Bill
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
