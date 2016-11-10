<?php

namespace ItiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Data
 */
class Data
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $codepostal;

    /**
     * @var string
     */
    private $commune;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var string
     */
    private $tarifsmin;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $siteweb;

    /**
     * @var string
     */
    private $longitude;

    /**
     * @var string
     */
    private $latitude;


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
     * Set nom
     *
     * @param string $nom
     * @return Data
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Data
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     * @return Data
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string 
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set commune
     *
     * @param string $commune
     * @return Data
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return string 
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Data
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set tarifsmin
     *
     * @param string $tarifsmin
     * @return Data
     */
    public function setTarifsmin($tarifsmin)
    {
        $this->tarifsmin = $tarifsmin;

        return $this;
    }

    /**
     * Get tarifsmin
     *
     * @return string 
     */
    public function getTarifsmin()
    {
        return $this->tarifsmin;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Data
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set siteweb
     *
     * @param string $siteweb
     * @return Data
     */
    public function setSiteweb($siteweb)
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    /**
     * Get siteweb
     *
     * @return string 
     */
    public function getSiteweb()
    {
        return $this->siteweb;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Data
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }
    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude($longitude)
    {
        return $this->longitude;
    }

    /**
     * Set coordinates
     *
     * @param string $latitude
     * @return Data
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get coordinates
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

}
