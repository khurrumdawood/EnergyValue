<?php

namespace VaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Meter
 *
 * @ORM\Table(name="meter")
 * @ORM\Entity(repositoryClass="VaultBundle\Repository\MeterRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Meter extends BaseEntity {

    public function __construct() {
        $this->billing = new ArrayCollection();
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
     * @ORM\Column(name="meter_number", type="string", length=50)
     */
    private $meterNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="Site", inversedBy="meter")
     * @ORM\JoinColumn(name="site_id", referencedColumnName="id")
     */
    private $siteId;

    /**
     * @ORM\ManyToOne(targetEntity="Lookup", inversedBy="meter")
     * @ORM\JoinColumn(name="meter_type_id", referencedColumnName="id")
     */
    private $meterTypeId;

    /**
     * @ORM\ManyToOne(targetEntity="Lookup", inversedBy="meterunit")
     * @ORM\JoinColumn(name="unit_type_id", referencedColumnName="id")
     */
    private $unitTypeId;


    /*
     * @ORM\OneToMany(targetEntity="Billing", mappedBy="meterId")
     */
    private $billing;

    /**
     * Set code
     *
     * @param string $code
     * @return Meter
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
     * Set meterNumber
     *
     * @param string $meterNumber
     * @return Meter
     */
    public function setMeterNumber($meterNumber) {
        $this->meterNumber = $meterNumber;

        return $this;
    }

    /**
     * Get meterNumber
     *
     * @return string 
     */
    public function getMeterNumber() {
        return $this->meterNumber;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Meter
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
     * Set siteId
     *
     * @param integer $siteId
     * @return Meter
     */
    public function setSiteId($siteId) {
        $this->siteId = $siteId;

        return $this;
    }

    /**
     * Get siteId
     *
     * @return integer 
     */
    public function getSiteId() {
        return $this->siteId;
    }

    /**
     * Set meterTypeId
     *
     * @param integer $meterTypeId
     * @return Meter
     */
    public function setMeterTypeId($meterTypeId) {
        $this->meterTypeId = $meterTypeId;

        return $this;
    }

    /**
     * Get meterTypeId
     *
     * @return integer 
     */
    public function getMeterTypeId() {
        return $this->meterTypeId;
    }

    /**
     * Set unitTypeId
     *
     * @param integer $unitTypeId
     * @return Meter
     */
    public function setUnitTypeId($unitTypeId) {
        $this->unitTypeId = $unitTypeId;

        return $this;
    }

    /**
     * Get unitTypeId
     *
     * @return integer 
     */
    public function getUnitTypeId() {
        return $this->unitTypeId;
    }

}
