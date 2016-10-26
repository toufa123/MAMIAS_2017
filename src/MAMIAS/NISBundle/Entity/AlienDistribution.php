<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\SonataUserBundle\Entity\User;
/**
 * AlienDistribution
 *
 * @ORM\Table(name="alien_distribution")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="MAMIAS\NISBundle\Repository\AlienDistributionRepository")
 */
class AlienDistribution
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_distribution_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="first_area_sighting", type="string", length=100, nullable=true)
     */
    private $firstAreaSighting;

    /**
     * @var string
     *
     * @ORM\Column(name="area_notes", type="string", length=4000, nullable=true)
     */
    private $areaNotes;

    /**
     * @var string
     *
     * @ORM\Column(name="first_area_citation", type="string", length=128, nullable=true)
     */
    private $firstAreaCitation;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $latitude;

    /**
     * @var integer
     *
     * @ORM\Column(name="success_id", type="integer", nullable=true)
     */
    private $successId;

    /**
     * @var string
     *
     * @ORM\Column(name="distribution_code", type="string", length=128, nullable=true)
     */
    private $distributionCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="modification_date", type="integer", nullable=true)
     */
    private $modificationDate;

    /**
     * @var \AlienCountry
     *
     * @ORM\ManyToOne(targetEntity="AlienCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var \AlienMsfd
     *
     * @ORM\ManyToOne(targetEntity="AlienMsfd")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="msfd_id", referencedColumnName="id")
     * })
     */
    private $msfd;

    /**
     * @var \AlienRegionalSea
     *
     * @ORM\ManyToOne(targetEntity="AlienRegionalSea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="regional_sea_id", referencedColumnName="id")
     * })
     */
    private $regionalSea;

    /**
     * @var \AlienSpecies
     *
     * @ORM\ManyToOne(targetEntity="AlienSpecies", inversedBy="distribution",cascade={"persist"})
     * 
     *  @ORM\JoinColumn(name="species_id", referencedColumnName="id")
     *
     */
    private $species;

    /**
     * @var \AlienVectorName
     *
     * @ORM\ManyToOne(targetEntity="AlienVectorName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vector_id", referencedColumnName="id")
     * })
     */
    private $vector;

    /**
     * @var \AlienSuccessType
     *
     * @ORM\ManyToOne(targetEntity="AlienSuccessType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area_success_id", referencedColumnName="id")
     * })
     */
    private $areaSuccess;

    /**
     * @var AlienUsers
     *
     * @ORM\ManyToOne(targetEntity="AlienUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contrebution_id", referencedColumnName="id")
     * })
     */
    private $contrebution;



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
     * Set firstAreaSighting
     *
     * @param string $firstAreaSighting
     *
     * @return AlienDistribution
     */
    public function setFirstAreaSighting($firstAreaSighting)
    {
        $this->firstAreaSighting = $firstAreaSighting;

        return $this;
    }

    /**
     * Get firstAreaSighting
     *
     * @return string
     */
    public function getFirstAreaSighting()
    {
        return $this->firstAreaSighting;
    }

    /**
     * Set areaNotes
     *
     * @param string $areaNotes
     *
     * @return AlienDistribution
     */
    public function setAreaNotes($areaNotes)
    {
        $this->areaNotes = $areaNotes;

        return $this;
    }

    /**
     * Get areaNotes
     *
     * @return string
     */
    public function getAreaNotes()
    {
        return $this->areaNotes;
    }

    /**
     * Set firstAreaCitation
     *
     * @param string $firstAreaCitation
     *
     * @return AlienDistribution
     */
    public function setFirstAreaCitation($firstAreaCitation)
    {
        $this->firstAreaCitation = $firstAreaCitation;

        return $this;
    }

    /**
     * Get firstAreaCitation
     *
     * @return string
     */
    public function getFirstAreaCitation()
    {
        return $this->firstAreaCitation;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return AlienDistribution
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return AlienDistribution
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set successId
     *
     * @param integer $successId
     *
     * @return AlienDistribution
     */
    public function setSuccessId($successId)
    {
        $this->successId = $successId;

        return $this;
    }

    /**
     * Get successId
     *
     * @return integer
     */
    public function getSuccessId()
    {
        return $this->successId;
    }

    /**
     * Set distributionCode
     *
     * @param string $distributionCode
     *
     * @return AlienDistribution
     */
    public function setDistributionCode($distributionCode)
    {
        $this->distributionCode = $distributionCode;

        return $this;
    }

    /**
     * Get distributionCode
     *
     * @return string
     */
    public function getDistributionCode()
    {
        return $this->distributionCode;
    }

    /**
     * Set modificationDate
     *
     * @param integer $modificationDate
     *
     * @return AlienDistribution
     */
    public function setModificationDate($modificationDate)
    {
        $this->modificationDate = $modificationDate;

        return $this;
    }

    /**
     * Get modificationDate
     *
     * @return integer
     */
    public function getModificationDate()
    {
        return $this->modificationDate;
    }

    /**
     * Set country
     *
     * @param \NIS\MAMIASBundle\Entity\AlienCountry $country
     *
     * @return AlienDistribution
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
     * @return AlienDistribution
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
     * Set regionalSea
     *
     * @param \NIS\MAMIASBundle\Entity\AlienRegionalSea $regionalSea
     *
     * @return AlienDistribution
     */
    public function setRegionalSea(\NIS\MAMIASBundle\Entity\AlienRegionalSea $regionalSea = null)
    {
        $this->regionalSea = $regionalSea;

        return $this;
    }

    /**
     * Get regionalSea
     *
     * @return \NIS\MAMIASBundle\Entity\AlienRegionalSea
     */
    public function getRegionalSea()
    {
        return $this->regionalSea;
    }

    /**
     * Set species
     *
     * @param \NIS\MAMIASBundle\Entity\AlienSpecies $species
     *
     * @return AlienDistribution
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

    /**
     * Set vector
     *
     * @param \NIS\MAMIASBundle\Entity\AlienVectorRecords $vector
     *
     * @return AlienDistribution
     */
    public function setVector(\NIS\MAMIASBundle\Entity\AlienVectorRecords $vector = null)
    {
        $this->vector = $vector;

        return $this;
    }

    /**
     * Get vector
     *
     * @return \NIS\MAMIASBundle\Entity\AlienVectorRecords
     */
    public function getVector()
    {
        return $this->vector;
    }

    /**
     * Set areaSuccess
     *
     * @param \NIS\MAMIASBundle\Entity\AlienSuccessType $areaSuccess
     *
     * @return AlienDistribution
     */
    public function setAreaSuccess(\NIS\MAMIASBundle\Entity\AlienSuccessType $areaSuccess = null)
    {
        $this->areaSuccess = $areaSuccess;

        return $this;
    }

    /**
     * Get areaSuccess
     *
     * @return \NIS\MAMIASBundle\Entity\AlienSuccessType
     */
    public function getAreaSuccess()
    {
        return $this->areaSuccess;
    }

    /**
     * Set contrebution
     *
     * @param \NIS\MAMIASBundle\Entity\AlienUsers $contrebution
     *
     * @return AlienDistribution
     */
    public function setContrebution(\NIS\MAMIASBundle\Entity\AlienUsers $contrebution = null)
    {
        $this->contrebution = $contrebution;

        return $this;
    }

    /**
     * Get contrebution
     *
     * @return \NIS\MAMIASBundle\Entity\AlienUsers
     */
    public function getContrebution()
    {
        return $this->contrebution;
    }
}
