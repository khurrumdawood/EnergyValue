<?php
namespace VaultBundle\EventListener;


use Doctrine\ORM\Event\LifecycleEventArgs;
use VaultBundle\Services;

class GeneralListener
{

    private $helperService;

    public function __construct(Services\Helper $helper)
    {
        $this->helperService = $helper;
    }

    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if (method_exists($entity, 'setHelper')) {
            $entity->setHelper($this->helperService);
        }
    }
}