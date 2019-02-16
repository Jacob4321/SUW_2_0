<?php
/**
 * Created by PhpStorm.
 * User: jakub
 * Date: 2019-02-12
 * Time: 20:56
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * kurs
 *
 * @ORM\Table(name="Course")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CourseRepository")
 */

class Course
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Lecture",mappedBy="nrKursu")
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\DownloadFile",mappedBy="nrKurs")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nazwa", type="string", length=50)
     */
    private $nazwa;


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
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return kurs
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }
}