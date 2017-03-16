<?php

// src/VaultBundle/Controller/CRUDController.php

namespace VaultBundle\Controller;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CRUDController extends Controller {

    public function softDeleteAction() {

        $object = $this->admin->getSubject();
        if (!$object) {
            throw new NotFoundHttpException(sprintf('unable to find the object'));
        }
        $object->setIsDeleted(1);
        $object->setModifiedBy($this->getUser());
        $this->admin->update($object);
        $this->addFlash('sonata_flash_success', 'Record deleted successfully.');
        return new RedirectResponse($this->admin->generateUrl('list'));
    }

}
