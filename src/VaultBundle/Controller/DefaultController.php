<?php

namespace VaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller {

    /**
     * @Route("/")
     */
    public function indexAction() {
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

    public function add($a, $b) {
        return $a + $b;
    }

}
