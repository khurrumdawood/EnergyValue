<?php
namespace Application\Sonata\UserBundle\Admin\Model;

use Sonata\AdminBundle\Admin\AbstractAdminExtension;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdminExtension extends AbstractAdminExtension
{
    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('parentUser', 'sonata_type_model_list', array('label' => 'Parent', 'btn_add' => false))


    }
}