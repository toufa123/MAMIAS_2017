<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienSuccessType
 *
 * @ORM\Table(name="alien_success_type")
 * @ORM\Entity
 */
class AlienSuccessType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_success_type_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="success_type", type="string", length=100, nullable=true)
     */
    private $successType;

    /**
     * @var string
     *
     * @ORM\Column(name="success_code", type="string", length=32, nullable=true)
     */
    private $successCode;



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
     * Set successType
     *
     * @param string $successType
     *
     * @return AlienSuccessType
     */
    public function setSuccessType($successType)
    {
        $this->successType = $successType;

        return $this;
    }

    /**
     * Get successType
     *
     * @return string
     */
    public function getSuccessType()
    {
        return $this->successType;
    }

    /**
     * Set successCode
     *
     * @param string $successCode
     *
     * @return AlienSuccessType
     */
    public function setSuccessCode($successCode)
    {
        $this->successCode = $successCode;

        return $this;
    }

    /**
     * Get successCode
     *
     * @return string
     */
    public function getSuccessCode()
    {
        return $this->successCode;
    }
    
    public function __toString() {
        return $this->getSuccessCode()."/".$this->getSuccessType();
    }
}
