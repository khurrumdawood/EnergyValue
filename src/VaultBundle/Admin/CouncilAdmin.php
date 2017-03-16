<?php

namespace VaultBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class CouncilAdmin extends AbstractAdmin {

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
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
                ->add('councilTypeId.name', 'sonata_type_model_list', array('label' => 'Type'))
                ->add('_action', null, array(
                    'actions' => array(
                        'show' => array(),
                        'edit' => array(),
                        //'delete' => array(),
                        'clone' => array('template' => 'VaultBundle:Sonata:list__action_delete.html.twig'),
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
                ->setParameter('code', 'COUNCIL TYPE');



        $formMapper
                ->add('profileId', 'sonata_type_model_list', array('label' => 'Profile', 'btn_add' => false))
                //->add('councilTypeId', 'sonata_type_model_list', array('label' => 'Profile'))
                ->add('councilTypeId', 'sonata_type_model', array('query' => $query, 'label' => 'Type', 'property' => 'code', 'btn_add' => false,))
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
