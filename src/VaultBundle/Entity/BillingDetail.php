<?php

namespace VaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * BillingDetail
 *
 * @ORM\Table(name="billing_detail")
 * @ORM\Entity(repositoryClass="VaultBundle\Repository\BillingDetailRepository")
 */
class BillingDetail extends BaseEntity {

    /**
     * @ORM\ManyToOne(targetEntity="Billing", inversedBy="billingDetail")
     * @ORM\JoinColumn(name="billing_id", referencedColumnName="id")
     */
    private $billingId;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=50)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=60)
     */
    private $value;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Lookup", inversedBy="billingdetail")
     * @ORM\JoinColumn(name="type", referencedColumnName="id")
     */
    private $typeId;


    /**
     * Set code
     *
     * @param string $code
     * @return BillingDetail
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

    /**
     * Set value
     *
     * @param string $value
     * @return BillingDetail
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
     * Set billingId
     *
     * @param \VaultBundle\Entity\Billing $billingId
     * @return BillingDetail
     */
    public function setBillingId(\VaultBundle\Entity\Billing $billingId = null)
    {
        $this->billingId = $billingId;

        return $this;
    }

    /**
     * Get billingId
     *
     * @return \VaultBundle\Entity\Billing 
     */
    public function getBillingId()
    {
        return $this->billingId;
    }

    /**
     * Set typeId
     *
     * @param \VaultBundle\Entity\Lookup $typeId
     * @return BillingDetail
     */
    public function setTypeId(\VaultBundle\Entity\Lookup $typeId = null)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * Get typeId
     *
     * @return \VaultBundle\Entity\Lookup 
     */
    public function getTypeId()
    {
        return $this->typeId;
    }
}
