<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Doctor_pro
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Doctor_pro {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="day", type="string", length=255)
     */
    private $day;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="clinic", type="string", length=255)
     */
    private $clinic;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="strat", type="time")
     */
    private $strat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="time")
     */
    private $end;

    /**
     * @var integer
     *
     * @ORM\Column(name="pay_visite", type="integer")
     */
    private $payVisite;

    /**
     * @var integer
     *
     * @ORM\Column(name="pay_ins", type="integer")
     */
    private $payIns;

     /**
     *
     * @var type 
     * @ORM\OneToMany(targetEntity="Cure", mappedBy="doctor")
     */
    private $customer;
     
    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Doctor_pro
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set day
     *
     * @param string $day
     *
     * @return Doctor_pro
     */
    public function setDay($day) {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return string
     */
    public function getDay() {
        return $this->day;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Doctor_pro
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
     * Set clinic
     *
     * @param string $clinic
     *
     * @return Doctor_pro
     */
    public function setClinic($clinic) {
        $this->clinic = $clinic;

        return $this;
    }

    /**
     * Get clinic
     *
     * @return string
     */
    public function getClinic() {
        return $this->clinic;
    }

    /**
     * Set strat
     *
     * @param \DateTime $strat
     *
     * @return Doctor_pro
     */
    public function setStrat($strat) {
        $this->strat = $strat;

        return $this;
    }

    /**
     * Get strat
     *
     * @return \DateTime
     */
    public function getStrat() {
        return $this->strat;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return Doctor_pro
     */
    public function setEnd($end) {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd() {
        return $this->end;
    }

    /**
     * Set payVisite
     *
     * @param integer $payVisite
     *
     * @return Doctor_pro
     */
    public function setPayVisite($payVisite) {
        $this->payVisite = $payVisite;

        return $this;
    }

    /**
     * Get payVisite
     *
     * @return integer
     */
    public function getPayVisite() {
        return $this->payVisite;
    }

    /**
     * Set payIns
     *
     * @param integer $payIns
     *
     * @return Doctor_pro
     */
    public function setPayIns($payIns) {
        $this->payIns = $payIns;

        return $this;
    }

    /**
     * Get payIns
     *
     * @return integer
     */
    public function getPayIns() {
        return $this->payIns;
    }

    public function createTimeSetter() {
        $this->time = new \DateTime();
    }

    public function __toString() {
        return $this->getDate();
    }

    public function createstartSetter() {
        $this->time = new \DateTime();
    }

    public function createendSetter() {
        $this->time = new \DateTime();
    }

    /**
     * Set doctorsPro
     *
     * @param \AppBundle\Entity\Doctor_pro $doctorsPro
     *
     * @return Doctor_pro
     */
    public function setDoctorsPro(\AppBundle\Entity\Doctor_pro $doctorsPro = null) {
        $this->doctors_pro = $doctorsPro;

        return $this;
    }

    /**
     * Get doctorsPro
     *
     * @return \AppBundle\Entity\Doctor_pro
     */
    public function getDoctorsPro() {
        return $this->doctors_pro;
    }

    /**
     * Set doctors
     *
     * @param \AppBundle\Entity\Doctor_pro $doctors
     *
     * @return Doctor_pro
     */
    public function setDoctors(\AppBundle\Entity\Doctor_pro $doctors = null) {
        $this->doctors = $doctors;

        return $this;
    }

    /**
     * Get doctors
     *
     * @return \AppBundle\Entity\Doctor_pro
     */
    public function getDoctors() {
        return $this->doctors;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Cure $customer
     *
     * @return Doctor_pro
     */
    public function setCustomer(\AppBundle\Entity\Cure $customer = null) {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\Cure
     */
    public function getCustomer() {
        return $this->customer;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->customer = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add customer
     *
     * @param \AppBundle\Entity\Cure $customer
     *
     * @return Doctor_pro
     */
    public function addCustomer(\AppBundle\Entity\Cure $customer) {
        $this->customer[] = $customer;

        return $this;
    }

    /**
     * Remove customer
     *
     * @param \AppBundle\Entity\Cure $customer
     */
    public function removeCustomer(\AppBundle\Entity\Cure $customer) {
        $this->customer->removeElement($customer);
    }


    /**
     * Set doctor
     *
     * @param \AppBundle\Entity\Doctor_pro $doctor
     *
     * @return Doctor_pro
     */
    public function setDoctor(\AppBundle\Entity\Doctor_pro $doctor = null)
    {
        $this->doctor = $doctor;

        return $this;
    }

    /**
     * Get doctor
     *
     * @return \AppBundle\Entity\Doctor_pro
     */
    public function getDoctor()
    {
        return $this->doctor;
    }
}
