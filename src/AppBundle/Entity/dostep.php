<?php
/**
 * Created by PhpStorm.
 * User: jakub
 * Date: 2019-02-12
 * Time: 21:10
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * dostep
 *
 * @ORM\Table(name="dostep")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\dostepRepository")
 */

class dostep
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\File",inversedBy="id")
     */
    private $nrPliku;

    /**
     * @var int
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\User",inversedBy="id")
     */
    private $nrUser;


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
     * Set nrUser
     *
     * @param integer $nrUser
     *
     * @return dostep
     */
    public function setNrUser($nrUser)
    {
        $this->nrUser = $nrUser;

        return $this;
    }

    /**
     * Get nrUser
     *
     * @return int
     */
    public function getNrUser()
    {
        return $this->nrUser;
    }
}