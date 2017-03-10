<?php

// src/VaultBundle/DataFixtures/ORM/Fixtures.php

namespace VaultBundle\DataFixtures\ORM;

use VaultBundle\Entity\Profile;
use VaultBundle\Entity\Meter;
use VaultBundle\Entity\Site;
use VaultBundle\Entity\Lookup;
use VaultBundle\Entity\BaseLookup;
use VaultBundle\Entity\Council;
use VaultBundle\Entity\Contract;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Application\Sonata\UserBundle\Entity\User;

class Fixtures implements FixtureInterface, ContainerAwareInterface {

    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    public function load(ObjectManager $manager) {


        //creating user 
        $user = new User();
        $user->setUsername('admin');
        $user->setEmail('admin@admin.com');
        $user->setEnabled(true);
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user, 'secret_password');
        $user->setPassword($password);
        $user->addRole('ROLE_SUPER_ADMIN');

        //creating user profile 
        $profile = new Profile();
        $profile->setFirstName("admininistrator");
        $profile->setLastName("admininistrator");
        $profile->setTitle("admininistrator");
        $profile->setEmail("admin1@gmail.com");
        $profile->setGender(1);
        $profile->setAddress("LHR");
        $profile->setUserId($user);
        $profile->setModifiedBy(0);


        $manager->persist($profile);
        $manager->persist($user);
        $manager->flush();
    }

}
