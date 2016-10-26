<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienExpertiseInterest
 *
 * @ORM\Table(name="alien_expertise_interest")
 * @ORM\Entity
 */
class AlienExpertiseInterest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_expertise_interest_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="expertise_interest", type="string", length=100, nullable=true)
     */
    private $expertiseInterest;



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
     * Set expertiseInterest
     *
     * @param string $expertiseInterest
     *
     * @return AlienExpertiseInterest
     */
    public function setExpertiseInterest($expertiseInterest)
    {
        $this->expertiseInterest = $expertiseInterest;

        return $this;
    }

    /**
     * Get expertiseInterest
     *
     * @return string
     */
    public function getExpertiseInterest()
    {
        return $this->expertiseInterest;
    }
}
