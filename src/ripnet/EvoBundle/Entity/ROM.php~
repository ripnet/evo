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
     * @ORM\Column(type="string", length=128, unique=true)
     */
    protected $xmlid;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $internalidaddress;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $internalidhex;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $make;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $market;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $model;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $submodel;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $transmission;

    /**
     * @ORM\Column(type="string", length=9)
     */
    protected $year;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $flashmethod;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $memmodel;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $checksummodule;

    /**
     * @ORM\OneToMany(targetEntity="ROM", mappedBy="parent")
     */
    protected $children;

    /**
     * @ORM\ManyToOne(targetEntity="ROM", inversedBy="children")
     * @ORM\JoinColumn(name="parent", referencedColumnName="id", nullable=true)
     */
    protected $parent;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->getXmlid();
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

    /**
     * Set xmlid
     *
     * @param string $xmlid
     * @return ROM
     */
    public function setXmlid($xmlid)
    {
        $this->xmlid = $xmlid;

        return $this;
    }

    /**
     * Get xmlid
     *
     * @return string 
     */
    public function getXmlid()
    {
        return $this->xmlid;
    }

    /**
     * Set internalidaddress
     *
     * @param string $internalidaddress
     * @return ROM
     */
    public function setInternalidaddress($internalidaddress)
    {
        $this->internalidaddress = $internalidaddress;

        return $this;
    }

    /**
     * Get internalidaddress
     *
     * @return string 
     */
    public function getInternalidaddress()
    {
        return $this->internalidaddress;
    }

    /**
     * Set internalidhex
     *
     * @param string $internalidhex
     * @return ROM
     */
    public function setInternalidhex($internalidhex)
    {
        $this->internalidhex = $internalidhex;

        return $this;
    }

    /**
     * Get internalidhex
     *
     * @return string 
     */
    public function getInternalidhex()
    {
        return $this->internalidhex;
    }

    /**
     * Set make
     *
     * @param string $make
     * @return ROM
     */
    public function setMake($make)
    {
        $this->make = $make;

        return $this;
    }

    /**
     * Get make
     *
     * @return string 
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * Set market
     *
     * @param string $market
     * @return ROM
     */
    public function setMarket($market)
    {
        $this->market = $market;

        return $this;
    }

    /**
     * Get market
     *
     * @return string 
     */
    public function getMarket()
    {
        return $this->market;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return ROM
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set submodel
     *
     * @param string $submodel
     * @return ROM
     */
    public function setSubmodel($submodel)
    {
        $this->submodel = $submodel;

        return $this;
    }

    /**
     * Get submodel
     *
     * @return string 
     */
    public function getSubmodel()
    {
        return $this->submodel;
    }

    /**
     * Set transmission
     *
     * @param string $transmission
     * @return ROM
     */
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;

        return $this;
    }

    /**
     * Get transmission
     *
     * @return string 
     */
    public function getTransmission()
    {
        return $this->transmission;
    }

    /**
     * Set flashmethod
     *
     * @param string $flashmethod
     * @return ROM
     */
    public function setFlashmethod($flashmethod)
    {
        $this->flashmethod = $flashmethod;

        return $this;
    }

    /**
     * Get flashmethod
     *
     * @return string 
     */
    public function getFlashmethod()
    {
        return $this->flashmethod;
    }

    /**
     * Set memmodel
     *
     * @param string $memmodel
     * @return ROM
     */
    public function setMemmodel($memmodel)
    {
        $this->memmodel = $memmodel;

        return $this;
    }

    /**
     * Get memmodel
     *
     * @return string 
     */
    public function getMemmodel()
    {
        return $this->memmodel;
    }

    /**
     * Set checksummodule
     *
     * @param string $checksummodule
     * @return ROM
     */
    public function setChecksummodule($checksummodule)
    {
        $this->checksummodule = $checksummodule;

        return $this;
    }

    /**
     * Get checksummodule
     *
     * @return string 
     */
    public function getChecksummodule()
    {
        return $this->checksummodule;
    }
}
