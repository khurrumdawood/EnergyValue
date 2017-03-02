<?php

namespace VaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Lookup
 *
 * @ORM\Table(name="lookup")
 * @ORM\Entity(repositoryClass="VaultBundle\Repository\LookupRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Lookup extends BaseEntity {

    public function __construct() {
        $this->council = new ArrayCollection();
        $this->site = new ArrayCollection();
        $this->meter = new ArrayCollection();
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
     *
     * @ORM\ManyToOne(targetEntity="BaseLookup", inversedBy="lookup")
     * @ORM\JoinColumn(name="base_lookup_id", referencedColumnName="id")
     */
    private $baseLookupId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="Council", mappedBy="councilTypeId")
     */
    private $council;

    /**
     * @ORM\OneToMany(targetEntity="site", mappedBy="siteTypeId")
     */
    private $site;

    /**
     * @ORM\OneToMany(targetEntity="Meter", mappedBy="meterTypeId")
     */
    private $meter;

    /**
     * @ORM\OneToMany(targetEntity="Meter", mappedBy="unitTypeId")
     */
    private $meterunit;

    /**
     * @ORM\OneToMany(targetEntity="BillingDetail", mappedBy="typeId")
     */

    /**
     * Set value
     *
     * @param string $code
     * @return Lookup
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
     * @return Lookup
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
     * Set baseLookupId
     *
     * @param integer $baseLookupId
     * @return Lookup
     */
    public function setBaseLookupId($baseLookupId) {
        $this->baseLookupId = $baseLookupId;

        return $this;
    }

    /**
     * Get baseLookupId
     *
     * @return integer 
     */
    public function getBaseLookupId() {
        return $this->baseLookupId;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Lookup
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
     * Add council
     *
     * @param \VaultBundle\Entity\Council $council
     * @return Lookup
     */
    public function addCouncil(\VaultBundle\Entity\Council $council)
    {
        $this->council[] = $council;

        return $this;
    }

    /**
     * Remove council
     *
     * @param \VaultBundle\Entity\Council $council
     */
    public function removeCouncil(\VaultBundle\Entity\Council $council)
    {
        $this->council->removeElement($council);
    }

    /**
     * Get council
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCouncil()
    {
        return $this->council;
    }

    /**
     * Add site
     *
     * @param \VaultBundle\Entity\site $site
     * @return Lookup
     */
    public function addSite(\VaultBundle\Entity\site $site)
    {
        $this->site[] = $site;

        return $this;
    }

    /**
     * Remove site
     *
     * @param \VaultBundle\Entity\site $site
     */
    public function removeSite(\VaultBundle\Entity\site $site)
    {
        $this->site->removeElement($site);
    }

    /**
     * Get site
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Add meter
     *
     * @param \VaultBundle\Entity\Meter $meter
     * @return Lookup
     */
    public function addMeter(\VaultBundle\Entity\Meter $meter)
    {
        $this->meter[] = $meter;

        return $this;
    }

    /**
     * Remove meter
     *
     * @param \VaultBundle\Entity\Meter $meter
     */
    public function removeMeter(\VaultBundle\Entity\Meter $meter)
    {
        $this->meter->removeElement($meter);
    }

    /**
     * Get meter
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMeter()
    {
        return $this->meter;
    }

    /**
     * Add meterunit
     *
     * @param \VaultBundle\Entity\Meter $meterunit
     * @return Lookup
     */
    public function addMeterunit(\VaultBundle\Entity\Meter $meterunit)
    {
        $this->meterunit[] = $meterunit;

        return $this;
    }

    /**
     * Remove meterunit
     *
     * @param \VaultBundle\Entity\Meter $meterunit
     */
    public function removeMeterunit(\VaultBundle\Entity\Meter $meterunit)
    {
        $this->meterunit->removeElement($meterunit);
    }

    /**
     * Get meterunit
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMeterunit()
    {
        return $this->meterunit;
    }
}
