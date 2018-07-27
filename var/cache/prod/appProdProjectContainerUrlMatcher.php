<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/api/adherents')) {
            // get_adherent
            if (preg_match('#^/api/adherents/(?P<idAdherent>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_adherent')), array (  '_controller' => 'AppBundle\\Controller\\AdherentController:getAdherentAction',  '_format' => 'json',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_adherent;
                }

                return $ret;
            }
            not_get_adherent:

            // get_adherents
            if (preg_match('#^/api/adherents(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_adherents')), array (  '_controller' => 'AppBundle\\Controller\\AdherentController:getAdherentsAction',  '_format' => 'json',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_adherents;
                }

                return $ret;
            }
            not_get_adherents:

        }

        elseif (0 === strpos($pathinfo, '/api/doc')) {
            // app.swagger_ui
            if ('/api/doc' === $pathinfo) {
                $ret = array (  '_controller' => 'nelmio_api_doc.controller.swagger_ui',  '_route' => 'app.swagger_ui',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_appswagger_ui;
                }

                return $ret;
            }
            not_appswagger_ui:

            // app.swagger
            if ('/api/doc.json' === $pathinfo) {
                $ret = array (  '_controller' => 'nelmio_api_doc.controller.swagger',  '_route' => 'app.swagger',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_appswagger;
                }

                return $ret;
            }
            not_appswagger:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
