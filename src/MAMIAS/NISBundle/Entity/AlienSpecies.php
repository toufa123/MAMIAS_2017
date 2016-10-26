<?php
namespace MAMIAS\NISBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * AlienSpecies
 *
 * @ORM\Table(name="alien_species")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="MAMIAS\NISBundle\Repository\AlienSpeciesRepository")
 */
class AlienSpecies
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_species_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="species_name", type="string", length=128, nullable=true)
     */
    private $speciesName;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=4000, nullable=true)
     */
    private $notes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modification_date", type="date", nullable=true)
     */
    private $modificationDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="invasive", type="boolean", nullable=true)
     */
    private $invasive;

    /**
     * @var string
     *
     * @ORM\Column(name="urlink", type="string", length=128, nullable=true)
     */
    private $urlink;

    /**
     * @var string
     *
     * @ORM\Column(name="invasive_link", type="string", length=100, nullable=true)
     */
    private $invasiveLink;

    /**
     * @var boolean
     *
     * @ORM\Column(name="trigger", type="boolean", nullable=true)
     */
    private $trigger;

    /**
     * @var integer
     *
     * @ORM\Column(name="med_1st_sighting", type="integer", nullable=true)
     */
    private $med1stSighting;

    /**
     * @var string
     *
     * @ORM\Column(name="species_code", type="string", length=128, nullable=true)
     */
    private $speciesCode;

    /**
     * @var \AlienDonorArea
     *
     * @ORM\OneToOne(targetEntity="AlienDonorArea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="donor_area_id", referencedColumnName="id")
     * })
     */
    private $donorArea;

    /**
     * @var \AlienEcofunctional
     *
     * @ORM\OneToOne(targetEntity="AlienEcofunctional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ecofunctional_id", referencedColumnName="id")
     * })
     */
    private $ecofunctional;

    /**
     * @var \AlienMed1stCitation
     *
     * @ORM\OneToOne(targetEntity="AlienMed1stCitation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="med_1st_citation_id", referencedColumnName="id")
     * })
     */
    private $med1stCitation;

    /**
     * @var \AlienSuccessType
     *
     * @ORM\OneToOne(targetEntity="AlienSuccessType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="med_success_id", referencedColumnName="id")
     * })
     */
    private $medSuccess;

    /**
     * @var \AlienOrigin
     *
     * @ORM\OneToOne(targetEntity="AlienOrigin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="origin_id", referencedColumnName="id")
     * })
     */
    private $origin;

    /**
     * @var \AlienStatus
     *
     * @ORM\OneToOne(targetEntity="AlienStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     * })
     */
    private $status;

    /**
     * @var \AlienAuthor
     *
     * @ORM\OneToOne(targetEntity="AlienAuthor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="taxon_author_id", referencedColumnName="id")
     * })
     */
    private $taxonAuthor;

  

    /**
     * @var \AlienDistribution
     * @ORM\OneToMany(targetEntity="AlienDistribution",mappedBy="species",cascade={"remove", "persist"},orphanRemoval=true)
     */
    private $distribution;


    /**
     * @ORM\ManyToMany(targetEntity="AlienVectorName",cascade={"persist", "merge"})
     * @ORM\JoinTable(name="alien_vector_records",
     *      joinColumns={@ORM\JoinColumn(name="species_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="vector_id", referencedColumnName="id")}
     *      )
     */
    private $Vectors;
    
    /**
     * 
     *
     * @ORM\OneToMany(targetEntity="AlienImage",mappedBy="species",cascade={"remove", "persist"},orphanRemoval=true)
     * 
     */
    private $image;
    
    /**
     * 
     *
     * @ORM\OneToMany(targetEntity="AlienLiterature",mappedBy="species",cascade={"remove", "persist"},orphanRemoval=true)
     * 
     */
    private $literature;
    
    /**
     * @var \AlienTaxonomy
     * @ORM\OneToOne(targetEntity="AlienTaxonomy", mappedBy="species")
     * @ORM\JoinColumn(name="taxonomy_id", referencedColumnName="id")
     */
    private $taxonomy;
    
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
     * Set speciesName
     *
     * @param string $speciesName
     *
     * @return AlienSpecies
     */
    public function setSpeciesName($speciesName)
    {
        $this->speciesName = $speciesName;

        return $this;
    }

    /**
     * Get speciesName
     *
     * @return string
     */
    public function getSpeciesName()
    {
        return $this->speciesName;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return AlienSpecies
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set modificationDate
     *
     * @param \DateTime $modificationDate
     *
     * @return AlienSpecies
     */
    public function setModificationDate($modificationDate)
    {
        $this->modificationDate = $modificationDate;

        return $this;
    }

    /**
     * Get modificationDate
     *
     * @return \DateTime
     */
    public function getModificationDate()
    {
        return $this->modificationDate;
    }

    /**
     * Set invasive
     *
     * @param boolean $invasive
     *
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
     * Set urlink
     *
     * @param string $urlink
     *
     * @return AlienSpecies
     */
    public function setUrlink($urlink)
    {
        $this->urlink = $urlink;

        return $this;
    }

    /**
     * Get urlink
     *
     * @return string
     */
    public function getUrlink()
    {
        return $this->urlink;
    }

    /**
     * Set invasiveLink
     *
     * @param string $invasiveLink
     *
     * @return AlienSpecies
     */
    public function setInvasiveLink($invasiveLink)
    {
        $this->invasiveLink = $invasiveLink;

        return $this;
    }

    /**
     * Get invasiveLink
     *
     * @return string
     */
    public function getInvasiveLink()
    {
        return $this->invasiveLink;
    }

    /**
     * Set trigger
     *
     * @param boolean $trigger
     *
     * @return AlienSpecies
     */
    public function setTrigger($trigger)
    {
        $this->trigger = $trigger;

        return $this;
    }

    /**
     * Get trigger
     *
     * @return boolean
     */
    public function getTrigger()
    {
        return $this->trigger;
    }

    /**
     * Set med1stSighting
     *
     * @param integer $med1stSighting
     *
     * @return AlienSpecies
     */
    public function setMed1stSighting($med1stSighting)
    {
        $this->med1stSighting = $med1stSighting;

        return $this;
    }

    /**
     * Get med1stSighting
     *
     * @return integer
     */
    public function getMed1stSighting()
    {
        return $this->med1stSighting;
    }

    /**
     * Set speciesCode
     *
     * @param string $speciesCode
     *
     * @return AlienSpecies
     */
    public function setSpeciesCode($speciesCode)
    {
        $this->speciesCode = $speciesCode;

        return $this;
    }

    /**
     * Get speciesCode
     *
     * @return string
     */
    public function getSpeciesCode()
    {
        return $this->speciesCode;
    }

    /**
     * Set donorArea
     *
     * @param \MAMIAS\NISBundle\Entity\AlienDonorArea $donorArea
     *
     * @return AlienSpecies
     */
    public function setDonorArea(\MAMIAS\NISBundle\Entity\AlienDonorArea $donorArea = null)
    {
        $this->donorArea = $donorArea;

        return $this;
    }

    /**
     * Get donorArea
     *
     * @return \MAMIAS\NISBundle\Entity\AlienDonorArea
     */
    public function getDonorArea()
    {
        return $this->donorArea;
    }

    /**
     * Set ecofunctional
     *
     * @param \MAMIAS\NISBundle\Entity\AlienEcofunctional $ecofunctional
     *
     * @return AlienSpecies
     */
    public function setEcofunctional(\MAMIAS\NISBundle\Entity\AlienEcofunctional $ecofunctional = null)
    {
        $this->ecofunctional = $ecofunctional;

        return $this;
    }

    /**
     * Get ecofunctional
     *
     * @return \MAMIAS\NISBundle\Entity\AlienEcofunctional
     */
    public function getEcofunctional()
    {
        return $this->ecofunctional;
    }

    /**
     * Set med1stCitation
     *
     * @param \MAMIAS\NISBundle\Entity\AlienMed1stCitation $med1stCitation
     *
     * @return AlienSpecies
     */
    public function setMed1stCitation(\MAMIAS\NISBundle\Entity\AlienMed1stCitation $med1stCitation = null)
    {
        $this->med1stCitation = $med1stCitation;

        return $this;
    }

    /**
     * Get med1stCitation
     *
     * @return \MAMIAS\NISBundle\Entity\AlienMed1stCitation
     */
    public function getMed1stCitation()
    {
        return $this->med1stCitation;
    }

    /**
     * Set medSuccess
     *
     * @param \MAMIAS\NISBundle\Entity\AlienSuccessType $medSuccess
     *
     * @return AlienSpecies
     */
    public function setMedSuccess(\MAMIAS\NISBundle\Entity\AlienSuccessType $medSuccess = null)
    {
        $this->medSuccess = $medSuccess;

        return $this;
    }

    /**
     * Get medSuccess
     *
     * @return \MAMIAS\NISBundle\Entity\AlienSuccessType
     */
    public function getMedSuccess()
    {
        return $this->medSuccess;
    }

    /**
     * Set origin
     *
     * @param \MAMIAS\NISBundle\Entity\AlienOrigin $origin
     *
     * @return AlienSpecies
     */
    public function setOrigin(\MAMIAS\NISBundle\Entity\AlienOrigin $origin = null)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get origin
     *
     * @return \MAMIAS\NISBundle\Entity\AlienOrigin
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set status
     *
     * @param \MAMIAS\NISBundle\Entity\AlienStatus $status
     *
     * @return AlienSpecies
     */
    public function setStatus(\MAMIAS\NISBundle\Entity\AlienStatus $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \MAMIAS\NISBundle\Entity\AlienStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set taxonAuthor
     *
     * @param \MAMIAS\NISBundle\Entity\AlienAuthor $taxonAuthor
     *
     * @return AlienSpecies
     */
    public function setTaxonAuthor(\MAMIAS\NISBundle\Entity\AlienAuthor $taxonAuthor = null)
    {
        $this->taxonAuthor = $taxonAuthor;

        return $this;
    }

    /**
     * Get taxonAuthor
     *
     * @return \MAMIAS\NISBundle\Entity\AlienAuthor
     */
    public function getTaxonAuthor()
    {
        return $this->taxonAuthor;
    }

    

    /**
     * Set distribution
     *
     * @param \MAMIAS\NISBundle\Entity\AlienDistribution $distribution
     *
     * @return AlienSpecies
     */
    public function setDistribution(\MAMIAS\NISBundle\Entity\AlienDistribution $distribution = null)
    {
        $this->distribution = $distribution;

        return $this;
    }
    

    /**
     * Get distribution
     *
     * @return \MAMIAS\NISBundle\Entity\AlienDistribution
     */
    public function getDistribution()
    {
        return $this->distribution;
    }
    
    
    
    public function __toString() {
        return $this->speciesName;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->distribution = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Vectors = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Image = new \Doctrine\Common\Collections\ArrayCollection();
        $this->literature = new \Doctrine\Common\Collections\ArrayCollection();
        //$this->taxonomy = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add distribution
     *
     * @param \MAMIAS\NISBundle\Entity\AlienDistribution $distribution
     *
     * @return AlienSpecies
     */
    public function addDistribution(\MAMIAS\NISBundle\Entity\AlienDistribution $distribution)
    {
        $this->distribution[] = $distribution;
        $distribution->setSpecies($this);
        return $this;
    }

    /**
     * Remove distribution
     *
     * @param \MAMIAS\NISBundle\Entity\AlienDistribution $distribution
     */
    public function removeDistribution(\MAMIAS\NISBundle\Entity\AlienDistribution $distribution)
    {
        $this->distribution->removeElement($distribution);
    }

    /**
     * Add vector
     *
     * @param \MAMIAS\NISBundle\Entity\AlienVectorName $vector
     *
     * @return AlienSpecies
     */
    public function addVectors(\MAMIAS\NISBundle\Entity\AlienVectorName $vectors)
    {
        $this->Vectors[] = $vectors;

        return $this;
    }

    /**
     * Remove vector
     *
     * @param \NIS\MAMIASBundle\Entity\AlienVectorName $vector
     */
    public function removeVectors(\MAMIAS\NISBundle\Entity\AlienVectorName $vector)
    {
        $this->Vector->removeElement($vector);
    }

    /**
     * Get vector
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVectors()
    {
        return $this->Vectors;
    }

    /**
     * Add vector
     *
     * @param \MAMIAS\NISBundle\Entity\AlienVectorName $vector
     *
     * @return AlienSpecies
     */
    public function addVector(\MAMIAS\NISBundle\Entity\AlienVectorName $vector)
    {
        $this->Vectors[] = $vector;

        return $this;
    }

    /**
     * Remove vector
     *
     * @param \NIS\MAMIASBundle\Entity\AlienVectorName $vector
     */
    public function removeVector(\MAMIAS\NISBundle\Entity\AlienVectorName $vector)
    {
        $this->Vectors->removeElement($vector);
    }

    /**
     * Add image
     *
     * @param \NIS\MAMIASBundle\Entity\AlienImage $image
     *
     * @return AlienSpecies
     */
    public function addImage(\MAMIAS\NISBundle\Entity\AlienImage $image)
    {
        $this->image[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \NIS\MAMIASBundle\Entity\AlienImage $image
     */
    public function removeImage(\MAMIAS\NISBundle\Entity\AlienImage $image)
    {
        $this->image->removeElement($image);
    }

    /**
     * Get image
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set taxonomy
     *
     * @param \NIS\MAMIASBundle\Entity\AlienTaxonomy $taxonomy
     *
     * @return AlienSpecies
     */
    public function setTaxonomy(\MAMIAS\NISBundle\Entity\AlienTaxonomy $taxonomy = null)
    {
        $this->taxonomy = $taxonomy;

        return $this;
    }

    /**
     * Get taxonomy
     *
     * @return \MAMIAS\NISBundle\Entity\AlienTaxonomy
     */
    public function getTaxonomy()
    {
        return $this->taxonomy;
    }

    /**
     * Add literature
     *
     * @param \MAMIAS\NISBundle\Entity\AlienLiterature $literature
     *
     * @return AlienSpecies
     */
    public function addLiterature(\MAMIAS\NISBundle\Entity\AlienLiterature $literature)
    {
        $this->literature[] = $literature;

        return $this;
    }

    /**
     * Remove literature
     *
     * @param \MAMIAS\NISBundle\Entity\AlienLiterature $literature
     */
    public function removeLiterature(\MAMIAS\NISBundle\Entity\AlienLiterature $literature)
    {
        $this->literature->removeElement($literature);
    }

    /**
     * Get literature
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLiterature()
    {
        return $this->literature;
    }
}
