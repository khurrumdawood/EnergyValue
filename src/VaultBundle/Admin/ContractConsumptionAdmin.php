<?php

namespace VaultBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class ContractConsumptionAdmin extends AbstractAdmin
{

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
//                ->add('id')
//                ->add('isDeleted')
//                ->add('modifiedBy')
//                ->add('createdAt')
//                ->add('updatedAt')
            ->add('cost');
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
//                ->add('id')
//                ->add('consumptionID.period', null, array( 'label' => 'Period'))
//                ->add('contractID', null, array('associated_property' => 'value', 'label' => 'Contract'))
//                ->add('cost')
            ->add('consumptionID.period', null, array('label' => 'Period'))
            ->add('consumptionID.meterId.meterNumber', null, array('label' => 'MPAN'))
            ->add('consumptionID.bracket', null, array('label' => 'Bracket'))
            ->add('contractID.contractType.code', null, array('label' => 'Contract'))
            ->add('contractID.value', null, array('label' => 'Contract Value'))
            ->add('consumptionID.unit', null, array('label' => 'Unit'))
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    //'edit' => array(),
                    //'softDelete' => array('template' => 'VaultBundle:Sonata:list__action_delete.html.twig'),
                    //'delete' => array(),
                )
            ));
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('consumptionID', 'sonata_type_model_list', array('label' => 'Consumption', 'btn_add' => false))
            ->add('contractID', 'sonata_type_model_list', array('label' => 'Contract', 'btn_add' => false))
            //->add('isDeleted')
            ->add('cost');
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('isDeleted')
            ->add('modifiedBy')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('cost')
            ->add('consumptionID', null, array('associated_property' => 'bracket', 'label' => 'Period'));
    }

    /**
     * {@inheritdoc}
     */
    public function preUpdate($object)
    {

        $loginedUserId = $this->getConfigurationPool()->getContainer()->get('security.token_storage')->getToken()->getUser()->getId();
        $object->setModifiedBy($loginedUserId);
        $object->setUpdatedAt(new \DateTime());
    }

    /**
     * {@inheritdoc}
     */
    public function prePersist($object)
    {

        $loginedUserId = $this->getConfigurationPool()->getContainer()->get('security.token_storage')->getToken()->getUser()->getId();
        $object->setModifiedBy($loginedUserId);
        $object->setUpdatedAt(new \DateTime());
        $object->setCreatedAt(new \DateTime());
    }

    protected function configureRoutes(RouteCollection $collection)
    {
        parent::configureRoutes($collection);
        $collection->remove('delete');
        $collection->add('softDelete');
    }

}
