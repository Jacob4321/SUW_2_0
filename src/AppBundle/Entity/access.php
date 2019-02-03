<?php

namespace AppBundle\Entity;

/**
 * access
 */
class access
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $accessNr;

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
     * Set accessNr
     *
     * @param integer $accessNr
     *
     * @return access
     */
    public function setAccessNr($accessNr)
    {
        $this->accessNr = $accessNr;

        return $this;
    }

    /**
     * Get accessNr
     *
     * @return int
     */
    public function getAccessNr()
    {
        return $this->accessNr;
    }

    /**
     * Set fileNr
     *
     * @param integer $fileNr
     *
     * @return access
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
     * @return access
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

