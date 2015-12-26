<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Doctor
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Doctor
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
     * @ORM\Column(name="info", type="text")
     */
    private $info;

    /**
     * @ORM\ManyToMany(targetEntity="Doctor_Group")
     * 
     */
    
    private $proficiency;
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
     * @return Doctor
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
     * @return Doctor
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
     * Set info
     *
     * @param string $info
     *
     * @return Doctor
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->proficiency = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add proficiency
     *
     * @param \AppBundle\Entity\Doctor_Group $proficiency
     *
     * @return Doctor
     */
    public function addProficiency(\AppBundle\Entity\Doctor_Group $proficiency)
    {
        $this->proficiency[] = $proficiency;

        return $this;
    }

    /**
     * Remove proficiency
     *
     * @param \AppBundle\Entity\Doctor_Group $proficiency
     */
    public function removeProficiency(\AppBundle\Entity\Doctor_Group $proficiency)
    {
        $this->proficiency->removeElement($proficiency);
    }

    /**
     * Get proficiency
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProficiency()
    {
        return $this->proficiency;
    }

    /**
     * Set doctors
     *
     * @param \AppBundle\Entity\Doctor $doctors
     *
     * @return Doctor
     */
    public function setDoctors(\AppBundle\Entity\Doctor $doctors = null)
    {
        $this->doctors = $doctors;

        return $this;
    }

    /**
     * Get doctors
     *
     * @return \AppBundle\Entity\Doctor
     */
    public function getDoctors()
    {
        return $this->doctors;
    }
}
