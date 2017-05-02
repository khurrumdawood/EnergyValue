<?php

namespace VaultBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class ContractAdmin extends AbstractAdmin
{

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('period')
            ->add('value')
            ->add('contractType.name',null,array('label' => 'Contract'));
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //   ->add('id')
            ->add('period', 'date', array('format' => 'Y-m-d',))
            ->add('contractType.name', 'sonata_type_model_list', array('label' => 'Contract'))
            ->add('value')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                    //'softDelete' => array('template' => 'VaultBundle:Sonata:list__action_delete.html.twig'),
                )
            ));
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $em = $this->modelManager->getEntityManager('VaultBundle\Entity\Lookup');

        $query = $em->createQueryBuilder('l')
            ->select('l')
            ->from('VaultBundle:Lookup', 'l')
            ->join('l.baseLookupId', 'b')
            ->where("b.parentId = 1")
            ->ORwhere("b.parentId = 2");

        $formMapper->add('select_commidity', 'choice', array(
            'choices' => array('' => 'Select', 'COMMODITY' => 'Commodity', 'NON COMMODITY' => 'Non Commodity'),
            'label' => false,
            'mapped' => false,
            "attr" => array("class" => "select_commidity")
        ));

        $formMapper->add('contractType', 'sonata_type_model', array('required' => true, 'query' => $query, 'label' => 'Type', 'property' => 'code', 'btn_add' => false, 'choices_as_values' => true,"attr" => array("class" => "select_contract")));
        //$formMapper->add('contractType', 'sonata_type_model_list', array('label' => 'Contract Type', 'btn_add' => false));
        $formMapper->add('userContract', 'sonata_type_model_list', array('label' => 'User', 'btn_add' => false));

        $formMapper->add('isDeleted')
            ->add('period', 'sonata_type_date_picker', array('format' => 'dd/MM/yyyy'))
            ->add('notes')
            ->add('value')
            ->add('isDefault');
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
            ->add('period')
            ->add('notes')
            ->add('value')
            ->add('isDefault')
            ->add('contractType', null, array('associated_property' => 'name', 'label' => 'Contract'));
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

    public function getTemplate($name)
    {
        if ($name == "edit") {
            return 'VaultBundle:Sonata:base_edit.html.twig';
        }
        return parent::getTemplate($name);
    }

    protected function configureRoutes(RouteCollection $collection)
    {
        parent::configureRoutes($collection);
        $collection->remove('delete');
        $collection->add('softDelete');
    }

}
