<?php

namespace VaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Profile
 * 
 * @ORM\Table(name="profile")
 * @ORM\Entity(repositoryClass="VaultBundle\Repository\ProfileRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Profile extends BaseEntity {

    public function __construct() {

        $this->council = new ArrayCollection();
    }

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=50)
     */
    private $firstName;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="profile")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=50)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;

    /**
     * @var bool
     *
     * @ORM\Column(name="gender", type="boolean", options={"default" : 1})
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=100)
     */
    private $address;

    /**
     * @ORM\OneToMany(targetEntity="Council", mappedBy="profileId")
     */
    private $council;

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Profile
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Profile
     */
    public function setUserId($userId) {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId() {
        return $this->userId;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Profile
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Profile
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Profile
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set gender
     *
     * @param boolean $gender
     * @return Profile
     */
    public function setGender($gender) {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean 
     */
    public function getGender() {
        return $this->gender;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Profile
     */
    public function setAddress($address) {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * Add council
     *
     * @param \VaultBundle\Entity\Council $council
     * @return Profile
     */
    public function addCouncil(\VaultBundle\Entity\Council $council) {
        $this->council[] = $council;

        return $this;
    }

    /**
     * Remove council
     *
     * @param \VaultBundle\Entity\Council $council
     */
    public function removeCouncil(\VaultBundle\Entity\Council $council) {
        $this->council->removeElement($council);
    }

    /**
     * Get council
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCouncil() {
        return $this->council;
    }

}
