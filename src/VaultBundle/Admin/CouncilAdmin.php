<?php

namespace VaultBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CouncilAdmin extends AbstractAdmin {

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('isDeleted')
                ->add('code')
                ->add('name')
                ->add('description')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('id')
                ->add('profileId.firstName', 'sonata_type_model_list', array('label' => 'Profile'))
                ->add('councilTypeId.name', 'sonata_type_model_list', array('label' => 'Lookup'))
                ->add('code')
                ->add('name')
                ->add('description')
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
                ->add('profileId', 'sonata_type_model_list', array('label' => 'Profile'))
                ->add('councilTypeId', 'sonata_type_model_list', array('label' => 'Lookup'))
                ->add('isDeleted')
                ->add('code')
                ->add('name')
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
                ->add('name')
                ->add('description')
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
