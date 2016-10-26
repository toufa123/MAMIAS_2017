<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienEcofunctionalUser
 *
 * @ORM\Table(name="alien_ecofunctional_user")
 * @ORM\Entity
 */
class AlienEcofunctionalUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_ecofunctional_user_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AlienEcofunctional
     *
     * @ORM\ManyToOne(targetEntity="AlienEcofunctional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ecofunctional_id", referencedColumnName="id")
     * })
     */
    private $ecofunctional;

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
     * Set ecofunctional
     *
     * @param \NIS\MAMIASBundle\Entity\AlienEcofunctional $ecofunctional
     *
     * @return AlienEcofunctionalUser
     */
    public function setEcofunctional(\NIS\MAMIASBundle\Entity\AlienEcofunctional $ecofunctional = null)
    {
        $this->ecofunctional = $ecofunctional;

        return $this;
    }

    /**
     * Get ecofunctional
     *
     * @return \NIS\MAMIASBundle\Entity\AlienEcofunctional
     */
    public function getEcofunctional()
    {
        return $this->ecofunctional;
    }

    /**
     * Set users
     *
     * @param \NIS\MAMIASBundle\Entity\AlienUsers $users
     *
     * @return AlienEcofunctionalUser
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
