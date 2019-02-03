<?php

namespace AppBundle\Entity;

/**
 * File_addd
 */
class File_addd
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var int
     */
    private $courseNr;

    /**
     * @var int
     */
    private $userNr;

    /**
     * @var int
     */
    private $fileNr;


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
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return File_addd
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set courseNr
     *
     * @param integer $courseNr
     *
     * @return File_addd
     */
    public function setCourseNr($courseNr)
    {
        $this->courseNr = $courseNr;

        return $this;
    }

    /**
     * Get courseNr
     *
     * @return int
     */
    public function getCourseNr()
    {
        return $this->courseNr;
    }

    /**
     * Set userNr
     *
     * @param integer $userNr
     *
     * @return File_addd
     */
    public function setUserNr($userNr)
    {
        $this->userNr = $userNr;

        return $this;
    }

    /**
     * Get userNr
     *
     * @return int
     */
    public function getUserNr()
    {
        return $this->userNr;
    }

    /**
     * Set fileNr
     *
     * @param integer $fileNr
     *
     * @return File_addd
     */
    public function setFileNr($fileNr)
    {
        $this->fileNr = $fileNr;

        return $this;
    }

    /**
     * Get fileNr
     *
     * @return int
     */
    public function getFileNr()
    {
        return $this->fileNr;
    }
}

