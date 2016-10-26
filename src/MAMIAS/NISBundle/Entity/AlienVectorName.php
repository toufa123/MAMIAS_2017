<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienVectorName
 *
 * @ORM\Table(name="alien_vector_name")
 * @ORM\Entity
 */
class AlienVectorName
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_vector_name_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="vector_name", type="string", length=100, nullable=true)
     */
    private $vectorName;

    /**
     * @var string
     *
     * @ORM\Column(name="vector_icone", type="string", length=150, nullable=true)
     */
    private $vectorIcone;

    /**
     * @var string
     *
     * @ORM\Column(name="vector_code", type="string", length=128, nullable=true)
     */
    private $vectorCode;

    

   

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
     * Set vectorName
     *
     * @param string $vectorName
     *
     * @return AlienVectorName
     */
    public function setVectorName($vectorName)
    {
        $this->vectorName = $vectorName;

        return $this;
    }

    /**
     * Get vectorName
     *
     * @return string
     */
    public function getVectorName()
    {
        return $this->vectorName;
    }

    /**
     * Set vectorIcone
     *
     * @param string $vectorIcone
     *
     * @return AlienVectorName
     */
    public function setVectorIcone($vectorIcone)
    {
        $this->vectorIcone = $vectorIcone;

        return $this;
    }

    /**
     * Get vectorIcone
     *
     * @return string
     */
    public function getVectorIcone()
    {
        return $this->vectorIcone;
    }

    /**
     * Set vectorCode
     *
     * @param string $vectorCode
     *
     * @return AlienVectorName
     */
    public function setVectorCode($vectorCode)
    {
        $this->vectorCode = $vectorCode;

        return $this;
    }

    /**
     * Get vectorCode
     *
     * @return string
     */
    public function getVectorCode()
    {
        return $this->vectorCode;
    }
    
    public function __toString() {
        return $this->getVectorName();
    }

    /**
     * Add species
     *
     * @param \NIS\MAMIASBundle\Entity\AlienSpecies $species
     *
     * @return AlienVectorName
     */
    public function addSpecy(\NIS\MAMIASBundle\Entity\AlienSpecies $species)
    {
        $this->species[] = $species;

        return $this;
    }

    /**
     * Remove species
     *
     * @param \NIS\MAMIASBundle\Entity\AlienSpecies $species
     */
    public function removeSpecy(\NIS\MAMIASBundle\Entity\AlienSpecies $species)
    {
        $this->species->removeElement($species);
    }

    /**
     * Get species
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSpecies()
    {
        return $this->species;
    }
}
