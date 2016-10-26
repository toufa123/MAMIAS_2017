<?php

namespace MAMIAS\NISBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Statistics
 *
 * @ORM\Table(name="alien_country")
 * @ORM\Table(name="alien_regional_sea")
 * @ORM\Table(name="alien_msfd")
 * @ORM\Entity
 */
class Statistics
{
   /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_country_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="ecofunctional", type="string", length=100, nullable=true)
     */
    private $ecofunctional;
    
    /**
     * @var string
     *
     * @ORM\Column(name="origin_region", type="string", length=100, nullable=true)
     */
    private $originRegion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="success_type", type="string", length=100, nullable=true)
     */
    private $successType;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="invasive", type="boolean", nullable=true)
     */
    private $invasive;
    
    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=100, nullable=true)
     */
    private $country;
    
    /**
     * @var string
     *
     * @ORM\Column(name="regional_sea", type="string", length=128, nullable=true)
     */
    private $regionalSea;
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="msfd", type="string", length=128, nullable=true)
     */
    private $msfd;

   
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
     * Set ecofunctional
     *
     * @param string $ecofunctional
     * @return AlienEcofunctional
     */
    public function setEcofunctional($ecofunctional)
    {
        $this->ecofunctional = $ecofunctional;

        return $this;
    }

    /**
     * Get ecofunctional
     *
     * @return string 
     */
    public function getEcofunctional()
    {
        return $this->ecofunctional;
    }
    
    /**
     * Set originRegion
     *
     * @param string $originRegion
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
     * Set successType
     *
     * @param string $successType
     * @return AlienSuccessType
     */
    public function setSuccessType($successType)
    {
        $this->successType = $successType;

        return $this;
    }

    /**
     * Get successType
     *
     * @return string 
     */
    public function getSuccessType()
    {
        return $this->successType;
    }
    
    
    /**
     * Set invasive
     *
     * @param boolean $invasive
     * @return AlienSpecies
     */
    public function setInvasive($invasive)
    {
        $this->invasive = $invasive;

        return $this;
    }

    /**
     * Get invasive
     *
     * @return boolean 
     */
    public function getInvasive()
    {
        return $this->invasive;
    }
    
    /**
     * Set country
     *
     * @param string $country
     * @return AlienCountry
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }
    
    
    /**
     * Set regionalSea
     *
     * @param string $regionalSea
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
     * Set msfd
     *
     * @param string $msfd
     * @return AlienMsfd
     */
    public function setMsfd($msfd)
    {
        $this->msfd = $msfd;

        return $this;
    }

    /**
     * Get msfd
     *
     * @return string 
     */
    public function getMsfd()
    {
        return $this->msfd;
    }
    
}
