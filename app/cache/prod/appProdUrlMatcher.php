<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'Vbv\\PistatsBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Vbv\\PistatsBundle\\Controller\\UserController::showAction',));
            }

            // user_new
            if ($pathinfo === '/user/new') {
                return array (  '_controller' => 'Vbv\\PistatsBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'Vbv\\PistatsBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Vbv\\PistatsBundle\\Controller\\UserController::editAction',));
            }

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'Vbv\\PistatsBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Vbv\\PistatsBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

            // user_get_data
            if ($pathinfo === '/user/get-data') {
                return array (  '_controller' => 'Vbv\\PistatsBundle\\Controller\\UserController::getUserDataAction',  '_route' => 'user_get_data',);
            }

            // user_set_data
            if ($pathinfo === '/user/set-data') {
                return array (  '_controller' => 'Vbv\\PistatsBundle\\Controller\\UserController::setUserDataAction',  '_route' => 'user_set_data',);
            }

        }

        // vbv_pistats_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vbv_pistats_homepage');
            }

            return array (  '_controller' => 'Vbv\\PistatsBundle\\Controller\\MainController::indexAction',  '_route' => 'vbv_pistats_homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Vbv\\PistatsBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // modal_user_admin
        if ($pathinfo === '/modal/user-admin') {
            return array (  '_controller' => 'Vbv\\PistatsBundle\\Controller\\MainController::modalUserAdminAction',  '_route' => 'modal_user_admin',);
        }

        // get_temperatures
        if ($pathinfo === '/get-temperatures') {
            return array (  '_controller' => 'Vbv\\PistatsBundle\\Controller\\MainController::getTemperaturesAction',  '_route' => 'get_temperatures',);
        }

        // notify_temperature_alert
        if ($pathinfo === '/notify-temperature-alert') {
            return array (  '_controller' => 'Vbv\\PistatsBundle\\Controller\\MainController::notifyTemperatureAlertAction',  '_route' => 'notify_temperature_alert',);
        }

        // config_modal
        if ($pathinfo === '/config-modal') {
            return array (  '_controller' => 'Vbv\\PistatsBundle\\Controller\\MainController::configModalAction',  '_route' => 'config_modal',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
