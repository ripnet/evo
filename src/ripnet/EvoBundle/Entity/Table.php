<?php
namespace ripnet\EvoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="table_def")
 */
class Table
{

    public static $tableTypes = array(
        '1D'    => '1D',
        '2D'    => '2D',
        '3D'    => '3D',
    );

    public static $xAxisTypes = array(
        'X Axis'        => 'X Axis',
        'Static X Axis' => 'Static X Axis',
    );

    public static $yAxisTypes = array(
        'Y Axis'        => 'Y Axis',
        'Static Y Axis' => 'Static Y Axis',
    );

    public function __toString()
    {
        return $this->name;
    }

    public function getXAxisStaticValuesArray()
    {
        try {
            return (array)unserialize($this->xAxisStaticValues);
        } catch (ErrorException $e)
        {
            return array();
        }
    }

    public function getYAxisStaticValuesArray()
    {
        try {
            return (array)unserialize($this->yAxisStaticValues);
        } catch (ErrorException $e)
        {
            return array();
        }
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
     * @ORM\Column(type="string", length=3)
     */
    protected $tableType;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="tables")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;

    /**
     * @ORM\ManyToOne(targetEntity="Scaling", inversedBy="tableScalings")
     * @ORM\JoinColumn(name="scaling_id", referencedColumnName="id")
     */
    protected $scaling;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $flipX;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $flipY;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $swapXY;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $xAxisName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $xAxisType;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $xAxisElements;

    /**
     * @ORM\ManyToOne(targetEntity="Scaling", inversedBy="xAxisScalings")
     * @ORM\JoinColumn(name="xaxis_scaling_id", referencedColumnName="id")
     */
    protected $xAxisScaling;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $xAxisStaticValues;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $yAxisName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $yAxisType;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $yAxisElements;

    /**
     * @ORM\ManyToOne(targetEntity="Scaling", inversedBy="yAxisScalings")
     * @ORM\JoinColumn(name="yaxis_scaling_id", referencedColumnName="id")
     */
    protected $yAxisScaling;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $yAxisStaticValues;

    /**
     * @ORM\OneToMany(targetEntity="ROMTable", mappedBy="table", cascade={"persist", "remove"}, orphanRemoval=TRUE)
     */
    protected $romTables;

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
     * @return Table
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
     * Set type
     *
     * @param string $type
     * @return Table
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Table
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set flipX
     *
     * @param boolean $flipX
     * @return Table
     */
    public function setFlipX($flipX)
    {
        $this->flipX = $flipX;

        return $this;
    }

    /**
     * Get flipX
     *
     * @return boolean 
     */
    public function getFlipX()
    {
        return $this->flipX;
    }

    /**
     * Set flipY
     *
     * @param boolean $flipY
     * @return Table
     */
    public function setFlipY($flipY)
    {
        $this->flipY = $flipY;

        return $this;
    }

    /**
     * Get flipY
     *
     * @return boolean 
     */
    public function getFlipY()
    {
        return $this->flipY;
    }

    /**
     * Set swapXY
     *
     * @param boolean $swapXY
     * @return Table
     */
    public function setSwapXY($swapXY)
    {
        $this->swapXY = $swapXY;

        return $this;
    }

    /**
     * Get swapXY
     *
     * @return boolean 
     */
    public function getSwapXY()
    {
        return $this->swapXY;
    }

    /**
     * Set xAxisName
     *
     * @param string $xAxisName
     * @return Table
     */
    public function setXAxisName($xAxisName)
    {
        $this->xAxisName = $xAxisName;

        return $this;
    }

    /**
     * Get xAxisName
     *
     * @return string 
     */
    public function getXAxisName()
    {
        return $this->xAxisName;
    }

    /**
     * Set xAxisType
     *
     * @param string $xAxisType
     * @return Table
     */
    public function setXAxisType($xAxisType)
    {
        $this->xAxisType = $xAxisType;

        return $this;
    }

    /**
     * Get xAxisType
     *
     * @return string 
     */
    public function getXAxisType()
    {
        return $this->xAxisType;
    }

    /**
     * Set xAxisElements
     *
     * @param string $xAxisElements
     * @return Table
     */
    public function setXAxisElements($xAxisElements)
    {
        $this->xAxisElements = $xAxisElements;

        return $this;
    }

