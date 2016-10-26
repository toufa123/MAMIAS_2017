<?php

namespace MAMIAS\NISBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * AlienHistory
 *
 * @ORM\Table(name="alien_history")
 * @ORM\Entity
 */
class AlienHistory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_history_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="history_date", type="date", nullable=true)
     */
    private $historyDate;

    /**
     * @var string
     *
     * @ORM\Column(name="history_description", type="string", length=100, nullable=true)
     */
    private $historyDescription;

    /**
     * @var \AlienSpecies
     *
     * @ORM\ManyToOne(targetEntity="AlienSpecies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="species_id", referencedColumnName="id")
     * })
     */
    private $species;

    /**
     * @var \AlienHistoryType
     *
     * @ORM\ManyToOne(targetEntity="AlienHistoryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="history_type_id", referencedColumnName="id")
     * })
     */
    private $historyType;

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
     * Set historyDate
     *
     * @param \DateTime $historyDate
     *
     * @return AlienHistory
     */
    public function setHistoryDate($historyDate)
    {
        $this->historyDate = $historyDate;

        return $this;
    }

    /**
     * Get historyDate
     *
     * @return \DateTime
     */
    public function getHistoryDate()
    {
        return $this->historyDate;
    }

    /**
     * Set historyDescription
     *
     * @param string $historyDescription
     *
     * @return AlienHistory
     */
    public function setHistoryDescription($historyDescription)
    {
        $this->historyDescription = $historyDescription;

        return $this;
    }

    /**
     * Get historyDescription
     *
     * @return string
     */
    public function getHistoryDescription()
    {
        return $this->historyDescription;
    }

    /**
     * Set species
     *
     * @param \NIS\MAMIASBundle\Entity\AlienSpecies $species
     *
     * @return AlienHistory
     */
    public function setSpecies(\NIS\MAMIASBundle\Entity\AlienSpecies $species = null)
    {
        $this->species = $species;

        return $this;
    }

    /**
     * Get species
     *
     * @return \NIS\MAMIASBundle\Entity\AlienSpecies
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Set historyType
     *
     * @param \NIS\MAMIASBundle\Entity\AlienHistoryType $historyType
     *
     * @return AlienHistory
     */
    public function setHistoryType(\NIS\MAMIASBundle\Entity\AlienHistoryType $historyType = null)
    {
        $this->historyType = $historyType;

        return $this;
    }

    /**
     * Get historyType
     *
     * @return \NIS\MAMIASBundle\Entity\AlienHistoryType
     */
    public function getHistoryType()
    {
        return $this->historyType;
    }

    /**
     * Set users
     *
     * @param \NIS\MAMIASBundle\Entity\AlienUsers $users
     *
     * @return AlienHistory
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
