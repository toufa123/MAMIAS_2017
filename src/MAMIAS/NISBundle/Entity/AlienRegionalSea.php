<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienRegionalSea
 *
 * @ORM\Table(name="alien_regional_sea")
 * @ORM\Entity
 */
class AlienRegionalSea
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_regional_sea_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="regional_sea", type="string", length=128, nullable=true)
     */
    private $regionalSea;

    /**
     * @var string
     *
     * @ORM\Column(name="regional_sea_code", type="string", length=128, nullable=true)
     */
    private $regionalSeaCode;



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
     * Set regionalSea
     *
     * @param string $regionalSea
     *
     * @return AlienRegionalSea
     */
    public function setRegionalSea($regionalSea)
    {
        $this->regionalSea = $regionalSea;

        return $this;
    }

    /**
     * Get regionalSea
     *
     * @return string
     */
    public function getRegionalSea()
    {
        return $this->regionalSea;
    }

    /**
     * Set regionalSeaCode
     *
     * @param string $regionalSeaCode
     *
     * @return AlienRegionalSea
     */
    public function setRegionalSeaCode($regionalSeaCode)
    {
        $this->regionalSeaCode = $regionalSeaCode;

        return $this;
    }

    /**
     * Get regionalSeaCode
     *
     * @return string
     */
    public function getRegionalSeaCode()
    {
        return $this->regionalSeaCode;
    }
    
    public function __toString() {
        return $this->getRegionalSea();
    }
}
