<?php

namespace ItiBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{

    private $country;
    private $city;
    private $language;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
