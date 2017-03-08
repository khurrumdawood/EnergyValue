<?php

// src/VaultBundle/Admin/UserAdmin.php

namespace VaultBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProfileAdmin extends AbstractAdmin {

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('userId', 'sonata_type_model_list', array('label' => 'Parent'))

                // ->setHelps(array('userId' => $this->trans('Select the user for this profile.')))
                ->add('firstName')
                ->add('lastName')
                ->add('title')
                ->add('email')
                ->add('gender', choiceType::class, array('choices' => array('0' => 'Female', '1' => 'Male')))
                ->add('isDeleted')
                ->add('address');
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('email')
                ->add('firstName')
                ->add('lastName')
                ->add('title');
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper->addIdentifier('userId.username', null, array('label' => "User Name"))
                ->add('firstName')
                ->add('email')
                ->add('lastName')
                ->add('title')
                ->add('_action', null, array(
                    'actions' => array(
                        'show' => array(),
                        'edit' => array(),
                    // 'delete' => array(),
                    )
                ))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    public function configureShowFields(ShowMapper $showMapper) {

        $showMapper
                ->add('userId.username', 'sonata_type_model_list', array('label' => 'User Name'))
                ->add('firstName')
                ->add('lastName')
                ->add('title')
                ->add('email')
                ->add('gender', 'choice', array('choices' => array('Null' => 'Not Menctioned', '0' => 'Female', '1' => 'Male')))
                ->add('isDeleted', 'choice', array('choices' => array('Null' => 'No', '0' => 'No', '1' => 'Yes')))
                ->add('address');
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
