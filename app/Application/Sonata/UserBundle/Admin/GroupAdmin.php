<?php
/**
 * Author: Saif ur Rehman
 */
namespace Application\Sonata\UserBundle\Admin;


use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\UserBundle\Admin\Model\GroupAdmin as BaseGroupAdmin;

class GroupAdmin extends BaseGroupAdmin
{


    // @see https://groups.google.com/forum/#!topic/sonata-users/lLZyA4VBKOY
    protected $formOptions = array(
        'validation_groups' => 'default'
    );

    protected function configureFormFields(FormMapper $formMapper)
    {
        parent::configureFormFields($formMapper);


        $formMapper->removeGroup('Roles', 'Security', true);

        $formMapper->add('roles', 'sonata_security_roles', array(
            'expanded' => true,
            'multiple' => true,
            'required' => true,

        ));
    }


    protected function configureListFields(ListMapper $listMapper)
    {
        parent::configureListFields($listMapper); // TODO: Change the autogenerated stub

        $listMapper->remove('name');
        $listMapper->remove('roles');
        $listMapper->add('name', 'text');
        $listMapper->add('_action', 'actions', array(
            'actions' => array(
                'edit_custom' => array(
                    'template' => 'ApplicationSonataUserBundle:CRUD:group_edit_link.html.twig',
                    //'label' => 'Actions'
                ),
            )
        ));


    }

    protected function configureRoutes(RouteCollection $collection)
    {
        parent::configureRoutes($collection);
        //$collection->remove('create');
        $collection->remove('delete');
        $collection->remove('edit');

    }

    public function configureActionButtons($action, $object = null)
    {
        $list = parent::configureActionButtons($action, $object);
        $list['custom_action'] = array(
            'template' => 'ApplicationSonataUserBundle:CRUD:group_add_link.html.twig',
        );

        return $list;
    }
}