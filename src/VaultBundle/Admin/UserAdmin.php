<?php

// src/VaultBundle/Admin/UserAdmin.php

namespace VaultBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends AbstractAdmin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->with('General')
                ->add('username')
                ->add('email')
                ->add('plainPassword', 'text')
                ->end()
                ->with('Groups')
                ->add('groups', 'sonata_type_model', array('required' => false))
                ->end()
                ->with('Management')
                ->add('roles', 'sonata_security_roles', array('multiple' => true))
                ->add('locked', null, array('required' => false))
                ->add('expired', null, array('required' => false))
                ->add('enabled', null, array('required' => false))
                ->add('credentialsExpired', null, array('required' => false))
                ->end()
        ;

        if (!$this->getSubject()->hasRole('ROLE_SUPER_ADMIN')) {
            $formMapper
                    ->with('Management')
                    ->add('roles', 'sonata_security_roles', array(
                        'expanded' => true,
                        'multiple' => true,
                        'required' => false
                    ))
                    ->add('locked', null, array('required' => false))
                    ->add('expired', null, array('required' => false))
                    ->add('enabled', null, array('required' => false))
                    ->add('credentialsExpired', null, array('required' => false))
                    ->end()
            ;
        }
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper->add('email');
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper->addIdentifier('email')
                ->add('username', 'text')
                ->add('role', 'choice', array(
                    'choices' => array(
                        'ROLE_USER' => 'User',
                        'ROLE_ADMIN' => 'Admin',
                        'ROLE_SUPER_ADMIN' => 'Super Admin'
                    ),
                    'multiple' => false
                ))
                ->add('_action', null, array(
                    'actions' => array(
                        //'show' => array(),
                        'edit' => array(),
                    // 'delete' => array(),
                    )
                ))
        ;
    }

}
