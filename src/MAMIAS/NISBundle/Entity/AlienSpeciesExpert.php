<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienSpeciesExpert
 *
 * @ORM\Table(name="alien_species_expert")
 * @ORM\Entity
 */
class AlienSpeciesExpert
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_species_expert_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AlienSpecies
     *
     * @ORM\ManyToOne(targetEntity="AlienSpecies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="specie_id", referencedColumnName="id")
     * })
     */
    private $specie;

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
     * Set specie
     *
     * @param \NIS\MAMIASBundle\Entity\AlienSpecies $specie
     *
     * @return AlienSpeciesExpert
     */
    public function setSpecie(\NIS\MAMIASBundle\Entity\AlienSpecies $specie = null)
    {
        $this->specie = $specie;

        return $this;
    }

    /**
     * Get specie
     *
     * @return \NIS\MAMIASBundle\Entity\AlienSpecies
     */
    public function getSpecie()
    {
        return $this->specie;
    }

    /**
     * Set users
     *
     * @param \NIS\MAMIASBundle\Entity\AlienUsers $users
     *
     * @return AlienSpeciesExpert
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
