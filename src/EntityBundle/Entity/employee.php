<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * employee
 *
 * @ORM\Table(name="employee")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\employeeRepository")
 */
class employee implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", unique=true)
     * @Assert\NotBlank(message="Debe Ingresar la Identificacion del Empleado")
     */
    private $idEmployee;

    /**
     * @var string
     *
     * @ORM\Column(name="employee_name", type="string", length=50)
     * @Assert\NotBlank(message="Debe Ingresar el Nombre del Empleado")
     * @Assert\Type("string")
     */
    private $employeeName;

    /**
     * @var string
     *
     * @ORM\Column(name="employee_lastname", type="string", length=50)
     * @Assert\NotBlank()
     * @Assert\Type("string")
     */
    private $employeeLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="roles", type="string", length=20)
     * @Assert\Choice(choices={"ROLE_USER","ROLE_ADMIN"}, message = "ROL NO VALIDO")
     */
    private $roles;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Type("string")
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80)
     * @Assert\NotBlank()
     * @Assert\Email(message = "valor invalido {{ value }}")
     */
    private $email;

    /**
    *
    * @ORM\OneToMany(targetEntity="Bill", mappedBy="employee")
    * 
    */

    private $bills;

    public function __construct(){

        $this-> bills = new ArrayCollection();
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
     * Set idEmployee
     *
     * @param integer $idEmployee
     * @return employee
     */
    public function setIdEmployee($idEmployee)
    {
        $this->idEmployee = $idEmployee;

        return $this;
    }

    /**
     * Get idEmployee
     *
     * @return integer 
     */
    public function getIdEmployee()
    {
        return $this->idEmployee;
    }

    /**
     * Set employeeName
     *
     * @param string $employeeName
     * @return employee
     */
    public function setEmployeeName($employeeName)
    {
        $this->employeeName = $employeeName;

        return $this;
    }

    /**
     * Get employeeName
     *
     * @return string 
     */
    public function getEmployeeName()
    {
        return $this->employeeName;
    }

    /**
     * Set employeeLastname
     *
     * @param string $employeeLastname
     * @return employee
     */
    public function setEmployeeLastname($employeeLastname)
    {
        $this->employeeLastname = $employeeLastname;

        return $this;
    }

    /**
     * Get employeeLastname
     *
     * @return string 
     */
    public function getEmployeeLastname()
    {
        return $this->employeeLastname;
    }

    /**
     * Set roles
     *
     * @param string $roles
     * @return employee
     */
    public function setRole($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return string 
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return employee
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return employee
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set roles
     *
     * @param string $roles
     * @return employee
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Add bills
     *
     * @param \EntityBundle\Entity\Bill $bills
     * @return employee
     */
    public function addBill(\EntityBundle\Entity\Bill $bills)
    {
        $this->bills[] = $bills;

        return $this;
    }

    /**
     * Remove bills
     *
     * @param \EntityBundle\Entity\Bill $bills
     */
    public function removeBill(\EntityBundle\Entity\Bill $bills)
    {
        $this->bills->removeElement($bills);
    }

    /**
     * Get bills
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBills()
    {
        return $this->bills;
    }

    public function getSalt(){

    }

    public function getUsername(){

    }

    public function eraseCredentials(){
        
    }

}
