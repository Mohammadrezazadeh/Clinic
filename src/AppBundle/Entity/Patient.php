<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Patient {

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
     * @ORM\Column(name="father_name", type="string", length=255)
     */
    private $fatherName;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255)
     */
    private $gender;

    /**
     * @var integer
     *
     * @ORM\Column(name="nationalCode", type="integer")
     */
    private $nationalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="insurance", type="string", length=255)
     */
    private $insurance;

    /**
     * @var string
     *
     * @ORM\Column(name="birthday", type="date")
     */
    private $birthday;

    /**
     * @var string
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
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;
    
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
     * @return Patient
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
     * @return Patient
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
     * Set fatherName
     *
     * @param string $fatherName
     *
     * @return Patient
     */
    public function setFatherName($fatherName) {
        $this->fatherName = $fatherName;

        return $this;
    }

    /**
     * Get fatherName
     *
     * @return string
     */
    public function getFatherName() {
        return $this->fatherName;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Patient
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
     * Set nationalCode
     *
     * @param integer $nationalCode
     *
     * @return Patient
     */
    public function setNationalCode($nationalCode) {
        $this->nationalCode = $nationalCode;

        return $this;
    }

    /**
     * Get nationalCode
     *
     * @return integer
     */
    public function getNationalCode() {
        return $this->nationalCode;
    }

    /**
     * Set insurance
     *
     * @param string $insurance
     *
     * @return Patient
     */
    public function setInsurance($insurance) {
        $this->insurance = $insurance;

        return $this;
    }

    /**
     * Get insurance
     *
     * @return string
     */
    public function getInsurance() {
        return $this->insurance;
    }

    /**
     * Set telphone
     *
     * @param string $telphone
     *
     * @return Patient
     */
    public function setTelphone($telphone) {
        $this->telphone = $telphone;

        return $this;
    }

    /**
     * Get telphone
     *
     * @return string
     */
    public function getTelphone() {
        return $this->telphone;
    }

    /**
     * Set mobile
     *
     * @param integer $mobile
     *
     * @return Patient
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
     * @return Patient
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
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return Patient
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set group
     *
     * @param \AppBundle\Entity\Group_insurance $group
     *
     * @return Patient
     */
    public function setGroup(\AppBundle\Entity\Group_insurance $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \AppBundle\Entity\Group_insurance
     */
    public function getGroup()
    {
        return $this->group;
    }
}
