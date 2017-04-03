<?php

namespace VaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Contract
 *
 * @ORM\Table(name="contract")
 * @ORM\Entity(repositoryClass="VaultBundle\Repository\ContractRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Contract extends BaseEntity {

    public function __construct() {
        $this->contractConsumption = new ArrayCollection();
    }
    public function __toString() {
        return (string) "Contract Edit";
    }

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User", inversedBy="contract")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $userContract;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="period", type="datetime", nullable=true)
     */
    private $period;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Lookup", inversedBy="contract")
     * @ORM\JoinColumn(name="contract_type", referencedColumnName="id")
     */
    private $contractType;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=200, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $value;

    /**
     * @var bool
     *
     * @ORM\Column(name="isDefault", type="boolean", options={"default"=0})
     */
    private $isDefault = false;

    /**
     *
     * @ORM\OneToMany(targetEntity="ContractConsumption", mappedBy="contractID")
     */
    private $contractConsumption;


    /**
     * Set period
     *
     * @param \DateTime $period
     * @return Contract
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
     * Set notes
     *
     * @param string $notes
     * @return Contract
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return Contract
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set isDefault
     *
     * @param boolean $isDefault
     * @return Contract
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * Get isDefault
     *
     * @return boolean 
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Set profileId
     *
     * @param \VaultBundle\Entity\Profile $profileId
     * @return Contract
     */
    public function setProfileId(\VaultBundle\Entity\Profile $profileId = null)
    {
        $this->profileId = $profileId;

        return $this;
    }

    /**
     * Get profileId
     *
     * @return \VaultBundle\Entity\Profile 
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * Set contractType
     *
     * @param \VaultBundle\Entity\Lookup $contractType
     * @return Contract
     */
    public function setContractType(\VaultBundle\Entity\Lookup $contractType = null)
    {
        $this->contractType = $contractType;

        return $this;
    }

    /**
     * Get contractType
     *
     * @return \VaultBundle\Entity\Lookup 
     */
    public function getContractType()
    {
        return $this->contractType;
    }

    /**
     * Add contractConsumption
     *
     * @param \VaultBundle\Entity\ContractConsumption $contractConsumption
     * @return Contract
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

    /**
     * Set userContract
     *
     * @param \Application\Sonata\UserBundle\Entity\User $userContract
     * @return Contract
     */
    public function setUserContract(\Application\Sonata\UserBundle\Entity\User $userContract = null)
    {
        $this->userContract = $userContract;

        return $this;
    }

    /**
     * Get userContract
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getUserContract()
    {
        return $this->userContract;
    }
}
