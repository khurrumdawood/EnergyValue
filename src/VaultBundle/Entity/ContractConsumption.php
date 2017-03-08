<?php

namespace VaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContractConsumption
 *
 * @ORM\Table(name="contract_consumption")
 * @ORM\Entity(repositoryClass="VaultBundle\Repository\ContractConsumptionRepository")
 */
class ContractConsumption extends BaseEntity {

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Contract", inversedBy="contractConsumption")
     * @ORM\JoinColumn(name="contract_id", referencedColumnName="id", nullable=false)
     * 
     */
    private $contractID;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Consumption", inversedBy="contractConsumption")
     * @ORM\JoinColumn(name="consumption_id", referencedColumnName="id", nullable=false)
     */
    private $consumptionID;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="decimal", precision=12, scale=3)
     */
    private $cost;


    /**
     * Set cost
     *
     * @param string $cost
     * @return ContractConsumption
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string 
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set contractID
     *
     * @param \VaultBundle\Entity\Contract $contractID
     * @return ContractConsumption
     */
    public function setContractID(\VaultBundle\Entity\Contract $contractID)
    {
        $this->contractID = $contractID;

        return $this;
    }

    /**
     * Get contractID
     *
     * @return \VaultBundle\Entity\Contract 
     */
    public function getContractID()
    {
        return $this->contractID;
    }

    /**
     * Set consumptionID
     *
     * @param \VaultBundle\Entity\Consumption $consumptionID
     * @return ContractConsumption
     */
    public function setConsumptionID(\VaultBundle\Entity\Consumption $consumptionID)
    {
        $this->consumptionID = $consumptionID;

        return $this;
    }

    /**
     * Get consumptionID
     *
     * @return \VaultBundle\Entity\Consumption 
     */
    public function getConsumptionID()
    {
        return $this->consumptionID;
    }
}
