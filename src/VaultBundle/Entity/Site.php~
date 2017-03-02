<?php

namespace VaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Site
 *
 * @ORM\Table(name="site")
 * @ORM\Entity(repositoryClass="VaultBundle\Repository\SiteRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Site extends BaseEntity {

    public function __construct() {
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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=50, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Council", inversedBy="site")
     * @ORM\JoinColumn(name="council_id", referencedColumnName="id")
     */
    private $councilId;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Lookup", inversedBy="site")
     * @ORM\JOinColumn(name="site_type_id", referencedColumnName="id")
     */
    private $siteTypeId;

    /**
     * @ORM\OneToMany(targetEntity="Meter", mappedBy="siteId")
     */
    private $meter;

    /**
     * Set code
     *
     * @param string $code
     * @return Site
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
     * @return Site
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
     * @return Site
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
     * Set councilId
     *
     * @param \stdClass $councilId
     * @return Site
     */
    public function setCouncilId($councilId) {
        $this->councilId = $councilId;

        return $this;
    }

    /**
     * Get councilId
     *
     * @return \stdClass 
     */
    public function getCouncilId() {
        return $this->councilId;
    }

    /**
     * Set siteTypeId
     *
     * @param integer $siteTypeId
     * @return Site
     */
    public function setSiteTypeId($siteTypeId) {
        $this->siteTypeId = $siteTypeId;

        return $this;
    }

    /**
     * Get siteTypeId
     *
     * @return integer 
     */
    public function getSiteTypeId() {
        return $this->siteTypeId;
    }

    /**
     * Add meter
     *
     * @param \VaultBundle\Entity\Meter $meter
     * @return Site
     */
    public function addMeter(\VaultBundle\Entity\Meter $meter) {
        $this->meter[] = $meter;

        return $this;
    }

    /**
     * Remove meter
     *
     * @param \VaultBundle\Entity\Meter $meter
     */
    public function removeMeter(\VaultBundle\Entity\Meter $meter) {
        $this->meter->removeElement($meter);
    }

    /**
     * Get meter
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMeter() {
        return $this->meter;
    }

}
