<?php

namespace VaultBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class MeterAdmin extends AbstractAdmin {

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('isDeleted')
                ->add('code')
                ->add('meterNumber')
                ->add('description')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('id')
                ->add('code')
                ->add('meterNumber')
                ->add('siteId.name', null, array('label' => 'Site'))
                ->add('meterTypeId.name', null, array('label' => 'Type'))
                //->add('unitTypeId.name', null, array('label' => 'Unit type'))
                ->add('_action', null, array(
                    'actions' => array(
                        'show' => array(),
                        'edit' => array(),
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
                ->add('meterTypeId', 'sonata_type_model_list', array('label' => 'Meter type lookup '))
                ->add('unitTypeId', 'sonata_type_model_list', array('label' => 'Unit type lookup'))
                ->add('siteId', 'sonata_type_model_list', array('label' => 'Site'))
                ->add('isDeleted')
                ->add('code')
                ->add('meterNumber')
                ->add('description')
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
                ->add('meterNumber')
                ->add('description')
                ->add('siteId', null, array('associated_property' => 'name', 'label' => 'Site'))
                ->add('unitTypeId', null, array('associated_property' => 'name', 'label' => 'Unit Type'))
                ->add('meterTypeId', null, array('associated_property' => 'name', 'label' => 'Type'))
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

}
