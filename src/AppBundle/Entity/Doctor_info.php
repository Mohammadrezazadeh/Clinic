<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Doctor_info
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Doctor_info
{
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
     * @ORM\Column(name="specialty", type="string", length=255)
     */
    private $specialty;

    

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
     * Set name
     *
     * @param string $name
     *
     * @return Doctor_info
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Doctor_info
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set specialty
     *
     * @param string $specialty
     *
     * @return Doctor_info
     */
    public function setSpecialty($specialty)
    {
        $this->specialty = $specialty;

        return $this;
    }

    /**
     * Get specialty
     *
     * @return string
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->doctors = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add doctor
     *
     * @param \AppBundle\Entity\Doctor_info $doctor
     *
     * @return Doctor_info
     */
    public function addDoctor(\AppBundle\Entity\Doctor_info $doctor)
    {
        $this->doctors[] = $doctor;

        return $this;
    }

    /**
     * Remove doctor
     *
     * @param \AppBundle\Entity\Doctor_info $doctor
     */
    public function removeDoctor(\AppBundle\Entity\Doctor_info $doctor)
    {
        $this->doctors->removeElement($doctor);
    }

    /**
     * Get doctors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDoctors()
    {
        return $this->doctors;
    }

    /**
     * Set doctors
     *
     * @param \AppBundle\Entity\Doctor_info $doctors
     *
     * @return Doctor_info
     */
    public function setDoctors(\AppBundle\Entity\Doctor_info $doctors = null)
    {
        $this->doctors = $doctors;

        return $this;
    }

    /**
     * Set doctorInfo
     *
     * @param \AppBundle\Entity\Doctor_info $doctorInfo
     *
     * @return Doctor_info
     */
    public function setDoctorInfo(\AppBundle\Entity\Doctor_info $doctorInfo = null)
    {
        $this->doctor_info = $doctorInfo;

        return $this;
    }

    /**
     * Get doctorInfo
     *
     * @return \AppBundle\Entity\Doctor_info
     */
    public function getDoctorInfo()
    {
        return $this->doctor_info;
    }
}
