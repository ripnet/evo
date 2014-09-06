<?php
namespace ripnet\EvoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="rom")
 */
class ROM
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=9)
     */
    protected $year;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $vehicle;

    /**
     * @ORM\OneToMany(targetEntity="ROM", mappedBy="parent")
     */
    protected $children;

    /**
     * @ORM\ManyToOne(targetEntity="ROM", inversedBy="children")
     * @ORM\JoinColumn(name="parent", referencedColumnName="id")
     */
    protected $parent;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set year
     *
     * @param string $year
     * @return ROM
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set vehicle
     *
     * @param string $vehicle
     * @return ROM
     */
    public function setVehicle($vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    /**
     * Get vehicle
     *
     * @return string 
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Add children
     *
     * @param \ripnet\EvoBundle\Entity\ROM $children
     * @return ROM
     */
    public function addChild(\ripnet\EvoBundle\Entity\ROM $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \ripnet\EvoBundle\Entity\ROM $children
     */
    public function removeChild(\ripnet\EvoBundle\Entity\ROM $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param \ripnet\EvoBundle\Entity\ROM $parent
     * @return ROM
     */
    public function setParent(\ripnet\EvoBundle\Entity\ROM $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \ripnet\EvoBundle\Entity\ROM 
     */
    public function getParent()
    {
        return $this->parent;
    }
}
