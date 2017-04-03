<?php

namespace VaultBundle\Controller;

use Application\Sonata\UserBundle\Entity\Group;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use VaultBundle\Repository\LookupRepository;

class DefaultController extends Controller {

    /**
     * @Route("/")
     */
    public function indexAction() {

         echo "test";
       // dump($this->getUser()->getParentUser());
//
//
//        //print_r ($this->getUser()->getRoles());
//        //$mailer = $this->get('app.helper');

        //echo $mailer->slugify('fasdfasd');
        $em= $this->getDoctrine()->getManager();
        $group = new Group("myfirstgroup");
        $group->setRoles(array());
        $group->addRole('ROLE_VAULT_ADMIN_LOOKUP_STAFF');
        $em->persist($group);
        $em->flush();
            echo "Group created ";
        exit;


        return $this->render('VaultBundle:Default:index.html.twig');
    }

    /**
     * @Route("/baselookup")
     */
    public function createmeterAction() {
        /// for est ing only 
        $em = $this->getDoctrine()->getManager();
        //$lookup = $em->getRepository("VaultBundle:BaseLookup")->find(2);
        $user = $em->getRepository("VaultBundle:Profile")->find(1);
        //print_r($user);

        echo $user->getFirstName();
        echo "end ";
        exit;
    }



}
