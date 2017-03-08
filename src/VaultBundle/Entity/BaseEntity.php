<?php

namespace VaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass 
 * @ORM\HasLifecycleCallbacks
 */
abstract class BaseEntity {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_deleted", type="boolean", nullable=true)
     */
    private $isDeleted;

    /**
     * @var int
     *
     * @ORM\Column(name="modifiedby", type="bigint")
     */
    private $modifiedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdon", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedon", type="datetime")
     */
    private $updatedAt;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     * @return Billing
     */
    public function setIsDeleted($isDeleted) {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return boolean 
     */
    public function getIsDeleted() {
        return $this->isDeleted;
    }

    /**
     * Set modifiedBy
     *
     * @param integer $modifiedBy
     * @return Billing
     */
    public function setModifiedBy($modifiedBy) {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * Get modifiedBy
     *
     * @return integer 
     */
    public function getModifiedBy() {
        return $this->modifiedBy;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Billing
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Billing
     */
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * @ORM\PrePersist 
     */
    public function onCreate() {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    /**
     * @ORM\PreUpdate 
     */
    public function onUpdate() {
        $this->updatedAt = new \DateTime();
    }

}
