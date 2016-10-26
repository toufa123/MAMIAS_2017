<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienExpertExpertiseInterest
 *
 * @ORM\Table(name="alien_expert_expertise_interest")
 * @ORM\Entity
 */
class AlienExpertExpertiseInterest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_expert_expertise_interest_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AlienExpertiseInterest
     *
     * @ORM\ManyToOne(targetEntity="AlienExpertiseInterest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expertise_interest", referencedColumnName="id")
     * })
     */
    private $expertiseInterest;

    /**
     * @var \AlienUsers
     *
     * @ORM\ManyToOne(targetEntity="AlienUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="users_id", referencedColumnName="id")
     * })
     */
    private $users;



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
     * @param \NIS\MAMIASBundle\Entity\AlienExpertiseInterest $expertiseInterest
     *
     * @return AlienExpertExpertiseInterest
     */
    public function setExpertiseInterest(\NIS\MAMIASBundle\Entity\AlienExpertiseInterest $expertiseInterest = null)
    {
        $this->expertiseInterest = $expertiseInterest;

        return $this;
    }

    /**
     * Get expertiseInterest
     *
     * @return \NIS\MAMIASBundle\Entity\AlienExpertiseInterest
     */
    public function getExpertiseInterest()
    {
        return $this->expertiseInterest;
    }

    /**
     * Set users
     *
     * @param \NIS\MAMIASBundle\Entity\AlienUsers $users
     *
     * @return AlienExpertExpertiseInterest
     */
    public function setUsers(\NIS\MAMIASBundle\Entity\AlienUsers $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \NIS\MAMIASBundle\Entity\AlienUsers
     */
    public function getUsers()
    {
        return $this->users;
    }
}
