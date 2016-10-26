<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienDonorArea
 *
 * @ORM\Table(name="alien_donor_area")
 * @ORM\Entity
 */
class AlienDonorArea
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_donor_area_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="donor_area", type="string", length=100, nullable=true)
     */
    private $donorArea;



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
     * Set donorArea
     *
     * @param string $donorArea
     *
     * @return AlienDonorArea
     */
    public function setDonorArea($donorArea)
    {
        $this->donorArea = $donorArea;

        return $this;
    }

    /**
     * Get donorArea
     *
     * @return string
     */
    public function getDonorArea()
    {
        return $this->donorArea;
    }
    
    public function __toString() {
        return $this->getDonorArea();
    }
}
