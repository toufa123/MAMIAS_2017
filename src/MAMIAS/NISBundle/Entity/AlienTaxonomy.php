<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienTaxonomy
 *
 * @ORM\Table(name="alien_taxonomy")
 * @ORM\Entity
 */
class AlienTaxonomy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_taxonomy_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="kingdom_l1", type="string", length=100, nullable=true)
     */
    private $kingdomL1;

    /**
     * @var string
     *
     * @ORM\Column(name="phylum_l2", type="string", length=100, nullable=true)
     */
    private $phylumL2;

    /**
     * @var string
     *
     * @ORM\Column(name="class_l3", type="string", length=100, nullable=true)
     */
    private $classL3;

    /**
     * @var string
     *
     * @ORM\Column(name="order_l4", type="string", length=100, nullable=true)
     */
    private $orderL4;

    /**
     * @var string
     *
     * @ORM\Column(name="family_l5", type="string", length=100, nullable=true)
     */
    private $familyL5;

    /**
     * @var \AlienSpecies
     *
     * /**
     * @ORM\OneToOne(targetEntity="AlienSpecies", inversedBy="taxonomy")
     * @ORM\JoinColumn(name="species_id", referencedColumnName="id")
     *
     */
    private $species;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set kingdomL1
     *
     * @param string $kingdomL1
     *
     * @return AlienTaxonomy
     */
    public function setKingdomL1($kingdomL1)
    {
        $this->kingdomL1 = $kingdomL1;

        return $this;
    }

    /**
     * Get kingdomL1
     *
     * @return string
     */
    public function getKingdomL1()
    {
        return $this->kingdomL1;
    }

    /**
     * Set phylumL2
     *
     * @param string $phylumL2
     *
     * @return AlienTaxonomy
     */
    public function setPhylumL2($phylumL2)
    {
        $this->phylumL2 = $phylumL2;

        return $this;
    }

    /**
     * Get phylumL2
     *
     * @return string
     */
    public function getPhylumL2()
    {
        return $this->phylumL2;
    }

    /**
     * Set classL3
     *
     * @param string $classL3
     *
     * @return AlienTaxonomy
     */
    public function setClassL3($classL3)
    {
        $this->classL3 = $classL3;

        return $this;
    }

    /**
     * Get classL3
     *
     * @return string
     */
    public function getClassL3()
    {
        return $this->classL3;
    }

    /**
     * Set orderL4
     *
     * @param string $orderL4
     *
     * @return AlienTaxonomy
     */
    public function setOrderL4($orderL4)
    {
        $this->orderL4 = $orderL4;

        return $this;
    }

    /**
     * Get orderL4
     *
     * @return string
     */
    public function getOrderL4()
    {
        return $this->orderL4;
    }

    /**
     * Set familyL5
     *
     * @param string $familyL5
     *
     * @return AlienTaxonomy
     */
    public function setFamilyL5($familyL5)
    {
        $this->familyL5 = $familyL5;

        return $this;
    }

    /**
     * Get familyL5
     *
     * @return string
     */
    public function getFamilyL5()
    {
        return $this->familyL5;
    }

    /**
     * Set species
     *
     * @param \MAMIAS\NISBundle\Entity\AlienSpecies $species
     *
     * @return AlienTaxonomy
     */
    public function setSpecies(\MAMIAS\NISBundle\Entity\AlienSpecies $species = null)
    {
        $this->species = $species;

        return $this;
    }

    /**
     * Get species
     *
     * @return \MAMIAS\NISBundle\Entity\AlienSpecies
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Set refTax
     *
     * @param \MAMIAS\NISBundle\Entity\AlienReferenceTax $refTax
     *
     * @return AlienTaxonomy
     */
    public function setRefTax(\MAMIAS\NISBundle\Entity\AlienReferenceTax $refTax = null)
    {
        $this->refTax = $refTax;

        return $this;
    }

    /**
     * Get refTax
     *
     * @return \MAMIAS\NISBundle\Entity\AlienReferenceTax
     */
    public function getRefTax()
    {
        return $this->refTax;
    }
}
