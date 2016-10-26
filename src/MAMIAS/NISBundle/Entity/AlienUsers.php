<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienUsers
 *
 * @ORM\Table(name="alien_users")
 * @ORM\Entity
 */
class AlienUsers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_users_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user_first_name", type="string", length=100, nullable=true)
     */
    private $userFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_last_name", type="string", length=100, nullable=true)
     */
    private $userLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=100, nullable=true)
     */
    private $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="user_adresse", type="string", length=255, nullable=true)
     */
    private $userAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="user_telephone", type="string", length=200, nullable=true)
     */
    private $userTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="user_skype", type="string", length=100, nullable=true)
     */
    private $userSkype;

    /**
     * @var string
     *
     * @ORM\Column(name="user_fax", type="string", length=200, nullable=true)
     */
    private $userFax;

    /**
     * @var string
     *
     * @ORM\Column(name="user_country", type="string", length=45, nullable=true)
     */
    private $userCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="user_institution", type="string", length=45, nullable=true)
     */
    private $userInstitution;

    /**
     * @var boolean
     *
     * @ORM\Column(name="expert_confiance", type="boolean", nullable=true)
     */
    private $expertConfiance;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=true)
     */
    private $salt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_expert", type="boolean", nullable=true)
     */
    private $userExpert;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_admin", type="boolean", nullable=true)
     */
    private $userAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255, nullable=true)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="text", nullable=true)
     */
    private $ref;

    /**
     * @var \AlienProfil
     *
     * @ORM\ManyToOne(targetEntity="AlienProfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profil_id", referencedColumnName="id")
     * })
     */
    private $profil;

    /**
     * @var \AlienCountry
     *
     * @ORM\ManyToOne(targetEntity="AlienCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var \AlienMsfd
     *
     * @ORM\ManyToOne(targetEntity="AlienMsfd")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="msfd_id", referencedColumnName="id")
     * })
     */
    private $msfd;

    /**
     * @var \AlienRegionalSea
     *
     * @ORM\ManyToOne(targetEntity="AlienRegionalSea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="regional_sea_id", referencedColumnName="id")
     * })
     */
    private $regionalSea;



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
     * Set userFirstName
     *
     * @param string $userFirstName
     *
     * @return AlienUsers
     */
    public function setUserFirstName($userFirstName)
    {
        $this->userFirstName = $userFirstName;

        return $this;
    }

    /**
     * Get userFirstName
     *
     * @return string
     */
    public function getUserFirstName()
    {
        return $this->userFirstName;
    }

    /**
     * Set userLastName
     *
     * @param string $userLastName
     *
     * @return AlienUsers
     */
    public function setUserLastName($userLastName)
    {
        $this->userLastName = $userLastName;

        return $this;
    }

    /**
     * Get userLastName
     *
     * @return string
     */
    public function getUserLastName()
    {
        return $this->userLastName;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     *
     * @return AlienUsers
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return AlienUsers
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set userAdresse
     *
     * @param string $userAdresse
     *
     * @return AlienUsers
     */
    public function setUserAdresse($userAdresse)
    {
        $this->userAdresse = $userAdresse;

        return $this;
    }

    /**
     * Get userAdresse
     *
     * @return string
     */
    public function getUserAdresse()
    {
        return $this->userAdresse;
    }

    /**
     * Set userTelephone
     *
     * @param string $userTelephone
     *
     * @return AlienUsers
     */
    public function setUserTelephone($userTelephone)
    {
        $this->userTelephone = $userTelephone;

        return $this;
    }

    /**
     * Get userTelephone
     *
     * @return string
     */
    public function getUserTelephone()
    {
        return $this->userTelephone;
    }

    /**
     * Set userSkype
     *
     * @param string $userSkype
     *
     * @return AlienUsers
     */
    public function setUserSkype($userSkype)
    {
        $this->userSkype = $userSkype;

        return $this;
    }

    /**
     * Get userSkype
     *
     * @return string
     */
    public function getUserSkype()
    {
        return $this->userSkype;
    }

    /**
     * Set userFax
     *
     * @param string $userFax
     *
     * @return AlienUsers
     */
    public function setUserFax($userFax)
    {
        $this->userFax = $userFax;

        return $this;
    }

    /**
     * Get userFax
     *
     * @return string
     */
    public function getUserFax()
    {
        return $this->userFax;
    }

    /**
     * Set userCountry
     *
     * @param string $userCountry
     *
     * @return AlienUsers
     */
    public function setUserCountry($userCountry)
    {
        $this->userCountry = $userCountry;

        return $this;
    }

    /**
     * Get userCountry
     *
     * @return string
     */
    public function getUserCountry()
    {
        return $this->userCountry;
    }

    /**
     * Set userInstitution
     *
     * @param string $userInstitution
     *
     * @return AlienUsers
     */
    public function setUserInstitution($userInstitution)
    {
        $this->userInstitution = $userInstitution;

        return $this;
    }

    /**
     * Get userInstitution
     *
     * @return string
     */
    public function getUserInstitution()
    {
        return $this->userInstitution;
    }

    /**
     * Set expertConfiance
     *
     * @param boolean $expertConfiance
     *
     * @return AlienUsers
     */
    public function setExpertConfiance($expertConfiance)
    {
        $this->expertConfiance = $expertConfiance;

        return $this;
    }

    /**
     * Get expertConfiance
     *
     * @return boolean
     */
    public function getExpertConfiance()
    {
        return $this->expertConfiance;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return AlienUsers
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set userExpert
     *
     * @param boolean $userExpert
     *
     * @return AlienUsers
     */
    public function setUserExpert($userExpert)
    {
        $this->userExpert = $userExpert;

        return $this;
    }

    /**
     * Get userExpert
     *
     * @return boolean
     */
    public function getUserExpert()
    {
        return $this->userExpert;
    }

    /**
     * Set userAdmin
     *
     * @param boolean $userAdmin
     *
     * @return AlienUsers
     */
    public function setUserAdmin($userAdmin)
    {
        $this->userAdmin = $userAdmin;

        return $this;
    }

    /**
     * Get userAdmin
     *
     * @return boolean
     */
    public function getUserAdmin()
    {
        return $this->userAdmin;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return AlienUsers
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return AlienUsers
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set ref
     *
     * @param string $ref
     *
     * @return AlienUsers
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set profil
     *
     * @param \NIS\MAMIASBundle\Entity\AlienProfil $profil
     *
     * @return AlienUsers
     */
    public function setProfil(\NIS\MAMIASBundle\Entity\AlienProfil $profil = null)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get profil
     *
     * @return \NIS\MAMIASBundle\Entity\AlienProfil
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set country
     *
     * @param \NIS\MAMIASBundle\Entity\AlienCountry $country
     *
     * @return AlienUsers
     */
    public function setCountry(\NIS\MAMIASBundle\Entity\AlienCountry $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \NIS\MAMIASBundle\Entity\AlienCountry
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set msfd
     *
     * @param \NIS\MAMIASBundle\Entity\AlienMsfd $msfd
     *
     * @return AlienUsers
     */
    public function setMsfd(\NIS\MAMIASBundle\Entity\AlienMsfd $msfd = null)
    {
        $this->msfd = $msfd;

        return $this;
    }

    /**
     * Get msfd
     *
     * @return \NIS\MAMIASBundle\Entity\AlienMsfd
     */
    public function getMsfd()
    {
        return $this->msfd;
    }

    /**
     * Set regionalSea
     *
     * @param \NIS\MAMIASBundle\Entity\AlienRegionalSea $regionalSea
     *
     * @return AlienUsers
     */
    public function setRegionalSea(\NIS\MAMIASBundle\Entity\AlienRegionalSea $regionalSea = null)
    {
        $this->regionalSea = $regionalSea;

        return $this;
    }

    /**
     * Get regionalSea
     *
     * @return \NIS\MAMIASBundle\Entity\AlienRegionalSea
     */
    public function getRegionalSea()
    {
        return $this->regionalSea;
    }
    
    public function __toString() {
        return $this->getUsername();
    }
}
