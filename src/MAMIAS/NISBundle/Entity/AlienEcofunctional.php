<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienEcofunctional
 *
 * @ORM\Table(name="alien_ecofunctional")
 * @ORM\Entity
 */
class AlienEcofunctional
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_ecofunctional_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="ecofunctional_code", type="string", length=128, nullable=true)
     */
    private $ecofunctionalCode;



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
     *
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
     * Set ecofunctionalCode
     *
     * @param string $ecofunctionalCode
     *
     * @return AlienEcofunctional
     */
    public function setEcofunctionalCode($ecofunctionalCode)
    {
        $this->ecofunctionalCode = $ecofunctionalCode;

        return $this;
    }

    /**
     * Get ecofunctionalCode
     *
     * @return string
     */
    public function getEcofunctionalCode()
    {
        return $this->ecofunctionalCode;
    }
    
    public function __toString() {
        return $this->getEcofunctionalCode()."/".$this->getEcofunctional();
    }}
