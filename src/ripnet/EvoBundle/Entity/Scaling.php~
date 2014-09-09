<?php
namespace ripnet\EvoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="scaling")
 *
 */
class Scaling
{
    public static $storageTypes = array(
        'int8'      => 'int8',
        'uint8'     => 'uint8',
        'int16'     => 'int16',
        'uint16'    => 'uint16',
        'int32'     => 'int32',
        'uint32'    => 'uint32',
        'float'     => 'float',
        'bloblist'  => 'bloblist',
    );

    public static $endianTypes = array(
        'big'       => 'big',
        'little'    => 'little',
    );

    public function __toString()
    {
        return $this->name;
    }

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $units;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $toexpr;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $frexpr;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $format;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $min;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $max;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $inc;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $storagetype;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $endian;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $storagebits;

    /**
     * @ORM\OneToMany(targetEntity="ScalingData", mappedBy="scaling")
     */
    protected $scalingDatas;

    /**
     * @ORM\OneToMany(targetEntity="Table", mappedBy="scaling")
     */
    protected $tableScalings;

    /**
     * @ORM\OneToMany(targetEntity="Table", mappedBy="xAxisScaling")
     */
    protected $xAxisScalings;

    /**
     * @ORM\OneToMany(targetEntity="Table", mappedBy="yAxisScaling")
     */
    protected $yAxisScalings;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->scalingDatas = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Scaling
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
     * Set units
     *
     * @param string $units
     * @return Scaling
     */
    public function setUnits($units)
    {
        $this->units = $units;

        return $this;
    }

    /**
     * Get units
     *
     * @return string 
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Set toexpr
     *
     * @param string $toexpr
     * @return Scaling
     */
    public function setToexpr($toexpr)
    {
        $this->toexpr = $toexpr;

        return $this;
    }

    /**
     * Get toexpr
     *
     * @return string 
     */
    public function getToexpr()
    {
        return $this->toexpr;
    }

    /**
     * Set fromexpr
     *
     * @param string $fromexpr
     * @return Scaling
     */
    public function setFromexpr($fromexpr)
    {
        $this->fromexpr = $fromexpr;

        return $this;
    }

    /**
     * Get fromexpr
     *
     * @return string 
     */
    public function getFromexpr()
    {
        return $this->fromexpr;
    }

    /**
     * Set format
     *
     * @param string $format
     * @return Scaling
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return string 
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set min
     *
     * @param string $min
     * @return Scaling
     */
    public function setMin($min)
    {
        $this->min = $min;

        return $this;
    }

    /**
     * Get min
     *
     * @return string 
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set max
     *
     * @param string $max
     * @return Scaling
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get max
     *
     * @return string 
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set inc
     *
     * @param string $inc
     * @return Scaling
     */
    public function setInc($inc)
    {
        $this->inc = $inc;

        return $this;
    }

    /**
     * Get inc
     *
     * @return string 
     */
    public function getInc()
    {
        return $this->inc;
    }

    /**
     * Set storagetype
     *
     * @param string $storagetype
     * @return Scaling
     */
    public function setStoragetype($storagetype)
    {
        $this->storagetype = $storagetype;

        return $this;
    }

    /**
     * Get storagetype
     *
     * @return string 
     */
    public function getStoragetype()
    {
        return $this->storagetype;
    }

    /**
     * Set endian
     *
     * @param string $endian
     * @return Scaling
     */
    public function setEndian($endian)
    {
        $this->endian = $endian;

        return $this;
    }

    /**
     * Get endian
     *
     * @return string 
     */
    public function getEndian()
    {
        return $this->endian;
    }

    /**
     * Set storagebits
     *
     * @param string $storagebits
     * @return Scaling
     */
    public function setStoragebits($storagebits)
    {
        $this->storagebits = $storagebits;

        return $this;
    }

    /**
     * Get storagebits
     *
     * @return string 
     */
    public function getStoragebits()
    {
        return $this->storagebits;
    }

    /**
     * Add scalingDatas
     *
     * @param \ripnet\EvoBundle\Entity\ScalingData $scalingDatas
     * @return Scaling
     */
    public function addScalingData(\ripnet\EvoBundle\Entity\ScalingData $scalingDatas)
    {
        $this->scalingDatas[] = $scalingDatas;

        return $this;
    }

    /**
     * Remove scalingDatas
     *
     * @param \ripnet\EvoBundle\Entity\ScalingData $scalingDatas
     */
    public function removeScalingData(\ripnet\EvoBundle\Entity\ScalingData $scalingDatas)
    {
        $this->scalingDatas->removeElement($scalingDatas);
    }

    /**
     * Get scalingDatas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getScalingDatas()
    {
        return $this->scalingDatas;
    }

    /**
     * Set frexpr
     *
     * @param string $frexpr
     * @return Scaling
     */
    public function setFrexpr($frexpr)
    {
        $this->frexpr = $frexpr;

        return $this;
    }

    /**
     * Get frexpr
     *
     * @return string 
     */
    public function getFrexpr()
    {
        return $this->frexpr;
    }

    /**
     * Add tableScalings
     *
     * @param \ripnet\EvoBundle\Entity\Table $tableScalings
     * @return Scaling
     */
    public function addTableScaling(\ripnet\EvoBundle\Entity\Table $tableScalings)
    {
        $this->tableScalings[] = $tableScalings;

        return $this;
    }

    /**
     * Remove tableScalings
     *
     * @param \ripnet\EvoBundle\Entity\Table $tableScalings
     */
    public function removeTableScaling(\ripnet\EvoBundle\Entity\Table $tableScalings)
    {
        $this->tableScalings->removeElement($tableScalings);
    }

    /**
     * Get tableScalings
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTableScalings()
    {
        return $this->tableScalings;
    }

    /**
     * Add xAxisScalings
     *
     * @param \ripnet\EvoBundle\Entity\Table $xAxisScalings
     * @return Scaling
     */
    public function addXAxisScaling(\ripnet\EvoBundle\Entity\Table $xAxisScalings)
    {
        $this->xAxisScalings[] = $xAxisScalings;

        return $this;
    }

    /**
     * Remove xAxisScalings
     *
     * @param \ripnet\EvoBundle\Entity\Table $xAxisScalings
     */
    public function removeXAxisScaling(\ripnet\EvoBundle\Entity\Table $xAxisScalings)
    {
        $this->xAxisScalings->removeElement($xAxisScalings);
    }

    /**
     * Get xAxisScalings
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getXAxisScalings()
    {
        return $this->xAxisScalings;
    }

    /**
     * Add yAxisScalings
     *
     * @param \ripnet\EvoBundle\Entity\Table $yAxisScalings
     * @return Scaling
     */
    public function addYAxisScaling(\ripnet\EvoBundle\Entity\Table $yAxisScalings)
    {
        $this->yAxisScalings[] = $yAxisScalings;

        return $this;
    }

    /**
     * Remove yAxisScalings
     *
     * @param \ripnet\EvoBundle\Entity\Table $yAxisScalings
     */
    public function removeYAxisScaling(\ripnet\EvoBundle\Entity\Table $yAxisScalings)
    {
        $this->yAxisScalings->removeElement($yAxisScalings);
    }

    /**
     * Get yAxisScalings
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getYAxisScalings()
    {
        return $this->yAxisScalings;
    }
}
