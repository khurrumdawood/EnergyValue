<?php

namespace VaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sonata\AdminBundle\Admin\Pool;
use Application\Sonata\UserBundle\Entity\Group;

class AdminController extends Controller
{


    /**
     * @Route("/softdelete", name="soft_delete")
     */
    public function softDeleteAction()
    {

    }

    /**
     * @Route("/contract", name="contract_dropdown")
     */
    public function contractAction(Request $request)
    {


        $type = $request->get("code");
        $em = $this->getDoctrine()->getManager();
        $typeData = $em->getRepository('VaultBundle:BaseLookup')->findOneBy(array('code' => $type));
        $totalLookup = $em->getRepository("VaultBundle:Lookup")->getLookupByType($typeData->getId());
        $html = "";
        //$html = "<option value=''> Select Type </option>";
        foreach ($totalLookup as $res) {
            $html .= "<option value=" . $res['id'] . ">" . $res['code'] . "</option>";
        }
        return new Response($html);
    }

    /**
     * @Route("/admin/group/create/{id}",defaults={"id" = 0}, name="admin_group")
     */
    public function createGroupAction($id)
    {


        $group = "";
        if ($id > 0) {
            $em = $this->getDoctrine()->getManager();
            $group = $em->getRepository("ApplicationSonataUserBundle:Group")->findOneBy(array('id' => $id));
        }


        $pool = $this->container->get("sonata.admin.pool");
        $servicesIds = $pool->getAdminServiceIds(); // Get all services

        $removeServices = array('sonata.user.admin.user', 'sonata.user.admin.group'); // remove unwanted services
        $servicesIds = array_diff($servicesIds, $removeServices);

        $roles = $this->getRolesByServices($pool, $servicesIds);
        $modules = $this->filterServices($servicesIds);

        return $this->render('VaultBundle:Admin:group.html.twig', array(
                "modules" => $modules,
                "roles" => $roles,
                "group" => $group,
            )
        );

    }


    /**
     * @Route("/admin/savegroup", name="save_admin_group")
     */
    public function saveGroupAction(Request $request)
    {

        if ($request->getMethod() == 'POST') {

            $data = $request->request->all();
            $em = $this->getDoctrine()->getManager();

            $groupID = trim($data['id']);
            $groupName = trim($data['group_name']);
            $url = $this->generateUrl('admin_group');

            if ($groupID) {  // updating a group

                $group = $em->getRepository("ApplicationSonataUserBundle:Group")->findOneBy(array('id' => $groupID));

                $group->setName($groupName);
                $group->setRoles(array());
                foreach ($data['group_role'] as $role) {
                    $group->addRole($role);
                }

                $em->persist($group);
                $em->flush();
                $this->addFlash(
                    'success',
                    'Your changes were saved! 123'
                );
                $url = $this->generateUrl('admin_group', array('id' => $groupID));
                return $this->redirect($url);


            } else {  // adding new group
                $groups = $em->getRepository("ApplicationSonataUserBundle:Group")->findOneBy(array('name' => $groupName));


                if ($groups) {
                    $this->addFlash(
                        'success',
                        'Group already exist. Choose another name!.'
                    );
                    return $this->redirect($url);
                }

                $group = new Group($groupName);
                $group->setRoles(array());
                foreach ($data['group_role'] as $role) {
                    $group->addRole($role);
                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($group);
                $em->flush();
                $this->addFlash(
                    'success',
                    'Your changes were saved!'
                );
                $url = $this->generateUrl('admin_group', array('id' => $group->getId()));
                return $this->redirect($url);
            }
        }
//        else {
//            $this->addFlash(
//                'success',
//                'Something wrong. Try again later!'
//            );
//            return $this->redirect($url);
//        }

    }

    public function filterServices($servicesIds)
    {

        $modules = array();
        foreach ($servicesIds as $serviceName) {
            $serviceName = str_replace('.', '_', strtoupper($serviceName)); // matching in twig
            $name = str_replace('VAULT_ADMIN_', '', $serviceName);
            $modules[$serviceName] = str_replace('_', ' ', $name);
        }
        return $modules;
    }

    public function getRolesByServices($pool, $servicesIds)
    {

        foreach ($servicesIds as $id) {
            try {
                $admin = $pool->getInstance($id);
            } catch (\Exception $e) {
                continue;
            }

            $isMaster = $admin->isGranted('MASTER');
            $securityHandler = $admin->getSecurityHandler();
            // TODO get the base role from the admin or security handler
            $baseRole = $securityHandler->getBaseRole($admin);

            if (strlen($baseRole) == 0) { // the security handler related to the admin does not provide a valid string
                continue;
            }

            foreach ($admin->getSecurityInformation() as $role => $permissions) {
                $role = sprintf($baseRole, $role);

                if ($isMaster) {
                    // if the user has the MASTER permission, allow to grant access the admin roles to other users
                    $roleArray = explode('_', $role);
                    $count = count($roleArray);
                    $roles[$role] = $roleArray[$count - 1];
                } elseif ($this->authorizationChecker->isGranted($role)) {
                    // although the user has no MASTER permission, allow the currently logged in user to view the role
                    $rolesReadOnly[$role] = $role;
                }
            }
        }
        return $roles;
    }

}
