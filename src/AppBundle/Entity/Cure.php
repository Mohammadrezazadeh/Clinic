<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cure
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Cure {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="fathername", type="string", length=255)
     */
    private $fathername;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="nastionalCode", type="integer")
     */
    private $nastionalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255)
     */
    private $gender;

    /**
     * @var integer
     *
     * @ORM\Column(name="telphone", type="integer")
     */
    private $telphone;

    /**
     * @var integer
     *
     * @ORM\Column(name="mobile", type="integer")
     */
    private $mobile;

   /**
     * @ORM\ManyToOne(targetEntity="Doctor_pro", inversedBy="customer")
     * 
     */
    private $doctor;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Cure
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Cure
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * Set fathername
     *
     * @param string $fathername
     *
     * @return Cure
     */
    public function setFathername($fathername) {
        $this->fathername = $fathername;

        return $this;
    }

    /**
     * Get fathername
     *
     * @return string
     */
    public function getFathername() {
        return $this->fathername;
    }

    /**
     * Set nastionalCode
     *
     * @param integer $nastionalCode
     *
     * @return Cure
     */
    public function setNastionalCode($nastionalCode) {
        $this->nastionalCode = $nastionalCode;

        return $this;
    }

    /**
     * Get nastionalCode
     *
     * @return integer
     */
    public function getNastionalCode() {
        return $this->nastionalCode;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Cure
     */
    public function setGender($gender) {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender() {
        return $this->gender;
    }

    /**
     * Set telphone
     *
     * @param integer $telphone
     *
     * @return Cure
     */
    public function setTelphone($telphone) {
        $this->telphone = $telphone;

        return $this;
    }

    /**
     * Get telphone
     *
     * @return integer
     */
    public function getTelphone() {
        return $this->telphone;
    }

    /**
     * Set mobile
     *
     * @param integer $mobile
     *
     * @return Cure
     */
    public function setMobile($mobile) {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return integer
     */
    public function getMobile() {
        return $this->mobile;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Cure
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set doctor
     *
     * @param \AppBundle\Entity\Doctor_pro $doctor
     *
     * @return Cure
     */
    public function setDoctor(\AppBundle\Entity\Doctor_pro $doctor = null) {
        $this->doctor = $doctor;

        return $this;
    }

    /**
     * Get doctor
     *
     * @return \AppBundle\Entity\Doctor_pro
     */
    public function getDoctor() {
        return $this->doctor;
    }

    /**
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return Cure
     */
    public function setCustomerId($customerId) {
        $this->customer_id = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return integer
     */
    public function getCustomerId() {
        return $this->customer_id;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->customer = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add customer
     *
     * @param \AppBundle\Entity\Cure $customer
     *
     * @return Cure
     */
    public function addCustomer(\AppBundle\Entity\Cure $customer)
    {
        $this->customer[] = $customer;

        return $this;
    }

    /**
     * Remove customer
     *
     * @param \AppBundle\Entity\Cure $customer
     */
    public function removeCustomer(\AppBundle\Entity\Cure $customer)
    {
        $this->customer->removeElement($customer);
    }

    /**
     * Get customer
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
