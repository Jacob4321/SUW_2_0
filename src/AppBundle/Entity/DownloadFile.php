<?php
/**
 * Created by PhpStorm.
 * User: jakub
 * Date: 2019-02-12
 * Time: 21:12
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DownloadFile
 *
 * @ORM\Table(name="DownloadFile")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DownloadFileRepository")
 */

class DownloadFile
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
     * @var \DateTime
     *
     * @ORM\Column(name="data_dodania", type="datetime")
     */
    private $dataDodania;

    /**
     * @var int
     *
     * @ORM\Column(name="ipUser", type="integer")
     */
    private $ipUser;

    /**
     * @var int
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Lecture",inversedBy="id")
     */
    private $nrPlik;

    /**
     * @var int
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\User",inversedBy="id")
     */
    private $nrUser;
    /**
     * @var
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Course",inversedBy="id")
     */
    private $nrKurs;
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
     * Set dataDodania
     *
     * @param \DateTime $dataDodania
     *
     * @return DownloadFile
     */
    public function setDataDodania($dataDodania)
    {
        $this->dataDodania = $dataDodania;

        return $this;
    }

    /**
     * Get dataDodania
     *
     * @return \DateTime
     */
    public function getDataDodania()
    {
        return $this->dataDodania;
    }

    /**
     * Set ipUser
     *
     * @param integer $ipUser
     *
     * @return DownloadFile
     */
    public function setIpUser($ipUser)
    {
        $this->ipUser = $ipUser;

        return $this;
    }

    /**
     * Get ipUser
     *
     * @return int
     */
    public function getIpUser()
    {
        return $this->ipUser;
    }

    /**
     * Set nrPlik
     *
     * @param integer $nrPlik
     *
     * @return DownloadFile
     */
    public function setNrPlik($nrPlik)
    {
        $this->nrPlik = $nrPlik;

        return $this;
    }

    /**
     * Get nrPlik
     *
     * @return int
     */
    public function getNrPlik()
    {
        return $this->nrPlik;
    }

    /**
     * Set nrUser
     *
     * @param integer $nrUser
     *
     * @return DownloadFile
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