<?php

namespace VaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * BaseLookup
 *
 * @ORM\Table(name="base_lookup")
 * @ORM\Entity(repositoryClass="VaultBundle\Repository\BaseLookupRepository")
 * @ORM\HasLifecycleCallbacks
 */
class BaseLookup extends BaseEntity {

    public function __construct() {
        $this->baselookup = new ArrayCollection(); // self relation of current entity
        $this->lookup = new ArrayCollection();
    }

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=60)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=60)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="BaseLookup", mappedBy="parentId")
     */
    private $baselookup;

    /**
     * @ORM\ManyToOne(targetEntity="BaseLookup", inversedBy="baselookup")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parentId;

    /**
     * @ORM\OneToMany(targetEntity="Lookup", mappedBy="baseLookupId")
     */
    private $lookup;

    /**
     * Set code
     *
     * @param string $code
     * @return BaseLookup
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
     * @return BaseLookup
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
     * @return BaseLookup
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
     * Add baselookup
     *
     * @param \VaultBundle\Entity\BaseLookup $baselookup
     * @return BaseLookup
     */
    public function addBaselookup(\VaultBundle\Entity\BaseLookup $baselookup) {
        $this->baselookup[] = $baselookup;

        return $this;
    }

    /**
     * Remove baselookup
     *
     * @param \VaultBundle\Entity\BaseLookup $baselookup
     */
    public function removeBaselookup(\VaultBundle\Entity\BaseLookup $baselookup) {
        $this->baselookup->removeElement($baselookup);
    }

    /**
     * Get baselookup
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBaselookup() {
        return $this->baselookup;
    }

    /**
     * Set parentId
     *
     * @param \VaultBundle\Entity\BaseLookup $parentId
     * @return BaseLookup
     */
    public function setParentId(\VaultBundle\Entity\BaseLookup $parentId = null) {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return \VaultBundle\Entity\BaseLookup 
     */
    public function getParentId() {
        return $this->parentId;
    }

    /**
     * Add lookup
     *
     * @param \VaultBundle\Entity\Lookup $lookup
     * @return BaseLookup
     */
    public function addLookup(\VaultBundle\Entity\Lookup $lookup) {
        $this->lookup[] = $lookup;

        return $this;
    }

    /**
     * Remove lookup
     *
     * @param \VaultBundle\Entity\Lookup $lookup
     */
    public function removeLookup(\VaultBundle\Entity\Lookup $lookup) {
        $this->lookup->removeElement($lookup);
    }

    /**
     * Get lookup
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLookup() {
        return $this->lookup;
    }

}
