<?php

namespace AppBundle\Entity;

/**
 * File_download
 */
class File_download
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dataAdd;

    /**
     * @var int
     */
    private $courseNr;

    /**
     * @var int
     */
    private $fileNr;

    /**
     * @var int
     */
    private $userNr;


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
     * Set dataAdd
     *
     * @param \DateTime $dataAdd
     *
     * @return File_download
     */
    public function setDataAdd($dataAdd)
    {
        $this->dataAdd = $dataAdd;

        return $this;
    }

    /**
     * Get dataAdd
     *
     * @return \DateTime
     */
    public function getDataAdd()
    {
        return $this->dataAdd;
    }

    /**
     * Set courseNr
     *
     * @param integer $courseNr
     *
     * @return File_download
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
     * Set fileNr
     *
     * @param integer $fileNr
     *
     * @return File_download
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

    /**
     * Set userNr
     *
     * @param integer $userNr
     *
     * @return File_download
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
}

