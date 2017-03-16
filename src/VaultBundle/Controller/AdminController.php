<?php

namespace VaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class AdminController extends Controller {

    /**
     * @Route("/softdelete", name="soft_delete")
     */
    public function softDeleteAction() {
        
    }

    /**
     * @Route("/contract", name="contract_dropdown")
     */
    public function contractAction(Request $request) {


        $type = $request->get("code");
        $em = $this->getDoctrine()->getManager();
        $typeData = $em->getRepository('VaultBundle:BaseLookup')->findOneBy(array('code' => $type));
        $totalLookup = $em->getRepository("VaultBundle:Lookup")->getLookupByType($typeData->getId());
        $html = "";
        //$html = "<option value=''> Select Type </option>";
        foreach ($totalLookup as $res) {
            $html .= "<option value=" . $res['id'] . ">" . $res['code'] . "</option>";
        }
        return new Response($html);
    }

}
