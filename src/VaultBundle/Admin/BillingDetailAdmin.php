<?php

namespace VaultBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class BillingDetailAdmin extends AbstractAdmin {

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
            //    ->add('isDeleted')
            ->add('code')
            ->add('typeId.name',null,array('label' => 'Duos Type'))
            ->add('value')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
            //    ->add('id')
            ->add('code')
            ->add('typeId', null, array('associated_property' => 'name', 'label' => 'Duos Type'))
            //->add('billingId', null, array('associated_property' => 'units', 'label' => 'Billing'))
            ->add('value')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'softDelete' => array('template' => 'VaultBundle:Sonata:list__action_delete.html.twig'),
                    //'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
            ->add('billingId', 'sonata_type_model_list', array('label' => 'Billing', 'btn_add' => false))
            ->add('typeId', 'sonata_type_model_list', array('label' => 'Duos', 'btn_add' => false))
            //->add('isDeleted')
            ->add('code')
            ->add('value')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('id')
                ->add('isDeleted')
                ->add('modifiedBy')
                ->add('createdAt')
                ->add('updatedAt')
                ->add('code')
                ->add('value')
                ->add('billingId', null, array('associated_property' => 'units', 'label' => 'Billing'))
                ->add('typeId', null, array('associated_property' => 'name', 'label' => 'Lookup'))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function preUpdate($object) {

        $loginedUserId = $this->getConfigurationPool()->getContainer()->get('security.token_storage')->getToken()->getUser()->getId();
        $object->setModifiedBy($loginedUserId);
        $object->setUpdatedAt(new \DateTime());
    }

    /**
     * {@inheritdoc}
     */
    public function prePersist($object) {

        $loginedUserId = $this->getConfigurationPool()->getContainer()->get('security.token_storage')->getToken()->getUser()->getId();
        $object->setModifiedBy($loginedUserId);
        $object->setUpdatedAt(new \DateTime());
        $object->setCreatedAt(new \DateTime());
    }

    protected function configureRoutes(RouteCollection $collection) {
        parent::configureRoutes($collection);
        $collection->remove('delete');
        $collection->add('softDelete');
    }

}
