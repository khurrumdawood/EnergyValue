<?php

namespace VaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\ManyToOne(targetEntity="Lookup", inversedBy="lookup")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $typeId;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set billingId
     *
     * @param integer $billingId
     * @return BillingDetail
     */
    public function setBillingId($billingId) {
        $this->billingId = $billingId;

        return $this;
    }

    /**
     * Get billingId
     *
     * @return integer 
     */
    public function getBillingId() {
        return $this->billingId;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return BillingDetail
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
     * Set value
     *
     * @param string $value
     * @return BillingDetail
     */
    public function setValue($value) {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * Set typeId
     *
     * @param integer $typeId
     * @return BillingDetail
     */
    public function setTypeId($typeId) {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * Get typeId
     *
     * @return integer 
     */
    public function getTypeId() {
        return $this->typeId;
    }

}
