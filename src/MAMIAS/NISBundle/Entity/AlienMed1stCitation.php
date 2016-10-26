<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienMed1stCitation
 *
 * @ORM\Table(name="alien_med_1st_citation")
 * @ORM\Entity
 */
class AlienMed1stCitation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_med_1st_citation_id_seq", allocationSize=1, initialValue=2)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="first_author", type="string", length=512, nullable=true)
     */
    private $firstAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="med_1st_citation_code", type="string", length=128, nullable=true)
     */
    private $med1stCitationCode;



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
     * Set firstAuthor
     *
     * @param string $firstAuthor
     *
     * @return AlienMed1stCitation
     */
    public function setFirstAuthor($firstAuthor)
    {
        $this->firstAuthor = $firstAuthor;

        return $this;
    }

    /**
     * Get firstAuthor
     *
     * @return string
     */
    public function getFirstAuthor()
    {
        return $this->firstAuthor;
    }

    /**
     * Set med1stCitationCode
     *
     * @param string $med1stCitationCode
     *
     * @return AlienMed1stCitation
     */
    public function setMed1stCitationCode($med1stCitationCode)
    {
        $this->med1stCitationCode = $med1stCitationCode;

        return $this;
    }

    /**
     * Get med1stCitationCode
     *
     * @return string
     */
    public function getMed1stCitationCode()
    {
        return $this->med1stCitationCode;
    }
    
    public function __toString() {
        return $this->getFirstAuthor()."/".$this->getMed1stCitationCode();
    }
}
