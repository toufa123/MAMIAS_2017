<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienUsersReferences
 *
 * @ORM\Table(name="alien_users_references")
 * @ORM\Entity
 */
class AlienUsersReferences
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_users_references_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_name", type="string", length=256, nullable=true)
     */
    private $referenceName;

    /**
     * @var \AlienUsers
     *
     * @ORM\ManyToOne(targetEntity="AlienUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



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
     * Set referenceName
     *
     * @param string $referenceName
     *
     * @return AlienUsersReferences
     */
    public function setReferenceName($referenceName)
    {
        $this->referenceName = $referenceName;

        return $this;
    }

    /**
     * Get referenceName
     *
     * @return string
     */
    public function getReferenceName()
    {
        return $this->referenceName;
    }

    /**
     * Set user
     *
     * @param \NIS\MAMIASBundle\Entity\AlienUsers $user
     *
     * @return AlienUsersReferences
     */
    public function setUser(\NIS\MAMIASBundle\Entity\AlienUsers $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \NIS\MAMIASBundle\Entity\AlienUsers
     */
    public function getUser()
    {
        return $this->user;
    }
}
