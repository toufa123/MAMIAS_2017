<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienSynonyms
 *
 * @ORM\Table(name="alien_synonyms")
 * @ORM\Entity
 */
class AlienSynonyms
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_synonyms_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyms_name", type="string", length=128, nullable=true)
     */
    private $synonymsName;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyms_code", type="string", length=128, nullable=true)
     */
    private $synonymsCode;

    /**
     * @var \AlienReferenceTax
     *
     * @ORM\ManyToOne(targetEntity="AlienReferenceTax")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_tax_id", referencedColumnName="id")
     * })
     */
    private $refTax;

    /**
     * @var \AlienSpecies
     *
     * @ORM\ManyToOne(targetEntity="AlienSpecies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="species_id", referencedColumnName="id")
     * })
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
     * Set synonymsName
     *
     * @param string $synonymsName
     *
     * @return AlienSynonyms
     */
    public function setSynonymsName($synonymsName)
    {
        $this->synonymsName = $synonymsName;

        return $this;
    }

    /**
     * Get synonymsName
     *
     * @return string
     */
    public function getSynonymsName()
    {
        return $this->synonymsName;
    }

    /**
     * Set synonymsCode
     *
     * @param string $synonymsCode
     *
     * @return AlienSynonyms
     */
    public function setSynonymsCode($synonymsCode)
    {
        $this->synonymsCode = $synonymsCode;

        return $this;
    }

    /**
     * Get synonymsCode
     *
     * @return string
     */
    public function getSynonymsCode()
    {
        return $this->synonymsCode;
    }

    /**
     * Set refTax
     *
     * @param \NIS\MAMIASBundle\Entity\AlienReferenceTax $refTax
     *
     * @return AlienSynonyms
     */
    public function setRefTax(\NIS\MAMIASBundle\Entity\AlienReferenceTax $refTax = null)
    {
        $this->refTax = $refTax;

        return $this;
    }

    /**
     * Get refTax
     *
     * @return \NIS\MAMIASBundle\Entity\AlienReferenceTax
     */
    public function getRefTax()
    {
        return $this->refTax;
    }

    /**
     * Set species
     *
     * @param \NIS\MAMIASBundle\Entity\AlienSpecies $species
     *
     * @return AlienSynonyms
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
