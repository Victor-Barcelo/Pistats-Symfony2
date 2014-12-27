<?php

namespace Vbv\PistatsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Temperature
 *
 * @ORM\Table("temperatures")
 * @ORM\Entity
 */
class Temperature
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="temperature", type="float")
     */
    private $temperature;

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer")
     */
    private $time;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set temperature
     *
     * @param float $temperature
     * @return Temperature
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return float 
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set time
     *
     * @param integer $time
     * @return Temperature
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return integer 
     */
    public function getTime()
    {
        return $this->time;
    }
}
