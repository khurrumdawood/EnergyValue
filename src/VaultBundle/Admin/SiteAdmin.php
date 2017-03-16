<?php

namespace VaultBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class SiteAdmin extends AbstractAdmin {

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
                ->add('code')
                ->add('name')
                ->add('siteTypeId.name', 'sonata_type_model_list', array('label' => 'Type'))
                //->add('councilId.name', 'sonata_type_model_list', array('label' => 'Council'))
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
        $em = $this->modelManager->getEntityManager('VaultBundle\Entity\Lookup');
        $query = $em->createQueryBuilder('l')
                ->select('l')
                ->from('VaultBundle:Lookup', 'l')
                ->join('l.baseLookupId', 'b')
                ->where("b.code = :code")
                ->setParameter('code', 'SITE TYPE');

        $formMapper
                ->add('councilId', 'sonata_type_model_list', array('label' => 'Counsil', 'btn_add' => false))
                //->add('siteTypeId', 'sonata_type_model_list', array('label' => 'Lookup'))
                ->add('siteTypeId', 'sonata_type_model', array('query' => $query, 'label' => 'Type', 'property' => 'name', 'btn_add' => false))
                //->add('isDeleted')
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
                ->add('siteTypeId', null, array('associated_property' => 'name', 'label' => 'Counsil'))
                ->add('councilId', null, array('associated_property' => 'name', 'label' => 'Lookup'))
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
