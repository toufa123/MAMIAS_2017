<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienProfil
 *
 * @ORM\Table(name="alien_profil")
 * @ORM\Entity
 */
class AlienProfil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_profil_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name_profil", type="string", length=150, nullable=true)
     */
    private $nameProfil;



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
     * Set nameProfil
     *
     * @param string $nameProfil
     *
     * @return AlienProfil
     */
    public function setNameProfil($nameProfil)
    {
        $this->nameProfil = $nameProfil;

        return $this;
    }

    /**
     * Get nameProfil
     *
     * @return string
     */
    public function getNameProfil()
    {
        return $this->nameProfil;
    }
}
