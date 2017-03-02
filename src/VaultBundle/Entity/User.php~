<?php

// src/VaultBundle/Entity/User.php

namespace VaultBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct() {
        parent::__construct();

        $this->profile = new ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="Profile", mappedBy="userId")
     */
    private $profile;

    /**
     * Add profile
     *
     * @param \VaultBundle\Entity\Profile $profile
     * @return User
     */
    public function addProfile(\VaultBundle\Entity\Profile $profile) {
        $this->profile[] = $profile;

        return $this;
    }

    /**
     * Remove profile
     *
     * @param \VaultBundle\Entity\Profile $profile
     */
    public function removeProfile(\VaultBundle\Entity\Profile $profile) {
        $this->profile->removeElement($profile);
    }

    /**
     * Get profile
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfile() {
        return $this->profile;
    }

}
