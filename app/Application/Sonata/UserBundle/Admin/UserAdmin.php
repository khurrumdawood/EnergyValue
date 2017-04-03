<?php
namespace Application\Sonata\UserBundle\Admin;

use Sonata\UserBundle\Admin\Model\UserAdmin as SonataUserAdmin;
use Sonata\AdminBundle\Form\FormMapper;


class UserAdmin extends SonataUserAdmin
{
    // @see https://groups.google.com/forum/#!topic/sonata-users/lLZyA4VBKOY
    protected $formOptions = array(
        'validation_groups' => 'default'
    );

    protected function configureFormFields(FormMapper $formMapper)
    {
        parent::configureFormFields($formMapper);


        $formMapper->removeGroup('Social', 'User');
        $formMapper->removeGroup('Status', 'Security', true);
        $formMapper->removeGroup('Keys', 'Security', true);
        $formMapper->removeGroup('Groups', 'Security', true);
        $formMapper->removeGroup('Roles', 'Security', true);


        $formMapper
            ->tab('User')
            ->with('Profile', array(
                'class' => 'col-md-6',
            ))
            ->add('address', null, array('label' => 'Full Address', 'required' => true))
            ->end()
            ->end();
        $formMapper
            ->tab('User')
            ->with('Select Group', array(
                'class' => 'col-md-6',
            ))
            ->add('groups', null, array('multiple' => false, 'required' => true))
            ->end()
            ->end();


        $formMapper
            ->tab('User')
            ->with('General', array(
                'class' => 'col-md-6',
            ))
            ->add('parentUser', 'sonata_type_model_list', array('label' => 'Parent', 'btn_add' => false))
            ->end()
            ->end();
    }


}