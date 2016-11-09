<?php

namespace ItiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 */
class Categories
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $restauration;

    /**
     * @var string
     */
    private $patrimoineCulturel;

    /**
     * @var string
     */
    private $equipement;


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
     * Set restauration
     *
     * @param string $restauration
     * @return Categories
     */
    public function setRestauration($restauration)
    {
        $this->restauration = $restauration;

        return $this;
    }

    /**
     * Get restauration
     *
     * @return string 
     */
    public function getRestauration()
    {
        return $this->restauration;
    }

    /**
     * Set patrimoineCulturel
     *
     * @param string $patrimoineCulturel
     * @return Categories
     */
    public function setPatrimoineCulturel($patrimoineCulturel)
    {
        $this->patrimoineCulturel = $patrimoineCulturel;

        return $this;
    }

    /**
     * Get patrimoineCulturel
     *
     * @return string 
     */
    public function getPatrimoineCulturel()
    {
        return $this->patrimoineCulturel;
    }

    /**
     * Set equipement
     *
     * @param string $equipement
     * @return Categories
     */
    public function setEquipement($equipement)
    {
        $this->equipement = $equipement;

        return $this;
    }

    /**
     * Get equipement
     *
     * @return string 
     */
    public function getEquipement()
    {
        return $this->equipement;
    }
}
