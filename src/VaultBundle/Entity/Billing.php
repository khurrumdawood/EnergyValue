<?php

namespace VaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Billing
 *
 * @ORM\Table(name="billing")
 * @ORM\Entity(repositoryClass="VaultBundle\Repository\BillingRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Billing extends BaseEntity {

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Meter", inversedBy="billing")
     * @ORM\JoinColumn(name="merter_id", referencedColumnName="id")
     */
    private $meterId;

    /**
     * @var string
     *
     * @ORM\Column(name="units", type="decimal", precision=10, scale=3)
     */
    private $units;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=2)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="duos", type="decimal", precision=10, scale=3)
     */
    private $duos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="period", type="datetime")
     */
    private $period;

    /**
     * @ORM\OneToMany(targetEntity="BillingDetail", mappedBy="billingId") 
     */
    private $billingDetail;

    /**
     * Set meterId
     *
     * @param integer $meterId
     * @return Billing
     */
    public function setMeterId($meterId) {
        $this->meterId = $meterId;

        return $this;
    }

    /**
     * Get meterId
     *
     * @return integer 
     */
    public function getMeterId() {
        return $this->meterId;
    }

    /**
     * Set units
     *
     * @param string $units
     * @return Billing
     */
    public function setUnits($units) {
        $this->units = $units;

        return $this;
    }

    /**
     * Get units
     *
     * @return string 
     */
    public function getUnits() {
        return $this->units;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return Billing
     */
    public function setAmount($amount) {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * Set duos
     *
     * @param string $duos
     * @return Billing
     */
    public function setDuos($duos) {
        $this->duos = $duos;

        return $this;
    }

    /**
     * Get duos
     *
     * @return string 
     */
    public function getDuos() {
        return $this->duos;
    }

    /**
     * Set period
     *
     * @param \DateTime $period
     * @return Billing
     */
    public function setPeriod($period) {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return \DateTime 
     */
    public function getPeriod() {
        return $this->period;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->billingDetail = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add billingDetail
     *
     * @param \VaultBundle\Entity\BillingDetail $billingDetail
     * @return Billing
     */
    public function addBillingDetail(\VaultBundle\Entity\BillingDetail $billingDetail)
    {
        $this->billingDetail[] = $billingDetail;

        return $this;
    }

    /**
     * Remove billingDetail
     *
     * @param \VaultBundle\Entity\BillingDetail $billingDetail
     */
    public function removeBillingDetail(\VaultBundle\Entity\BillingDetail $billingDetail)
    {
        $this->billingDetail->removeElement($billingDetail);
    }

    /**
     * Get billingDetail
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBillingDetail()
    {
        return $this->billingDetail;
    }
}
