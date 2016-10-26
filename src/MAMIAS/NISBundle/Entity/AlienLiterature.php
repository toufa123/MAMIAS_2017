<?php

namespace MAMIAS\NISBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * AlienLiterature
 *
 * @ORM\Table(name="alien_literature")
 * @ORM\Entity
 */
class AlienLiterature
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_literature_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="literature", type="string", length=2048, nullable=true)
     */
    private $literature;

    /**
     * @var string
     *
     * @ORM\Column(name="literature_code", type="string", length=128, nullable=true)
     */
    private $literatureCode;

    /**
     * @var \AlienCountry
     *
     * @ORM\OneToOne(targetEntity="AlienCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var \AlienMsfd
     *
     * @ORM\OneToOne(targetEntity="AlienMsfd")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="msfd_id", referencedColumnName="id")
     * })
     */
    private $msfd;

    /**
     * @var \AlienRegionalSea
     *
     * @ORM\OneToOne(targetEntity="AlienRegionalSea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="regionalsea_id", referencedColumnName="id")
     * })
     */
    private $regionalsea;

    /**
     * @var \AlienSpecies
     *
     * @ORM\ManyToOne(targetEntity="AlienSpecies", inversedBy="literature")
     * 
     */
    private $species;



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
     * Set literature
     *
     * @param string $literature
     *
     * @return AlienLiterature
     */
    public function setLiterature($literature)
    {
        $this->literature = $literature;

        return $this;
    }

    /**
     * Get literature
     *
     * @return string
     */
    public function getLiterature()
    {
        return $this->literature;
    }

    /**
     * Set literatureCode
     *
     * @param string $literatureCode
     *
     * @return AlienLiterature
     */
    public function setLiteratureCode($literatureCode)
    {
        $this->literatureCode = $literatureCode;

        return $this;
    }

    /**
     * Get literatureCode
     *
     * @return string
     */
    public function getLiteratureCode()
    {
        return $this->literatureCode;
    }

    /**
     * Set country
     *
     * @param \NIS\MAMIASBundle\Entity\AlienCountry $country
     *
     * @return AlienLiterature
     */
    public function setCountry(\NIS\MAMIASBundle\Entity\AlienCountry $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \NIS\MAMIASBundle\Entity\AlienCountry
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set msfd
     *
     * @param \NIS\MAMIASBundle\Entity\AlienMsfd $msfd
     *
     * @return AlienLiterature
     */
    public function setMsfd(\NIS\MAMIASBundle\Entity\AlienMsfd $msfd = null)
    {
        $this->msfd = $msfd;

        return $this;
    }

    /**
     * Get msfd
     *
     * @return \NIS\MAMIASBundle\Entity\AlienMsfd
     */
    public function getMsfd()
    {
        return $this->msfd;
    }

    /**
     * Set regionalsea
     *
     * @param \NIS\MAMIASBundle\Entity\AlienRegionalSea $regionalsea
     *
     * @return AlienLiterature
     */
    public function setRegionalsea(\NIS\MAMIASBundle\Entity\AlienRegionalSea $regionalsea = null)
    {
        $this->regionalsea = $regionalsea;

        return $this;
    }

    /**
     * Get regionalsea
     *
     * @return \NIS\MAMIASBundle\Entity\AlienRegionalSea
     */
    public function getRegionalsea()
    {
        return $this->regionalsea;
    }

    /**
     * Set species
     *
     * @param \NIS\MAMIASBundle\Entity\AlienSpecies $species
     *
     * @return AlienLiterature
     */
    public function setSpecies(\NIS\MAMIASBundle\Entity\AlienSpecies $species = null)
    {
        $this->species = $species;

        return $this;
    }

    /**
     * Get species
     *
     * @return \NIS\MAMIASBundle\Entity\AlienSpecies
     */
    public function getSpecies()
    {
        return $this->species;
    }
}
