<?php

namespace VaultBundle\Controller;

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

//        dump($this->getUser()->getRoles());
//
//
//        //print_r ($this->getUser()->getRoles());
//exit;
        $mailer = $this->get('app.helper');

        //echo $mailer->slugify('fasdfasd');


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
