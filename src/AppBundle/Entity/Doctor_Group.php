<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Doctor_Group
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Doctor_Group
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
     * @return Doctor_Group
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
     * Set doctors
     *
     * @param \AppBundle\Entity\Doctor $doctors
     *
     * @return Doctor_Group
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
     * @return Doctor_Group
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
     * Add group
     *
     * @param \AppBundle\Entity\Doctor $group
     *
     * @return Doctor_Group
     */
    public function addGroup(\AppBundle\Entity\Doctor $group)
    {
        $this->groups[] = $group;

        return $this;
    }

    /**
     * Remove group
     *
     * @param \AppBundle\Entity\Doctor $group
     */
    public function removeGroup(\AppBundle\Entity\Doctor $group)
    {
        $this->groups->removeElement($group);
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroups()
    {
        return $this->groups;
    }
}
