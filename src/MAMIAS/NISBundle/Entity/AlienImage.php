<?php

namespace MAMIAS\NISBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * AlienImage
 *
 * @ORM\Table(name="alien_image")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity
 */
class AlienImage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="alien_image_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="image_url", type="string", length=100, nullable=true)
     */
    private $imageUrl;

    /**
     * @var \AlienSpecies
     *
     * @ORM\ManyToOne(targetEntity="AlienSpecies", inversedBy="image")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="species_id", referencedColumnName="id")
     * })
     */
    private $species;



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
     * Set imageUrl
     *
     * @param string $imageUrl
     * @return AlienImage
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Get imageUrl
     *
     * @return string 
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Set species
     *
     * @param \MAMIAS\EspeceBundle\Entity\AlienSpecies $species
     * @return AlienImage
     */
    public function setSpecies(\MAMIAS\EspeceBundle\Entity\AlienSpecies $species = null)
    {
        $this->species = $species;

        return $this;
    }

    /**
     * Get species
     *
     * @return \MAMIAS\EspeceBundle\Entity\AlienSpecies 
     */
    public function getSpecies()
    {
        return $this->species;
    }

     public function getFullImagePath() {
        return null === $this->imageUrl ? null : $this->getUploadRootDir(). $this->imageUrl;
    }
 
    protected function getUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return $this->getTmpUploadRootDir().$this->getId()."/";
    }
 
    protected function getTmpUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__ . '/../../../../web/upload/';
    }
 
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function uploadImage() {
        // the file property can be empty if the field is not required
        if (null === $this->imageUrl) {
            return;
        }
        if(!$this->id){
            $this->imageUrl->move($this->getTmpUploadRootDir(), $this->imageUrl->getClientOriginalName());
        }else{
            $this->imageUrl->move($this->getUploadRootDir(), $this->imageUrl->getClientOriginalName());
        }
        $this->setImageUrl($this->imageUrl->getClientOriginalName());
    }
 
    /**
     * @ORM\PostPersist()
     */
    public function moveImage()
    {
        if (null === $this->imageUrl) {
            return;
        }
        if(!is_dir($this->getUploadRootDir())){
            mkdir($this->getUploadRootDir());
        }
        copy($this->getTmpUploadRootDir().$this->imageUrl, $this->getFullImagePath());
        unlink($this->getTmpUploadRootDir().$this->imageUrl);
    }
 
    /**
     * @ORM\PreRemove()
     */
    public function removeImage()
    {
        unlink($this->getFullImagePath());
        rmdir($this->getUploadRootDir());
    }
}
