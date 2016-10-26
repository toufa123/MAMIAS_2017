<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienStatus
 *
 * @ORM\Table(name="alien_status")
 * @ORM\Entity
 */
class AlienStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_status_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="status_name", type="string", length=100, nullable=true)
     */
    private $statusName;



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
     * Set statusName
     *
     * @param string $statusName
     *
     * @return AlienStatus
     */
    public function setStatusName($statusName)
    {
        $this->statusName = $statusName;

        return $this;
    }

    /**
     * Get statusName
     *
     * @return string
     */
    public function getStatusName()
    {
        return $this->statusName;
    }
    
    public function  __toString()
          {
        return $this->statusName;
    }  
}
