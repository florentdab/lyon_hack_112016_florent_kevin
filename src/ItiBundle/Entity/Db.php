<?php

namespace ItiBundle\Entity;

/**
 * Db
 */
class Db
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $typeDetail;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $postalcode;

    /**
     * @var string
     */
    private $town;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $website;

    /**
     * @var string
     */
    private $facebook;

    /**
     * @var string
     */
    private $rank;

    /**
     * @var string
     */
    private $openhour;

    /**
     * @var string
     */
    private $rateclear;

    /**
     * @var string
     */
    private $minrate;

    /**
     * @var string
     */
    private $maxrate;

    /**
     * @var string
     */
    private $producer;

    /**
     * @var string
     */
    private $latitude;

    /**
     * @var string
     */
    private $longitude;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Db
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
     * Set typeDetail
     *
     * @param string $typeDetail
     *
     * @return Db
     */
    public function setTypeDetail($typeDetail)
    {
        $this->typeDetail = $typeDetail;

        return $this;
    }

    /**
     * Get typeDetail
     *
     * @return string
     */
    public function getTypeDetail()
    {
        return $this->typeDetail;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Db
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
     * Set address
     *
     * @param string $address
     *
     * @return Db
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postalcode
     *
     * @param string $postalcode
     *
     * @return Db
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;

        return $this;
    }

    /**
     * Get postalcode
     *
     * @return string
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * Set town
     *
     * @param string $town
     *
     * @return Db
     */
    public function setTown($town)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Db
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Db
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Db
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return Db
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set rank
     *
     * @param string $rank
     *
     * @return Db
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return string
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set openhour
     *
     * @param string $openhour
     *
     * @return Db
     */
    public function setOpenhour($openhour)
    {
        $this->openhour = $openhour;

        return $this;
    }

    /**
     * Get openhour
     *
     * @return string
     */
    public function getOpenhour()
    {
        return $this->openhour;
    }

    /**
     * Set rateclear
     *
     * @param string $rateclear
     *
     * @return Db
     */
    public function setRateclear($rateclear)
    {
        $this->rateclear = $rateclear;

        return $this;
    }

    /**
     * Get rateclear
     *
     * @return string
     */
    public function getRateclear()
    {
        return $this->rateclear;
    }

    /**
     * Set minrate
     *
     * @param string $minrate
     *
     * @return Db
     */
    public function setMinrate($minrate)
    {
        $this->minrate = $minrate;

        return $this;
    }

    /**
     * Get minrate
     *
     * @return string
     */
    public function getMinrate()
    {
        return $this->minrate;
    }

    /**
     * Set maxrate
     *
     * @param string $maxrate
     *
     * @return Db
     */
    public function setMaxrate($maxrate)
    {
        $this->maxrate = $maxrate;

        return $this;
    }

    /**
     * Get maxrate
     *
     * @return string
     */
    public function getMaxrate()
    {
        return $this->maxrate;
    }

    /**
     * Set producer
     *
     * @param string $producer
     *
     * @return Db
     */
    public function setProducer($producer)
    {
        $this->producer = $producer;

        return $this;
    }

    /**
     * Get producer
     *
     * @return string
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Db
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Db
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
    public function getLongitude()
    {
        return $this->longitude;
    }
}
