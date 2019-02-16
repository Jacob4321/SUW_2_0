<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\dostep",mappedBy="nrUser")
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Lecture",mappedBy="nrUser")
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\DownloadFile",mappedBy="nrUser")
     */
    protected $id;

    protected $username;

    protected $lastLogin;

    protected $emailCanonical;

    protected $roles;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}