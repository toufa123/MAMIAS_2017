<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlienMsfd
 *
 * @ORM\Table(name="alien_msfd")
 * @ORM\Entity
 */
class AlienMsfd
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_msfd_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="msfd", type="string", length=128, nullable=true)
     */
    private $msfd;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=16, nullable=true)
     */
    private $code;



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
     * Set msfd
     *
     * @param string $msfd
     *
     * @return AlienMsfd
     */
    public function setMsfd($msfd)
    {
        $this->msfd = $msfd;

        return $this;
    }

    /**
     * Get msfd
     *
     * @return string
     */
    public function getMsfd()
    {
        return $this->msfd;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return AlienMsfd
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
    
    public function __toString() {
        return $this->getMsfd();
    }
}
