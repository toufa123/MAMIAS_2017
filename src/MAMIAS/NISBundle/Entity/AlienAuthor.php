<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienAuthor
 *
 * @ORM\Table(name="alien_author")
 * @ORM\Entity
 */
class AlienAuthor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\SequenceGenerator(sequenceName="alien_author_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="taxon_author", type="string", length=128, nullable=true)
     */
    private $taxonAuthor;

    /**
     * @var integer
     *
     * @ORM\Column(name="itis_taxon_author_id", type="integer", nullable=true)
     */
    private $itisTaxonAuthorId;

    /**
     * @var integer
     *
     * @ORM\Column(name="worms_taxon_author_id", type="integer", nullable=true)
     */
    private $wormsTaxonAuthorId;

    /**
     * @var string
     *
     * @ORM\Column(name="doi", type="string", length=100, nullable=true)
     */
    private $doi;

    /**
     * @var string
     *
     * @ORM\Column(name="author_code", type="string", length=128, nullable=true)
     */
    private $authorCode;



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
     * Set taxonAuthor
     *
     * @param string $taxonAuthor
     *
     * @return AlienAuthor
     */
    public function setTaxonAuthor($taxonAuthor)
    {
        $this->taxonAuthor = $taxonAuthor;

        return $this;
    }

    /**
     * Get taxonAuthor
     *
     * @return string
     */
    public function getTaxonAuthor()
    {
        return $this->taxonAuthor;
    }

    /**
     * Set itisTaxonAuthorId
     *
     * @param integer $itisTaxonAuthorId
     *
     * @return AlienAuthor
     */
    public function setItisTaxonAuthorId($itisTaxonAuthorId)
    {
        $this->itisTaxonAuthorId = $itisTaxonAuthorId;

        return $this;
    }

    /**
     * Get itisTaxonAuthorId
     *
     * @return integer
     */
    public function getItisTaxonAuthorId()
    {
        return $this->itisTaxonAuthorId;
    }

    /**
     * Set wormsTaxonAuthorId
     *
     * @param integer $wormsTaxonAuthorId
     *
     * @return AlienAuthor
     */
    public function setWormsTaxonAuthorId($wormsTaxonAuthorId)
    {
        $this->wormsTaxonAuthorId = $wormsTaxonAuthorId;

        return $this;
    }

    /**
     * Get wormsTaxonAuthorId
     *
     * @return integer
     */
    public function getWormsTaxonAuthorId()
    {
        return $this->wormsTaxonAuthorId;
    }

    /**
     * Set doi
     *
     * @param string $doi
     *
     * @return AlienAuthor
     */
    public function setDoi($doi)
    {
        $this->doi = $doi;

        return $this;
    }

    /**
     * Get doi
     *
     * @return string
     */
    public function getDoi()
    {
        return $this->doi;
    }

    /**
     * Set authorCode
     *
     * @param string $authorCode
     *
     * @return AlienAuthor
     */
    public function setAuthorCode($authorCode)
    {
        $this->authorCode = $authorCode;

        return $this;
    }

    /**
     * Get authorCode
     *
     * @return string
     */
    public function getAuthorCode()
    {
        return $this->authorCode;
    }
    
    public function __toString() {
        return $this->getTaxonAuthor()."/".$this->getAuthorCode();
    }
            
    }
