<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Group_insurance
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Group_insurance
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
     * @return Group_insurance
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
     * Constructor
     */
    public function __construct()
    {
        $this->insurances = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add insurance
     *
     * @param \AppBundle\Entity\Patient $insurance
     *
     * @return Group_insurance
     */
    public function addInsurance(\AppBundle\Entity\Patient $insurance)
    {
        $this->insurances[] = $insurance;

        return $this;
    }

    /**
     * Remove insurance
     *
     * @param \AppBundle\Entity\Patient $insurance
     */
    public function removeInsurance(\AppBundle\Entity\Patient $insurance)
    {
        $this->insurances->removeElement($insurance);
    }

    /**
     * Get insurances
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInsurances()
    {
        return $this->insurances;
    }
}
