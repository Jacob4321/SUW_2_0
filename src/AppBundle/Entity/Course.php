<?php

namespace AppBundle\Entity;

/**
 * Course
 */
class Course
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $courseNr;

    /**
     * @var string
     */
    private $name;


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
     * Set courseNr
     *
     * @param integer $courseNr
     *
     * @return Course
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
     * Set name
     *
     * @param string $name
     *
     * @return Course
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
}

