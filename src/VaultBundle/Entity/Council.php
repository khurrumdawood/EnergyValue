<?php

namespace VaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Council
 *
 * @ORM\Table(name="council")
 * @ORM\Entity(repositoryClass="VaultBundle\Repository\CouncilRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Council extends BaseEntity {

    public function __construct() {

        $this->site = new ArrayCollection();
    }

    public function __toString() {
        return $this->getCode() ?: 'n/a';
    }

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=50)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=true)
     */
    private $description;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Profile", inversedBy="council")
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     */
    private $profileId;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Lookup", inversedBy="council")
     * @ORM\JoinColumn(name="council_type", referencedColumnName="id")
     */
    private $councilTypeId;

    /**
     * @ORM\OneToMany(targetEntity="Site", mappedBy="councilId")
     */
    private $site;

    /**
     * Set code
     *
     * @param string $code
     * @return Council
     */
    public function setCode($code) {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Council
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Council
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set profileId
     *
     * @param \VaultBundle\Entity\Profile $profileId
     * @return Council
     */
    public function setProfileId(\VaultBundle\Entity\Profile $profileId = null) {
        $this->profileId = $profileId;

        return $this;
    }

    /**
     * Get profileId
     *
     * @return \VaultBundle\Entity\Profile 
     */
    public function getProfileId() {
        return $this->profileId;
    }

    /**
     * Set councilTypeId
     *
     * @param \VaultBundle\Entity\Lookup $councilTypeId
     * @return Council
     */
    public function setCouncilTypeId(\VaultBundle\Entity\Lookup $councilTypeId = null) {
        $this->councilTypeId = $councilTypeId;

        return $this;
    }

    /**
     * Get councilTypeId
     *
     * @return \VaultBundle\Entity\Lookup 
     */
    public function getCouncilTypeId() {
        return $this->councilTypeId;
    }

    /**
     * Add site
     *
     * @param \VaultBundle\Entity\Site $site
     * @return Council
     */
    public function addSite(\VaultBundle\Entity\Site $site) {
        $this->site[] = $site;

        return $this;
    }

    /**
     * Remove site
     *
     * @param \VaultBundle\Entity\Site $site
     */
    public function removeSite(\VaultBundle\Entity\Site $site) {
        $this->site->removeElement($site);
    }

    /**
     * Get site
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSite() {
        return $this->site;
    }

}
