<?php
namespace ripnet\EvoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint;

/**
 * @ORM\Entity
 * @ORM\Table(name="scaling_data", uniqueConstraints={@UniqueConstraint(name="scalingData_idx", columns={"name", "scaling_id"})})
 */
class ScalingData
{

    public function __toString()
    {
        return $this->getScaling() . " " . $this->name;
    }

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $value;

    
    /**
     * @ORM\ManyToOne(targetEntity="Scaling", inversedBy="scalingDatas")
     * @ORM\JoinColumn(name="scaling_id", referencedColumnName="id")
     */
    protected $scaling;


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
     * @return ScalingData
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
     * Set value
     *
     * @param string $value
     * @return ScalingData
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set scaling
     *
     * @param \ripnet\EvoBundle\Entity\Scaling $scaling
     * @return ScalingData
     */
    public function setScaling(\ripnet\EvoBundle\Entity\Scaling $scaling = null)
    {
        $this->scaling = $scaling;

        return $this;
    }

    /**
     * Get scaling
     *
     * @return \ripnet\EvoBundle\Entity\Scaling 
     */
    public function getScaling()
    {
        return $this->scaling;
    }
}
