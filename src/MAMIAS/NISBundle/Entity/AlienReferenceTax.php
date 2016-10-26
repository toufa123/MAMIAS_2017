<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienReferenceTax
 *
 * @ORM\Table(name="alien_reference_tax")
 * @ORM\Entity
 */
class AlienReferenceTax
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_reference_tax_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_tax", type="string", length=64, nullable=true)
     */
    private $referenceTax;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=16, nullable=true)
     */
    private $code;



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
     * Set referenceTax
     *
     * @param string $referenceTax
     *
     * @return AlienReferenceTax
     */
    public function setReferenceTax($referenceTax)
    {
        $this->referenceTax = $referenceTax;

        return $this;
    }

    /**
     * Get referenceTax
     *
     * @return string
     */
    public function getReferenceTax()
    {
        return $this->referenceTax;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return AlienReferenceTax
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
    
    public function __toString() {
        return $this->getCode();
    }
}
