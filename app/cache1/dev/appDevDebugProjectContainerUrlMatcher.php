<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // soft_delete
        if ($pathinfo === '/softdelete') {
            return array (  '_controller' => 'VaultBundle\\Controller\\AdminController::softDeleteAction',  '_route' => 'soft_delete',);
        }

        // contract_dropdown
        if ($pathinfo === '/contract') {
            return array (  '_controller' => 'VaultBundle\\Controller\\AdminController::contractAction',  '_route' => 'contract_dropdown',);
        }

        // vault_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vault_default_index');
            }

            return array (  '_controller' => 'VaultBundle\\Controller\\DefaultController::indexAction',  '_route' => 'vault_default_index',);
        }

        // vault_default_createmeter
        if ($pathinfo === '/baselookup') {
            return array (  '_controller' => 'VaultBundle\\Controller\\DefaultController::createmeterAction',  '_route' => 'vault_default_createmeter',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // sonata_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'sonata_user_security_login',);
                }

                // sonata_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sonata_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'sonata_user_security_check',);
                }
                not_sonata_user_security_check:

            }

            // sonata_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'sonata_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            if (0 === strpos($pathinfo, '/resetting/re')) {
                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
                }
                not_fos_user_resetting_reset:

                // sonata_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_resetting_request;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'sonata_user_resetting_request',);
                }
                not_sonata_user_resetting_request:

            }

            // sonata_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sonata_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'sonata_user_resetting_send_email',);
            }
            not_sonata_user_resetting_send_email:

            // sonata_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_resetting_check_email',);
            }
            not_sonata_user_resetting_check_email:

            // sonata_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
            }
            not_sonata_user_resetting_reset:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // fos_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'fos_user_profile_edit_authentication',);
                }

                // fos_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            // sonata_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'sonata_user_profile_show',);
            }
            not_sonata_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // sonata_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'sonata_user_profile_edit_authentication',);
                }

                // sonata_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'sonata_user_profile_edit',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            // sonata_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'sonata_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // sonata_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_registration_check_email',);
                }
                not_sonata_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // sonata_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_sonata_user_registration_confirm:

                    // sonata_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'sonata_user_registration_confirmed',);
                    }
                    not_sonata_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/profile/change-password')) {
            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // sonata_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'sonata_user_change_password',);
            }
            not_sonata_user_change_password:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // sonata_user_admin_security_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ($pathinfo === '/admin/login_check') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_sonata_user_admin_security_check;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    }
                    not_sonata_user_admin_security_check:

                }

                // sonata_user_admin_security_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/resetting')) {
                // sonata_user_admin_resetting_request
                if ($pathinfo === '/admin/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_admin_resetting_request;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::requestAction',  '_route' => 'sonata_user_admin_resetting_request',);
                }
                not_sonata_user_admin_resetting_request:

                // sonata_user_admin_resetting_send_email
                if ($pathinfo === '/admin/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sonata_user_admin_resetting_send_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::sendEmailAction',  '_route' => 'sonata_user_admin_resetting_send_email',);
                }
                not_sonata_user_admin_resetting_send_email:

                // sonata_user_admin_resetting_check_email
                if ($pathinfo === '/admin/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_admin_resetting_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::checkEmailAction',  '_route' => 'sonata_user_admin_resetting_check_email',);
                }
                not_sonata_user_admin_resetting_check_email:

                // sonata_user_admin_resetting_reset
                if (0 === strpos($pathinfo, '/admin/resetting/reset') && preg_match('#^/admin/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sonata_user_admin_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_admin_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::resetAction',));
                }
                not_sonata_user_admin_resetting_reset:

            }

            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/vault')) {
                if (0 === strpos($pathinfo, '/admin/vault/baselookup')) {
                    // admin_vault_baselookup_list
                    if ($pathinfo === '/admin/vault/baselookup/list') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'vault.admin.base_lookup',  '_sonata_name' => 'admin_vault_baselookup_list',  '_route' => 'admin_vault_baselookup_list',);
                    }

                    // admin_vault_baselookup_create
                    if ($pathinfo === '/admin/vault/baselookup/create') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'vault.admin.base_lookup',  '_sonata_name' => 'admin_vault_baselookup_create',  '_route' => 'admin_vault_baselookup_create',);
                    }

                    // admin_vault_baselookup_batch
                    if ($pathinfo === '/admin/vault/baselookup/batch') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'vault.admin.base_lookup',  '_sonata_name' => 'admin_vault_baselookup_batch',  '_route' => 'admin_vault_baselookup_batch',);
                    }

                    // admin_vault_baselookup_edit
                    if (preg_match('#^/admin/vault/baselookup/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_baselookup_edit')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'vault.admin.base_lookup',  '_sonata_name' => 'admin_vault_baselookup_edit',));
                    }

                    // admin_vault_baselookup_show
                    if (preg_match('#^/admin/vault/baselookup/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_baselookup_show')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'vault.admin.base_lookup',  '_sonata_name' => 'admin_vault_baselookup_show',));
                    }

                    // admin_vault_baselookup_export
                    if ($pathinfo === '/admin/vault/baselookup/export') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'vault.admin.base_lookup',  '_sonata_name' => 'admin_vault_baselookup_export',  '_route' => 'admin_vault_baselookup_export',);
                    }

                    // admin_vault_baselookup_softDelete
                    if ($pathinfo === '/admin/vault/baselookup/softDelete') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::softDeleteAction',  '_sonata_admin' => 'vault.admin.base_lookup',  '_sonata_name' => 'admin_vault_baselookup_softDelete',  '_route' => 'admin_vault_baselookup_softDelete',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/vault/lookup')) {
                    // admin_vault_lookup_list
                    if ($pathinfo === '/admin/vault/lookup/list') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'vault.admin.lookup',  '_sonata_name' => 'admin_vault_lookup_list',  '_route' => 'admin_vault_lookup_list',);
                    }

                    // admin_vault_lookup_create
                    if ($pathinfo === '/admin/vault/lookup/create') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'vault.admin.lookup',  '_sonata_name' => 'admin_vault_lookup_create',  '_route' => 'admin_vault_lookup_create',);
                    }

                    // admin_vault_lookup_batch
                    if ($pathinfo === '/admin/vault/lookup/batch') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'vault.admin.lookup',  '_sonata_name' => 'admin_vault_lookup_batch',  '_route' => 'admin_vault_lookup_batch',);
                    }

                    // admin_vault_lookup_edit
                    if (preg_match('#^/admin/vault/lookup/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_lookup_edit')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'vault.admin.lookup',  '_sonata_name' => 'admin_vault_lookup_edit',));
                    }

                    // admin_vault_lookup_show
                    if (preg_match('#^/admin/vault/lookup/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_lookup_show')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'vault.admin.lookup',  '_sonata_name' => 'admin_vault_lookup_show',));
                    }

                    // admin_vault_lookup_export
                    if ($pathinfo === '/admin/vault/lookup/export') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'vault.admin.lookup',  '_sonata_name' => 'admin_vault_lookup_export',  '_route' => 'admin_vault_lookup_export',);
                    }

                    // admin_vault_lookup_softDelete
                    if ($pathinfo === '/admin/vault/lookup/softDelete') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::softDeleteAction',  '_sonata_admin' => 'vault.admin.lookup',  '_sonata_name' => 'admin_vault_lookup_softDelete',  '_route' => 'admin_vault_lookup_softDelete',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/vault/profile')) {
                    // admin_vault_profile_list
                    if ($pathinfo === '/admin/vault/profile/list') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'vault.admin.profile',  '_sonata_name' => 'admin_vault_profile_list',  '_route' => 'admin_vault_profile_list',);
                    }

                    // admin_vault_profile_create
                    if ($pathinfo === '/admin/vault/profile/create') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'vault.admin.profile',  '_sonata_name' => 'admin_vault_profile_create',  '_route' => 'admin_vault_profile_create',);
                    }

                    // admin_vault_profile_batch
                    if ($pathinfo === '/admin/vault/profile/batch') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'vault.admin.profile',  '_sonata_name' => 'admin_vault_profile_batch',  '_route' => 'admin_vault_profile_batch',);
                    }

                    // admin_vault_profile_edit
                    if (preg_match('#^/admin/vault/profile/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_profile_edit')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'vault.admin.profile',  '_sonata_name' => 'admin_vault_profile_edit',));
                    }

                    // admin_vault_profile_show
                    if (preg_match('#^/admin/vault/profile/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_profile_show')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'vault.admin.profile',  '_sonata_name' => 'admin_vault_profile_show',));
                    }

                    // admin_vault_profile_export
                    if ($pathinfo === '/admin/vault/profile/export') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'vault.admin.profile',  '_sonata_name' => 'admin_vault_profile_export',  '_route' => 'admin_vault_profile_export',);
                    }

                    // admin_vault_profile_softDelete
                    if ($pathinfo === '/admin/vault/profile/softDelete') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::softDeleteAction',  '_sonata_admin' => 'vault.admin.profile',  '_sonata_name' => 'admin_vault_profile_softDelete',  '_route' => 'admin_vault_profile_softDelete',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/vault/council')) {
                    // admin_vault_council_list
                    if ($pathinfo === '/admin/vault/council/list') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'vault.admin.council',  '_sonata_name' => 'admin_vault_council_list',  '_route' => 'admin_vault_council_list',);
                    }

                    // admin_vault_council_create
                    if ($pathinfo === '/admin/vault/council/create') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'vault.admin.council',  '_sonata_name' => 'admin_vault_council_create',  '_route' => 'admin_vault_council_create',);
                    }

                    // admin_vault_council_batch
                    if ($pathinfo === '/admin/vault/council/batch') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'vault.admin.council',  '_sonata_name' => 'admin_vault_council_batch',  '_route' => 'admin_vault_council_batch',);
                    }

                    // admin_vault_council_edit
                    if (preg_match('#^/admin/vault/council/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_council_edit')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'vault.admin.council',  '_sonata_name' => 'admin_vault_council_edit',));
                    }

                    // admin_vault_council_show
                    if (preg_match('#^/admin/vault/council/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_council_show')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'vault.admin.council',  '_sonata_name' => 'admin_vault_council_show',));
                    }

                    // admin_vault_council_export
                    if ($pathinfo === '/admin/vault/council/export') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'vault.admin.council',  '_sonata_name' => 'admin_vault_council_export',  '_route' => 'admin_vault_council_export',);
                    }

                    // admin_vault_council_softDelete
                    if ($pathinfo === '/admin/vault/council/softDelete') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::softDeleteAction',  '_sonata_admin' => 'vault.admin.council',  '_sonata_name' => 'admin_vault_council_softDelete',  '_route' => 'admin_vault_council_softDelete',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/vault/site')) {
                    // admin_vault_site_list
                    if ($pathinfo === '/admin/vault/site/list') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'vault.admin.site',  '_sonata_name' => 'admin_vault_site_list',  '_route' => 'admin_vault_site_list',);
                    }

                    // admin_vault_site_create
                    if ($pathinfo === '/admin/vault/site/create') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'vault.admin.site',  '_sonata_name' => 'admin_vault_site_create',  '_route' => 'admin_vault_site_create',);
                    }

                    // admin_vault_site_batch
                    if ($pathinfo === '/admin/vault/site/batch') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'vault.admin.site',  '_sonata_name' => 'admin_vault_site_batch',  '_route' => 'admin_vault_site_batch',);
                    }

                    // admin_vault_site_edit
                    if (preg_match('#^/admin/vault/site/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_site_edit')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'vault.admin.site',  '_sonata_name' => 'admin_vault_site_edit',));
                    }

                    // admin_vault_site_show
                    if (preg_match('#^/admin/vault/site/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_site_show')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'vault.admin.site',  '_sonata_name' => 'admin_vault_site_show',));
                    }

                    // admin_vault_site_export
                    if ($pathinfo === '/admin/vault/site/export') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'vault.admin.site',  '_sonata_name' => 'admin_vault_site_export',  '_route' => 'admin_vault_site_export',);
                    }

                    // admin_vault_site_softDelete
                    if ($pathinfo === '/admin/vault/site/softDelete') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::softDeleteAction',  '_sonata_admin' => 'vault.admin.site',  '_sonata_name' => 'admin_vault_site_softDelete',  '_route' => 'admin_vault_site_softDelete',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/vault/contract')) {
                    // admin_vault_contract_list
                    if ($pathinfo === '/admin/vault/contract/list') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'vault.admin.contract',  '_sonata_name' => 'admin_vault_contract_list',  '_route' => 'admin_vault_contract_list',);
                    }

                    // admin_vault_contract_create
                    if ($pathinfo === '/admin/vault/contract/create') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'vault.admin.contract',  '_sonata_name' => 'admin_vault_contract_create',  '_route' => 'admin_vault_contract_create',);
                    }

                    // admin_vault_contract_batch
                    if ($pathinfo === '/admin/vault/contract/batch') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'vault.admin.contract',  '_sonata_name' => 'admin_vault_contract_batch',  '_route' => 'admin_vault_contract_batch',);
                    }

                    // admin_vault_contract_edit
                    if (preg_match('#^/admin/vault/contract/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_contract_edit')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'vault.admin.contract',  '_sonata_name' => 'admin_vault_contract_edit',));
                    }

                    // admin_vault_contract_show
                    if (preg_match('#^/admin/vault/contract/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_contract_show')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'vault.admin.contract',  '_sonata_name' => 'admin_vault_contract_show',));
                    }

                    // admin_vault_contract_export
                    if ($pathinfo === '/admin/vault/contract/export') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'vault.admin.contract',  '_sonata_name' => 'admin_vault_contract_export',  '_route' => 'admin_vault_contract_export',);
                    }

                    // admin_vault_contract_softDelete
                    if ($pathinfo === '/admin/vault/contract/softDelete') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::softDeleteAction',  '_sonata_admin' => 'vault.admin.contract',  '_sonata_name' => 'admin_vault_contract_softDelete',  '_route' => 'admin_vault_contract_softDelete',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/vault/billing')) {
                    // admin_vault_billing_list
                    if ($pathinfo === '/admin/vault/billing/list') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'vault.admin.billing',  '_sonata_name' => 'admin_vault_billing_list',  '_route' => 'admin_vault_billing_list',);
                    }

                    // admin_vault_billing_create
                    if ($pathinfo === '/admin/vault/billing/create') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'vault.admin.billing',  '_sonata_name' => 'admin_vault_billing_create',  '_route' => 'admin_vault_billing_create',);
                    }

                    // admin_vault_billing_batch
                    if ($pathinfo === '/admin/vault/billing/batch') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'vault.admin.billing',  '_sonata_name' => 'admin_vault_billing_batch',  '_route' => 'admin_vault_billing_batch',);
                    }

                    // admin_vault_billing_edit
                    if (preg_match('#^/admin/vault/billing/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_billing_edit')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'vault.admin.billing',  '_sonata_name' => 'admin_vault_billing_edit',));
                    }

                    // admin_vault_billing_show
                    if (preg_match('#^/admin/vault/billing/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_billing_show')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'vault.admin.billing',  '_sonata_name' => 'admin_vault_billing_show',));
                    }

                    // admin_vault_billing_export
                    if ($pathinfo === '/admin/vault/billing/export') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'vault.admin.billing',  '_sonata_name' => 'admin_vault_billing_export',  '_route' => 'admin_vault_billing_export',);
                    }

                    // admin_vault_billing_softDelete
                    if ($pathinfo === '/admin/vault/billing/softDelete') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::softDeleteAction',  '_sonata_admin' => 'vault.admin.billing',  '_sonata_name' => 'admin_vault_billing_softDelete',  '_route' => 'admin_vault_billing_softDelete',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/vault/meter')) {
                    // admin_vault_meter_list
                    if ($pathinfo === '/admin/vault/meter/list') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'vault.admin.meter',  '_sonata_name' => 'admin_vault_meter_list',  '_route' => 'admin_vault_meter_list',);
                    }

                    // admin_vault_meter_create
                    if ($pathinfo === '/admin/vault/meter/create') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'vault.admin.meter',  '_sonata_name' => 'admin_vault_meter_create',  '_route' => 'admin_vault_meter_create',);
                    }

                    // admin_vault_meter_batch
                    if ($pathinfo === '/admin/vault/meter/batch') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'vault.admin.meter',  '_sonata_name' => 'admin_vault_meter_batch',  '_route' => 'admin_vault_meter_batch',);
                    }

                    // admin_vault_meter_edit
                    if (preg_match('#^/admin/vault/meter/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_meter_edit')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'vault.admin.meter',  '_sonata_name' => 'admin_vault_meter_edit',));
                    }

                    // admin_vault_meter_show
                    if (preg_match('#^/admin/vault/meter/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_meter_show')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'vault.admin.meter',  '_sonata_name' => 'admin_vault_meter_show',));
                    }

                    // admin_vault_meter_export
                    if ($pathinfo === '/admin/vault/meter/export') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'vault.admin.meter',  '_sonata_name' => 'admin_vault_meter_export',  '_route' => 'admin_vault_meter_export',);
                    }

                    // admin_vault_meter_softDelete
                    if ($pathinfo === '/admin/vault/meter/softDelete') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::softDeleteAction',  '_sonata_admin' => 'vault.admin.meter',  '_sonata_name' => 'admin_vault_meter_softDelete',  '_route' => 'admin_vault_meter_softDelete',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/vault/billingdetail')) {
                    // admin_vault_billingdetail_list
                    if ($pathinfo === '/admin/vault/billingdetail/list') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'vault.admin.billing_detail',  '_sonata_name' => 'admin_vault_billingdetail_list',  '_route' => 'admin_vault_billingdetail_list',);
                    }

                    // admin_vault_billingdetail_create
                    if ($pathinfo === '/admin/vault/billingdetail/create') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'vault.admin.billing_detail',  '_sonata_name' => 'admin_vault_billingdetail_create',  '_route' => 'admin_vault_billingdetail_create',);
                    }

                    // admin_vault_billingdetail_batch
                    if ($pathinfo === '/admin/vault/billingdetail/batch') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'vault.admin.billing_detail',  '_sonata_name' => 'admin_vault_billingdetail_batch',  '_route' => 'admin_vault_billingdetail_batch',);
                    }

                    // admin_vault_billingdetail_edit
                    if (preg_match('#^/admin/vault/billingdetail/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_billingdetail_edit')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'vault.admin.billing_detail',  '_sonata_name' => 'admin_vault_billingdetail_edit',));
                    }

                    // admin_vault_billingdetail_show
                    if (preg_match('#^/admin/vault/billingdetail/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_billingdetail_show')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'vault.admin.billing_detail',  '_sonata_name' => 'admin_vault_billingdetail_show',));
                    }

                    // admin_vault_billingdetail_export
                    if ($pathinfo === '/admin/vault/billingdetail/export') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'vault.admin.billing_detail',  '_sonata_name' => 'admin_vault_billingdetail_export',  '_route' => 'admin_vault_billingdetail_export',);
                    }

                    // admin_vault_billingdetail_softDelete
                    if ($pathinfo === '/admin/vault/billingdetail/softDelete') {
                        return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::softDeleteAction',  '_sonata_admin' => 'vault.admin.billing_detail',  '_sonata_name' => 'admin_vault_billingdetail_softDelete',  '_route' => 'admin_vault_billingdetail_softDelete',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/vault/con')) {
                    if (0 === strpos($pathinfo, '/admin/vault/consumption')) {
                        // admin_vault_consumption_list
                        if ($pathinfo === '/admin/vault/consumption/list') {
                            return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'vault.admin.consumption',  '_sonata_name' => 'admin_vault_consumption_list',  '_route' => 'admin_vault_consumption_list',);
                        }

                        // admin_vault_consumption_create
                        if ($pathinfo === '/admin/vault/consumption/create') {
                            return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'vault.admin.consumption',  '_sonata_name' => 'admin_vault_consumption_create',  '_route' => 'admin_vault_consumption_create',);
                        }

                        // admin_vault_consumption_batch
                        if ($pathinfo === '/admin/vault/consumption/batch') {
                            return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'vault.admin.consumption',  '_sonata_name' => 'admin_vault_consumption_batch',  '_route' => 'admin_vault_consumption_batch',);
                        }

                        // admin_vault_consumption_edit
                        if (preg_match('#^/admin/vault/consumption/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_consumption_edit')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'vault.admin.consumption',  '_sonata_name' => 'admin_vault_consumption_edit',));
                        }

                        // admin_vault_consumption_show
                        if (preg_match('#^/admin/vault/consumption/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_consumption_show')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'vault.admin.consumption',  '_sonata_name' => 'admin_vault_consumption_show',));
                        }

                        // admin_vault_consumption_export
                        if ($pathinfo === '/admin/vault/consumption/export') {
                            return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'vault.admin.consumption',  '_sonata_name' => 'admin_vault_consumption_export',  '_route' => 'admin_vault_consumption_export',);
                        }

                        // admin_vault_consumption_softDelete
                        if ($pathinfo === '/admin/vault/consumption/softDelete') {
                            return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::softDeleteAction',  '_sonata_admin' => 'vault.admin.consumption',  '_sonata_name' => 'admin_vault_consumption_softDelete',  '_route' => 'admin_vault_consumption_softDelete',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/vault/contractconsumption')) {
                        // admin_vault_contractconsumption_list
                        if ($pathinfo === '/admin/vault/contractconsumption/list') {
                            return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'vault.admin.contract_consumption',  '_sonata_name' => 'admin_vault_contractconsumption_list',  '_route' => 'admin_vault_contractconsumption_list',);
                        }

                        // admin_vault_contractconsumption_create
                        if ($pathinfo === '/admin/vault/contractconsumption/create') {
                            return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'vault.admin.contract_consumption',  '_sonata_name' => 'admin_vault_contractconsumption_create',  '_route' => 'admin_vault_contractconsumption_create',);
                        }

                        // admin_vault_contractconsumption_batch
                        if ($pathinfo === '/admin/vault/contractconsumption/batch') {
                            return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'vault.admin.contract_consumption',  '_sonata_name' => 'admin_vault_contractconsumption_batch',  '_route' => 'admin_vault_contractconsumption_batch',);
                        }

                        // admin_vault_contractconsumption_edit
                        if (preg_match('#^/admin/vault/contractconsumption/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_contractconsumption_edit')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'vault.admin.contract_consumption',  '_sonata_name' => 'admin_vault_contractconsumption_edit',));
                        }

                        // admin_vault_contractconsumption_show
                        if (preg_match('#^/admin/vault/contractconsumption/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vault_contractconsumption_show')), array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'vault.admin.contract_consumption',  '_sonata_name' => 'admin_vault_contractconsumption_show',));
                        }

                        // admin_vault_contractconsumption_export
                        if ($pathinfo === '/admin/vault/contractconsumption/export') {
                            return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'vault.admin.contract_consumption',  '_sonata_name' => 'admin_vault_contractconsumption_export',  '_route' => 'admin_vault_contractconsumption_export',);
                        }

                        // admin_vault_contractconsumption_softDelete
                        if ($pathinfo === '/admin/vault/contractconsumption/softDelete') {
                            return array (  '_controller' => 'VaultBundle\\Controller\\CRUDController::softDeleteAction',  '_sonata_admin' => 'vault.admin.contract_consumption',  '_sonata_name' => 'admin_vault_contractconsumption_softDelete',  '_route' => 'admin_vault_contractconsumption_softDelete',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/sonata/user')) {
                if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                    // admin_sonata_user_user_list
                    if ($pathinfo === '/admin/sonata/user/user/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                    }

                    // admin_sonata_user_user_create
                    if ($pathinfo === '/admin/sonata/user/user/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                    }

                    // admin_sonata_user_user_batch
                    if ($pathinfo === '/admin/sonata/user/user/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                    }

                    // admin_sonata_user_user_edit
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                    }

                    // admin_sonata_user_user_delete
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                    }

                    // admin_sonata_user_user_show
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                    }

                    // admin_sonata_user_user_export
                    if ($pathinfo === '/admin/sonata/user/user/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                    // admin_sonata_user_group_list
                    if ($pathinfo === '/admin/sonata/user/group/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                    }

                    // admin_sonata_user_group_create
                    if ($pathinfo === '/admin/sonata/user/group/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                    }

                    // admin_sonata_user_group_batch
                    if ($pathinfo === '/admin/sonata/user/group/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                    }

                    // admin_sonata_user_group_edit
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                    }

                    // admin_sonata_user_group_delete
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                    }

                    // admin_sonata_user_group_show
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                    }

                    // admin_sonata_user_group_export
                    if ($pathinfo === '/admin/sonata/user/group/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