    /**
     * Get xAxisElements
     *
     * @return string 
     */
    public function getXAxisElements()
    {
        return $this->xAxisElements;
    }

    /**
     * Set xAxisStaticValues
     *
     * @param string $xAxisStaticValues
     * @return Table
     */
    public function setXAxisStaticValues($xAxisStaticValues)
    {
        $this->xAxisStaticValues = $xAxisStaticValues;

        return $this;
    }

    /**
     * Get xAxisStaticValues
     *
     * @return string 
     */
    public function getXAxisStaticValues()
    {
        return $this->xAxisStaticValues;
    }

    /**
     * Set yAxisName
     *
     * @param string $yAxisName
     * @return Table
     */
    public function setYAxisName($yAxisName)
    {
        $this->yAxisName = $yAxisName;

        return $this;
    }

    /**
     * Get yAxisName
     *
     * @return string 
     */
    public function getYAxisName()
    {
        return $this->yAxisName;
    }

    /**
     * Set yAxisType
     *
     * @param string $yAxisType
     * @return Table
     */
    public function setYAxisType($yAxisType)
    {
        $this->yAxisType = $yAxisType;

        return $this;
    }

    /**
     * Get yAxisType
     *
     * @return string 
     */
    public function getYAxisType()
    {
        return $this->yAxisType;
    }

    /**
     * Set yAxisElements
     *
     * @param string $yAxisElements
     * @return Table
     */
    public function setYAxisElements($yAxisElements)
    {
        $this->yAxisElements = $yAxisElements;

        return $this;
    }

    /**
     * Get yAxisElements
     *
     * @return string 
     */
    public function getYAxisElements()
    {
        return $this->yAxisElements;
    }

    /**
     * Set yAxisStaticValues
     *
     * @param string $yAxisStaticValues
     * @return Table
     */
    public function setYAxisStaticValues($yAxisStaticValues)
    {
        $this->yAxisStaticValues = $yAxisStaticValues;

        return $this;
    }

    /**
     * Get yAxisStaticValues
     *
     * @return string 
     */
    public function getYAxisStaticValues()
    {
        return $this->yAxisStaticValues;
    }

    /**
     * Set scaling
     *
     * @param \ripnet\EvoBundle\Entity\Scaling $scaling
     * @return Table
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

    /**
     * Set xAxisScaling
     *
     * @param \ripnet\EvoBundle\Entity\Scaling $xAxisScaling
     * @return Table
     */
    public function setXAxisScaling(\ripnet\EvoBundle\Entity\Scaling $xAxisScaling = null)
    {
        $this->xAxisScaling = $xAxisScaling;

        return $this;
    }

    /**
     * Get xAxisScaling
     *
     * @return \ripnet\EvoBundle\Entity\Scaling 
     */
    public function getXAxisScaling()
    {
        return $this->xAxisScaling;
    }

    /**
     * Set yAxisScaling
     *
     * @param \ripnet\EvoBundle\Entity\Scaling $yAxisScaling
     * @return Table
     */
    public function setYAxisScaling(\ripnet\EvoBundle\Entity\Scaling $yAxisScaling = null)
    {
        $this->yAxisScaling = $yAxisScaling;

        return $this;
    }

    /**
     * Get yAxisScaling
     *
     * @return \ripnet\EvoBundle\Entity\Scaling 
     */
    public function getYAxisScaling()
    {
        return $this->yAxisScaling;
    }

    /**
     * Set tableType
     *
     * @param string $tableType
     * @return Table
     */
    public function setTableType($tableType)
    {
        $this->tableType = $tableType;

        return $this;
    }

    /**
     * Get tableType
     *
     * @return string 
     */
    public function getTableType()
    {
        return $this->tableType;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->romTables = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add romTables
     *
     * @param \ripnet\EvoBundle\Entity\ROMTable $romTables
     * @return Table
     */
    public function addRomTable(\ripnet\EvoBundle\Entity\ROMTable $romTables)
    {
        $this->romTables[] = $romTables;

        return $this;
    }

    /**
     * Remove romTables
     *
     * @param \ripnet\EvoBundle\Entity\ROMTable $romTables
     */
    public function removeRomTable(\ripnet\EvoBundle\Entity\ROMTable $romTables)
    {
        $this->romTables->removeElement($romTables);
    }

    /**
     * Get romTables
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRomTables()
    {
        return $this->romTables;
    }
}
