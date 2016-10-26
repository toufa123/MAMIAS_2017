<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienOrigin
 *
 * @ORM\Table(name="alien_origin")
 * @ORM\Entity
 */
class AlienOrigin
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_origin_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="origin_region", type="string", length=100, nullable=true)
     */
    private $originRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="origin_code", type="string", length=128, nullable=true)
     */
    private $originCode;



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
     * Set originRegion
     *
     * @param string $originRegion
     *
     * @return AlienOrigin
     */
    public function setOriginRegion($originRegion)
    {
        $this->originRegion = $originRegion;

        return $this;
    }

    /**
     * Get originRegion
     *
     * @return string
     */
    public function getOriginRegion()
    {
        return $this->originRegion;
    }

    /**
     * Set originCode
     *
     * @param string $originCode
     *
     * @return AlienOrigin
     */
    public function setOriginCode($originCode)
    {
        $this->originCode = $originCode;

        return $this;
    }

    /**
     * Get originCode
     *
     * @return string
     */
    public function getOriginCode()
    {
        return $this->originCode;
    }
    
    public function __toString() {
        return $this->getOriginCode()."/".$this->getOriginRegion();
    }
}
