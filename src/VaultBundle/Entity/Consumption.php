<?php

namespace VaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use VaultBundle\Services;

/**
 * Consumption
 *
 * @ORM\Table(name="consumption")
 * @ORM\Entity(repositoryClass="VaultBundle\Repository\ConsumptionRepository")
 */
class Consumption extends BaseEntity
{

    public function __construct()
    {
        $this->contractConsumption = new ArrayCollection();

    }

    public function __toString()
    {
        return (string)$this->unit;
    }


    private $helper = null;

    public function setHelper($helper)
    {
        $this->helper = $helper;
    }

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="period", type="datetime", nullable=true)
     */
    private $period;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Meter", inversedBy="consumption")
     * @ORM\JoinColumn(name="meter_id", referencedColumnName="id")
     */
    private $meterId;

    /**
     * @var int
     *
     * @ORM\Column(name="bracket", type="integer", nullable=true)
     */
    private $bracket;

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="decimal", precision=10, scale=3)
     */
    private $unit;

    /**
     * @ORM\OneToMany(targetEntity="ContractConsumption", mappedBy="consumptionID")
     */
    private $contractConsumption;


    /**
     * Set period
     *
     * @param \DateTime $period
     * @return Consumption
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return \DateTime
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set bracket
     *
     * @param integer $bracket
     * @return Consumption
     */
    public function setBracket($bracket)
    {
        $this->bracket = $bracket;

        return $this;
    }

    /**
     * Get bracket
     *
     * @return integer
     */
    public function getBracket()
    {

        return $this->helper->convertBracket($this->bracket);
       // return $this->bracket;
    }

    /**
     * Set unit
     *
     * @param string $unit
     * @return Consumption
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set meterId
     *
     * @param \VaultBundle\Entity\Meter $meterId
     * @return Consumption
     */
    public function setMeterId(\VaultBundle\Entity\Meter $meterId = null)
    {
        $this->meterId = $meterId;

        return $this;
    }

    /**
     * Get meterId
     *
     * @return \VaultBundle\Entity\Meter
     */
    public function getMeterId()
    {
        return $this->meterId;
    }

    /**
     * Add contractConsumption
     *
     * @param \VaultBundle\Entity\ContractConsumption $contractConsumption
     * @return Consumption
     */
    public function addContractConsumption(\VaultBundle\Entity\ContractConsumption $contractConsumption)
    {
        $this->contractConsumption[] = $contractConsumption;

        return $this;
    }

    /**
     * Remove contractConsumption
     *
     * @param \VaultBundle\Entity\ContractConsumption $contractConsumption
     */
    public function removeContractConsumption(\VaultBundle\Entity\ContractConsumption $contractConsumption)
    {
        $this->contractConsumption->removeElement($contractConsumption);
    }

    /**
     * Get contractConsumption
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContractConsumption()
    {
        return $this->contractConsumption;
    }
}
