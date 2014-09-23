<?php
namespace ripnet\EvoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="category")
 *
 */
class Category
{
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
     * @ORM\Column(type="integer")
     */
    protected $weight;

    /**
     * @ORM\OneToMany(targetEntity="Table", mappedBy="category")
     */
    protected $tables;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tables = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Category
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
     * Set weight
     *
     * @param integer $weight
     * @return Category
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Add tables
     *
     * @param \ripnet\EvoBundle\Entity\Table $tables
     * @return Category
     */
    public function addTable(\ripnet\EvoBundle\Entity\Table $tables)
    {
        $this->tables[] = $tables;

        return $this;
    }

    /**
     * Remove tables
     *
     * @param \ripnet\EvoBundle\Entity\Table $tables
     */
    public function removeTable(\ripnet\EvoBundle\Entity\Table $tables)
    {
        $this->tables->removeElement($tables);
    }

    /**
     * Get tables
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTables()
    {
        return $this->tables;
    }
}
